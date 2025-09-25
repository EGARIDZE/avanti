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
<section class="uk-section uk-section-detail-galary">
	<div class="uk-grid uk-grid-small" data-uk-grid>
		<?/*
		<div class="uk-width-1-1@m">
			<div class="uk-header-iamge uk-image" data-src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>" data-uk-img></div>
		</div>
		*/?>
		<div class="uk-width-1-1@m">
			<div class="uk-content">
				<?if($arResult["PREVIEW_TEXT"]):?>
					<p><?=$arResult["PREVIEW_TEXT"]?></p>
					<?if($arResult["DETAIL_TEXT"]):?>
						<hr />
					<?endif;?>
				<?endif;?>
				<?if($arResult["DISPLAY_PROPERTIES"]["MORE_PHOTE"]["VALUE"]):?>
					<div class="uk-galary">
						<div class="uk-slider uk-position-relative" data-uk-slider="center: false">
							<ul class="uk-slider-items uk-grid uk-grid-small uk-child-width-1-3@l uk-child-width-1-4@xl" data-uk-grid data-uk-height-match="target: .uk-panel" data-uk-lightbox>
								<?foreach($arResult["DISPLAY_PROPERTIES"]["MORE_PHOTE"]["FILE_VALUE"] as $arItem):?>
									<li>
										<a href="<?=$arItem["SRC"]?>">
											<?if(strpos($arItem["SRC"], ".mp4")):?>
												<div class="uk-panel uk-image">
													<video class="uk-overlay uk-overlay-video uk-position-cover" autoplay loop muted playsinline>
														<source src="<?=$arItem["SRC"]?>" type="video/mp4">
													</video>
													<div class="uk-overlay uk-position-cover">
														<span class="uk-icon" data-uk-icon="icon: play; ratio: 1"></span>
													</div>
													<?/*
													<div class="uk-overlay uk-position-cover">
														<span class="uk-icon" data-uk-icon="icon: expand; ratio: 1"></span>
													</div>
													*/?>
												</div>
											<?else:?>
												<div class="uk-panel uk-image" data-src="<?=$arItem["SRC"]?>" data-uk-img>
													<div class="uk-overlay uk-position-cover">
														<span class="uk-icon" data-uk-icon="icon: expand; ratio: 1"></span>
													</div>
												</div>
											<?endif;?>
										</a>
									</li>
								<?endforeach;?>
							</ul>
							<div class="uk-grid uk-grid-small uk-child-width-auto@xs uk-flex uk-flex-left" data-uk-grid>
								<div>
									<a class="uk-slidenav" href="#" data-uk-slidenav-previous data-uk-slider-item="previous"></a>
								</div>
								<div>
									<a class="uk-slidenav" href="#" data-uk-slidenav-next data-uk-slider-item="next"></a>
								</div>
							</div>
						</div>
					</div>
				<?endif;?>
				<?if($arResult["DETAIL_TEXT"]):?>
					<p><?=$arResult["DETAIL_TEXT"]?></p>
				<?endif;?>
				<?/*
				<div id="products"></div>
				*/?>
			</div>
		</div>
		<div class="uk-width-1-1@m">
			<hr />
			<div class="uk-grid uk-grid-small uk-flex uk-flex-middle" data-uk-grid>
				<div class="uk-width-1-2@m">
					<script src="https://yastatic.net/share2/share.js" async></script>
					<div class="ya-share2" data-curtain data-services="messenger,vkontakte,odnoklassniki,telegram,whatsapp" data-title="<?=$arResult["NAME"]?>" data-image="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>"></div>
				</div>
				<div class="uk-width-1-2@m uk-flex uk-flex-right@m">
					<a class="uk-button uk-button-section uk-button-section-icon" href="<?=$arParams["IBLOCK_URL"]?>">
						<?=GetMessage("T_NEWS_DETAIL_BACK")?> <span class="uk-icon" data-uk-icon="icon: arrow-left; ratio: 1"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
