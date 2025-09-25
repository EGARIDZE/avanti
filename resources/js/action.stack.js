function load() {
  $('#win8_wrapper').hide();
  loadscroll();
  innerViewportHeight();
};
/* Height */
  function innerViewportHeight() {
    var vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', vh + 'px');
  }
/* Height */
/* Load */
  function loadscroll() {
    window.onscroll = function() {
        var poss = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop
        if (poss >= 10) {
            alertCookie();
            window.onscroll = null;
        }
    }
  }
/* Load */
/* Slider center */
  document.addEventListener('DOMContentLoaded', function() {
    if(window.innerWidth <= 768) {
      var sliderCenter = document.querySelectorAll('.uk-slider-center');
      for (var element of sliderCenter) {
        element.setAttribute('data-uk-slider', 'center: true');
      }
    }
  });
/* Slider center */
/* Ajax Preload */
  var lastWait = [];
  /* non-xhr loadings */
  BX.showWait = function (node, msg)
  {
    node = BX(node) || document.body || document.documentElement;
    msg = msg || BX.message('JS_CORE_LOADING');
    var container_id = node.id || Math.random();
    var obMsg = node.bxmsg = document.body.appendChild(BX.create('DIV', {
        props: {
            id: 'wait_' + container_id,
            className: 'bx-core-waitwindow'
        },
        text: msg
    }));
    //UIkit.offcanvas.hide('#uk-block-filter');
    setTimeout(BX.delegate(_adjustWait, node), 10);
    $('#win8_wrapper').show();
    lastWait[lastWait.length] = obMsg;
    return obMsg;
  };
  BX.closeWait = function (node, obMsg)
  {
    $('#win8_wrapper').hide();
    if (node && !obMsg)
        obMsg = node.bxmsg;
    if (node && !obMsg && BX.hasClass(node, 'bx-core-waitwindow'))
        obMsg = node;
    if (node && !obMsg)
        obMsg = BX('wait_' + node.id);
    if (!obMsg)
        obMsg = lastWait.pop();
    if (obMsg && obMsg.parentNode)
    {
        for (var i = 0, len = lastWait.length; i < len; i++)
        {
            if (obMsg == lastWait[i])
            {
                lastWait = BX.util.deleteFromArray(lastWait, i);
                break;
            }
        }
        obMsg.parentNode.removeChild(obMsg);
        if (node)
            node.bxmsg = null;
        BX.cleanNode(obMsg, true);
    }
  };
  function _adjustWait()
  {
    if (!this.bxmsg)
        return;
    var arContainerPos = BX.pos(this),
        div_top = arContainerPos.top;
    if (div_top < BX.GetDocElement().scrollTop)
        div_top = BX.GetDocElement().scrollTop + 5;
    this.bxmsg.style.top = (div_top + 5) + 'px';
    if (this == BX.GetDocElement())
    {
        this.bxmsg.style.right = '5px';
    }
    else
    {
        this.bxmsg.style.left = (arContainerPos.right - this.bxmsg.offsetWidth - 5) + 'px';
    }
  }
/* Ajax Preload */
/* Preload */
  //function preload(){UIkit.toggle('.uk-preload',{animation:'uk-animation-preload',duration:500}).toggle()};
/* Preload */
/* Modal Consent */
  function consent() {
    $.ajax({
        url: '/local/templates/swebix/include/template/consent-ajax.php',
        type: 'GET',
        data: ({act:'openConsent'}),
            success: function(data) {
            $('.uk-consent-body').html(data);
        },
        error: function(data) {alert('error')},
    });
  };
/* Modal Consent */
/* Modal Cookie */
function consentCookie() {
$.ajax({
    url: '/local/templates/swebix/include/template/cookie-ajax.php',
    type: 'GET',
    data: ({act:'openCookie'}),
        success: function(data) {
        $('.uk-cookie-body').html(data);
        UIkit.toggle("#alertcookie").toggle();
    },
    error: function(data) {alert('error')},
});
};
function alertCookie() {
  getCookie("consent") ? "false" == getCookie("consent") && notifyCookie() : (setCookie("consent", "false"), notifyCookie())
}
function agreeCookie() {
  setCookie("consent", "true");
  UIkit.toggle("#alertcookie").toggle();
};
function notifyCookie() {
  UIkit.toggle("#alertcookie").toggle();
};
/* Modal Cookie */
/* Mask */
  function setCursorPosition(e, t) {
  t.focus(), t.setSelectionRange ? t.setSelectionRange(e, e) : t.createTextRange && ((t = t.createTextRange()).collapse(!0), t.moveEnd("character", e), t.moveStart("character", e), t.select())
  }
  function mask(e) {
    //console.log("mask", e);
    var t = this.placeholder,
      s = 0,
      e = t.replace(/\D/g, ""),
      n = this.value.replace(/\D/g, "");
    e.length >= n.length && (n = e), t = t.replace(/[_\d]/g, function (e) {
      return n.charAt(s++) || "_"
    }), this.value = t, (s = t.lastIndexOf(n.substr(-1))) < t.length && t != this.placeholder ? s++ : s = t.indexOf("_"), setCursorPosition(s, this)
  }
  function maskPhone() {
    this.addEventListener("input", mask, !0), this.focus(), setCursorPosition(4, this)
  };
/* Mask */
/* Time Work */
document.addEventListener('DOMContentLoaded', function() {
  var moscow_offset = -3 * 60; // 3 часа отступ по Гринвичу 
  var user_offset = new Date().getTimezoneOffset(); // текущий отступ пользователя
  var offset = user_offset + Math.abs(moscow_offset); // смещение 0 на -3 часа 
  var offsetTime = offset / 60;
  if(offsetTime.toString().search('-')) {
    var offsetTimeString = '-' + offsetTime.toString() + ' Час от МСК';
  } else {
    var offsetTimeString = offsetTime.toString().replace("-", "+") + ' Час от МСК';
  }
  var timeworks = document.querySelectorAll('input[name="TIMEWORK"]');
  for (var element of timeworks) {
    element.value = offsetTimeString;
  }
}, false);
/* Time Work */
/* Sanding form */
function ajaxPreloadSratSand(element) {
  element.classList.add("uk-sanding");
}
function ajaxPreloadEndSand(element) {
  element.classList.remove("uk-sanding");
}
function ajaxNotification(type) {
  var status = '';
  var messageNotification = '';
  if(type == 'success' || type == 'upload') {
    status = 'success';
    messageNotification = '<div class="uk-icon uk-scrollspy-inview" data-uk-icon="icon: check; ratio: 4" data-uk-scrollspy="cls:uk-animation-slide-bottom-small"></div><h2>Спасибо за проявленный интерес!</h2><p>Ваш запрос успешно отправлен! Наш менеджер свяжется с вами.</p>';
  } else if(type == 'signed') {
    status = 'signed';
    messageNotification = '<div class="uk-icon uk-scrollspy-inview" data-uk-icon="icon: mail; ratio: 4" data-uk-scrollspy="cls:uk-animation-slide-bottom-small"></div><h2>Спасибо, Вы подписались!</h2><p>на получение информационных писем нашего сайта!</p>';
  } else if(type == 'danger') {
    status = 'danger';
    messageNotification = '<div class="uk-icon uk-scrollspy-inview" data-uk-icon="icon: warning; ratio: 4" data-uk-scrollspy="cls:uk-animation-slide-bottom-small"></div><h2>Ошибка, Ваш запрос не отправленно!</h2><p>Извините, возможно наша система определила Вас как спам бота, попробуйте отправить заявку еще раз.</p>';
  } else {
    status = 'success';
    messageNotification = '<div class="uk-icon uk-scrollspy-inview" data-uk-icon="icon: check; ratio: 4" data-uk-scrollspy="cls:uk-animation-slide-bottom-small"></div><h2>Спасибо за проявленный интерес!</h2><p>Ваш запрос успешно отправлен! Наш менеджер свяжется с вами выбранным способом.</p>';
  }
  UIkit.notification({
    message: messageNotification,
    status: status + ' uk-notification-panel',
    pos: 'top-center',
    timeout: 50000
  });
  //if(type == 'success' || type == 'signed' || type == 'upload') {
    if(document.getElementById('callback')) {
      if(document.getElementById('callback').classList.contains('uk-open')) {
        UIkit.modal('#callback').hide();
      }
    }
  //}
  ym(69493453,'reachGoal','sand');
  //setTimeout(ajaxPreloadEndSand(element), 1000);
}
function ajaxFormSand(type) {
  event.preventDefault();
  //ajaxPreloadSratSand(this);
  const formData = new FormData(this);
  var params = formData;
  // 1. Создаём новый объект XMLHttpRequest
  var xhr = new XMLHttpRequest();
  // 2. Конфигурируем его: GET-запрос на URL 'phones.json'
  //xhr.open('GET', link + data, true);
  xhr.open('POST', '/order/index.php', false);
  xhr.setRequestHeader(
    "authorization", "Bearer 606Yu101Hnk2010YSNmlaw201600U"
  );
  // 3. Отсылаем запрос
  xhr.send(params);
  // 4. Если код ответа сервера не 200, то это ошибка
  if (xhr.status != 200) {
    // обработать ошибку
    ajaxNotification('danger');
    //console.log( xhr.status + ': ' + xhr.statusText ); // пример вывода: 404: Not Found
  } else {
    // вывести результат
    //console.log(String(xhr.responseText));
    ajaxNotification(String(xhr.responseText));
    this.reset();
  }
}
/* Sanding form */