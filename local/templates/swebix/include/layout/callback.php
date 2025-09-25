<div class="uk-modal-header uk-position-relative">
	<div class="uk-grid uk-grid-small uk-flex uk-flex-top" data-uk-grid="">
		<div class="uk-width-auto@xs">
 <img src="/local/templates/swebix/images/loader.svg" class="uk-loader" data-src="/local/templates/swebix/images/loader.svg" data-uk-img="">
		</div>
		<div class="uk-width-expand@xs">
			<h2 class="uk-h2">Авторское изготовление ювелирных изделий</h2>
			<p>
				Сохраняя ювелирные традиции, исполняем современные украшения ограниченным тиражом по авторским эскизам
			</p>
		</div>
	</div>
</div>
<form method="POST" class="uk-position-relative" data-sending="ajax" onsubmit="ajaxFormSand.call(this, 'sand'); return false;">
	<div class="uk-overlay uk-position-cover uk-flex uk-flex-center uk-flex-middle">
		<div data-uk-spinner="ratio: 2">
		</div>
	</div>
 <input name="TITLE" type="hidden" value="Быстрая заявка"> <input name="TIMEWORK" type="hidden" value=""> <input name="URL" type="hidden" value="<?=$APPLICATION->GetCurDir() ?>"> <input name="UTM_SORCE" type="hidden" value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : '' ;?>">
	<div class="uk-modal-body">
		<div class="uk-grid uk-child-width-1-2@m uk-grid-small" data-uk-grid="">
			<div>
				<div class="uk-inline">
 <span class="uk-form-icon" uk-icon="icon: user"></span> <input class="uk-input" type="text" name="NAME" placeholder="Имя*" onkeyup="var yratext=/['0-9',':']/; if(yratext.test(this.value)) this.value=''" required="">
				</div>
			</div>
			<div>
				<div class="uk-inline">
 <span class="uk-form-icon" uk-icon="icon: receiver"></span> <input class="uk-input" type="text" name="PHONE" onfocus="maskPhone.call(this);" placeholder="+7 (9__) ___-__-__" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" required="required">
				</div>
			</div>
			<div>
				<div class="uk-inline">
 <span class="uk-form-icon" uk-icon="icon: mail"></span> <input class="uk-input" type="text" name="EMAIL" placeholder="Электронная почта*" required="required">
				</div>
			</div>
			<div>
				<div class="uk-inline">
 <span class="uk-form-icon" uk-icon="icon: commenting"></span>
					<select name="TYPEFEEDBACK" class="uk-input uk-select">
						<option value="По телефону" selected="">По телефону</option>
						<option value="В мессенджере">В мессенджере</option>
						<option value="По электронной почте">По электронной почте</option>
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="uk-modal-footer">
		<div class="uk-grid uk-grid-small uk-flex uk-flex-middle" data-uk-grid="">
			<div class="uk-width-auto@m">
 <input class="uk-button uk-button-section" type="submit" value="Отправить">
			</div>
			<div class="uk-width-expand@m">
				<div class="uk-block-notification">
					Отправляя данное сообщение, Вы даёте согласие на обработку Ваших персональных данных и подтверждаете, что ознакомлены с <a class="uk-consent" href="#consent" onclick="consent();" data-uk-toggle="">политикой конфиденциальности</a>.
				</div>
			</div>
		</div>
	</div>
</form>