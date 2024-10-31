<?php

/*
Plugin Name: remove page from search results
Version: 0.0.1
Plugin URI: http://shdb.info/
Description: remove page from search results
Author: gosunatxrea@gmail.com
Author URI: http://shdb.info/
*/

/*  Copyright 2009 gosunatxrea (email:gosunatxrea@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_action('pre_get_posts', 'remove_post_type_page' );

function remove_post_type_page ( $notused )
{
  global $wp_query;

  if(is_search()) $wp_query->query_vars['post_type'] = 'post';
}

?>
