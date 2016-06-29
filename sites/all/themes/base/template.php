<?

/** 
 * @file
 * template.php for Gallery Base theme.
 * 
 * Implements preprocess and hook alter functions in this file.
 */
 
 
/**
 * Preprocess functions for page.tpl.php.
 */
function base_preprocess_page(&$vars){

}
 

/**
 * Preprocess functions for node.tpl.php.
 */
 
function base_preprocess_node(&$vars){
	$node = $vars['node'];
	$options = array('absolute' => TRUE);
	$nid = $vars['vid']; // Node ID
	$url = url('node/' . $nid, $options);
	
	$vars['theme_hook_suggestions'][] = 'node__' . $vars['view_mode'];
	$vars['theme_hook_suggestions'][] = 'node__' . $vars['type'] . '__' . $vars['view_mode'];


	// GENERAL VARS ====================================================
	$vars['body'] = render($vars['content']['body']);
	$vars['created'] = format_date($vars['created'], 'custom', "n/j/y");
	$vars['sections'] = render($vars['content']['field_section']);
	$vars['tags'] =  render($vars['content']['field_tags']);
	$vars['service_links'] = render($vars['content']['service_links']);
	$vars['video'] = render($vars['content']['field_video_url']);
	$vars['cover_image'] = render($vars['content']['field_cover_image']);
	$vars['path'] = $url;

	$vars['sub_title'] = render($vars['content']['field_sub_title']);
	$vars['type'] = render($vars['content']['field_type']);
	$vars['pub'] = $vars['field_publication'][0]['value'];
	$vars['excerpt'] = render($vars['content']['field_excerpt']);

	if($vars['view_mode'] == 'teaser'){
		$vars['title'] = l(html_entity_decode($vars['title']), $url, array('html' => TRUE));
	}
	
	//kpr($vars);
}

// Renders image with a given image style
function render_image($path, $style = 'default', $alt){
	$image_style = array( 'style_name' => $style, 'path' => $path, 'alt' => $alt);
	return theme('image_style', $image_style);
};


