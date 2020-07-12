<?php get_header(); ?>

			<div class="carousel">

<?php $carousel_query = new WP_Query('posts_per_page=3'); ?>
<?php while ($carousel_query->have_posts()) : $carousel_query->the_post(); ?>

                <div class="carousel-image" style="background-image: linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.6)), url('<?php the_post_thumbnail_url(); ?>');background-position:center;background-size:cover;">
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

<?php endwhile; ?>

                <span class="fa fa-chevron-right" id="carousel-next" onclick="plusSlides(-1)"></span>
                <span class="fa fa-chevron-left" id="carousel-previous" onclick="plusSlides(1)"></span>

                <img src="<?php echo get_template_directory_uri(); ?>/img/bottom.svg" class="bottom-image">

            </div>

            <div class="container" >

<?php get_search_form(); ?>

                <h2>Blog</h2>
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
	
<?php endif; ?>

                    

                </div>


			<?php pagination(); ?>
                    

            </div>

<?php get_footer(); ?>