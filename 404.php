<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Страница не найдена | LUCE. Авторские пальто из Петербурга");
$APPLICATION->SetPageProperty("keywords", "женское пальто, luce");
$APPLICATION->SetPageProperty("description", "LUCE - российский бренд одежды, который представляет широкий ассортимент женских пальто популярных стилей и фасонов на любой сезон.
.");
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
?>
<section class="uk-section uk-section-error">
  <div class="uk-panel">
    <div class="uk-overlay uk-overlay-content uk-position-cover uk-flex uk-flex-middle uk-flex-center">
        <div>
            <h1><strong>404</strong><br /> Страница не найдена</h1>
            <p>Cтраница, на которую вы пытаетесь попасть, не существует или была удалена. Перейдите на <a href="/">Главную страницу</a></p>
        </div>
    </div>
    <div class="uk-overlay uk-position-cover"></div>
  </div>
</section>

<style>
    .uk-section-error {
        position: relative;
        padding: 0px;
    }
    .uk-section-error > .uk-panel {
        background: var(--base);
        position: relative;
        min-height: calc(var(--vh, 1vh) * 100);
        padding: 0px;
        border-radius: 0px;
        border: none;
        overflow: hidden;
    }
    .uk-section-error > .uk-panel > .uk-overlay:nth-child(2) {
        background-position: 50% 50%;
        background-size: 100vh;
        mix-blend-mode: difference;
        filter: opacity(0.5);
    }
    .uk-section-error > .uk-panel > .uk-overlay:nth-child(1) {
        z-index: 10;
    }
    .uk-section-error > .uk-panel > .uk-overlay:nth-child(1) > div {
        text-align: center;
    }
    .uk-section-error > .uk-panel > .uk-overlay:nth-child(1) > div h1 {
        color: #FFF; 
    }
    .uk-section-error > .uk-panel > .uk-overlay:nth-child(1) > div h1 strong {
        font-size: 5em;
        font-weight: 900 !important;
    }
    .uk-section-error > .uk-panel > .uk-overlay:nth-child(1) > div p {
        color: #FFF;
        max-width: 400px;
        margin: 0 auto;
    }
    .uk-section-error > .uk-panel > .uk-overlay:nth-child(1) > div p a {
        color: var(--light);
        text-decoration: underline;
    }
</style>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>