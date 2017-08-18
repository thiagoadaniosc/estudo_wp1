<?php get_header(); ?>
<main class="container">
<h1 class="page-post-title">Noticia</h1>
	<ul class="row col-lg-12" style="list-style: none;">
<?php 
if (have_posts()) :
	while (have_posts()) : 
		the_post();
?>
			<li class="col-lg-4">
			<div class="thumbnail">
			<div class="post_img"><?php the_post_thumbnail();   ?></div>
			<h1><?php the_title(); ?></h1>
			<div><?php the_content(); ?></div>
			</li>
			</div>

<?php 
	endwhile;
endif; 
?>
</main>
<?php get_footer(); ?>