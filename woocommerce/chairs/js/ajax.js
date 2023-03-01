$('div[data-taxonomy="pa_czvet"]').find(".bapf_show_hide").text('Показать все цвета').attr('data-show','Показать все цвета').attr('data-hide','Скрыть цвета');
$(function(){

    $(".bm-filter-chairs-mobile").click(function(){
        $(".bm-product-arvhive-container-sidebar").css("display","block");
    });
    $(".bm-chair-mobile-close").click(function(){
        $(".bm-product-arvhive-container-sidebar").css("display","none");
    });

    $(document).on('click','.bm-chairs-sidebar-button .bapf_button', function(){
        $(".bm-product-arvhive-container-sidebar").css("display","none");
    });

    $(window).on('beforeunload', function(){
        alert("ok");
    });

    /*
    range = $('.range-slider-con > .input-range');
    value = $('.range-slider-con > .range-value');
   */

    let range = $('.input-range');
    let value = $('.range-value');

    //value.val(range.attr('value'));


    range.on('input', function(){
        let monparent=$(this).parent().parent();
        console.log("Parent" + monparent)
        //monparent=this.parentNode;

        value=$(monparent).find('.range-value');
        // Удаляем пробелы replace(/ /g,'')
        $(value).val(this.value);
    });

    value.on('input', function(){
        let monparent=$(this).parent().parent();
        range=$(monparent).find('.input-range');
        // Удаляем пробелы replace(/ /g,'')
        $(range).val(this.value);

    });

    // Пагинация

    $(document).on('click', '.load-more-link', function(event) {

        let form = $('#ajaxform');
        let pagenumber = $('#ajaxloadmore').attr('page-now');
        let maxpage = $('#ajaxloadmore').attr('max-page');

        let values = convertFormToJSON(form);
        values.pagenum = pagenumber;
        values.maxpage = maxpage;
        values.action = 'ajaxloadmore';

        $.ajax( {
            type : 'POST',
            url : woocommerce_params.ajax_url,
            data : values,
            beforeSend : function( xhr ) {
                // отображаем прелоадер и блокируем клик по фильтр в момент, когда он загружается
                $( 'body' ).before('<div class="preloader"></div>')
                $( '.products' ).addClass('prevent-click');
                $('.loadmore').remove();
            },
            success : function( data ) {
                // выводим отфильтрованные товары
                $( '.products' ).append( data.products );
                //$( '.main-chair-categories-title__text' ).append( data.count );
                $( '.products' ).removeClass('prevent-click');
                $('.preloader').remove();

            }

        } );



    });
    
    
});

$(function (){

    $('.watch-more').click(function (){
        let el = $(this);

        let close = el.attr('attr-close');
        let open = el.attr('attr-open');
        let $search = el.parents('.single-filter').find('.single-filter-search');
        let $list = el.parents('.single-filter').find('.filter-list');

        if(el.hasClass('active')){
            el.removeClass('active');
            // el.siblings('.filter-list').css({'max-height': '240px', 'overflow': 'hidden'});
            el.text(open);
            $search.removeClass('active');
            $list.removeClass('active');
        }else{
            el.addClass('active');
            // el.siblings('.filter-list').css({'max-height': 'inherit', 'overflow': 'auto'});
            el.text(close);
            $search.addClass('active');
            $list.addClass('active');
        };

        var contactTopPosition = $list.find('li').eq(0).position().top;
        $list.animate({scrollTop: 0});

        console.log($list.find('li').eq(0));
    })










    // Опции сортировки товаров
    $('.product-filter-sort').click(function () {
        event.preventDefault();
       const el = $(this);

       if(el.hasClass('active')){
           el.removeClass('active');
           $( 'input[name="orderby"]' ).val( 'none' );
       }else{
           $('.product-filter-sort').removeClass('active');
           el.addClass('active');
           let val = el.attr('sort-attr');
           $( 'input[name="orderby"]' ).val( val );
       }
        $('#ajaxform').submit();
        event.preventDefault();
    });

    $('#filterform').submit(function (event){
        event.preventDefault();

        const form = $(this);
        let values = convertFormToJSON(form);
        console.log(values);
        $( 'input[name="rostform"]' ).val( values.rost );
        $( 'input[name="vesform"]' ).val( values.ves );
        $( 'input[name="materialform"]' ).val( values.material );

        $('#ajaxform').submit();
        event.preventDefault();
    });


    // асинхронный запрос при отправке формы
    $( '#ajaxform' ).submit( function( event ) {
        event.preventDefault();
        const form = $(this);

        // Сбрасываем пагинацию
        form.find('input[name=page]').val(1);
        exKod.Common.setUrl(form.find('input[name=url]').val());
        //

        $.ajax( {
            type : 'POST',
            url : woocommerce_params.ajax_url,
            data : form.serialize(),
            beforeSend : function( xhr ) {
                // отображаем прелоадер и блокируем клик по фильтр в момент, когда он загружается
                $( 'body' ).before('<div class="preloader"></div>')
                $( '.products' ).addClass('prevent-click');
            },
            success : function( data ) {
                // выводим отфильтрованные товары
                $( '.products' ).html( data.products );
                // выводим счётчик количества товаров

                
                $( '.products' ).removeClass('prevent-click');
                $('.preloader').remove();


                exKod.Catalog.onFavorite();
                exKod.Catalog.onComparison();
                exKod.Catalog.pagination();
                exKod.Catalog.filterTag();
                exKod.Catalog.filterCount();
                exKod.Catalog.filterClear();
                exKod.Catalog.img();
                exKod.Catalog.filterSearchInput($('.js-filter-search'));
            }

        } );

    } );

    // отправляем форму при клике на чекбоксы также
    $( '#ajaxform input[type="checkbox"]' ).change( function() {
        $( '#ajaxform' ).submit();
    } );

    // отправляем форму при клике на чекбоксы также
    $( '#ajaxform input[type="range"]' ).change( function() {
        $( '#ajaxform' ).submit();
    } );

    $( '#ajaxform input[type="number"]' ).change( function() {
        $( '#ajaxform' ).submit();
    } );



});




(function() {
    const parent = document.querySelector('.range-slider');

    if (!parent) {
        return;
    }

    const   rangeS  = parent.querySelectorAll('input[type="range"]'),
            numberS = parent.querySelectorAll('input[type="number"]');

    rangeS.forEach((el) => {
        el.oninput = () => {
            let slide1 = parseFloat(rangeS[0].value),
                slide2 = parseFloat(rangeS[1].value);

            if (slide1 > slide2) {
                [slide1, slide2] = [slide2, slide1];
            }

            // numberS[0].value = slide1;
            // numberS[1].value = slide2;

            numberS[0].value = '';
            numberS[1].value = '';

            $(numberS[0]).attr("placeholder", prettify(slide1));
            $(numberS[1]).attr("placeholder", prettify(slide2));

        }
    });

    numberS.forEach((el) => {
        el.oninput = () => {

            // Удаляем пробеды .replace(/ /g,'')
            let number1 = parseFloat(numberS[0].value),
                number2 = parseFloat(numberS[1].value);

            // Если значение пусто то берем самое большое значение
            if(!number1) number1 = $(numberS[0]).attr("min");
            if(!number2) number2 = $(numberS[1]).attr("max");

            console.log(number1 + ' -- ' + number2);

            // if (number1 > number2) {
            //     let tmp = number1;
            //     // numberS[0].value = number2;
            //     // numberS[1].value = tmp;
            //
            //     numberS[0].value = prettify(number2);
            //     numberS[1].value = prettify(tmp);
            //
            //     console.log(number2 + ' -- ' + tmp);
            // }



            $(rangeS[0]).val(number1);
            $(rangeS[1]).val(number2);

            // $(rangeS[0]).attr("value", number1);
            // $(rangeS[1]).attr("value", number2);

            console.log(rangeS[0]);
        }
    });
})();


function prettify (num) {
    var n = num.toString();
    var separator = " ";
    return n.replace(/(\d{1,3}(?=(?:\d\d\d)+(?!\d)))/g, "$1" + separator);
}


function convertFormToJSON(form) {
    return $(form)
        .serializeArray()
        .reduce(function (json, { name, value }) {
            json[name] = value;
            return json;
        }, {});
}