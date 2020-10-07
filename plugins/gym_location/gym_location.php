<?php
    /*
        Plugin Name: Gym Fitness - Location with Leaflet
        Plugin URI: 
        Description: Creates a Shortcode to display the location
        Version: 1.0
        Author: Juan De la torre
        Author URI: http://twitter.com/JuanDevWP
        Text Domain: gymfitness
    */

if(!defined('ABSPATH')) die();

// Shortcode API
function gym_location_shortcode() { 
        $location = get_field('location');
    ?>
    
    <div class="location">
        <input type="hidden" id="lat" value="<?php echo $location['lat']; ?>" />
        <input type="hidden" id="lng" value="<?php echo $location['lng']; ?>" />
        <input type="hidden" id="address" value="<?php echo $location['address']; ?>" />

        <div id="map"></div>
    </div>
<?php 
}


function gym_location_scripts() {

    if(is_page('contact-us') ): 
        
        wp_enqueue_style('leafcss', 'https://unpkg.com/leaflet@1.5.1/dist/leaflet.css', array(), '1.5.1');
        wp_enqueue_script('leaftjs', 'https://unpkg.com/leaflet@1.5.1/dist/leaflet.js', array(), '1.5.1', true );

        
        wp_enqueue_script('gym-leaflet', plugins_url('/js/gym-leaf.js', __FILE__), array('leaftjs'), '1.0.0', true  );
    endif;
}

// Hooks
add_shortcode('gym_location', 'gym_location_shortcode'); // [gym_location]

add_action('wp_enqueue_scripts', 'gym_location_scripts');