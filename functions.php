<?php 

add_action( 'wp_enqueue_scripts', 'my_enqueue_assets' ); 

function my_enqueue_assets() { 

    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' ); 

} 

function my_added_social_icons($kkoptions) {
	global $themename, $shortname;
	
	$open_social_new_tab = array( "name" =>esc_html__( "Open Social URLs in New Tab", $themename ),
                   "id" => $shortname . "_show_in_newtab",
                   "type" => "checkbox",
                   "std" => "off",
                   "desc" =>esc_html__( "Set to ON to have social URLs open in new tab. ", $themename ) );
				   
	$replace_array_newtab = array ( $open_social_new_tab );
	
	$show_instagram_icon = array( "name" =>esc_html__( "Show Instagram Icon", $themename ),
                   "id" => $shortname . "_show_instagram_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the Instagram Icon on your header or footer. ", $themename ) );
	$show_pinterest_icon = array( "name" =>esc_html__( "Show Pinterest Icon", $themename ),
                   "id" => $shortname . "_show_pinterest_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the Pinterest Icon on your header or footer. ", $themename ) );
	$show_tumblr_icon = array( "name" =>esc_html__( "Show Tumblr Icon", $themename ),
                   "id" => $shortname . "_show_tumblr_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the Tumblr Icon on your header or footer. ", $themename ) );
	$show_linkedin_icon = array( "name" =>esc_html__( "Show LinkedIn Icon", $themename ),
                   "id" => $shortname . "_show_linkedin_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the LinkedIn Icon on your header or footer. ", $themename ) );
	$show_skype_icon = array( "name" =>esc_html__( "Show Skype Icon", $themename ),
                   "id" => $shortname . "_show_skype_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the Skype Icon on your header or footer. ", $themename ) );
      $show_github_icon = array( "name" =>esc_html__( "Show Github Icon", $themename ),
                   "id" => $shortname . "_show_github_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the Github Icon on your header or footer. ", $themename ) );
	$show_youtube_icon = array( "name" =>esc_html__( "Show Youtube Icon", $themename ),
                   "id" => $shortname . "_show_youtube_icon",
                   "type" => "checkbox2",
                   "std" => "on",
                   "desc" =>esc_html__( "Here you can choose to display the Youtube Icon on your header or footer. ", $themename ) );
				   
	$repl_array_opt = array( $show_instagram_icon,
							$show_pinterest_icon,
							$show_tumblr_icon,
							$show_linkedin_icon,
							$show_skype_icon,
                                          $show_github_icon,
							$show_youtube_icon,
							);
	
	$show_instagram_url =array( "name" =>esc_html__( "Instagram Profile Url", $themename ),
                   "id" => $shortname . "_instagram_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
				   "desc" =>esc_html__( "Enter the URL of your Instagram Profile. ", $themename ) );
	$show_pinterest_url =array( "name" =>esc_html__( "Pinterest Profile Url", $themename ),
                   "id" => $shortname . "_pinterest_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
				   "desc" =>esc_html__( "Enter the URL of your Pinterest Profile. ", $themename ) );
	$show_tumblr_url =array( "name" =>esc_html__( "Tumblr Profile Url", $themename ),
                   "id" => $shortname . "_tumblr_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
				   "desc" =>esc_html__( "Enter the URL of your Tumblr Profile. ", $themename ) );
	$show_linkedin_url =array( "name" =>esc_html__( "LinkedIn Profile Url", $themename ),
                   "id" => $shortname . "_linkedin_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
				   "desc" =>esc_html__( "Enter the URL of your LinkedIn Profile. ", $themename ) );
	$show_skype_url =array( "name" =>esc_html__( "Skype Profile Url", $themename ),
                   "id" => $shortname . "_skype_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
				   "desc" =>esc_html__( "Enter the URL of your Skype Profile. ", $themename ) );
      $show_github_url =array( "name" =>esc_html__( "Github Profile Url", $themename ),
                   "id" => $shortname . "_github_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
                           "desc" =>esc_html__( "Enter the URL of your Github Profile. ", $themename ) );
	$show_youtube_url =array( "name" =>esc_html__( "Youtube Profile Url", $themename ),
                   "id" => $shortname . "_youtube_url",
                   "std" => "#",
                   "type" => "text",
                   "validation_type" => "url",
				   "desc" =>esc_html__( "Enter the URL of your Youtube Profile. ", $themename ) );

			   
	$repl_array_url = array( $show_instagram_url,
							$show_pinterest_url,
							$show_tumblr_url,
							$show_linkedin_url,
							$show_skype_url,
                                          $show_github_url,
							$show_youtube_url,
							);


	$srch_key = array_column($kkoptions, 'id');
	
	$key = array_search('divi_show_facebook_icon', $srch_key);
	array_splice($kkoptions, $key + 6, 0, $replace_array_newtab);
	
	$key = array_search('divi_show_google_icon', $srch_key);
	array_splice($kkoptions, $key + 8, 0, $repl_array_opt);

	$key = array_search('divi_rss_url', $srch_key);
	array_splice($kkoptions, $key + 17, 0, $repl_array_url);
	
	//print_r($kkoptions);

	return $kkoptions;
}
add_filter('et_epanel_layout_data', 'my_added_social_icons', 99);


// Remove the Divi Projects post type
add_filter( 'et_project_posttype_args', 'mytheme_et_project_posttype_args', 10, 1 );
function mytheme_et_project_posttype_args( $args ) {
      return array_merge( $args, array(
            'public'              => false,
            'exclude_from_search' => false,
            'publicly_queryable'  => false,
            'show_in_nav_menus'   => false,
            'show_ui'             => false
      ));
}

define( 'DDPL_DOMAIN', 'my-domain' ); // translation domain
require_once( 'vendor/divi-disable-premade-layouts/divi-disable-premade-layouts.php' ); // Disable premade Divi layouts

?>