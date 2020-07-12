<form class="search-box" id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" id="search-input" placeholder="O que você está procurando?" name="s"  value="<?php echo get_search_query(); ?>">
    <button id="search-button">
        <span class="fa fa-search"></span>
    </button>
</form>