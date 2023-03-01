<?php 
	$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
	require_once( $parse_uri[0] . 'wp-load.php' );	
?>

<?php require get_template_directory() . '/tables/steps/step-2.php'; ?>
<?php require get_template_directory() . '/tables/steps/step-3.php'; ?>


<li data-selection="summary" class="builder-step first-load">
	<section class="cd-step-content">
		<header>
			<h1>Summary</h1>
			<span class="steps-indicator">Step <b>4</b> of 4</span>
		</header>
		
		<ul class="summary-list">
			<li>
				<h2>Model</h2>

				<img src="img/product02_col01.jpg" alt="Alfa Romeo Giulietta" class="product-preview">
				
				<h3>BMW i8</h3>
				
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit saepe facilis hic, unde, numquam vel. Blanditiis sed laboriosam ratione nulla atque molestias at explicabo aperiam reprehenderit culpa nihil, quis totam cupiditate dolores in quisquam magnam inventore nobis, rem adipisci eveniet illum.	
				</p>
			</li>

			<li data-summary="colors">
				<h2>Color</h2>
				
				<span class="summary-color">
					<em class="color-swatch" data-color="red"></em>
					<em class="color-label">Red Passion</em>
				</span>
			</li>

			<li data-summary="accessories">
				<h2>Accessories</h2>

				<ul class="summary-accessories">
					<li>
						<p>Uconnect 6.5" colour touchscreen radio navigation sytem with Bluetooth &amp; DAB ($1050)</p>
					</li>

					<li>
						<p>Audio &amp; telephone controls on steering wheels ($750)</p>
					</li>
				</ul>
			</li>
		</ul>
	</section>
</li>