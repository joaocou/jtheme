			<div class="sub-footer">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Rodapé') ) : ?><?php endif; ?>
            </div>
            <footer>
                &copy; 2020 - JTheme
				<?php wp_footer(); ?>
            </footer>

			<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
        </body>
    </html>