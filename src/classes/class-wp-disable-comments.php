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

    /* Constructor
    ---------------------------------------------------------------------------------- */

    /**
     * Initialize class.
     */
    public function __construct() {

        add_filter( 'comments_open', '__return_false' );
        add_filter( 'pings_open', '__return_false' );

    }
}
