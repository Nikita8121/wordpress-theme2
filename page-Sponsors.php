<?php get_header(); ?>
<main>
	<div class="sponsors-text">
		<div class="container">
		<div class="sponsors-text-container">
		<h2 class="reviews-container-title">
			OUR SPONSORS
		</h2>
		<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
		</p>
	</div>
</div>
	</div>
<div class="form-select-conference">
<div class="container">
	 <h3 class="form-select-conference-title">please select a conference</h3>


	 <div class="form-select-conference-container">
	  <div class="select-box">
    
    <label for="select-box1" class="label select-box1"><span class="label-desc">Choose Conference</span> </label>
    <select id="select-box1" class="select">
      <option value="Choice 1">Wealth TOP FORUM Israel 2016</option>
      
    </select>
   </div>
   </div> 
  </div>
</div>
<div class="posts-wrapper">	
<div class="container">
	<div class="posts">
		



<?php 
$parent_id = 7;


# получаем дочерние рубрики
$sub_cats = get_categories( array(
	'child_of' => $parent_id,
	'hide_empty' => 0
) );
if( $sub_cats ){
	foreach( $sub_cats as $cat ){




		# получаем записи из рубрики
		$myposts = get_posts( array(
			'numberposts' =>  1,
			'category'    => $cat->cat_ID,
			'orderby'     => 'post_date',
			'order'       => 'DESC',
		) );
		# выводим записи
		global $post;
		foreach($myposts as $post){
	$get_cat        = get_the_category();
$first_cat      = $get_cat[0];
$category_name  = $first_cat->cat_name;
$category_link  = get_category_link( $first_cat->cat_ID ); 






			setup_postdata($post);
		?>
		<div class="post-wrapper Sponsors">
	

	<a href="<?php echo $category_link; ?>" class="Sponsors-title"><?php  echo $category_name; ?></a>
	<div class="Sponsors-photo">
		<img src="<?php the_field('company-photo'); ?>" alt="">
	</div>
	<div class="Sponsors-text">
		<h5 class="Sponsors-text-title"><?php the_field('company-name'); ?></h5>
		<p><?php the_field('abt-company-text'); ?></p>
	</div>
 <div class="btn-learnmore-wrapper">
        <a href="<?php  echo	get_permalink(); ?>" class="btn-learnmore">
            Learn more
        </a>
        </div>
</div>		
		



<?php
		}
	}

	wp_reset_postdata(); // сбрасываем глобальную переменную пост
}
 ?>





















































	</div>
	</div>
</div>

</main>











<?php get_footer(); ?>