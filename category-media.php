<?php get_header(); ?>
<main>
	<div class="sponsors-text">
		<div class="container">
		<div class="sponsors-text-container">
		<h2 class="reviews-container-title">
			ARTICLES FROM SPONSORS
		</h2>
		<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
		</p>
	</div>
</div>
	</div>

<div class="posts-wrapper">	
<div class="container">

		



<?php 




	

 if(is_category()){
   $cat = get_query_var('cat');
   $category = get_category ($cat);
  
   echo do_shortcode('[ajax_load_more category="'.$category->slug.'" cache="true" cache_id="cache-'.$category->slug. ' container_type="div" css_classes="flexbox""]');
}
		




	



 ?>

</div>
</div>
</main>











<?php get_footer(); ?>