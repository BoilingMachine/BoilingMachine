<? get_header(); ?>
<link rel="stylesheet"  href="/wp-content/themes/boiling_machine/woocommerce/chairs/css/chairs.css" media="all">
<link rel="stylesheet"  href="/wp-content/themes/boiling_machine/woocommerce/chairs/css/chairs-new.css" media="all">
<script src="https://unpkg.com/vue@3"></script>

<div class="bm-computer-landing_header">
	<div class="bm-adaptive bm-margin bm">
		<div class="bm-computer-landing-header">
            <div class="bm-computer-landing-header-breadcrumb">
                <?php woocommerce_breadcrumb( ); ?>
            </div>
        </div>
        <div class="bm-computer-landing-header-mobile">
                <?php woocommerce_breadcrumb( ); ?>
        </div>
    </div>
</div>

<section class='nav-kresla-tabs'>
    <div class="mywoo-computers-tabs">
        <ul class="nav nav-pills">
            <li><a class="mywoo-nav-link-kresl " href="/o-kreslah/">Статьи</a></li>
            <li class="active"><a href="/o-kreslah/kresla-obzory" class="mywoo-nav-link-kresl active">Обзоры</a></li>
          </ul>
    </div>
</section>

<section>
    <div class="bm-adaptive bm-margin bm">
        <div class='bm-kresla-container' id="app">
<?php
$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
$params = array(
    'posts_per_page' => 12, // количество постов на странице
    'cat'       => '854',
    'paged'           => $current_page // текущая страница
);
query_posts($params);

$wp_query->is_archive = true;
$wp_query->is_home = false;

while(have_posts()): the_post();
?>
            <div class='bm-post-kreslo'>
                <div v-if="window.width > 1200"  class='bm-post-kresl-preview' style="background: url(<?php echo get_the_post_thumbnail_url(); ?>); background-position: center; background-size: cover;">
                    <a href="<?php echo get_permalink(); ?>" class="uk-position-cover"></a>
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="post-mobile-preview">
                </div>
                <div class='bm-post-kresl-content'>
                    <div class='bm-post-kresl-title'>
                        <a href="<?php echo get_permalink(); ?>" class="kresl__title-text"><p><?php the_title(); ?></p></a>
                    </div>
                    <div v-if="window.width <= 1200" class='bm-post-kresl-title-img'>
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="post-mobile-preview">
                    </div>
                    <div class='bm-post-kresl-desc'>
                        <a href="<?php echo get_permalink(); ?>" class="kresl__desc-title"><?php the_excerpt(); ?></a>
                    </div>
                    <div class='bm-post-kresl-meta'>
                        <p class="kresl-meta-date__text"><?php the_date(); ?></p>
                    </div>
                </div>
            </div>
<? endwhile; ?>
<?php the_posts_pagination(); ?>
        </div>
    </div>
</section>



<script>
  const { createApp } = Vue

  createApp({
    data() {
      return {
        window: {
            width: 0,
            height: 0
        }
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

<? get_footer(); ?>