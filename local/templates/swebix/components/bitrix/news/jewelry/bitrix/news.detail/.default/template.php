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
                    <div class="uk-width-1-1@m">
                        <div class="uk-image uk-position-relative">
                            <?if($arResult["PROPERTIES"]["OFFER"]["VALUE"]):?>
                                <div class="uk-label-panel">
                                    <div class="uk-grid uk-grid-xsmall" data-uk-grid>
                                        <?foreach ($arResult["PROPERTIES"]["OFFER"]["VALUE"] as &$offer):?>
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
                            <div class="uk-slideshow uk-slider-<?=$arResult['ID']?>" data-uk-slideshow="animation: fade; ratio: 1:1">
                                <div class="uk-position-relative">
                                    <ul class="uk-slideshow-items" data-uk-lightbox>
                                        <?if($arResult["PROPERTIES"]["MORE_PHOTO"]["VALUE"]):?>
                                            <?foreach ($arResult["PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $key => $photo):?>
                                                <li>
                                                    <a href="<?=CFile::GetPath($photo)?>" data-type="image">
                                                        <span data-src="<?=CFile::GetPath($photo)?>" data-uk-img="target: .uk-slider-<?=$arResult['ID']?>"></span>
                                                    </a>
                                                </li>
                                            <?endforeach;?>
                                        <?endif;?>
                                    </ul>
                                    <a class="uk-position-center-left" href="#" data-uk-slidenav-previous uk-slideshow-item="previous"></a>
                                    <a class="uk-position-center-right" href="#" data-uk-slidenav-next uk-slideshow-item="next"></a>
                                </div>
                                <div class="uk-dotnav-panel uk-flex uk-flex-center">
                                    <ul class="uk-slideshow-nav uk-dotnav uk-dotnav-line uk-grid uk-grid-collapse uk-child-width-expand" data-uk-grid></ul>
                                </div>
                            </div>
                            <?if($arResult["PROPERTIES"]["VIDEO"]["VALUE"]):?>
                                <div class="uk-label-video" data-uk-lightbox="video-autoplay: true;">
                                    <a href="<?=CFile::GetPath($arResult["PROPERTIES"]["VIDEO"]["VALUE"])?>" data-type="video">
                                        <div class="uk-thumbnav uk-thumbnav-video uk-position-relative">
                                            <div class="uk-overlay uk-position-cover">
                                                <span data-uk-icon="icon: video-camera; ratio: 2"></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-2@m">
            <div class="uk-content-width">
                <div class="uk-grid uk-grid-small" data-uk-grid>
                    <div class="uk-width-1-1@m" data-uk-scrollspy="target: > *; cls:uk-animation-slide-bottom; delay: 350">
                        <h2 class="uk-h1"><?=$arResult["NAME"]?></h2>
                    </div>
                    <div class="uk-width-1-1@m">
                        <?if($arResult["PREVIEW_TEXT"]):?>
                            <p><?=$arResult["PREVIEW_TEXT"]?></p>
                        <?endif;?>
                    </div>
                    <div class="uk-width-1-1@m">
                        <div class="uk-properties">
                            <div class="uk-hr uk-top">
                                <span class="uk-symbol" data-src="/local/templates/swebix/images/loader.svg" data-uk-img="" style="background-image: url(&quot;http://pomelnikov-art.sw/local/templates/swebix/images/loader.svg&quot;);"></span>
                            </div>
                            <div class="uk-grid uk-grid-small uk-child-width-1-1" data-uk-grid>
                                <?if($arResult["PROPERTIES"]["CML2_ARTICLE"]["VALUE"]):?>
                                    <div>
                                        <div class="uk-grid-small" uk-grid>
                                            <div class="uk-width-expand" uk-leader="fill: -">
                                                <?=$arResult["PROPERTIES"]["CML2_ARTICLE"]["NAME"]?>
                                            </div>
                                            <div>
                                                <?=$arResult["PROPERTIES"]["CML2_ARTICLE"]["VALUE"]?>
                                            </div>
                                        </div>
                                    </div>
                                <?endif;?>
                                <?if($arResult["PROPERTIES"]["MATERIAL"]["VALUE"]):?>
                                    <div>
                                        <div class="uk-grid-small" uk-grid>
                                            <div class="uk-width-expand" uk-leader="fill: -">
                                                <?=$arResult["PROPERTIES"]["MATERIAL"]["NAME"]?>
                                            </div>
                                            <div>
                                                <?=implode(", ", $arResult["PROPERTIES"]["MATERIAL"]["VALUE"])?>
                                            </div>
                                        </div>
                                    </div>
                                <?endif;?>
                                <?if($arResult["PROPERTIES"]["COVERAGE"]["VALUE"]):?>
                                    <div>
                                        <div class="uk-grid-small" uk-grid>
                                            <div class="uk-width-expand" uk-leader="fill: -">
                                                <?=$arResult["PROPERTIES"]["COVERAGE"]["NAME"]?>
                                            </div>
                                            <div>
                                                <?=implode(", ", $arResult["PROPERTIES"]["COVERAGE"]["VALUE"])?>
                                            </div>
                                        </div>
                                    </div>
                                <?endif;?>
                                <?if($arResult["PROPERTIES"]["SAMPLE"]["VALUE"]):?>
                                    <div>
                                        <div class="uk-grid-small" uk-grid>
                                            <div class="uk-width-expand" uk-leader="fill: -">
                                                <?=$arResult["PROPERTIES"]["SAMPLE"]["NAME"]?>
                                            </div>
                                            <div>
                                                <?=$arResult["PROPERTIES"]["SAMPLE"]["VALUE"]?>
                                            </div>
                                        </div>
                                    </div>
                                <?endif;?>
                                <?if($arResult["PROPERTIES"]["INSERTE"]["VALUE"]):?>
                                    <div>
                                        <div class="uk-grid-small" uk-grid>
                                            <div class="uk-width-expand" uk-leader="fill: -">
                                                <?=$arResult["PROPERTIES"]["INSERTE"]["NAME"]?>
                                            </div>
                                            <div>
                                                <?=implode(", ", $arResult["PROPERTIES"]["INSERTE"]["VALUE"])?>
                                            </div>
                                        </div>
                                    </div>
                                <?endif;?>
                                <?if($arResult["PROPERTIES"]["CUTTING"]["VALUE"]):?>
                                    <div>
                                        <div class="uk-grid-small" uk-grid>
                                            <div class="uk-width-expand" uk-leader="fill: -">
                                                <?=$arResult["PROPERTIES"]["CUTTING"]["NAME"]?>
                                            </div>
                                            <div>
                                                <?=implode(", ", $arResult["PROPERTIES"]["CUTTING"]["VALUE"])?>
                                            </div>
                                        </div>
                                    </div>
                                <?endif;?>
                            </div>
                            <div class="uk-hr uk-bottom">
                                <span class="uk-symbol" data-src="/local/templates/swebix/images/loader.svg" data-uk-img="" style="background-image: url(&quot;http://pomelnikov-art.sw/local/templates/swebix/images/loader.svg&quot;);"></span>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1@m">
                        <br />
                        <div class="uk-grid uk-grid-small" data-uk-grid>
                            <div>
                                <a href="#callback" class="uk-button uk-button-border uk-white uk-width-auto@m uk-width-1-1@xs" data-uk-toggle data-uk-scrollspy="cls:uk-animation-slide-right; repeat: true">
                                    Узнать цену <span class="uk-symbol" data-src="<?=SITE_TEMPLATE_PATH?>/images/loader.svg" data-uk-img></span>
                                </a>
                            </div>
                            <?if($arResult["PROPERTIES"]["WILDBERRIES"]["VALUE"]):?>
                                <div>
                                    <a href="<?=$arResult["PROPERTIES"]["WILDBERRIES"]["VALUE"]?>" class="uk-button uk-button-border uk-white uk-width-auto@m uk-width-1-1@xs" data-uk-scrollspy="cls:uk-animation-slide-right; repeat: true" target="_blank">
                                        Купить на Wildberries <span class="uk-symbol" data-src="<?=SITE_TEMPLATE_PATH?>/images/loader.svg" data-uk-img></span>
                                    </a>
                                </div>
                            <?endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="uk-section uk-section-content uk-career uk-event-content">
	<div class="uk-container uk-container-center">
		<div class="uk-content">
			<?if($arResult["DETAIL_TEXT"]):?>
				<p><?=$arResult["DETAIL_TEXT"]?></p>
			<?endif;?>
			<div class="uk-grid uk-grid-small uk-child-width-auto@xs uk-flex uk-flex-right@m">
				<div>
                    Поделиться
				</div>
				<div class="uk-flex uk-flex-right@m">
					<div class="ya-share2" data-curtain data-shape="round" data-color-scheme="blackwhite" data-services="messenger,vkontakte,odnoklassniki,telegram,whatsapp"  data-title="<?=$arResult["NAME"]?>" data-image="<?=$_SERVER["REQUEST_SCHEME"]?>://<?=$_SERVER["HTTP_HOST"];?><?=SITE_TEMPLATE_PATH?>/images/ogimage.jpg"></div>
				</div>
			</div>
            <br />
		</div>
	</div>
</section>