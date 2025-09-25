<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $USER;
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(99112837, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/99112837" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

    <?//$APPLICATION->ShowHead();?>
    <meta charset="<?=SITE_CHARSET?>">
    <title><?$APPLICATION->ShowTitle()?></title>
    <?$APPLICATION->ShowMeta("robots", false, false);?>
    <?$APPLICATION->ShowMeta("keywords", false, false);?>
    <?$APPLICATION->ShowMeta("description", false, false);?>
    <?$APPLICATION->ShowLink("canonical", null, false);?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="msapplication-TileColor" content="#5bbad5">
    <meta name='theme-color' content='#5bbad5'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
	<meta name="format-detection" content="telephone=no">
	<meta name="format-detection" content="address=no">
    <? /* Component: Icon ====================================================*/ ?>
    <link rel="icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/icon/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/icon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/icon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/icon/favicon-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" type="image/png" sizes="57x57" href="<?=SITE_TEMPLATE_PATH?>/icon/favicon-57x57.png">
    <link rel="apple-touch-icon" type="image/png" sizes="60x60" href="<?=SITE_TEMPLATE_PATH?>/icon/favicon-60x60.png">
    <link rel="apple-touch-icon" type="image/png" sizes="72x72" href="<?=SITE_TEMPLATE_PATH?>/icon/favicon-72x72.png">
    <link rel="apple-touch-icon" type="image/png" sizes="76x76" href="<?=SITE_TEMPLATE_PATH?>/icon/favicon-76x76.png">
    <link rel="apple-touch-icon" type="image/png" sizes="114x114" href="<?=SITE_TEMPLATE_PATH?>/icon/favicon-114x114.png">
    <link rel="apple-touch-icon" type="image/png" sizes="120x120" href="<?=SITE_TEMPLATE_PATH?>/icon/favicon-120x120.png">
    <link rel="apple-touch-icon" type="image/png" sizes="144x144" href="<?=SITE_TEMPLATE_PATH?>/icon/favicon-144x144.png">
    <link rel="apple-touch-icon" type="image/png" sizes="152x152" href="<?=SITE_TEMPLATE_PATH?>/icon/favicon-152x152.png">
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="<?=SITE_TEMPLATE_PATH?>/icon/favicon-180x180.png">
    <link rel="apple-touch-icon" type="image/png" sizes="192x192" href="<?=SITE_TEMPLATE_PATH?>/icon/favicon-192x192.png">
    <meta name="msapplication-square70x70logo" content="<?=SITE_TEMPLATE_PATH?>/icon/favicon-70x70.png">
    <meta name="msapplication-square150x150logo" content="<?=SITE_TEMPLATE_PATH?>/icon/favicon-150x150.png">
    <meta name="msapplication-square310x310logo" content="<?=SITE_TEMPLATE_PATH?>/icon/favicon-310x310.png">
    <? /* Component: Icon ====================================================*/ ?>
    <? /* Component: Preload ====================================================*/ ?>
    <link rel="preload" href="<?=SITE_TEMPLATE_PATH?>/fonts/Tenor/TenorSans-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous" />
    <?/*
    <link rel="preload" href="<?=SITE_TEMPLATE_PATH?>/fonts/Marmelad/Marmelad-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous" />
    <link rel="preload" href="<?=SITE_TEMPLATE_PATH?>/fonts/SuisseIntl/SuisseIntl-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous" />
    <link rel="preload" href="<?=SITE_TEMPLATE_PATH?>/fonts/SuisseIntl/SuisseIntl-Medium.woff2" as="font" type="font/woff2" crossorigin="anonymous" />
    <link rel="preload" href="<?=SITE_TEMPLATE_PATH?>/fonts/SuisseIntl/SuisseIntl-Bold.woff2" as="font" type="font/woff2" crossorigin="anonymous" />
    */?>
    <? /* Component: Preload ====================================================*/ ?>
    <? /* Component: Open Graph ====================================================*/ ?>
    <meta property="og:locale" content="ru_RU"/>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="Ювелирный дом Avanti Jewellery"/>
    <meta property="og:url" content="<?=$_SERVER["REQUEST_SCHEME"]?>://<?=$_SERVER["HTTP_HOST"];?>/">
    <meta property="og:title" content="Ювелирный дом Avanti Jewellery">
    <meta property="og:description" content="Авторские ювелирные изделия.">
    <meta property="og:image" content="<?=$_SERVER["REQUEST_SCHEME"]?>://<?=$_SERVER["HTTP_HOST"];?><?=SITE_TEMPLATE_PATH?>/images/ogimage.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <? /* Component: Open Graph ====================================================*/ ?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/css.min.css");?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/font.css");?>
    <?$APPLICATION->ShowCSS(true, false);?>
    <?$APPLICATION->ShowHeadStrings();?>
    <?//$APPLICATION->ShowHeadScripts();?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/js.min.js");?>
    <?$APPLICATION->ShowHeadScripts();?>
</head>
<body id="body" onload="load();">
    <?if($USER->IsAdmin()):?>
        <div id="panel">
            <? Bitrix\Main\Page\Frame::getInstance()->startDynamicWithID("panel");?>
                <?$APPLICATION->ShowPanel();?>
            <? Bitrix\Main\Page\Frame::getInstance()->finishDynamicWithID("panel", "");?>
        </div>
    <?endif;?>
    <? /* Ajax ====================================================*/ ?>
    <div id="win8_wrapper">
		<div class="windows8">
			<div class="wBall" id="wBall_1">
				<div class="wInnerBall"></div>
			</div>
			<div class="wBall" id="wBall_2">
				<div class="wInnerBall"></div>
			</div>
			<div class="wBall" id="wBall_3">
				<div class="wInnerBall"></div>
			</div>
			<div class="wBall" id="wBall_4">
				<div class="wInnerBall"></div>
			</div>
			<div class="wBall" id="wBall_5">
				<div class="wInnerBall"></div>
			</div>
		</div>
	</div>
    <? /* Ajax ====================================================*/ ?>
    <style>
        /* ========================================================================
        Component: Ajax
        ========================================================================== */
        #win8_wrapper {
            display: flex;
            -webkit-backdrop-filter: blur(20px) opacity(1);
            backdrop-filter: blur(20px) opacity(1);
            background-color: rgba(255 255 255 / 10%);
            height: 100%;
            opacity: 1;
            position: fixed;
            width: 100%;
            z-index: 1100;
            top: 0;
            left: 0;
            -webkit-transition: all .55s ease-in-out;
            -o-transition: all .55s ease-in-out;
            transition: all .55s ease-in-out
        }
        .windows8,
        .windows8 .wBall {
            height: 80px;
            width: 80px;
            position: absolute;
            top: 0
        }
        .windows8 {
            background: url('<?=SITE_TEMPLATE_PATH?>/images/loader.svg') 50% 50% no-repeat;
            background-size: 40px;
            margin: auto;
            left: 0;
            bottom: 0;
            right: 0
        }
        .windows8 .wBall {
            left: calc(50% - 40px);
            opacity: 0;
            transform: rotate(225deg);
            -o-transform: rotate(225deg);
            -ms-transform: rotate(225deg);
            -webkit-transform: rotate(225deg);
            -moz-transform: rotate(225deg);
            animation: orbit 3.3225s infinite;
            -o-animation: orbit 3.3225s infinite;
            -ms-animation: orbit 3.3225s infinite;
            -webkit-animation: orbit 3.3225s infinite;
            -moz-animation: orbit 3.3225s infinite
        }
        .windows8 .wBall .wInnerBall {
            position: absolute;
            width: 10px;
            height: 10px;
            background: rgba(var(--base-transparent) / 100%);
            left: 0;
            top: 0;
            border-radius: 100%;
            -o-border-radius: 100%;
            -ms-border-radius: 100%;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
        }
        .windows8 #wBall_1 {
            animation-delay: 726ms;
            -o-animation-delay: 726ms;
            -ms-animation-delay: 726ms;
            -webkit-animation-delay: 726ms;
            -moz-animation-delay: 726ms
        }
        .windows8 #wBall_2 {
            animation-delay: 143ms;
            -o-animation-delay: 143ms;
            -ms-animation-delay: 143ms;
            -webkit-animation-delay: 143ms;
            -moz-animation-delay: 143ms
        }
        .windows8 #wBall_3 {
            animation-delay: .2865s;
            -o-animation-delay: .2865s;
            -ms-animation-delay: .2865s;
            -webkit-animation-delay: .2865s;
            -moz-animation-delay: .2865s
        }
        .windows8 #wBall_4 {
            animation-delay: .4295s;
            -o-animation-delay: .4295s;
            -ms-animation-delay: .4295s;
            -webkit-animation-delay: .4295s;
            -moz-animation-delay: .4295s
        }
        .windows8 #wBall_5 {
            animation-delay: 583ms;
            -o-animation-delay: 583ms;
            -ms-animation-delay: 583ms;
            -webkit-animation-delay: 583ms;
            -moz-animation-delay: 583ms
        }
        @keyframes orbit {
            0% {
                opacity: 1;
                z-index: 99;
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out
            }
            7% {
                opacity: 1;
                -webkit-transform: rotate(300deg);
                transform: rotate(300deg);
                -webkit-animation-timing-function: linear;
                animation-timing-function: linear;
                origin: 0
            }
            30% {
                opacity: 1;
                -webkit-transform: rotate(410deg);
                transform: rotate(410deg);
                -webkit-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out;
                origin: 7%
            }
            39% {
                opacity: 1;
                -webkit-transform: rotate(645deg);
                transform: rotate(645deg);
                -webkit-animation-timing-function: linear;
                animation-timing-function: linear;
                origin: 30%
            }
            70% {
                opacity: 1;
                -webkit-transform: rotate(770deg);
                transform: rotate(770deg);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
                origin: 39%
            }
            75% {
                opacity: 1;
                -webkit-transform: rotate(900deg);
                transform: rotate(900deg);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
                origin: 70%
            }
            100%,
            76% {
                opacity: 0;
                -webkit-transform: rotate(900deg);
                transform: rotate(900deg)
            }
        }
        @-webkit-keyframes orbit {
            0% {
                opacity: 1;
                z-index: 99;
                -webkit-transform: rotate(180deg);
                -webkit-animation-timing-function: ease-out
            }
            7% {
                opacity: 1;
                -webkit-transform: rotate(300deg);
                -webkit-animation-timing-function: linear;
                -webkit-origin: 0
            }
            30% {
                opacity: 1;
                -webkit-transform: rotate(410deg);
                -webkit-animation-timing-function: ease-in-out;
                -webkit-origin: 7%
            }
            39% {
                opacity: 1;
                -webkit-transform: rotate(645deg);
                -webkit-animation-timing-function: linear;
                -webkit-origin: 30%
            }
            70% {
                opacity: 1;
                -webkit-transform: rotate(770deg);
                -webkit-animation-timing-function: ease-out;
                -webkit-origin: 39%
            }
            75% {
                opacity: 1;
                -webkit-transform: rotate(900deg);
                -webkit-animation-timing-function: ease-out;
                -webkit-origin: 70%
            }
            100%,
            76% {
                opacity: 0;
                -webkit-transform: rotate(900deg)
            }
        }
        /* ========================================================================
        Component: Ajax
        ========================================================================== */
    </style>
    <?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
			"AREA_FILE_SHOW" => "page",
			"AREA_FILE_SUFFIX" => "setting",
			"EDIT_TEMPLATE" => ""
		),
	    $component,
		array(
			"HIDE_ICONS" => "Y"
		)
	);?>
     <?if($_GET['complite'] || $_GET['error']):?>
        <div class="uk-message">
            <?if($_GET['complite']):?>
            <div id="modalcomplite" class="uk-modal-layout uk-modal-subscribe uk-flex-top uk-open" data-uk-modal>
                <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                    <button class="uk-modal-close-default" type="button" data-uk-close></button>
                    <h2>Спасибо</h2>
                    <p>Спасибо, Ваша заявка оформлена. Мы свяжемся с Вами в ближайшее время.</p>
                </div>
            </div>
            <?endif;?>
            <?if($_GET['error']):?>
            <div id="modalerror" class="uk-modal-layout uk-modal-subscribe uk-flex-top uk-open" data-uk-modal>
                <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                    <button class="uk-modal-close-default" type="button" data-uk-close></button>
                    <h2>Ошибка, ваше сообщение не отправлено!</h2>
                    <p>Изивините, возможно наша система определила Вас как спам бота, попробуйте отправить заявку еще раз.</p>
                </div>
            </div>
            <?endif;?>
        </div>
    <?endif;?>
    <? /* Consent ====================================================*/ ?>
    <div id="consent" class="uk-modal-consent uk-modal-layout" data-uk-modal="stack: true">
        <div class="uk-modal-dialog uk-margin-auto-vertical uk-animation-slide-bottom">
            <button class="uk-modal-close-default" type="button" data-uk-close></button>
            <div class="uk-modal-header uk-text-center uk-position-relative">
                <div>
                    <span class="uk-h2 uk-strong">Согласие на обработку персональных данных</span>
                </div>
            </div>
            <div class="uk-modal-body uk-consent-body uk-scroll" data-uk-overflow-auto></div>
            <div class="uk-modal-footer uk-text-center">
                <button class="uk-button uk-modal-close" type="button">Закрыть</button>
            </div>
        </div>
    </div>
    <? /* Consent ====================================================*/ ?>
    <? /* Cookie ====================================================*/ ?>
    <div id="cookie" class="uk-modal-consent uk-modal-layout" data-uk-modal="stack: true">
        <div class="uk-modal-dialog uk-margin-auto-vertical uk-animation-slide-bottom">
            <button class="uk-modal-close-default" type="button" data-uk-close></button>
            <div class="uk-modal-header uk-position-relative">
                <div>
                    <span class="uk-h2 uk-strong">Политика в отношении обработки персональных данных</span>
                </div>
            </div>
            <div class="uk-modal-body uk-cookie-body uk-scroll" data-uk-overflow-auto></div>
            <div class="uk-modal-footer uk-text-center">
                <button class="uk-button uk-modal-close" type="button">Закрыть</button>
                <button class="uk-button uk-button-section uk-modal-close" type="button" onClick="agreeCookie();">Хорошо</button>
            </div>
        </div>
    </div>
    <? /* Cookie ====================================================*/ ?>
    <? /* Callback ====================================================*/ ?>
    <div id="callback" class="uk-modal-layout uk-modal-callback uk-flex-top" data-uk-modal>
        <div class="uk-modal-dialog uk-margin-auto-vertical uk-animation-slide-bottom">
            <button class="uk-modal-close-default" type="button" data-uk-close></button>
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
    </div>
    <? /* Callback ====================================================*/ ?>

    <div class="uk-layout">
        <div id="headblock"></div>
        <a href="#headblock" class="uk-scroll-header" data-uk-scroll data-uk-scrollspy="cls:uk-animation-slide-bottom-medium; delay: 2500">
            <span data-uk-icon="icon: arrow-up; ratio: 1.5"></span>
        </a>
        <div id="header">
            <? Bitrix\Main\Page\Frame::getInstance()->startDynamicWithID("header");?>
                <?//if(!$isMobile && !$isTable):?>
                    <div class="uk-header uk-visible@m" data-uk-sticky="top: 100vh; animation: uk-animation-slide-top">
                        <div class="uk-header-panel uk-flex uk-flex-middle">
                            <div class="uk-container uk-container-center">
                                <div class="uk-grid uk-grid-collapse uk-flex uk-flex-middle" data-uk-grid>
                                    <div class="uk-width-1-3@m">
                                        <span data-uk-icon="icon: location; ratio: 1"></span> г. Санкт-петербург
                                    </div>
                                    <div class="uk-width-expand@m uk-flex uk-flex-center">
                                        <a class="uk-logo" href="<?=$_SERVER["REQUEST_SCHEME"]?>://<?=$_SERVER["HTTP_HOST"]?>/">
                                            <img data-src="<?=SITE_TEMPLATE_PATH?>/images/logo.svg" data-uk-img />
                                        </a>
                                    </div>
                                    <div class="uk-width-1-3@m">
                                        <div class="uk-grid uk-grid-small uk-flex uk-flex-middle uk-flex-right" data-uk-grid>
                                            <div class="uk-width-auto@m">
                                                <?$APPLICATION->IncludeComponent(
                                                    "bitrix:main.include",
                                                    "",
                                                    Array(
                                                        "AREA_FILE_SHOW" => "file",
                                                        "AREA_FILE_SUFFIX" => "inc",
                                                        "EDIT_TEMPLATE" => "",
                                                        "PATH" => SITE_TEMPLATE_PATH . "/include/content/SocialPanel.php"
                                                    )
                                                );?>
                                            </div>
                                            <div class="uk-width-auto@m uk-flex uk-flex-right@m">
                                                <div class="uk-grid uk-grid-medium uk-child-width-auto@xs uk-flex uk-flex-middle" data-uk-grid>
                                                    <div>
                                                        <?$APPLICATION->IncludeComponent(
                                                            "bitrix:main.include",
                                                            "",
                                                            Array(
                                                                "AREA_FILE_SHOW" => "file",
                                                                "AREA_FILE_SUFFIX" => "inc",
                                                                "EDIT_TEMPLATE" => "",
                                                                "PATH" => SITE_TEMPLATE_PATH . "/include/content/PhoneLink.php"
                                                            )
                                                        );?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-header-menu uk-position-relative">
                            <div class="uk-container uk-container-center">
                                <hr />
                                <?/*
                                <span class="uk-symbol" data-src="<?=SITE_TEMPLATE_PATH?>/images/loader.svg" data-uk-img></span>
                                */?>
                                <div class="uk-menu uk-position-relative">
                                    <nav class="uk-navbar-container uk-navbar-transparent uk-navbar" data-uk-navbar>
                                        <ul class="uk-navbar-nav uk-navbar-header uk-width-1-1 uk-child-width-auto uk-flex uk-flex-center">
                                            <?$APPLICATION->IncludeComponent("bitrix:menu", "list", Array (
                                                "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                                                "CHILD_MENU_TYPE" => "",	// Тип меню для остальных уровней
                                                "DELAY" => "N",	// Откладывать выполнение шаблона меню
                                                "MAX_LEVEL" => "1",	// Уровень вложенности меню
                                                "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                                                    0 => "",
                                                ),
                                                "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                                                "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                                                "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                                                "ROOT_MENU_TYPE" => "header",	// Тип меню для первого уровня
                                                "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                                                ),
                                                false
                                            );?>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                <?//endif;?>
            <? Bitrix\Main\Page\Frame::getInstance()->finishDynamicWithID("header", "");?>
        </div>
        <div id="headermobile">
            <? Bitrix\Main\Page\Frame::getInstance()->startDynamicWithID("headermobile");?>
                <?//if($isMobile || $isTable):?>
                    <div class="uk-header-mobile uk-hidden@m" data-uk-sticky="top: 100vh; animation: uk-animation-slide-top">
                        <div class="uk-container uk-container-center">
                            <div class="uk-grid uk-grid-small uk-flex uk-flex-middle" data-uk-grid>
                                <div class="uk-width-auto@xs">
                                    <button class="uk-button uk-button-change" type="button" data-uk-toggle="target: #callback">
                                        <span class="uk-animation-fade" data-uk-icon="icon: receiver; ratio: 1.2"></span>
                                    </button>
                                </div>
                                <div class="uk-width-expand@xs uk-flex uk-flex-center">
                                    <a class="uk-logo" href="<?=$_SERVER["REQUEST_SCHEME"]?>://<?=$_SERVER["HTTP_HOST"]?>/">
                                        <img data-src="<?=SITE_TEMPLATE_PATH?>/images/loader.svg" data-uk-img style="max-width: 40px;"/>
                                    </a>
                                </div>
                                <div class="uk-width-auto@xs">
                                    <button class="uk-button uk-button-change" type="button" data-uk-toggle="target: #offcanvas">
                                        <span class="uk-animation-fade" data-uk-icon="icon: menu; ratio: 1.2"></span>
                                        <span class="uk-animation-fade" data-uk-icon="icon: close; ratio: 1.2"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="offcanvas" class="uk-offcanvas" data-uk-offcanvas="flip: true; overlay: true; mode: push">
                        <div class="uk-offcanvas-bar">
                            <div class="uk-menu">
                                <h4>Ювелирные украшения</h4>
                                <ul class="uk-list">
                                    <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "list", Array(
                                        "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",	// Дополнительный фильтр для подсчета количества элементов в разделе
                                            "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                                            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                                            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                                            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                                            "CACHE_TYPE" => "A",	// Тип кеширования
                                            "COUNT_ELEMENTS" => "N",	// Показывать количество элементов в разделе
                                            "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",	// Показывать количество
                                            "FILTER_NAME" => "sectionsFilter",	// Имя массива со значениями фильтра разделов
                                            "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",	// Скрывать разделы с нулевым количеством элементов
                                            "IBLOCK_ID" => "1",	// Инфоблок
                                            "IBLOCK_TYPE" => "catalog",	// Тип инфоблока
                                            "SECTION_CODE" => "",	// Код раздела
                                            "SECTION_FIELDS" => array(	// Поля разделов
                                                0 => "",
                                                1 => "",
                                            ),
                                            "SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
                                            "SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
                                            "SECTION_USER_FIELDS" => array(	// Свойства разделов
                                                0 => "",
                                                1 => "",
                                            ),
                                            "SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
                                            "TOP_DEPTH" => "1",	// Максимальная отображаемая глубина разделов
                                            "VIEW_MODE" => "LINE",	// Вид списка подразделов
                                        ),
                                        false
                                    );?>
                                </ul>
                                <h4>Информация</h4>
                                <ul class="uk-list">
                                    <?$APPLICATION->IncludeComponent("bitrix:menu", "list", Array (
                                        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                                        "CHILD_MENU_TYPE" => "",	// Тип меню для остальных уровней
                                        "DELAY" => "N",	// Откладывать выполнение шаблона меню
                                        "MAX_LEVEL" => "1",	// Уровень вложенности меню
                                        "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                                            0 => "",
                                        ),
                                        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                                        "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                                        "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                                        "ROOT_MENU_TYPE" => "footer",	// Тип меню для первого уровня
                                        "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                                        ),
                                        false
                                    );?>
                                </ul>
                            </div>
                            <hr />
                            <div class="uk-contact uk-text-left">
                                <div class="uk-grid uk-grid-small uk-child-width-auto@m uk-flex uk-flex-middle" data-uk-grid>
                                    <div>
                                        <?$APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            "",
                                            Array(
                                                "AREA_FILE_SHOW" => "file",
                                                "AREA_FILE_SUFFIX" => "inc",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => SITE_TEMPLATE_PATH . "/include/content/PhoneLink.php"
                                            )
                                        );?>
                                    </div>
                                    <div>
                                        <?$APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            "",
                                            Array(
                                                "AREA_FILE_SHOW" => "file",
                                                "AREA_FILE_SUFFIX" => "inc",
                                                "EDIT_TEMPLATE" => "",
                                                "PATH" => SITE_TEMPLATE_PATH . "/include/content/MailLink.php"
                                            )
                                        );?>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="uk-button-panel">
                                <div class="uk-grid uk-grid-small uk-child-width-auto@m" data-uk-grid>
                                    <div>
                                        <a class="uk-button uk-button-section" href="#callback" data-uk-toggle>Узнать больше про Avanti</a>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => SITE_TEMPLATE_PATH . "/include/content/SocialPanel.php"
                                )
                            );?>
                        </div>
                    </div>
                <?//endif;?>
            <? Bitrix\Main\Page\Frame::getInstance()->finishDynamicWithID("headermobile", "");?>
        </div>
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "page",
                "AREA_FILE_SUFFIX" => "breadcrumb",
                "EDIT_TEMPLATE" => ""
            ),
            $component,
            array(
                "HIDE_ICONS" => "Y"
            )
        );?>
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "page",
                "AREA_FILE_SUFFIX" => "before",
                "EDIT_TEMPLATE" => ""
            ),
            $component,
            array(
                "HIDE_ICONS" => "Y"
            )
        );?>
        <div class="workarea uk-main-block <?=$GLOBALS['main']?>">
            <?echo $GLOBALS['start_container'];?>
            <!-- Начало блока Content -->


