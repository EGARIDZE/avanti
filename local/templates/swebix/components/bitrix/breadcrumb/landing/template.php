<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()
$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++) { $title = $arResult[$index]["TITLE"] /*$title = htmlspecialcharsex($arResult[$index]["TITLE"])*/;}

if($itemSize <=3){$flex = "no-before";}
$strReturn .= '
<div class="uk-grid uk-grid-small uk-child-width-1-1@m uk-flex uk-flex-middle" data-uk-grid>
<div class="uk-flex uk-flex-left@m uk-flex-left@xs" data-uk-slider="finite: true">
<div class="uk-position-relative ' . $flex . '">
<ul class="bx-breadcrumb uk-slider-items uk-flex uk-flex-left@m uk-flex-center@xs" itemprop="http://schema.org/breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
';

//$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	//$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$title = $arResult[$index]["TITLE"];
	$arrow = ($index > 0? '<span data-uk-icon="icon: arrow-right; ratio: 0.5"></span>' : '');

	
	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		if ($arResult[$index]["LINK"] == "/") {
			$strReturn .= '
				<li class="bx-breadcrumb-item" id="bx_breadcrumb_'.$index.'" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					'.$arrow.'
					<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="url">
						<span class="uk-icon-home" data-uk-icon="icon: home; ratio: 0.8" data-uk-tooltip="title: Вернуться на главную; pos: bottom"></span>
					</a>
					<meta itemprop="position" content="'.($index + 1).'" />
				</li>'; 
		} else {
			$strReturn .= '
				<li class="bx-breadcrumb-item" id="bx_breadcrumb_'.$index.'" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					'.$arrow.'
					<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="url">
						<span itemprop="name">'.$title.'</span>
					</a>
					<meta itemprop="position" content="'.($index + 1).'" />
				</li>'; 
		}
	}
	else
	{
		$strReturn .= '';
		    $strReturn .= '
			<li class="bx-breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				'.$arrow.'
				<span itemprop="name">'.$title.'</span>
				<meta itemprop="position" content="'.($index + 1).'" />
			</li>';
	}
}

$strReturn .= '
</ul>
</div>
</div>
</div>
';

return $strReturn;

