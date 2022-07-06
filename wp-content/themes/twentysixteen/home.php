<?php
/*
Template name: homepage template
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
	    <div class="contain">
	        <div class="row">
	        
	    <?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );
			

			// End the loop.
		endwhile;
		?>
		</div>
<!--Displaying flat category--->
<div class="row property-block">
        <?php
            global $post;

            $myflat = get_posts( [
	            'numberposts' => 6,
	            'post_type'   => 'property',
	            'tax_query' => [
		            [
			            'taxonomy' => 'property_type',
			            'field'    => 'flat',
			            'terms'    => [ 4 ],
		            ]
	            ],
	            'orderby'     => 'date',
	            'order'       => 'ASC',
            ] );

            foreach( $myflat as $post ){
	            setup_postdata( $post );
	    ?>
	    
	    <div class="col-md-2">
	        <div class="article-elem">
		        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		        <div><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $id, 'thumbnail', array('class' => 'alignleft') ); ?></a></div>
		        <p class="custom-catalog">Площадь: <?php the_field('square'); ?> м²</p>
				<p class="custom-catalog">Стоимость: <?php the_field('price'); ?> ₽</p>
				<p class="custom-catalog">Этаж: <?php the_field('floor'); ?></p>
		    </div>
	    </div>
	
	    <?php
            }
            wp_reset_postdata();
        ?>
    </div>
<!--End displaying flat category--->   

<!--Displaying office category---> 
<div class="row property-block">
<?php
            global $post;

            $myoffice = get_posts( [
	            'numberposts' => 6,
	            'post_type'   => 'property',
	            'tax_query' => [
		            [
			            'taxonomy' => 'property_type',
			            'field'    => 'house',
			            'terms'    => [ 3 ],
		            ]
	            ],
	            'orderby'     => 'date',
	            'order'       => 'ASC',
            ] );

            foreach( $myoffice as $post ){
	            setup_postdata( $post );
	    ?>
	
	    <div class="col-md-2">
	        <div class="article-elem">
		        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		        <div><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $id, 'thumbnail', array('class' => 'alignleft') ); ?></a></div>
		        <p class="custom-catalog">Площадь: <?php the_field('square'); ?> м²</p>
				<p class="custom-catalog">Стоимость: <?php the_field('price'); ?> ₽</p>
				<p class="custom-catalog">Этаж: <?php the_field('floor'); ?></p>
		    </div>
	    </div>
	
	    <?php
            }
            wp_reset_postdata();
        ?>
    </div>   
<!--End displaying office category--->

<!--Displaying house category--->
<div class="row property-block">
<?php
            global $post;

            $myhouse = get_posts( [
	            'numberposts' => 6,
	            'post_type'   => 'property',
	            'tax_query' => [
		            [
			            'taxonomy' => 'property_type',
			            'field'    => 'office',
			            'terms'    => [ 5 ],
		            ]
	            ],
	            'orderby'     => 'date',
	            'order'       => 'ASC',
            ] );

            foreach( $myhouse as $post ){
	            setup_postdata( $post );
	    ?>
	
	    <div class="col-md-2">
	        <div class="article-elem">
		        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		        <div><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $id, 'thumbnail', array('class' => 'alignleft') ); ?></a></div>
		        <p class="custom-catalog">Площадь: <?php the_field('square'); ?> м²</p>
				<p class="custom-catalog">Стоимость: <?php the_field('price'); ?> ₽</p>
				<p class="custom-catalog">Этаж: <?php the_field('floor'); ?></p>
		    </div>
	    </div>
	
	    <?php
            }
            wp_reset_postdata();
        ?>
</div>
<!--End displaying house category--->
            
		
		</div>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>