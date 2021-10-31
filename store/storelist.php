<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config/Initialize.php';

$section = [];
$url = MARJORIE_URL . '/store/storelist.php?';
$url .= http_build_query($_GET);
$response = curl($url);

if ($response) {
    preg_match("/<div class=\"nav-menu ml-auto\">(.*?)<div class=\"nav-icons\">/s", $response, $matchTitle);
	$titleList = $matchTitle[1];
	$titleList = str_replace("</div>", '', $titleList);

    preg_match("/<section id=\"shop-item\" class=\"ptb ptb-sm-80\">(.*?)<\/section>/s", $response, $match);

    preg_match_all("/<a class=\"shop-item\" href=\"(.*?)\"/", $match[0], $matchItemUrl);
	$itemUrl = removeQuote($matchItemUrl[1]);
	$itemUrl = changeUrlAll($itemUrl);

    preg_match_all("/<a class=\"shop-item\"(.*?)<\/a>/s", $match[0], $matchShopItem);
    $itemImgs = changeUrlOne($matchShopItem[0]);

    preg_match_all("/<h6 class=\"shop-item-name\">(.*?)<\/h6>/", $match[0], $matchItemName);
	$itemName = removeQuote($matchItemName[1]);

    preg_match_all("/<span>(.*?)<\/span>/", $match[0], $matchItemPrice);
	$itemPrice = removeQuote($matchItemPrice[1]);

    if ($itemUrl) {
        foreach ($itemUrl as $k => $url) {
            $imgs = $itemImgs[$k];
            $name = $itemName[$k];
            $price = $itemPrice[$k];

			$section[] = [
				'url' => $url,
                'imgs' => $imgs,
                'name' => $name,
                'price' => $price,
			];
        }
    }

    preg_match("/<!-- Pagination Nav -->(.*?)<!-- End Pagination Nav -->/s", $response, $matchPage);
    $page = $matchPage[1];
}

$tpl->assign("titleList", $titleList);
$tpl->assign("section", $section);
$tpl->assign("page", $page);
smartyDisplay($tpl, '/store/storelist.tpl.html');