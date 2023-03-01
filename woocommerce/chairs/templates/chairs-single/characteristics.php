<div class="tab-container-head" id="charack">
	<h2 class="tab-container-head__title">
		Характеристики
	</h2>
</div>	
<div class="tab-container-content">
	<?php if ($markas){ ?>
	<div class="tab-container-content-charach">
		<!--
		<div class="tab-container-content-charach-tooltip">
			<a href="" target="_blank" class="chairs-tool" uk-tooltip="Читать статью">
				<svg height="18" width="18" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
				  viewBox="0 0 21 20" style="enable-background:new 0 0 21 20;" xml:space="preserve"> 
				<style type="text/css"> 
				 .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#D0D0D0;} 
				</style> 
				<path class="st0" d="M13.3,2c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1h6c0.6,0,1,0.4,1,1v6c0,0.6-0.4,1-1,1c-0.6,0-1-0.4-1-1V3.4L9,12.7 
				 c-0.4,0.4-1,0.4-1.4,0s-0.4-1,0-1.4L16.9,2H13.3z M3.3,5C3,5,2.8,5.1,2.6,5.3C2.4,5.5,2.3,5.7,2.3,6v11c0,0.3,0.1,0.5,0.3,0.7 
				 C2.8,17.9,3,18,3.3,18h11c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7v-6c0-0.6,0.4-1,1-1c0.6,0,1,0.4,1,1v6 
				 c0,0.8-0.3,1.6-0.9,2.1c-0.6,0.6-1.3,0.9-2.1,0.9h-11c-0.8,0-1.6-0.3-2.1-0.9c-0.6-0.6-0.9-1.3-0.9-2.1V6c0-0.8,0.3-1.6,0.9-2.1 
				 C1.7,3.3,2.5,3,3.3,3h6c0.6,0,1,0.4,1,1s-0.4,1-1,1H3.3z"/> 
				</svg>				
			</a>
		</div>
		-->
		<div class="tab-container-content-charach-container">
			<div class="tab-container-content-charach-name">
				<h3 class="tab-container-content-charach-name__name">
					Марка
				</h3>
			</div>														
			<div class="tab-container-content-charach-value">
				<p class="tab-container-content-charach-value__name">
					<?php foreach( $markas as $key=>$marka ): 
						if($key > 0){
							echo ", $marka";
						}else{
							echo $marka;
						}											   
					endforeach; ?>										
				</p>
			</div>						
		</div>

	</div>
	<?php } ?>
	<?php if ($series){ ?>
	<div class="tab-container-content-charach">
		<!--
		<div class="tab-container-content-charach-tooltip">
			<a href="" target="_blank" class="chairs-tool" uk-tooltip="Читать статью">
				<svg height="18" width="18" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
				  viewBox="0 0 21 20" style="enable-background:new 0 0 21 20;" xml:space="preserve"> 
				<style type="text/css"> 
				 .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#D0D0D0;} 
				</style> 
				<path class="st0" d="M13.3,2c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1h6c0.6,0,1,0.4,1,1v6c0,0.6-0.4,1-1,1c-0.6,0-1-0.4-1-1V3.4L9,12.7 
				 c-0.4,0.4-1,0.4-1.4,0s-0.4-1,0-1.4L16.9,2H13.3z M3.3,5C3,5,2.8,5.1,2.6,5.3C2.4,5.5,2.3,5.7,2.3,6v11c0,0.3,0.1,0.5,0.3,0.7 
				 C2.8,17.9,3,18,3.3,18h11c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7v-6c0-0.6,0.4-1,1-1c0.6,0,1,0.4,1,1v6 
				 c0,0.8-0.3,1.6-0.9,2.1c-0.6,0.6-1.3,0.9-2.1,0.9h-11c-0.8,0-1.6-0.3-2.1-0.9c-0.6-0.6-0.9-1.3-0.9-2.1V6c0-0.8,0.3-1.6,0.9-2.1 
				 C1.7,3.3,2.5,3,3.3,3h6c0.6,0,1,0.4,1,1s-0.4,1-1,1H3.3z"/> 
				</svg>				
			</a>
		</div>	
		-->
		<div class="tab-container-content-charach-container">
			<div class="tab-container-content-charach-name">
				<h3 class="tab-container-content-charach-name__name">
					Серия
				</h3>
			</div>
			<div class="tab-container-content-charach-value">
				<p class="tab-container-content-charach-value__name">
					<?php foreach( $series as $key=>$serie ): 
						if($key > 0){
							echo ", $serie";
						}else{
							echo $serie;
						}											   
					endforeach; ?>
				</p>
			</div>
		</div>
	</div>
	<?php } ?>
	<?php if ($models){ ?>
	<div class="tab-container-content-charach">
		<!--
		<div class="tab-container-content-charach-tooltip">
			<a href="" target="_blank" class="chairs-tool" uk-tooltip="Читать статью">
				<svg height="18" width="18" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
				  viewBox="0 0 21 20" style="enable-background:new 0 0 21 20;" xml:space="preserve"> 
				<style type="text/css"> 
				 .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#D0D0D0;} 
				</style> 
				<path class="st0" d="M13.3,2c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1h6c0.6,0,1,0.4,1,1v6c0,0.6-0.4,1-1,1c-0.6,0-1-0.4-1-1V3.4L9,12.7 
				 c-0.4,0.4-1,0.4-1.4,0s-0.4-1,0-1.4L16.9,2H13.3z M3.3,5C3,5,2.8,5.1,2.6,5.3C2.4,5.5,2.3,5.7,2.3,6v11c0,0.3,0.1,0.5,0.3,0.7 
				 C2.8,17.9,3,18,3.3,18h11c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7v-6c0-0.6,0.4-1,1-1c0.6,0,1,0.4,1,1v6 
				 c0,0.8-0.3,1.6-0.9,2.1c-0.6,0.6-1.3,0.9-2.1,0.9h-11c-0.8,0-1.6-0.3-2.1-0.9c-0.6-0.6-0.9-1.3-0.9-2.1V6c0-0.8,0.3-1.6,0.9-2.1 
				 C1.7,3.3,2.5,3,3.3,3h6c0.6,0,1,0.4,1,1s-0.4,1-1,1H3.3z"/> 
				</svg>				
			</a>
		</div>	
		-->
		<div class="tab-container-content-charach-container">
			<div class="tab-container-content-charach-name">
				<h3 class="tab-container-content-charach-name__name">
					Модель
				</h3>
			</div>
			<div class="tab-container-content-charach-value">
				<p class="tab-container-content-charach-value__name">
					<?php foreach( $models as $key=>$model ): 
						if($key > 0){
							echo ", $model";
						}else{
							echo $model;
						}											   
					endforeach; ?>
				</p>
			</div>
		</div>
	</div>
	<?php } ?>
	<?php if ($ves){ ?>
	<div class="tab-container-content-charach">
		<!--
		<div class="tab-container-content-charach-tooltip">
			<a href="" target="_blank" class="chairs-tool" uk-tooltip="Читать статью">
				<svg height="18" width="18" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
				  viewBox="0 0 21 20" style="enable-background:new 0 0 21 20;" xml:space="preserve"> 
				<style type="text/css"> 
				 .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#D0D0D0;} 
				</style> 
				<path class="st0" d="M13.3,2c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1h6c0.6,0,1,0.4,1,1v6c0,0.6-0.4,1-1,1c-0.6,0-1-0.4-1-1V3.4L9,12.7 
				 c-0.4,0.4-1,0.4-1.4,0s-0.4-1,0-1.4L16.9,2H13.3z M3.3,5C3,5,2.8,5.1,2.6,5.3C2.4,5.5,2.3,5.7,2.3,6v11c0,0.3,0.1,0.5,0.3,0.7 
				 C2.8,17.9,3,18,3.3,18h11c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7v-6c0-0.6,0.4-1,1-1c0.6,0,1,0.4,1,1v6 
				 c0,0.8-0.3,1.6-0.9,2.1c-0.6,0.6-1.3,0.9-2.1,0.9h-11c-0.8,0-1.6-0.3-2.1-0.9c-0.6-0.6-0.9-1.3-0.9-2.1V6c0-0.8,0.3-1.6,0.9-2.1 
				 C1.7,3.3,2.5,3,3.3,3h6c0.6,0,1,0.4,1,1s-0.4,1-1,1H3.3z"/> 
				</svg>				
			</a>
		</div>
		-->
		<div class="tab-container-content-charach-container">
			<div class="tab-container-content-charach-name">
				<h3 class="tab-container-content-charach-name__name">
					Рекомендуемый вес (кг)
				</h3>
			</div>
			<div class="tab-container-content-charach-value">
				<p class="tab-container-content-charach-value__name">
					<?php foreach( $ves as $key=>$ve ): 
						if($key > 0){
							echo ", $ve";
						}else{
							echo $ve;
						}											   
					endforeach; ?>					 
				</p>
			</div>
		</div>
	</div>
	<?php } ?>		
	<?php if ($rosts){ ?>
	<div class="tab-container-content-charach">
		<!--
		<div class="tab-container-content-charach-tooltip">
			<a href="" target="_blank" class="chairs-tool" uk-tooltip="Читать статью">
				<svg height="18" width="18" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
				  viewBox="0 0 21 20" style="enable-background:new 0 0 21 20;" xml:space="preserve"> 
				<style type="text/css"> 
				 .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#D0D0D0;} 
				</style> 
				<path class="st0" d="M13.3,2c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1h6c0.6,0,1,0.4,1,1v6c0,0.6-0.4,1-1,1c-0.6,0-1-0.4-1-1V3.4L9,12.7 
				 c-0.4,0.4-1,0.4-1.4,0s-0.4-1,0-1.4L16.9,2H13.3z M3.3,5C3,5,2.8,5.1,2.6,5.3C2.4,5.5,2.3,5.7,2.3,6v11c0,0.3,0.1,0.5,0.3,0.7 
				 C2.8,17.9,3,18,3.3,18h11c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7v-6c0-0.6,0.4-1,1-1c0.6,0,1,0.4,1,1v6 
				 c0,0.8-0.3,1.6-0.9,2.1c-0.6,0.6-1.3,0.9-2.1,0.9h-11c-0.8,0-1.6-0.3-2.1-0.9c-0.6-0.6-0.9-1.3-0.9-2.1V6c0-0.8,0.3-1.6,0.9-2.1 
				 C1.7,3.3,2.5,3,3.3,3h6c0.6,0,1,0.4,1,1s-0.4,1-1,1H3.3z"/> 
				</svg>				
			</a>
		</div>
		-->
		<div class="tab-container-content-charach-container">
			<div class="tab-container-content-charach-name">
				<h3 class="tab-container-content-charach-name__name">
					Рекомендуемый рост (см)
				</h3>
			</div>
			<div class="tab-container-content-charach-value">
				<p class="tab-container-content-charach-value__name">
					<?php foreach( $rosts as $key=>$rost ): 
						if($key > 0){
							echo ", $rost";
						}else{
							echo $rost;
						}											   
					endforeach; ?>
				</p>
			</div>
		</div>
	</div>
	<?php } ?>							
	<?php if ($colors){ ?>
	<div class="tab-container-content-charach">
		<!--
		<div class="tab-container-content-charach-tooltip">
			<a href="" target="_blank" class="chairs-tool" uk-tooltip="Читать статью">
				<svg height="18" width="18" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
				  viewBox="0 0 21 20" style="enable-background:new 0 0 21 20;" xml:space="preserve"> 
				<style type="text/css"> 
				 .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#D0D0D0;} 
				</style> 
				<path class="st0" d="M13.3,2c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1h6c0.6,0,1,0.4,1,1v6c0,0.6-0.4,1-1,1c-0.6,0-1-0.4-1-1V3.4L9,12.7 
				 c-0.4,0.4-1,0.4-1.4,0s-0.4-1,0-1.4L16.9,2H13.3z M3.3,5C3,5,2.8,5.1,2.6,5.3C2.4,5.5,2.3,5.7,2.3,6v11c0,0.3,0.1,0.5,0.3,0.7 
				 C2.8,17.9,3,18,3.3,18h11c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7v-6c0-0.6,0.4-1,1-1c0.6,0,1,0.4,1,1v6 
				 c0,0.8-0.3,1.6-0.9,2.1c-0.6,0.6-1.3,0.9-2.1,0.9h-11c-0.8,0-1.6-0.3-2.1-0.9c-0.6-0.6-0.9-1.3-0.9-2.1V6c0-0.8,0.3-1.6,0.9-2.1 
				 C1.7,3.3,2.5,3,3.3,3h6c0.6,0,1,0.4,1,1s-0.4,1-1,1H3.3z"/> 
				</svg>				
			</a>
		</div>
		-->
		<div class="tab-container-content-charach-container">
			<div class="tab-container-content-charach-name">
				<h3 class="tab-container-content-charach-name__name">
					Цвет
				</h3>
			</div>
			<div class="tab-container-content-charach-value">
				<p class="tab-container-content-charach-value__name">
					<?php foreach( $colors as $key=>$color ): 
						if($key > 0){
							echo ", $color";
						}else{
							echo $color;
						}											
					endforeach; ?>
				</p>
			</div>
		</div>
	</div>
	<?php } ?>
	<?php if ($mater_siden){ ?>
	<div class="tab-container-content-charach">
		<!--
		<div class="tab-container-content-charach-tooltip">
			<a href="" target="_blank" class="chairs-tool" uk-tooltip="Читать статью">
				<svg height="18" width="18" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
				  viewBox="0 0 21 20" style="enable-background:new 0 0 21 20;" xml:space="preserve"> 
				<style type="text/css"> 
				 .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#D0D0D0;} 
				</style> 
				<path class="st0" d="M13.3,2c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1h6c0.6,0,1,0.4,1,1v6c0,0.6-0.4,1-1,1c-0.6,0-1-0.4-1-1V3.4L9,12.7 
				 c-0.4,0.4-1,0.4-1.4,0s-0.4-1,0-1.4L16.9,2H13.3z M3.3,5C3,5,2.8,5.1,2.6,5.3C2.4,5.5,2.3,5.7,2.3,6v11c0,0.3,0.1,0.5,0.3,0.7 
				 C2.8,17.9,3,18,3.3,18h11c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7v-6c0-0.6,0.4-1,1-1c0.6,0,1,0.4,1,1v6 
				 c0,0.8-0.3,1.6-0.9,2.1c-0.6,0.6-1.3,0.9-2.1,0.9h-11c-0.8,0-1.6-0.3-2.1-0.9c-0.6-0.6-0.9-1.3-0.9-2.1V6c0-0.8,0.3-1.6,0.9-2.1 
				 C1.7,3.3,2.5,3,3.3,3h6c0.6,0,1,0.4,1,1s-0.4,1-1,1H3.3z"/> 
				</svg>				
			</a>
		</div>
		-->
		<div class="tab-container-content-charach-container">
			<div class="tab-container-content-charach-name">
				<h3 class="tab-container-content-charach-name__name">
					Материал отделки
				</h3>
			</div>
			<div class="tab-container-content-charach-value">
				<p class="tab-container-content-charach-value__name">
					<?php foreach( $mater_siden as $key=>$mater_sid ): 
						if($key > 0){
							echo ", $mater_sid";
						}else{
							echo $mater_sid;
						}													
					endforeach; ?>
				</p>
			</div>
		</div>
	</div>	
	<?php } ?>
	<?php if ($tip_podloks){ ?>
	<div class="tab-container-content-charach">
		<!--
		<div class="tab-container-content-charach-tooltip">
			<a href="" target="_blank" class="chairs-tool" uk-tooltip="Читать статью">
				<svg height="18" width="18" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
				  viewBox="0 0 21 20" style="enable-background:new 0 0 21 20;" xml:space="preserve"> 
				<style type="text/css"> 
				 .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#D0D0D0;} 
				</style> 
				<path class="st0" d="M13.3,2c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1h6c0.6,0,1,0.4,1,1v6c0,0.6-0.4,1-1,1c-0.6,0-1-0.4-1-1V3.4L9,12.7 
				 c-0.4,0.4-1,0.4-1.4,0s-0.4-1,0-1.4L16.9,2H13.3z M3.3,5C3,5,2.8,5.1,2.6,5.3C2.4,5.5,2.3,5.7,2.3,6v11c0,0.3,0.1,0.5,0.3,0.7 
				 C2.8,17.9,3,18,3.3,18h11c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7v-6c0-0.6,0.4-1,1-1c0.6,0,1,0.4,1,1v6 
				 c0,0.8-0.3,1.6-0.9,2.1c-0.6,0.6-1.3,0.9-2.1,0.9h-11c-0.8,0-1.6-0.3-2.1-0.9c-0.6-0.6-0.9-1.3-0.9-2.1V6c0-0.8,0.3-1.6,0.9-2.1 
				 C1.7,3.3,2.5,3,3.3,3h6c0.6,0,1,0.4,1,1s-0.4,1-1,1H3.3z"/> 
				</svg>				
			</a>
		</div>
		-->
		<div class="tab-container-content-charach-container">
			<div class="tab-container-content-charach-name">
				<h3 class="tab-container-content-charach-name__name">
					Тип подлокотников
				</h3>
			</div>
			<div class="tab-container-content-charach-value">
				<p class="tab-container-content-charach-value__name">
					<?php foreach( $tip_podloks as $key=>$tip_podlok ): 
						if($key > 0){
							echo ", $tip_podlok";
						}else{
							echo $tip_podlok;
						}													
					endforeach; ?>
				</p>
			</div>
		</div>
	</div>	
	<?php } ?>
	<?php if ($ugol_nalkons){ ?>
	<div class="tab-container-content-charach">
		<!--
		<div class="tab-container-content-charach-tooltip">
			<a href="" target="_blank" class="chairs-tool" uk-tooltip="Читать статью">
				<svg height="18" width="18" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
				  viewBox="0 0 21 20" style="enable-background:new 0 0 21 20;" xml:space="preserve"> 
				<style type="text/css"> 
				 .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#D0D0D0;} 
				</style> 
				<path class="st0" d="M13.3,2c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1h6c0.6,0,1,0.4,1,1v6c0,0.6-0.4,1-1,1c-0.6,0-1-0.4-1-1V3.4L9,12.7 
				 c-0.4,0.4-1,0.4-1.4,0s-0.4-1,0-1.4L16.9,2H13.3z M3.3,5C3,5,2.8,5.1,2.6,5.3C2.4,5.5,2.3,5.7,2.3,6v11c0,0.3,0.1,0.5,0.3,0.7 
				 C2.8,17.9,3,18,3.3,18h11c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7v-6c0-0.6,0.4-1,1-1c0.6,0,1,0.4,1,1v6 
				 c0,0.8-0.3,1.6-0.9,2.1c-0.6,0.6-1.3,0.9-2.1,0.9h-11c-0.8,0-1.6-0.3-2.1-0.9c-0.6-0.6-0.9-1.3-0.9-2.1V6c0-0.8,0.3-1.6,0.9-2.1 
				 C1.7,3.3,2.5,3,3.3,3h6c0.6,0,1,0.4,1,1s-0.4,1-1,1H3.3z"/> 
				</svg>				
			</a>
		</div>
		-->
		<div class="tab-container-content-charach-container">
			<div class="tab-container-content-charach-name">
				<h3 class="tab-container-content-charach-name__name">
					Угол наклона спинки
				</h3>
			</div>
			<div class="tab-container-content-charach-value">
				<p class="tab-container-content-charach-value__name">
					<?php foreach( $ugol_nalkons as $key=>$ugol_nalkon ): 
						if($key > 0){
							echo ", $ugol_nalkon";
						}else{
							echo $ugol_nalkon;
						}													 
					endforeach; ?>
				</p>
			</div>
		</div>
	</div>	
	<?php } ?>
	<?php if ($mechanizms){ ?>
	<div class="tab-container-content-charach">
		<!--
		<div class="tab-container-content-charach-tooltip">
			<a href="" target="_blank" class="chairs-tool" uk-tooltip="Читать статью">
				<svg height="18" width="18" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
				  viewBox="0 0 21 20" style="enable-background:new 0 0 21 20;" xml:space="preserve"> 
				<style type="text/css"> 
				 .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#D0D0D0;} 
				</style> 
				<path class="st0" d="M13.3,2c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1h6c0.6,0,1,0.4,1,1v6c0,0.6-0.4,1-1,1c-0.6,0-1-0.4-1-1V3.4L9,12.7 
				 c-0.4,0.4-1,0.4-1.4,0s-0.4-1,0-1.4L16.9,2H13.3z M3.3,5C3,5,2.8,5.1,2.6,5.3C2.4,5.5,2.3,5.7,2.3,6v11c0,0.3,0.1,0.5,0.3,0.7 
				 C2.8,17.9,3,18,3.3,18h11c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7v-6c0-0.6,0.4-1,1-1c0.6,0,1,0.4,1,1v6 
				 c0,0.8-0.3,1.6-0.9,2.1c-0.6,0.6-1.3,0.9-2.1,0.9h-11c-0.8,0-1.6-0.3-2.1-0.9c-0.6-0.6-0.9-1.3-0.9-2.1V6c0-0.8,0.3-1.6,0.9-2.1 
				 C1.7,3.3,2.5,3,3.3,3h6c0.6,0,1,0.4,1,1s-0.4,1-1,1H3.3z"/> 
				</svg>				
			</a>
		</div>
		-->
		<div class="tab-container-content-charach-container">					
			<div class="tab-container-content-charach-name">
				<h3 class="tab-container-content-charach-name__name">
					Механизм качания
				</h3>
			</div>
			<div class="tab-container-content-charach-value">
				<p class="tab-container-content-charach-value__name">
					<?php foreach( $mechanizms as $key=>$mechanizm ): 
						if($key > 0){
							echo ", $mechanizm";
						}else{
							echo $mechanizm;
						}												   
					endforeach; ?>
				</p>
			</div>
		</div>
	</div>	
	<?php } ?>
	<?php if ($gazlifts){ ?>
	<div class="tab-container-content-charach">
		<!--
		<div class="tab-container-content-charach-tooltip">
			<a href="" target="_blank" class="chairs-tool" uk-tooltip="Читать статью">
				<svg height="18" width="18" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
				  viewBox="0 0 21 20" style="enable-background:new 0 0 21 20;" xml:space="preserve"> 
				<style type="text/css"> 
				 .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#D0D0D0;} 
				</style> 
				<path class="st0" d="M13.3,2c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1h6c0.6,0,1,0.4,1,1v6c0,0.6-0.4,1-1,1c-0.6,0-1-0.4-1-1V3.4L9,12.7 
				 c-0.4,0.4-1,0.4-1.4,0s-0.4-1,0-1.4L16.9,2H13.3z M3.3,5C3,5,2.8,5.1,2.6,5.3C2.4,5.5,2.3,5.7,2.3,6v11c0,0.3,0.1,0.5,0.3,0.7 
				 C2.8,17.9,3,18,3.3,18h11c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7v-6c0-0.6,0.4-1,1-1c0.6,0,1,0.4,1,1v6 
				 c0,0.8-0.3,1.6-0.9,2.1c-0.6,0.6-1.3,0.9-2.1,0.9h-11c-0.8,0-1.6-0.3-2.1-0.9c-0.6-0.6-0.9-1.3-0.9-2.1V6c0-0.8,0.3-1.6,0.9-2.1 
				 C1.7,3.3,2.5,3,3.3,3h6c0.6,0,1,0.4,1,1s-0.4,1-1,1H3.3z"/> 
				</svg>				
			</a>
		</div>
		-->
		<div class="tab-container-content-charach-container">						
			<div class="tab-container-content-charach-name">
				<h3 class="tab-container-content-charach-name__name">
					Газлифт
				</h3>
			</div>
			<div class="tab-container-content-charach-value">
				<p class="tab-container-content-charach-value__name">
					<?php foreach( $gazlifts as $key=>$gazlift ): 
						if($key > 0){
							echo ", $gazlift";
						}else{
							echo $gazlift;
						}												 
					endforeach; ?>
				</p>
			</div>
		</div>
	</div>	
	<?php } ?>							
	<?php if ($material_krestovins){ ?>
	<div class="tab-container-content-charach">
		<!--
		<div class="tab-container-content-charach-tooltip">
			<a href="" target="_blank" class="chairs-tool" uk-tooltip="Читать статью">
				<svg height="18" width="18" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
				  viewBox="0 0 21 20" style="enable-background:new 0 0 21 20;" xml:space="preserve"> 
				<style type="text/css"> 
				 .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#D0D0D0;} 
				</style> 
				<path class="st0" d="M13.3,2c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1h6c0.6,0,1,0.4,1,1v6c0,0.6-0.4,1-1,1c-0.6,0-1-0.4-1-1V3.4L9,12.7 
				 c-0.4,0.4-1,0.4-1.4,0s-0.4-1,0-1.4L16.9,2H13.3z M3.3,5C3,5,2.8,5.1,2.6,5.3C2.4,5.5,2.3,5.7,2.3,6v11c0,0.3,0.1,0.5,0.3,0.7 
				 C2.8,17.9,3,18,3.3,18h11c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7v-6c0-0.6,0.4-1,1-1c0.6,0,1,0.4,1,1v6 
				 c0,0.8-0.3,1.6-0.9,2.1c-0.6,0.6-1.3,0.9-2.1,0.9h-11c-0.8,0-1.6-0.3-2.1-0.9c-0.6-0.6-0.9-1.3-0.9-2.1V6c0-0.8,0.3-1.6,0.9-2.1 
				 C1.7,3.3,2.5,3,3.3,3h6c0.6,0,1,0.4,1,1s-0.4,1-1,1H3.3z"/> 
				</svg>				
			</a>
		</div>
		-->
		<div class="tab-container-content-charach-container">					
			<div class="tab-container-content-charach-name">
				<h3 class="tab-container-content-charach-name__name">
					Материал крестовины
				</h3>
			</div>
			<div class="tab-container-content-charach-value">
				<p class="tab-container-content-charach-value__name">
					<?php foreach( $material_krestovins as $key=>$material_krestovin ): 
						if($key > 0){
							echo ", $material_krestovin";
						}else{
							echo $material_krestovin;
						}															
					endforeach; ?>
				</p>
			</div>
		</div>
	</div>	
	<?php } ?>
	<?php if ($rolikis){ ?>
	<div class="tab-container-content-charach">
		<!--
		<div class="tab-container-content-charach-tooltip">
			<a href="" target="_blank" class="chairs-tool" uk-tooltip="Читать статью">
				<svg height="18" width="18" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
				  viewBox="0 0 21 20" style="enable-background:new 0 0 21 20;" xml:space="preserve"> 
				<style type="text/css"> 
				 .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#D0D0D0;} 
				</style> 
				<path class="st0" d="M13.3,2c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1h6c0.6,0,1,0.4,1,1v6c0,0.6-0.4,1-1,1c-0.6,0-1-0.4-1-1V3.4L9,12.7 
				 c-0.4,0.4-1,0.4-1.4,0s-0.4-1,0-1.4L16.9,2H13.3z M3.3,5C3,5,2.8,5.1,2.6,5.3C2.4,5.5,2.3,5.7,2.3,6v11c0,0.3,0.1,0.5,0.3,0.7 
				 C2.8,17.9,3,18,3.3,18h11c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7v-6c0-0.6,0.4-1,1-1c0.6,0,1,0.4,1,1v6 
				 c0,0.8-0.3,1.6-0.9,2.1c-0.6,0.6-1.3,0.9-2.1,0.9h-11c-0.8,0-1.6-0.3-2.1-0.9c-0.6-0.6-0.9-1.3-0.9-2.1V6c0-0.8,0.3-1.6,0.9-2.1 
				 C1.7,3.3,2.5,3,3.3,3h6c0.6,0,1,0.4,1,1s-0.4,1-1,1H3.3z"/> 
				</svg>				
			</a>
		</div>
		-->
		<div class="tab-container-content-charach-container">					
			<div class="tab-container-content-charach-name">
				<h3 class="tab-container-content-charach-name__name">
					Ролики
				</h3>
			</div>
			<div class="tab-container-content-charach-value">
				<p class="tab-container-content-charach-value__name">
					<?php foreach( $rolikis as $key=>$roliki ): 
						if($key > 0){
							echo ", $roliki";
						}else{
							echo $roliki;
						}												
					endforeach; ?>
				</p>
			</div>
		</div>
	</div>	
	<?php } ?>
	<?php if ($podushkis){ ?>
	<div class="tab-container-content-charach">
		<!--
		<div class="tab-container-content-charach-tooltip">
			<a href="" target="_blank" class="chairs-tool" uk-tooltip="Читать статью">
				<svg height="18" width="18" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
				  viewBox="0 0 21 20" style="enable-background:new 0 0 21 20;" xml:space="preserve"> 
				<style type="text/css"> 
				 .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#D0D0D0;} 
				</style> 
				<path class="st0" d="M13.3,2c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1h6c0.6,0,1,0.4,1,1v6c0,0.6-0.4,1-1,1c-0.6,0-1-0.4-1-1V3.4L9,12.7 
				 c-0.4,0.4-1,0.4-1.4,0s-0.4-1,0-1.4L16.9,2H13.3z M3.3,5C3,5,2.8,5.1,2.6,5.3C2.4,5.5,2.3,5.7,2.3,6v11c0,0.3,0.1,0.5,0.3,0.7 
				 C2.8,17.9,3,18,3.3,18h11c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7v-6c0-0.6,0.4-1,1-1c0.6,0,1,0.4,1,1v6 
				 c0,0.8-0.3,1.6-0.9,2.1c-0.6,0.6-1.3,0.9-2.1,0.9h-11c-0.8,0-1.6-0.3-2.1-0.9c-0.6-0.6-0.9-1.3-0.9-2.1V6c0-0.8,0.3-1.6,0.9-2.1 
				 C1.7,3.3,2.5,3,3.3,3h6c0.6,0,1,0.4,1,1s-0.4,1-1,1H3.3z"/> 
				</svg>				
			</a>
		</div>
		-->
		<div class="tab-container-content-charach-container">					
			<div class="tab-container-content-charach-name">
				<h3 class="tab-container-content-charach-name__name">
					Подушки
				</h3>
			</div>
			<div class="tab-container-content-charach-value">
				<p class="tab-container-content-charach-value__name">
					<?php foreach( $podushkis as $key=>$podushki ): 
						if($key > 0){
							echo ", $podushki";
						}else{
							$podushki = str_replace(';',',',$podushki);
							echo $podushki;
						}													  
					endforeach; ?>
				</p>
			</div>
		</div>
	</div>
	<?php } ?>
	<?php
	$podush = implode("; ", $podushkis);
	if ($kreplenie_poyasnichnoj_podushki and $podush == 'Поясница; шея'){ ?>
	<div class="tab-container-content-charach">
		<!--
		<div class="tab-container-content-charach-tooltip">
			<a href="" target="_blank" class="chairs-tool" uk-tooltip="Читать статью">
				<svg height="18" width="18" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				  viewBox="0 0 21 20" style="enable-background:new 0 0 21 20;" xml:space="preserve">
				<style type="text/css">
				 .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#D0D0D0;}
				</style>
				<path class="st0" d="M13.3,2c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1h6c0.6,0,1,0.4,1,1v6c0,0.6-0.4,1-1,1c-0.6,0-1-0.4-1-1V3.4L9,12.7
				 c-0.4,0.4-1,0.4-1.4,0s-0.4-1,0-1.4L16.9,2H13.3z M3.3,5C3,5,2.8,5.1,2.6,5.3C2.4,5.5,2.3,5.7,2.3,6v11c0,0.3,0.1,0.5,0.3,0.7
				 C2.8,17.9,3,18,3.3,18h11c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7v-6c0-0.6,0.4-1,1-1c0.6,0,1,0.4,1,1v6
				 c0,0.8-0.3,1.6-0.9,2.1c-0.6,0.6-1.3,0.9-2.1,0.9h-11c-0.8,0-1.6-0.3-2.1-0.9c-0.6-0.6-0.9-1.3-0.9-2.1V6c0-0.8,0.3-1.6,0.9-2.1
				 C1.7,3.3,2.5,3,3.3,3h6c0.6,0,1,0.4,1,1s-0.4,1-1,1H3.3z"/>
				</svg>
			</a>
		</div>
		-->
		<div class="tab-container-content-charach-container">
			<div class="tab-container-content-charach-name">
				<h3 class="tab-container-content-charach-name__name">
					Крепление поясничной подушки
				</h3>
			</div>
			<div class="tab-container-content-charach-value">
				<p class="tab-container-content-charach-value__name">
					<?php foreach( $kreplenie_poyasnichnoj_podushki as $key=>$kreplenie_poyasnichnoj_podushka ):
						if($key > 0){
							echo ", $kreplenie_poyasnichnoj_podushka";
						}else{
							echo $kreplenie_poyasnichnoj_podushka;
						}
					endforeach; ?>
				</p>
			</div>
		</div>
	</div>
	<?php } ?>
	<?php
	if ($nalichierefpod){ ?>
	<div class="tab-container-content-charach">
		<!--
		<div class="tab-container-content-charach-tooltip">
			<a href="" target="_blank" class="chairs-tool" uk-tooltip="Читать статью">
				<svg height="18" width="18" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				  viewBox="0 0 21 20" style="enable-background:new 0 0 21 20;" xml:space="preserve">
				<style type="text/css">
				 .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#D0D0D0;}
				</style>
				<path class="st0" d="M13.3,2c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1h6c0.6,0,1,0.4,1,1v6c0,0.6-0.4,1-1,1c-0.6,0-1-0.4-1-1V3.4L9,12.7
				 c-0.4,0.4-1,0.4-1.4,0s-0.4-1,0-1.4L16.9,2H13.3z M3.3,5C3,5,2.8,5.1,2.6,5.3C2.4,5.5,2.3,5.7,2.3,6v11c0,0.3,0.1,0.5,0.3,0.7
				 C2.8,17.9,3,18,3.3,18h11c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7v-6c0-0.6,0.4-1,1-1c0.6,0,1,0.4,1,1v6
				 c0,0.8-0.3,1.6-0.9,2.1c-0.6,0.6-1.3,0.9-2.1,0.9h-11c-0.8,0-1.6-0.3-2.1-0.9c-0.6-0.6-0.9-1.3-0.9-2.1V6c0-0.8,0.3-1.6,0.9-2.1
				 C1.7,3.3,2.5,3,3.3,3h6c0.6,0,1,0.4,1,1s-0.4,1-1,1H3.3z"/>
				</svg>
			</a>
		</div>
		-->
		<div class="tab-container-content-charach-container">
			<div class="tab-container-content-charach-name">
				<h3 class="tab-container-content-charach-name__name">
					Наличие регулируемой поясничной поддержки
				</h3>
			</div>
			<div class="tab-container-content-charach-value">
				<p class="tab-container-content-charach-value__name">
					<?php foreach( $nalichierefpod as $key=>$nalichierefpodSingle ):
						if($key > 0){
							echo ", $nalichierefpodSingle";
						}else{
							echo $nalichierefpodSingle;
						}
					endforeach; ?>
				</p>
			</div>
		</div>
	</div>
	<?php } ?>
	<?php if ($ves_nettos){ ?>
	<div class="tab-container-content-charach">
		<div class="tab-container-content-charach-container">					
			<div class="tab-container-content-charach-name">
				<h3 class="tab-container-content-charach-name__name">
					Вес нетто (кг)
				</h3>
			</div>
			<div class="tab-container-content-charach-value">
				<p class="tab-container-content-charach-value__name">
					<?php foreach( $ves_nettos as $key=>$ves_netto ): 
						if($key > 0){
							echo ", $ves_netto";
						}else{
							echo $ves_netto;
						}												   
					endforeach; ?>
				</p>
			</div>
		</div>
	</div>
	<?php } ?>
	<?php if ($vesbruttos){ ?>
	<div class="tab-container-content-charach">
		<div class="tab-container-content-charach-container">					
			<div class="tab-container-content-charach-name">
				<h3 class="tab-container-content-charach-name__name">
					Вес брутто (кг)
				</h3>
			</div>
			<div class="tab-container-content-charach-value">
				<p class="tab-container-content-charach-value__name">
					<?php foreach( $vesbruttos as $key=>$vesbrutto ): 
						if($key > 0){
							echo ", $vesbrutto";
						}else{
							echo $vesbrutto;
						}												   
					endforeach; ?>
				</p>
			</div>
		</div>
	</div>
	<?php } ?>	
	<?php if ($gabaritys){ ?>
	<div class="tab-container-content-charach">
		<div class="tab-container-content-charach-container">					
			<div class="tab-container-content-charach-name">
				<h3 class="tab-container-content-charach-name__name">
					Габариты упаковки (ДxШxВ)
				</h3>
			</div>
			<div class="tab-container-content-charach-value">
				<p class="tab-container-content-charach-value__name">
					<?php foreach( $gabaritys as $key=>$gabarity ): 
						if($key > 0){
							echo ", $gabarity";
						}else{
							echo $gabarity;
						}												   
					endforeach; ?>
				</p>
			</div>
		</div>
	</div>
	<?php } ?>	
	<?php if ($garantiyas){ ?>
	<div class="tab-container-content-charach">
		<!--
		<div class="tab-container-content-charach-tooltip">
			<a href="" target="_blank" target="_blank" class="chairs-tool" uk-tooltip="Читать статью">
				<svg height="18" width="18" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
				  viewBox="0 0 21 20" style="enable-background:new 0 0 21 20;" xml:space="preserve"> 
				<style type="text/css"> 
				 .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#D0D0D0;} 
				</style> 
				<path class="st0" d="M13.3,2c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1h6c0.6,0,1,0.4,1,1v6c0,0.6-0.4,1-1,1c-0.6,0-1-0.4-1-1V3.4L9,12.7 
				 c-0.4,0.4-1,0.4-1.4,0s-0.4-1,0-1.4L16.9,2H13.3z M3.3,5C3,5,2.8,5.1,2.6,5.3C2.4,5.5,2.3,5.7,2.3,6v11c0,0.3,0.1,0.5,0.3,0.7 
				 C2.8,17.9,3,18,3.3,18h11c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7v-6c0-0.6,0.4-1,1-1c0.6,0,1,0.4,1,1v6 
				 c0,0.8-0.3,1.6-0.9,2.1c-0.6,0.6-1.3,0.9-2.1,0.9h-11c-0.8,0-1.6-0.3-2.1-0.9c-0.6-0.6-0.9-1.3-0.9-2.1V6c0-0.8,0.3-1.6,0.9-2.1 
				 C1.7,3.3,2.5,3,3.3,3h6c0.6,0,1,0.4,1,1s-0.4,1-1,1H3.3z"/> 
				</svg>				
			</a>
		</div>
		-->
		<div class="tab-container-content-charach-container">					
			<div class="tab-container-content-charach-name">
				<h3 class="tab-container-content-charach-name__name">
					Гарантия
				</h3>
			</div>
			<div class="tab-container-content-charach-value">
				<p class="tab-container-content-charach-value__name">
					<?php foreach( $garantiyas as $key=>$garantiya ): 
						if($key > 0){
							echo ", $garantiya";
						}else{
							echo $garantiya;
						}												   
					endforeach; ?>
				</p>
			</div>
		</div>
	</div>	
	<?php } ?>
</div>