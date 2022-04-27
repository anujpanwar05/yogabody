<?php
if ( ! class_exists( 'WP_List_Table' ) ) {
	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}

class Reviews_List extends WP_List_Table {

	/** Class constructor */
	public function __construct() {

		parent::__construct( [
			'singular' => __( 'User', 'sp' ), //singular name of the listed records
			'plural'   => __( 'Users', 'sp' ), //plural name of the listed records
			'ajax'     => false //should this table support ajax?

		] );

	}
    /**
     * Retrieve customer�s data from the database
     *
     * @param int $per_page
     * @param int $page_number
     *
     * @return mixed
     */
    public static function get_models( $per_page = 20, $page_number = 1 ) {
    
      global $wpdb;
    
      $sql = "SELECT * FROM {$wpdb->prefix}profile_reviews";
    
      if ( ! empty( $_REQUEST['orderby'] ) ) {
        $sql .= ' ORDER BY ' . esc_sql( $_REQUEST['orderby'] );
        $sql .= ! empty( $_REQUEST['order'] ) ? ' ' . esc_sql( $_REQUEST['order'] ) : ' ASC';
      }
    
      $sql .= " LIMIT $per_page";
    
      $sql .= ' OFFSET ' . ( $page_number - 1 ) * $per_page;
    
    
      $result = $wpdb->get_results( $sql, 'ARRAY_A' );
    
      return $result;
    }
    /**
     * Delete a customer record.
     *
     * @param int $id customer ID
     */
    public static function delete_model( $id ) {
      global $wpdb;
    
      $wpdb->delete(
        "{$wpdb->prefix}profile_reviews",
        [ 'review_id' => $id ],
        [ '%d' ]
      ); 
    }
	public static function publish_review( $id ) {
      global $wpdb;
		$wpdb->update("{$wpdb->prefix}profile_reviews",array(
			'review_status'=>1),
			array('review_id'=>$id)
		);
    }
	public static function unpublish_review( $id ) {
      global $wpdb;
    
		$wpdb->update("{$wpdb->prefix}profile_reviews",array(
			'review_status'=>0),
			array('review_id'=>$id)
		); 
    }
	
    /**
     * Returns the count of records in the database.
     *
     * @return null|string
     */
    public static function record_count() {
      global $wpdb;
    
      $sql = "SELECT COUNT(*) FROM {$wpdb->prefix}profile_reviews";
    
      return $wpdb->get_var( $sql );
    }
    /** Text displayed when no customer data is available */
    public function no_items() {
      _e( 'No Location avaliable.', 'sp' );
    }
    /**
     * Method for name column
     *
     * @param array $item an array of DB data
     *
     * @return string
     */
    function column_user_id( $item ) {
    
      // create a nonce
      $delete_nonce = wp_create_nonce( 'sp_delete_model' );
		$author_obj = get_user_by('id', $item['user_id']);
		$username = ((isset($author_obj->display_name) && $author_obj->display_name!='') ? $author_obj->display_name : $author_obj->user_login ) ;
		$url = get_site_url().'/'.$author_obj->user_login.'/reviews/';
      $title = '<strong>' . $username . '</strong>';
		if($item['review_status']==1){
			$pu = sprintf( '<a href="?page=%s&action=%s&review=%s&_wpnonce=%s">Unpublish</a>', esc_attr( $_REQUEST['page'] ), 'unpublish', absint( $item['review_id'] ), $delete_nonce );
		}else{
			$pu = sprintf( '<a href="?page=%s&action=%s&review=%s&_wpnonce=%s">Publish</a>', esc_attr( $_REQUEST['page'] ), 'publish', absint( $item['review_id'] ), $delete_nonce );
		}
      $actions = [
        'delete' => sprintf( '<a href="?page=%s&action=%s&review=%s&_wpnonce=%s">delete</a>', esc_attr( $_REQUEST['page'] ), 'delete', absint( $item['review_id'] ), $delete_nonce ),
		'view' => '<a target="_blank" href="'.$url.'">View</a>',
		'review_status' => $pu
      ];
    
      return $title . $this->row_actions( $actions );
    }
    /**
     * Render a column when no column specific method exists.
     *
     * @param array $item
     * @param string $column_name
     *
     * @return mixed
     */
    public function column_default( $item, $column_name ) {
      switch ( $column_name ) {
        case 'ID':
        case 'review_name':
		case 'review_email':
		case 'review_comment':
			return $item[ $column_name ];
		case 'review_stars':
			$width = (20 * $item[ $column_name ]);
			$html = '<div class="star-ratings">
						<div class="star-ratings-top" style="width:'.$width.'%">
							<span>★</span>
							<span>★</span>
							<span>★</span>
							<span>★</span>
							<span>★</span>
						</div>
						<div class="star-ratings-bottom">
							<span>★</span>
							<span>★</span>
							<span>★</span>
							<span>★</span>
							<span>★</span>
						</div>
					</div>';
					return $html;
		case 'user_id':
			$author_obj = get_user_by('id', $item[ $column_name ]);
			$username = ((isset($author_obj->display_name) && $author_obj->display_name!='') ? $author_obj->display_name : $author_obj->user_login ) ;
			$url = get_site_url().'/'.$author_obj->user_login.'/reviews/';
			return '<a href="'.$url.'" target="_blank">'.$username.'</a>';
		case 'review_date':
			return date("F Y",$item[ $column_name ]);
		case 'action':
			$p_nonce = wp_create_nonce( 'sp_publish_model' );
			if($item['review_status']==1){
				return sprintf( '<a href="?page=%s&action=%s&user=%s&_wpnonce=%s">Unpublish</a>', esc_attr( $_REQUEST['page'] ), 'unpublish', absint( $item['review_id'] ), $p_nonce );
			}else{
				return sprintf( '<a href="?page=%s&action=%s&user=%s&_wpnonce=%s">Publish</a>', esc_attr( $_REQUEST['page'] ), 'publish', absint( $item['review_id'] ), $p_nonce );
			}
			
        default:
          return print_r( $item, true ); //Show the whole array for troubleshooting purposes
      }
    }
    /**
     * Render the bulk edit checkbox
     *
     * @param array $item
     *
     * @return string
     */
    function column_cb( $item ) {
      return sprintf(
        '<input type="checkbox" name="bulk-delete[]" value="%s" />', $item['review_id']
      );
    }
    /**
     *  Associative array of columns
     *
     * @return array
     */
    function get_columns() {
      $columns = [
        'cb'      => '<input type="checkbox" />',
        'user_id' => __( 'Profile name', 'sp' ),
		'review_date'    => __( 'Review Date', 'sp' ),
		'review_name' => __( 'Name', 'sp' ),
		'review_email' => __( 'Email', 'sp' ),
		'review_stars' => __( 'Stars', 'sp' ),
		'review_comment' => __( 'Comment', 'sp' ),
      ];
    
      return $columns;
    }
    /**
     * Columns to make sortable.
     *
     * @return array
     */
    public function get_sortable_columns() {
      $sortable_columns = array(
        'user_id' => array( 'user_id', true ),
        'review_date' => array( 'review_date', false ),
		'review_name' => array( 'review_name', false ),
		'review_email' => array( 'review_email', false ),
		'review_stars' => array( 'review_stars', false ),
      );
    
      return $sortable_columns;
    }
    /**
     * Returns an associative array containing the bulk action
     *
     * @return array
     */
    public function get_bulk_actions() {
      $actions = [
        'bulk-delete' => 'Delete'
      ];
    
      return $actions;
    }
    /**
     * Handles data query and filter, sorting, and pagination.
     */
    public function prepare_items() {
    
      $this->_column_headers = $this->get_column_info();
    
      /** Process bulk action */
      $this->process_bulk_action();
    
      $per_page     = $this->get_items_per_page( 'models_per_page', 20 );
      $current_page = $this->get_pagenum();
      $total_items  = self::record_count();
    
      $this->set_pagination_args( [
        'total_items' => $total_items, //WE have to calculate the total number of items
        'per_page'    => $per_page //WE have to determine how many items to show on a page
      ] );
    
    
      $this->items = self::get_models( $per_page, $current_page );
    }
    public function process_bulk_action() {
    
      //Detect when a bulk action is being triggered...
      if ( 'delete' === $this->current_action() ) {
    
        // In our file that handles the request, verify the nonce.
       
          self::delete_model( absint( $_GET['review'] ) );
    
        
    
      }
	    if ( 'unpublish' === $this->current_action() ) {
			self::unpublish_review( absint( $_GET['review'] ) );    
        }
	    if ( 'publish' === $this->current_action() ) {
			self::publish_review( absint( $_GET['review'] ) );    
        }
    
      // If the delete bulk action is triggered
      if ( ( isset( $_POST['action'] ) && $_POST['action'] == 'bulk-delete' )
           || ( isset( $_POST['action2'] ) && $_POST['action2'] == 'bulk-delete' )
      ) {
        
    
        $delete_ids = esc_sql( $_POST['bulk-delete'] );
    
        // loop over the array of record IDs and delete them
        foreach ( $delete_ids as $id ) {
          self::delete_model( $id );
    
        }
    
        
      }
    }

}

class reviews_Plugin {

	// class instance
	static $instance;

	// customer WP_List_Table object
	public $models_obj;

	// class constructor
	public function __construct() {
		add_filter( 'set-screen-option', [ __CLASS__, 'set_screen' ], 10, 3 );
		add_action( 'admin_menu', [ $this, 'plugin_menu' ] );
	}
public static function set_screen( $status, $option, $value ) {
	return $value;
}

public function plugin_menu() {

	$hook = add_menu_page(
		'Rating and Reviews',
		'Rating and Reviews',
		'manage_options',
		'rating-and-reviews',
		[ $this, 'plugin_settings_page' ],
		'dashicons-star-filled',
		2
	);

	add_action( "load-$hook", [ $this, 'screen_option' ] );

}
/**
* Screen options
*/
public function screen_option() {

	$option = 'per_page';
	$args   = [
		'label'   => 'Reviews',
		'default' => 20,
		'option'  => 'reviews_per_page'
	];

	add_screen_option( $option, $args );

	$this->reviews_obj = new Reviews_List();
}
/**
* Plugin settings page
*/
public function plugin_settings_page() {
    global $wpdb;
    //$brands = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}list_store_brands");
	?>
	<div class="wrap">
		<h2>Overview of all users</h2>
		<div id="poststuff">
			<div id="post-body" class="metabox-holder columns-1">
				<div id="post-body-content">
					<div class="meta-box-sortables ui-sortable">
						<form method="post">
							<?php
							$this->reviews_obj->prepare_items();
							$this->reviews_obj->display(); ?>
						</form>
					</div>
				</div>
			</div>
			<br class="clear">
		</div>
	</div>
<?php
}
/** Singleton instance */
public static function get_instance() {
	if ( ! isset( self::$instance ) ) {
		self::$instance = new self();
	}

	return self::$instance;
}
}
add_action( 'init', function () {
    
	reviews_Plugin::get_instance();
} );











