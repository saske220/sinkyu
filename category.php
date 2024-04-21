<?php
/**
 * @package WordPress
 * @subpackage Package Template
 */

get_header();

?>

<main>
    <section class="catalog">
        <div class="catalog__pncs">        <?php
if (function_exists('yoast_breadcrumb')) {
	yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
}
?>
<input value="◀ 前へ戻る" onclick="history.back();" type="button" class="back-btn"></div>

        			<h2><?php single_cat_title(); ?></h2>

        <?php if (usces_is_item()) : ?>
            <ul class="product-flex-wrap">
                <?php while (have_posts()) : the_post(); usces_the_item(); ?>
                    <?php $sku = $usces->get_skus(get_the_ID()); ?>
                    <li class="product-card" style="display: inline-block;">
                        <a href="<?php the_permalink(); ?>">
                            <div>
                                <div class="img-fit">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php usces_the_itemImage(0, 240, 180); ?>
                                        </a>
                                </div>
                                <h1><?php echo wp_trim_words(get_the_title(), 16, '…'); ?></h1>
                                <p class="detail"><?php echo wp_trim_words(get_the_content(), 30, '[続く]'); ?></p>
                            </div>
                            <h3 class="price">¥<?php usces_the_firstPrice(); ?></h3>


                            <div class="m_product_btn">
                                <a href="<?php the_permalink(); ?>">
                                    <span class="label">商品詳細をみる</span>
                                    <span class="img">
                                        <img src="https://d2w53g1q050m78.cloudfront.net/sisitokyo/uploads/pc/images/_renew/common/icon_cart.svg">
                                    </span>
                                </a>
                            </div>
                            </a>
                    </li>
                <?php endwhile; ?>
            </ul>
            <div class="navigation"><?php wp_pagenavi(); ?></div>
        <?php else : ?>
            <?php if (is_category()) : ?>
                <h2 class="center"><?php printf(__("Sorry, but there aren't any posts in the %s category yet.", 'kubrick'), single_cat_title('', false)); ?></h2>
            <?php elseif (is_date()) : ?>
                <h2><?php echo __("Sorry, but there aren't any posts with this date.", 'kubrick'); ?></h2>
            <?php elseif (is_author()) : ?>
                <?php $userdata = get_user_by('login', get_query_var('author_name')); ?>
                <h2 class="center"><?php printf(__("Sorry, but there aren't any posts by %s yet.", 'kubrick'), $userdata->display_name); ?></h2>
            <?php else : ?>
                <h2 class="center"><?php echo __('No posts found.', 'kubrick'); ?></h2>
            <?php endif; ?>
            <?php get_search_form(); ?>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>
</body>
</html>
