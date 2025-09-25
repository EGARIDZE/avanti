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
<section class="uk-section uk-section-events">
	<div class="uk-grid uk-grid-small uk-flex uk-flex-bottom" data-uk-grid>
		<div class="uk-width-1-1@m">
			<div class="uk-section-content">
				<?
				$sectionsID = array();
				$sectionsArray = array();
				?>
				<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
					if(!in_array($arItem["IBLOCK_SECTION_ID"], $sectionsID)) {
					$sectionsID[] = $arItem["IBLOCK_SECTION_ID"];
					}
				?>
				<?endforeach;?>
				<?foreach($sectionsID as $arItem):?>
				<?
					$sectionsArray[] = CIBlockSection::GetByID($arItem)->GetNext();
				?>
				<?endforeach;?>
				<ul class="uk-subnav-pill uk-grid uk-grid-small uk-child-width-auto@xs uk-flex uk-flex-middle" data-uk-grid>
					<?if($APPLICATION->GetCurPage(false) == '/events/'):?>
						<li class="uk-active"><a href="/events/">Все</a></li>
					<?else:?>
						<li>
							<a href="/events/">
								<span class="uk-icon" data-uk-icon="icon: arrow-left; ratio: 1.5"></span>
							</a>
						</li>
					<?endif;?>
					<?foreach($sectionsArray as $arItem):?>
						<li <?if($APPLICATION->GetCurPage(false) == $arItem["SECTION_PAGE_URL"]):?>class="uk-active"<?endif;?>><a href="<?=$arItem["SECTION_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></li>
					<?endforeach;?>
				</ul>
			</div>
		</div>
		<div class="uk-width-1-1@m">
				
				<div class="uk-grid uk-grid-small uk-grid-events uk-child-width-1-3@m uk-child-width-1-1@s" data-uk-grid data-uk-height-match="target: .uk-panel">
					<?foreach($arResult["ITEMS"] as $arItem):?>
						<div data-type="<?=$arItem['IBLOCK_SECTION_ID']?>">
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
								<div class="uk-image" data-src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" data-uk-img>
									<div class="uk-overlay uk-position-cover uk-flex uk-flex-bottom">
										<div class="uk-grid uk-grid-small" data-uk-grid>
											<?if($arItem["PREVIEW_TEXT"]):?>
												<div>
													<div class="uk-content">
														<?=$arItem["PREVIEW_TEXT"]?>
													</div>
												</div>
											<?endif;?>
											<div>
												<span class="uk-button uk-button-section uk-button-section-icon">
													<?=$arItem["NAME"]?> <span class="uk-icon" data-uk-icon="icon: arrow-right; ratio: 1"></span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					<?endforeach;?>
				</div>
			
		</div>
	</div>
</section>
