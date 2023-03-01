<?php
/*
if( has_term( 'kompyutery', 'product_cat' ) && has_term('intel-core-11th', 'product_cat' )){
	get_template_part( 'woocommerce/single-product-computers-intel' );
}else if( has_term( 'igrovye-kresla', 'product_cat' )  ){
	get_template_part( 'woocommerce/single-product-chairs');
}else if( has_term( 'kompyutery', 'product_cat' ) || has_term('frost-nova', 'product_cat' ) || has_term( 'boiling-season-pass-1', 'product_cat' ) || has_term( 'powered-by-asus', 'product_cat' ) || has_term( 'mini', 'product_cat' ) || has_term( 'ultimate', 'product_cat' ) ) {
    get_template_part( 'woocommerce/single-product-computers' );
}else{
	if (has_term( 'videokarty', 'product_cat' )) {
		get_template_part( 'woocommerce/single-product-us-videokarta' );
	}else if ( (has_term( 'hyperx', 'product_cat' ) && has_term( 'audio', 'product_cat' )) || ( has_term( 'hyperx-klaviatury', 'product_cat' ) ) || ( has_term( 'hyperx-myshki', 'product_cat' ) ) || ( has_term( 'hyperx-oborudovanie-dlya-strima', 'product_cat' ) ) ) {
		get_template_part( 'woocommerce/single-product-us-hyperx' );
	}else{
		get_template_part( 'woocommerce/single-product-us' );
	}
	
}
*/

if( has_term( 'kompyutery', 'product_cat' ) && has_term('intel-core-11th', 'product_cat' )){
	get_template_part( 'woocommerce/single-product-computers-intel' );
}else if( has_term( 'igrovye-kresla', 'product_cat' )){
	get_template_part( 'woocommerce/single-product-chairs');
}else if( has_term( 'kompyutery', 'product_cat' ) ){
	//get_template_part('woocommerce/computers-templates/single-templates/single-template');
	get_template_part('woocommerce/single-product-computers');
}else if( has_term( 'videokarty', 'product_cat') ){
	get_template_part( 'woocommerce/single-product-us-videokarta' );
}else if(has_term( 'hyperx', 'product_cat' )){
	get_template_part( 'woocommerce/single-product-us-hyperx' );
}else if(has_term( 'komplektuyushhie', 'product_cat' ) && has_term( 'videokarty-komplektuyushhie', 'product_cat' )){
	get_template_part( 'woocommerce/computers-templates/complects-single/videocard-single' );
}else if(has_term( 'komplektuyushhie', 'product_cat' ) && has_term( 'proczessory', 'product_cat' )){
	get_template_part( 'woocommerce/computers-templates/complects-single/processor-single' );
}else if(has_term( 'komplektuyushhie', 'product_cat' ) && has_term( 'ssd-nakopiteli', 'product_cat' )){
	get_template_part( 'woocommerce/computers-templates/complects-single/ssd-single' );
}else if(has_term( 'komplektuyushhie', 'product_cat' ) && has_term( 'bloki-pitaniya', 'product_cat' )){
	get_template_part( 'woocommerce/computers-templates/complects-single/bp-single' );
}else if(has_term( 'komplektuyushhie', 'product_cat' ) && has_term( 'zhestkij-disk', 'product_cat' )){
	get_template_part( 'woocommerce/computers-templates/complects-single/zd-single' );
}else if(has_term( 'komplektuyushhie', 'product_cat' ) && has_term( 'korpusa', 'product_cat' )){
	get_template_part( 'woocommerce/computers-templates/complects-single/korpusa-single' );
}else if(has_term( 'komplektuyushhie', 'product_cat' ) && has_term( 'materinskie-platy', 'product_cat' )){
	get_template_part( 'woocommerce/computers-templates/complects-single/motherboard-single' );
}else if(has_term( 'komplektuyushhie', 'product_cat' ) && has_term( 'operativnaya-pamyat', 'product_cat' )){
	get_template_part( 'woocommerce/computers-templates/complects-single/opera-single' );
}else{
	get_template_part( 'woocommerce/single-product-us' );
}




?>

