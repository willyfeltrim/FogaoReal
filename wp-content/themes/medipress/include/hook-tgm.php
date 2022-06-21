<?php
if ( ! function_exists( 'medipress_recommended' ) ) :
   function medipress_recommended() {
        $plugins = array(
			 
            array(
                'name'     => esc_html__( 'Appointment Scheduler', 'medipress' ),
                'slug'     => 'eventprime-event-calendar-management',
                'required' => false,
            ),
		 
        );
        tgmpa( $plugins );
    }
endif;
add_action( 'tgmpa_register', 'medipress_recommended' );