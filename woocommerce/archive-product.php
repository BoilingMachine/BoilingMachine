<?php 
$product_cat 			= get_queried_object();
$product_cat->page_tag 	= get_field('page_tag', $product_cat->taxonomy . '_' .$product_cat->term_id);

if($product_cat->page_tag) {
	get_template_part( 'woocommerce/chairs/chairs-subcategory' );
} else {
	switch($product_cat->slug){
		case "kompyutery":
			get_template_part( 'woocommerce/archive-product-landing-comp' );
			break;
		case "aksesuary":
			get_template_part( 'woocommerce/taxonomy-product_cat-peref' );
			break;
		case is_search():
			get_template_part( 'woocommerce/archive-product-com-search' );
			break;
		case "powered-by-asus":
			get_template_part( 'woocommerce/computers-templates/powered-by-asus' );
			break;
		case "mesh":
			get_template_part( 'woocommerce/archive-product-landing-comp' );
			break;
		case "nucmachine":
			get_template_part( 'woocommerce/archive-product-landing-comp' );
			break;
		case "rmachine":
			get_template_part( 'woocommerce/archive-product-landing-comp' );
			break;
		case "frost":
			get_template_part( 'woocommerce/archive-product-landing-comp' );
			break;
		case "shuttle":
			get_template_part( 'woocommerce/archive-product-landing-comp' );
			break;
		case "quartz":
			get_template_part( 'woocommerce/archive-product-landing-comp' );
			break;
		case "atom-computers":
			get_template_part( 'woocommerce/archive-product-landing-computers' );
			break;
		case "pba-intel-gamer-days":
			get_template_part( 'woocommerce/computers-templates/pba-intel' );
			break;
		case "line":
			get_template_part( 'woocommerce/archive-product-landing-computers-line' );
			break;
		case "t-machine":
			get_template_part( 'woocommerce/archive-product-landing-computers-tmachine' );
			break;
		/*	
		case "grpzdc":
			get_template_part( 'woocommerce/collab/grpzdc' );
			break;
		*/	
		case "dosia":
			get_template_part( 'woocommerce/collab/dosia' );
			break;
		case "kritos":
			get_template_part( 'woocommerce/collab/kritos' );
			break;
		case "igrovye-kresla":
			get_template_part( 'woocommerce/chairs/chairs-category' );
			break;
		case "dxracer":
		case "arozzi":
		case "asus":
		case "razer":
		case "cougar":
		case "eureka-ergonomic":
		case "karnox":
			get_template_part( 'woocommerce/chairs/chairs-subcategory' );
			break;	
		case "assassin":
		case "commander":
		case "legend":
		case "argo":
		case "argo-one":
		case "armor":
		case "armor-air":
		case "armor-one":
		case "armor-s":
		case "armor-titan":
		case "explore":
		case "explore-s":
		case "fusion":
		case "neon":
		case "outrider":
		case "outrider-s":
		case "rampart":
		case "ranger":
		case "terminator":
		case "throne":
		case "d-master":
		case "air":
		case "primo-full-premium-leather":
		case "primo-pu":
		case "torretta-xl":
		case "vernazza-vento":
		case "verona-pro-startrek-edition":
		case "enki":
		case "iskur":
		case "peak":
		case "craft":
		case "valkyrie":
		case "enzo":
		case "enzo-woven-fabric":
		case "inizio-fabric":
		case "inizio-pu":
		case "mezzo-v2":
		case "mezzo-v2-fabric":
		case "milano":
		case "monza":
		case "primo-woven-fabric":
		case "torretta":
		case "torretta-soft-fabric":
		case "vernazza":
		case "vernazza-soft-fabric":
		case "verona-junior":
		case "verona-pro-v2":
		case "verona-signature-pu":
		case "verona-signature-soft-fabric":
		case "verona-v2":
		case "verona-xl":
		case "chariot":
		case "air":
		case "drifting":
		case "formula":
		case "iron":
		case "king":
		case "master":
		case "racing":
		case "series":
		case "general":
		case "hector":
		case "norn":
		case "python-ii":
		case "typhon":
			get_template_part( 'woocommerce/chairs/chairs-thirdsubcategory' );
			break;
		default:
			get_template_part( 'woocommerce/archive-product-com' );
			break;
	}
}










?>

