<?php


add_filter( 'woocommerce_package_rates', 'truemisha_remove_all_shippings', 10, 2 );
 
function truemisha_remove_all_shippings( $rates, $package ) {
 
	$new_rates = array();
 
	// в цикле чекаем, если среди доставок есть бесплатная
	foreach ( $rates as $rate_id => $rate ) {
		if ( 'flat_rate:14' === $rate->method_id ) {
			$new_rates[ $rate_id ] = $rate;
			break; // бесплатную доставку нашли, выходим из цикла
		}
	}
 
	return ! empty( $new_rates ) ? $new_rates : $rates;
 
}

?>