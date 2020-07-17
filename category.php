<?php get_header(); ?>









<?php 
$category = get_queried_object();


?>
<div class="posts-wrapper"> 
<div class="container"> 
<h4  class="Sponsor-title"><?php echo $category->cat_name; ?></h4>
<div class="posts"> 
    <?php









$posts = get_posts( array(
   'numberposts' => -1,
    'category'    =>  $category->term_id,
    'orderby'     => 'date',
    'order'       => 'ASC',
     'post_type'   => 'post',
     'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
    setup_postdata($post);
    ?>
		<div class="post-wrapper Sponsors">
	
	<div class="Sponsors-photo">
		<img src="<?php the_field('company-photo'); ?>" alt="">
	</div>
	<div class="Sponsors-text">
		<h5 class="Sponsors-text-title"><?php the_field('company-name'); ?></h5>
		<p><?php the_field('abt-company-text'); ?></p>
	</div>
 <div class="btn-learnmore-wrapper">
        <a href="<?php  echo get_permalink(); ?>" class="btn-learnmore">
            Learn more
        </a>
        </div>
</div>

<?php
}

wp_reset_postdata(); // сброс
 ?>
</div>
</div>
    </div>















<?php get_footer(); ?>