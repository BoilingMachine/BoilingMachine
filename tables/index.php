<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">	
  
</head>
<body>
<div class="cd-product-builder">
	<header class="main-header">
		<h1 class="configurator-title">Выбери свой Boiling Machine ONE</h1>
		
		<nav class="cd-builder-main-nav disabled">
			<ul>
				<li class="active"><a href="#models">Материал</a></li>
				<li><a href="#colors">Цвет</a></li>
				<li><a href="#accessories">Комплектующие</a></li>
				<li><a href="#summary">Заказ</a></li>
			</ul>
		</nav>

	</header>
<?php 
	$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
	require_once( $parse_uri[0] . 'wp-load.php' );	
?>
	<div class="cd-builder-steps">
		<ul>
			<li data-selection="models" class="active builder-step">
				<div class="bm-adaptive bm-margin bm">
					<section class="cd-step-content">
						<ul class="models-list options-list cd-col-2">
							<?php 

								$posts = get_posts( [
									'numberposts' => 2,
									'post_type'   => 'projects',
									'tax_query' => [
										[
											'taxonomy' => 'projectscategory',
											'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
											'terms'    => [ 645 ],
										]
									],
									'orderby'     => 'date',
									'order'       => 'ASC',
								] );										

								foreach ($posts as $key=>$post){
							?>
							<?php $price = get_post_meta( $post->ID , "price_key", true ); ?>
								<li class="js-option js-radio" data-price="<?php echo $price; ?>" data-model="product-0<?php echo $key + 1; ?>">
									<div class="table-image"><?php the_post_thumbnail('full'); ?></div>																			
									<div class="table-name"><p class="table-name-text"><?php echo the_title(); ?></p></div>
									<div class="table-price"><p class="table-price-text">от <?php echo  wc_price($price); ?></p></div>	
									<div class="radio"></div>	
								</li>						

							<?php								
								}						
							?>
						</ul>
					</section>
				</div>
			</li>
			<!-- additional content will be inserted using ajax -->
		</ul>
	</div>

	<footer class="cd-builder-footer disabled step-1">
		<div class="bm-adaptive bm-margin bm">
			<div class="footer-configurator">
				<div class="selected-product">
					<img src="img/product01_col01.jpg" alt="Product preview">

					<div class="tot-price">
						<span>Итог</span>
						<span class="total"><b>0</b> р</span>
					</div>
				</div>

				<nav class="cd-builder-secondary-nav">
					<ul>
						<li class="next nav-item">
							<ul>
								<li class="visible"><a href="#0">Выбрать цвет</a></li>
								<li><a href="#0">Комплектующие</a></li>
								<li><a href="#0">Итог</a></li>
								<li class="buy"><a href="#0">Оформить заказ</a></li>
							</ul>
						</li>
						<li class="prev nav-item">
							<ul>
								<li class="visible"><a href="#0">Models</a></li>
								<li><a href="#0">Models</a></li>
								<li><a href="#0">Colors</a></li>
								<li><a href="#0">Accessories</a></li>
							</ul>
						</li>
					</ul>
				</nav>

				<span class="alert">Сначала выберите материал стола!</span>				
			</div>
		</div>	
	</footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
	if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
</script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>