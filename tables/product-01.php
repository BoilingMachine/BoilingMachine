<?php 
	$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
	require_once( $parse_uri[0] . 'wp-load.php' );	
?>
<?php require get_template_directory() . '/tables/steps/step-2.php'; ?>
<?php require get_template_directory() . '/tables/steps/step-3.php'; ?>
<?php require get_template_directory() . '/tables/steps/step-4.php'; ?>

