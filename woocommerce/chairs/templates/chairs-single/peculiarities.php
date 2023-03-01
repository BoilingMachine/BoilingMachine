<div class="chair-review">
	<div class="tab-container-head" id="osobennosti">
		<h2 class="tab-container-head__title">
			Особенности
		</h2>
	</div>
	<div class="chair-review-container">		
	<?php /* if ( get_field('gazlift') ): ?>
		<div class="gif-chair-review">
			<img src="/wp-content/uploads/gaslift-pro-large-1.gif">
			<p class="gif-text">Регулируемая высота</p>		
			<p class="gif-opisanie">Отрегулировать высоту посадки можно при помощи специальной ручки справа под сиденьем. Выберите идеальную позицию и расположитесь в кресле с максимальным удобством.</p>		
			<a href="/o-kreslah/stati-o-kreslah/vysota-sidenya-kresla/" target="_blank" class="gif-more">Подробнее</a>
		</div>			
	<?php endif; */ ?>

<!-- -->		
<?php 
	$pec_gazlift = get_field('gazlift');	
	$pec_mehanizm_kachan = get_field('mehanizm_kachaniya');
	$tip_podlokotnikov = get_field('tip_podlokotnikov');
	
	if( $pec_gazlift[0] == 'Да'):
	switch($pec_mehanizm_kachan[0]){
		case 'Топ-ган':
?>		
			<div class="gif-chair-review" id="gif-gazlift">
				<img src="/wp-content/uploads/gaslift-locked-armrest-big.gif">
				<p class="gif-text">Регулируемая высота</p>		
				<p class="gif-opisanie">Отрегулировать высоту посадки можно при помощи специальной ручки справа под сиденьем. Выберите идеальную позицию и расположитесь в кресле с максимальным удобством.</p>		
				<a href="/o-kreslah/stati-o-kreslah/vysota-sidenya-kresla/" target="_blank" class="gif-more">Подробнее</a>
			</div>				
<?php	
		break;
		case 'Мультиблок':			
?>
		<div class="gif-chair-review" id="gif-gazlift">
			<img src="/wp-content/uploads/gaslift-pro-3.gif">
			<p class="gif-text">Регулируемая высота</p>		
			<p class="gif-opisanie">Отрегулировать высоту посадки можно при помощи специальной ручки справа под сиденьем. Выберите идеальную позицию и расположитесь в кресле с максимальным удобством.</p>		
			<a href="/o-kreslah/stati-o-kreslah/vysota-sidenya-kresla/" target="_blank" class="gif-more">Подробнее</a>
		</div>	
<?php	
		break;
	}
?>	
<?php endif; ?>	
		
		

	
		
		
<!-- Уго наклона спинки -->		
<?php 
	$pec_ugol_nak = get_field('ugol_naklona_spinki');
	if ($pec_ugol_nak[0] != 'Не регулируется'):
?>
		<div class="gif-chair-review" id="ugol-naklona">
			<img src="/wp-content/uploads/adjustable_backrest-3.gif">
			<p class="gif-text">Регулируемая спинка</p>		
			<p class="gif-opisanie">Потяните на себя рычаг с правой стороны сиденья, и вы сможете не просто откинуть спинку, но и зафиксировать ее в нужном положении. Найдите правильный угол наклона спинки, чтобы отдохнуть, не отходя от рабочего места. </p>			
			<a href="/o-kreslah/stati-o-kreslah/regulirovka-naklona-spinki/" class="gif-more" target="_blank">Подробнее</a>
		</div>		
<?php	
	endif;
?>			
	
		
		
<?php if ( $pec_mehanizm_kachan[0] == 'Топ-ган' && $tip_podlokotnikov[0] == 'Зафиксированы' ){ ?>
		<div class="gif-chair-review" id="mechanizm-kachaniya">
			<img src="/wp-content/uploads/tilt-finction-top-gun-locked-armrest-big.gif">			
			<p class="gif-text">Функция качания</p>		
			<p class="gif-opisanie">Активируйте механизм качания справа под сиденьем и получите возможность раскачиваться в кресле с амплитудой в 12°. Специальная ручка поможет установить желаемое сопротивление при раскачивании. </p>
			<a href="/o-kreslah/stati-o-kreslah/funkcziya-kachaniya-kresla/" class="gif-more" target="_blank">Подробнее</a>
		</div>	
<? }else{ ?>	
		
	<?php if ( get_field('mehanizm_kachaniya') ): ?>
		<div class="gif-chair-review" id="mechanizm-kachaniya">
			
			<?php 
				switch ($pec_mehanizm_kachan[0]){
					case 'Топ-ган':			
			?>
						<img src="/wp-content/uploads/tilt-finction-top-gun-locked-armrest-big.gif">
						<p class="gif-text">Функция качания</p>
						<p class="gif-opisanie">Активируйте механизм качания справа под сиденьем и получите возможность раскачиваться в кресле с амплитудой в 12°. Специальная ручка поможет установить желаемое сопротивление при раскачивании. </p>
			<?php
					break;
					case 'Мультиблок':
			?>
						<img src="/wp-content/uploads/pro-rocking-funktion-3.gif">
						<p class="gif-text">Функция качания</p>
						<p class="gif-opisanie">Активируйте механизм качания слева под сиденьем и получите возможность раскачиваться в кресле с амплитудой в 12°. Специальная ручка поможет установить желаемое сопротивление при раскачивании. </p>
			<?php
					break;
				}
			?>
			<a href="/o-kreslah/stati-o-kreslah/funkcziya-kachaniya-kresla/" class="gif-more" target="_blank">Подробнее</a>
		</div>		
	<?php endif; ?>	
<? } ?>		
		
		
		
		
<!-- -->		
<?php 
	$reguliruemaya_poyasnichnaya_podderzhka = get_field('reguliruemaya_poyasnichnaya_podderzhka');
	if($reguliruemaya_poyasnichnaya_podderzhka):
	if ($reguliruemaya_poyasnichnaya_podderzhka[0] != 'Нет'):
?>
	<div class="gif-chair-review" id="regulir-poyas">
<?
	switch ($reguliruemaya_poyasnichnaya_podderzhka[0]){
		case "Да":
?>
		    <img src="/wp-content/uploads/air_iskur12001.gif">
			<p class="gif-text">Регулируемая поясничная поддержка</p>
			<p class="gif-opisanie">Настройте для себя оптимальную форму поясничной опоры. Эта регулировка способствует сохранению здоровой осанки.</p>
<?
		    break;
		case "Да; вращением ролика":
?>
		    <img src="/wp-content/uploads/poyasnichnyj-upor-komplektacziya-4d-podlokotniki-multiblok-3.gif">
			<p class="gif-text">Регулируемая поясничная поддержка</p>
			<p class="gif-opisanie">Покрутите ручку с правой стороны спинки чтобы настроить для себя оптимальную форму поясничной опоры. Эта регулировка способствует сохранению здоровой осанки.</p>
<?
		    break;
    }
?>
            <a href="/o-kreslah/reguliruemaya-poyasnichnaya_podderzhka/" class="gif-more" target="_blank">Подробнее</a>
		</div>
<? endif; endif; ?>



<!-- -->			
<?php

    $podushArray = implode(", ", $podushkis);
    if ($kreplenie_poyasnichnoj_podushki and $podushArray == 'Поясничная; шейная'){
?>
		<div class="gif-chair-review" id="gif-podushki">

			<?php if ( $kreplenie_poyasnichnoj_podushki[0] == "Видимое"){ ?>
				<img src="/wp-content/uploads/lumbar-cushion-large-5.gif">
			<?php }else if( $kreplenie_poyasnichnoj_podushki[0] == "Скрытое" ){ ?>
				<img src="/wp-content/uploads/podushka-nizhnyaya-kreplenie-skrytoe-peredvizhenie-3.gif">
			<? } ?>

			<p class="gif-text">Регулируемая высота подушки</p>		
			<p class="gif-opisanie">Благодаря особому креплению на ремнях вы можете настроить высоту подушки, обеспечивающей поддержку в области поясницы. Эта регулировка способствует сохранению здоровой осанки.</p>
			<a href="/o-kreslah/reguliruemaya-vysota-podushki/" class="gif-more" target="_blank">Подробнее</a>
		</div>
<?
	}						
?>			
		
		
			
	<?php 
	
	switch($tip_podlokotnikov[0]){
		case '4D':
	?>
		<div class="gif-chair-review" id="gif-pod-4d">
			<img src="/wp-content/uploads/4d-armrest-big.gif">
			<p class="gif-text">4D подлокотник</p>		
			<p class="gif-opisanie">Нажатием кнопок вы можете отрегулировать подлокотники в 4-х направлениях. Ваши предплечья и локти получат необходимую поддержку для работы и отдыха за компьютером. </p>			
			<a href="/o-kreslah/stati-o-kreslah/regulirovka-podlokotnikov/" class="gif-more" target="_blank">Подробнее</a>
		</div>	
	<?php
			break;
		case '3D':
	?>
		<div class="gif-chair-review" id="gif-pod-3d">
			<img src="/wp-content/uploads/3d-armrest-big.gif">
			<p class="gif-text">3D подлокотник</p>		
			<p class="gif-opisanie">Нажатием кнопок вы можете отрегулировать подлокотники в 3-х направлениях. Ваши предплечья и локти получат необходимую поддержку для работы и отдыха за компьютером. </p>			
			<a href="/o-kreslah/stati-o-kreslah/regulirovka-podlokotnikov/" class="gif-more" target="_blank">Подробнее</a>
		</div>		
	<?php	
		break;
		case '2D':
	?>
		<div class="gif-chair-review" id="gif-pod-2d">
			<img src="/wp-content/uploads/2d-armrest-big.gif">
			<p class="gif-text">2D подлокотник</p>		
			<p class="gif-opisanie">Нажатием кнопок вы можете отрегулировать подлокотники в 2-х направлениях. Ваши предплечья и локти получат необходимую поддержку для работы и отдыха за компьютером. </p>			
			<a href="/o-kreslah/stati-o-kreslah/regulirovka-podlokotnikov/" class="gif-more" target="_blank">Подробнее</a>
		</div>			
	<?php
		break;
		case '1D':
	?>
		<div class="gif-chair-review" id="gif-pod-1d">
			<img src="/wp-content/uploads/1d-podlokotniki-3.gif">
			<p class="gif-text">1D подлокотник</p>		
			<p class="gif-opisanie">Нажатием кнопок вы можете отрегулировать подлокотники. Ваши предплечья и локти получат необходимую поддержку для работы и отдыха за компьютером. </p>			
			<a href="/o-kreslah/stati-o-kreslah/regulirovka-podlokotnikov/" class="gif-more" target="_blank">Подробнее</a>
		</div>			
	<?php
		break;
	}
	?>
	
	<?php 
	$mehanizm_kachaniya = get_field('mehanizm_kachaniya');
	switch ($mehanizm_kachaniya[0]){
		case 'Мультиблок':
	?>
		<div class="gif-chair-review" id="multiblok">
			<img src="/wp-content/uploads/pro-locking-tilt-funktion-3.gif">
			<p class="gif-text">Функция блокировки наклона</p>		
			<p class="gif-opisanie">Механизм мультиблок позволит не только покачаться в кресле, но и зафиксировать сиденье и спинку в любом удобном положении. Такая особенность кресла обеспечит комфортное положение позвоночника. </p>			
			<a href="/o-kreslah/funkcziya-blokirovki-naklona/" class="gif-more" target="_blank">Подробнее</a>
		</div>
	<?php	
			break;
	}
	?>		
		
		
	</div>
</div>