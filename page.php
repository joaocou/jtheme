<?php get_header(); ?>

            <div class="container">

<?php get_search_form(); ?>

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                <h2><?php the_title(); ?></h2>

                <span class="fa fa-minus blue"></span>

				<br>
				<br>


                <div class="text">
                    <?php the_content(); ?>
                </div> 


				<?php endwhile?>
						
					<?php else: ?>
						
					<?php endif; ?>

            </div>

<?php get_footer(); ?>