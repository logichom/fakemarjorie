<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config/Initialize.php';

$url = MARJORIE_URL . '/store/storesingle.php?';
$url .= http_build_query($_GET);
$response = curl($url);

if ($response) {
    preg_match("/<div class=\"nav-menu ml-auto\">(.*?)<div class=\"nav-icons\">/s", $response, $matchTitle);
	$titleList = $matchTitle[1];
	$titleList = str_replace("</div>", '', $titleList);

    preg_match("/<section id=\"shop-item\" class=\"ptb ptb-sm-80\">(.*?)<\/section>/s", $response, $match);
    
    preg_match("/<div class=\"sp-wrap\">(.*?)<\/div>/s", $match[0], $matchItemImg);
    $itemImgList = $matchItemImg[1];

    preg_match("/<h4>(.*?)<\/h4>/", $match[0], $itemTitle);
    $itemTitle = $itemTitle[1];

    preg_match("/<div class=\"shop-item-price mtb-15 ptb-15\">(.*?)<\/div>/s", $match[0], $itemPrice);
    $itemPriceList = $itemPrice[1];

    preg_match("/<ul class=\"project-detail-block ptb-15\">(.*?)<\/ul>/s", $match[0], $itemDetail);
    $itemDetailList = $itemDetail[1];

    preg_match_all("/class=\"table table-bordered table-sm table-hover table-responsive\">(.*?)<\/table>/s", $match[0], $itemInfo);
    $itemInfoList = $itemInfo[1][0];
    $itemInfoListTry = $itemInfo[1][1];
    unset($itemInfo[1][0], $itemInfo[1][1]);
    $itemInfoListModel = $itemInfo[1];
}

$tpl->assign("titleList", $titleList);
$tpl->assign("itemImgList", $itemImgList);
$tpl->assign("itemTitle", $itemTitle);
$tpl->assign("itemPriceList", $itemPriceList);
$tpl->assign("itemDetailList", $itemDetailList);
$tpl->assign("itemInfoList", $itemInfoList);
$tpl->assign("itemInfoListTry", $itemInfoListTry);
$tpl->assign("itemInfoListModel", $itemInfoListModel);
smartyDisplay($tpl, '/store/storesingle.tpl.html');