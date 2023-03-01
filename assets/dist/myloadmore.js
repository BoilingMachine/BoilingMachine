jQuery(function($){ // use jQuery code inside this to avoid "$ is not defined" error
    $('.misha_loadmore').click(function(){

        var button = $(this);
		
        var values = {
            'action': 'loadmore_products',
            'query': misha_loadmore_params.posts,
            'page' : misha_loadmore_params.current_page
        };
		
		
        $.ajax({
            url : misha_loadmore_params.ajaxurl,
            data : values,
            type : 'POST',
            beforeSend : function ( xhr ) {
                button.text('Загрузка...');
            },
            success : function( data ){
                if( data ) {
                    $( '.products' ).append( data.products );
                    misha_loadmore_params.current_page++;
                    button.text('Показать еще 12');

                    if ( misha_loadmore_params.current_page == misha_loadmore_params.max_page )
                        button.remove();
                } else {
                    button.remove();
                }
            }
        });


    });
});