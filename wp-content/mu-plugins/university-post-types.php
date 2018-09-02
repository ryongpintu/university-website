<?php

function university_post_types(){
  // Events post type
  register_post_type('event',array(
    'capability_type'=>'event',
    'map_meta_cap'=>true,
    'show_in_rest'=>true,
    'supports'=>array('title','editor','excerpt'),
      'rewrite'=>array('slug'=>'events'),
      'has_archive'=>true,
      'public'=>true,
      'menu_icon'=>'dashicons-calendar',
      'labels'=> array(
      'name'=>'Events',
      'add_new_item'=>'Add New Event',
      'all_items'=>'All Events',
      'edit_item'=>'Edit Event',
      'singular_name'=>'Event'
  )
  ));

  // Program post type
  register_post_type('program',array(
    'show_in_rest'=>true,
    'supports'=>array('title'),
      'rewrite'=>array('slug'=>'programs'),
      'has_archive'=>true,
      'public'=>true,
      'menu_icon'=>'dashicons-awards',
      'labels'=> array(
      'name'=>'Programs',
      'add_new_item'=>'Add New Program',
      'all_items'=>'All Programs',
      'edit_item'=>'Edit Program',
      'singular_name'=>'Program'
  )
  ));

  // Professor post type
  register_post_type('professor',array(
    'supports'=>array('title','editor','thumbnail'),
      'public'=>true,
      'menu_icon'=>'dashicons-welcome-learn-more',
      'labels'=> array(
      'name'=>'Professors',
      'add_new_item'=>'Add New Professor',
      'all_items'=>'All Professors',
      'edit_item'=>'Edit Professor',
      'singular_name'=>'Professor'
  )
  ));

  //
  register_post_type('campus',array(
    'show_in_rest'=>true,
    'supports'=>array('title','editor','excerpt'),
      'rewrite'=>array('slug'=>'campuses'),
      'has_archive'=>true,
      'public'=>true,
      'menu_icon'=>'dashicons-location-alt',
      'labels'=> array(
      'name'=>'Campuses',
      'add_new_item'=>'Add New Campus',
      'all_items'=>'All Campuses',
      'edit_item'=>'Edit Campus',
      'singular_name'=>'Campus'
  )
  ));
// Notes post type
// 
register_post_type('note',array(
  'capability_type'=>'note',
  'map_meta_cap'=>true,
  'show_in_rest'=>true,
    'supports'=>array('title','editor'),
      'public'=>false,
      'show_ui'=>true,
      'menu_icon'=>'dashicons-welcome-write-blog',
      'labels'=> array(
      'name'=>'Notes',
      'add_new_item'=>'Add New Note',
      'all_items'=>'All Notes',
      'edit_item'=>'Edit Note',
      'singular_name'=>'Note'
  )
  ));
}
add_action('init','university_post_types');
