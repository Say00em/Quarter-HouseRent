<?php 
    function theme_enqueue_styles_scripts() {
        // Enqueue Styles
        // wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.0.0');
        // wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.0.0');
        wp_enqueue_style('font-icons', get_template_directory_uri() . '/assets/css/font-icons.css');
        wp_enqueue_style('plugins', get_template_directory_uri() . '/assets/css/plugins.css');
        wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
        wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');
    }
    add_action('wp_enqueue_scripts', 'theme_enqueue_styles_scripts');


    function theme_add_meta_tags() {
        ?>
        <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="shortcut icon" type="image/x-icon" />
        <?php
    }
    add_action('wp_head', 'theme_add_meta_tags');


    function theme_enqueue_footer_assets() {
        // Enqueue scripts
        // wp_enqueue_script('jquery');
        wp_enqueue_script('plugins', get_template_directory_uri() . '/assets/js/plugins.js', array(), null, true);
        wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
    }
    add_action('wp_enqueue_scripts', 'theme_enqueue_footer_assets');



    // Add Theme Support for Post Thumbnails
    function theme_setup() {
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'theme_setup');


    // Register Custom Post Type for Banners
function create_slide_post_type(){
    $labels = array(
        'name'                  => _x('Slides', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Slide', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Slides', 'text_domain'),
        'name_admin_bar'        => __('Slide', 'text_domain'),
        'all_items'             => __('All Slides', 'text_domain'),
        'add_new_item'          => __('Add New Slide', 'text_domain'),
        'add_new'               => __('Add New', 'text_domain'),
        'new_item'              => __('New Slide', 'text_domain'),
        'edit_item'             => __('Edit Slide', 'text_domain'),
        'update_item'           => __('Update Slide', 'text_domain'),
        'view_item'             => __('View Slide', 'text_domain'),
    );
    $args = array(
        'label'                 => __('Slide', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'), // Support title, content, and featured image
        'public'                => true,
        'has_archive'           => true,
        'menu_icon'             => 'dashicons-cover-image', // Custom icon in the menu
    );
    register_post_type( 'Slide', $args );
}
add_action( 'init', 'create_slide_post_type' );


    function create_agents_post_type(){
        $labels = array(
            'name'                  => _x('Agents', 'Post Type General Name', 'text_domain'),
            'singular_name'         => _x('Agent', 'Post Type Singular Name', 'text_domain'),
            'menu_name'             => __('Agents', 'text_domain'),
            'name_admin_bar'        => __('Agent', 'text_domain'),
            'all_items'             => __('All Agents', 'text_domain'),
            'add_new_item'          => __('Add New Agent', 'text_domain'),
            'add_new'               => __('Add New', 'text_domain'),
            'new_item'              => __('New Agent', 'text_domain'),
            'edit_item'             => __('Edit Agent', 'text_domain'),
            'update_item'           => __('Update Agent', 'text_domain'),
            'view_item'             => __('View Agent', 'text_domain'),
        );
        $args = array(
            'label'                 => __('Agent', 'text_domain'),
            'labels'                => $labels,
            'supports'              => array('title', 'editor', 'thumbnail'), // Support title, content, and featured image
            'public'                => true,
            'has_archive'           => true,
            'menu_icon'             => 'dashicons-businessperson', // Custom icon in the menu
        );
        register_post_type('Agent', $args);
    }
    add_action('init', 'create_agents_post_type', 0);
    
    
    
    // Add Meta Boxes for Teams Details
    function add_agent_meta_boxes() {
        add_meta_box(
            'agent_details', // Unique ID for the meta box
            'agent Details', // Box title
            'agent_meta_box_callback', // Callback function to display fields
            'Agent', // Post type where the box will appear
            'normal',
            'high'
        );
    }
    add_action('add_meta_boxes', 'add_agent_meta_boxes');
    
    
    function agent_meta_box_callback($post) {
        // Retrieve the current values for each field
        $member_desig = get_post_meta($post->ID, '_member_desig', true);
        ?>
        <p>
            <label for="member_desig">Designation:</label>
            <input type="text" name="member_desig" id="member_desig" value="<?php echo esc_attr($member_desig); ?>" class="widefat">
        </p>
        <?php
    }
    
    // Save the meta box values
    function save_agent_meta_box($post_id) {
        if (array_key_exists('member_desig', $_POST)) {
            update_post_meta($post_id, '_member_desig', sanitize_text_field($_POST['member_desig']));
        }
    }
    add_action('save_post', 'save_agent_meta_box');    



    // Register Custom Post Type for Testimonials
    function create_feedback_post_type() {
        register_post_type('feedback',
            array(
                'labels' => array(
                    'name' => __('Feedbacks', 'text_domain'),
                    'singular_name' => __('Feedback', 'text_domain'),
                    'add_new_item' => __('Add New Feedback', 'text_domain'),
                    'edit_item' => __('Edit Feedback'),
                    'new_item' => __('New Feedback', 'text_domain'),
                    'view_item' => __('View Feedback', 'text_domain'),
                    'not_found' => __('No Feedbacks found'),
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => 'feedback'),
                'supports' => array('title', 'editor', 'thumbnail'),
                'menu_icon' => 'dashicons-format-quote',
            )
        );
    }
    add_action('init', 'create_feedback_post_type');

    // Add Meta Boxes for Feedbacks
    function feedback_add_meta_boxes() {
        add_meta_box(
            'feedback_meta_box', // ID
            'Feedback Details', // Title
            'feedback_meta_box_callback', // Callback function
            'feedback', // Post type
            'normal', // Context
            'high' // Priority
        );
    }
    add_action('add_meta_boxes', 'feedback_add_meta_boxes');

    // Callback function for feedback meta box
    function feedback_meta_box_callback($post) {
        // Nonce field for security
        wp_nonce_field('save_feedback_meta', 'feedback_meta_nonce');

        $client_name = get_post_meta($post->ID, '_client_name', true);
        $client_position = get_post_meta($post->ID, '_client_position', true);

        ?>
        <p>
            <label for="client_name">Client Name:</label>
            <input type="text" name="client_name" id="client_name" value="<?php echo esc_attr($client_name); ?>" class="widefat">
        </p>
        <p>
            <label for="client_position">Client Position:</label>
            <input type="text" name="client_position" id="client_position" value="<?php echo esc_attr($client_position); ?>" class="widefat">
        </p>
        <?php
    }

    // Save Meta Box Data
    function save_feedback_meta($post_id) {
        // Verify nonce for security
        if (!isset($_POST['feedback_meta_nonce']) || !wp_verify_nonce($_POST['feedback_meta_nonce'], 'save_feedback_meta')) {
            return;
        }

        // Save client name
        if (isset($_POST['client_name'])) {
            update_post_meta($post_id, '_client_name', sanitize_text_field($_POST['client_name']));
        }

        // Save client position
        if (isset($_POST['client_position'])) {
            update_post_meta($post_id, '_client_position', sanitize_text_field($_POST['client_position']));
        }
    }
    add_action('save_post', 'save_feedback_meta');




    // Register Custom Post Type for Properties
    function create_propertys_post_type() {
        $labels = array(
            'name'                  => _x('Properties', 'Post Type General Name', 'text_domain'),
            'singular_name'         => _x('Property', 'Post Type Singular Name', 'text_domain'),
            'menu_name'             => __('Properties', 'text_domain'),
            'name_admin_bar'        => __('Property', 'text_domain'),
            'all_items'             => __('All Properties', 'text_domain'),
            'add_new_item'          => __('Add New Property', 'text_domain'),
            'add_new'               => __('Add New', 'text_domain'),
            'new_item'              => __('New Property', 'text_domain'),
            'edit_item'             => __('Edit Property', 'text_domain'),
            'update_item'           => __('Update Property', 'text_domain'),
            'view_item'             => __('View Property', 'text_domain'),
        );
        $args = array(
            'label'                 => __('Property', 'text_domain'),
            'labels'                => $labels,
            'supports'              => array('title', 'editor', 'thumbnail'), // Support title, content, and featured image
            'public'                => true,
            'has_archive'           => true,
            'rewrite'               => array('slug' => 'property'), // Custom slug for properties
            'menu_icon'             => 'dashicons-admin-multisite', // Custom icon in the menu
        );
        register_post_type('property', $args);
    }
    add_action('init', 'create_propertys_post_type', 0);

    // Add Meta Boxes for Property Details (including images)
    function add_property_meta_boxes() {
        add_meta_box(
            'property_details',
            'Property Details',
            'property_meta_box_callback',
            'property',
            'normal',
            'high'
        );
    }
    add_action('add_meta_boxes', 'add_property_meta_boxes');

    // Callback function to display meta fields in the property meta box
    function property_meta_box_callback($post) {
        $property_category = get_post_meta($post->ID, '_property_category', true);
        $property_author = get_post_meta($post->ID, '_property_author', true);
        $property_price = get_post_meta($post->ID, '_property_price', true);
        $property_date = get_post_meta($post->ID, '_property_date', true);
        $property_location = get_post_meta($post->ID, '_property_location', true);
        $property_features = get_post_meta($post->ID, '_property_features', true);

        ?>
        <p><label for="property_category">Property's Category:</label>
        <input type="text" name="property_category" id="property_category" value="<?php echo esc_attr($property_category); ?>" class="widefat"></p>

        <p><label for="property_author">Author Name:</label>
        <input type="text" name="property_author" id="property_author" value="<?php echo esc_attr($property_author); ?>" class="widefat"></p>

        <p><label for="property_price">Property Price:</label>
        <input type="text" name="property_price" id="property_price" value="<?php echo esc_attr($property_price); ?>" class="widefat"></p>

        <p><label for="property_date">Property Create Date:</label>
        <input type="text" name="property_date" id="property_date" value="<?php echo esc_attr($property_date); ?>" class="widefat" placeholder="example: Oct 01, 2024"></p>

        <p><label for="property_location">Property Location:</label>
        <input type="text" name="property_location" id="property_location" value="<?php echo esc_attr($property_location); ?>" class="widefat" placeholder="Banani, Dhaka-1213"></p>

        <p><label for="property_features">Property's Features:</label>
        <input type="text" name="property_features" id="property_features" value="<?php echo esc_attr($property_features); ?>" class="widefat" placeholder="3 bed, 3 bath, 2000 sq ft"></p>

        <?php
    }

    // Save the meta box values, including image uploads
    function save_property_meta_box($post_id) {
        if (array_key_exists('property_category', $_POST)) {
            update_post_meta($post_id, '_property_category', sanitize_text_field($_POST['property_category']));
        }
        if (array_key_exists('property_author', $_POST)) {
            update_post_meta($post_id, '_property_author', sanitize_text_field($_POST['property_author']));
        }
        if (array_key_exists('property_price', $_POST)) {
            update_post_meta($post_id, '_property_price', sanitize_text_field($_POST['property_price']));
        }
        if (array_key_exists('property_date', $_POST)) {
            update_post_meta($post_id, '_property_date', sanitize_text_field($_POST['property_date']));
        }
        if (array_key_exists('property_location', $_POST)) {
            update_post_meta($post_id, '_property_location', sanitize_text_field($_POST['property_location']));
        }
        if (array_key_exists('property_features', $_POST)) {
            update_post_meta($post_id, '_property_features', sanitize_text_field($_POST['property_features']));
        }
        add_action('save_post', 'save_property_meta_box');
    }



    // Register Custom Post Type for Blogs
    function create_blogs_post_type(){
        $labels = array(
            'name'                  => _x('Blogs', 'Post Type General Name', 'text_domain'),
            'singular_name'         => _x('Blog', 'Post Type Singular Name', 'text_domain'),
            'menu_name'             => __('Blogs', 'text_domain'),
            'name_admin_bar'        => __('Blog', 'text_domain'),
            'all_items'             => __('All Blogs', 'text_domain'),
            'add_new_item'          => __('Add New Blog', 'text_domain'),
            'add_new'               => __('Add New', 'text_domain'),
            'new_item'              => __('New Blog', 'text_domain'),
            'edit_item'             => __('Edit Blog', 'text_domain'),
            'update_item'           => __('Update Blog', 'text_domain'),
            'view_item'             => __('View Blog', 'text_domain'),
        );
        $args = array(
            'label'                 => __('Blog', 'text_domain'),
            'labels'                => $labels,
            'supports'              => array('title', 'editor', 'thumbnail'), // Support title, content, and featured image
            'public'                => true,
            'has_archive'           => true,
            'rewrite'               => array('slug' => 'Blog'), // Custom slug for the blog posts
            'menu_icon'             => 'dashicons-welcome-write-blog', // Custom icon in the menu
        );
        register_post_type('blog', $args);
    }
    add_action('init', 'create_blogs_post_type', 0);

    // Add Meta Boxes for Blog Details
    function add_blog_meta_boxes() {
        add_meta_box(
            'blog_details', // Unique ID for the meta box
            'blog Details', // Box title
            'blog_meta_box_callback', // Callback function to display fields
            'blog', // Post type where the box will appear
            'normal',
            'high'
        );
    }
    add_action('add_meta_boxes', 'add_blog_meta_boxes');

    function blog_meta_box_callback($post) {
        // Retrieve the current values for each field
        $blog_category = get_post_meta($post->ID, '_blog_category', true);
        $blog_author = get_post_meta($post->ID, '_blog_author', true);
        $blog_date = get_post_meta($post->ID, '_blog_date', true);
        $short_descrp = get_post_meta($post->ID, '_short_descrp', true);
        ?>
        <p>
            <label for="blog_category">BLog's Category:</label>
            <input type="text" name="blog_category" id="blog_category" value="<?php echo esc_attr($blog_category); ?>" class="widefat">
        </p>
        <p>
            <label for="blog_author">Author Name:</label>
            <input type="text" name="blog_author" id="blog_author" value="<?php echo esc_attr($blog_author); ?>" class="widefat">
        </p>
        <p>
            <label for="blog_date">Article's Date:</label>
            <input type="text" name="blog_date" id="blog_date" value="<?php echo esc_attr($blog_date); ?>" class="widefat" placeholder="example: Oct 01, 2024">
        </p>
        <p>
            <label for="short_descrp">Short Description:</label>
            <textarea name="short_descrp" id="short_descrp" class="widefat" rows="5" cols="30" value="<?php echo esc_attr($short_descrp);?>"></textarea>
        </p>
        <?php
    }

    // Save the meta box values
    function save_blog_meta_box($post_id) {
        if (array_key_exists('blog_category', $_POST)) {
            update_post_meta($post_id, '_blog_category', sanitize_text_field($_POST['blog_category']));
        }
        if (array_key_exists('blog_author', $_POST)) {
            update_post_meta($post_id, '_blog_author', sanitize_text_field($_POST['blog_author']));
        }
        if (array_key_exists('blog_date', $_POST)) {
            update_post_meta($post_id, '_blog_date', sanitize_text_field($_POST['blog_date']));
        }
        if (array_key_exists('short_descrp', $_POST)) {
            update_post_meta($post_id, '_short_descrp', sanitize_text_field($_POST['short_descrp']));
        }
    }
    add_action('save_post', 'save_blog_meta_box');




    // Create the contact table
function create_contact_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_submissions'; // Table name with WordPress prefix

    // SQL to create the table
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(100) NOT NULL,
        email varchar(100) NOT NULL,
        subject varchar(200) NOT NULL,
        message text NOT NULL,
        submitted_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    // Include the necessary file to execute dbDelta (which creates tables)
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

// Hook the function to the 'after_switch_theme' action to create the table when the theme is activated
add_action('after_switch_theme', 'create_contact_table');



function handle_contact_form_submission() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['contact_form_nonce'])) {
        
        // Verify nonce for security
        if (!wp_verify_nonce($_POST['contact_form_nonce'], 'submit_contact_form')) {
            die('Nonce verification failed');
        }

        // Check if form data exists
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {

            global $wpdb;
            $table_name = $wpdb->prefix . 'contact_submissions';

            // Sanitize form inputs
            $name = sanitize_text_field($_POST['name']);
            $email = sanitize_email($_POST['email']);
            $phone = sanitize_text_field($_POST['phone']);
            $message = sanitize_textarea_field($_POST['message']);

            // Insert data into the database
            $wpdb->insert(
                $table_name,
                array(
                    'name' => $name,
                    'email' => $email,
                    'subject' => $subject,
                    'message' => $message,
                    'submitted_at' => current_time('mysql')
                )
            );

            if ($wpdb->insert_id) {
                // Redirect or show success message
                echo '<div class="alert alert-success">Thank you for your message. We will be in touch soon!</div>';
            } else {
                echo '<div class="alert alert-danger">There was an issue submitting your message. Please try again later.</div>';
            }
        } else {
            echo '<div class="alert alert-danger">Please fill in all required fields.</div>';
        }
    }
}
add_action('wp', 'handle_contact_form_submission');


// Register the Contact Submissions Menu Page
function register_contact_submissions_menu_page() {
    add_menu_page(
        'Contact Submissions',          // Page title
        'Contact Submissions',          // Menu title
        'manage_options',               // Capability (Only admins can view)
        'contact-submissions',          // Menu slug
        'display_contact_submissions',  // Callback function to show the content
        'dashicons-email-alt',          // Icon
        6                               // Position
    );
}
add_action('admin_menu', 'register_contact_submissions_menu_page');


// Function to Display Contact Form Submissions
function display_contact_submissions() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_submissions';  // Your contact form table

    // Fetching data from the table
    $results = $wpdb->get_results("SELECT * FROM $table_name");

    // Admin page content
    echo '<div class="wrap">';
    echo '<h1>Contact Form Submissions</h1>';

    if ($results) {
        echo '<table class="widefat fixed" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>subject</th>
                    <th>Message</th>
                    <th>Submitted At</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>';

        // Loop through each result and display in table rows
        foreach ($results as $row) {
            echo '<tr>';
            echo '<td>' . esc_html($row->id) . '</td>';
            echo '<td>' . esc_html($row->name) . '</td>';
            echo '<td>' . esc_html($row->email) . '</td>';
            echo '<td>' . esc_html($row->subject) . '</td>';
            echo '<td>' . esc_html($row->message) . '</td>';
            echo '<td>' . esc_html($row->submitted_at) . '</td>';
            echo '<td><a href="' . esc_url(admin_url('admin-post.php')) . '?action=delete_contact_submission&id=' . esc_html($row->id) . '">Delete</a></td>';            
            echo '</tr>';
        }

        echo '</tbody></table>';
    } else {
        echo '<p>No submissions found.</p>';
    }

    echo '</div>';
}

?>