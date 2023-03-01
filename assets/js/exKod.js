let exKod = {
    scroll:         null,
    isScroll:       false,
    scrollTop:      2,      // На какой позиции страница
    scrollBottom:   null,   // На какой позиции страница
    scrollLast:     null,
    wight:          null,   // Ширина окна сайта
    height:         null,

    mobileBtn:          '.mobile-btn',
    mobileContent:      '.mobile',

    size:               '',

    ajaxPath:           "/wp-admin/admin-ajax.php",

    sliderArrowLeft:    '<button class="slick-prev"><svg><use xlink:href="#i-arrow-left"></use></svg></button>',
    sliderArrowRight:   '<button class="slick-next"><svg><use xlink:href="#i-arrow-right"></use></svg></button>',

    /** Первая загрузка **/
    init: function () {
        exKod.update();
        console.log('Запуск exKod');
    },

    /** Обновление **/
    update: function() {
        this.Catalog.sort();
        this.Catalog.filter();
        this.Catalog.filterClear();
        this.Catalog.img();
        this.Catalog.pagination();
        this.Catalog.sortMobile();
        this.Catalog.onFavorite();
        this.Catalog.onComparison();
        this.Catalog.onComparisonClear();
        this.Catalog.onFavoriteClear();
        this.Catalog.ComparisonDifferent();
        this.Catalog.WooCoomersAddToCart();
        // this.Btn.createSelect('.catalog-sort-list');
        this.Btn.tag();
        this.Slider();

        this.Resize.init();
        this.Fixed.init();
    },

    // Слайдеры
    Slider: function() {
        let $ = jQuery;

        $('.js-catalog-products-comparison').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            infinite: false,
            asNavFor: '.js-catalog-comparison-list',
            centerMode: false,
            arrows: true,
            dots: false,
            focusOnSelect: false,
            prevArrow: exKod.sliderArrowLeft,
            nextArrow: exKod.sliderArrowRight,
            responsive: [
                {
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        arrows: false,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        arrows: false,
                    }
                },
            ]
        });

        $('.js-catalog-comparison-list').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            adaptiveHeight: true,
            swipeToSlide: false,
            swipe:false,
            arrows: false,
            infinite: false,
            fade: false,
            focusOnSelect: false,
            asNavFor: '.js-catalog-products-comparison',
            responsive: [
                {
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                    }
                },
            ]
        });

        // Адаптивная настройка размера сравнения
        var sliderAdaptiveHeight = function(){
            var heights = [];
            console.log('Изменения размеров атрибутов сравнения');

            $('.js-catalog-comparison-list').each(function(){
                let heights = [];
                $(this).find('.slick-active').each(function(){
                    heights.push($(this).height());
                });

                $(this).find('.slick-list').height(Math.max.apply(null, heights));
            });
        }

        $('.js-catalog-products-comparison').on('afterChange', function(event, slick, currentSlide, nextSlide){
            sliderAdaptiveHeight();
        });
        $('.js-catalog-products-comparison').on('destroy', function(event, slick, currentSlide, nextSlide){
            sliderAdaptiveHeight();
        });
        $('.js-catalog-products-comparison').on('init', function(event, slick, currentSlide, nextSlide){
            sliderAdaptiveHeight();
            setTimeout(function() {
                    sliderAdaptiveHeight();
            }, 1000);
            setTimeout(function() {
                sliderAdaptiveHeight();
            }, 2000);
        });
        $('.js-catalog-products-comparison').on('setPosition', function(event, slick, currentSlide, nextSlide){
            sliderAdaptiveHeight();
        });

    },

    /** Формы **/
    Form: {
        forms: false,
        form: false,
        formBtn: false,
        formData: false,
        error: false,
        allowSending: false,

        init: function() {
            this.forms = $('form.js-form');

            // * Кнопка отправки
            $.each(this.forms, function(key, value) {

                let $this = $(this),
                    $btn  = $this.find('button');

                $btn.unbind('click');
                $btn.on('click', function (e) {
                    e.preventDefault();

                    APP.Form.form = $this;
                    APP.Form.getData();
                    APP.Form.ajax();
                });

                // * Активировать кнопку если началось наполнение
                $this.find('input').keyup(function() {
                    APP.Form.form = $this;
                    APP.Form.formBtn = $this.find('button');
                    APP.Form.checkBtn();

                });
            });

        },
        getData: function () {
            APP.Form.formData = new FormData();

            let $this = this.form,
                formData = this.formData;


            formData.append("action", 'ajax');
            formData.append("type", 'form');
            formData.append('form', $this.data('type'));

            // * Перебираем все поля
            $this.find('input, textarea, select').each(function() {
                formData.append(this.name, $(this).val());


                if($($this).is('[type=file]')) {
                    formData.append(this.name, $(this).attr('value'));
                }

                if($(this).is('[type=checkbox]')){
                    formData.append(this.name, $(this).is(':checked'));
                }
            });

            // * Присоединяем все файлы
            // if($this.find('[type=file]').is('input')){ // Если нашки хоть один
            //     $.each($('[type=file]'), function(key, file) {
            //         formData.form.append($(file).attr('name'), $(file)[0].files[0]);
            //     });
            // }

            this.formData = formData;
            return formData;
        },
        ajax: function () {
            let  formData = APP.Form.formData;

            $.ajax({
                url: APP.ajaxPath,
                type: 'post',
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    Common.ajaxReturn(APP.Form, data);
                }
            });
        },

        checkBtn: function () {
            APP.Form.allowSending = false;

            this.form.find('input, textarea, select').each(function() {
                if($(this).attr('data-necessarily') === 'true' && $(this).val().length >= 1) {
                    APP.Form.allowSending = true;
                }
            });


            if(APP.Form.allowSending === true) {
                APP.Form.formBtn.addClass('_active');
            } else {
                APP.Form.formBtn.removeClass('_active');
            }
        },

        returnSuccess: function (data) {
            this.clear(true);

            $.fancybox.close();

            // Показать попап если он есть
            if(data['data']['popup']) {
                $.fancybox.open({
                    src: data['data']['popup'],
                    type: 'html'
                });
            }
        },
        returnError: function (data) {
            this.valid(data);

            APP.Form.form.find('.form-error').html(data['error']);

            // Показать попап если он есть
            if(data['data']['popup']) {
                $.fancybox.open({
                    src: data['data']['popup'],
                    type: 'html'
                });
            }
        },

        // Проверяем все поля
        valid: function (data) {
            console.log(data);

            $.each(data['data'], function(key, value) {

                let $input = APP.Form.form.find('[name='+key+']');

                if(value['error']){
                    $input.parent().addClass('_error');

                    if($input.siblings('.form-input-error').length === 0){
                        $input.after('<div class="form-input-error">'+value['error']+'</div>');
                    }else{
                        $input.siblings('.form-input-error').html(value['error']);
                    }
                }else{
                    $input.parent().removeClass('_error');
                    $input.siblings('.form-input-error').remove();
                }
            });

            // Удалить все, если все удачно
            if(data['result'] === 'success'){
                APP.Form.clear();
            }
        },
        clear: function($value = false) {
            let formData = this.formData;

            for(let field of formData.entries()) {
                let $this = this.form.find("[name=" + field[0] + "][type!='hidden']");

                if($value === true) {
                    $this.val('');
                }

                $this.parent().removeClass('_error');
                $this.siblings('.form-input-error').remove();
            }

            APP.Form.form.find('.form-error').html();

            return true;
        },
    },

    Btn: {
        createSelect: function ($this) {
            $this = $($this);
            $active = $this.find('.active'),
                $svg = "<svg width=\"11\" height=\"6\" viewBox=\"0 0 11 6\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">\n" +
                    "<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M5.5 3.81689L9.81956 -5.15985e-08L11 1.14005L5.5 6L-4.9833e-08 1.14005L1.18044 -4.29227e-07L5.5 3.81689Z\" fill=\"#212121\"/>\n" +
                    "</svg>\n"

            $this.wrap( "<div class='js-btn-select'></div>");
            $this.parent().prepend( "<div class='js-btn-select-active'><span>" + $active.html() + "</span>" + $svg +  "</div>" );
            $this.addClass('js-btn-select-ul');
            $this.css({
                "display":
                    "none"
                ,
                "position":
                    "absolute"
                ,
            });

            exKod.Btn.select();
        },

        select: function () {
            let $btn = $('.js-btn-select');

            // Выпадающий список
            $btn.each(function(index) {
                let $this = $(this);
                $(this).on('click', function(e) {
                    e.preventDefault();

                    let $this = $(this),
                        $this_active = $this.find('.js-btn-seclet-active');
                        $parent   = $this.parent(),
                        $hidden   = $this.find('ul'),
                        speed     = $hidden.height() * 0.8;

                    console.log($hidden);

                    if ($this.hasClass('active')) {
                        $this.removeClass('active');
                        $hidden.removeClass('active');
                        $hidden.slideUp(speed);
                    } else {
                        $this.addClass('active');
                        $hidden.addClass('active');
                        $hidden.slideDown(speed);
                    }

                    $hidden.find('a').on('click', function(e) {
                        e.preventDefault();
                        $(this).addClass('active');
                        $this_active.find('span').html($(this).html());
                    });
                });

                Common.btnHover($this, $this.parent().find('ul'));
            });
        },

        tag: function () {
            let $ob = $('.js-tag');

            // Выпадающий список
            $ob.each(function(index) {
                let $this = $(this);
                let $list = $this.find('li');
                let maxCount = $this.attr('data-count');
                let $btn = $this.find('.js-tag-btn');
                let i = 1;

                if ($list.length > maxCount) {
                    // $btn.html("<span>+ " + ($list.length - maxCount) + "</span>");
                    $btn.addClass('active');

                    $.each($list, function (index, value) {
                        if($(this).is($btn)) return;

                        if (i > maxCount) {
                            $(this).addClass('disable').removeClass('active');
                        } else {
                            $(this).addClass('active').removeClass('disable');
                        }

                        i = i + 1;
                    });

                    $btn.on('click', function (e) {
                        e.preventDefault();

                        // Листинг
                        $list.removeClass('disable').addClass('active');

                        // Кнопка
                        $(this).fadeOut(200);
                        // $(this).removeClass('active');
                    });
                } else {
                    $.each($list, function (index, value) {
                        $(this).addClass('active').removeClass('disable');
                    });
                }
            })
        }
    },

    Popup:{
        onShadow: function () {
            $body = $('body');
            $main = $('.main-container-chairs');

            $body.addClass('fixed');
            $main.addClass('shadow');
        },

        offShadow: function () {
            $body = $('body');
            $main = $('.main-container-chairs');

            $body.removeClass('fixed');
            $main.removeClass('shadow');
        }
    },

    /** Саталог **/
    Catalog: {
        sort: function() {
            let $btn = $('.js-catalog-sort-btn');

            // Кнопка отправки
            $btn.on('click', function (e) {
                e.preventDefault();
                console.log('Клик по кнопка сортировки');

                let $this = $(this);

                $btn.removeClass('active');
                $this.addClass('active');

                if($(".catalog-sort-type").hasClass('popup')) {
                    $(".catalog-sort-type").removeClass('popup');
                    $(".catalog-sort-type").css("display","none");
                    exKod.Popup.offShadow();
                };
                if(!$this.attr('data-count')) {
                    $this.parents('.catalog-sort').find('.catalog-sort-type-mobile span').html($this.html());
                }

                // Забираем данные с фильтра
                let $form = $('#ajaxform');


                // Поле сортировки
                if($this.attr('data-meta-key')) {
                    $val = $this.attr('data-meta-key');
                    $form.find('input[name=sort_meta_key]').val($val);
                    exKod.Common.setCookie('sort_meta_key', $val);
                }

                // Тип сортировки
                if($this.attr('data-orderby')) {
                    $val = $this.attr('data-orderby');
                    $form.find('input[name=sort_orderby]').val($val);
                    exKod.Common.setCookie('sort_orderby', $val);
                }

                // ASC или DESC
                if($this.attr('data-order')) {
                    $val = $this.attr('data-order');
                    $form.find('input[name=sort_order]').val($val);
                    exKod.Common.setCookie('sort_order', $val);

                   // $form.find('input[name=sort_order]').val($this.attr('data-order'));
                }

                // Количество товаров
                if($this.attr('data-count')) {
                    $val = $this.attr('data-count');
                    $form.find('input[name=sort_count]').val($val);
                    exKod.Common.setCookie('sort_count', $val);

                    //$form.find('input[name=sort_count]').val($this.attr('data-count'));
                }

                // Сбрасываем пагинацию
                $form.find('input[name=page]').val(1);
                exKod.Common.setUrl($form.find('input[name=url]').val());


                // console.log($form.find('input[name=sort_count]').val())

                // // Устанавлие сортировку в cookie
                // exKod.Common.setCookie('sort_order', $this.attr('data-sort'));
                // exKod.Common.setCookie('sort_type', $this.attr('data-type'));
                // exKod.Common.setCookie('sort_order', $this.attr('data-order'));
                // exKod.Common.setCookie('sort_count', $this.attr('data-count'));


                let data  = $form.serialize();

                exKod.Common.ajax(data, false, function(data) {
                    exKod.Catalog.resultCatalogList(data);
                }, function (data) {
                    // отображаем прелоадер и блокируем клик по фильтр в момент, когда он загружается
                    $('body' ).before('<div class="preloader"></div>')
                    $('.products' ).addClass('prevent-click');
                    $('.loadmore').remove();
                })
            });
        },
        sortMobile: function () {
            $(".catalog-sort-type-mobile").click( function() {
                $(".catalog-sort-type").css("display","block");
                $(".catalog-sort-type").css( "top" , $('header').height() + 10);
                $(".catalog-sort-type").addClass('popup');

                exKod.Popup.onShadow();
            });
            $(".catalog-sort-list-head-close").click( function() {
                hederHeight = $('.boiling-machine-header').height(); // вычисляем высоту шапки

                $(".catalog-sort-type").css("display","none");
                $(".catalog-sort-type").removeClass('popup');

                exKod.Popup.offShadow();
            });
        },

        pagination: function() {
            let $btn = $('.woocommerce-pagination a');

            // Кнопка отправки
            $btn.on('click', function (e) {
                e.preventDefault();

                console.log('Клик по кнопки пагинации');

                let $this = $(this);

                $btn.removeClass('active');
                $this.addClass('active');

                // Забираем данные с фильтра
                let $form = $('#ajaxform');

                $form.find('input[name=page]').val($this.html());
                exKod.Common.setUrl($this.attr('href'));

                let data  = $form.serialize();

                exKod.Common.ajax(data, false, function(data) {
                    exKod.Catalog.resultCatalogList(data);
                }, function (data) {
                    // отображаем прелоадер и блокируем клик по фильтр в момент, когда он загружается
                    $('body' ).before('<div class="preloader"></div>')
                    $('.products' ).addClass('prevent-click');
                    $('.loadmore').remove();
                })
            });
        },

        filter: function () {
            let $input = $('.js-filter-input');
            let load = false;


            // При вводе в фильт данных
            $input.keyup(function() {
                if(load != true) {
                    load = true;
                    setTimeout(function () {
                        // Забираем данные с фильтра
                        let $form = $('#ajaxform');

                        // Сбрасываем пагинацию
                        $form.find('input[name=page]').val(1);
                        exKod.Common.setUrl($form.find('input[name=url]').val());

                        let data  = $form.serialize();

                        exKod.Common.ajax(data, false, function(data) {
                            exKod.Catalog.resultCatalogList(data);
                            load = false;
                        }, function (data) {
                            // отображаем прелоадер и блокируем клик по фильтр в момент, когда он загружается
                            $('body' ).before('<div class="preloader"></div>')
                            $('.products' ).addClass('prevent-click');
                            $('.loadmore').remove();
                        })

                    }, 2500);
                }
            });

            // При нажании на фильт
            let $checkbox = $('.filter-list input[type=checkbox]');

            $checkbox.unbind('click').on('click', function (e) {
                let proizvoditel_id = $(this).attr('data-proizvoditel-id');
                let name            = $(this).attr('name');
                let term_id         = $(this).attr('data-term-id');

                if ($(this).is(':checked') && proizvoditel_id) {
                    $('input[data-term-id=' + proizvoditel_id + ']').prop('checked', true);
                }

                exKod.Catalog.filterSearchUpdate();
            });


            // Очистить параметры отдельно фильтра
            let $btnFilterParamsClear = $('.js-filter-param-clear');

            $btnFilterParamsClear.on('click', function (e) {
                e.preventDefault();

                console.log('Очистка фильтра');

                let $singleFilter = $(this).parents('.single-filter');

                console.log($singleFilter);
                console.log($singleFilter.find('input[type=text]'));

                $singleFilter.find('input').prop('checked', false);
                $singleFilter.find('input[type=number]').val('');

                // Цена
                let input = false;

                $input = $singleFilter.find('input[name=min_price]');
                $input.val($input.attr('min'));

                $input = $singleFilter.find('input[name=max_price]');
                $input.val($input.attr('max'));

                // Получаем данные
                let $form = $('#ajaxform');
                let data  = $form.serialize();

                exKod.Common.ajax(data, false, function(data) {
                    exKod.Catalog.resultCatalogList(data);
                }, function (data) {
                    // отображаем прелоадер и блокируем клик по фильтр в момент, когда он загружается
                    $('body' ).before('<div class="preloader"></div>')
                    $('.products' ).addClass('prevent-click');
                    $('.loadmore').remove();
                })
            });

            $('.js-filter-search').keyup(function() {
                exKod.Catalog.filterSearchInput($(this));
            });
        },

        filterSearchUpdate: function () {
            let $checkbox = $('.filter-list input[type=checkbox]');
            let status          = false;

            // Связь производителя и серии
            $('input[data-taxsanomy=pa_seriya]').parent().removeClass('none');

            $.each(($checkbox), function(key, value) {
                if($(this).attr('data-taxsanomy') == 'pa_proizvoditel') {
                    if($(this).is(':checked')) {
                        $('input[data-taxsanomy=pa_seriya][data-proizvoditel-id=' + $(this).attr('data-term-id') + ']').parent().removeClass('none');
                        status = true;
                    }else {
                        $('input[data-taxsanomy=pa_seriya][data-proizvoditel-id=' + $(this).attr('data-term-id') + ']').parent().addClass('none');
                    }
                };
            });

            if(status == false) {
                $('input[data-taxsanomy=pa_seriya]').parent().removeClass('none');
            }


            let $this = $('.js-filter-search');
            let $search_list = $this.parents('.single-filter').find('.filter-list li');

            $.each($search_list, function(key, value) {
                if($(this).hasClass('letter')){
                    let group  = $(this).attr('data-letter-group');
                    let status =  false;

                    $.each($search_list, function(key, value) {
                        if(!$(this).hasClass('letter') && $(this).attr('data-letter-group') == group) {
                            if(!$(this).hasClass('none')) {
                                status = true;
                            }
                        }
                    });

                    if(status == true) {
                        $(this).removeClass('none hidden');
                    } else {
                        $(this).addClass('none hidden');
                    }
                }
            });
        },
        filterSearchInput: function ($this) {
            let $val  = $this.val().toLowerCase();
            let $search_list = $this.parents('.single-filter').find('.filter-list li');

            $search_list.removeClass('active').addClass('hidden');

            $.each($search_list, function(key, value) {
                if ($(this).text().toLowerCase().indexOf($val) > -1) {

                    let letterGroup = $(this).attr('data-letter-group');

                    $(this).removeClass('hidden').addClass('active');

                    $.each($search_list, function(key, value) {
                        if($(this).hasClass('letter') && $(this).attr('data-letter-group') == letterGroup) {
                            console.log(letterGroup);
                            $(this).removeClass('hidden').addClass('active');
                        }
                    });
                }
            });
        },

        // Проверка какой фильтр сейчас активен и какой мобожно сбросить
        filterClear: function () {

            console.log('Проверка какой фильтр сейчас активен и какой мобожно сбросить');

            $.each($('.js-filter-param-clear'), function(key, value) {
                let $this = $(this);
                let $block = $this.parents('.single-filter');
                let $input = $block.find('input');

                $this.removeClass('active').addClass('hidden');

                $.each($input, function(key, value) {
                    let val = $(this).val();
                    let type  = $(this).attr('type');

                    // console.log(type + ' - ' + val);

                    if(type == 'number') {
                        if(val && val !== 'ves') {
                            $this.removeClass('hidden').addClass('active');
                        }
                    }

                    if(type == 'range') {
                        if(val != $(this).attr('min') && val != $(this).attr('max')) {
                            $this.removeClass('hidden').addClass('active');
                        }
                    }

                    if(type == 'checkbox' && $(this).is(':checked')) {
                        $this.removeClass('hidden').addClass('active');
                    }
                });
            });
        },

        filterCount: function () {
            let $this = $('.js-catalog-filter-count');

            $this.html($('.catalog-filter-tag li').length);

            if($('.catalog-filter-tag li').length >= 1) {
                $this.addClass('active');
            } else {
                $this.removeClass('active');
            }
        },

        resultCatalogList: function (data) {
            // выводим отфильтрованные товары
            $('.products' ).html( data.products );
            // выводим счётчик количества товаров

            $('.products' ).removeClass('prevent-click');
            $('.preloader').remove();

            exKod.Catalog.onFavorite();
            exKod.Catalog.onComparison();
            exKod.Catalog.pagination();
            exKod.Catalog.filterTag();
            exKod.Catalog.filterCount();
            exKod.Catalog.filterClear();
            exKod.Catalog.img();
        },

        img: function () {
            let $ = jQuery;
            let $el = $('.bm-chairs-product-img-control');

            // * Кнопка отправки
            $.each($el, function(key, value) {
                let $this   = $(this),
                    $arImg  = $this.find('.js-catalog-item-img'),
                    $block  = $this.parent('.bm-chairs-product-img'),
                    $img    = $block.find('.bm-chairs-product-img-check'),
                    $dots   = $block.find('.bm-chairs-product-img-dots span'),
                    $dots_count = $block.find('.bm-chairs-product-img-dots-count b');


                $arImg.unbind('mouseover').on('mouseover', function (e) {
                    e.preventDefault();
                    let id = $(this).attr('data-id');

                    $img.attr('src', $(this).attr('data-src'));

                    $dots.removeClass('active').eq(id).addClass('active');
                    $dots_count.html(parseInt(id) + 1);

                });


                // Возвращемся к первой картинки
                $block.parent().unbind('mouseout').on('mouseleave', function (e) {
                    console.log($(this));

                    $img.attr('src',  $img.attr('data-img'));
                    $dots.removeClass('active').eq(0).addClass('active');
                    $dots_count.html(1);
                });

                $(window).scroll(function() {
                    if($(window).width() <= 1000) {
                        $img.attr('src',  $img.attr('data-img'));
                        $dots.removeClass('active').eq(0).addClass('active');
                        $dots_count.html(1);
                        $block.find('.bm-chairs-product-img-control').attr('data-id', 0);
                    }
                });


                $(".bm-chairs-product-img-control").swipe( {
                    swipeRight:function(event, direction, distance, duration) {
                        console.log("You swiped " + direction);
                        move($(this), 'right');
                    },
                    swipeLeft:function(event, direction, distance, duration) {
                        console.log("You swiped " + direction);
                        move($(this), 'left');
                    },
                    click:function(event, target) {

                    },
                    threshold:100,
                    // allowPageScroll:"vertical"
                });


            });



            function move($this, direction) {
                let $arImg  = $this.find('.js-catalog-item-img'),
                    $block  = $this.parent('.bm-chairs-product-img'),
                    $img    = $block.find('.bm-chairs-product-img-check'),
                    $dots   = $block.find('.bm-chairs-product-img-dots span'),
                    $dots_count = $block.find('.bm-chairs-product-img-dots-count b'),
                    id      = parseInt($this.attr('data-id'));

                    if(direction == 'right') {
                        id = id - 1;
                    }

                    if(direction == 'left') {
                        id = id + 1;
                    }

                    if(id >= 0 && id < $arImg.length) {
                        $this.attr('data-id', id);

                        let img_src = $arImg.eq(id).attr('data-src');
                        $img.attr('src', img_src);

                        $dots.removeClass('active').eq(id).addClass('active');
                        $dots_count.html(parseInt(id) + 1);

                        console.log(id);
                    }


            }
        },

        onFavorite: function () {
            let $btn = $('.bm-chairs-product-control-favorite');

            // Кнопка отправки
            $btn.on('click', function (e) {
                e.preventDefault();
                let $this = $(this);
                let product_id = $this.attr('data-product-id');
                let data = {};

                data.product_id = product_id;
                data.action = 'catalog_on_favorite';

                exKod.Common.ajax(data, false,
                    function(data) {
                        console.log(data);
                        // Количество
                        $('.js-side-favorite-number').html(data.count);

                        if(data.count >= 1) {
                            $('.js-side-favorite-number').addClass('active');
                        }else{
                            $('.js-side-favorite-number').removeClass('active');
                        }

                        if(data.code == 1) {
                            $this.addClass('active');
                        } else {
                            $this.removeClass('active');
                        }
                    },  function (data) {

                    }
                );
            });
        },

        onComparison: function () {
            let $btn = $('.bm-chairs-product-control-comparison');

            // Кнопка отправки
            $btn.on('click', function (e) {
                e.preventDefault();
                let $this = $(this);
                let product_id = $this.attr('data-product-id');
                let data = {};

                data.product_id = product_id;
                data.action = 'catalog_on_comparison';

                exKod.Common.ajax(data, false,
                    function(data) {
                        console.log(data);
                        // Количество
                        $('.js-side-comparison-number').html(data.count);

                        if(data.count >= 1) {
                            $('.js-side-comparison-number').addClass('active');
                        }else{
                            $('.js-side-comparison-number').removeClass('active');
                        }

                        if(data.code == 1) {
                            $this.addClass('active');
                        } else {
                            $this.removeClass('active');

                            if($this.hasClass('delete')) {
                                let $ = jQuery;
                                let id = $this.parents('.bm-chairs-product').index();

                                $('.js-catalog-products-comparison').slick('slickRemove', id);
                                $('.js-catalog-comparison-list').slick('slickRemove', id);
                                console.log(id);
                            }
                        }
                    },  function (data) {

                    }
                );
            });
        },

        onComparisonClear: function () {
            let $btn = $('.js-btn-comparison-clear');

            // Кнопка отправки
            $btn.on('click', function (e) {
                e.preventDefault();

                let data = {};

                data.action = 'catalog_on_comparison_clear';

                exKod.Common.ajax(data, false,
                    function(data) {
                        console.log(data);
                        // Количество
                        $('.js-side-comparison-number').html(data.count);

                        if(data.count >= 1) {
                            $('.js-side-comparison-number').addClass('active');
                        }else{
                            $('.js-side-comparison-number').removeClass('active');
                        }

                        // Удаляем всю активность
                        $('.bm-chairs-product-control-comparison').remove('active');

                        location.reload();

                    },  function (data) {

                    }
                );
            });
        },

        onFavoriteClear: function () {
            let $btn = $('.js-btn-favorite-clear');
            console.log('Очистка фильтра');

            // Кнопка отправки
            $btn.on('click', function (e) {
                e.preventDefault();

                let data = {};

                data.action = 'catalog_on_favorite_clear';

                exKod.Common.ajax(data, false,
                    function(data) {
                        console.log(data);
                        // Количество
                        $('.js-side-favorite-number').html(data.count);

                        if(data.count >= 1) {
                            $('.js-side-favorite-number').addClass('active');
                        }else{
                            $('.js-side-favorite-number').removeClass('active');
                        }

                        // Удаляем всю активность
                        $('.bm-chairs-product-control-favorite').remove('active');

                        location.reload();

                    },  function (data) {

                    }
                );
            });
        },

        ComparisonDifferent: function () {
            let $btn = $('.catalog-comparison-form input');
            let $block_hidden = $('.catalog-comparison-item-products-item-attr .new');

            $block_hidden.parents('.catalog-comparison-item').addClass('different');

            $.each($('.catalog-comparison-item'), function(key, value) {
                let $this = $(this);

                if(!$this.hasClass('different')) {
                    $this.addClass('none');
                }
            });

            $btn.click(function(){
                if ($(this).is(':checked')){
                    $('.catalog-comparison-item.none').hide(100);
                    $('.catalog-comparison-item.different').show(100);
                } else {
                    $('.catalog-comparison-item').show(100);
                }
            });
        },

        filterTag: function () {
            let $btn = $('.catalog-filter-tag li');

            console.log('Обновление тегов');

            // Очистить параметры отдельно фильтра

            // Кнопка отправки
            $btn.on('click', function (e) {
                e.preventDefault();
                let $this = $(this);
                let $form = $('#ajaxform');
                let slug = $this.attr('data-term_slud');
                let taxonomy  = $this.attr('data-taxonomy');

                console.log('Снимамаем активность с пункта фильтра');

                $form.find('input[type=checkbox][value=' + slug + ']').prop('checked', false);

                // Кастом
                if(taxonomy == 'pa_gruzopodemnost') {
                    $form.find('input[type=number][name=vesform]').val('');
                }


                // Получаем данные
                let data  = $form.serialize();

                exKod.Common.ajax(data, false, function(data) {
                    exKod.Catalog.filterSearchInput($('.js-filter-search'));
                    exKod.Catalog.resultCatalogList(data);
                }, function (data) {
                    // отображаем прелоадер и блокируем клик по фильтр в момент, когда он загружается
                    $('body' ).before('<div class="preloader"></div>')
                    $('.products' ).addClass('prevent-click');
                    $('.loadmore').remove();
                });


                exKod.Catalog.filterSearchUpdate();
            });
        },

        WooCoomersAddToCart:function () {
            // Кастомная фунция провекрки корзины
            $('.s-header__basket-wr').bind("DOMSubtreeModified",function(){
                console.log('Изменнения в корзине');
                if(parseInt($('.js-side-cart-number').html())  >= 1 ) {
                    $('.js-side-cart-number').addClass('active');
                }else {
                    $('.js-side-cart-number').removeClass('active');
                }
            });

        },
    },

    /** Адаптация */
    Resize: {
        init: function() {
            exKod.Resize.resize();

            $(window).resize(function () {
                exKod.Resize.resize();
            });
        },
        resize: function () {
            exKod.wight = $(window).width();
            exKod.height = $(window).height();

            if(exKod.wight <= exKod.Common.getGridSize('xl') && exKod.size !== 'xl') exKod.Resize.xl(), exKod.size = 'xl';
            if(exKod.wight <= exKod.Common.getGridSize('lg') && exKod.size !== 'lg') exKod.Resize.lg(), exKod.size = 'lg';
            if(exKod.wight <= exKod.Common.getGridSize('md') && exKod.size !== 'md') exKod.Resize.md(), exKod.size = 'md';
            if(exKod.wight <= exKod.Common.getGridSize('sm') && exKod.size !== 'sm') exKod.Resize.sm(), exKod.size = 'sm';
            if(exKod.wight <= exKod.Common.getGridSize('xs') && exKod.size !== 'xs') exKod.Resize.xs(), exKod.size = 'xs';
        }
        ,
        xl: function() {

        },
        lg: function(){
            let $ = jQuery;

            // Кнопка
            $('.js-tag li').addClass('active').removeClass('disable');
            $('.js-tag-btn').fadeOut(200);

            // Теги для мобильной версии
            $('.catalog-tag-list').slick({
                variableWidth: true,
                slidesToScroll: 3,
                swipeToSlide: true,
                swipe: true,
                arrows: false,
                infinite: true,
                fade: false,
                focusOnSelect: false,
            });
        },
        md: function() {

            if(exKod.Common.isset($('.catalog-sort'))) {
                // Зафиксировать шапку при скроле
                let header = $('.header');
                let fixed = $('.catalog-sort');
                let status = false;
                let block_stop = $('.bm-footer');

                let hederHeight = fixed.offset().top; // вычисляем растояние до блока
                let block_stop_top  = block_stop.offset().top;

                $(window).scroll(function() {
                    if($(this).scrollTop() > hederHeight + fixed.height() && $(this).scrollTop() < block_stop_top - fixed.height()) {
                        if(status == false) {
                            fixed.addClass('fixed');
                            status = true;
                        }
                    } else {
                        if(status == true) {
                            fixed.removeClass('fixed');
                            status = false;
                        }
                    }
                });
            }
        },
        sm: function () {

        },
        xs: function () {

        }
    },

    /** Помощник **/
    Common: {
        // setCookie: function (name, value, time ) {
        //     var date = new Date(new Date().getTime() + 1000*3600*24*365*10);
        //     document.cookie=name+"="+value+"; path=/; expires="+date.toUTCString()+"; domain=/";
        // },

        setCookie: function (name, value ,days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days*24*60*60*1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "")  + expires + "; path=/";
        },

        getCookie:function (name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
        },

        eraseCookie: function (name) {
            document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
        },

        ajax: function (data, url , fn, fn_before) {
            if(!url) url = exKod.ajaxPath;

            $.ajax({
                url: url,
                type: 'post',
                data: data,
                // processData: false,
                // contentType: false,
                beforeSend : function( xhr ) {
                    fn_before(xhr);
                },
                success: function(data) {
                    exKod.Common.ajaxReturn(data, fn);
                }
            });
        },

        /** Заменить url без перехода **/
        setUrl: function (curLoc){
            history.pushState(null, null, curLoc);
        },

        /** Получаем ajax результат **/
        ajaxReturn: function(data, fn) {
            // Если пришел json
            if (exKod.Common.isJson((data))) {
                //  Переводим json в массив
                data = exKod.Common.jsonToArray(data);
            }

            fn(data);
        },

        /** JSON Преабразуем в массив **/
        jsonToArray: function (data)    {
            data = $.parseJSON(data);
            data = $.makeArray(data);
            data = data[0];
            return data;
        },

        /** Проверяем число **/
        isNumber: function (n) {
            return !isNaN(parseFloat(n)) && isFinite(n);
        },

        /** Проверяем JSON **/
        isJson: function(json){
            try {
                JSON.parse(json);
            } catch (e) {
                return false;
            }
            return true;
        },

        /** Проверяем массив **/
        isArray: function(array){
            if( $.isArray(array) ){
                return true
            }else {
                return false
            }
        },

        /** Проверяем пустое ли значение */
        isEmpty: function(array){
            if(array.length < 1){
                return true
            }else {
                return false
            }
        },

        /** Конвертировать форму в json */
        convertFormToJson: function (form) {
            return $(form).serializeArray().reduce(function (json, { name, value }) {
                    json[name] = value;
                    return json;
                }, {});
        },

        /** Проверка существует ли объект */
        isset: function(element){
            if(element.length >= 1){
                return true
            }else {
                return false
            }
        },

        /** Получаем размеры экранов **/
        getGridSize: function ($size) {
            if(!this.isNumber($size)) {
                if($size === 'xl') return '1200';
                if($size === 'lg') return '992';
                if($size === 'md') return '768';
                if($size === 'sm') return '576';
                if($size === 'xs') return '360';
            }else{
                return $size;
            }
        },

        offser: function (el) {
            var rect = el,
                scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
                scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
        },
    },

    Fixed: {
        init: function() {
            let $ = jQuery;

            if(exKod.Common.isset($('.catalog-comparison-products-wrap'))) {
                // Зафиксировать шапку при скроле
                let fixed = $('.catalog-comparison-products-wrap');
                let status = false;
                let $block_hidden = false;

                let hederHeight = fixed.offset().top; // вычисляем растояние до блока
                let add      = 0;

                $(window).scroll(function() {
                    console.log($(this).scrollTop() + ' > ' + ((hederHeight + fixed.height()) + add));

                    if($(this).scrollTop() > (hederHeight + fixed.height()) + add) {
                        if(status == false) {
                            status = true;
                            fixed.after('<div class="js-fixed-block-hidden" style="height:' + fixed.height() + 'px"></div>');

                            add = fixed.height();
                            fixed.addClass('fixed');
                            $('.js-catalog-products-comparison').slick('resize');
                        }
                    } else {
                        if(status == true &&  $(this).scrollTop() < hederHeight + add) {
                            status = false;
                            fixed.removeClass('fixed');
                            $('.js-fixed-block-hidden').remove();
                            $('.js-catalog-products-comparison').slick('resize');

                            add = 0;
                        }
                    }
                });
            }
        },
    },

};

Common = {
    // Убирать активность с элемента, при клике в любую область.
    btnHover: function ($this, $block) {
        $(document).bind("mouseup touchend", function (e){
            let div = $block,
                div2 = $this;

            if (div.is(":visible") && !div.is(e.target) && div.has(e.target).length === 0 && !div2.is(e.target) && div2.has(e.target).length === 0) {

                console.log('click');
                console.log($this);
                $this.trigger('click');
            }
        });
    },

    // Меняем
    jsonToArray: function (data)    {
        data = $.parseJSON(data);
        data = $.makeArray(data);
        data = data[0];
        return data;
    },
    ajaxReturn: function(fn, data){
        // Если нет ошибки и пришел json
        if (Common.isJson((data))) {
            //  Переводим json в массив
            data = Common.jsonToArray(data);

            if (data['result'] === 'success') {
                fn.returnSuccess(data);
            } else {
                fn.returnError(data);
            }
        } else {
            console.log('Ошибка: С сервера пришел не Json !!!');
            console.log(data);
        }
    },

    // Получаем
    getGridSize: function ($size) {
        if(!this.isNumber($size)) {
            if($size === 'xl') return '1200';
            if($size === 'lg') return '992';
            if($size === 'md') return '768';
            if($size === 'sm') return '576';
            if($size === 'xs') return '360';
        }else{
            return $size;
        }
    },

    // Замена
    htmlSwap: function ($element, $to) {
        $element.detach();
        $to.append($element);
    },
    htmlDel: function($element){
        $element.remove();
    },

    // Проверки
    isNumber: function (n) {
        return !isNaN(parseFloat(n)) && isFinite(n);
    },
    isJson: function(json){
        try {
            JSON.parse(json);
        } catch (e) {
            return false;
        }
        return true;
    },
    isArray: function(array){
        if( $.isArray(array) ){
            return true
        }else {
            return false
        }
    },
    isEmpty: function(array){
        if(array.length < 1){
            return true
        }else {
            return false
        }
    },

    isset: function(element){
        if(element.length >= 1){
            return true
        }else {
            return false
        }
    },

    getTextToUp: function($value){
        return $value.split(/\s+/).map(word => word[0].toUpperCase() + word.substring(1)).join(' ');
    },

    onActive: function ($this) {
        return $this.removeClass('_default').addClass('_active');
    },
    offActive: function ($this) {
        return $this.removeClass('_active').addClass('_default');
    },

    // Активны
    switchActive: function ($this) {

        if($this.hasClass('_active')) {
            $this.removeClass('_active');
        } else {
            $this.addClass('_active');
        }




        return $this;
    },

    isSwitchActive: function ($this) {
        if($this.hasClass('is-active')){
            return false;
        } else if ($this.hasClass('is-default')){
            return true;
        } else {
            return false;
        }
    },

    // Скрол
    scrollTo: function ($this) {

        var tempElementTo = $this, // к какому блоку надо перейти
            tempElement = ($(tempElementTo).offset().top); // определяем положение блока на странице

        if (APP.isScroll === false) {
            disableScroll();
            APP.isScroll = true;



            $('html , body').animate(
                {
                    scrollTop: tempElement
                }, 1000,
                // действие по завершению анимации
                (function () {
                    APP.isScroll = false;
                    enableScroll();
                })
            ); // Скорость перехода
        }
    },
};

$(document).ready(function() {
    // Initialize library
    lozad('video.lozad', {}).observe()

    lozad('img.lozad', {
        loaded: function(el) {
            el.src = el.dataset.src;
            // el.classList.add('fadeIn');

            el.onload = function() {
                el.classList.add('fadeIn');
            };
        }
    }).observe()

    // const observer = lozad(); // lazy loads elements with default selector as '.lozad'
    // observer.observe();

    // const observer = lozad('img', {
    //     rootMargin: '10px 0px', // syntax similar to that of CSS Margin
    //     threshold: 0.1, // ratio of element convergence
    //     enableAutoReload: true // it will reload the new image when validating attributes changes
    // });
    // observer.observe();


    // var onClickToCart = false;

    // Кастамная функия запрещающая добавлять товары в корзину 2 раза
    $('body').on('click','.bm-chairs-product-price-amount a.ajax_add_to_cart', function() {
        var $this = $(this);

        console.log('Нажатие на кнопку заказа');

        if ($this.attr('data-off-btn')) {
            $this.removeClass('ajax_add_to_cart');
            console.log('Удаляем класс');
        }else{
            $this.attr('data-off-btn', 'true');
            console.log('Добавяем атрибут');
        }
    });

    /** Запускаем приложение */
    exKod.init();

});


