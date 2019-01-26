<?php

/**
 * This is the model for singular posts.
 */
class SingleEvent extends \DustPress\Model {

    /**
     * This returns the current post
     *
     * @return array|null|WP_Post
     */
    public function Query() {
      return \DustPress\Query::get_acf_post( get_the_ID() );
    }
}