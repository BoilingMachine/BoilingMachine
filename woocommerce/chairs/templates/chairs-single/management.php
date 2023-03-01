<?php if ( get_field('videoobzor_iframe') || get_field('ssylka_na_isntrukcziyu') ): ?>
<div class="chair-review">
	<div class="tab-container-head" id="rukovodstvo">
		<h2 class="tab-container-head__title">
			Руководство по сборке
		</h2>
		<p class="chair-review_subtitle">
			Вы можете посмотреть видео гайд или скачать инструкцию по кнопке под видео
		</p>
	</div>
	<?php 
		$name = '';
		$marka = get_field('marka');
		$marka = $marka[0];
		$seriya = get_field('seriya');
		$seriya = $seriya[0];
	?>
	<?php if ( get_field('videoobzor_iframe') ){ ?>
	<div class="chair-video-grid">
		<div class="chair-video-grid-video">
			<iframe width="100%" height="100%" src="<?php the_field('videoobzor_iframe'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>		
		</div>
		<div class="chair-video-grid-text-container">
			<?php if ( get_field('ssylka_na_isntrukcziyu') ): ?>
			<a href="<?php the_field('ssylka_na_isntrukcziyu'); ?>" download class="chair-video-grid-download">Скачать PDF инструкцию</a>
			<?php endif; ?>
		</div>
	</div>
	<?php } ?>
	<div class="assembly-container">
		<div class="assembly-step-container">
			<div class="assembly-step wid-con">
				<div class="step-counter-container">
					<div class="step-counter">1</div>
				</div>
				<div class="step-tt">
					<p class="step-tt__text">
						Освободите место для сборки. Затем аккуратно откройте коробку и выложите все детали кресла на ровную поверхность. Снимите упаковочную плёнку; 
					</p>
				</div>				
			</div>			
		</div>
		<div class="assembly-step-container">
			<div class="assembly-step wid-con">
				<div class="step-counter-container">
					<div class="step-counter">2</div>
				</div>
				<div class="step-tt">
					<p class="step-tt__text">
						Простым защелкивающим движением вставьте колёсики кресла в соответствующие им пазы на пятиконечной крестовине. Если с крестовиной в комплекте идут пластиковые накладки — установите и их
					</p>
				</div>				
			</div>	
			<div class="step-images">
				<img src="/wp-content/uploads/1-39.webp">
				<img src="/wp-content/uploads/2-37.webp">
			</div>
		</div>		
		<p class="step-more-button">
			Показать полностью
		</p>
		<div class="step--cont-more">
			<div class="assembly-step-container">
				<div class="assembly-step wid-con">
					<div class="step-counter-container">
						<div class="step-counter">3</div>
					</div>
					<div class="step-tt">
						<p class="step-tt__text">
							Соедините патрон газлифта и получившееся основание, наденьте сверху защитный колпак и отложите всю конструкцию в сторону;
						</p>
					</div>				
				</div>	
				<div class="step-images">
					<img src="/wp-content/uploads/3-39.webp">
				</div>
			</div>	
			<div class="assembly-step-container">
				<div class="assembly-step wid-con">
					<div class="step-counter-container">
						<div class="step-counter">4</div>
					</div>
					<div class="step-tt">
						<p class="step-tt__text">
							Открутите болты от спинки и опустите ее между специальными креплениями на сиденье, чтобы отверстия в спинке и на креплениях совпали. 
						</p>
					</div>				
				</div>	
				<div class="step-images">
					<img src="/wp-content/uploads/4-38.webp">
				</div>
			</div>	
			<div class="assembly-step-container">
				<div class="assembly-step wid-con">
					<div class="step-counter-container">
						<div class="step-counter">5</div>
					</div>
					<div class="step-tt">
						<p class="step-tt__text">
							Воспользуйтесь комплектным ключом, чтобы прикрутить спинку сначала с одной стороны, а потом с другой. 
							<br><br>
							Установите пластиковые заглушки, чтобы скрыть механизм, позволяющий регулировать угол наклона спинки;
						</p>
					</div>				
				</div>	
				<div class="step-images">
					<img src="/wp-content/uploads/5-1-1.webp">
					<img src="/wp-content/uploads/12-4.webp">
				</div>
			</div>	
			<div class="assembly-step-container">
				<div class="assembly-step wid-con">
					<div class="step-counter-container">
						<div class="step-counter">6</div>
					</div>
					<div class="step-tt">
						<p class="step-tt__text">
							Положите кресло на спинку на небольшом возвышении. Открутите болты с обратной стороны сиденья и установите механизм качания и подлокотники кресла (если не прикреплены). 
							<br><br>
							Ручка механизма качания должна быть направлена против направления посадки, если механизм реализован по системе топ-ган (с одним рычагом) и по направлению посадки, если по системе мультиблок (с двумя рычагами). 
							<br><br>
							Насадите на механизм качания пластиковые накладки;
						</p>
					</div>				
				</div>	
				<div class="step-images">
					<img src="/wp-content/uploads/13-2.webp">
				</div>
			</div>	
			<div class="assembly-step-container">
				<div class="assembly-step wid-con">
					<div class="step-counter-container">
						<div class="step-counter">7</div>
					</div>
					<div class="step-tt">
						<p class="step-tt__text">
							Установите сиденье на патрон газлифта, ровно опустив его на основание с колесиками;
						</p>
					</div>				
				</div>	
				<div class="step-images">
					<img src="/wp-content/uploads/8-18.webp">
				</div>
			</div>	
			<div class="assembly-step-container">
				<div class="assembly-step wid-con">
					<div class="step-counter-container">
						<div class="step-counter">8</div>
					</div>
					<div class="step-tt">
						<p class="step-tt__text">
							<span>* Опционально</span>. Наденьте на кресло подушку под голову, подушку под поясницу закрепите на ремнях. Для этого проденьте ремни через специальные проушины в области шеи и затяните на нужной высоте с обратной стороны спинки.
						</p>
					</div>				
				</div>	
				<div class="step-images img-three">
					<img src="/wp-content/uploads/14-2.webp">
					<img src="/wp-content/uploads/15.webp">
					<img src="/wp-content/uploads/11-6.webp">
				</div>
			</div>				
		</div>
	</div>
</div>

<script>
	$(function(){
		$('.step-more-button').click(function(){
			$(this).hide();
			$('.step--cont-more').show();
		});
	})

</script>


<?php endif; ?>
