<?php get_header(); ?>

            <div class="container" >

<?php get_search_form(); ?>

                <h2>Pesquisa</h2>
                <p><?php echo get_search_query(); ?></p>
                <span class="fa fa-minus blue"></span>

				<br>
				<br>

                <div class="row">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


                    <div class="article-box" style="background-image: linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.6)), url('<?php the_post_thumbnail_url(); ?>');background-position:center;background-size:cover;">
                        <div>
                            <?php 

                            $post_tags = get_the_tags();

                            if ($post_tags) {
                                foreach( $post_tags as $tag ) {
                                    echo '<span class="badge">'. $tag->name . '</span>'; 
                                }
                            }
                                                        
                            ?>
                            <p><span class="fa fa-calendar-o"></span> <?php the_time('d/M/Y') ?> | <span class="fa fa-clock-o"></span> <?php the_time('H:i') ?></p> 
                            <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                        </div>
                    </div>


<?php endwhile?>
    
<?php else: ?>

                		<p>Nenhum resultado obtido com a busca.</p>
						
<?php endif; ?>

                    

                </div>


                <?php pagination(); ?>
                    

            </div>

<?php get_footer(); ?>	