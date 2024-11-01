<?php
 /*
Plugin Name: Shortcodes4all
Plugin URI: http://shortcodes.themes4all.com
Description: Enhance your theme with beautiful shortcodes. With Shortcodes4all you can easily create a create buttons, warning boxes, columns, etc.
Version: 1.0.3
Author: Themes4all
Author URI: http://www.themes4all.com
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 3
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.
URL: http://www.gnu.org/licenses/gpl-3.0.html
*/


function make_page(){
    add_action("admin_menu", "add_page");
}
 
// Přidání stránky do menu
function add_page(){
    add_options_page("Shortcodes4all", "Shortcodes4all", "activate_plugins", "shortcodes4all", "show_page");
}
 
// Zobrazení samotné stránky
function show_page(){ ?>
    
    <style>
    ul{
      list-style: circle;
      padding-left: 30px;
    }
    </style>
    <div class="wrap">
        <h2>Shortcodes4all - beautiful shortcodes for your web</h2>
        <div id="dropmessage" class="updated" style="display:none;"></div>
        &nbsp;by <strong>Themes4all.com</strong>
        <div style="float:left;">
    		&nbsp;<a target="_blank" title="Themes4all support" href="http://www.themes4all.com/faq/document/">Support</a>
        | <strong>Shortcodes4all</strong> is developed 
        </div>
        <br><br>
        <div style="width:905px;">
          <div style="float:left;background-color:white;padding: 10px;margin-right:15px;border: 1px solid #ddd;height:130px;margin-bottom:2px;">
          	<div style="width:269px;height:70px;">
          		<h3>Follow us</h3>
          		<em>If you like this plugin and find it useful, follow us on <a target="_blank" title="Follow us on Twitter" href="http://twitter.com/Themes4all">Twitter</a>, <a target="_blank" title="Follow us on Google+" href="https://plus.google.com/+Themes4all/">Google+</a> or <a target="_blank" title="Follow us on Facebook" href="https://www.facebook.com/Themes4all">Facebook</a>.</em>
          	</div>
          </div>
          
          <div style="float:left;background-color:white;border:1px solid #ddd;height:130px;margin-right:35px;">
          	<div style="width:269px;height:70px"> 
          		<a href="http://www.slider4all.com"><img src="<?php echo plugin_dir_url( __FILE__ ); ?>/images/banners/banner2.png" /></a>
          	</div>
          </div>
          
          <div style="float:left;background-color:white;border:1px solid #ddd;height:130px;">
          	<div style="width:269px;height:70px"> 
          		<a href="http://www.themes4all.com"><img src="<?php echo plugin_dir_url( __FILE__ ); ?>/images/banners/banner1.png" /></a>
          	</div>
          	
          </div>
                    
          <div style="clear:both;"></div>
         
<p>Shortcodes are simple commands written directly to the post or page text area. They are enclosed in square brackets – [shortcode]text[/shortcode] – and can have one or more parameters. We have prepared them to make your life easier. You can easily create buttons, warning boxes, columns, etc. using shortcodes. Let me show you some examples, because that is the simplest way to get familiar with them.</p>
             
          <ul>
<li><a href="http://www.themes4all.com/document/column-shortcodes/" target="_blank">Column Shortcodes</a></li>
<li><a href="http://www.themes4all.com/document/content-box-shortcodes/" target="_blank">Content Box Shortcodes</a></li>
<li><a href="http://www.themes4all.com/document/boxes-shortcodes/" target="_blank">Boxes Shortcodes</a></li>
<li><a href="http://www.themes4all.com/document/buttons-shortcodes/" target="_blank">Buttons Shortcodes</a></li>
<li><a href="http://www.themes4all.com/document/toggle-content/" target="_blank">Toggle content</a></li>
<li><a href="http://www.themes4all.com/document/tooltip-text/" target="_blank">Tooltip text</a></li>
<li><a href="http://www.themes4all.com/document/author-information/" target="_blank">Author information</a></li>
<li><a href="http://www.themes4all.com/document/custom-list/" target="_blank">Custom list</a></li>
<li><a href="http://www.themes4all.com/document/testimonials/" target="_blank">Testimonials</a></li>
<li><a href="http://www.themes4all.com/document/tabgroup/" target="_blank">Tabgroup</a></li>
<li><a href="http://www.themes4all.com/document/login-form/" target="_blank">Login form</a></li>
<li><a href="http://www.themes4all.com/document/price-tables/" target="_blank">Price tables</a></li>
<li><a href="http://www.themes4all.com/document/quotations/" target="_blank">Quotations</a></li>
<li><a href="http://www.themes4all.com/document/table/" target="_blank">Table</a></li>

          </ul>

        </div>
    </div>    
    
    
<?php }
 make_page();

add_action( 'wp_enqueue_scripts', 'my_script_load');    

function my_script_load(){
    wp_deregister_style( 'shortcodes4all' );
    wp_register_style('shortcodes4all', plugins_url( 'css/shortcodes4all.css', __FILE__ ));   
    wp_enqueue_style( 'shortcodes4all' );

    wp_register_script( 'jascrsc', plugins_url( 'js/shortcodes4all.js', __FILE__ ) , array( 'jquery' ));  
    wp_enqueue_script( 'jascrsc' );                                                     
}   

include( plugin_dir_path( __FILE__ ) . 'shortcodes4all-others.php');
include( plugin_dir_path( __FILE__ ) . 'shortcodes4all-buttons.php');
include( plugin_dir_path( __FILE__ ) . 'shortcodes4all-boxes.php');		
include( plugin_dir_path( __FILE__ ) . 'shortcodes4all-column.php');		
    









function register_shortcodes(){
add_shortcode('togglecontent','mm_togglecontent');
add_shortcode('tooltip', 'mm_tooltip');
add_shortcode('authorbox', 'mm_author_box');
add_shortcode('customlist', 'mm_customlist');
add_shortcode('testimonials', 'mm_testimonials');
add_shortcode( 'tabgroup', 'jquery_tab_group' );
add_shortcode( 'tab', 'jquery_tab' );
add_shortcode( 'my_tabgroup', 'my_tab_group' );
add_shortcode( 'my_tab', 'my_tab' );
add_shortcode('my_nivo_slider','mm_nivo_slider');
add_shortcode('protected','mm_protected');
add_shortcode('price_table', 'mm_price_tables');
add_shortcode('ok_item', 'mm_ok_item');
add_shortcode('er_item', 'mm_er_item');
add_shortcode('quote', 'mm_quote');
add_shortcode( 'table', 'simple_table' );
add_shortcode('bigbutton','mm_bigbutton');
add_shortcode('smallbutton','mm_smallbutton');
add_shortcode('icobutton','mm_icobutton');
add_shortcode('smallbox_full', 'mm_smallbox_full');
add_shortcode('smallbox_half', 'mm_smallbox_half');
add_shortcode('smallbox_third', 'mm_smallbox_third');
add_shortcode('contbox_full', 'mm_contbox_full');
add_shortcode('contbox_half_last', 'mm_contbox_half_last');
add_shortcode('contbox_half', 'mm_contbox_half');
add_shortcode('contbox_third_last', 'mm_contbox_third_last');
add_shortcode('contbox_third', 'mm_contbox_third');
add_shortcode('one_full', 'mm_one_full');
add_shortcode('one_half', 'mm_one_half');
add_shortcode('one_half_last', 'mm_one_half_last');
add_shortcode('one_third', 'mm_one_third');
add_shortcode('one_third_last', 'mm_one_third_last');
add_shortcode('two_third', 'mm_two_third');
add_shortcode('two_third_last', 'mm_two_third_last');
add_shortcode('one_fourth', 'mm_one_fourth');
add_shortcode('one_fourth_last', 'mm_one_fourth_last');
add_shortcode('three_fourth', 'mm_three_fourth');
add_shortcode('three_fourth_last', 'mm_three_fourth_last');
add_shortcode('one_fifth', 'mm_one_fifth');
add_shortcode('one_fifth_last', 'mm_one_fifth_last');
add_shortcode('two_fifth', 'mm_two_fifth');
add_shortcode('two_fifth_last', 'mm_two_fifth_last');
add_shortcode('three_fifth', 'mm_three_fifth');
add_shortcode('three_fifth_last', 'mm_three_fifth_last');
add_shortcode('fourth_fifth', 'mm_fourth_fifth');
add_shortcode('fourth_fifth_last', 'mm_fourth_fifth_last');
add_shortcode('five_sixth_last', 'mm_five_sixth_last');
add_shortcode('five_sixth', 'mm_five_sixth');
add_shortcode('one_sixth_last', 'mm_one_sixth_last');
add_shortcode('one_sixth', 'mm_one_sixth');
}
add_action( 'init', 'register_shortcodes');

?>