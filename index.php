add_filter( 'manage_mp-event_posts_columns', 'smashing_filter_posts_columns' );
function smashing_filter_posts_columns( $columns ) {
   
  $columns['location'] = __( 'Location' );
  
  return $columns;
}

add_action( 'manage_mp-event_posts_custom_column', 'smashing_realestate_column', 10, 2);
function smashing_realestate_column( $column, $post_id ) {
  // Image column
  
  if ( 'location' === $column ) {
   echo $post_id;
  }
}
add_filter( 'manage_edit-mp-event_sortable_columns', 'set_custom_mycpt_sortable_columns' );

function set_custom_mycpt_sortable_columns( $columns ) {
  $columns['location'] = 'location';

}
