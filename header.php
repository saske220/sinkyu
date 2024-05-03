<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

 <head>
  <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VQ1BSP6EDY"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-VQ1BSP6EDY');
    </script>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <?php if( is_home() || is_front_page() ): ?>
      <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php elseif( is_category() ): ?>
      <meta name="description" content="<?php echo category_description(); ?>"> <?php elseif( is_tag() ): ?>
      <meta name="description" content="<?php echo tag_description(); ?>">
    <?php elseif( is_singular() ): ?>
      <meta name="description" content="<?php echo get_the_excerpt(); ?>">
    <?php endif; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title><?php if(is_front_page() || is_home()) {
      echo get_bloginfo('name'); } else { echo wp_title(''); } ?></title>

    <?php get_template_part('ogp') ?>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>名誠パッケージ 果物の包装・梱包資材</title>
    <link
      rel="stylesheet"
      href="https://unpkg.com/modern-css-reset/dist/reset.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <link
      rel="stylesheet"
      href="https://d2w53g1q050m78.cloudfront.net/sisitokyo/uploads/pc/css/_renew/common.css"
    />
    <link
      rel="stylesheet"
      href="https://d2w53g1q050m78.cloudfront.net/sisitokyo/uploads/pc/css/_renew/module.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;200;300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri()); ?>/css/style.min.css">
    <?php wp_head(); ?>
 </head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
 <header>
      <div class="icon-g">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <p class="small-title">果物の包装・梱包資材</p>
          <h1><span>名誠</span>パッケージ</h1>
        </a>
      </div>
      <div class="cartnai"> <a href="<?php echo get_option('home'); ?>/usces-cart.html"title="カート内情報">  <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 32px; height: 32px; opacity: 1;" xml:space="preserve">
<style type="text/css">

</style>
<g>
	<path class="st0" d="M426.093,0c-9.344,0-17.502,6.318-19.838,15.363l-20.277,78.574H28.775c-6.434,0-12.496,3.025-16.363,8.166
		c-3.867,5.144-5.096,11.805-3.316,17.994l58.826,204.123c2.526,8.771,10.557,14.814,19.682,14.814H322.73l-8.858,34.324H89.396
		v36.133h236.594c9.342,0,17.5-6.324,19.836-15.373l92.383-357.988h65.496V0H426.093z M349.925,233.652l-17.871,69.25h-45.133
		v-69.25H349.925z M376.653,130.068l-17.406,67.453h-72.326v-67.453H376.653z M250.79,233.652v69.25h-77.084v-69.25H250.79z
		 M250.79,130.068v67.453h-77.084v-67.453H250.79z M143.361,130.068v67.453H69.009l-19.436-67.453H143.361z M143.361,233.652v69.25
		H99.374l-19.955-69.25H143.361z" style="fill: rgb(255, 255, 255);"></path>
	<path class="st0" d="M123.903,436.688c-20.23,0-36.633,16.402-36.633,36.64c0,20.234,16.402,36.635,36.633,36.635
		c20.24,0,36.633-16.4,36.633-36.635C160.536,453.09,144.144,436.688,123.903,436.688z" style="fill: rgb(255, 255, 255);"></path>
	<path class="st0" d="M299.681,438.728c-20.24,0-36.633,16.408-36.633,36.633c0,20.24,16.392,36.639,36.633,36.639
		c20.23,0,36.633-16.398,36.633-36.639C336.314,455.137,319.911,438.728,299.681,438.728z" style="fill: rgb(255, 255, 255);"></path>
</g>
</svg><?php usces_totalquantity_in_cart(); ?> </div>
      <div id="navArea">
         <div class="sidebar-s">
           <ul class="g-menu">
             <li>
               <a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
             </li>
             <li>
               <a href="<?php echo get_option('home'); ?>/newpaydelivery.html" title="お支払いとお届け">お支払いとお届け</a>
             </li>
             <li>
                <a href="<?php echo get_option('home'); ?>/company.html" title="会社概要">会社概要</a>
             </li>
             <li class="color-list">
               <a href="<?php echo get_option('home'); ?>/usces-cart.html"title="カート内情報">  <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 32px; height: 32px; opacity: 1;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#fff;}
</style>
<g>
	<path class="st0" d="M426.093,0c-9.344,0-17.502,6.318-19.838,15.363l-20.277,78.574H28.775c-6.434,0-12.496,3.025-16.363,8.166
		c-3.867,5.144-5.096,11.805-3.316,17.994l58.826,204.123c2.526,8.771,10.557,14.814,19.682,14.814H322.73l-8.858,34.324H89.396
		v36.133h236.594c9.342,0,17.5-6.324,19.836-15.373l92.383-357.988h65.496V0H426.093z M349.925,233.652l-17.871,69.25h-45.133
		v-69.25H349.925z M376.653,130.068l-17.406,67.453h-72.326v-67.453H376.653z M250.79,233.652v69.25h-77.084v-69.25H250.79z
		 M250.79,130.068v67.453h-77.084v-67.453H250.79z M143.361,130.068v67.453H69.009l-19.436-67.453H143.361z M143.361,233.652v69.25
		H99.374l-19.955-69.25H143.361z" style="fill: rgb(255, 255, 255);"></path>
	<path class="st0" d="M123.903,436.688c-20.23,0-36.633,16.402-36.633,36.64c0,20.234,16.402,36.635,36.633,36.635
		c20.24,0,36.633-16.4,36.633-36.635C160.536,453.09,144.144,436.688,123.903,436.688z" style="fill: rgb(255, 255, 255);"></path>
	<path class="st0" d="M299.681,438.728c-20.24,0-36.633,16.408-36.633,36.633c0,20.24,16.392,36.639,36.633,36.639
		c20.23,0,36.633-16.398,36.633-36.639C336.314,455.137,319.911,438.728,299.681,438.728z" style="fill: rgb(255, 255, 255);"></path>
</g>
</svg>カート内情報： <span class="cart-quantity"><?php usces_totalquantity_in_cart(); ?></span></a>
             </li>

             <li>
               <a href="<?php echo get_option('home'); ?>/contact.html"title="カート内情報"><svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" style="width: 32px; height: 32px; opacity: 1;" xml:space="preserve">
<style type="text/css">

	.st0{fill:#fff;}

</style>
<g>
	<path class="st0" d="M496.563,68.828H15.438C6.922,68.828,0,75.75,0,84.281v30.391l256,171.547l256-171.563V84.281
		C512,75.75,505.078,68.828,496.563,68.828z" style="fill: rgb(255, 255, 255);"></path>
	<path class="st0" d="M0,178.016v203.391c0,34.125,27.641,61.766,61.781,61.766h388.438c34.141,0,61.781-27.641,61.781-61.766V178
		L256,349.563L0,178.016z" style="fill: rgb(255, 255, 255);"></path>
</g>
</svg>お問い合わせ</a>
             </li>
           </ul>

          <div class="c-menu">
             <h2><a href="<?php echo get_option('home'); ?>/originalitem">>オリジナル商品</a></h2>
             <h2><a href="<?php echo get_option('home'); ?>/c/recommend">>おすすめ商品</a></h2>
             <h2><a href="<?php echo get_option('home'); ?>/c/item">>取扱商品</a></h2>
             <div class="handled">
               <h3>
                 <a href="<?php echo get_option('home'); ?>/c/item/keshobako">化粧箱</a>
               </h3>
               <?php
                   $categories = get_categories('show_count=0&child_of=5&title_li=');
                   if (count($categories) == 0) {
                   ?>
               <ul>
                  <li>
                    <a href="<?php echo get_option('home'); ?>/c/item/keshobako">一覧へ</a>
                  </li>
               </ul>
            <?php
                   } else {
                   ?>
            <ul>
              <?php wp_list_categories('show_count=0&child_of=5&title_li='); ?>
            </ul>
            <?php
    }
    ?>

            <h3>
              <a href="<?php echo get_option('home'); ?>/c/item/yunyukago"
                >輸入籠</a
              >
            </h3>

            <?php
    $categories = get_categories('show_count=0&hide_empty=1&child_of=6&title_li=');
    if (count($categories) == 0) {
    ?>
            <ul>
              <li>
                <a href="<?php echo get_option('home'); ?>/c/item/yunyukago"
                  >一覧へ</a
                >
              </li>
            </ul>
            <?php
    } else {
    ?>
            <ul>
              <?php wp_list_categories('show_count=0&hide_empty=1&child_of=6&title_li='); ?>
            </ul>
            <?php
    }
    ?>

            <h3>
              <a href="<?php echo get_option('home'); ?>/c/item/butsuji"
                >仏事</a
              >
            </h3>

            <?php
    $categories = get_categories('show_count=0&hide_empty=1&child_of=7&title_li=');
    if (count($categories) == 0) {
    ?>
            <ul>
              <li>
                <a href="<?php echo get_option('home'); ?>/c/item/butsuji"
                  >一覧へ</a
                >
              </li>
            </ul>
            <?php
    } else {
    ?>
            <ul>
              <?php wp_list_categories('show_count=0&hide_empty=1&child_of=7&title_li='); ?>
            </ul>
            <?php
    }
    ?>

            <h3>
              <a href="<?php echo get_option('home'); ?>/c/item/rapping"
                >ラッピング</a
              >
            </h3>

            <?php
    $categories = get_categories('show_count=0&hide_empty=1&child_of=8&title_li=');
    if (count($categories) == 0) {
    ?>
            <ul>
              <li>
                <a href="<?php echo get_option('home'); ?>/c/item/rapping"
                  >一覧へ</a
                >
              </li>
            </ul>
            <?php
    } else {
    ?>
            <ul>
              <?php wp_list_categories('show_count=0&hide_empty=1&child_of=8&title_li='); ?>
            </ul>
            <?php
    }
    ?>

            <h3>
              <a href="<?php echo get_option('home'); ?>/c/item/kasehin"
                >化成品</a
              >
            </h3>

            <?php
    $categories = get_categories('show_count=0&hide_empty=0&child_of=9&title_li=');
    if (count($categories) == 0) {
    ?>
            <ul>
              <li>
                <a href="<?php echo get_option('home'); ?>/c/item/kasehin"
                  >一覧へ</a
                >
              </li>
            </ul>
            <?php
    } else {
    ?>
            <ul>
              <?php wp_list_categories('show_count=0&hide_empty=0&child_of=9&title_li='); ?>
            </ul>
            <?php
    }
    ?>
          </div>
        </div>
      </div>

      <div class="toggle-btn">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <div id="mask"></div>
    </div>
    </header>
    <div class="sidebar">
      <div class="icon-g">
       <a href="<?php echo esc_url(home_url('/')); ?>">
          <p class="small-title">果物の包装・梱包資材</p>
          <h1><span>名誠</span>パッケージ</h1>
        </a>
      </div>
      <ul class="g-menu">
        <li>
          <a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
        </li>

        <li>
          <a href="<?php echo get_option('home'); ?>/newpaydelivery.html" title="お支払いとお届け">お支払いとお届け</a>
        </li>
         <li>
             <a
              href="<?php echo get_option('home'); ?>/company.html"
              title="会社概要"
              >会社概要</a>
          </li>
        <li class="color-list">
          <a href="<?php echo get_option('home'); ?>/usces-cart.html" title="カート内情報"> <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 32px; height: 32px; opacity: 1;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#fff;}
</style>
<g>
	<path class="st0" d="M426.093,0c-9.344,0-17.502,6.318-19.838,15.363l-20.277,78.574H28.775c-6.434,0-12.496,3.025-16.363,8.166
		c-3.867,5.144-5.096,11.805-3.316,17.994l58.826,204.123c2.526,8.771,10.557,14.814,19.682,14.814H322.73l-8.858,34.324H89.396
		v36.133h236.594c9.342,0,17.5-6.324,19.836-15.373l92.383-357.988h65.496V0H426.093z M349.925,233.652l-17.871,69.25h-45.133
		v-69.25H349.925z M376.653,130.068l-17.406,67.453h-72.326v-67.453H376.653z M250.79,233.652v69.25h-77.084v-69.25H250.79z
		 M250.79,130.068v67.453h-77.084v-67.453H250.79z M143.361,130.068v67.453H69.009l-19.436-67.453H143.361z M143.361,233.652v69.25
		H99.374l-19.955-69.25H143.361z" style="fill: rgb(255, 255, 255);"></path>
	<path class="st0" d="M123.903,436.688c-20.23,0-36.633,16.402-36.633,36.64c0,20.234,16.402,36.635,36.633,36.635
		c20.24,0,36.633-16.4,36.633-36.635C160.536,453.09,144.144,436.688,123.903,436.688z" style="fill: rgb(255, 255, 255);"></path>
	<path class="st0" d="M299.681,438.728c-20.24,0-36.633,16.408-36.633,36.633c0,20.24,16.392,36.639,36.633,36.639
		c20.23,0,36.633-16.398,36.633-36.639C336.314,455.137,319.911,438.728,299.681,438.728z" style="fill: rgb(255, 255, 255);"></path>
</g>
</svg>カート内情報： <span class="cart-quantity"><?php usces_totalquantity_in_cart(); ?></span></a>
        </li>
</li>
         <li >
            <a
              href="<?php echo get_option('home'); ?>/contact.html"
              title="カート内情報"
              > <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" style="width: 32px; height: 32px; opacity: 1;" xml:space="preserve">
<style type="text/css">

	.st0{fill:#fff;}

</style>
<g>
	<path class="st0" d="M496.563,68.828H15.438C6.922,68.828,0,75.75,0,84.281v30.391l256,171.547l256-171.563V84.281
		C512,75.75,505.078,68.828,496.563,68.828z" style="fill: rgb(255, 255, 255);"></path>
	<path class="st0" d="M0,178.016v203.391c0,34.125,27.641,61.766,61.781,61.766h388.438c34.141,0,61.781-27.641,61.781-61.766V178
		L256,349.563L0,178.016z" style="fill: rgb(255, 255, 255);"></path>
</g>
</svg>お問い合わせ</a
            >
          </li>

      </ul>

      <div class="c-menu">
         <h2><a href="<?php echo get_option('home'); ?>/originalitem">>オリジナル商品</a></h2>
         <h2><a href="<?php echo get_option('home'); ?>/c/recommend">>おすすめ商品</a></h2>
         <h2><a href="<?php echo get_option('home'); ?>/c/item">>取扱商品</a></h2>
         <div class="handled">
            <h3><a href="<?php echo get_option('home'); ?>/c/item/keshobako">化粧箱</a></h3>
            <?php
            $categories = get_categories('show_count=0&child_of=5&title_li=');
            if (count($categories) == 0) {
             ?>
                 <ul>
                    <li><a href="<?php echo get_option('home'); ?>/c/item/keshobako">一覧へ</a></li>
                 </ul>
             <?php
             } else {
            ?>
                <ul>
                    <?php wp_list_categories('show_count=0&child_of=5&title_li='); ?>
                </ul>
            <?php
            }
                ?>
            <h3><a href="<?php echo get_option('home'); ?>/c/item/yunyukago">輸入籠</a></h3>

               <?php
               $categories = get_categories('show_count=0&hide_empty=1&child_of=6&title_li=');
               if (count($categories) == 0) {
              ?>
                  <ul>
                     <li><a href="<?php echo get_option('home'); ?>/c/item/yunyukago">一覧へ</a></li>
                 </ul>
               <?php
               } else {
               ?>
                 <ul>
                     <?php wp_list_categories('show_count=0&hide_empty=1&child_of=6&title_li='); ?>
                 </ul>
               <?php
               }
               ?>
           <h3><a href="<?php echo get_option('home'); ?>/c/item/butsuji">仏事</a></h3>
                <?php
                $categories = get_categories('show_count=0&hide_empty=1&child_of=7&title_li=');
                if (count($categories) == 0) {
                ?>
                    <ul>
                        <li><a href="<?php echo get_option('home'); ?>/c/item/butsuji">一覧へ</a></li>
                    </ul>
                <?php
                } else {
                ?>
                    <ul>
                        <?php wp_list_categories('show_count=0&hide_empty=1&child_of=7&title_li='); ?>
                    </ul>
                <?php
                }
                ?>
            <h3><a href="<?php echo get_option('home'); ?>/c/item/rapping">ラッピング</a></h3>
                    <?php
                    $categories = get_categories('show_count=0&hide_empty=1&child_of=8&title_li=');
                    if (count($categories) == 0) {
                    ?>
                        <ul>
                            <li><a href="<?php echo get_option('home'); ?>/c/item/rapping">一覧へ</a></li>
                        </ul>
                    <?php
                    } else {
                    ?>
                        <ul>
                            <?php wp_list_categories('show_count=0&hide_empty=1&child_of=8&title_li='); ?>
                        </ul>
                    <?php
                    }
                    ?>
             <h3><a href="<?php echo get_option('home'); ?>/c/item/kasehin">化成品</a></h3>
                    <?php
                    $categories = get_categories('show_count=0&hide_empty=0&child_of=9&title_li=');
                    if (count($categories) == 0) {
                    ?>
                        <ul>
                            <li><a href="<?php echo get_option('home'); ?>/c/item/kasehin">一覧へ</a></li>
                        </ul>
                    <?php
                    } else {
                    ?>
                        <ul>
                            <?php wp_list_categories('show_count=0&hide_empty=0&child_of=9&title_li='); ?>
                        </ul>
                    <?php
                    }
                    ?>
            </div>



        </div>
      </div>
    </div>

        <?php wp_head(); ?>