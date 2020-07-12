<?php get_header(); ?>

            <div class="container">

<?php get_search_form(); ?>

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                <h2>Contato</h2>

                <span class="fa fa-minus blue"></span>

				<br>
				<br>


                <div class="text">
                    
                    <form method="post">

                        <input type="text" placeholder="Nome" >
                        <input type="email" placeholder="Email" >
                        <input type="text" placeholder="Assunto" >
                        <textarea placeholder="Mensagem"></textarea>
                        <button>Enviar</button>

                    </form>

                </div> 


				<?php endwhile?>
						
					<?php else: ?>
						
					<?php endif; ?>

            </div>

<?php get_footer(); ?>