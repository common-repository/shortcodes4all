<?php 
/*-----------------------------------------------------------------------------------*/
/*	Column Shortcodes
/*-----------------------------------------------------------------------------------*/
////////////////////////////////////////////////////////////////////////////
//Full
function mm_one_full( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'title'     	 => ''
		), $atts));
	$out = '<div class="one_full"><h3>'.$title.'</h3>'.do_shortcode($content).'</div>';
    return $out;
}

////////////////////////////////////////////////////////////////////////////
//Half
function mm_one_half( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'title'     	 => ''
		), $atts));
	$out = '<div class="one_half"><h3>'.$title.'</h3>'.do_shortcode($content).'</div>';
    return $out;
}


function mm_one_half_last( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'title'     	 => ''
		), $atts));
	$out = '<div class="one_half column-last"><h3>'.$title.'</h3>'.do_shortcode($content).'</div><div class="clear"></div>';
    return $out;
}


///////////////////////////////////////////////////////////////////////////
//Third
function mm_one_third( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'title'     	 => ''
		), $atts));
	$out = '<div class="one_third"><h3>'.$title.'</h3>'.do_shortcode($content).'</div>';
    return $out;
}


function mm_one_third_last( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'title'     	 => ''
		), $atts));
	$out = '<div class="one_third column-last"><h3>'.$title.'</h3>'.do_shortcode($content).'</div><div class="clear"></div>';
    return $out;
}


function mm_two_third( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'title'     	 => ''
		), $atts));
	$out = '<div class="two_third"><h3>'.$title.'</h3>'.do_shortcode($content).'</div>';
    return $out;
}


function mm_two_third_last( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'title'     	 => ''
		), $atts));
	$out = '<div class="two_third column-last"><h3>'.$title.'</h3>'.do_shortcode($content).'</div><div class="clear"></div>';
    return $out;
}


////////////////////////////////////////////////////////////////////////////
//Fourth
function mm_one_fourth( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'title'     	 => ''
		), $atts));
	$out = '<div class="one_fourth"><h3>'.$title.'</h3>'.do_shortcode($content).'</div>';
    return $out;
}


function mm_one_fourth_last( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'title'     	 => ''
		), $atts));
	$out = '<div class="one_fourth column-last"><h3>'.$title.'</h3>'.do_shortcode($content).'</div><div class="clear"></div>';
    return $out;
}


function mm_three_fourth( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'title'     	 => ''
		), $atts));
	$out = '<div class="three_fourth"><h3>'.$title.'</h3>'.do_shortcode($content).'</div>';
    return $out;
}


function mm_three_fourth_last( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'title'     	 => ''
		), $atts));
	$out = '<div class="three_fourth column-last"><h3>'.$title.'</h3>'.do_shortcode($content).'</div><div class="clear"></div>';
    return $out;
}


////////////////////////////////////////////////////////////////////////////
//Fifth
function mm_one_fifth( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'title'     	 => ''
		), $atts));
	$out = '<div class="one_fifth"><h3>'.$title.'</h3>'.do_shortcode($content).'</div>';
    return $out;
}


function mm_one_fifth_last( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'title'     	 => ''
		), $atts));
	$out = '<div class="one_fifth column-last"><h3>'.$title.'</h3>'.do_shortcode($content).'</div><div class="clear"></div>';
    return $out;
}


function mm_two_fifth( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'title'     	 => ''
		), $atts));
	$out = '<div class="two_fifth"><h3>'.$title.'</h3>'.do_shortcode($content).'</div>';
    return $out;
}


function mm_two_fifth_last( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'title'     	 => ''
		), $atts));
	$out = '<div class="two_fifth column-last"><h3>'.$title.'</h3>'.do_shortcode($content).'</div><div class="clear"></div>';
    return $out;
}


function mm_three_fifth( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'title'     	 => ''
		), $atts));
	$out = '<div class="three_fifth"><h3>'.$title.'</h3>'.do_shortcode($content).'</div>';
    return $out;
}


function mm_three_fifth_last( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'title'     	 => ''
		), $atts));
	$out = '<div class="three_fifth column-last"><h3>'.$title.'</h3>'.do_shortcode($content).'</div><div class="clear"></div>';
    return $out;
}


function mm_fourth_fifth( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'title'     	 => ''
		), $atts));
	$out = '<div class="four_fifth"><h3>'.$title.'</h3>'.do_shortcode($content).'</div>';
    return $out;
}


function mm_fourth_fifth_last( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'title'     	 => ''
		), $atts));
	$out = '<div class="four_fifth column-last"><h3>'.$title.'</h3>'.do_shortcode($content).'</div><div class="clear"></div>';
    return $out;
}


//////////////////////////////////////////////////////////////////////////
//sixth
function mm_one_sixth( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'title'     	 => ''
		), $atts));
	$out = '<div class="one_sixth"><h3>'.$title.'</h3>'.do_shortcode($content).'</div>';
    return $out;
}


function mm_one_sixth_last( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'title'     	 => ''
		), $atts));
	$out = '<div class="one_sixth column-last"><h3>'.$title.'</h3>'.do_shortcode($content).'</div><div class="clear"></div>';
    return $out;
}

function mm_five_sixth( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'title'     	 => ''
		), $atts));
	$out = '<div class="five_sixth"><h3>'.$title.'</h3>'.do_shortcode($content).'</div>';
    return $out;
}

function mm_five_sixth_last( $atts, $content = null ) {
    extract(shortcode_atts(array(
		'title'     	 => ''
		), $atts));
	$out = '<div class="five_sixth column-last"><h3>'.$title.'</h3>'.do_shortcode($content).'</div><div class="clear"></div>';
    return $out;
}
?>