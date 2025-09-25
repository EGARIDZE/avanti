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

<!--        <div class="workarea uk-main-block --><?php //=$GLOBALS['main']?><!--">-->
<!--            --><?//echo $GLOBALS['start_container'];?>
<!--            -->
<!--            --><?//echo $GLOBALS['end_container'];?>
<!--        </div>-->

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
