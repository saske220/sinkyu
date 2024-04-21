<?php

/**
 * @package WordPress
 * @subpackage Package Template
 */

 get_header(); ?>

 <div class="single-main">


<div id="contents" class="heightLine" role="main">
<?php
if (function_exists('yoast_breadcrumb')) {
	yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
}
?>

	<div id="c-contents">
		<input value="◀ 前へ戻る" onclick="history.back();" type="button" class="back-btn">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">


					<div class="entry">


						<div class="detail-right">
								<h2><?php the_title(); ?></h2>
							<?php the_content('<p class="serif">' . __('Read the rest of this entry &raquo;', 'kubrick') . '</p>'); ?>
							<p class="clear"></p>
							<!-- detail-right END -->

							<hr size="1" color="#cccccc" />

						</div>
							<div class="detail-left">
								<h3 class="detail-left__title">関連商品</h3>
								<ul>
							<?php echo get_post_meta($post->ID, 'large-image2', TRUE); ?>
							<?php
$categories = get_the_category($post->ID);
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
        'posts_per_page'=> 2,
        'ignore_sticky_posts'=> 1,
        'orderby' => 'rand',
);
$my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {
        $html ='';
        $html .= '<ul>';
        while ($my_query->have_posts()) {
            $my_query->the_post();
			echo get_template_part('thumbnail-box');
        }
        echo $html;
        wp_reset_query();
    }
 ?>
 </ul>
						</div>
						<!-- detail-left END -->
					</div>








				</div>



	    <?php endwhile;
		else : ?>


			<p><?php _e('Sorry, no posts matched your criteria.', 'kubrick'); ?></p>

		<?php endif; ?>

	</div>

	<!-- c-contents END -->
</div>
</div>
<!-- contents END -->

<!-- SideNavigation Block END -->

<?php get_footer(); ?>