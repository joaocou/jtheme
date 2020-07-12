<!DOCTYPE html>
    <html lang="pt-Br">
        <head>
            <title><?php wp_title(''); ?></title>

            <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/font-awesome-4.7.0/css/font-awesome.min.css">
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
            
			<meta name="viewport" content="width=device-width, initial-scale=1.0">

			<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
			<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

        </head>
		<body>

            <header>
                <h1><a href="<?php get_bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
                <ul>
					<?php wp_list_pages('title_li='); ?>
                </ul>
                <a href="#" class="mobile-nav-open" id="mobile-nav-open" onclick="openNav()">
                    <span class="fa fa-bars"></span>
                </a>

                <a href="#" class="mobile-nav-close" id="mobile-nav-close" onclick="closeNav()">
                    <span class="fa fa-times"></span>
                </a>
            </header>

            <div class="mobile-nav" id="mobile-nav">
                <ul>
					<?php wp_list_pages('title_li='); ?>
                </ul>
            </div>