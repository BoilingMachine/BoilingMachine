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
    <div class="arenda-kresla-container">
        <div class="bm-adaptive bm-margin bm">
            <div class="arenda-kresla-main">
                <h1 class="arenda-kresla-text__title">
                    Аренда кресла
                </h1>
                <p class="arenda-kresla-text__text">
                    Вам понадобилось крутое игровое кресло? Мы понимаем, что покупать такое для однократного использования не целесообразно, поэтому предлагаем услуги аренды в Москве и МО! У нас вы всегда сможете взять в аренду нужное игровое кресло для съемки, кресло для стрима и даже кресло для киберспортивного турнира.
                </p>
                <p class="arenda-price">от 14 990 р</p>
                <a uk-toggle href="#modal-center" class="arenda-kresla-text__form uncor">Арендовать кресло</a>

                <img src="/wp-content/uploads/esports-video-gaming-studio-with-computers-gaming-chairs-neon-lighting-3d-illustration-1.webp">
            </div>
            <div class="arenda-kresla">
                <div class="arenda-kresla-img pad d-mob">
                    <img src="/wp-content/uploads/px-group-4960-1.webp">
                </div>
                <div class="arenda-kresla-text">
                    <h2 class="arenda-kresla-text__title">
                        Стоимость аренды
                    </h2>
                    <img src="/wp-content/uploads/px-group-4960-1.webp" class="d-mob-block mobile-img-w">
                    <p class="arenda-stoim-text">
                        Аренда кресла выполняется на основании <span>договора</span>. Вы вносите предоплату, которая состоит из полной стоимости кресла, арендной платы и платы за услуги логистики по Москве и МО. Часть предоплаты мы возвращаем по завершении услуги, когда выбранное вами кресло приезжает обратно.                </p>
                    <p class="arenda-spisok-title">Цены</p>
                    <ul class="arenda-spisok">
                        <li>1 день - 30% от стоимости кресла</li>
                        <li>7 дней - 40% от стоимости кресла</li>
                        <li>14 дней - 50% от стоимости кресла</li>
                    </ul>
                    <a uk-toggle href="#modal-center" class="arenda-kresla-text__stoimost uncor">Арендовать кресло</a>
                </div>
            </div>
            <div class="arenda-kresla-steps">
                <h2 class="arenda-kresla-steps__title">
                    4 простых шага арендовать кресло
                </h2>
                <div class="stepper-wrapper">
                    <div class="stepper-item">
                        <div class="step-counter">1</div>
                        <div class="step-name">Выберите нужное<br>кресло</div>
                    </div>
                    <div class="stepper-item">
                        <div class="step-counter">2</div>
                        <div class="step-name"><a uk-toggle href="#modal-center">Заполните заявку</a> на<br>сайте</div>
                    </div>
                    <div class="stepper-item">
                        <div class="step-counter">3</div>
                        <div class="step-name">Дождитесь звонка нашего менеджера и согласуйте способы доставки</div>
                    </div>
                    <div class="stepper-item">
                        <div class="step-counter">4</div>
                        <div class="step-name">Наши курьеры помогут со сборкой и проконсультируют по функционалу кресла</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="arenda-form-container" id="arenda-form">
            <div class="bm-adaptive bm-margin bm">
                <div class="arenda-form">
                    <h2 class="arenda-kresla-text__title center">
                        Заполните заявку на аренду кресла
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
                    Заполните заявку на аренду кресла
                </h2>
                <p class="arenda-kresla-text__text center">
                    После заполнения формы наш менеджер свяжется с вами для уточнения деталей
                </p>
                <?php echo do_shortcode('[wpforms id="11694" title="false" description="false"]'); ?>
            </div>

        </div>
    </div>
    <style>
        .arenda-stoim-text span{
            color: #ef2525;
        }
        #modal-center{z-index: 99999;}
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
        @media screen and (min-width: 992px) and (max-width: 1200px){
            .arenda-form-container{padding: 70px 0 !important;}
            .arenda-kresla-forrm{max-width: 100% !important;}
            .arenda-button{font-size: 18px !important;}
            .spisok-info{font-size: 18px !important;}
            .arenda-spisok, .file-download{font-size: 20px !important;}
            .step-counter{margin-right: 20px;}
            .stepper-item::before{left: -40% !important;}
            .arenda-kresla, .arenda-kresla-steps{margin-bottom: 60px !important;}
            .arenda-kresla-text__text{font-size: 20px !important;}
            .arenda-kresla-text{margin-top: 0 !important;}
            .arenda-kresla-text__title, .arenda-kresla-steps__title{font-size: 36px !important;}
            .d-mob-block{display: block !important; margin: 20px 0 20px 0;}
            .pad{padding-right: 0 !important;}
            .arenda-kresla{flex-direction: column;}
            .mobile-img-w{max-width: 60%; margin: 20px auto 20px auto !important;}
        }
        @media screen and (min-width: 768px) and (max-width: 992px){
            .step-name{max-width: 80%;}
            .arenda-form-container{padding: 70px 0 !important;}
            .arenda-kresla-forrm{max-width: 100% !important;}
            .arenda-button{font-size: 18px !important;}
            .spisok-info{font-size: 18px !important;}
            .arenda-spisok, .file-download{font-size: 20px !important;}
            .step-counter{margin-right: 20px;}
            .stepper-item{flex-direction: row !important; margin-bottom: 20px;}
            .stepper-wrapper{flex-direction: column;}
            .stepper-item::before{width: 0 !important;}
            .arenda-kresla, .arenda-kresla-steps{margin-bottom: 60px !important;}
            .arenda-kresla-text__text{font-size: 20px !important;}
            .arenda-kresla-text{margin-top: 0 !important;}
            .arenda-kresla-text__title, .arenda-kresla-steps__title{font-size: 36px !important;}
            .d-mob-block{display: block !important; margin: 20px 0 20px 0;}
            .pad{padding-right: 0 !important;}
            .arenda-kresla{flex-direction: column;}
            .mobile-img-w{max-width: 60%; margin: 20px auto 20px auto !important;}
        }
        @media screen and (min-width: 576px) and (max-width: 768px){
            .mobile-img-w{max-width: 60%; margin: 20px auto 20px auto !important;}
        }
        @media screen and (max-width: 768px){
            .arenda-form-container{padding: 70px 0 !important;}
            .arenda-kresla-forrm{max-width: 100% !important;}
            .arenda-button{font-size: 16px !important;}
            .spisok-info{font-size: 16px !important;}
            .arenda-spisok, .file-download{font-size: 18px !important;}
            .step-counter{margin-right: 25px;}
            .stepper-item{flex-direction: row !important; margin-bottom: 20px;}
            .stepper-wrapper{flex-direction: column;}
            .stepper-item::before{width: 0 !important;}
            .arenda-kresla, .arenda-kresla-steps{margin-bottom: 60px !important;}
            .arenda-kresla-text__text{font-size: 18px !important;}
            .arenda-kresla-text{margin-top: 0 !important;}
            .arenda-kresla-text__title, .arenda-kresla-steps__title{font-size: 28px !important;}
            .d-mob-block{display: block !important; margin: 20px 0 20px 0;}
            .pad{padding-right: 0 !important;}
            .arenda-kresla{flex-direction: column;}
        }
        @media screen and (max-width: 1200px){
            .d-mob{display: none;}
        }


        @media screen and (min-width: 1600px){
            .step-name{max-width: 60%;}
            .arenda-kresla-text__stoimost{
                border: 1px solid #EF2525;
                border-radius: 10px;
                font-style: normal;
                font-weight: 600;
                font-size: 16px;
                line-height: 130%;
                color: #EF2525;
                padding: 20px 35px;
                margin: 0;
                margin-top: 30px;
                display: block;
                width: fit-content;
            }
            .arenda-stoim-text{
                font-style: normal;
                font-weight: 400;
                font-size: 20px;
                line-height: 160%;
                color: #181818;
                margin: 0;
                margin-bottom: 40px;
            }
            .arenda-kresla-main{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin-bottom: 120px;
            }
            .arenda-kresla-text__text{
                max-width: 60%;
                text-align: center;
            }
            .arenda-price{
                font-style: normal;
                font-weight: 600;
                font-size: 32px;
                line-height: 130%;
                text-align: center;
                color: #282828;
                margin: 0;
                margin-bottom: 15px;
            }
        }
        @media screen and (min-width: 1200px) and (max-width: 1600px){
            .step-name{max-width: 60%;}
            .arenda-kresla{
                align-items: center;
            }
            .arenda-kresla-text__stoimost{
                border: 1px solid #EF2525;
                border-radius: 10px;
                font-style: normal;
                font-weight: 600;
                font-size: 16px;
                line-height: 130%;
                color: #EF2525;
                padding: 20px 35px;
                margin: 0;
                margin-top: 30px;
                display: block;
                width: fit-content;
            }
            .arenda-stoim-text{
                font-style: normal;
                font-weight: 400;
                font-size: 20px;
                line-height: 160%;
                color: #181818;
                margin: 0;
                margin-bottom: 40px;
            }
            .arenda-kresla-main{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin-bottom: 120px;
            }
            .arenda-kresla-text__text{
                max-width: 60%;
                text-align: center;
            }
            .arenda-price{
                font-style: normal;
                font-weight: 600;
                font-size: 32px;
                line-height: 130%;
                text-align: center;
                color: #282828;
                margin: 0;
                margin-bottom: 15px;
            }
        }
        @media screen and (min-width: 992px) and (max-width: 1200px){
            .arenda-kresla-forrm .wpforms-form input, .arenda-kresla-forrm .wpforms-form textarea, .wpforms-submit{
                max-width: 70% !important;
                margin: auto !important;
            }
            .wpforms-submit-container{text-align: center;}
            .arenda-kresla{
                align-items: center;
            }
            .arenda-kresla-text__stoimost{
                border: 1px solid #EF2525;
                border-radius: 10px;
                font-style: normal;
                font-weight: 600;
                font-size: 16px;
                line-height: 130%;
                color: #EF2525;
                padding: 20px 35px;
                margin: 0;
                margin-top: 30px;
                display: block;
                width: fit-content;
            }
            .arenda-stoim-text{
                font-style: normal;
                font-weight: 400;
                font-size: 20px;
                line-height: 160%;
                color: #181818;
                margin: 0;
                margin-bottom: 40px;
            }
            .arenda-kresla-main{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin-bottom: 80px;
            }
            .arenda-kresla-text__text{
                max-width: 60%;
                text-align: center;
            }
            .arenda-price{
                font-style: normal;
                font-weight: 600;
                font-size: 32px;
                line-height: 130%;
                text-align: center;
                color: #282828;
                margin: 0;
                margin-bottom: 15px;
            }
        }
        @media screen and (min-width: 576px) and (max-width: 992px){

            .arenda-kresla-forrm .wpforms-form input, .arenda-kresla-forrm .wpforms-form textarea, .wpforms-submit{
                max-width: 70% !important;
                margin: auto !important;
            }
            .wpforms-submit-container{text-align: center;}
            .stepper-wrapper{
                display: grid !important;
                grid-template-columns: repeat(2,1fr);
                grid-gap: 15px;
            }
            .stepper-item{flex-direction: column !important;}
            .step-counter{
                margin-right: 0 !important;
                margin-bottom: 10px !important;
            }
            .step-name{text-align: center;}
            .arenda-kresla{
                align-items: center;
            }
            .arenda-kresla-text__stoimost{
                border: 1px solid #EF2525;
                border-radius: 10px;
                font-style: normal;
                font-weight: 600;
                font-size: 16px;
                line-height: 130%;
                color: #EF2525;
                padding: 20px 35px;
                margin: 0;
                margin-top: 30px;
                display: block;
                width: fit-content;
            }
            .arenda-stoim-text{
                font-style: normal;
                font-weight: 400;
                font-size: 20px;
                line-height: 160%;
                color: #181818;
                margin: 0;
                margin-bottom: 40px;
            }
            .arenda-kresla-main{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin-bottom: 80px;
            }
            .arenda-kresla-text__text{
                text-align: center;
            }
            .arenda-price{
                font-style: normal;
                font-weight: 600;
                font-size: 32px;
                line-height: 130%;
                text-align: center;
                color: #282828;
                margin: 0;
                margin-bottom: 15px;
            }
        }
        @media screen and (max-width: 576px){
            .stepper-wrapper{
                display: grid !important;
                grid-template-columns: repeat(2,1fr);
                grid-gap: 15px;
            }
            .stepper-item{flex-direction: column !important;}
            .step-counter{
                margin-right: 0 !important;
                margin-bottom: 10px !important;
            }
            .step-name{text-align: center;}
            .arenda-kresla{
                align-items: center;
            }
            .arenda-kresla-text__stoimost{
                border: 1px solid #EF2525;
                border-radius: 10px;
                font-style: normal;
                font-weight: 600;
                font-size: 16px;
                line-height: 130%;
                color: #EF2525;
                padding: 20px 35px;
                margin: 0;
                margin-top: 30px;
                display: block;
                width: fit-content;
            }
            .arenda-stoim-text{
                font-style: normal;
                font-weight: 400;
                font-size: 20px;
                line-height: 160%;
                color: #181818;
                margin: 0;
                margin-bottom: 40px;
            }
            .arenda-kresla-main{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin-bottom: 80px;
            }
            .arenda-kresla-text__text{
                text-align: center;
            }
            .arenda-price{
                font-style: normal;
                font-weight: 600;
                font-size: 32px;
                line-height: 130%;
                text-align: center;
                color: #282828;
                margin: 0;
                margin-bottom: 15px;
            }
        }

        footer{margin-top: 100px;}
        .arenda-kresla-text__stoimost:hover{
            transition: .3s;
            text-decoration: none;
            background: #ef2525;
            color: #F8F8F8;
        ;
        }
        .d-mob-block{display: none;}
        .arenda-kresla-container{margin-top: 50px;}
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
        .arenda-kresla-forrm input:focus, .arenda-kresla-forrm textarea:focus, .wpforms-form input:focus, .wpforms-form textarea:focus{
            color: #727272 !important;
        }
        .wpforms-form input, .wpforms-form textarea, .arenda-kresla-forrm input, .arenda-kresla-forrm textarea{max-width: 100% !important; padding: 32px !important; background: #fff !important; border: 1px solid #EEEEEE !important; border-radius: 10px !important; margin-bottom: 10px !important;}
        .popup-container .arenda-kresla-text__text{max-width: 100% !important;}
        .arenda-kresla-forrm{
            max-width: 30%;
            margin: 40px auto 0 auto;
        }
        .arenda-form-container{
            padding: 70px 0 95px 0;
            background: #F8F8F8;
        }
        .center{
            text-align: center;
        }
        .arenda-kresla-text .file-download:last-child{border-bottom: unset;}
        .file-download::before{
            content: url("/wp-content/uploads/union.webp");
            margin-right: 20px;
        }
        .file-download:hover{
            text-decoration: none;
        }
        .file-download{
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 130%;
            color: #181818;
            padding-bottom: 20px;
            border-bottom: 1px solid #EEEEEE;
            margin-bottom: 20px;
            display: block;
            width: fit-content;
        }
        .marg{margin-bottom: 50px;}
        .toggle-docs{
            padding-bottom: 25px;
            border-bottom: 1px solid #EEEEEE;
            margin-bottom: 20px;
            width: fit-content;
        }
        .arenda-button::after{
            content: url("/wp-content/uploads/rectangle_3077_stroke_.webp");
            margin-left: 20px;
        }
        .arenda-text{
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 130%;
            color: #181818;
            margin: 0;
            margin-top: 25px;
        }
        .arenda-button{
            background: unset;
            padding: 0;
            font-style: normal;
            font-weight: 500;
            font-size: 22px;
            line-height: 1;
            color: #181818;
            text-transform: inherit;
        }
        .spisok-info span{
            color: #EF2525;
        }
        .spisok-info{
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 150%;
            color: #525252;
            margin: 0;
            max-width: 80%;
            margin-left: 0;
            margin-bottom: 35px;
        }
        .arenda-spisok li{margin-bottom: 23px;}
        .arenda-spisok span{font-weight: 600;}
        .arenda-spisok{
            padding: 0;
            margin: 0;
            margin-bottom: 30px;
            list-style-type: none;
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 130%;
            color: #181818;
        }
        .arenda-spisok-title{
            font-style: normal;
            font-weight: 500;
            font-size: 28px;
            line-height: 130%;
            color: #181818;
            margin: 0;
            margin-bottom: 20px;
        }
        .arenda-kresla-steps{margin-bottom: 120px;}
        .step-name a{
            color: #EF2525;
            text-decoration: none;
        }
        .step-name a:hover{
            text-decoration: none;
            transition: .3s;
            color: #DA1414;
        }
        .step-name{
            font-style: normal;
            font-weight: 400;
            font-size: 19px;
            line-height: 130%;
            text-align: center;
            color: #000000;
        }
        .arenda-kresla-steps__title{
            font-style: normal;
            font-weight: 600;
            font-size: 50px;
            line-height: 130%;
            text-align: center;
            color: #181818;
            margin: 0;
            margin-bottom: 60px;
        }

        .stepper-wrapper {
            margin-top: auto;
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .stepper-item {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            flex: 1;

        @media (max-width: 768px) {
            font-size: 12px;
        }
        }

        .stepper-item::before {
            position: absolute;
            content: "";
            border-bottom: 1px solid #eee;
            width: 70%;
            top: 30px;
            left: -35%;
            z-index: 2;
        }
        /*
            .stepper-item::after {
              position: absolute;
              content: "";
              border-bottom: 2px solid #ccc;
              width: 100%;
              top: 30px;
              left: 50%;
              z-index: 2;
            }
        */
        .stepper-item .step-counter {
            position: relative;
            z-index: 5;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 52px;
            height: 58px;
            border-radius: 8px;
            background: #F1F1F1;
            margin-bottom: 20px;

            font-weight: 600;
            font-size: 32px;
            line-height: 130%;
            text-align: center;
            color: #696969;
        }

        .stepper-item.active {
            font-weight: bold;
        }

        .stepper-item.completed .step-counter {
            background-color: #4bb543;
        }

        .stepper-item.completed::after {
            position: absolute;
            content: "";
            border-bottom: 2px solid #4bb543;
            width: 100%;
            top: 20px;
            left: 50%;
            z-index: 3;
        }

        .stepper-item:first-child::before {
            content: none;
        }
        .stepper-item:last-child::after {
            content: none;
        }


        .arenda-kresla{margin-bottom: 120px;}
        .arenda-kresla{display: flex;}
        .pad{
            padding-right: 100px;
        }
        .arenda-kresla-text{flex-basis: 50%; margin-top: 60px;}
        .arenda-kresla-img{flex-basis: 50%;}
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
            margin: auto;
            margin-bottom: 30px;
        }
        .arenda-kresla-text__form:hover, .arenda-form-button:hover{
            text-decoration: none !important;
            background: #DA1414 !important;
            color: #fff !important;
            transition: .3s !important;
        }
        .arenda-kresla-text__form{
            transition: .3s;
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 1;
            color: #fff;
            display: block;
            width: fit-content;
            padding: 20px 35px;
            box-sizing: border-box;
            background: #EF2525;
            border-radius: 10px;
            margin-bottom: 50px;
        }
    </style>
<?php get_footer() ?>