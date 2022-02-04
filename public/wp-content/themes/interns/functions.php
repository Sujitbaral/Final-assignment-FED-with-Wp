<?php
/**
 * functions
 */
if (! function_exists('intern_theme_setup')) {
    function intern_theme_setup() {
        add_theme_support( 'title-tag' );
        /**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);
        add_theme_support( 'post-thumbnails' );
        add_theme_support('custom-logo' );
        function add_menuclass($ulclass) {
            return preg_replace('/<a /', '<a class="nav-link text-dark"', $ulclass);
         }
         add_filter('wp_nav_menu','add_menuclass');

		set_post_thumbnail_size( 1568, 9999 );
        register_nav_menus(
            // 'Primary_menu' , 'Footer Menu'
			array(
				'primary' => esc_html__( 'Primary menu', 'interns' ),
				'footer'  => __( 'Footer menu', 'interns' ),
			)
		);
    }
}
add_action( 'after_setup_theme', 'intern_theme_setup' );

function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter( 'upload_mimes', 'cc_mime_types' );

/** Allow svg file support */
define('ALLOW_UNFILTERED_UPLOADS', true);

function outside_files() {
    wp_enqueue_style('font',  get_template_directory_uri() .'/assets/css/font.css',false, null);
    wp_enqueue_style('main_styles',  get_template_directory_uri() .'/assets/scss/style.css',false, null);
    wp_enqueue_style('bootstrap',  get_template_directory_uri() .'/assets/css/bootstrap.css',false, null);
    wp_enqueue_style('icons' , "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css",false, null);
    wp_enqueue_script('custom_js', get_template_directory_uri() .'/assets/scripts/js/main.js',false,null);
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() .'/assets/scripts/js/bootstrap.bundle.js',false,null);
}

add_action('wp_enqueue_scripts', 'outside_files');


/**
 * create custom post type
 */
function interns_post_type_init()
{
    register_post_type(
        'blog',
        array(
            'labels' => array(
                'name' => __('blog', 'intern'),
                'singular_name' => __('blogs', 'intern'),
            ),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'show_ui' => true,
            'show_in_rest' => true,
            'hierarchical' => true,
            'menu_icon' => 'dashicons-welcome-write-blog',
            'rewrite' => array( 'slug' => 'blog' ),
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' )
        )
    );
}

add_action('init', 'interns_post_type_init');

/**
 * Add testimonial
 */

add_action( 'init', 'create_types_hierarchical_taxonomy', 0 );
 
//create a custom taxonomy name it subjects for your posts
 
function create_types_hierarchical_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Typw:' ),
    'edit_item' => __( 'Edit Type' ), 
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type Name' ),
    'menu_name' => __( 'Types' ),
  );    
 
// Now register the taxonomy
  register_taxonomy('subjects',array('blog'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
 
}

/**
 * Add copyright customizer
 */

require get_template_directory() . '/classes/footer-copyright-customizer.php';

/**
 * Add Footer Contact customizer
 */

require get_template_directory() . '/classes/footer-contact-customizer.php';

/**
 * Create ACF BLocks
 */
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a Hero/leadspace block.
        acf_register_block_type(array(
            'name'              => 'head',
            'title'             => __('Head'),
            'description'       => __('A custom Hero block.'),
            'render_template'   => 'template-parts/blocks/hero.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'hero', 'leadspace' ),
            'mode'              => 'auto',
            'example'           => array(
            'attributes'        => array(
            'mode' => 'preview',
            'data' => []
                )
                ),
        ));

 // register a about-us block.
        acf_register_block_type(array(
            'name'              => 'about',
            'title'             => __('About'),
            'description'       => __('A custom About block.'),
            'render_template'   => 'template-parts/blocks/about.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'about', 'about_us' ),
            'mode'              => 'auto',
            'example'           => array(
            'attributes'        => array(
            'mode' => 'preview',
            'data' => []
                )
                ),
        ));

        // register a Things to Remember block.
        acf_register_block_type(array(
            'name'              => 'remember',
            'title'             => __('Remember'),
            'description'       => __('A custom Things to Remember block.'),
            'render_template'   => 'template-parts/blocks/remember.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'remember', 'things_to_remember' ),
            'mode'              => 'auto',
            'example'           => array(
            'attributes'        => array(
            'mode' => 'preview',
            'data' => []
                )
                ),
        ));

        // register Our team block.
        acf_register_block_type(array(
            'name'              => 'team',
            'title'             => __('Team'),
            'description'       => __('A custom Our Team block.'),
            'render_template'   => 'template-parts/blocks/team.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'team', 'Our_Team' ),
            'mode'              => 'auto',
            'example'           => array(
            'attributes'        => array(
            'mode' => 'preview',
            'data' => []
                )
                ),
        ));

        // register a Blogs block.
        acf_register_block_type(array(
            'name'              => 'blogs',
            'title'             => __('Blogs'),
            'description'       => __('A custom Things to Blog block.'),
            'render_template'   => 'template-parts/blocks/blogs.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'blogs', 'ourBlogs' ),
            'mode'              => 'auto',
            'example'           => array(
            'attributes'        => array(
            'mode' => 'preview',
            'data' => []
                )
                ),
        ));

        // register a More Info block.
        acf_register_block_type(array(
            'name'              => 'info',
            'title'             => __('Info'),
            'description'       => __('A custom More Info block.'),
            'render_template'   => 'template-parts/blocks/info.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'info', 'more_info' ),
            'mode'              => 'auto',
            'example'           => array(
            'attributes'        => array(
            'mode' => 'preview',
            'data' => []
                )
                ),
        ));

        // register a client block.
        acf_register_block_type(array(
            'name'              => 'client',
            'title'             => __('Client'),
            'description'       => __('A custom Client block.'),
            'render_template'   => 'template-parts/blocks/client.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'client', 'client_says' ),
            'mode'              => 'auto',
            'example'           => array(
            'attributes'        => array(
            'mode' => 'preview',
            'data' => []
                )
                ),
        ));

        // register a hiring block.
        acf_register_block_type(array(
            'name'              => 'hiring',
            'title'             => __('Hiring'),
            'description'       => __('A custom Hiring block.'),
            'render_template'   => 'template-parts/blocks/hiring.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'hiring', 'hiring-banner' ),
            'mode'              => 'auto',
            'example'           => array(
            'attributes'        => array(
            'mode' => 'preview',
            'data' => []
                )
                ),
        ));

        
    }
}

