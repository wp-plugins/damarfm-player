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

<!-- BEGINS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
<script type="text/javascript" src="https://hosted.muses.org/mrp.js"></script>
<script type="text/javascript">
MRP.insert({
'url':'http://yayin.damarfm.com:8080/mp3',
'lang':'tr',
'codec':'mp3',
'volume':100,
'autoplay':true,
'buffering':5,
'title':'Damar FM',
'welcome':'iyi dinlemeler',
'wmode':'transparent',
'skin':'faredirfare',
'width':269,
'height':52
});
</script>
<!-- ENDS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->


        <?php echo $after_widget; ?>
<?php
}
register_sidebar_widget('DamarFm.Com Player', 'widget_DamarFm_Com');
?>