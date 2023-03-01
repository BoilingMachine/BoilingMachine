<?php get_header(); ?>

<div class="bm-adaptive bm-margin bm">
    <div class="bm-contacts-header">
        <div class="bm-contacts-breadcrumb">
            <?php do_action( 'woocommerce_before_main_content' ); ?>
        </div>
    </div>
</div>
<section class='first-section'>
    <div class="bm-adaptive bm-margin bm">
        <div class='bm-container'>
            <div class='bm-container-background'>
                <div class='background-content'>
                    <h1 class="bm-title bm-align-left bm-title-main">Аэрография на новое кресло</h1>
                    <p class="bm-text">Кресло с рисунком любимого персонажа или принтом из известной игры, фильма и мультсериала станет оригинальным подарком себе, друзьям или близким</p>
                    <p class="price">от 14 990 р</p>
                    <a class="link" uk-toggle href="#modal-center">Заказать аэрографию</a>
                </div>
                <div class="aero-image">
                    <img src="/wp-content/uploads/aero-man.webp">
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="bm-adaptive bm-margin bm">
        <div class='bm-container'>
            <div class="aero-benefits">
                <div class="aero-benefit">
                    <img src="/wp-content/uploads/tick.svg">
                    <p class="aero-text">Высокое качество детализации</p>
                </div>
                <div class="aero-benefit">
                    <img src="/wp-content/uploads/paint-brush.svg">
                    <p class="aero-text">Натуральные переходы цвета</p>
                </div>
                <div class="aero-benefit">
                    <img src="/wp-content/uploads/paint_spray-1.svg">
                    <p class="aero-text">Равномерность покрытия</p>
                </div>
                <div class="aero-benefit">
                    <img src="/wp-content/uploads/3_prohibited_forbidden_sign_with_3d_modern_style-1.svg">
                    <p class="aero-text">Отсутствие запаха</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bm-section">
    <div class="bm-adaptive bm-margin bm">
        <div class='bm-container'>
            <div class="bm-title">
                <h2 class="bm-title__title">
                    Наши работы
                </h2>
            </div>
            <div class="bm-aero-lightbox" uk-grid uk-lightbox="animation: slide">
                <div class="lightbox2">
                    <div uk-lightbox class="lightbox-img"><a href="/wp-content/uploads/cod.webp"><img src="/wp-content/uploads/rectangle-3330.webp"></a></div>
                    <div uk-lightbox class="lightbox-img"><a href="/wp-content/uploads/elden-ring.webp"><img src="/wp-content/uploads/rectangle-3331.webp"></a></div>
                </div>
                <div class="lightbox3">
                    <div uk-lightbox class="lightbox-img"><a href="/wp-content/uploads/throne-of-games.webp"><img src="/wp-content/uploads/rectangle-3327.webp"></a></div>
                    <div uk-lightbox class="lightbox-img"><a href="/wp-content/uploads/cod-warzone.webp"><img src="/wp-content/uploads/rectangle-3329.webp"></a></div>
                    <div uk-lightbox class="lightbox-img"><a href="/wp-content/uploads/gta-v.webp"><img src="/wp-content/uploads/rectangle-3328.webp"></a></div>
                </div>
                <div class="lightbox2 show-more">
                    <div uk-lightbox class="lightbox-img"><a href="/wp-content/uploads/cyberpunk.webp"><img src="/wp-content/uploads/rectangle-3332.webp"></a></div>
                    <div uk-lightbox class="lightbox-img"><a href="/wp-content/uploads/new-ear-pudge.webp"><img src="/wp-content/uploads/rectangle-3333.webp"></a></div>
                </div>
                <div class="lightbox3 show-more">
                    <div uk-lightbox class="lightbox-img"><a href="/wp-content/uploads/rick-morty.webp"><img src="/wp-content/uploads/rectangle-3334.webp"></a></div>
                    <div uk-lightbox class="lightbox-img"><a href="/wp-content/uploads/cs-go.webp"><img src="/wp-content/uploads/rectangle-3336.webp"></a></div>
                    <div uk-lightbox class="lightbox-img"><a href="/wp-content/uploads/dota.webp"><img src="/wp-content/uploads/rectangle-3335.webp"></a></div>
                </div>
            </div>
            <p class="step-more-button">Показать еще</p>
        </div>
    </div>
</section>
<script>
    $(function (){

        $('.step-more-button').click(function (){
            if($(this).hasClass('active')){
                $(this).removeClass('active').text('Показать еще')
                $('.show-more').css("display","none");
            }else{
                $(this).addClass('active').text('Скрыть')
                $('.show-more').css("display","grid");
            }
        })
    });
</script>
<section class="bm-section">
    <div class="bm-adaptive bm-margin bm">
        <div class='bm-container'>
            <div class="bm-title">
                <h2 class="bm-title__title">
                    Как это работает
                </h2>
            </div>
            <div class="grid-3 margin50">
                <div class="about-work-cont">
                    <div class="about-work-cont-back back1">
                        <img src="/wp-content/uploads/32-1.png">
                        <p class="about-work-cont-text">Заполните <span><a uk-toggle href="#modal-center">форму обратной связи</a></span></p>
                    </div>
                </div>
                <div class="about-work-cont">
                    <div class="about-work-cont-back back2">
                        <img src="/wp-content/uploads/6-1-1.png">
                        <p class="about-work-cont-text">Наш менеджер свяжется с вами для согласования особенностей рисунка и способа получения кресла</p>
                    </div>
                </div>
                <div class="about-work-cont">
                    <div class="about-work-cont-back back3">
                        <img src="/wp-content/uploads/5-2-1.png">
                        <p class="about-work-cont-text">Оплатите заказ и дождитесь доставки</p>
                        <a class="about-work-cont-link" href="#" target="_blank">Подробнее об условиях доставки</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bm-section">
    <div class="bm-adaptive bm-margin bm">
        <div class='bm-container'>
            <div class="bm-title">
                <h2 class="bm-title__title">
                    Частые вопросы
                </h2>
            </div>
            <div class="bm-faq-container">
                <div class="bm-faq-block">
                    <p class="bm-faq-block__title">Чем аэрография отличается от обычного нанесения краски?</p>
                    <p class="bm-faq-block__text">Сжиженная краска заливается в аэрограф, откуда под давлением воздуха распыляется при нажатии на курок. Метод аэрографии позволяет наносить тонкие слои краски и за счет этого передавать малейшие детали и натуральные переходы цвета</p>
                </div>
                <div class="bm-faq-block">
                    <p class="bm-faq-block__title">Зачем мне рисунок на кресле?</p>
                    <p class="bm-faq-block__text">Качественная аэрография способна превратить ваше кресло в настоящее произведение искусства — уникальный предмет интерьера, который будет отражать интересы своего владельца</p>
                </div>
                <div class="bm-faq-block">
                    <p class="bm-faq-block__title">Как выбрать принт?</p>
                    <p class="bm-faq-block__text">Выбор рисунка ограничен лишь вашей фантазией. Это может быть персонаж игры или фильма, мульт герой, красивый пейзаж и любой другой арт</p>
                </div>
                <div class="bm-faq-block">
                    <p class="bm-faq-block__title">Стирается ли рисунок?</p>
                    <p class="bm-faq-block__text">Нанесенное при помощи аэрографии изображение не боится ни воды, ни мелких физических нагрузок. Однако не стоит оставлять рисунок под действием прямых солнечных лучей, он может потерять первоначальную яркость цвета</p>
                </div>
                <div class="bm-faq-block">
                    <p class="bm-faq-block__title">Стоимость услуги окончательная?</p>
                    <p class="bm-faq-block__text">Да, в нее заложены расходные материалы и работа художника-аэрографа</p>
                </div>
                <div class="bm-faq-block">
                    <p class="bm-faq-block__title">Какие сроки доставки?</p>
                    <p class="bm-faq-block__text">Доставка кресла с аэрографией осуществляются в срок до двух недель. Точные сроки и удобные способы доставки согласуются с менеджером при оформлении заказа. Как только аэрография будет выполнена, вы получите звонок об отправлении кресла в доставку или сможете забрать его самостоятельно по адресу: <span>г. Москва , ул. Спартаковский переулок 2с1, 4 подьезд, 3 офис</span>
                        Мы работаем без выходных с 10:00 до 21:00.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bm-section form-form">
    <div class="bm-adaptive bm-margin bm">
        <div class='bm-container'>
            <div class="bm-form-container">
                <div class="bm-form-container-image">
                    <!-- <img src="/wp-content/uploads/sprayer-painting-cars-automotive-industry-1.webp"> -->
                </div>
                <div class="bm-form-container-form">
                    <div class="bm-form-container-form-block">
                        <?php echo do_shortcode('[wpforms id="18721" title="false" description="false"]'); ?>
                    </div>

                </div>
            </div>



        </div>
    </div>
</section>

<div id="modal-center" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="popup-container">
            <?php echo do_shortcode('[wpforms id="18721" title="false" description="false"]'); ?>
        </div>

    </div>
</div>

<style>
    #modal-center{z-index: 99999;}
    .about-work-cont-link:hover{
        text-decoration: none !important;
        color: #DA1414;
    }
    .link:hover, .form-submit:hover{
        text-decoration: none !important;
        transition: .3s !important;
        background: #DA1414 !important;
        color: #FFFFFF !important;
    }
    .step-more-button{display: none;}
    .uk-lightbox-toolbar{transform: unset !important;}
    .uk-lightbox-button{opacity: 1 !important;}
    h1, h2{
        line-height: 120% !important;
    }
    [class*=uk-modal-close-]{
        right: 25px !important;
        top: 25px !important;
        left: auto;
    }
    .uk-modal-body{
        padding: 50px 70px !important;
        background: #F8F8F8;
        border-radius: 15px;
    }
    .bm-title-main{margin-bottom: 20px !important;}
    .bm-form-container-form__title{
        font-style: normal;
        font-weight: 600;
        font-size: 42px !important;
        line-height: 130%;
        text-align: center;
        color: #181818;
        margin: 0 !important;
        margin-bottom: 20px !important;
    }
    .bm-form-container-form__text{
        font-style: normal;
        font-weight: 400;
        font-size: 18px !important;
        line-height: 140%;
        text-align: center;
        color: #181818;
        margin: 0 !important;
        margin-bottom: 30px !important;
    }


    .margin50{
        margin-top: 50px;
    }
    .about-work-cont-back{
        text-align: center;
        padding: 20px;

    }
    .about-work-cont-back.back1{
        background: url(/wp-content/uploads/1text.png);
        background-size: auto;
        background-position-x: 40%;
        background-repeat: no-repeat;
    }
    .about-work-cont-back.back2{
        background: url(/wp-content/uploads/2text.png);
        background-size: auto;
        background-position-x: 40%;
        background-repeat: no-repeat;
    }
    .about-work-cont-back.back3{
        background: url(/wp-content/uploads/3text.png);
        background-size: auto;
        background-position-x: 40%;
        background-repeat: no-repeat;
    }
    .form-auero input::placeholder, .form-auero textarea::placeholder{
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 130%;
        color: #727272;
    }
    .form-auero input::focus, .form-auero textarea::focus{
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 130%;
        color: #000;
    }
    .form-auero input, .form-auero textarea{
        background: #FFFFFF !important;
        border-radius: 10px !important;
        max-width: 100% !important;
        margin-bottom: 10px !important;
        border: unset !important;
        padding: 30px !important;
        color: #000 !important;
        font-style: normal !important;
        font-weight: 400 !important;
        font-size: 18px !important;
        line-height: 130% !important;
    }
    .form-submit{
        background: #EF2525 !important;
        border: 1px solid #EF2525 !important;
        border-radius: 10px !important;
        font-style: normal !important;
        font-weight: 600 !important;
        font-size: 16px !important;
        line-height: 130% !important;
        color: #FFFFFF !important;
        width: 100% !important;
        padding: 20px 0 !important;
    }
    div.wpforms-container-full .wpforms-form textarea, div.wpforms-container-full .wpforms-form input{
        color: #000 !important;
    }
    .bm-form-container{justify-content: center;}
    footer{margin-top: 100px;}
    @media screen and (max-width: 576px){
        .lightbox2{padding: 0;}
        .lightbox3{padding: 0;}
        .uk-grid{margin-left: unset;}
        .form-form{background: #F8F8F8;}
        .lightbox2.show-more{display: none;}
        .lightbox3.show-more{display: none;}
        .step-more-button{
            display: block !important;
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 130%;
            color: #242424;
            margin: 0 auto;
            padding: 20px 30px;
            background: #f1f1f1;
            border-radius: 15px;
            max-width: 1000px;
            text-align: center;
            cursor: pointer;
            margin-top: 20px;
        }




        .grid-3 .about-work-cont:last-child{margin-bottom: 0;}
        .about-work-cont{ margin-bottom: 20px; }

        .uk-modal-body{
            padding: 20px !important;
            background: #F8F8F8;
            border-radius: 15px;
        }
        .bm-form-container-form__title{
            font-size: 24px !important;
        }
        .bm-form-container-form{
            padding: 20px;
            background: #F8F8F8;
            border-radius: 15px;
        }
        .bm-form-container-image{display: none;}

        .bm-form-container{
            display: flex;
            max-width: 920px;
            margin: auto;
        }
        .bm-faq-container .bm-faq-block:last-child{
            margin-bottom: 0;
            border-bottom: unset;
            padding-bottom: 0;
        }
        .bm-faq-block{
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #EEEEEE;
        }
        .bm-faq-block__text span{
            color: #ef2525;
        }
        .bm-faq-block__text{
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 170%;
            color: #1D1D1D;
            margin: 0;
        }
        .bm-faq-block__title{
            font-style: normal;
            font-weight: 500;
            font-size: 20px;
            line-height: 130%;
            color: #181818;
            margin: 0;
            margin-bottom: 15px;
        }
        .about-work-cont-link{
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 140%;
            text-align: center;
            color: #EF2525;
            margin: 0;
            margin-top: 15px;
            text-decoration: none;
            display: block;
        }
        .about-work-cont-text span a{
            color: #ef2525;
            text-decoration: none;
            cursor: pointer;
        }
        .about-work-cont-text span a:hover{text-decoration: none; color: #ef2525;}
        .about-work-cont-text{
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 140%;
            text-align: center;
            color: #3B3B3B;
            margin: 30px auto 0 auto;
            width: 80%;
        }
        .grid-3{
            display: grid;
            grid-gap: 15px;
            grid-template-columns: repeat(1,1fr);
        }
        .lightbox-img{
            border-radius: 15px;
        }
        .lightbox3{
            display: grid;
            grid-gap: 15px;
            grid-template-columns: repeat(1,1fr);
            margin-top: 15px !important;
            margin-bottom: 15px !important;
        }
        .lightbox2{
            display: grid;
            grid-gap: 15px !important;
            grid-template-columns: repeat(1,1fr);
            margin: 0 !important;
        }

        .bm-section{
            margin-top: 60px;
        }
        .bm-title{
            margin-bottom: 20px;
            text-align: center;
        }
        .bm-title__title{
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            line-height: 130%;
            text-align: center;
            color: #181818;
            margin: 0;
        }
        .aero-text{
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 130%;
            text-align: center;
            color: #181818;
            margin: 0;
            margin-top: 12px;
        }
        .aero-benefit{
            border: 1px solid #EEEEEE;
            border-radius: 15px;
            text-align: center;
            padding: 20px;
        }
        .aero-benefits{
            margin-top: 15px;
            display: grid;
            grid-gap: 15px;
            grid-template-columns: repeat(1, 1fr);
        }
        #page{
            background: #fff;
        }
        .first-section{
            margin-top: 60px;
        }
        .bm-title{
            font-style: normal;
            font-weight: 600;
            font-size: 32px;
            line-height: 130%;
            color: #181818;
        }
        .bm-text{
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 160%;
            color: #3B3B3B;
            margin: 0;
            margin-bottom: 30px;
        }
        .price{
            font-style: normal;
            font-weight: 600;
            font-size: 22px;
            line-height: 130%;
            color: #181818;
            margin: 0;
            margin-bottom: 20px;
        }
        .link{
            display: block;
            width: fit-content;
            padding: 20px 35px;
            background: #EF2525;
            border-radius: 10px;
            transition: .3s;
            font-style: normal;
            font-weight: 600;
            font-size: 16px;
            line-height: 130%;
            color: #FFFFFF;
            text-decoration: none;
            margin: auto;
        }

        .bm-container-background{
            position: relative;
            border-radius: 20px;
            padding: 20px 20px 0px 20px;
            background: url('/wp-content/uploads/aero-background.png');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .background-content{
            text-align: center;
            margin-bottom: 60px;
        }
        .aero-image{text-align: center;}
    }
    @media screen and (min-width: 576px) and (max-width: 768px){
        .form-form{background: #F8F8F8;}
        .grid-3 .about-work-cont:last-child{margin-bottom: 0;}
        .about-work-cont{ margin-bottom: 20px; }
        #modal-center .popup-container .bm-form-container-form__text, #modal-center .popup-container input, #modal-center .popup-container textarea{max-width: 100% !important;}
        .uk-modal-body{
            padding: 30px !important;
            background: #F8F8F8;
            border-radius: 15px;
        }
        .bm-form-container-form__title{
            font-size: 32px !important;
        }
        .bm-form-container-form{
            padding: 60px 50px;
            background: #F8F8F8;
            border-radius: 15px;
        }
        .bm-form-container-image{display: none;}

        .bm-form-container{
            display: flex;
            max-width: 920px;
            margin: auto;
        }
        .bm-faq-container .bm-faq-block:last-child{
            margin-bottom: 0;
            border-bottom: unset;
            padding-bottom: 0;
        }
        .bm-faq-block{
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #EEEEEE;
        }
        .bm-faq-block__text span{
            color: #ef2525;
        }
        .bm-faq-block__text{
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 170%;
            color: #1D1D1D;
            margin: 0;
        }
        .bm-faq-block__title{
            font-style: normal;
            font-weight: 500;
            font-size: 20px;
            line-height: 130%;
            color: #181818;
            margin: 0;
            margin-bottom: 15px;
        }
        .about-work-cont-link{
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 140%;
            text-align: center;
            color: #EF2525;
            margin: 0;
            margin-top: 15px;
            text-decoration: none;
            display: block;
        }
        .about-work-cont-text span a{
            color: #ef2525;
            text-decoration: none;
            cursor: pointer;
        }
        .about-work-cont-text span a:hover{text-decoration: none; color: #ef2525;}
        .about-work-cont-text{
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 140%;
            text-align: center;
            color: #3B3B3B;
            margin: 30px auto 0 auto;
            width: 80%;
        }
        .grid-3{
            display: grid;
            grid-gap: 15px;
            grid-template-columns: repeat(1,1fr);
        }
        .lightbox-img{
            border-radius: 15px;
        }
        .lightbox3{
            display: grid;
            grid-gap: 15px;
            grid-template-columns: repeat(3,1fr);
            margin-top: 15px !important;
            margin-bottom: 15px !important;
        }
        .lightbox2{
            display: grid;
            grid-gap: 15px;
            grid-template-columns: repeat(2,1fr);
            margin: 0 !important;
        }

        .bm-section{
            margin-top: 60px;
        }
        .bm-title{
            margin-bottom: 40px;
            text-align: center;
        }
        .bm-title__title{
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            line-height: 130%;
            text-align: center;
            color: #181818;
            margin: 0;
        }
        .aero-text{
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 130%;
            text-align: center;
            color: #181818;
            margin: 0;
            margin-top: 12px;
        }
        .aero-benefit{
            border: 1px solid #EEEEEE;
            border-radius: 15px;
            text-align: center;
            padding: 20px;
        }
        .aero-benefits{
            margin-top: 15px;
            display: grid;
            grid-gap: 15px;
            grid-template-columns: repeat(2, 1fr);
        }
        #page{
            background: #fff;
        }
        .first-section{
            margin-top: 60px;
        }
        .bm-title{
            font-style: normal;
            font-weight: 600;
            font-size: 32px;
            line-height: 130%;
            color: #181818;
        }
        .bm-text{
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 160%;
            color: #3B3B3B;
            margin: 0;
            margin-bottom: 30px;
        }
        .price{
            font-style: normal;
            font-weight: 600;
            font-size: 28px;
            line-height: 130%;
            color: #181818;
            margin: 0;
            margin-bottom: 20px;
        }
        .link{
            display: block;
            width: fit-content;
            padding: 20px 35px;
            background: #EF2525;
            border-radius: 10px;
            transition: .3s;
            font-style: normal;
            font-weight: 600;
            font-size: 16px;
            line-height: 130%;
            color: #FFFFFF;
            text-decoration: none;
            margin: auto;
        }

        .bm-container-background{
            position: relative;
            border-radius: 20px;
            padding: 60px 60px 0px 60px;
            background: url('/wp-content/uploads/aero-background.png');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .background-content{
            text-align: center;
            margin-bottom: 60px;
        }
        .aero-image{text-align: center;}
    }
    @media screen and (min-width: 768px) and (max-width: 1200px){
        .form-form{background: #F8F8F8;}
        #modal-center .popup-container .bm-form-container-form__text, #modal-center .popup-container input, #modal-center .popup-container textarea{max-width: 100% !important;}
        .bm-form-container-form__text , div.wpforms-container-full .wpforms-form textarea, div.wpforms-container-full .wpforms-form input, .form-submit{
            max-width: 70% !important;
            margin-right: auto !important;
            margin-left: auto !important;
        }
        .wpforms-submit-container{text-align: center;}

        .grid-3 .about-work-cont:last-child{margin-bottom: 0;}
        .about-work-cont{ margin-bottom: 30px; }
        .bm-faq-container{max-width: 1080px; margin: auto;}

        .uk-modal-body{
            padding: 40px !important;
            background: #F8F8F8;
            border-radius: 15px;
        }
        .bm-form-container-form{
            padding: 60px 50px;
            background: #F8F8F8;
            border-radius: 15px;
        }
        .bm-form-container-image{display: none;}

        .bm-form-container{
            display: flex;
            max-width: 920px;
            margin: auto;
        }
        .bm-faq-container .bm-faq-block:last-child{
            margin-bottom: 0;
            border-bottom: unset;
            padding-bottom: 0;
        }
        .bm-faq-block{
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #EEEEEE;
        }
        .bm-faq-block__text span{
            color: #ef2525;
        }
        .bm-faq-block__text{
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 170%;
            color: #1D1D1D;
            margin: 0;
        }
        .bm-faq-block__title{
            font-style: normal;
            font-weight: 500;
            font-size: 22px;
            line-height: 130%;
            color: #181818;
            margin: 0;
            margin-bottom: 15px;
        }
        .about-work-cont-link{
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 140%;
            text-align: center;
            color: #EF2525;
            margin: 0;
            margin-top: 15px;
            text-decoration: none;
            display: block;
        }
        .about-work-cont-text span a{
            color: #ef2525;
            text-decoration: none;
            cursor: pointer;
        }
        .about-work-cont-text span a:hover{text-decoration: none; color: #ef2525;}
        .about-work-cont-text{
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 140%;
            text-align: center;
            color: #3B3B3B;
            margin: 30px auto 0 auto;
            width: 80%;
        }
        .grid-3{
            display: grid;
            grid-gap: 15px;
            grid-template-columns: repeat(1,1fr);
        }
        .lightbox-img{
            border-radius: 15px;
        }
        .lightbox3{
            display: grid;
            grid-gap: 15px;
            grid-template-columns: repeat(3,1fr);
            margin-top: 15px !important;
            margin-bottom: 15px !important;
        }
        .lightbox2{
            display: grid;
            grid-gap: 15px;
            grid-template-columns: repeat(2,1fr);
            margin: 0 !important;
        }

        .bm-section{
            margin-top: 60px;
        }
        .bm-title{
            margin-bottom: 40px;
            text-align: center;
        }
        .bm-title__title{
            font-style: normal;
            font-weight: 600;
            font-size: 36px;
            line-height: 130%;
            text-align: center;
            color: #181818;
            margin: 0;
        }
        .aero-text{
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 130%;
            text-align: center;
            color: #181818;
            margin: 0;
            margin-top: 12px;
        }
        .aero-benefit{
            border: 1px solid #EEEEEE;
            border-radius: 15px;
            text-align: center;
            padding: 20px;
        }
        .aero-benefits{
            margin-top: 15px;
            display: grid;
            grid-gap: 15px;
            grid-template-columns: repeat(2, 1fr);
        }
        #page{
            background: #fff;
        }
        .first-section{
            margin-top: 60px;
        }
        .bm-title{
            font-style: normal;
            font-weight: 600;
            font-size: 50px;
            line-height: 130%;
            color: #181818;
        }
        .bm-text{
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 160%;
            color: #3B3B3B;
            margin: 0;
            margin-bottom: 30px;
        }
        .price{
            font-style: normal;
            font-weight: 600;
            font-size: 32px;
            line-height: 130%;
            color: #181818;
            margin: 0;
            margin-bottom: 10px;
        }
        .link{
            display: block;
            width: fit-content;
            padding: 20px 35px;
            background: #EF2525;
            border-radius: 10px;
            transition: .3s;
            font-style: normal;
            font-weight: 600;
            font-size: 16px;
            line-height: 130%;
            color: #FFFFFF;
            text-decoration: none;
            margin: auto;
        }

        .bm-container-background{
            position: relative;
            border-radius: 20px;
            padding: 60px 60px 0px 60px;
            background: url('/wp-content/uploads/aero-background.png');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .background-content{
            text-align: center;
            margin-bottom: 60px;
        }
        .aero-image{text-align: center; max-width: 70%; margin: auto;}
    }
    @media screen and (min-width: 1200px) and (max-width: 1600px){
        #modal-center .popup-container .bm-form-container-form__text, #modal-center .popup-container input, #modal-center .popup-container textarea{max-width: 100% !important;}
        .bm-form-container-form__text , div.wpforms-container-full .wpforms-form textarea, div.wpforms-container-full .wpforms-form input, .form-submit{
            max-width: 70% !important;
            margin-right: auto !important;
            margin-left: auto !important;
        }
        .wpforms-submit-container{text-align: center;}


        .bm-faq-container{max-width: 1080px; margin: auto;}
        .bm-form-container-form{
            padding: 60px 50px;
            background: #F8F8F8;
            border-radius: 15px;
        }
        .bm-form-container{
            display: grid;
            grid-template-columns: repeat(2,1fr);
            background: url('/wp-content/uploads/sprayer-painting-cars-automotive-industry-1.webp');
            border-radius: 15px;
        }

        .bm-faq-container .bm-faq-block:last-child{
            margin-bottom: 0;
            border-bottom: unset;
            padding-bottom: 0;
        }
        .bm-faq-block{
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #EEEEEE;
        }
        .bm-faq-block__text span{
            color: #ef2525;
        }
        .bm-faq-block__text{
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 170%;
            color: #1D1D1D;
            margin: 0;
        }
        .bm-faq-block__title{
            font-style: normal;
            font-weight: 500;
            font-size: 22px;
            line-height: 130%;
            color: #181818;
            margin: 0;
            margin-bottom: 15px;
        }
        .about-work-cont-link{
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 140%;
            text-align: center;
            color: #EF2525;
            margin: 0;
            margin-top: 15px;
            text-decoration: none;
            display: block;
        }
        .about-work-cont-text span a{
            color: #ef2525;
            text-decoration: none;
            cursor: pointer;
        }
        .about-work-cont-text span a:hover{text-decoration: none; color: #ef2525;}
        .about-work-cont-text{
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 140%;
            text-align: center;
            color: #3B3B3B;
            margin: 30px auto 0 auto;
            width: 80%;
        }
        .grid-3{
            display: grid;
            grid-gap: 15px;
            grid-template-columns: repeat(3,1fr);
        }
        .lightbox-img{
            border-radius: 15px;
        }
        .lightbox3{
            display: grid;
            grid-gap: 15px;
            grid-template-columns: repeat(3,1fr);
            margin-top: 15px !important;
            margin-bottom: 15px !important;
        }
        .lightbox2{
            display: grid;
            grid-gap: 15px;
            grid-template-columns: repeat(2,1fr);
            margin: 0 !important;
        }

        .bm-section{
            margin-top: 60px;
        }
        .bm-title{
            margin-bottom: 40px;
        }
        .bm-title__title{
            font-style: normal;
            font-weight: 600;
            font-size: 50px;
            line-height: 130%;
            text-align: center;
            color: #181818;
            margin: 0;
        }
        .aero-text{
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 130%;
            text-align: center;
            color: #181818;
            margin: 0;
            margin-top: 12px;
        }
        .aero-benefit{
            border: 1px solid #EEEEEE;
            border-radius: 15px;
            text-align: center;
            padding: 20px;
        }
        .aero-benefits{
            margin-top: 15px;
            display: grid;
            grid-gap: 15px;
            grid-template-columns: repeat(4, 1fr);
        }
        #page{
            background: #fff;
        }
        .first-section{
            margin-top: 60px;
        }
        .bm-title{
            font-style: normal;
            font-weight: 600;
            font-size: 50px;
            line-height: 130%;
            color: #181818;
        }
        .bm-text{
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 160%;
            color: #3B3B3B;
            margin: 0;
            margin-bottom: 30px;
        }
        .price{
            font-style: normal;
            font-weight: 600;
            font-size: 32px;
            line-height: 130%;
            color: #181818;
            margin: 0;
            margin-bottom: 10px;
        }
        .link{
            display: block;
            width: fit-content;
            padding: 20px 35px;
            background: #EF2525;
            border-radius: 10px;
            transition: .3s;
            font-style: normal;
            font-weight: 600;
            font-size: 16px;
            line-height: 130%;
            color: #FFFFFF;
            text-decoration: none;
        }

        .bm-container-background{
            position: relative;
            border-radius: 20px;
            padding: 40px 90px 0px 90px;
            background: url('/wp-content/uploads/aero-background.png');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            display: grid;
            grid-gap: 5%;
            grid-template-columns: 50% 45%;
            align-items: center;
        }

        .aero-image{text-align: center;}
    }
    @media screen and (min-width: 1600px){
        .bm-faq-container{max-width: 1080px; margin: auto;}
        .bm-faq-container{margin-top: 40px;}
        .bm-align-left{text-align: left !important;}
        .bm-form-container-form{
            padding: 60px 50px;
            background: #F8F8F8;
            border-radius: 15px;
        }

        .bm-form-container{
            display: grid;
            grid-template-columns: 65% 35%;
            background: url('/wp-content/uploads/sprayer-painting-cars-automotive-industry-1.webp');
            border-radius: 15px;
        }
        .bm-faq-container .bm-faq-block:last-child{
            margin-bottom: 0;
            border-bottom: unset;
            padding-bottom: 0;
        }
        .bm-faq-block{
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #EEEEEE;
        }
        .bm-faq-block__text span{
            color: #ef2525;
        }
        .bm-faq-block__text{
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 170%;
            color: #1D1D1D;
            margin: 0;
        }
        .bm-faq-block__title{
            font-style: normal;
            font-weight: 500;
            font-size: 22px;
            line-height: 130%;
            color: #181818;
            margin: 0;
            margin-bottom: 15px;
        }
        .about-work-cont-link{
            font-style: normal;
            font-weight: 500;
            font-size: 14px;
            line-height: 140%;
            text-align: center;
            color: #EF2525;
            margin: 0;
            margin-top: 15px;
            text-decoration: none;
            display: block;
        }
        .about-work-cont-text span a{
            color: #ef2525;
            text-decoration: none;
            cursor: pointer;
        }
        .about-work-cont-text span a:hover{text-decoration: none; color: #ef2525;}
        .about-work-cont-text{
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 140%;
            text-align: center;
            color: #3B3B3B;
            margin: 30px auto 0 auto;
            width: 80%;
        }
        .grid-3{
            display: grid;
            grid-gap: 15px;
            grid-template-columns: repeat(3,1fr);
        }
        .lightbox-img{
            border-radius: 15px;
        }
        .lightbox3{
            display: grid;
            grid-gap: 15px;
            grid-template-columns: repeat(3,1fr);
            margin-top: 15px !important;
            margin-bottom: 15px !important;
        }
        .lightbox2{
            display: grid;
            grid-gap: 15px;
            grid-template-columns: repeat(2,1fr);
            margin: 0 !important;
        }
        .bm-aero-lightbox{
            margin-top: 40px;
        }
        .bm-section{
            margin-top: 90px;
        }
        .bm-title{
            margin-bottom: 40px;
            text-align: center;
        }
        .bm-title__title{
            font-style: normal;
            font-weight: 600;
            font-size: 50px;
            line-height: 130%;
            text-align: center;
            color: #181818;
            margin: 0;
        }
        .aero-text{
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 130%;
            text-align: center;
            color: #181818;
            margin: 0;
            margin-top: 12px;
        }
        .aero-benefit{
            border: 1px solid #EEEEEE;
            border-radius: 15px;
            text-align: center;
            padding: 20px;
        }
        .aero-benefits{
            margin-top: 15px;
            display: grid;
            grid-gap: 15px;
            grid-template-columns: repeat(4, 1fr);
        }
        #page{
            background: #fff;
        }
        .first-section{
            margin-top: 120px;
        }
        .bm-title{
            font-style: normal;
            font-weight: 600;
            font-size: 50px;
            line-height: 130%;
            color: #181818;
            margin: 0;
        }
        .bm-text{
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 160%;
            color: #3B3B3B;
            margin: 0;
            margin-bottom: 30px;
        }
        .price{
            font-style: normal;
            font-weight: 600;
            font-size: 32px;
            line-height: 130%;
            color: #181818;
            margin: 0;
            margin-bottom: 10px;
        }
        .link{
            display: block;
            width: fit-content;
            padding: 20px 35px;
            background: #EF2525;
            border-radius: 10px;
            transition: .3s;
            font-style: normal;
            font-weight: 600;
            font-size: 16px;
            line-height: 130%;
            color: #FFFFFF;
            text-decoration: none;
        }

        .bm-container-background{
            position: relative;
            border-radius: 20px;
            display: grid;
            grid-gap: 5%;
            grid-template-columns: 50% 45%;
            padding: 130px 90px 170px 90px;
            background: url('/wp-content/uploads/aero-background.png');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .aero-image{
            position: absolute;
            right: 90px;
            bottom: 0;
        }
    }

</style>
<?php get_footer(); ?>
