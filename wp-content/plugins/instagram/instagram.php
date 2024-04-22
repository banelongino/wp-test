<?php
/*
Plugin Name: Other User Instagram Feed
Description: Display posts from another user's public Instagram account.
Version: 1.0
Author: Your Name
*/

// Shortcode callback function to display Instagram feed
function display_other_user_instagram_feed($atts) {
    // Fetch posts from the other user's Instagram account (replace with your own implementation)
    $posts = fetch_other_user_instagram_posts();

    // Display posts
    $output = '<div class="instagram-feed">';
    foreach ($posts as $post) {
        $output .= '<div class="instagram-post">';
        $output .= '<a href="' . $post['permalink'] . '" target="_blank">';
        $output .= '<img src="' . $post['media_url'] . '" alt="Instagram Post">';
        $output .= '</a>';
        $output .= '</div>';
    }
    $output .= '</div>';

    return $output;
}
add_shortcode('other_user_instagram_feed', 'display_other_user_instagram_feed');
add_action( 'admin_menu', 'extra_post_info_menu' );  

function extra_post_info_menu(){    
	$page_title = 'WordPress Extra Post Info';   
	$menu_title = 'Extra Post Info';   
	$capability = 'manage_options';   
	$menu_slug  = 'extra-post-info';   
	$function   = 'extra_post_info_page';   
	$icon_url   = 'dashicons-media-code';   
	$position   = 4;    
	add_menu_page( $page_title,                  $menu_title,                   $capability,                   $menu_slug,                   $function,                   $icon_url,                   $position ); 
} 

// Function to fetch posts from another user's Instagram account (replace with your own implementation)
function fetch_other_user_instagram_posts() {
    // Your Instagram API integration code goes here
    // Use the Instagram Basic Display API to fetch posts from the other user's account
    // Make sure to handle error cases and return an array of posts with 'permalink' and 'media_url' for each post
    $posts = array(
        array(
            'permalink' => 'https://www.instagram.com/p/ABC123/',
            'media_url' => 'https://via.placeholder.com/150'
        ),
        // Add more posts as needed
    );

    return $posts;
}