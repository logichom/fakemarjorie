<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config/Initialize.php';

$section = [];
$url = MARJORIE_URL;
$response = curl($url);

if ($response) {
	preg_match("/<div class=\"nav-menu ml-auto\">(.*?)<div class=\"nav-icons\">/s", $response, $matchTitle);
	$titleList = $matchTitle[1];
	$titleList = str_replace("</div>", '', $titleList);

    preg_match("/<div id=\"fullpage\">(.*?)CONTENT/s", $response, $match);

	preg_match_all("/data-url=\"(.*?)\"/", $match[0], $matchDataUrl);
	$dataUrl = removeQuote($matchDataUrl[1]);
	$dataUrl = changeUrlAll($dataUrl);

	preg_match_all("/srcset=\"(.*?)\"/", $match[0], $matchImgSmall);
	$imgSmall = removeQuote($matchImgSmall[1]);

	preg_match_all("/<img src=\"(.*?)\"/", $match[0], $matchImgLarge);
	$imgLarge = removeQuote($matchImgLarge[1]);
    
	if ($dataUrl) {
		foreach ($dataUrl as $k => $url) {
			$source = isset($imgSmall[$k]) ? $imgSmall[$k] : '';
			$img = isset($imgLarge[$k]) ? $imgLarge[$k] : '';
			
			$section[] = [
				'url' => $url,
				'source' => $source,
				'img' => $img,
			];
		}
	}
}

$tpl->assign("titleList", $titleList);
$tpl->assign("section", $section);
smartyDisplay($tpl, '/index.tpl.html');