<?php get_header(); ?>
<main>
<div class="coference-slider" style="background-image: url('<?php the_field('bcg'); ?>');">
	<div class="conatainer">
   <div class="coference-slider-conatainer">

    <div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
       
<?php 
$posts = get_posts( array(
   'numberposts' => -1,
    'category_name'    => 'Conferences',
    'orderby'     => 'date',
    'order'       => 'ASC',
     'post_type'   => 'post',
     'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
    setup_postdata($post);
    ?>
   <div class="swiper-slide">
            <div class="swiper-slide-content">
                <div class="swiper-slide-content-date">
                    <span class="swiper-slide-content-date-day"><?php the_field('days'); ?></span>
                <span class="swiper-slide-content-date-month"><?php the_field('month'); ?></span>
                <span class="swiper-slide-content-date-year"><?php the_field('year'); ?></span>
                </div>
            <div class="swiper-slide-content-text">
                <h2 class="swiper-slide-content-text-title"><?php the_field('title'); ?></h2>
            <p class="swiper-slide-content-text-text"><?php the_field('text'); ?></p>
            <span class="swiper-slide-content-text-place"><?php the_field('place'); ?></span>
            </div>
            </div>

        </div>
<?php
}

wp_reset_postdata(); // сброс
 ?>




























     
        
        
    </div>
    <!-- If we need pagination -->
  

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    
</div>
</div>
</div>
</div>
<div class="index-post-1">
    <div class="container">
        <div class="index-post-1-container">
            <p>
                TOP FORUM is an international business communication company. Our main idea is to take your business to the next level. To make this transformationhappen you need to have a platform to meet hundreds of new clients and specialists, become aware of new trends and soak up fresh ideas from best experts. It's what we call the forum impact. Face to face communication with like-minded professionals is a personal experience which leads your business to a great success. TOP FORUM business conferences give you the unique opportunity to set new goals, open your new strategy and implement the campaigns that will give you superiority in your industry. Just invest in your future.
            </p>
        <div v class="posts">
           
<?php 
$posts = get_posts( array(
   'numberposts' => -1,
    'category_name'    => 'type-of-cooperating',
    'orderby'     => 'date',
    'order'       => 'ASC',
     'post_type'   => 'post',
     'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
    setup_postdata($post);
    ?>
    <div class="post-wrapper">
            <div class="index-post-1-container-preview">
                <img src="<?php the_field('preview_for_pots'); ?>" alt="">
            </div>  
       <div class="index-post-1-container-text">
          <h3 class="index-post-1-container-text-title"><?php the_field('title'); ?></h3> 
       <p><?php the_field('text'); ?></p>
       </div>
        <div class="btn-learnmore-wrapper">
        <span class="btn-learnmore">
            Learn more
        </span>
        </div>
        <span class="index-post-1-container-conference-name"><?php the_field('conference_name'); ?></span>
    
        
</div>
<?php
}

wp_reset_postdata(); // сброс
 ?>

















        </div>
        <div class="index-post-1-container-btn">
        <div class="nav-button-register">
        <span class="nav-button-text">REGISTER NOW</span>
        </div>
        <div class="nav-button-subscribe">
        <span class="nav-button-text">Subscribe </span>
        </div>
        </div>   
        </div>
    </div>
</div>





<div class="reviews">   
<div class="container"> 
<div class="reviews-container"> 
<h2 class="reviews-container-title">CUSTOMER REVIEWS</h2>
</div>
</div>

    <!-- Additional required wrapper -->
    
    <div class="container">
<div class="swiper-container-1 ">
  <div class="swiper-wrapper">
<?php 
$posts = get_posts( array(
   'numberposts' => -1,
    'category_name'    => 'Reviews',
    'orderby'     => 'date',
    'order'       => 'ASC',
     'post_type'   => 'post',
     'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
    setup_postdata($post);
    ?>


        <!-- Slides -->
        <div class="swiper-slide">
          <div class="review-wrapper">    
<div class="review-wrapper-photo">  
        <img src="<?php the_field('photo_of_reviwer'); ?>" alt="">
</div>
<div class="review-wrapper-text">
        <h3 class="review-wrapper-text-title"><?php the_field('reviwer-name'); ?></h3>
        <div class="review-wrapper-date">
            <span><?php the_field('post_day'); ?></span>
            <span><?php the_field('post_month'); ?></span>
            <span><?php the_field('post_year'); ?></span>
        </div>
<p><?php the_field('review_text'); ?></p>
</div>
</div>
  </div>

       
   
     

<?php
}

wp_reset_postdata(); // сброс
 ?>
   
    <!-- If we need pagination -->
    

    <!-- If we need navigation buttons -->
   

    <!-- If we need scrollbar -->
    
    </div>
</div>
</div>
</div>

<div class="video-part">
    <div class="container">
        <div class="video-part-container">
            <h2 class="reviews-container-title">Promo Video</h2>
            <iframe  src="https://www.youtube.com/embed/HIo1lIAl810" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>
<div class="our-client">
    <div class="container">
        <div class="our-client-container">
            <h2 class="reviews-container-title">OUR CLIENTS</h2>
            <div class="swiper-container-3">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
      
<?php 
$posts = get_posts( array(
   'numberposts' => -1,
    'category_name'    => 'Clients',
    'orderby'     => 'date',
    'order'       => 'ASC',
     'post_type'   => 'post',
     'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
    setup_postdata($post);
    ?>
        <div class="swiper-slide">
        <div class="client-photo">
            <img src="<?php the_field('company_phot'); ?>" alt="">
        </div>    
        </div>

<?php
}

wp_reset_postdata(); // сброс
 ?>
















       
      
       
    </div>
    <!-- If we need pagination -->
   

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev-1"></div>
    <div class="swiper-button-next-1"></div>

   </div>
</div>
       
    </div>
</div>




</main>


<?php get_footer(); ?>