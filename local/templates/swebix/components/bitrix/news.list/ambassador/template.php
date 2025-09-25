<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<div class="uk-ambassador">
	<div class="uk-grid uk-grid-collapse" data-uk-grid data-uk-height-match="target: > div > .uk-panel">
		<?
			$i = 1;
		?>
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<div class="uk-width-1-1">
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<?$count = $i++;?>
				<div class="uk-panel<?if($count % 2 == 0):?> uk-right<?endif;?>" <?if($arItem['DISPLAY_PROPERTIES']['AMBASSADOR_BG']['DISPLAY_VALUE']):?>style="background-color: #<?=$arItem['DISPLAY_PROPERTIES']['AMBASSADOR_BG']['DISPLAY_VALUE']?>; color: #<?=$arItem['DISPLAY_PROPERTIES']['AMBASSADOR_COLOR']['DISPLAY_VALUE']?>"<?endif;?> <?if($arItem["PROPERTIES"]["AMBASSADOR_IMAGE"]["VALUE"]):?>data-src="<?=CFile::GetPath($arItem["PROPERTIES"]["AMBASSADOR_IMAGE"]["VALUE"])?>" data-uk-img<?endif;?>>
					<div class="uk-container uk-container-center">
						<div class="uk-grid" data-uk-grid>
							<?if($count % 2 == 0):?>
								<div class="uk-width-1-2@m">
									
								</div>
							<?endif;?>	
							<div class="uk-width-1-2@m">
								<div class="uk-content">
									<h3>
										<?=$arItem["NAME"]?>
										<span>
											<?$APPLICATION->IncludeComponent(
												"bitrix:main.include",
												"",
												Array(
													"AREA_FILE_SHOW" => "file",
													"AREA_FILE_SUFFIX" => "inc",
													"EDIT_TEMPLATE" => "",
													"PATH" => SITE_TEMPLATE_PATH . "/include/content/AmbassadorBrand.php"
												)
											);?>
										</span>
									</h3>
									<?if($arItem["PROPERTIES"]["OFFER"]["VALUE"]):?>
										<div class="uk-label-panel">
											<div class="uk-grid uk-grid-small" data-uk-grid>
												<?foreach ($arItem["PROPERTIES"]["OFFER"]["VALUE"] as &$offer):?>
													<?if($offer == "Лидер продаж"):?>
														<div>
															<div class="uk-label uk-leader">
																Best
															</div>
														</div>
													<?endif;?>
													<?if($offer == "Распродажа"):?>
														<div>
															<div class="uk-label uk-sale">
																Outlet
															</div>
														</div>
													<?endif;?>
													<?if($offer == "Новинка"):?>
														<div>
															<div class="uk-label uk-new">
																New
															</div>
														</div>
													<?endif;?>
												<?endforeach;?>
											</div>
										</div>
									<?endif;?>
									<?if($arItem["PROPERTIES"]["MORE_PHOTO"]["VALUE"]):?>
										<div class="uk-slider" data-uk-slider>
											<ul class="uk-slider-items uk-grid uk-grid-small uk-child-width-1-4@m uk-child-width-1-3@xs" data-uk-grid data-uk-lightbox="video-autoplay: true;">
												<?foreach ($arItem["PROPERTIES"]["MORE_PHOTO"]["VALUE"] as &$item):?>
													<li class="uk-transition-toggle">
														<a href="<?=CFile::GetPath($item)?>" data-type="image">
															<div class="uk-thumbnav" data-src="<?=CFile::GetPath($item)?>" data-uk-img>
																<div class="uk-overlay uk-position-cover uk-transition-fade">
																	<span data-uk-icon="icon: expand; ratio: 1"></span>
																</div>
															</div>
														</a>
													</li>
												<?endforeach;?>
												<?if($arItem["PROPERTIES"]["VIDEO"]["VALUE"]):?>
													<li>
														<a href="<?=CFile::GetPath($arItem["PROPERTIES"]["VIDEO"]["VALUE"])?>" data-type="video">
															<div class="uk-thumbnav uk-thumbnav-video">
																<div class="uk-overlay uk-position-cover">
																	<span data-uk-icon="icon: video-camera; ratio: 2"></span>
																</div>
															</div>
														</a>
													</li>
												<?endif;?>
											</ul>
											<div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
												<div class="uk-width-auto@xs">
													<a class="uk-slidenav" href="#"data-uk-slider-item="previous" style="color: #<?=$arItem['DISPLAY_PROPERTIES']['AMBASSADOR_COLOR']['DISPLAY_VALUE']?>">
														<span data-uk-icon="icon: arrow-left; ratio: 1"></span>
													</a>
												</div>
												<div class="uk-width-auto@xs">
													<a class="uk-slidenav" href="#" data-uk-slider-item="next" style="color: #<?=$arItem['DISPLAY_PROPERTIES']['AMBASSADOR_COLOR']['DISPLAY_VALUE']?>">
														<span data-uk-icon="icon: arrow-right; ratio: 1"></span>
													</a>
												</div>
											</div>
										</div>
									<?endif;?>
									<?if($arItem['DISPLAY_PROPERTIES']['CML2_ARTICLE']['DISPLAY_VALUE']):?>
										<div class="uk-code">
											<small>Модель: <?=$arItem['DISPLAY_PROPERTIES']['CML2_ARTICLE']['DISPLAY_VALUE']?></small>
										</div>
									<?endif;?>
									<?if($arItem["PROPERTIES"]["AMBASSADOR_TEXT"]["~VALUE"]["TEXT"]):?>
										<div class="uk-meta">
											<?=$arItem["PROPERTIES"]["AMBASSADOR_TEXT"]["~VALUE"]["TEXT"];?>
										</div>
									<?endif;?>
									<div class="uk-grid uk-grid-small" data-uk-grid>
										<div>
											<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="uk-button uk-button-border uk-white uk-width-auto@m uk-width-1-1@xs" data-uk-scrollspy="cls:uk-animation-slide-right; repeat: true">
												Подробнее <span class="uk-symbol" data-src="<?=SITE_TEMPLATE_PATH?>/images/loader.svg" data-uk-img></span>
											</a>
										</div>
										<?if($arItem["PROPERTIES"]["WILDBERRIES"]["VALUE"]):?>
											<div>
												<a href="<?=$arItem["PROPERTIES"]["WILDBERRIES"]["VALUE"]?>" class="uk-button uk-button-border uk-white uk-width-auto@m uk-width-1-1@xs" data-uk-scrollspy="cls:uk-animation-slide-right; repeat: true" target="_blank">
													Купить на Wildberries <span class="uk-symbol" data-src="<?=SITE_TEMPLATE_PATH?>/images/loader.svg" data-uk-img></span>
												</a>
											</div>
										<?endif;?>
									</div>
								</div>
							</div>
							<?if($count % 2 != 0):?>
								<div class="uk-width-1-2@m">
									
								</div>
							<?endif;?>
						</div>
					</div>
				</div>
			</div>
		<?endforeach;?>
	</div>
</div>