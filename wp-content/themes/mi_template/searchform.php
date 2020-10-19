<!-- The searchform.php template. -->
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
<label>
    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Buscar', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
</label>
<button type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>"> 
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"
        viewBox="0 0 24 24" focusable="false">
            <circle cx="10.5" cy="10.5" r="7.5" />
        <path d="M21 21l-5.2-5.2" />
    </svg>
</button>
</form>