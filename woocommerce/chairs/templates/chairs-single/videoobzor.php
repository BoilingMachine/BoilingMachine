<? if(get_field('videoobzor')): ?>
<section id='videoobzor'>
    <div class="chair-review" id="razmer">
        <div class="tab-container-head">
            <h2 class="tab-container-head__title videoobzot-title">  
				Видеообзор
            </h2>
        </div>
        <div class='videoobzor-frame'>
            <div class="chair-video-grid-video">
                <iframe width="100%" height="100%" src="<?php the_field('videoobzor'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
<? endif; ?>