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

<section class="uk-section uk-section-jewelry">
    <div class="uk-container uk-container-center">
		<div class="uk-jewelrys">
			<div class="uk-slider uk-position-relative" data-uk-slider="center: false">

				<div class="uk-grid uk-grid-small uk-child-width-auto@xs" data-uk-grid>
					<div>
						<a class="uk-slidenav" href="#" data-uk-slider-item="previous">
							<span class="uk-icon" data-uk-icon="icon: arrow-left; ratio: 1"></span>
						</a>
					</div>
					<div>
						<a class="uk-slidenav" href="#" data-uk-slider-item="next">
							<span class="uk-icon" data-uk-icon="icon: arrow-right; ratio: 1"></span>
						</a>
					</div>
				</div>

				<ul class="uk-slider-items <?if($arParams["LINE_COUNT"]):?>uk-child-width-1-<?=$arParams["LINE_COUNT"]?>@m<?else:?>uk-child-width-1-4@m<?endif;?> uk-child-width-1-1@xs uk-grid uk-grid-medium" data-uk-grid data-uk-height-match="target: > li > .uk-panel;" data-uk-scrollspy="target: > li; cls:uk-animation-slide-bottom; delay: 500">
					<?foreach($arResult["ITEMS"] as $arItem):?>
						<?
						//$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						//$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
						<li>
							<div class="uk-panel uk-transition">
								<div class="uk-image uk-position-relative">
									<?if($arItem["PROPERTIES"]["OFFER"]["VALUE"]):?>
										<div class="uk-label-panel">
											<div class="uk-grid uk-grid-xsmall" data-uk-grid>
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
									<div class="uk-slideshow uk-slider-<?=$arItem['ID']?>" data-uk-slideshow="animation: fade; ratio: 1:1">
										<a href="<?=$arItem['DETAIL_PAGE_URL']?>" title="<?=$arItem["NAME"]?>">
											<div class="uk-position-relative">
												<ul class="uk-slideshow-items">
													<?if($arItem["PROPERTIES"]["MORE_PHOTO"]["VALUE"]):?>
														<?foreach ($arItem["PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $key => $photo):?>
															<li>
																<span data-src="<?=CFile::GetPath($photo)?>" data-uk-img="target: .uk-slider-<?=$arItem['ID']?>"></span>
															</li>
														<?endforeach;?>
													<?endif;?>
												</ul>
												<a class="uk-position-center-left" href="#" data-uk-slidenav-previous uk-slideshow-item="previous"></a>
												<a class="uk-position-center-right" href="#" data-uk-slidenav-next uk-slideshow-item="next"></a>
											</div>
										</a>
										<div class="uk-dotnav-panel uk-flex uk-flex-center">
											<ul class="uk-slideshow-nav uk-dotnav uk-dotnav-line uk-grid uk-grid-collapse uk-child-width-expand" data-uk-grid></ul>
										</div>
									</div>
								</div>
								<div>
									<a href="<?=$arItem['DETAIL_PAGE_URL']?>" title="<?=$arItem["NAME"]?>">
										<div class="uk-content">
											<div class="uk-grid uk-grid-small uk-flex uk-flex-bottom" data-uk-grid>
											<div class="uk-width-expand@xs">
													<h3 class="uk-h3"><?=$arItem["NAME"]?></h3>
												</div>
												<?/*
												<div class="uk-width-auto@xs">
													<button class="uk-button uk-button-section" type="button" data-uk-tooltip="title: Подробнее; pos: bottom">
														<span data-uk-icon="icon: info; ratio: 1"></span>
													</button>
												</div>
												*/?>
												<div class="uk-width-1-1@xs">
													<span class="uk-link">Подробнее</span>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
						</li>
					<?endforeach;?>
				</ul>
			</div>
		</div>
	</div>
</section>