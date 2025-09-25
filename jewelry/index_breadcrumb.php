<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? $content = "center";?>
<div class="uk-breadcrumb-catalog" data-uk-parallax="bgx: -100">
	<div class="uk-container uk-container-center">
		<div class="uk-breadcrumb-block" id="navigation">
			<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb", Array( 
				"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
					"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
					"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
					"COMPONENT_TEMPLATE" => "breadcrumb"
				),
				false
			);?>
		</div>
	</div>
</div>
