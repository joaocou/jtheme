<!DOCTYPE html>
    <html lang="pt-Br">
		<head>
            <title><?php wp_title(''); ?></title>

            <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
            <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
            
			<meta name="viewport" content="width=device-width, initial-scale=1.0">

			<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
			<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

        </head>
        <body>

            <header>
                <h1>JTheme</h1>
            </header>


            <div class="container">
            
                <h2>Erro 404!</h2>
                <p>Parece que a página que você está procurando não existe.</p>
                <span class="fa fa-minus blue"></span>

            </div>

        </body>
    </html>