<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Boiling_machine
 */

get_header();
?>

	<div class="page-404-background">
		<div class="bm-adaptive bm-margin bm">
			<div class="page-404">
				<h1 class="page-404-title">OOOPS!</h1>
				<p class="page-404-text">Страница не найдена</p>
				<div class="page-404-block">
					<p class="page-404-block-text">4</p>
					<img src="/wp-content/uploads/giphy.gif">
					<p class="page-404-block-text">4</p>
				</div>
				<a href="/" class="page-404-link">Вернуться на главную</a>
			</div>
		</div>
	</div>

<?php
get_footer();
