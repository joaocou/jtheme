<?php get_header(); ?>

            <div class="container" >

<?php get_search_form(); ?>

                <h2>Arquivo</h2>
                <p>
<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>
    Arquivo da Categoria "<?php echo single_cat_title(); ?>"
<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
    Arquivo de <?php the_time('j de F de Y'); ?>
<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    Arquivo de <?php the_time('F de Y'); ?>
<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    Arquivo de <?php the_time('Y'); ?>
<?php /* If this is an author archive */ } elseif (is_author()) { ?>
    Arquivo do Autor
<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
    Arquivo do Blog
<?php } ?>
                </p>
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

						<h2>Erro 404!</h2>
                		<p>Nada foi encontrado.</p>
						
<?php endif; ?>

                    

                </div>


                <?php pagination(); ?>           

            </div>

<?php get_footer(); ?>	