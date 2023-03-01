<div class="gifs-settings">
	

<?php 
	$gazlift = get_field('gazlift');	
	$mehanizm_kachan = get_field('mehanizm_kachaniya');
	$tip_podlokotnikov = get_field('tip_podlokotnikov');
	
	
	if( $gazlift[0] == 'Да'):
	switch($mehanizm_kachan[0]){
		case 'Топ-ган':
?>
			<div class="gif-img-name">
				<a href="#gif-gazlift" class="uncor gif-link">
					<img src="/wp-content/uploads/gaslift-locked-armrest-little.gif">
					<p class="gif-text">Регулируемая высота</p>				
				</a>										
			</div>		
		
	
<?php	
		break;
		case 'Мультиблок':			
?>
		<div class="gif-img-name">
			<a href="#gif-gazlift" class="uncor gif-link">
				<img src="/wp-content/uploads/gaslift-pro-3.gif">
				<p class="gif-text">Регулируемая высота</p>	
			</a>
		</div>		
<?php	
		break;
	}
?>	
<?php endif; ?>	
	
	
	
	
<!-- Угол наклона спинки -->	
<?php 
	$ugol_nak = get_field('ugol_naklona_spinki');
	if ($ugol_nak[0] != 'Не регулируется'):
?>
	<div class="gif-img-name">
		<a href="#ugol-naklona" class="uncor gif-link">
			<img src="/wp-content/uploads/adjustable_backrest-2.gif">
			<p class="gif-text">Регулируемая спинка</p>	
		</a>	
	</div>		
<?php	
	endif;
?>	
	
<!-- Крепление поясничной подушки -->
<?
    $podushArray = implode(", ", $podushkis);
	if ($kreplenie_poyasnichnoj_podushki and $podushArray == 'Поясничная; шейная'){
?>
	<div class="gif-img-name">
		<a href="#mechanizm-kachaniya" class="uncor gif-link">
			<?php if ( $kreplenie_poyasnichnoj_podushki[0] == "Видимое"){ ?>
				<img src="/wp-content/uploads/lumbar-cushion-large-4.gif">
			<?php }else if( $kreplenie_poyasnichnoj_podushki[0] == "Скрытое" ){ ?>
				<img src="/wp-content/uploads/podushka-nizhnyaya-kreplenie-skrytoe-peredvizhenie-2.gif">
			<? } ?>
			<p class="gif-text">Регулируемая высота подушки</p>
		</a>
	</div>
<?
	}
?>



	
<!-- Механизм качания -->	
<?php /* if ( get_field('mehanizm_kachaniya') ): ?>
	<div class="gif-img-name">
		<a href="#mechanizm-kachaniya" class="uncor gif-link">
			<img src="/wp-content/uploads/pro-rocking-funktion-2.gif">
			<p class="gif-text">Функция качания</p>		
		</a>
	</div>	
<?php endif; */?>	
	
	
<?php if ( get_field('mehanizm_kachaniya') ): ?>	
	<div class="gif-img-name">
		<a href="#mechanizm-kachaniya" class="uncor gif-link">
			<?php if ( $mehanizm_kachan[0] == "Топ-ган"){ ?>
				<img src="/wp-content/uploads/tilt-function-top-gun-locked-armrest-little.gif">
			<?php }else if( $mehanizm_kachan[0] == "Мультиблок" ){ ?>
				<img src="/wp-content/uploads/pro-rocking-funktion-2.gif">
			<? } ?>
			<p class="gif-text">Функция качания</p>		
		</a>
	</div>	
	
	
	
<?php endif; ?>		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<!-- Мультиблок -->	
<?php 
	$mehanizm_kachaniya = get_field('mehanizm_kachaniya');
	switch ($mehanizm_kachaniya[0]){
		case 'Мультиблок':
	?>
		<div class="gif-img-name">
			<a href="#multiblok" class="uncor gif-link">
				<img src="/wp-content/uploads/pro-locking-tilt-funktion-2.gif">
				<p class="gif-text">Функция блокировки наклона</p>		
			</a>
		</div>	
	<?php	
			break;
	}
?>
<!-- Регулируемая поясничная поддержка -->	
<?php
	$reguliruemaya_poyasnichnaya_podderzhka = get_field('reguliruemaya_poyasnichnaya_podderzhka');
	if($reguliruemaya_poyasnichnaya_podderzhka):
	if ($reguliruemaya_poyasnichnaya_podderzhka[0] != 'Нет'):
?>
	<div class="gif-img-name">
		<a href="#regulir-poyas" class="uncor gif-link">
<?
	switch ($reguliruemaya_poyasnichnaya_podderzhka[0]){
		case "Да":
		    echo '<img src="/wp-content/uploads/air_iskur3001.gif">';
		    break;
		case "Да; вращением ролика":
		    echo '<img src="/wp-content/uploads/poyasnichnyj-upor-komplektacziya-4d-podlokotniki-multiblok-2.gif">';
		    break;
    }
?>
			<p class="gif-text">Регулируемая поясничная поддержка</p>	
		</a>
	</div>	
<? endif; endif; ?>

<!--  -->
<?php /*
	$podushki = get_field('podushki');
	$podushki_str = implode(",", $podushki);
	switch ($podushki_str){
		case "Поясница,шея":
?>
	<div class="gif-img-name">
		<a href="#gif-podushki" class="uncor gif-link">
			<img src="/wp-content/uploads/lumbar-cushion-large-4.gif">
			<p class="gif-text">Регулируемая высота подушки</p>		
		</a>
	</div>	
<?php
			break;
	}	*/
?>	
	
	
	
<!-- -->		
<?php 
	
	switch($tip_podlokotnikov[0]){
		case '4D':
	?>
		<div class="gif-img-name">
			<a href="#gif-pod-4d" class="uncor gif-link">
				<img src="/wp-content/uploads/4d-armrest-little.gif">
				<p class="gif-text">4D подлокотник</p>	
			</a>
		</div>		
	<?php
			break;
		case '3D':
	?>
		<div class="gif-img-name">
			<a href="#gif-pod-3d" class="uncor gif-link">
				<img src="/wp-content/uploads/3d-armrest-big.gif">
				<p class="gif-text">3D подлокотник</p>	
			</a>
		</div>	
	<?php		
		break;
		case '2D':
	?>
		<div class="gif-img-name">
			<a href="#gif-pod-2d" class="uncor gif-link">
				<img src="/wp-content/uploads/2d-armrest-big.gif">
				<p class="gif-text">2D подлокотник</p>	
			</a>
		</div>	
	<?php
		break;
		case '1D':
	?>
		<div class="gif-img-name">
			<a href="#gif-pod-1d" class="uncor gif-link">
				<img src="/wp-content/uploads/1d-podlokotniki-2.gif">
				<p class="gif-text">1D подлокотник</p>	
			</a>
		</div>		
	<?php
		break;
	}
	?>
</div>
