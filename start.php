<?php
elgg_register_plugin_hook_handler('config', 'htmlawed', 'htmlawed_unfiltered');
function htmlawed_unfiltered($hook, $type, $result, $params){
     //if you want to allow all then remove line number 5 and 8
	if(elgg_is_admin_logged_in()){
	$config = array('iframe' => 1, 'script' => 1); 
        return htmLawed($text, $config);
	}
}
