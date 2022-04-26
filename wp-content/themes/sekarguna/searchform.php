<?php

/**
 * Template for displaying search forms in Custom Theme
 *
 * @package WordPress
 * @subpackage Cusotm Theme
 * @since 1.0
 * @version 1.0
 */

?>


<form role="search" action="<?php echo esc_url(home_url('/')); ?>" method="GET">
  <div class="input-field primary search">
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
    <label class="show-sm-up" for="search">Search product, outlet or consultation...</label><label class="show-xs-down" for="search">Search...</label>
  </div>
  <div class="action">
    <button type="submit" class="waves-effect btn secondary button">
      <i class="material-icons icon show-sm-down">search</i><span class="show-md-up">search</span>
    </button>
  </div>
</form>