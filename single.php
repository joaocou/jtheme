<?php get_header(); ?>

            <div class="container">

<?php get_search_form(); ?>

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="article-header" style="background-image: linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.6)), url('<?php the_post_thumbnail_url(); ?>');background-position:center;background-size:cover;">
                    <?php 

                        $post_tags = get_the_tags();

                        if ($post_tags) {
                            foreach( $post_tags as $tag ) {
                                echo '<span class="badge">'. $tag->name . '</span>'; 
                            }
                        }
                                                
                    ?>
                </div>
                
                <h2><?php the_title(); ?></h2>
                <p><span class="fa fa-calendar-o"></span> <?php the_time('d/M/Y') ?> | <span class="fa fa-clock-o"></span> <?php the_time('H:i') ?></p>
                
                <span class="fa fa-minus blue"></span>

                <div class="text">
                    <?php the_content(); ?>
                </div> 


                <div class="author">
                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
                    <div>
                        <h4><?php the_author() ?></h4>
                        <span class="fa fa-minus blue"></span>
                        <p><?php echo the_author_description(); ?></p>
                    </div>
                </div>

                <?php comments_template(); ?>

                <?php endwhile?>
						
					<?php else: ?>
						
					<?php endif; ?>

            </div>

<?php get_footer(); ?>