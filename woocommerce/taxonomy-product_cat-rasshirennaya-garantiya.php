<?php get_header(); ?>
    <link rel="stylesheet"  href="/wp-content/themes/boiling_machine/woocommerce/chairs/css/chairs.css" media="all">
    <div class="benefits-container-head">
        <div class="bm-adaptive bm-margin bm">
            <div class="bm-contacts-header">
                <div class="bm-contacts-breadcrumb">
                    <?php do_action( 'woocommerce_before_main_content' ); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="full-garanty-container">
        <div class="bm-adaptive bm-margin bm">
            <div class="full-garanty">
                <div class="full-garanty-text">
                    <h1 class="garanty-text__title">
                        Расширенная гарантия
                    </h1>
                    <img src="/wp-content/uploads/group-5460.webp" class="d-mob-block">
                    <p class="garanty-text__text">
                        Мы предоставляем расширенную гарантию на все представленные у нас модели кресел.  Расширенная гарантия включает:
                    </p>
                    <ul class="garanty-text-spisok">
                        <li>дополнительный год гарантийной поддержки</li>
                        <li>услуги ремонта</li>
                        <li>замену кресла на время ремонта</li>
                    </ul>
                    <a uk-toggle href="#modal-center" class="garanty-text__link">Оформить расширенную гарантию</a>
                </div>
                <div class="full-garanty-img d-mob">
                    <img src="/wp-content/uploads/group-5460.webp">
                </div>
            </div>
            <div class="garanty-benefits">
                <div class="benefits-cont">
                    <div class="benefits-image"><img src="/wp-content/uploads/group_4988.webp"></div>
                    <p class="benefits-cont__title">Временная замена</p>
                    <p class="benefits-cont__text">Если до истечения срока гарантии вы выявили поломку или бракованную деталь, мы в течение 24 часов привезем подходящее кресло на замену. Ваше кресло будет отремонтировано и вернется к вам в ближайшее время.</p>
                </div>
                <div class="benefits-cont">
                    <div class="benefits-image"><img src="/wp-content/uploads/group_4989.webp"></div>
                    <p class="benefits-cont__title">Дополнительный год гарантии</p>
                    <p class="benefits-cont__text">При активном пользовании креслом некоторые его части больше других подвергнуты износу. Дополнительные 12 месяцев гарантии открывают доступ к услугам ремонта и предоставлении соответствующей временной замены.</p>
                </div>
                <div class="benefits-cont">
                    <div class="benefits-image"><img src="/wp-content/uploads/group_4990.webp"></div>
                    <p class="benefits-cont__title">Услуги ремонта</p>
                    <p class="benefits-cont__text">Наши специалисты исправят возникшую неисправность и тщательно проверят работоспособность всех доступных регулировок вашего кресла. </p>
                </div>
            </div>
            <div class="garanty-price-container">
                <div class="garanty-price-img d-mob">
                    <img src="/wp-content/uploads/group-5465.webp">
                </div>
                <div class="garanty-price-text">
                    <h2 class="price-text__title">Стоимость</h2>
                    <img src="/wp-content/uploads/group-5465.webp" class="d-mob-block">
                    <p class="price-text__text">
                        Ремонт кресла по расширенной гарантии осуществляется при тех же условиях, что и по обычной гарантии. Узнать, является ли ваш случай гарантийным, вы всегда можете у наших менеджеров.
                    </p>
                    <p class="price-text__subtitle">
                        Цена
                    </p>
                    <p class="price-text__text">
                        Услуга расширенной гарантии предоставляется при доплате 30% от стоимости выбранного игрового кресла.
                    </p>
                    <a uk-toggle href="#modal-center" class="price-text__link">Оформить расширенную гарантию</a>
                </div>
            </div>
        </div>
        <div class="arenda-form-container" id="full-garanty-link">
            <div class="bm-adaptive bm-margin bm">
                <div class="arenda-form">
                    <h2 class="arenda-kresla-text__title center">
                        Заполните заявку на расширенную гарантию
                    </h2>
                    <p class="arenda-kresla-text__text center">
                        После заполнения формы наш менеджер свяжется с вами для уточнения деталей
                    </p>
                    <div class="arenda-kresla-forrm">
                        <?php echo do_shortcode('[wpforms id="11694" title="false" description="false"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-center" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

            <button class="uk-modal-close-default" type="button" uk-close></button>

            <div class="popup-container">
                <h2 class="arenda-kresla-text__title center">
                    Заполните заявку на расширенную гарантию
                </h2>
                <p class="arenda-kresla-text__text center">
                    После заполнения формы наш менеджер свяжется с вами для уточнения деталей
                </p>
                <?php echo do_shortcode('[wpforms id="11694" title="false" description="false"]'); ?>
            </div>

        </div>
    </div>
    <style>
        #modal-center{z-index: 99999;}
        .wpforms-form input, .wpforms-form textarea, .arenda-kresla-forrm input, .arenda-kresla-forrm textarea{max-width: 100% !important; padding: 32px !important; background: #fff !important; border: 1px solid #EEEEEE !important; border-radius: 10px !important; margin-bottom: 10px !important;}
        .popup-container .arenda-kresla-text__text{max-width: 100% !important;}
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
        .garanty-text__link:hover, .arenda-form-button:hover{
            text-decoration: none !important;
            background: #DA1414 !important;
            color: #fff !important;
            transition: .3s !important;
        }
        @media screen and (min-width: 1200px) and (max-width: 1550px){
            .garanty-price-img img{
                max-width: 80%;
            }
            .arenda-kresla-text__text{
                max-width: 50%;
                margin-right: auto !important;
                margin-left: auto !important;
            }
        }
        @media screen and (min-width: 992px) and (max-width: 1200px){
            .arenda-kresla-forrm .wpforms-container-full input, .arenda-kresla-forrm .wpforms-container-full textarea , .arenda-form-button{
                max-width: 70% !important;
                margin: auto !important;
            }
            .wpforms-submit-container{text-align: center;}
            .arenda-form-container{padding: 70px 0 !important;}
            .arenda-kresla-forrm{max-width: 100% !important;}
            .arenda-button{font-size: 16px !important;}
            .garanty-price-container{padding: 50px !important;}
            .garanty-price-text{margin-top: 0 !important;}
            .garanty-price-container{grid-template-columns: 100% !important;}
            .garanty-benefits .benefits-cont:last-child{margin-bottom: 0;}
            .benefits-cont{margin-bottom: 30px;}
            .garanty-text__link, .price-text__link{font-size: 18px !important; text-align: center;}
            .garanty-text_subtitle, .price-text__subtitle{font-size: 20px !important;}
            .garanty-text__text, .garanty-text-spisok, .price-text__text{font-size: 20px !important;}
            .garanty-text__title, .price-text__title{font-size: 42px !important; text-align: center;}
            .full-garanty{flex-direction: column; padding: 50px !important;}
            .full-garanty-text{padding: unset !important;}
            .garanty-benefits{flex-direction: column;}
            .arenda-kresla-text__text{font-size: 20px !important;}
            .garanty-benefits{margin-bottom: 75px !important;}
            .d-mob-block{display: block !important; margin: 30px auto 30px auto; max-width: 50%;}
            .arenda-kresla-text__text{font-size: 20px !important;}
            .arenda-kresla-text{margin-top: 0 !important;}
            .arenda-kresla-text__title, .arenda-kresla-steps__title{font-size: 36px !important;}
        }
        @media screen and (min-width: 768px) and (max-width: 992px){
            .arenda-kresla-forrm .wpforms-container-full input, .arenda-kresla-forrm .wpforms-container-full textarea , .arenda-form-button{
                max-width: 70% !important;
                margin: auto !important;
            }
            .wpforms-submit-container{text-align: center;}
            .arenda-form-container{padding: 70px 0 !important;}
            .arenda-kresla-forrm{max-width: 100% !important;}
            .arenda-button{font-size: 16px !important;}
            .garanty-price-container{padding: 50px !important;}
            .garanty-price-text{margin-top: 0 !important;}
            .garanty-price-container{grid-template-columns: 100% !important;}
            .garanty-benefits .benefits-cont:last-child{margin-bottom: 0;}
            .benefits-cont{margin-bottom: 30px;}
            .garanty-text__link, .price-text__link{font-size: 18px !important; width: 100% !important; text-align: center;}
            .garanty-text_subtitle, .price-text__subtitle{font-size: 20px !important;}
            .garanty-text__text, .garanty-text-spisok, .price-text__text{font-size: 20px !important;}
            .garanty-text__title, .price-text__title{font-size: 42px !important; text-align: center;}
            .full-garanty{flex-direction: column; padding: 50px !important;}
            .full-garanty-text{padding: unset !important;}
            .garanty-benefits{flex-direction: column;}
            .garanty-benefits{margin-bottom: 75px !important;}
            .arenda-kresla-text__text{font-size: 20px !important;}
            .d-mob-block{display: block !important; margin: 30px auto 30px auto; max-width: 50%;}
            .arenda-kresla-text__text{font-size: 20px !important;}
            .arenda-kresla-text{margin-top: 0 !important;}
            .arenda-kresla-text__title, .arenda-kresla-steps__title{font-size: 36px !important;}
        }
        @media screen and (min-width: 576px) and (max-width: 768px){
            .arenda-kresla-forrm .wpforms-container-full input, .arenda-kresla-forrm .wpforms-container-full textarea , .arenda-form-button{
                max-width: 70% !important;
                margin: auto !important;
            }
            .wpforms-submit-container{text-align: center;}
        }
        @media screen and (max-width: 768px){
            .arenda-kresla-text__text{font-size: 18px !important;}
            .arenda-form-container{padding: 70px 0 !important;}
            .arenda-kresla-forrm{max-width: 100% !important;}
            .arenda-button{font-size: 16px !important;}
            .garanty-price-container{padding: 30px 20px !important;}
            .garanty-price-text{margin-top: 0 !important;}
            .garanty-price-container{grid-template-columns: 100% !important;}
            .garanty-benefits .benefits-cont:last-child{margin-bottom: 0;}
            .benefits-cont{margin-bottom: 30px;}
            .garanty-text__link, .price-text__link{font-size: 16px !important; width: 100% !important; text-align: center;}
            .garanty-text_subtitle, .price-text__subtitle{font-size: 20px !important;}
            .garanty-text__text, .garanty-text-spisok, .price-text__text{font-size: 18px !important;}
            .garanty-text__title, .price-text__title{font-size: 28px !important; text-align: center;}
            .full-garanty{flex-direction: column; padding: 30px 20px !important;}
            .full-garanty-text{padding: unset !important;}
            .garanty-benefits{flex-direction: column;}
            .arenda-kresla-text__title, .arenda-kresla-steps__title{font-size: 28px !important;}
            .arenda-kresla-text__text{font-size: 18px !important;}
            .garanty-benefits{margin-bottom: 75px !important;}
        }
        @media screen and (max-width: 768px){
            .d-mob-block{display: block !important; margin: 30px auto 30px auto; max-width: 60%;}

        }
        @media screen and (max-width: 1200px){
            .d-mob{display: none;}
        }
        footer{margin-top: 100px;}
        .d-mob-block{display: none;}
        .center{
            text-align: center;
        }
        .arenda-form-button{
            width: 100% !important;
            font-style: normal;
            font-weight: 600;
            font-size: 18px !important;
            line-height: 1;
            color: #FFFFFF !important;
            padding: 24px 0 24px 0 !important;
            background: #EF2525 !important;
            border: 1px solid #EF2525 !important;
            box-sizing: border-box;
            border-radius: 10px !important;
        }
        .arenda-kresla-forrm .wpforms-field{margin-bottom: 10px !important;}
        .arenda-kresla-forrm input:focus, .arenda-kresla-forrm textarea:focus{
            color: #727272 !important;
        }
        .arenda-kresla-forrm input, .arenda-kresla-forrm textarea{max-width: 100% !important; padding: 32px !important; background: #fff !important; border: 1px solid #EEEEEE !important; border-radius: 10px !important; }
        .arenda-kresla-forrm{
            max-width: 45%;
            margin: 40px auto 0 auto;
        }
        .arenda-form-container{
            padding: 70px 0 95px 0;
            background: #F8F8F8;
        }
        .garanty-price-img img{transform: translate(0,-30px);}
        .price-text__link:hover{
            text-decoration: none;
            color: #fff;
            background: #EF2525;
            transition: .3s;
        }
        .price-text__link{
            transition: .3s;
            display: block;
            width: fit-content;
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1;
            color: #EF2525;
            padding: 20px 35px;
            border: 1px solid #EF2525;
            box-sizing: border-box;
            border-radius: 10px;
            margin-top: 35px;
        }
        .price-text__subtitle{
            font-style: normal;
            font-weight: 500;
            font-size: 28px;
            line-height: 1;
            color: #181818;
            margin-bottom: 15px;
            margin-top: 35px;
        }
        .price-text__text{
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 150%;
            color: #181818;
            margin: 0;
        }
        .price-text__title{
            font-style: normal;
            font-weight: 600;
            font-size: 50px;
            line-height: 130%;
            color: #181818;
            margin: 0;
            margin-bottom: 20px;
        }
        .garanty-price-text{flex-basis: 50%;}
        .garanty-price-img{flex-basis: 50%;}
        .garanty-price-container{
            display: grid;
            grid-template-columns: 45% 50%;
            grid-gap: 5%;
            border-radius: 20px;
            padding: 0 40px 20px 40px;
            margin-bottom: 100px;
            align-items: center;
        }
        .garanty-benefits{margin-bottom: 150px;}
        .benefits-cont__text{
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 160%;
            text-align: center;
            color: #000000;
            margin: 0;
        }
        .benefits-cont__title{
            font-style: normal;
            font-weight: 600;
            font-size: 28px;
            line-height: 120%;
            text-align: center;
            color: #1A1A1A;
            margin: 0;
            margin: 25px 0 20px 0;
        }
        .garanty-benefits{
            display: flex;
        }
        .benefits-cont{
            flex-basis: 33%;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0 35px;
        }
        .garanty-text__link{
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1;
            color: #FFFFFF;
            display: block;
            width: fit-content;
            padding: 20px 35px;
            background: #EF2525;
            border-radius: 10px;
            margin-top: 35px;
        }
        .garanty-text-spisok li::before{
            content: "";
            display: block;
            width: 14px;
            height: 14px;
            background: #ef2525;
            border-radius: 100%;
        }


        .full-garanty-img{flex-basis: 50%;}
        .full-garanty-text{flex-basis: 50%; padding: 60px 0 60px 70px;}
        .full-garanty{display: flex;}
        .full-garanty{
            background: linear-gradient(102.07deg, #232323 8.62%, rgba(20, 20, 20, 0.96) 97.6%);;
            border-radius: 20px;
            margin-bottom: 75px;
            align-items: center;
        }
        .garanty-text__title{
            font-style: normal;
            font-weight: 600;
            font-size: 50px;
            line-height: 120%;
            color: #FFFFFF;
            margin: 0;
            margin-bottom: 20px;
        }
        .garanty-text__text{
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 160%;
            color: #CBCBCB;
            margin: 0;
            margin-bottom: 30px;
        }
        .garanty-text_subtitle{
            font-style: normal;
            font-weight: 500;
            font-size: 26px;
            line-height: 130%;
            color: #DBDBDB;
            margin: 0;
            margin-bottom: 20px;
        }
        .garanty-text-spisok{
            list-style-type: none;
            padding: 0;
            margin: 0;
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 130%;
            color: #CBCBCB;
        }
        .arenda-kresla-text__title{
            font-style: normal;
            font-weight: 600;
            font-size: 50px;
            line-height: 1;
            color: #000000;
            margin: 0;
            margin-bottom: 25px;
        }
        .arenda-kresla-text__text{
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 160%;
            color: #1F1F1F;
            margin: 0;
            margin-bottom: 35px;
        }
        .garanty-text-spisok li{
            margin-bottom: 20px;
            display: grid;
            grid-template-columns: 15px 85%;
            align-items: baseline;
            grid-gap: 20px;
        }
        .garanty-text-spisok li:last-child{margin-bottom: 0;}
    </style>
<?php get_footer() ?>