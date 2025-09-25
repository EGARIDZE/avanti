<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
    <?$index = 0?>
    <?foreach($arResult as $arItem):if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)continue;?>
        <?$arItem["INDEX"] = $index++;?>
        <li <?if($arItem["SELECTED"]):?> class="uk-active"<?endif?>>

            <?if($arItem["PARAMS"]["TYPE"] == "scroll"):?>
                <?if($APPLICATION->GetCurPage(false) === '/'):?>
                    <a class="uk-menu-<?=$arItem["INDEX"]?> uk-transition" href="<?if($arItem["PARAMS"]["PARENT"]):?>#<?else:?><?=$arItem["LINK"]?><?endif;?>" <?if($arItem["PARAMS"]["TYPE"] == "scroll"):?> data-uk-scroll<?endif;?>>
                        <?=$arItem["TEXT"]?>
                    </a>
                <?else:?>
                    <a class="uk-menu-<?=$arItem["INDEX"]?> uk-transition" href="/<?=$arItem["LINK"]?>">
                        <?=$arItem["TEXT"]?>
                    </a>
                <?endif;?>
            <?else:?>
                <a class="uk-menu-<?=$arItem["INDEX"]?> uk-transition" href="<?if($arItem["PARAMS"]["PARENT"]):?>#<?else:?><?=$arItem["LINK"]?><?endif;?>"
                    <?if($arItem["PARAMS"]["TYPE"] == "modal"):?> data-uk-toggle<?endif;?>
                     <?if($arItem["PARAMS"]["PARENT"]):?><?/*uk-toggle="target: .uk-dropdown-menu-<?=$arItem["INDEX"]?>"*/?><?endif;?>
                      <?if($arItem["PARAMS"]["TYPE"] == "URL"):?> target="_blank" <?endif;?>>
                    <?if($arItem["PARAMS"]["TYPE"] == "SMALL"):?>
                        <small><?endif;?><?=$arItem["TEXT"]?><?if($arItem["PARAMS"]["TYPE"] == "SMALL"):?></small>
                    <?endif;?>
                </a>
                <?if($arItem["PARAMS"]["PARENT"]):?>
                    <div class="uk-dropdown uk-dropdown-menu-<?=$arItem["INDEX"]?>" data-uk-dropdown="pos: bottom-center; offset: 0; animation: uk-animation-slide-bottom-small; duration: 500">
                        <span class="uk-symbol uk-first" data-src="<?=SITE_TEMPLATE_PATH?>/images/loader.svg" data-uk-img></span>
                        <ul class="uk-list uk-menu">
                            <?$APPLICATION->IncludeComponent("bitrix:menu", "list", Array(
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
                                "ROOT_MENU_TYPE" => $arItem["PARAMS"]["PARENT"],	// Тип меню для первого уровня
                                "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                                ),
                                false
                            );?>
                        </ul>
                        <span class="uk-symbol uk-last" data-src="<?=SITE_TEMPLATE_PATH?>/images/loader.svg" data-uk-img></span>
                    </div>
                    <?/*
                    <div class="uk-dropdown uk-dropdown-menu-<?=$arItem["INDEX"]?> uk-flex" hidden>
                        <ul class="uk-list uk-menu">
                            <?$APPLICATION->IncludeComponent("bitrix:menu", "list", Array(
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
                                "ROOT_MENU_TYPE" => $arItem["PARAMS"]["PARENT"],	// Тип меню для первого уровня
                                "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                                ),
                                false
                            );?>
                        </ul>
                    </div>
                    */?>
                <?endif;?>
            <?endif;?>
        </li>
    <?endforeach?>

<?endif?>