<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section class="uk-section uk-section-screen uk-section-single uk-jewelrys uk-jewelrys-detail" data-src="upload/template/screen-about.jpg" data-uk-img data-uk-parallax="bgy: 250">
    <div class="uk-container uk-container-center">
        <div class="uk-grid uk-grid-medium uk-width-1-1 uk-flex uk-flex-top" data-uk-grid>
            <div class="uk-width-1-2@m">
                <div class="uk-grid uk-grid-medium uk-flex uk-flex-middle" data-uk-grid>
                    <div class="uk-width-1-1@m">
                        <script src="https://yastatic.net/share2/share.js"></script>
                        <?$ElementID = $APPLICATION->IncludeComponent(
                            "bitrix:news.detail",
                            "",
                            [
                                "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
                                "DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
                                "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
                                "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
                                "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                                "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                                "FIELD_CODE" => $arParams["DETAIL_FIELD_CODE"],
                                "PROPERTY_CODE" => $arParams["DETAIL_PROPERTY_CODE"],
                                "DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
                                "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
                                "META_KEYWORDS" => $arParams["META_KEYWORDS"],
                                "META_DESCRIPTION" => $arParams["META_DESCRIPTION"],
                                "BROWSER_TITLE" => $arParams["BROWSER_TITLE"],
                                "SET_CANONICAL_URL" => $arParams["DETAIL_SET_CANONICAL_URL"],
                                "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
                                "SET_TITLE" => $arParams["SET_TITLE"],
                                "MESSAGE_404" => $arParams["MESSAGE_404"],
                                "SET_STATUS_404" => $arParams["SET_STATUS_404"],
                                "SHOW_404" => $arParams["SHOW_404"],
                                "FILE_404" => $arParams["FILE_404"],
                                "INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
                                "ADD_SECTIONS_CHAIN" => $arParams["ADD_SECTIONS_CHAIN"],
                                "ACTIVE_DATE_FORMAT" => $arParams["DETAIL_ACTIVE_DATE_FORMAT"],
                                "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                                "CACHE_TIME" => $arParams["CACHE_TIME"],
                                "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                                "USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
                                "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
                                "DISPLAY_TOP_PAGER" => $arParams["DETAIL_DISPLAY_TOP_PAGER"],
                                "DISPLAY_BOTTOM_PAGER" => $arParams["DETAIL_DISPLAY_BOTTOM_PAGER"],
                                "PAGER_TITLE" => $arParams["DETAIL_PAGER_TITLE"],
                                "PAGER_SHOW_ALWAYS" => "N",
                                "PAGER_TEMPLATE" => $arParams["DETAIL_PAGER_TEMPLATE"],
                                "PAGER_SHOW_ALL" => $arParams["DETAIL_PAGER_SHOW_ALL"],
                                "CHECK_DATES" => $arParams["CHECK_DATES"],
                                "ELEMENT_ID" => $arResult["VARIABLES"]["ELEMENT_ID"],
                                "ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
                                "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
                                "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
                                "IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
                                "USE_SHARE" => $arParams["USE_SHARE"],
                                "SHARE_HIDE" => $arParams["SHARE_HIDE"],
                                "SHARE_TEMPLATE" => $arParams["SHARE_TEMPLATE"],
                                "SHARE_HANDLERS" => $arParams["SHARE_HANDLERS"],
                                "SHARE_SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
                                "SHARE_SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
                                "ADD_ELEMENT_CHAIN" => $arParams["ADD_ELEMENT_CHAIN"],
                                'STRICT_SECTION_CHECK' => $arParams['STRICT_SECTION_CHECK'],
                            ],
                            $component,
                            ['HIDE_ICONS' => 'Y']
                        );?>

<?
    function getIdByCode($code, $iblock_id, $type)
    {
        if(CModule::IncludeModule("iblock"))
        {
            if($type == 'IBLOCK_ELEMENT')
            {
                $arFilter = array("IBLOCK_ID"=>$iblock_id, "CODE" => $code);
                $res = CIBlockElement::GetList(array(), $arFilter, false, array("nPageSize"=>1), array('ID'));
                $element = $res->Fetch();
                if($res->SelectedRowsCount() != 1) return '<p style="font-weight:bold;color:#ff0000">Элемент не найден</p>';
                else return $element['ID'];
            }
            else if($type == 'IBLOCK_SECTION')
            {
                $res = CIBlockSection::GetList(array(), array('IBLOCK_ID' => $iblock_id, 'CODE' => $code));
                $section = $res->Fetch();
                if($res->SelectedRowsCount() != 1) return '<p style="font-weight:bold;color:#ff0000">Раздел не найден</p>';
                else return $section['ID'];
            }
            else
            {
                echo '<p style="font-weight:bold;color:#ff0000">Укажите тип</p>';
                return;
            }
        }
    }
?>
<div class="uk-container uk-container-center">
    <div class="uk-grid" data-uk-grid>
        <?if(count($_SESSION['VIEWED']) >= 2):?>
            <div class="uk-width-1-3@m">
                <section class="uk-section uk-section-viewed">
                    <div class="uk-hr uk-top">
                        <span class="uk-symbol" data-src="/local/templates/swebix/images/loader.svg" data-uk-img></span>
                    </div>

                    <h2 class="uk-title-block uk-text-left@m uk-text-center@xs">История просмотров</h2>
                    <?
                    global $viewFilter;
                    $viewFilter = array(
                        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                        "ACTIVE" => "Y",
                        array(
                            "LOGIC" => "AND",
                            "!ID" => getIdByCode($arResult["VARIABLES"]["ELEMENT_CODE"], 1, "IBLOCK_ELEMENT"),
                            "ID" => $_SESSION['VIEWED'],
                        )
                    );
                    ?>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "slider",
                        Array(
                            "LINE_COUNT" => 1,
                            "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                            "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                            "NEWS_COUNT" => $arParams["NEWS_COUNT"],

                            //"SORT_BY1" => $arParams["SORT_BY1"],
                            //"SORT_ORDER1" => $arParams["SORT_ORDER1"],
                            //"SORT_BY2" => $arParams["SORT_BY2"],
                            //"SORT_ORDER2" => $arParams["SORT_ORDER2"],

                            "SORT_BY1" => $arParams["SORT_BY1"],
                            "SORT_ORDER1" => $arParams["SORT_ORDER1"],
                            //"SORT_BY2" => $arParams["SORT_BY2"],
                            //"SORT_ORDER2" => $arParams["SORT_ORDER2"],

                            "FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
                            "PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
                            "DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
                            "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
                            "IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
                            "DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
                            "SET_TITLE" => $arParams["SET_TITLE"],
                            "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
                            "MESSAGE_404" => $arParams["MESSAGE_404"],
                            "SET_STATUS_404" => $arParams["SET_STATUS_404"],
                            "SHOW_404" => $arParams["SHOW_404"],
                            "FILE_404" => $arParams["FILE_404"],
                            "INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
                            "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                            "CACHE_TIME" => $arParams["CACHE_TIME"],
                            "CACHE_FILTER" => $arParams["CACHE_FILTER"],
                            "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                            "DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
                            "DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
                            "PAGER_TITLE" => $arParams["PAGER_TITLE"],
                            "PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
                            "PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
                            "PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
                            "PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
                            "PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
                            "PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
                            "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
                            "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
                            "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
                            "PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
                            "ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
                            "USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
                            "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
                            "FILTER_NAME" => "viewFilter",
                            "HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
                            "CHECK_DATES" => $arParams["CHECK_DATES"],
                        ),
                        $component
                    );?>
                    <div class="uk-hr uk-bottom">
                        <span class="uk-symbol" data-src="/local/templates/swebix/images/loader.svg" data-uk-img></span>
                    </div>
                </section>
            </div>
        <?endif;?>
        <?
            $productsArray = array();
            $produtcsResult = CIBlockElement::GetProperty(1, getIdByCode($arResult["VARIABLES"]["ELEMENT_CODE"], 1, "IBLOCK_ELEMENT"), "sort", "asc", array("CODE" => "ELEMENT_ID"));
            while ($element = $produtcsResult->GetNext())
            {
                $productsArray[] = $element['VALUE'];
            }
        ?>
        <?if(!empty($productsArray[0])):?>
            <?
            global $productsFilter;
            $productsFilter = array(
                "ACTIVE" => "Y",
                "ID" => $productsArray
            );
            ?>
            <div class="uk-width-2-3@m">
                <section class="uk-section uk-section-viewed">
                    <div class="uk-hr uk-top">
                        <span class="uk-symbol" data-src="/local/templates/swebix/images/loader.svg" data-uk-img></span>
                    </div>
                    <h2 class="uk-title-block uk-text-left@m uk-text-center@xs">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => SITE_TEMPLATE_PATH . "/include/content/JewelryRecomendTitle.php"
                            )
                        );?>
                    </h2>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "slider",
                        Array(
                            "LINE_COUNT" => 2,
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "N",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "DISPLAY_DATE" => "N",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array("", ""),
                            "FILTER_NAME" => "productsFilter",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "1",
                            "IBLOCK_TYPE" => "catalog",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "N",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "3",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => "round",
                            "PAGER_TITLE" => "Украшения",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array("AMBASSADOR", "AMBASSADOR_TEXT", "AMBASSADOR_COLOR", "AMBASSADOR_BG", "INSERT", "MATERIAL", "CML2_ARTICLE", "CUTTING", "COVERAGE", "SAMPLE", "OFFER", "MORE_PHOTO", ""),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "N",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "DESC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N"
                        )
                    );?>
                    <div class="uk-hr uk-bottom">
                        <span class="uk-symbol" data-src="/local/templates/swebix/images/loader.svg" data-uk-img></span>
                    </div>
                </section>
            </div>
        <?endif;?>
    </div>
</div>




<?/*
<script>
	BX.addCustomEvent('onAjaxSuccess', function(){
		var products = document.getElementById("products");
		var product = document.getElementById("product");
		products.appendChild(product);
	});
	BX.ready(function(){
		var products = document.getElementById("products");
		var product = document.getElementById("product");
		products.appendChild(product);
	});
</script>
*/?>

<section class="uk-section uk-section-ambassador uk-section-ambassador-slider">
    <?
    global $arrAmbassadorFilter;
    $arrAmbassadorFilter = array(
        "ACTIVE" => "Y",
        "!ID" => getIdByCode($arResult["VARIABLES"]["ELEMENT_CODE"], 1, "IBLOCK_ELEMENT"),
        array( 
            "LOGIC" => "AND", 
                array("!PROPERTY_13_VALUE" => false,), 
                array("!PROPERTY_12_VALUE" => false,), 
                array("PROPERTY_11_VALUE" => "Y",), 
                array("!PROPERTY_10_VALUE" => false,), 
                array("!PROPERTY_9_VALUE" => false,), 
        ),
        "SECTION_ACTIVE" => "Y",
    );
    ?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "ambassador-slider",
        Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "N",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array("", ""),
            "FILTER_NAME" => "arrAmbassadorFilter",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "1",
            "IBLOCK_TYPE" => "catalog",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "INCLUDE_SUBSECTIONS" => "N",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "3",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => "round",
            "PAGER_TITLE" => "Украшения",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" => array("AMBASSADOR", "AMBASSADOR_TEXT", "AMBASSADOR_COLOR", "AMBASSADOR_BG", "INSERT", "MATERIAL", "CML2_ARTICLE", "CUTTING", "COVERAGE", "SAMPLE", "OFFER", "MORE_PHOTO", ""),
            "SET_BROWSER_TITLE" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N"
        )
    );?>
</section>
<section id="order" class="uk-section uk-section-order">
    <div class="uk-container uk-container-center">
        <div class="uk-panel">
            <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => SITE_TEMPLATE_PATH . "/include/layout/callback.php"
            )
            );?>
        </div>
    </div>
</section>