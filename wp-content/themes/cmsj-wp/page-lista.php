<?php get_header(); ?>
<h1 style="text-align: center;"><?php the_title(); ?> <?php the_post(); ?></h1>

<table class="table table-bordered" style="width: 500px; margin:auto">

	<?php 
	//$result = $wpdb->get_results('create table teste (id int,nome varchar(255));');
	$result = $wpdb->get_results('select * from teste');
	?>
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
		</tr>
	</thead>

	<tbody>
		<?php 

			foreach ($result as $row):
		?>
		<tr>
			<td><?= $row->id; ?></td> 
			<td><?= $row->nome; ?></td>
		</tr>
	<?php endforeach; ?>

	</tbody>

</table>




<?php get_footer(); ?>

