<?php
class PeepSo3_Sitemap_Provider extends WP_Sitemaps_Provider {
        
    private $limit = 100; // @TODO CONFIGURABLE

    public function __construct() {
        $this->name        = 'bioprofiles';
        $this->object_type = 'bioprofiles';
    }

    private function sql($page_num) {
		global $wpdb;
		if($page_num<0){
		$sql ="SELECT * FROM {$wpdb->prefix}users"; // your queries here;	
		}else{
			$offset = $this->limit * ($page_num - 1);
        $sql ="SELECT * FROM {$wpdb->prefix}users LIMIT $offset, $this->limit"; // your queries here;
		}
        return $wpdb->get_results($sql);
    }

    // retrieve a page of results
    public function get_url_list( $page_num, $object_subtype = '' ) {

        $url_list = [];

        $users = $this->sql($page_num);
		//echo"<pre>";print_r($users);echo"</pre>";die;
        foreach($users as $user)  {
			$url = get_site_url()."/".$user->user_login;
            //$url_list[] = ['loc' => $url] ; // depends on your item structure
            $url_list[] = array('loc'=>$url); ; // depends on your item structure
        }
        return $url_list;
    }

    // estimate how many pages are available
    public function get_max_num_pages( $object_subtype = '' ) {
        $posts = $this->sql(-1);
		//echo"<pre>";print_r($posts);echo"</pre>";die;
        return ceil(count($posts)/$this->limit);
    }
}

// Register XML Sitemap Provider
add_filter('init', function() {
    $provider = new PeepSo3_Sitemap_Provider();
    wp_register_sitemap_provider( 'bioprofiles', $provider );
});