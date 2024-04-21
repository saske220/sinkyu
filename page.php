<?php

/**
 * @package WordPress
 * @subpackage Okatoku Theme
 */

get_header(); ?>




<div id="contents" class="heightLine" role="main">



    <div id="c-contents">
        <?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
}
?>
<input value="◀ 前へ戻る" onclick="history.back();" type="button" class="back-btn">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="post cart-page" id="post-<?php the_ID(); ?>">

                    <h2><?php the_title(); ?></h2>

                    <div class="entry">

                        <?php the_content('<p class="serif">' . __('Read the rest of this page &raquo;', 'kubrick') . '</p>'); ?>

                    </div>
                    <!-- entry END -->

                </div>
                <!-- post END -->

        <?php endwhile;
        endif; ?>
    </div>
    <!-- c-contents END -->

</div>
<!-- contents END -->


<!-- SideNavigation Block END -->

<?php get_footer(); ?>