<?
//header("Access-Control-Allow-Origin: *");
//header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
//header("Access-Control-Allow-Headers: *");

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
    CModule::IncludeModule("iblock");
    if(empty($_POST)) die();
    $isNotError = true;
    $arData = array();
    if($_POST["TITLE"]) {$arData["TITLE"] = $_POST["TITLE"];}
    if($_POST["NAME"]) {$arData["NAME"] = $_POST["NAME"];}
    if($_POST["SURNAME"]) {$arData["SURNAME"] = $_POST["SURNAME"];}
    if($_POST["PHONE"]) {$arData["PHONE"] = $_POST["PHONE"];}
    if($_POST["EMAIL"]) {$arData["EMAIL"] = $_POST["EMAIL"];}
    if($_POST["TEXT"]) {$arData["TEXT"] = $_POST["TEXT"];}
    if($_POST["URL"]) {$arData["URL"] = $_POST["URL"];}
    if($_POST["UTM_SORCE"]) {$arData["UTM_SORCE"] = $_POST["UTM_SORCE"];}

    // ---------------------------- Отправка на почту -------------------------- // 
    $date=date("d.m.y");
    $temporary=date("H:i");
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Avanti Jewellery <info@avanti-jewellery.ru>\r\n"; // от кого

    if($arData["NAME"]) {
        $title = "Веб форма - " . $arData["TITLE"] . ": от " . $arData["NAME"];
    } else {
        $title = "Веб форма - " . $arData["TITLE"];
    }

    if (empty($arData["NAME"])) { } else {$name = "<p>Имя: <b>" . $arData["NAME"] . "</b></p>";};
    if (empty($arData["PHONE"])) { } else {$phone = "<p>Контактный телефон: <b>" . $arData["PHONE"] . "</b></p>";};
    if (empty($arData["EMAIL"])) { } else {$mail = "<p>Электронная почта: <b>" . $arData["EMAIL"] . "</b></p>";};
    if (empty($arData["TYPEFEEDBACK"])) { } else {$typefreedback = "<p>Предпочтительный способ связи: <b>" . $arData["TYPEFEEDBACK"] . "</b></p>";}; 
    if (empty($arData["TEXT"])) { } else {$text = "<p>Комментарий: <b>" . $arData["TEXT"] . "</b></p>";}; 
    if (empty($arData["URL"])) { } else {$link = "<p>Страница: <b> https://avanti-jewellery.ru" . $arData["URL"] . "</b></p>";};
    if (empty($arData["UTM_SORCE"])) { } else {$utm = "<p>" . $arData["UTM_SORCE"] . "</p>";};

    if ($arData["TITLE"] == '-' || empty($arData["TITLE"])) {
        $isNotError = false;
    }
    if (str_contains($arData["TEXT"], 'http')) {
        $isNotError = false;
    }
    if (str_contains($arData["TEXT"], '@')) {
        $isNotError = false;
    }
    if($_SERVER['SERVER_NAME'] == 'avanti.sw') {
        $isNotError = false;
    }

    $message = "
    <div dir='ltr' class='es-wrapper-color' lang='und' style='background-color:#FFFFFF'>
        <table class='es-wrapper' width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;background-color:#FFFFFF'>
        <tr>
        <td valign='top' style='padding:0;Margin:0'>
            <table cellpadding='0' cellspacing='0' class='es-content' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'>
            <tr>
            <td align='center' style='padding:0;Margin:0'>
                <table bgcolor='#efefef' class='es-content-body' align='center' cellpadding='0' cellspacing='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#EFEFEF;border-radius:20px 20px 0 0;width:600px'>
                <tr>
                <td align='left' style='padding:0;Margin:0;padding-top:40px;padding-left:40px;padding-right:40px'>
                    <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                    <tr>
                    <td align='center' valign='top' style='padding:0;Margin:0;width:520px'>
                        <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                        <tr>
                        <td align='left' class='es-m-txt-c' style='padding:0;Margin:0;font-size:0px'>
                            <span style='display:block; width: 100px; height: 100px;display: inline-flex;align-items: center;justify-content: center;background-color: #001232;border-radius: 100%;padding: 20px;box-sizing: border-box;'>
                            <img src='https://pomelnikov-art.ru/local/templates/swebix/images/loader.svg' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;border-radius:100px;max-width:80px;' width='100'>
                            </span>
                        </td>
                        </tr>
                        </table></td>
                    </tr>
                    </table></td>
                </tr>
                <tr>
                <td align='left' style='padding:0;Margin:0;padding-top:20px;padding-left:40px;padding-right:40px'>
                    <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                    <tr>
                    <td align='center' valign='top' style='padding:0;Margin:0;width:520px'>
                        <table cellpadding='0' cellspacing='0' width='100%' bgcolor='#fafafa' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;border-spacing:0px;background-color:#fafafa;border-radius:10px'>
                        <tr>
                        <td align='left' style='padding:20px;Margin:0'><h3 style='Margin:0;line-height:34px;mso-line-height-rule:exactly;font-family:Imprima, Arial, sans-serif;font-size:28px;font-style:normal;font-weight:bold;color:#2D3142'> $title </h3>
                            <p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:Imprima, Arial, sans-serif;line-height:27px;color:#2D3142;font-size:18px'>
                            $name
                            $phone
                            $mail
                            $typefreedback
                            $text
                            $link
                            $utm
                            </p>
                        </td>
                        </tr>
                        </table></td>
                    </tr>
                    </table></td>
                </tr>
                </table></td>
            </tr>
            </table>
            <table cellpadding='0' cellspacing='0' class='es-content' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'>
            <tr>
            <td align='center' style='padding:0;Margin:0'>
                <table bgcolor='#efefef' class='es-content-body' align='center' cellpadding='0' cellspacing='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#EFEFEF;border-radius:0 0 20px 20px;width:600px'>
                <tr>
                <td align='left' style='Margin:0;padding-top:30px;padding-bottom:40px;padding-left:40px;padding-right:40px'>
                    <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                    <tr>
                    <td align='center' valign='top' style='padding:0;Margin:0;width:520px'>
                        <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                        <tr>
                        <td align='center' style='padding:0;Margin:0'><span class='msohide es-button-border' style='border-style:solid;border-color:#2CB543;background:#0054EE;border-width:0px;display:block;border-radius:30px;width:auto;mso-hide:all'><a href='$link' class='es-button msohide' target='_blank' style='mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#FFFFFF;font-size:22px;padding:15px 20px 15px 20px;display:block;background:#0054EE;border-radius:30px;font-family:Imprima, Arial, sans-serif;font-weight:bold;font-style:normal;line-height:26px;width:auto;text-align:center;mso-padding-alt:0;mso-border-alt:10px solid  #0054EE;mso-hide:all;padding-left:5px;padding-right:5px'>Открыть страницу</a></span></td>
                        </tr>
                        </table></td>
                    </tr>
                    </table></td>
                </tr>
                </table></td>
            </tr>
            </table>
            <table cellpadding='0' cellspacing='0' class='es-footer' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top'>
            <tr>
            <td align='center' style='padding:0;Margin:0'>
                <table bgcolor='#bcb8b1' class='es-footer-body' align='center' cellpadding='0' cellspacing='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px'>
                <tr>
                <td align='left' style='Margin:0;padding-left:20px;padding-right:20px;padding-bottom:30px;padding-top:40px'>
                    <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                    <tr>
                    <td align='left' style='padding:0;Margin:0;width:560px'>
                        <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'>
                        <tr>
                        <td align='center' class='es-m-txt-c' style='padding:0;Margin:0;padding-bottom:20px;font-size:0px'><img src='https://pomelnikov-art.ru/local/templates/swebix/images/loader.svg' alt='Logo' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;font-size:12px' title='Logo' height='60'></td>
                        </tr>
                        </table></td>
                    </tr>
                    </table></td>
                </tr>
                </table></td>
            </tr>
            </table>
            </td>
        </tr>
        </table>
    </div>
    ";
    if($isNotError) {
        // ----------------------------Отправка письма-------------------------- //
            mail("info@avanti-jewellery.ru", "$title | $date $temporary", "$message", "$headers");
        // ----------------------------Отправка письма-------------------------- //
        // ---------------------------- Отправка уведомления -------------------------- //
        // сюда нужно вписать токен вашего бота
        define('TELEGRAM_TOKEN', '7310148547:AAEa-1SAHdg-fHhptJd-5R9HzUQWhc_eZ_4');
        // https://api.telegram.org/bot6972879496:AAG6eay9aFldZJmLllFdRTcFlVK-zCXAWQg/getUpdates
        // сюда нужно вписать ваш внутренний айдишник
        define('TELEGRAM_CHATID', '-1002160823224');
        // Формируем данные собщения:
            $arr = array();
            $arr += ['Заявка с сайта:' => 'от ' . $arData["NAME"] . ", " . date("d.m.y") . " " . date("H:i")];        
            if($arData["URL"]) {
                $arr += ['Тема:' => "Форма - " . $arData["TITLE"] . ", отправленна со страницы: https://avanti-jewellery.ru" . $arData["URL"]];
            } else {
                $arr += ['Тема:' => "Форма - " . $arData["TITLE"]];
            }
            if($arData["SURNAME"]) {
                if($arData["NAME"]) {
                    $arr += ['Имя и Фамилия:' => $arData["NAME"] . " " . $arData["SURNAME"]];
                }
            } else {
                if($arData["NAME"]) {
                    $arr += ['Имя:' => $arData["NAME"]];
                }
            }
            if($arData["PHONE"]) {
                $arr += ['Телефон:' => $arData["PHONE"]];
            }
            if($arData["EMAIL"]) {
                $arr += ['Электронная почта:' => $arData["EMAIL"]];
            }
            if($arData["TYPEFEEDBACK"]) {
                $arr += ['Предпочтительный способ связи:' => $arData["TYPEFEEDBACK"]];
            }
            if($arData["TEXT"]) {
                $arr += ['Комментарий:' => $arData["TEXT"]];
            }
            if($arData["URL"]) {
                $arr += ['Страница:' => "https://avanti-jewellery.ru" . $arData["URL"]];
            }
            if($_POST["UTM_SORCE"]) {
                $arr += ['utm:' => $_POST["UTM_SORCE"]];
            }
            foreach($arr as $key => $value) {
                $txt .= "<b>" . $key . "</b> " . $value . "\n";
            };
        // Формируем данные собщения:
        function message_to_telegram($text)
        {
            $ch = curl_init();
            curl_setopt_array(
                $ch,
                array(
                    CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage',
                    CURLOPT_POST => TRUE,
                    CURLOPT_RETURNTRANSFER => TRUE,
                    CURLOPT_TIMEOUT => 10,
                    CURLOPT_POSTFIELDS => array(
                        'chat_id' => TELEGRAM_CHATID,
                        'text' => $text,
                        'parse_mode' => "html"
                    ),
                )
            );
            curl_exec($ch);
            curl_close($ch);
        }
        if($isNotError) {
            message_to_telegram($txt);
        }
        // ----------------------------Отправка уведомления-------------------------- // 
    }
    // ---------------------------- Отправка на почту -------------------------- // 
    echo 'success';
} else {
    echo 'OPTIONS';
}
?>




