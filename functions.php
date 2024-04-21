<?php
function add_my_scripts() {

    //オリジナルJavaScriptを</body>前に読み込み
    wp_enqueue_script('prism',get_theme_file_uri( '/js/prism.js' ),
    array(),'',true);
    wp_enqueue_script('slick',get_theme_file_uri( '/js/slick.min.js' ),
    array(),'',true);
    wp_enqueue_script('myscript',get_theme_file_uri( '/js/script.js' ),
    array(),'',true);
}
add_action('wp_enqueue_scripts', 'add_my_scripts');


function my_widgets_init() {
	$args  = [
		// ウィジェットエリアの表示名を指定
		'name' => 'ウィジェット01',
		// ウィジェットエリアのIDを指定
		'id' => 'widget-01',
		// 管理画面で表示されるウィジェットエリアの説明を指定。
        'description' => 'ウィジェット01のエリアとなります。',
		// ウィジェットの直前に表示するHTML
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		// ウィジェットの直後に表示するHTML
		'after_widget'  => '</div>',
		// ウィジェット内のタイトルの直前に表示するHTML
		'before_title'  => '<h2 class="widget-title">',
		// ウィジェット内のタイトルの直後に表示するHTML
		'after_title'   => '</h2>',
    ];
	register_sidebar( $args  );
}


function my_theme_setup() {
  //アイキャッチ画像を有効化
  add_theme_support('post-thumbnails');

  //追記
  //heade内にフィードリンクを出力
  add_theme_support('automatic-feed-links');

    //自動でtitleタグ挿入
  add_theme_support('title-tag');


    // 固定ページで「抜粋」を有効化
  add_post_type_support('page', 'excerpt');

  // カテゴリーとタグのmeta descriptionからpタグを除去
  remove_filter('term_description','wpautop');

}
add_action( 'after_setup_theme', 'my_theme_setup');


//----------------------------------------------------




function display_child_categories() {
    // 親カテゴリーのスラッグを指定します
    $parent_category_slug = 'your-parent-category-slug'; // ここに親カテゴリーのスラッグを入力してください

    $parent_category = get_category_by_slug($parent_category_slug);

    // 親カテゴリーが存在する場合
    if ($parent_category) {
        $child_categories = get_categories(array(
            'child_of' => $parent_category->term_id,
        ));

        // 子カテゴリーが存在する場合
        if ($child_categories) {
            echo '<ul>';
            foreach ($child_categories as $child_category) {
                echo '<li><a href="' . get_category_link($child_category->term_id) . '">' . $child_category->name . '</a></li>';
            }
            echo '</ul>';
        } else {
            echo '子カテゴリーはありません';
        }
    } else {
        echo '親カテゴリーが見つかりませんでした';
    }
}


add_filter('post_thumbnail_html', 'remove_width_attribute', 10);
add_filter('image_send_to_editor', 'remove_width_attribute', 10);
function remove_width_attribute($html)
{
	$html = preg_replace('/(width|height)="\d*"\s/', "", $html);
	return $html;
}

//automatic_feed_links();
add_theme_support('automatic-feed-links');

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'id' => 'sidebar-1',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}


function theme_setup()
{
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');
function related_items_list(){
    global $post;
    $categories = get_the_category($post->ID);
    if( $categories ){
        $category_ids = array();
        foreach( $categories as $category){
            $category_id = $category->term_id;
            $category_child = get_term_children($category_id, 'category');
            if($category_child != true){
                $category_ids[] = $category->term_id ;
            }
        }
    $args=array(
        'category__in' => $category_ids,
        'post__not_in' => array($post->ID),
        'posts_per_page'=> 4,
        'ignore_sticky_posts'=> 1,
        'orderby' => 'rand',
    );
    $my_query = new WP_Query($args);
        if( $my_query->have_posts() ) {
            while ($my_query->have_posts()) {
                $my_query->the_post();
                echo get_template_part('thumbnail-box');
            }
            wp_reset_query();

        }

    }

}
