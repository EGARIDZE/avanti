<?
if($_SESSION['VIEWED']) {
	if(in_array($arResult['ID'], $_SESSION['VIEWED'])) {

	} else {
		$_SESSION['VIEWED'][] = $arResult['ID'];
	}
} else {
	$_SESSION['VIEWED'][] = $arResult['ID'];
}
?>