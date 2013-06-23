<?php
/*
Plugin Name: DamarFm.Com AAc+ Flash Player
Plugin URI: http://www.damarfm.com/
Description: DamarFm AAC+ Flash Player
Version: 1.5
Author: Ilyas Kücük
Author URI: http://www.damarfm.com
*/

//Define plugin directories
define( 'WP_DAMARFM_URL_PLAYER', WP_PLUGIN_URL.'/'.plugin_basename(dirname(__FILE__)) );
define( 'WP_DAMARFM_DIR_PLAYER', WP_PLUGIN_DIR.'/'.plugin_basename(dirname(__FILE__)) );

function widget_DamarFm_Com($args) {
    extract($args);
?>
        <?php echo $before_widget; ?>

<div class="player">
	<script type="text/javascript"><!--
		var config = {
			"defaultLanguage" : "tr",
			"defaultStation" : "all",
			"autoplay" : "true",
			"mode" : "mini"
		}
	//-->
	</script>
	<script type="text/javascript" src="http://yayin.damarfm.com/player.js"></script>
</div>


        <?php echo $after_widget; ?>
<?php
}
register_sidebar_widget('DamarFm.Com Player', 'widget_DamarFm_Com');
?>