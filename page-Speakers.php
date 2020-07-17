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





		# получаем записи из рубрики
		$myposts = get_posts( array(
			'numberposts' =>  -1,
			'category_name'    => 'Speakers',
			'orderby'     => 'post_date',
			'order'       => 'DESC',
		) );
		# выводим записи
		global $post;
		foreach($myposts as $post){
	






			setup_postdata($post);
		?>
		<div class="post-wrapper Sponsors">
	


	<div class="Speakers-photo">
		<img src="<?php the_field('speaker-photo'); ?>" alt="">
	</div>
	<div class="Sponsors-text">
		<h5 class="Sponsors-text-title"><?php the_field('speaker-name'); ?></h5>
		<p><?php the_field('speaker-text'); ?></p>
	</div>
 <div class="btn-learnmore-wrapper">
        <a href="<?php  echo	get_permalink(); ?>" class="btn-learnmore">
            Learn more
        </a>
        </div>
</div>		
		



<?php
		}
	

	wp_reset_postdata(); // сбрасываем глобальную переменную пост

 ?>
	</div>
</div>
</div>
</main>











<?php get_footer(); ?>