<?php define("titleName", getName()); ?>
<? define('postID', get_the_ID() ); ?>
<?php
    $post_object = get_field('kontent');
    if($post_object != null){
        $post = $post_object;
?>
<? if ( have_rows('preimushhestva_kresla') and have_rows('nedostatki_kresla') ){  ?>
<section id='important'>
    <div class='important-container'>
        <div class='tab-container-head'>
            <h2 class='tab-container-head__title'>Важное</h2>
        </div>

        <div class='important-plus-minus-container'>
            <div class='plus-minus-container'>
                <p class='plus-minus-title plus'>Плюсы</p>

                 <ul class='plus-minus-spisok'>
                    <?php
                    if( have_rows('preimushhestva_kresla') ):
                        $idx = 1;
                        while ( have_rows('preimushhestva_kresla') ) : the_row();
                    ?>
                        <li><span><? echo $idx; ?></span><? the_sub_field('preimushhestva_kresla_spisok');  ?></li>
                    <?
                        $idx++;
                        endwhile;
                    endif;
                    ?>
                 </ul>
            </div>
            <div class='plus-minus-container-line'></div>
            <div class='plus-minus-container'>
            <p class='plus-minus-title minus'>Минусы</p>
                 <ul class='plus-minus-spisok'>
                    <?php
                    if( have_rows('nedostatki_kresla') ):
                        $idx = 1;
                        while ( have_rows('nedostatki_kresla') ) : the_row();
                    ?>
                        <li><span><? echo $idx; ?></span><? the_sub_field('nedostatki_kresla_spisok');  ?></li>
                    <?
                        $idx++;
                        endwhile;
                    endif;
                    ?>
                 </ul>
             </div>
             <div class='plus-minus-container-line mobile_display'></div>
             <div class='more-information'>
                <p class='more-information-title'>Больше информации о кресле в наших обзорах</p>
                <div class='more-information-links'>
                    <? if(get_field('videoobzor', postID)): ?>
                    <div class='information-link'>
                        <a href='#modal-videoobzor-important' uk-toggle class='more-link red'>Видеообзор</a>
                        <? if(get_field('dlitelnost_video_fra', postID)): ?>
                        <p class='more-text'>Время просмотра<br><span><? the_field('dlitelnost_video_fra', postID); ?></span></p>
                        <? endif; ?>
                    </div>
                    <? endif; ?>
                    <div class='information-link'>
                        <a href='#modal-text-obzor' uk-toggle class='more-link white'>Текстовый обзор</a>
                        <p class='more-text'>Время прочтения около<br><span class="time_read"></span></p>
                    </div>
                </div>
             </div>
        </div>
<? } ?>


<div id="modal-videoobzor-important" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-margin-auto-vertical modal-videoobzor">
        <button class="modal-videoobzor-close-button uk-modal-close-outside" type="button" uk-close></button>
        <div class="modal-videoobzor-con">
            <div class="modal-videoobzor-container">
                <iframe width="100%" height="100%" src="<?php the_field('videoobzor', postID); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<div id="modal-text-obzor" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-margin-auto-vertical modal-textobzor">
        <button class="modal-videoobzor-close-button uk-modal-close-outside" type="button" uk-close></button>
        <div class="modal-videoobzor-con">

            <div class="modal-textobzor-container">
                <div class="tab-container-head" id="obzor">
                    <h2 class="tab-container-head__title">
                        <?php the_title(); ?>
                    </h2>
                </div>
                <?
                    setup_postdata( $post );
                    $obzor = apply_filters('the_content', $post->post_content);
                    echo $obzor;
                ?>
            </div>
        </div>
    </div>
</div>


<? wp_reset_postdata();	 ?>
    </div>


</section>

<? } ?>


<?
function getName(){
    if ( get_field('marka') && get_field('seriya') ){
        $marka = get_field('marka');
        $seriya = get_field('seriya');
        return $marka[0] . ' ' . $seriya[0];
    }else{
        return '- ' . get_the_title();
    }
}




?>

<style>
    .modal-textobzor-container .tab-container-head__title{text-align: left !important;}
    @media screen and (max-width: 576px){
        #important{
            margin-top: 30px;
        }
        .more-information-title{font-size: 16px !important;}
        .plus-minus-spisok{font-size: 16px !important;}
        .more-information-title{font-size: 18px;}
        .more-information-links{flex-direction: column; align-items: center; grid-gap: 0px !important;}
         .modal-textobzor{
             width: 1150px;
             height: 80%;
         }
         .modal-textobzor-container{padding: 0 20px 20px 20px !important;}
         .more-link{font-size: 14px !important;}
    }
    @media screen and (min-width: 576px) and (max-width: 992px){
        #important{
            margin-top: 30px;
        }
         .modal-textobzor{
             width: 1150px;
             height: 80%;
         }
          .modal-textobzor-container{padding: 30px 40px !important;}
    }
    @media screen and (min-width: 992px) and (max-width: 1200px){
         .modal-textobzor{
             width: 1150px;
             height: 80%;
         }
         .modal-textobzor-container{padding: 45px 80px !important;}
    }
    .modal-textobzor-container::-webkit-scrollbar-thumb{
        height: 50px;
        background-color: #d6dade;
        border-radius: 3px;
    }
    .modal-textobzor-container::-webkit-scrollbar{
        width: 6px;
    }
    .modal-textobzor-container::-webkit-scrollbar-track-piece{
        background-color: #fff;
    }
    .modal-textobzor-container{
        position: relative;
        height: 100%;
        overflow: auto;
        padding: 45px 120px;
    }
    .modal-textobzor{
        width: 1150px;
        height: 1000px;
        border-radius: 20px 0px 0px 20px;
    }
    .modal-videoobzor{
        border-radius: 20px 0px 0px 20px;
    }
    .more-text{
        font-style: normal;
        font-weight: 500;
        font-size: 14px;
        line-height: 140%;
        text-align: center;
        color: #686868;
        margin: 0;
    }
    .more-link:hover{
        transition: .3s;
        background: #ef2525 !important;
        text-decoration: none;
        color: #fff;
    }
    .more-link.white{
        background: #fff;
    }
    .more-link.red{
        background: #FFE3E3;
    }
    .more-link{
        transition: .3s;
        border-radius: 10px;
        padding: 16px 25px 18px 25px;
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 140%;
        color: #EF2525;
        display: block;
        width: fit-content;
        margin: 0;
        margin-bottom: 12px;
    }
    .more-information-links{
        display: flex;
        grid-gap: 30px;
        justify-content: center;
    }
    .more-information-title{
        font-style: normal;
        font-weight: 400;
        font-size: 20px;
        line-height: 150%;
        text-align: center;
        color: #000000;
        margin: 0;
        margin-bottom: 30px;
    }
    .more-information{
        background: #F5F5F5;
        border-radius: 10px;
        padding: 30px;
        margin-top: 40px;
    }
    .plus-minus-container-line{
        background: #EEEEEE;
        width: 100%;
        height: 1px;
        margin: 30px 0;
    }
    .important-plus-minus-container{
        border: 1px solid #EEEEEE;
        border-radius: 10px;
        padding: 30px;
    }
    .important-container{
        max-width: 1080px;
        margin: 0 auto;
    }
    .plus-minus-spisok{
        margin: 0;
        padding: 0;
        list-style-type: none;
        font-style: normal;
        font-weight: 400;
        font-size: 20px;
        line-height: 160%;
        color: #181818;
    }
    .plus-minus-spisok li{
        margin-bottom: 20px;
        display: flex;
    }
    .plus-minus-title{
        font-style: normal;
        font-weight: 500;
        font-size: 24px;
        line-height: 1;
        color: #353535;
        margin: 0;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
    }
    .plus-minus-title.plus::before{
        content: '+';
        font-style: normal;
        font-weight: 600;
        font-size: 20px;
        line-height: 1;
        color: #60BB49;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 30px;
        width: 30px;
        background: #EBFFE3;
        border-radius: 100px;
        margin-right: 20px;
    }
    .plus-minus-title.minus::before{
        content: '-';
        font-style: normal;
        font-weight: 600;
        font-size: 20px;
        line-height: 1;
        color: #EF2525;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 30px;
        width: 30px;
        background: #FFEDED;
        border-radius: 100px;
        margin-right: 20px;
    }
    .plus-minus-spisok li span{margin-right: 30px;}
    .plus-minus-spisok li:last-child{margin-bottom: 0;}
</style>