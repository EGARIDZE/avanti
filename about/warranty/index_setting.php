<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
	$GLOBALS['main'] = "uk-page-content"; // Add class «Workarea»
	$GLOBALS['header'] = "transparent";
	$container = true; // Add wrraper «Workarea»
	if ($container) {
		$GLOBALS['start_container'] = "<div class=\"uk-container uk-container-center uk-container-small\"><div class=\"uk-content\">";
		$GLOBALS['end_container'] = "</div></div>";
	}
?>