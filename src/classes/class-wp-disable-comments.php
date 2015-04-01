<?php

class WP_Disable_Comments {

    /* Properties
    ---------------------------------------------------------------------------------- */

    /* Instance
    ---------------------------------------------- */

    /**
     * Instance of the class.
     *
     * @var WP_Disable_Comments
     */
    protected static $instance = null;

    /**
     * Get accessor method for instance property.
     *
     * @return WP_Disable_Comments Instance of the class.
     */
    public static function get_instance() {

        if ( null == self::$instance ) {

            self::$instance = new self;

        }

        return self::$instance;

    }

    /* Slug
    ---------------------------------------------- */

    /**
     * Recipe slug.
     *
     * @var string
     */
    protected $slug = 'wp-disable-comments';

    /* Constructor
    ---------------------------------------------------------------------------------- */

    /**
     * Initialize class.
     */
    public function __construct() {

        add_action( 'comment_form_comments_closed', array( $this, 'display_disabled_message' ) );

        add_filter( 'comments_open', '__return_false' );
        add_filter( 'pings_open', '__return_false' );

    }

    /* Methods
    ---------------------------------------------------------------------------------- */

    function display_disabled_message() {

        $default_message = __( 'Comments have been disabled.', $this->slug );

        $message = apply_filters( 'wp_disable_comments_disabled_message', $default_message );

        echo '<p class="comments-disabled">';
            echo $message;
        echo '</p>';

    }

}
