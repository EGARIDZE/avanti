<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<section class="uk-section uk-section-slider" data-src="upload/template/screen-background.png" data-uk-img>
    <div uk-slideshow>
        <ul class="uk-slideshow-items">
            <li>
                <div class="uk-position-cover uk-animation-kenburns uk-transform-origin-center-bottom">
                    <img src="upload/template/slider.jpg" uk-cover>
                </div>
            </li>
        </ul>
    </div>
    <?/*
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
        <ul class="uk-slider-items uk-child-width-1-1">
            <li>
                <div class="uk-container uk-container-center">
                    <div class="uk-grid uk-grid-medium uk-flex uk-flex-middle" data-uk-grid>
                        <div class="uk-width-1-2@m">
                            <div class="uk-content" data-uk-parallax="x: 0,100,250" data-uk-slider-parallax="x: 50vw,-50vw">
                                <h1 class="uk-h1">Авторское изготовление мужских и женских ювелирных изделий на заказ</h1>
                                <p>Сохраняя ювелирные традиции и выполняя современные украшения ограниченным тиражом по авторским эскизам</p>
                                <a href="#callback" class="uk-button uk-button-border uk-width-auto@m uk-width-1-1@xs" data-uk-toggle data-uk-scrollspy="cls:uk-animation-slide-right; repeat: true">
                                    Оставить заявку <span class="uk-symbol" data-src="<?=SITE_TEMPLATE_PATH?>/images/loader.svg" data-uk-img></span>
                                </a>
                            </div>
                        </div>
                        <div class="uk-width-1-2@m uk-flex uk-flex-center">
                            <div class="uk-image" data-uk-parallax="x: 0,100,250">
                                <img src="upload/template/screen-1.png" alt="Авторское изготовление мужских и женских ювелирных изделий на заказ">
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-container uk-container-center">
                    <div class="uk-grid uk-grid-medium uk-flex uk-flex-middle" data-uk-grid>
                        <div class="uk-width-1-2@m">
                            <div class="uk-content" data-uk-parallax="x: 0,100,250" data-uk-slider-parallax="x: 50vw,-50vw">
                                <h2 class="uk-h1">Ювелирная мастерская Алексея Помельникова</h2>
                                <p>Наш ассортимент включает в себя разнообразные виды ювелирных украшений, такие как кольца, серьги, браслеты и многое другое. </p>
                                <a href="#section-catalog" class="uk-button uk-button-border uk-width-auto@m uk-width-1-1@xs" data-uk-scroll data-uk-scrollspy="cls:uk-animation-slide-right; repeat: true">
                                    Каталог украшений <span class="uk-symbol" data-src="<?=SITE_TEMPLATE_PATH?>/images/loader.svg" data-uk-img></span>
                                </a>
                            </div>
                        </div>
                        <div class="uk-width-1-2@m uk-flex uk-flex-center">
                            <div class="uk-image" data-uk-parallax="x: 0,100,250">
                                <img src="upload/template/screen.png" alt="Ювелирная мастерская Алексея Помельникова">
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="uk-dotnav-panel uk-flex uk-flex-center">
            <div class="uk-container uk-container-center uk-position-relative">
                <div class="uk-grid uk-grid-medium uk-flex uk-flex-middle" data-uk-grid>
                    <div class="uk-width-1-3@m">
                        <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                            <div class="uk-width-auto@xs">
                                <a class="uk-slidenav" href="#"data-uk-slider-item="previous">
                                    <span data-uk-icon="icon: arrow-left; ratio: 1"></span>
                                </a>
                            </div>
                            <div class="uk-width-expand@xs uk-position-relative">
                                <ul class="uk-slider-nav uk-dotnav uk-dotnav-line uk-grid uk-grid-collapse uk-child-width-expand" data-uk-grid></ul>
                            </div>
                            <div class="uk-width-auto@xs">
                                <a class="uk-slidenav" href="#" data-uk-slider-item="next">
                                    <span data-uk-icon="icon: arrow-right; ratio: 1"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    */?>
</section>
<section class="uk-section uk-section-about" data-src="upload/template/screen-about.jpg" data-uk-img>
    <div class="uk-container uk-container-center">
        <div class="uk-grid uk-flex uk-flex-bottom" data-uk-grid>
            <div class="uk-width-1-2@m">
                <h2 class="uk-h1">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH . "/include/content/AboutTitleSection.php"
                        )
                    );?>
                </h2>
            </div>
            <div class="uk-width-1-2@m">
                <div class="uk-hr">
                    <span class="uk-symbol" data-src="<?=SITE_TEMPLATE_PATH?>/images/loader.svg" data-uk-img></span>
                </div>
            </div>
        </div>
        <div class="uk-grid uk-flex uk-flex-top" data-uk-grid data-uk-height-match="target: > div > .uk-content">
            <div class="uk-width-1-2@m">
                <div class="uk-content">
                    <div class="uk-author">
                        <div class="uk-grid uk-flex uk-flex-bottom" data-uk-grid>
                            <div class="uk-width-auto@xs">
                                <div class="uk-image">
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "inc",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => SITE_TEMPLATE_PATH . "/include/content/AboutAuthorPhotoSection.php"
                                        )
                                    );?>
                                </div>
                            </div>
                            <div class="uk-width-expand@xs">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => SITE_TEMPLATE_PATH . "/include/content/AboutAuthorSection.php"
                                    )
                                );?>
                            </div>
                        </div>
                    </div>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH . "/include/content/AboutSection.php"
                        )
                    );?>
                </div>
                <br />
                <div class="uk-grid uk-flex uk-flex-middle" data-uk-grid>
                    <div class="uk-width-1-2@xs">
                        <a href="/about/" class="uk-link">Узнать больше</a>
                    </div>
                    <div class="uk-width-1-2@xs uk-flex uk-flex-right">
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
            </div>
            <div class="uk-width-1-2@m">
                <div class="uk-content">
                    <div class="uk-panel" data-src="upload/template/panel-about.png" data-uk-img>
                        <h2>
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => SITE_TEMPLATE_PATH . "/include/content/AboutSectionPanelTitle.php"
                                )
                            );?>
                        </h2>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => SITE_TEMPLATE_PATH . "/include/content/AboutSectionPanelText.php"
                            )
                        );?>
                    </div>
                </div>
                <br />
                <div class="uk-grid uk-flex uk-flex-middle uk-flex-right@m" data-uk-grid>
                    <div class="uk-width-auto@m uk-width-1-1@xs uk-text-right@m">
                        <a href="#section-catalog" class="uk-button uk-button-border uk-white uk-width-auto@m uk-width-1-1@xs" data-uk-scroll data-uk-scrollspy="cls:uk-animation-slide-right; repeat: true">
                            Каталог украшений <span class="uk-symbol" data-src="<?=SITE_TEMPLATE_PATH?>/images/loader.svg" data-uk-img></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-hr uk-buttom">
        <span class="uk-symbol" data-src="<?=SITE_TEMPLATE_PATH?>/images/loader.svg" data-uk-img></span>
    </div>
</section>
<section class="uk-section uk-section-ambassador">
    <?
    global $arrAmbassadorFilter;
    $arrAmbassadorFilter = array(
        "ACTIVE" => "Y",
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
        "ambassador",
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
<section id="section-catalog" class="uk-section uk-section-jewelry uk-section-jewelry-home" data-src="upload/template/screen-about.jpg" data-uk-img>
    <div class="uk-container uk-container-center">
        <div class="uk-grid uk-flex uk-flex-top" data-uk-grid>
            <div class="uk-width-1-2@m">
                <h2 class="uk-h1">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH . "/include/content/JewelrySectionTitle.php"
                        )
                    );?>
                </h2>
            </div>
            <div class="uk-width-1-2@m">
                <div>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH . "/include/content/JewelrySectionText.php"
                        )
                    );?>
                </div>
            </div>
            <div class="uk-width-1-1@m">
                <?
                global $arrHomeFilter;
                    $arrHomeFilter = array(
                        "ACTIVE" => "Y",
                        "!PROPERTY_7_VALUE" => false,
                        "SECTION_ACTIVE" => "Y",
                    );
                ?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "slider",
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
                        "FILTER_NAME" => "arrHomeFilter",
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
            </div>
            <div class="uk-width-1-1@xs uk-text-center">
                <a href="#section-catalog" class="uk-button uk-button-border uk-white uk-width-auto@m uk-width-1-1@xs" data-uk-scroll data-uk-scrollspy="cls:uk-animation-slide-right; repeat: true">
                    Каталог украшений <span class="uk-symbol" data-src="<?=SITE_TEMPLATE_PATH?>/images/loader.svg" data-uk-img></span>
                </a>
            </div>
        </div>
    </div>
</section>