<?php
/*
Template Name: Top Panel
*/
?>

<?php $page = get_page_by_title( 'Top Panel' ); $thepageid = $page->ID;  ?>

<?php $recent = new WP_Query(array('page_id' => ''. $thepageid .'')); while($recent->have_posts()) : $recent->the_post();?>
	<div class="topcontent">
		<?php the_content(); ?>
	</div>
<?php endwhile; ?>