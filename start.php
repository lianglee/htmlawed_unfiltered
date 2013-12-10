<?php
elgg_register_plugin_hook_handler('config', 'htmlawed', 'htmlawed_unfiltered');
function htmlawed_unfiltered($hook, $type, $result, $params){
	if(elgg_in_context('blog')){
	$config = array('iframe' => 1, 'script' => 1); 
    return htmLawed($text, $config); 
	}
}
