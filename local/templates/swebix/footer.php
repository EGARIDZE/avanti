<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); global $USER;?>
        <!-- Конец блок Content -->
            <?echo $GLOBALS['end_container'];?>
        </div>
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "page",
                "AREA_FILE_SUFFIX" => "after",
                "EDIT_TEMPLATE" => ""
            ),
            $component,
            array(
                "HIDE_ICONS" => "Y"
            )
        );?>
        <div class="uk-footer" data-src="/upload/template/screen-about.jpg" data-uk-img>
            <div class="uk-hr uk-buttom">
                <span class="uk-symbol" data-src="<?=SITE_TEMPLATE_PATH?>/images/loader.svg" data-uk-img></span>
            </div>
            <div class="uk-container uk-container-center">
                <div class="uk-grid uk-grid-small uk-child-width-1-4@m uk-flex uk-flex-top" data-uk-grid>
                    <div class="uk-visible@m">
                        <div class="uk-menu">
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
                    </div>
                    <div class="uk-visible@m">
                        <div class="uk-menu">
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
                        </div>
                    </div>
                    <div class="uk-visible@m"></div>
                    <div>
                        <div class="uk-subscribe">
                            <p class="uk-text-left@m uk-text-center@xs">Подпишитесь на рассылку</p>
                            <form method="POST" data-sending="ajax" onsubmit="ajaxFormSand.call(this, 'subscribe'); return false;">
                                <div class="uk-grid uk-grid-small">
                                    <div class="uk-width-expand@xs">
                                        <input class="uk-input" type="text" name="EMAIL" placeholder="Электронная почта*" required>
                                    </div>
                                    <div class="uk-width-auto@xs">
                                        <button class="uk-button" type="submit">
                                            <span class="uk-icon" data-uk-icon="icon: arrow-right; ratio: 1"></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <br />
                        <div class="uk-flex uk-flex-left@m uk-flex-center@xs">
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
                <br class="uk-hiddem@m"/>
                <br />
                <div class="uk-contact uk-text-left@m uk-text-center@xs">
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
                        <div class="uk-width-1-1@m">
                            <span class="uk-icon" data-uk-icon="icon: location; ratio: 1"></span>
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => SITE_TEMPLATE_PATH . "/include/content/AdressLink.php"
                                )
                            );?>
                        </div>
                    </div>
                </div>
                <br class="uk-hiddem@m"/>
                <br />
                <div class="uk-grid uk-grid-small uk-child-width-auto@m uk-flex uk-flex-middle" data-uk-grid>
                    <div class="uk-text-left@m uk-text-center@xs">
                        <small>
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => SITE_TEMPLATE_PATH . "/include/template/content-copyright.php"
                                )
                            );?>
                        </small>
                    </div>
                    <div>
                        <div class="uk-menu uk-position-relative">
                            <nav class="uk-navbar-container uk-navbar-transparent uk-navbar" data-uk-navbar>
                                <ul class="uk-navbar-nav uk-width-1-1 uk-child-width-auto@xs">
                                    <li>
                                        <a class="uk-consent" href="#consent" onClick="consent();" data-uk-toggle>Политика конфиденциальности</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="uk-width-expand@m uk-flex uk-flex-right@m uk-flex-center@xs" hidden>
                        <small>Разработано в <a href="https://swebix.ru/" target="_blank" class="uk-flex uk-flex-middle"><span data-uk-icon="icon: swebix; ratio: 0.7"></span> Свебикс</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="bottom" class="uk-bottom-panel">
        <div id="alertcookie" class="uk-cookie uk-animation-slide-bottom-medium" hidden="" data-uk-alert>
            <div class="uk-flex uk-flex-middle@m uk-grid-collapse" data-uk-grid data-uk-height-match="target: > div > .uk-card">
                <div class="uk-width-expand@xs">
                    <div class="uk-card uk-flex uk-flex-middle">
                        <div class="uk-content">
                            Продолжая использовать сайт, вы даете согласие на обработку файлов cookie. <a href="#cookie" data-uk-toggle onClick="consentCookie();">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="uk-width-auto@xs uk-text-center">
                    <a href="#" class="uk-card uk-button uk-button-border uk-alert-close uk-button uk-button-section" onClick="agreeCookie();">
                        <small>Принимаю</small>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>