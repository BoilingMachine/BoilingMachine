var clock;

jQuery(function($) {

new WOW().init();

$('.mywoo-checkout-total:nth-child(1)').css('padding','50');
$('.mywoo-checkout-total:nth-child(1)').css('border','2px solid #272727');
$('.mywoo-checkout-total:nth-child(1)').css('border-radius','15px');
$('.mywoo-checkout-total:nth-child(1)').css('position','sticky');
$('.mywoo-checkout-total:nth-child(1)').css('top','100px');

$("a[href^='#']").click(function(){
    var _href = $(this).attr("href");
    $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
    return false;
});


$('body').on('change','#billing_first_name', function() {
  if ($(this).val() == '') {   
    $(this).removeClass("active");
    $(this).css("border-left","3px solid red");
    $(this).parent(".woocommerce-input-wrapper").append("<span class='my-form-checkout-notice'>Заполните Имя</span>");
    $(this).parent(".woocommerce-input-wrapper").find("input").css("margin-bottom","5px");    
  }else{
    $(this).css("border-left","3px solid green");
    $(this).parent(".woocommerce-input-wrapper").find(".my-form-checkout-notice").remove();
    $(this).addClass("active");
  }
});



$('body').on('change','#billing_last_name', function() {
  if ($(this).val() == '') {
    $(this).removeClass("active");
    $(this).css("border-left","3px solid red");
    $(this).parent(".woocommerce-input-wrapper").find("input").css("margin-bottom","5px");
    $(this).parent(".woocommerce-input-wrapper").append("<span class='my-form-checkout-notice'>Заполните Фамилию</span>");
  }else{
    $(this).css("border-left","3px solid green");    
    $(this).parent(".woocommerce-input-wrapper").find(".my-form-checkout-notice").remove();
    $(this).addClass("active");
  }
});
 



$('body').on('change','#billing_patronymic', function() {
  if ($(this).val() == '') {
    $(this).removeClass("active");
    $(this).css("border-left","3px solid red");
    $(this).parent(".woocommerce-input-wrapper").find("input").css("margin-bottom","5px");;
    $(this).parent(".woocommerce-input-wrapper").append("<span class='my-form-checkout-notice'>Заполните Фамилию</span>");
  }else{
    $(this).css("border-left","3px solid green");    
    $(this).parent(".woocommerce-input-wrapper").find(".my-form-checkout-notice").remove();
    $(this).addClass("active");
  }
});



$('body').on('change','#billing_phone', function() {
  if ($(this).val() == '') {
    $(this).removeClass("active");
    $(this).css("border-left","3px solid red");
    $(this).parent(".woocommerce-input-wrapper").find("input").css("margin-bottom","5px");
    $(this).parent(".woocommerce-input-wrapper").append("<span class='my-form-checkout-notice'>Заполните телефон</span>");
  }else{
    $(this).css("border-left","3px solid green");    
    $(this).parent(".woocommerce-input-wrapper").find(".my-form-checkout-notice").remove();
    $(this).addClass("active");
  }
});



$('body').on('change','#billing_email', function() {
  if ($(this).val() == '') {
    $(this).removeClass("active");
    $(this).css("border-left","3px solid red");
    $(this).parent(".woocommerce-input-wrapper").find("input").css("margin-bottom","5px");
    $(this).parent(".woocommerce-input-wrapper").append("<span class='my-form-checkout-notice'>Заполните Email</span>");
  }else{
    $(this).css("border-left","3px solid green");    
    $(this).parent(".woocommerce-input-wrapper").find(".my-form-checkout-notice").remove();
    $(this).addClass("active");
  }
});



$('body').on('change','#organisation_name', function() {
  if ($(this).val() == '') {
    $(this).removeClass("active");
    $(this).css("border-left","3px solid red");
    $(this).parent(".woocommerce-input-wrapper").find("input").css("margin-bottom","5px");
    $(this).parent(".woocommerce-input-wrapper").append("<span class='my-form-checkout-notice'>Заполните Наименование</span>");
  }else{
    $(this).css("border-left","3px solid green");    
    $(this).parent(".woocommerce-input-wrapper").find(".my-form-checkout-notice").remove();
    $(this).addClass("active");
  }
});


$('body').on('change','#organisation_address', function() {
  if ($(this).val() == '') {
    $(this).removeClass("active");
    $(this).css("border-left","3px solid red");
    $(this).parent(".woocommerce-input-wrapper").find("input").css("margin-bottom","5px");
    $(this).parent(".woocommerce-input-wrapper").append("<span class='my-form-checkout-notice'>Заполните адресс</span>");
  }else{
    $(this).css("border-left","3px solid green");    
    $(this).parent(".woocommerce-input-wrapper").find(".my-form-checkout-notice").remove();
    $(this).addClass("active");
  }
});


$('body').on('change','#organisation_inn', function() {
  if ($(this).val() == '') {
    $(this).removeClass("active");
    $(this).css("border-left","3px solid red");
    $(this).parent(".woocommerce-input-wrapper").find("input").css("margin-bottom","5px");
    $(this).parent(".woocommerce-input-wrapper").append("<span class='my-form-checkout-notice'>Заполните ИНН</span>");
  }else{
    $(this).css("border-left","3px solid green");    
    $(this).parent(".woocommerce-input-wrapper").find(".my-form-checkout-notice").remove();
    $(this).addClass("active");
  }
});


$('body').on('change','#organisation_kpp', function() {
  if ($(this).val() == '') {
    $(this).removeClass("active");
    $(this).css("border-left","3px solid red");
    $(this).parent(".woocommerce-input-wrapper").find("input").css("margin-bottom","5px");
    $(this).parent(".woocommerce-input-wrapper").append("<span class='my-form-checkout-notice'>Заполните КПП</span>");
  }else{
    $(this).css("border-left","3px solid green");    
    $(this).parent(".woocommerce-input-wrapper").find(".my-form-checkout-notice").remove();
    $(this).addClass("active");
  }
});

$('body').on('change','#organisation_checking_account', function() {
  if ($(this).val() == '') {
    $(this).removeClass("active");
    $(this).css("border-left","3px solid red");
    $(this).parent(".woocommerce-input-wrapper").find("input").css("margin-bottom","5px");
    $(this).parent(".woocommerce-input-wrapper").append("<span class='my-form-checkout-notice'>Заполните ОКПО</span>");
  }else{
    $(this).css("border-left","3px solid green");    
    $(this).parent(".woocommerce-input-wrapper").find(".my-form-checkout-notice").remove();
    $(this).addClass("active");
  }
});

$('body').on('change','#organisation_bank', function() {
  if ($(this).val() == '') {
    $(this).removeClass("active");
    $(this).css("border-left","3px solid red");
    $(this).parent(".woocommerce-input-wrapper").find("input").css("margin-bottom","5px");
    $(this).parent(".woocommerce-input-wrapper").append("<span class='my-form-checkout-notice'>Заполните ОГРН</span>");
  }else{
    $(this).css("border-left","3px solid green");    
    $(this).parent(".woocommerce-input-wrapper").find(".my-form-checkout-notice").remove();
    $(this).addClass("active");
  }
});

$('body').on('change','#billing_city', function() {
  if ($(this).val() == '') {
    $(this).removeClass("active");
    $(this).css("border-left","3px solid red");
    $(this).parent(".woocommerce-input-wrapper").find("input").css("margin-bottom","5px");
    $(this).parent(".woocommerce-input-wrapper").append("<span class='my-form-checkout-notice'>Заполните город</span>");
  }else{
    $(this).css("border-left","3px solid green");    
    $(this).parent(".woocommerce-input-wrapper").find(".my-form-checkout-notice").remove();
    $(this).addClass("active");
  }
});


$('body').on('change','#billing_address_1', function() {
  if ($(this).val() == '') {
    $(this).removeClass("active");
    $(this).css("border-left","3px solid red");
    $(this).parent(".woocommerce-input-wrapper").find("input").css("margin-bottom","5px");
    $(this).parent(".woocommerce-input-wrapper").append("<span class='my-form-checkout-notice'>Введите адресс</span>");
  }else{
    $(this).css("border-left","3px solid green");    
    $(this).parent(".woocommerce-input-wrapper").find(".my-form-checkout-notice").remove();
    $(this).addClass("active");
  }
});




$("label[for='organisation_private_person']").addClass("active");

$('label[for="organisation_company"]').click(function() {
     $(this).addClass("active");
     $("label[for='organisation_private_person']").removeClass("active");
});

$('label[for="organisation_private_person"]').click(function() {
     $(this).addClass("active");
     $("label[for='organisation_company']").removeClass("active");
});


$('body').on('change', function() {
  if ( $('label[for="organisation_private_person"]').hasClass("active") ) {
     if ( $("#billing_first_name").hasClass("active") && $("#billing_last_name").hasClass("active") && $("#billing_patronymic").hasClass("active") && $("#billing_phone").hasClass("active")  && $("#billing_email").hasClass("active") && $("#billing_email").hasClass("active")  && $("#billing_city").hasClass("active") && $("#billing_address_1").hasClass("active")) {
      $(".place-order").find(".button").css("pointer-events","all");
    }else{
      $(".place-order").find(".button").css("pointer-events","none");
    }   
  }

  if ( $('label[for="organisation_company"]').hasClass("active") ) {
     if ( $("#billing_first_name").hasClass("active") && $("#billing_last_name").hasClass("active") && $("#billing_patronymic").hasClass("active") && $("#billing_phone").hasClass("active")  && $("#billing_email").hasClass("active") && $("#billing_email").hasClass("active")  && $("#billing_city").hasClass("active") && $("#billing_address_1").hasClass("active") && $("#organisation_name").hasClass("active") && $("#organisation_address").hasClass("active") && $("#organisation_inn").hasClass("active") && $("#organisation_kpp").hasClass("active") && $("#organisation_checking_account").hasClass("active") && $("#organisation_bank").hasClass("active")) {
      $(".place-order").find(".button").css("pointer-events","all");
    }else{
           
      $(".place-order").find(".button").css("pointer-events","none");
    }   
  }

});


$(function(){
  $(window).scroll(function(){
    if($(window).scrollTop() > 1200) {
      $('#scroll_top').show();
      $('#scroll_top').css("display","flex");
    } else {
      $('#scroll_top').hide();
    }
  });
 
  $('#scroll_top').click(function(){
    $('html, body').animate({scrollTop: 0}, 600);
    return false;
  });
	

	
	
});





if ($(".mywoo-product-slider-k").hasClass("mywoo-product-slider")) {
    $(this).remove();
}
$(".map-container").css("border-radius","10px")






var clock;

      clock = $('.clock').FlipClock({
            clockFace: 'DailyCounter',
            autoStart: false,
            callbacks: {
              stop: function() {
                $('.message').html('The clock has stopped!')
              }
            }
        });
            
        clock.setTime(1546160);
        clock.setCountdown(true);
        clock.start();

$('.first-slider').owlCarousel({
    loop:true,
    margin:15,
    nav:true,
    responsive:{
        576:{
            items:2,
            center: false
        },
        0:{
          items:1,
          center: false
        },
        768:{
          items: 3,
          center: true
        },
        992:{
          items: 5,
          center: true
        }
    }  
});

$('.second-slider').owlCarousel({
    loop:true,
    margin:10,
    dots: false,
    nav:true,
    responsive:{
        576:{
            items:2,
            center: false
        },
        0:{
          items:1,
          center: false
        },
        768:{
          items: 2,
          center: false
        }
    }  
});

$('.third-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        576:{
            items:2,
            center: false,
            nav:true
        },
        0:{
          nav:true,
          items:1
        },
        768:{
          nav:true,
          items: 3
        }
    }  
});




$(".third-slider").find(".owl-nav").removeClass("disabled");
$(".second-slider").find(".owl-dots").addClass("disabled");



$('.lazy').lazy({
  effect: "fadeIn",
  effectTime: 100,
  threshold: 0
});
  
$(".my-woo-single-landing-com-fps-game-container").on("click", ".my-woo-single-landing-com-fps-game", function(){
  $(".my-woo-single-landing-com-fps-game-container .my-woo-single-landing-com-fps-game").removeClass("active");
  $(this).toggleClass("active");
});

$(".my-woo-single-landing-com-fps-game-container").on("click", ".my-woo-single-landing-com-fps-quan", function(){
  $(".my-woo-single-landing-com-fps-game-container .my-woo-single-landing-com-fps-quan").removeClass("active");
  $(this).toggleClass("active");
});


$( "#pa_videokarta" )
  .change(function () {
    var str = "";
    $(this).find( "option:selected" ).each(function() {
      str += $( this ).text() + " ";
           
    });
    $( ".videokarta-attr" ).text( str );


  })
  .change();



$('body').on('change', function() {
     var price = $("bdi").text();
    $(".computer-price-span").text(price);    
});



$( "#pa_nakopitel-ssd" )
  .change(function () {
    var str = "";
    $(this).find( "option:selected" ).each(function() {
      str += $( this ).text() + " ";
         
    });
    $( ".ssd_nakopitel-attr" ).text( str );

  })
  .change();

$( "#pa_nakopitel-hdd" )
  .change(function () {
    var str = "";
    $(this).find( "option:selected" ).each(function() {
      str += $( this ).text() + " ";
      
    });
    $( ".zhestkij_disk-attr" ).text( str );
  
  })
  .change();

$( "#pa_operativnaya-pamyat" )
  .change(function () {
    var str = "";
    $(this).find( "option:selected" ).each(function() {
      str += $( this ).text() + " ";
    
    });
    $( ".operativnaya_pamyat-attr" ).text( str );

  })
  .change();


$( ".variable-item.selected").find(".var-checkbox-img").attr("src","/wp-content/uploads/checkbox-valide.png");
$( ".variable-item").click(function(){
      $( ".variable-item").find(".var-checkbox-img").attr("src","/wp-content/uploads/checkbox-innnvalide.png");
      var attr = $(this).attr('aria-checked'); 
      if (attr === "false") {
        $(this).find(".var-checkbox-img").attr("src","/wp-content/uploads/checkbox-valide.png");
      }else{
        $(this).find(".var-checkbox-img").attr("src","/wp-content/uploads/checkbox-innnvalide.png");
      }   
});




$( ".more-config-button").click(function(){
      $('.computer-landing-popup').css('display','block'); 
      $('.computer-landing').css('display','block'); 
      
       
});
$(".close-popup-landing-comp").on("click", function(){
  $(".computer-landing").css("display", "none");
  $('.computer-landing-popup').css('display','none');
  
});


$( ".header-search-button").click(function(){
    $('.header-search-container-back').css('display','flex'); 
      $('.header-search-container').css('display','flex'); 
      $('body').css('overflow','hidden');        
});

$(".header-search-popup-close").on("click", function(){
  $(".header-search-container").css("display", "none"); 
  $('body').css('overflow','auto');
  $('.header-search-container-back').css('display','none'); 
});


$(".treidin-konfigurator-ul-li").on("click", function(){
  $(".treidin-konfigurator-ul-li").removeClass("active");
  $(this).addClass("active");
});
$(".treidin-konfigurator-ul-li-video").on("click", function(){
  $(".treidin-konfigurator-ul-li-video").removeClass("active");
  $(this).addClass("active");
});
$(".treidin-konfigurator-ul-li-opera").on("click", function(){
  $(".treidin-konfigurator-ul-li-opera").removeClass("active");
  $(this).addClass("active");
});
$(".treidin-konfigurator-ul-li-ssd").on("click", function(){
  $(".treidin-konfigurator-ul-li-ssd").removeClass("active");
  $(this).addClass("active");
});
$(".treidin-konfigurator-ul-li-hdd").on("click", function(){
  $(".treidin-konfigurator-ul-li-hdd").removeClass("active");
  $(this).addClass("active");
});
$(".treidin-konfigurator-ul-li-bp").on("click", function(){
  $(".treidin-konfigurator-ul-li-bp").removeClass("active");
  $(this).addClass("active");
});

 $(document).mouseup(function (e){ // отслеживаем событие клика по веб-документу
        var block = $(".header-search-container"); // определяем элемент, к которому будем применять условия (можем указывать ID, класс либо любой другой идентификатор элемента)
        if (!block.is(e.target) // проверка условия если клик был не по нашему блоку
            && block.has(e.target).length === 0) { // проверка условия если клик не по его дочерним элементам
            $(".header-search-container-back").css("display","none");
            $('body').css('overflow','auto'); // если условия выполняются - скрываем наш элемент
        }
    });


$( ".upgrade-center-main-content__link").click(function(){
    $('.popup-apgreid-back').css('display','flex');  
    $('body').css('overflow','hidden');        
});

$(".popup-apgreid-container-close").on("click", function(){
  $(".popup-apgreid-back").css("display", "none"); 
  $('body').css('overflow','auto');
});

 $(document).mouseup(function (e){ // отслеживаем событие клика по веб-документу
        var block = $(".popup-apgreid-container"); // определяем элемент, к которому будем применять условия (можем указывать ID, класс либо любой другой идентификатор элемента)
        if (!block.is(e.target) // проверка условия если клик был не по нашему блоку
            && block.has(e.target).length === 0) { // проверка условия если клик не по его дочерним элементам
            $(".popup-apgreid-back").css("display","none");
            $('body').css('overflow','auto'); // если условия выполняются - скрываем наш элемент
        }
    });





$('body').on('click','.single_add_to_cart_button[type="submit"]', function() {
  $(this).text("Добавлено");
});

$("#DateCountdown").TimeCircles({
    "animation": "smooth",
    "bg_width": 1.2,
    "fg_width": 0.1,
    "circle_bg_color": "#222222",
    "time": {
        "Days": {
            "text": "Дней",
            "color": "#e2730b",
            "show": true
        },
        "Hours": {
            "text": "Часов",
            "color": "#e2730b",
            "show": true
        },
        "Minutes": {
            "text": "Minutes",
            "color": "#BBFFBB",
            "show": false
        },
        "Seconds": {
            "text": "Seconds",
            "color": "#FF9999",
            "show": false
        }
    }
});

$(".textDiv_Days").prepend("<img src='/wp-content/uploads/timer-svg.svg' class='timer-img'>");

$(".owl-prev span").html("<img src='/wp-content/uploads/prevnew1.svg'>");
$(".owl-next span").html("<img src='/wp-content/uploads/nextnew1.svg'>");

$( ".owl-prev span img" ).hover(function(){ // задаем функцию при наведении курсора на элемент 
  $( this ).attr( "src", "/wp-content/uploads/prehovernewnew.svg" ); // задаем цвет заднего фона
  }, function(){ // задаем функцию, которая срабатывает, когда указатель выходит из элемента  
  $( this ).attr( "src", "/wp-content/uploads/prehovernew.svg" ); // задаем цвет заднего фона
});
$( ".owl-next span img" ).hover(function(){ // задаем функцию при наведении курсора на элемент 
  $( this ).attr( "src", "/wp-content/uploads/nexthover1.svg" ); // задаем цвет заднего фона
  }, function(){ // задаем функцию, которая срабатывает, когда указатель выходит из элемента  
  $( this ).attr( "src", "/wp-content/uploads/nextnew1.svg" ); // задаем цвет заднего фона
});

$(".woocommerce-cart-form").on("change", ".qty", function() {
    $("[name='update_cart']").removeAttr('disabled');
    $("[name='update_cart']").trigger("click");
});


$(".mobile-burger-link").on("click", function(){
  $("footer .mobile-footer-burger").css("display", "block");

});
$(".close-popup").on("click", function(){
  $("footer .mobile-footer-burger").css("display", "none");
});



$('body').on('click','.open-attributes', function() {
  $(this).text("Закрыть конфигурацию");
  $(this).addClass("active");
  $(this).siblings(".mywoo-comp-attr").css("display", "block");
});

$('body').on('click','.open-attributes.active', function() {
  $(this).text("Открыть конфигурацию");
  $(this).removeClass("active");
  $(this).siblings(".mywoo-comp-attr").css("display", "none");
});


  $('.nav-link-collapse').on('click', function() {
    $('.nav-link-collapse').not(this).removeClass('nav-link-show');
    $(this).toggleClass('nav-link-show');
  });



  $('body').on('click','.bm-computer-landing-header-menu__link', function() {
    $("form.cart").find(".single_add_to_cart_button").trigger('click'); 
  });







});




function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

function windowSize(){
    if ($(window).width() <= '1350'){
        /*
        $("footer.bm-footer").load("/wp-content/themes/boiling_machine/template-parts/footer-mobile.php");
        $("header.boiling-machine-header").load("/wp-content/themes/boiling_machine/template-parts/header-mobile.php");
        */
        $(".footer-dekstop").css("display", "none");
        $(".footer-mobile-con").css("display", "block");

        $(".header-pc").css("display", "none");
        $(".header-mobile-content").css("display", "block");

        $(".bm-computer-landing-header").css("display","none");
        $(".bm-computer-landing-header-mobile").css("display","flex");
    } else {
        /*
        $("footer.bm-footer").load("/wp-content/themes/boiling_machine/template-parts/footer.php");
        $("header.boiling-machine-header").load("/wp-content/themes/boiling_machine/template-parts/header.php");
        */
        $(".header-pc").css("display", "block");
        $(".header-mobile-content").css("display", "none");
        
        $(".footer-dekstop").css("display", "block");
        $(".footer-mobile-con").css("display", "none");

        $(".bm-computer-landing-header-mobile").css("display","none");
        $(".bm-computer-landing-header").css("display","flex");
    }
    if ($(window).width() <= '576'){
      $(".youtube-video").remove();
      $("#scroll_top").remove();
    }
}
$(window).on('load resize',windowSize);


// Включить радио кнопку изначально
jQuery(function() {
    var $radios = jQuery('input:radio[name=organisation]');
    if($radios.is(':checked') === false) {
        $radios.filter('[value="private_person"]').prop('checked', true);
    }
});

// Скрытие реквизитов
jQuery(document).ready(function($){
  $('.woocommerce-organisation-fields__field-wrapper').hide();

  $("input[name=organisation]:radio").click(function () {
    if ($('input[name=organisation]:checked').val() == "private_person") {
      $('.woocommerce-organisation-fields__field-wrapper').hide();
    } else if ($('input[name=organisation]:checked').val() == "company") {
      $('.woocommerce-organisation-fields__field-wrapper').show();
    }
  });
});



