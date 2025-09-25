<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
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