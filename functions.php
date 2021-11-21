<?php

function num_posts($days=1) {//$days就是设定时间一天；
global $wpdb;
       $today = gmdate('Y-m-d H:i:s', time() + 3600 * 8);//获取当前的时间
       $daysago = date( "Y-m-d H:i:s", strtotime($today) - ($days * 24 * 60 * 60) );  //Today - $days
	    $result = $wpdb->get_results("SELECT ID FROM $wpdb->posts WHERE post_date BETWEEN '$daysago' AND '$today' AND post_status='publish' AND post_type='post' ORDER BY post_date DESC ");         
	    foreach ($result as $Item) {
	        $post_ID[] = $Item->ID;//已发布的文章ID，写到一个数组里面去
	    }
	    $post_num = count($post_ID);//输出数组中元素个数，文章ID的数量，也就是发表的文章数量
    $output .= '<a>'.$post_num.'</a>';//输出文章数量
	    echo $output;
	}


/*
Displays post image attachment (sizes: thumbnail, medium, full)
*/
function dp_attachment_image($postid=0, $size='thumbnail', $attributes='') {
	if ($postid<1) $postid = get_the_ID();
	if ($images = get_children(array(
		'post_parent' => $postid,
		'post_type' => 'attachment',
		'numberposts' => 1,
		'post_mime_type' => 'image',)))
		foreach($images as $image) {
			$attachment=wp_get_attachment_image_src($image->ID, $size);
			?><img src="<?php echo $attachment[0]; ?>" <?php echo $attributes; ?>  ><?php
		}
};




$new_meta_boxes =
array(
    "link" => array(
        "name" => "link",
        "std" => "",
        "title" => "商品网址:"),
    "oldprice" => array(
        "name" => "oldprice",
        "std" => "",
        "title" => "原价:"),
    "discount" => array(
        "name" => "discount",
        "std" => "",
        "title" => "折扣:"),
    "price" => array(
        "name" => "price",
        "std" => "",
        "title" => "价格:"),
     "Nunber" => array(
        "name" => "Nunber",
        "std" => "",
        "title" => "累计销售:")
);

function new_meta_boxes() {
    global $post, $new_meta_boxes;

    foreach($new_meta_boxes as $meta_box) {
        $meta_box_value = get_post_meta($post->ID, $meta_box['name'], true);

        if($meta_box_value == "")
            $meta_box_value = $meta_box['std'];

        echo'<input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';

        // 自定义字段标题
        echo'<h4>'.$meta_box['title'].'</h4>';

        // 自定义字段输入框
        echo '<textarea rows="3" name="'.$meta_box['name'].'">'.$meta_box_value.'</textarea><br />';
    }
}
function create_meta_box() {
    global $theme_name;

    if ( function_exists('add_meta_box') ) {
        add_meta_box( 'new-meta-boxes', '商品信息', 'new_meta_boxes', 'post', 'normal', 'high' );
    }
}

function save_postdata( $post_id ) {
    global $post, $new_meta_boxes;

    foreach($new_meta_boxes as $meta_box) {
        if ( !wp_verify_nonce( $_POST[$meta_box['name'].'_noncename'], plugin_basename(__FILE__) ))  {
            return $post_id;
        }

        if ( 'page' == $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ))
                return $post_id;
        }
        else {
            if ( !current_user_can( 'edit_post', $post_id ))
                return $post_id;
        }

        $data = $_POST[$meta_box['name']];

        if(get_post_meta($post_id, $meta_box['name']) == "")
            add_post_meta($post_id, $meta_box['name'], $data, true);
        elseif($data != get_post_meta($post_id, $meta_box['name'], true))
            update_post_meta($post_id, $meta_box['name'], $data);
        elseif($data == "")
            delete_post_meta($post_id, $meta_box['name'], get_post_meta($post_id, $meta_box['name'], true));
    }

}

add_action('admin_menu', 'create_meta_box');
add_action('save_post', 'save_postdata');



?>
