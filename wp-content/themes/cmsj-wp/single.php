<h1>Pagina: <?php echo $pagename; ?></h1>
<?php while(have_posts()) {
	the_post();
	the_title();
	} ?>