<?php
/*
Plugin Name: DamarFm.Com AAc+ Flash Player
Plugin URI: http://www.damarfm.com/
Description: DamarFm AAC+ Flash Player
Version: 1.1
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

 <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="300" height="236" id="MainTimeline" align="middle">
<param name="allowScriptAccess" value="sameDomain" />
<param name="allowFullScreen" value="false" />
<param name="movie" value="damaraacp_wp.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#141414" />
<embed src="damaraacp_wp.swf" quality="high" bgcolor="#141414" width="300" height="236" name="wpembed" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>


        <?php echo $after_widget; ?>
<?php
}
register_sidebar_widget('DamarFm.Com Player', 'widget_DamarFm_Com');
?>