<?php $sq = get_search_query() ? get_search_query() : __( 'खोजि गर्नुहोस...', 'government-school' ) ?>
<form method="get" class="search-form" action="<?php echo home_url() ?>" >
  <fieldset>
    <input type="search" name="s" placeholder="<?php echo $sq ?>" value="<?php echo get_search_query() ?>" />
    <button type="submit"><span class="icon-magnifier"></span><?php _e( 'खोजि', 'government-school' ) ?></button>
  </fieldset>
</form>
