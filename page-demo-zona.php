<?php get_header(); ?>
<script src="https://unpkg.com/vue@3"></script>

<div id="app">
    <div class="demo-zona-video">
        <video autoplay loop muted class="video-background">
            <source src="/wp-content/uploads/video-main-new.mp4" type="video/mp4" v-if="window.width > 1600">
            <source src="/wp-content/uploads/video-main-new-mobile.mp4" type="video/mp4" v-if="window.width <= 1600">
        </video>
        <div class="demo-zona-video-content">
            <div class="bm-adaptive bm-margin bm">
                <div class="bm-contacts-header">
                    <div class="bm-contacts-breadcrumb">
                        <?php the_breadcrumb() ?>
                    </div>
                </div>
            </div>
            <div class="demo-zona-info">
                <div class="bm-adaptive bm-margin bm">
                    <div class="dz-container-main">
                        <h1 class="dz-title">Шоурум BOILING MACHINE</h1>
                        <p class="dz-main-text">Попробуйте вживую лучшие игровые кресла, топовые ПК и профессиональные мониторы. Ждем вас ежедневно с 11:00 до 20:00</p>
                        <a uk-toggle href="#modal-center" class="dz-link-popup">Записаться в шоурум</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="dz-section">
        <div class="bm-adaptive bm-margin bm">
            <div class="dz-container">
                <div class="dz-title-container">
                    <h2 class="title">Шоурум BOILING MACHINE</h2>
                </div>
                <div class="dz-container-flex-2">
                    <div class="dz-box">
                        <img src="/wp-content/uploads/px-dz-1.webp">
                        <div class="dz-box-text-container">
                            <p class="box-text">Сыграйте в топовые игры на ультра настройках в любом разрешении и с высоким FPS</p>
                        </div>
                    </div>
                    <div class="dz-box">
                        <img src="/wp-content/uploads/px-dz-2.webp">
                        <div class="dz-box-text-container">
                            <p class="box-text">Сравните изображение в играх с видеокартами 10-й, 20-й и 30-й серии NVIDIA GeForce</p>
                        </div>
                    </div>
                </div>
                <div class="dz-container-flex-3">
                    <div class="dz-box">
                        <img src="/wp-content/uploads/px-dz-3.webp">
                        <div class="dz-box-text-container">
                            <p class="box-text">Протестируйте технологии NVIDIA DLSS, Reflex и трассировку лучей RTX</p>
                        </div>
                    </div>
                    <div class="dz-box">
                        <img src="/wp-content/uploads/px-dz-4.webp">
                        <div class="dz-box-text-container">
                            <p class="box-text">Получите уникальный игровой опыт со столами BOILING MACHINE ONE</p>
                        </div>
                    </div>
                    <div class="dz-box">
                        <img src="/wp-content/uploads/px-dz-5.webp">
                        <div class="dz-box-text-container">
                            <p class="box-text">Попробуйте лучшие игровые кресла от DXRacer, Arozzi, ASUS и других брендов</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="dz-section">
        <div class="bm-adaptive bm-margin bm">
            <div class="dz-benefits">
                <div class="dz-container grid-2">
                    <div class="flex-con-1">
                        <h2 class="benefit-title">Протестируй на мощном компьютере</h2>
                        <img src="/wp-content/uploads/px-dz-6.webp" class="mobile-img" v-if="window.width < 1200">
                        <p class="benefit-text">Все компьютеры BOILING MACHINE с видеокартами GeForce RTX и кастомным водяным охлаждением подключены к профессиональным мониторам, чтобы продемонстрировать все возможности мощного железа и передать максимум деталей изображения.</p>
                        <a uk-toggle href="#modal-center" class="link">Записаться в шоурум</a>
                    </div>
                    <div class="flex-con-2" v-if="window.width > 1200">
                        <img src="/wp-content/uploads/px-dz-6.webp">
                    </div>
                </div>
                <div class="dz-container grid-2">
                    <div class="flex-con-2" v-if="window.width > 1200">
                        <img src="/wp-content/uploads/px-dz-7.webp">
                    </div>
                    <div class="flex-con-1">
                        <h2 class="benefit-title">Протестируй на мощном компьютере</h2>
                        <img src="/wp-content/uploads/px-dz-7.webp" class="mobile-img" v-if="window.width <= 1200">
                        <p class="benefit-text">Все компьютеры BOILING MACHINE с видеокартами GeForce RTX и кастомным водяным охлаждением подключены к профессиональным мониторам, чтобы продемонстрировать все возможности мощного железа и передать максимум деталей изображения.</p>
                        <a uk-toggle href="#modal-center" class="link">Записаться в Шоурум</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
<section class="dz-section">
    <div class="bm-adaptive bm-margin bm">
        <div class="dz-title-container">
            <h2 class="title">Записаться в шоурум</h2>
        </div>
        <?php echo do_shortcode('[bookit category="1" service="1" theme="step_by_step"] '); ?>
    </div>
</section>

<div id="modal-center" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="popup-container">
            <h2 class="zapis-v-demo-text__title">
                Запись в шоурум
            </h2>

            <?php echo do_shortcode('[bookit category="1" service="1" theme="step_by_step"]'); ?>
        </div>

    </div>
</div>





<style>

    /*
    Стили для формы бронирования
    */
    .month-slide-control{margin-bottom: 20px !important;}
    #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date, #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.time{padding-top: 0 !important;}
    .calendar-header-navbar .navbar{
        background-color: #202020 !important;
        border: 1px solid #202020 !important;
        border-radius: 15px !important;
    }
    #bookit-app .step-by-step-view .calendar-header-navbar .calendar-step-nav .calendar-step-item.active .step .step-num{
        background-color: unset !important;
        border: 1px solid #fff !important;
        color: #fff !important;
    }
    #bookit-app .step-by-step-view .calendar-header-navbar .calendar-step-nav .calendar-step-item .step .step-num{
        width: 40px !important;
        height: 40px !important;
        font-style: normal;
        font-weight: 700 !important;
        font-size: 18px !important;
        line-height: 130%;

        position: relative !important;
        background-color: #3D3D3D !important;
        color: #CBCBCB !important;
    }
    #bookit-app .step-by-step-view .calendar-header-navbar .calendar-step-nav .calendar-step-item .step{
        font-style: normal;
        font-weight: 500 !important;
        font-size: 18px !important;
        line-height: 130%;
        color: #c3c3c3 !important;
        border-right: unset !important;
        justify-content: flex-start !important;
    }
    #bookit-app .step-by-step-view .calendar-header-navbar .calendar-step-nav .calendar-step-item.active .step{
        color: #fff !important;
    }
    #bookit-app .step-by-step-view .calendar-header-navbar .calendar-step-nav .calendar-step-item .step .step-title{
        width: auto !important;
        margin-left: 18px !important;
    }
    .calendar-step-nav .calendar-step-item:nth-child(3){display: none !important;}
    #bookit-app .step-by-step-view button i.right-icon{display: none !important;}
    #bookit-app .step-by-step-view button{
        font-weight: 700 !important;
        font-size: 16px !important;
        line-height: 130% !important;
    }
    #bookit-app .step-by-step-view .calendar-content .step-content .datetime{padding: unset !important;}
    #bookit-app .step-by-step-view .calendar-content .step-content{
        padding: unset !important;
        max-width: 70%;
        margin: 30px auto 0 auto !important;
    }
    #bookit-app .step-by-step-view .calendar-content .step-content .datetime div label{
        font-style: normal !important;
        font-weight: 500 !important;
        font-size: 18px !important;
        line-height: 130% !important;
        color: #181818 !important;
        margin-bottom: 12px !important;
    }
    #bookit-app .step-by-step-view .calendar-content .step-content .staff-content p{
        font-style: normal;
        font-weight: 500 !important;
        font-size: 18px !important;
        line-height: 130% !important;
        color: #181818 !important;
        margin-bottom: 18px !important;
    }
    #bookit-app .step-by-step-view .calendar-content .step-content ul li.active{
        border: 1px solid #EF2525 !important;
        border-radius: 10px !important;
        background-color: unset !important;
    }
    #bookit-app .step-by-step-view .calendar-content .step-content .staff-content ul.staff li .info{margin-left: 0 !important;}
    #bookit-app .step-by-step-view .calendar-content .step-content .staff-content ul.staff li{
        width: auto !important;
        padding: 16px 20px 19px 20px !important;
    }
    #bookit-app .step-by-step-view .calendar-header-navbar .calendar-step-nav .calendar-step-item .step .selected-icon{
        width: 40px !important;
        height: 40px !important;
        background-color: #76B942 !important;
        border: unset !important;
        position: relative !important;
    }
    #bookit-app .step-by-step-view .calendar-header-navbar .calendar-step-nav .calendar-step-item .step .selected-icon:after{
        background-color: #fff !important;

    }
    #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select{
        box-shadow: unset !important;
        background-color: #FFFFFF !important;
        border: 1px solid #D1D1D1 !important;
        border-radius: 10px !important;
        padding: 20px 20px 35px 20px !important;
        top: 100% !important;
    }
    #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select .month-slide-control div{
        background-color: #fff !important;
    }
    #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select .month-slide-control div.next .right-icon, #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select .month-slide-control div.prev .right-icon,#bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select .month-slide-control div.next .left-icon, #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select .month-slide-control div.prev .left-icon{
        background: #ef2525 !important;
    }
    #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select .month-slide-control div.slider-title{
        font-style: normal;
        font-weight: 600 !important;
        font-size: 18px !important;
        line-height: 120% !important;
        text-align: center;
        color: #1E1E1E !important;
        text-transform: capitalize !important;
    }

    #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select .day-list .week-titles{
        display: grid !important;
        grid-template-columns: repeat(7,1fr);
        grid-gap: 40px;
        
    }
    #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select .day-list .week-titles .title{
        width: auto !important;
        font-weight: 500 !important;
        font-size: 16px !important;
        line-height: 120% !important;
        text-align: center;
        color: #4E4E4E !important;
    }
    #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select .day-list .week{
        display: grid !important;
        grid-template-columns: repeat(7,1fr);
        grid-gap: 40px;
        
    }
    #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select .day-list .week:last-child{
        margin-bottom: 0 !important;
    }
    #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select .day-list .week .day.inactive{
        font-style: normal !important;
        font-weight: 400 !important;
        font-size: 16px !important;
        line-height: 120% !important;
        text-align: center;
        color: #181818 !important;
        border: 1px solid #EEEEEE !important;
        border-radius: 5px !important;
        opacity: .7 !important;
    }
    #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select .day-list .week .day{
        font-style: normal !important;
        font-weight: 400 !important;
        font-size: 16px !important;
        line-height: 120% !important;
        text-align: center;
        color: #181818 !important;
        border: 1px solid #EEEEEE !important;
        border-radius: 5px !important;
    }
    #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select .day-list .week .day.active{
        color: #EF2525 !important;
        border: 1px solid #EF2525 !important;
        background-color: unset !important;
    }

    #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.time .time-select{
        box-shadow: unset !important;
        background-color: #fff !important;
        border: 1px solid #d1d1d1 !important;
        border-radius: 10px !important;
        padding: 20px 20px 35px !important;
        top: 100% !important;
    }
    #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.time .time-select .time-list{
        overflow-y: unset !important;
        padding: unset !important;
        grid-gap: 30px !important;
        display: grid !important;
        grid-template-columns: repeat(5,1fr);
    }
    #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.time .time-select .time-list .time-slot{
        margin: unset !important;
        padding: unset !important;
        justify-content: center;
        font-weight: 400 !important;
        font-size: 16px !important;
        line-height: 120%;
        color: #181818 !important;
        border: 1px solid #EEEEEE !important;
        border-radius: 5px !important;
        padding: 10px 12px !important;
    }
    #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.time .time-select .time-list .time-slot.active{
        color: #EF2525 !important;
        border: 1px solid #EF2525 !important;
        background-color: unset !important;
    }
    .staff .name, #bookit-app .step-by-step-view .calendar-content .step-content ul li:not(.active):hover{
        font-weight: 400 !important;
        font-size: 18px !important;
        line-height: 130%;
        color: #181818 !important;
        opacity: 1 !important;
    }
    #bookit-app .step-by-step-view .calendar-content .step-content.detailsForm, #bookit-app .step-by-step-view .calendar-content .step-content.confirmation{
        max-width: 100% !important;
    }
    .details .row:first-child{
        grid-gap: 30px;
        justify-content: space-between;
        margin-bottom: 30px !important;
    }
    .details .row:first-child .detail-form{
        flex-basis: 31% !important;
    }
    #bookit-app .step-by-step-view .calendar-content .step-content .details .row .detail-form label{
        font-style: normal !important;
        font-weight: 500 !important;
        font-size: 18px !important;
        line-height: 130%;
        color: #181818 !important;
        margin-bottom: 12px !important;
    }
    #bookit-app .step-by-step-view .calendar-content .step-content .datetime div .select{
        padding: 30px 20px !important;
    }
    #bookit-app .step-by-step-view .calendar-content .step-content .details .row .detail-form input, #bookit-app .step-by-step-view .calendar-content .step-content .details .row .detail-form textarea{
        border: 1px solid #D1D1D1 !important;
        border-radius: 10px !important;
        background-color: #fff !important;
        padding: 30px 5px !important;
    }
    #bookit-app .step-by-step-view .calendar-content .step-content .details .row .detail-form input:focus, #bookit-app .step-by-step-view .calendar-content .step-content .details .row .detail-form textarea:focus{
        color: #181818 !important;
    }
    #bookit-app .step-by-step-view .calendar-content .step-content .details .row .detail-form input::placeholder, #bookit-app .step-by-step-view .calendar-content .step-content .details .row .detail-form textarea::placeholder{
        color: #898989 !important;
    }
    #bookit-app .step-by-step-view .calendar-content .step-content .details .row .detail-form textarea{
        height: 150px !important;
    }

    .book-order-content{
        display: grid;
        grid-template-columns: repeat(4,1fr);
        grid-gap: 30px;
        margin-top: 35px;
    }
    .book-information{
        font-style: normal;
        font-weight: 500;
        font-size: 24px;
        line-height: 120%;
        color: #181818;
        margin: 0;
    }
    .order-box{
        background: #FAFAFA;
        border: 1px solid #D1D1DD;
        border-radius: 10px;
        padding: 20px;
    }
    .order-box-title{
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 120%;
        color: #181818;
        margin: 0;
        margin-bottom: 10px;
    }
    .order-box-info{
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 120%;
        color: #181818;
        margin: 0;
    }
    .datetime .error-tip{display: none;}
    .step-content.result, .calendar-footer{display: none !important;}
    #modal-center{z-index: 99999 !important;}
    @media screen and (max-width: 992px){
        #bookit-app .step-by-step-view .calendar-header-navbar .navbar button{
            width: auto !important;
        }
        #bookit-app .step-by-step-view .calendar-header-navbar .navbar{
            display: flex !important;
            flex-direction: column !important;
            justify-content: flex-start !important;
            align-items: flex-start !important;
        }
        #bookit-app .step-by-step-view .calendar-header-navbar .calendar-step-nav{
            width: 100% !important;
            margin-left: 0 !important;
        }
        #bookit-app .step-by-step-view.small-block .calendar-content .step-content .datetime{
            display: flex !important;
            flex-direction: column !important;
            height: auto !important;
        }
        #bookit-app .step-by-step-view.small-block .calendar-content .step-content .datetime div.time{
            margin-left: 0 !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select .day-list .week-titles{
            grid-gap: unset !important;
            margin-bottom: 20px !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select .day-list .week{
            grid-gap: 5px !important;
        }
        #bookit-app .step-by-step-view.small-block .calendar-content .step-content .datetime div.time{
            width: 100% !important;
        }
        #bookit-app .step-by-step-view.small-block .calendar-content .step-content .datetime div.date{
            width: 100% !important;
            max-width: unset !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.time .time-select .time-list{
            grid-gap: 5px !important;
            grid-template-columns: repeat(4,1fr) !important;
        }
        #bookit-app .step-by-step-view.small-block .calendar-content .step-content .staff-content ul.staff li{
            flex-basis: 100% !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .details .row{
            min-width: unset !important;
            flex-direction: column !important;
        }
        .book-order-content{
            grid-template-columns: 100% !important;
        }
    }

    

    .popup-container #bookit-app .step-by-step-view .calendar-header-navbar .navbar{
            display: flex !important;
            justify-content: flex-start !important;
            align-items: center !important;
        }
    .popup-container    #bookit-app .step-by-step-view .calendar-header-navbar .calendar-step-nav{
            margin-left: 0 !important;
        }
    .popup-container    #bookit-app .step-by-step-view.small-block .calendar-content .step-content .datetime{
            display: flex !important;
            flex-direction: column !important;
            height: auto !important;
        }
    .popup-container    #bookit-app .step-by-step-view.small-block .calendar-content .step-content .datetime div.time{
            margin-left: 0 !important;
        }
    .popup-container    #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select .day-list .week-titles{
            grid-gap: unset !important;
        }
    .popup-container    #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select .day-list .week{
            grid-gap: 5px !important;
        }
    .popup-container    #bookit-app .step-by-step-view.small-block .calendar-content .step-content .datetime div.time{
            width: 100% !important;
        }
    .popup-container    #bookit-app .step-by-step-view.small-block .calendar-content .step-content .datetime div.date{
            width: 100% !important;
            max-width: unset !important;
        }
    .popup-container    #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.time .time-select .time-list{
            grid-gap: 5px !important;
            grid-template-columns: repeat(4,1fr) !important;
        }
    .popup-container    #bookit-app .step-by-step-view.small-block .calendar-content .step-content .staff-content ul.staff li{
            flex-basis: 100% !important;
        }
    .popup-container    #bookit-app .step-by-step-view .calendar-content .step-content .details .row{
            min-width: unset !important;
            flex-direction: column !important;
        }
    .popup-container    .book-order-content{
            grid-template-columns: 100% !important;
        }


    @media screen and (min-width: 1200px){
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select{
            width: 570px !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select .day-list .week-titles{margin-bottom: 25px !important;}
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select .day-list .week{margin-bottom: 25px !important;}

    }



    @media screen and (min-width: 1600px){
        .demo-zona-video{overflow: hidden;}
        .uk-modal-dialog{
            padding: 40px !important;
            border-radius: 30px !important;
            width: 1080px !important;
        }


        .zapis-v-demo-text__title{
            font-size: 32px;
        }
        .dz-main-text{
            font-size: 20px;
            margin: 0;
            margin-bottom: 40px;
        }
        .dz-title{
            font-size: 60px;
            margin: 0;
            margin-bottom: 25px;
        }
        .dz-link-popup{
            font-size: 16px;
        }
        .dz-container-main{
            height: 90vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            max-width: 40%;
        }
        .dz-title-container{
            margin-bottom: 50px;
        }
        .title{
            font-size: 50px;
        }
        .box-text{
            font-size: 18px;
        }
        .dz-section{margin-top: 100px;}
        .dz-container.grid-2{margin-bottom: 100px;}
        .benefit-title{ font-size: 50px; margin-bottom: 25px;}
        .benefit-text{font-size: 20px; margin: 0; margin-bottom: 35px; }
        .link{font-size: 16px;}

    }

    @media screen and (min-width: 1200px) and (max-width: 1600px){
        .zapis-v-demo-text__title{
            font-size: 32px;
        }
        .demo-zona-video{overflow: hidden;}
        .dz-main-text{
            font-size: 18px;
            margin: 0;
            margin-bottom: 40px;
        }
        .dz-title{
            font-size: 46px;
            margin: 0;
            margin-bottom: 20px;
        }
        .dz-link-popup{
            font-size: 16px;
        }
        .dz-container-main{
            height: 90vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            max-width: 40%;
        }
        .dz-title-container{
            margin-bottom: 50px;
        }
        .title{
            font-size: 46px;
        }
        .box-text{
            font-size: 18px;
        }
        .dz-section{margin-top: 100px;}
        .dz-container.grid-2{margin-bottom: 100px; }
        .benefit-title{ font-size: 36px; margin-bottom: 20px;}
        .benefit-text{font-size: 20px; margin: 0; margin-bottom: 35px; }
        .link{font-size: 16px;}

    }

    @media screen and (min-width: 992px) and (max-width: 1200px){
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select{
            width: 570px !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select .day-list .week-titles{
            margin-bottom: 15px !important;
        }
        .zapis-v-demo-text__title{
            font-size: 32px;
        }
        .demo-zona-video{overflow: hidden;}
        .dz-main-text{
            font-size: 18px;
            margin: 0;
            margin-bottom: 40px;
        }
        .dz-title{
            font-size: 36px;
            margin: 0;
            margin-bottom: 20px;
        }
        .dz-link-popup{
            font-size: 16px;
        }
        .dz-container-main{
            height: 90vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            max-width: 50%;
        }
        .dz-title-container{
            margin-bottom: 50px;
        }
        .title{
            font-size: 36px;
        }
        .box-text{
            font-size: 18px;
        }
        .dz-section{margin-top: 50px;}
        .dz-container.grid-2{margin-bottom: 100px; grid-template-columns: 100% !important; max-width: 70%; margin: auto; text-align: center;}
        .dz-benefits .dz-container.grid-2:first-child{margin-bottom: 50px;}
        .benefit-title{ font-size: 36px; margin-bottom: 25px;}
        .benefit-text{font-size: 18px; margin: 0; margin-bottom: 35px; }
        .link{font-size: 16px; margin: auto;}
        .mobile-img{margin-bottom: 20px;}
    }

    @media screen and (min-width: 576px) and (max-width: 992px){

        #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select{
            width: 450px !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.time .time-select{
            max-height: unset !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.time .time-select .time-list, .popup-container #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.time .time-select .time-list{
            grid-template-columns: repeat(2, 1fr) !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content ul{
            display: block !important;
        }
        .popup-container #bookit-app .bookit-app-content.step_by_step{
            min-width: unset !important;
            max-width: unset !important;
        }
        .popup-container #bookit-app .step-by-step-view .calendar-content .step-content .datetime{
            display: flex !important;
            grid-gap: 30px !important;
            flex-direction: column !important;
            height: auto !important;
        }
        .popup-container #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.time, #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date{
            width: 100% !important;
            margin-left: 0 !important;
            max-width: unset !important;
        }
        .popup-container #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select{
            width: 100% !important;
        }
        .calendar-icon, .time-icon{
            display: none !important;
        }
        #bookit-app .step-by-step-view .calendar-header-navbar .calendar-step-nav{background-color: unset !important;}
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select{
            box-shadow: unset !important;
            background-color: #fff !important;
            border: 1px solid #d1d1d1 !important;
            border-radius: 10px !important;
            padding: 20px 20px 35px !important;
            top: 100% !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select .month-slide-control div{
            font-style: normal;
            font-weight: 600 !important;
            font-size: 18px !important;
            line-height: 120% !important;
            text-align: center;
            color: #1e1e1e !important;
            text-transform: capitalize !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select .month-slide-control div{
            background-color: #fff !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select .month-slide-control div{
            background-color: #fff !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select .month-slide-control div.next .right-icon, #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select .month-slide-control div.prev .right-icon, #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select .month-slide-control div.next .left-icon, #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select .month-slide-control div.prev .left-icon{
            background: #ef2525 !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select .day-list .week-titles .title{
            font-weight: 500 !important;
            font-size: 16px !important;
            line-height: 120% !important;
            text-align: center;
            color: #4e4e4e !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select .day-list .week .day.inactive{
            font-style: normal !important;
            font-weight: 400 !important;
            font-size: 16px !important;
            line-height: 120% !important;
            text-align: center;
            color: #181818 !important;
            border: 1px solid #eee !important;
            border-radius: 5px !important;
            opacity: .7 !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select .day-list .week .day{
            font-style: normal !important;
            font-weight: 400 !important;
            font-size: 16px !important;
            line-height: 120% !important;
            text-align: center;
            color: #181818 !important;
            border: 1px solid #eee !important;
            border-radius: 5px !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select .day-list .week .day.active{
            color: #ef2525 !important;
            border: 1px solid #ef2525 !important;
            background-color: unset !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select .day-list .week{
            margin-bottom: 10px !important;
        }





        .zapis-v-demo-text__title{
            font-size: 32px;
        }
        .dz-box{text-align: center;}
        .dz-container-flex-2 img, .dz-container-flex-3 img{
            max-width: 70%;
        }
        .dz-box-text-container{
            max-width: 70%;
            margin: 15px auto 0 auto;
            padding: 28px 30px !important;
        }
        .dz-container-flex-2, .dz-container-flex-3{
            grid-template-columns: 100% !important;
        }
        .demo-zona-video{overflow: hidden;}
        .dz-main-text{
            font-size: 18px;
            margin: 0;
            margin-bottom: 40px;
            text-align: center;
        }
        .dz-title{
            font-size: 36px;
            margin: 0;
            margin-bottom: 20px;
            text-align: center;
        }
        .dz-link-popup{
            font-size: 16px;
        }
        .dz-container-main{
            height: 90vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .dz-title-container{
            margin-bottom: 30px;
        }
        .title{
            font-size: 30px;
        }
        .box-text{
            font-size: 18px;
            max-width: 100% !important;
        }
        .dz-section{margin-top: 50px;}
        .dz-container.grid-2{margin-bottom: 100px; grid-template-columns: 100% !important; max-width: 70%; margin: auto; text-align: center;}
        .dz-benefits .dz-container.grid-2:first-child{margin-bottom: 50px;}
        .benefit-title{ font-size: 30px; margin-bottom: 25px;}
        .benefit-text{font-size: 18px; margin: 0; margin-bottom: 35px; }
        .link{font-size: 16px; margin: auto;}
        .mobile-img{margin-bottom: 20px;}
    }

    @media screen and (max-width: 576px){
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select .day-list .week{
            display: grid !important;
            grid-template-columns: repeat(7,1fr);
            width: auto;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select .day-list .week .day{
            width: auto !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select{
            margin-left: 0 !important;
            width: auto !important;
            min-width: unset !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select .day-list{
            width: auto !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select .day-list .week-titles{
            width: auto !important;
            display: grid !important;
            grid-template-columns: repeat(7,1fr) !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content{
            max-width: 100% !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select{
            width: 450px !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.time .time-select{
            max-height: unset !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.time .time-select .time-list, .popup-container #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.time .time-select .time-list{
            grid-template-columns: repeat(2, 1fr) !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content ul{
            display: block !important;
        }
        .popup-container #bookit-app .bookit-app-content.step_by_step{
            min-width: unset !important;
            max-width: unset !important;
        }
        .popup-container #bookit-app .step-by-step-view .calendar-content .step-content .datetime{
            display: flex !important;
            grid-gap: 30px !important;
            flex-direction: column !important;
            height: auto !important;
        }
        .popup-container #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.time, #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date{
            width: 100% !important;
            margin-left: 0 !important;
            max-width: unset !important;
        }
        .popup-container #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select{
            width: 100% !important;
        }
        .calendar-icon, .time-icon{
            display: none !important;
        }
        #bookit-app .step-by-step-view .calendar-header-navbar .calendar-step-nav{background-color: unset !important;}
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select{
            box-shadow: unset !important;
            background-color: #fff !important;
            border: 1px solid #d1d1d1 !important;
            border-radius: 10px !important;
            padding: 20px 20px 35px !important;
            top: 100% !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select .month-slide-control div{
            font-style: normal;
            font-weight: 600 !important;
            font-size: 18px !important;
            line-height: 120% !important;
            text-align: center;
            color: #1e1e1e !important;
            text-transform: capitalize !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime div.date .calendar-select .month-slide-control div{
            background-color: #fff !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select .month-slide-control div{
            background-color: #fff !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select .month-slide-control div.next .right-icon, #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select .month-slide-control div.prev .right-icon, #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select .month-slide-control div.next .left-icon, #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select .month-slide-control div.prev .left-icon{
            background: #ef2525 !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select .day-list .week-titles .title{
            font-weight: 500 !important;
            font-size: 16px !important;
            line-height: 120% !important;
            text-align: center;
            color: #4e4e4e !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select .day-list .week .day.inactive{
            font-style: normal !important;
            font-weight: 400 !important;
            font-size: 16px !important;
            line-height: 120% !important;
            text-align: center;
            color: #181818 !important;
            opacity: .7 !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select .day-list .week .day{
            font-style: normal !important;
            font-weight: 400 !important;
            font-size: 16px !important;
            line-height: 120% !important;
            text-align: center;
            color: #181818 !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select .day-list .week .day.active{
            color: #ef2525 !important;
            border: 1px solid #ef2525 !important;
            background-color: unset !important;
        }
        #bookit-app .step-by-step-view .calendar-content .step-content .datetime-content .select-datetime-mobile .calendar-select .day-list .week{
            margin-bottom: 10px !important;
        }



        .dz-box{text-align: center;}

        .dz-box-text-container{
            padding: 28px 30px !important;
        }
        .dz-container-flex-2, .dz-container-flex-3{
            grid-template-columns: 100% !important;
        }
        .demo-zona-video{overflow: hidden;}
        .dz-main-text{
            font-size: 18px;
            margin: 0;
            margin-bottom: 40px;
            text-align: center;
        }

        .zapis-v-demo-text__title{
            font-size: 26px;
        }

        .dz-title{
            font-size: 30px;
            margin: 0;
            margin-bottom: 20px;
            text-align: center;
        }
        .dz-link-popup{
            font-size: 16px;
        }
        .dz-container-main{
            height: 90vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .dz-title-container{
            margin-bottom: 30px;
        }
        .title{
            font-size: 26px;
        }
        .box-text{
            font-size: 18px;
            max-width: 100% !important;
        }
        .dz-section{margin-top: 50px;}
        .dz-container.grid-2{margin-bottom: 100px; grid-template-columns: 100% !important; text-align: center;}
        .dz-benefits .dz-container.grid-2:first-child{margin-bottom: 50px;}
        .benefit-title{ font-size: 26px; margin-bottom: 25px;}
        .benefit-text{font-size: 18px; margin: 0; margin-bottom: 35px; }
        .link{font-size: 16px; margin: auto;}
        .mobile-img{margin-bottom: 20px;}
    }

    svg line{stroke-width: 1.5;}
    svg{height: 24px; width: 24px; color: #6D6D6D;}
    .uk-modal-close-default{
        position: absolute;
        left: auto;
        top: 40px;
        right: 40px;
    }
    .zapis-v-demo-text__title{
        font-style: normal;
        font-weight: 700;
        line-height: 120%;
        color: #181818;
    }
    .link:hover{
        text-decoration: none;
        border: 1px solid #EF2525;
        border-radius: 10px;
        background: #EF2525;
        color: #fff;
        transition: .3s;
    }
    .link{
        font-style: normal;
        font-weight: 600;
        line-height: 130%;
        color: #EF2525;
        display: block;
        width: fit-content;
        text-decoration: none;
        border: 1px solid #EF2525;
        border-radius: 10px;
        transition: .3s;
        padding: 20px 35px;
    }
    .benefit-text{
        font-style: normal;
        font-weight: 400;
        line-height: 170%;
        color: #181818;
    }
    .benefit-title{
        font-style: normal;
        font-weight: 600;
        line-height: 120%;
        color: #181818;
    }
    .dz-benefits .dz-container.grid-2:last-child{margin-bottom: 0;}
    .dz-container.grid-2{
        display: grid;
        grid-template-columns: repeat(2,1fr);
        grid-gap: 80px;
        align-items: center;
    }
    .dz-box-text-container{
        background: #F4F4F4;
        border-radius: 30px;
        padding: 28px 0;
        margin-top: 15px;
    }
    .box-text{
        font-style: normal;
        font-weight: 400;
        line-height: 150%;
        text-align: center;
        color: #181818;
        margin: 0 auto 0 auto;
        max-width: 64%;

    }
    .dz-container-flex-3 .dz-box-text-container{
        padding: 28px 30px;
    }
    .dz-container-flex-3 .box-text{
        max-width: 100%;
    }
    .dz-container-flex-2{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 30px;
        margin-bottom: 30px;
    }
    .dz-container-flex-3{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 30px;
    }
    .title{
        font-style: normal;
        font-weight: 600;
        line-height: 120%;
        text-align: center;
        color: #181818;
    }
    .demo-zona-info{100%;}
    .demo-zona-video-content{height: 100vh; overflow: hidden;}
    .dz-link-popup:hover{
        background: #DA1414;
        transition: .3s;
        text-decoration: none;
        color: #FFFFFF;
    }
    .dz-link-popup{
        font-style: normal;
        font-weight: 700;
        line-height: 130%;
        color: #FFFFFF;
        display: block;
        width: fit-content;
        padding: 20px 35px;
        background: #EF2525;
        border-radius: 10px;
        transition: .3s;
        text-decoration: none;
    }
    .dz-main-text{
        font-style: normal;
        font-weight: 500;
        line-height: 160%;
        color: #CBCBCB;
    }
    .dz-title{
        font-style: normal;
        font-weight: 700;
        line-height: 120%;
        color: #FFFFFF;
    }


    .demo-zona-video-content{
        position: relative;
		background: linear-gradient(90deg, #000000 0%, rgba(17, 17, 17, 0) 100%);
    }
    .bm-contacts-breadcrumb{
        margin-top: 0;
        padding-top: 30px;
    }
    .demo-zona-video{
        position: relative;
        min-height: 90vh;
        width: 100%;
    }
    .video-background{
        position: absolute;
        width: 100%;
        height: auto;
        left: 0;
        top: 0;
    }

    #page{background: #FFFFFF;}
    footer{margin-top: 100px;}
</style>

<script>
    const { createApp } = Vue

    createApp({
        data(){
            return{
                window: {
                    width: 0,
                    height: 0
                },
            }
        },
        created() {
            window.addEventListener('resize', this.handleResize);
            this.handleResize();
        },
        destroyed() {
            window.removeEventListener('resize', this.handleResize);
        },
        methods: {
            handleResize() {
                this.window.width = window.innerWidth;
                this.window.height = window.innerHeight;
            }
        }
    }).mount('#app')
</script>
<?php get_footer(); ?>
