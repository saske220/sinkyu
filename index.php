<?php get_header(); ?>

    <main>


      <body <?php body_class(); ?>>
      <div class="main-image">
        <img src="<?php echo esc_url(get_theme_file_uri('/images/main-image3.webp')); ?>" class="star" alt="名誠パッケージ">
      </div>
       <div  data-aos="fade-left" class="ubber" >
          <p>果物店 青果店 篭盛り専門店で使う包装資材のことならすべて<span><span class="orange">名誠</span>パッケージ</span>にお任せください<br>箱・篭・包装紙・リボン・ネットなどからシルク造花まですべてお任せください。名入れにより、オリジナル制作も可能です。小ロットでの詰め合わせも致します。</p>
        </div>
         <div  data-aos="fade-left" class="ubber" id="header_sub">
          <p>果物店 青果店 篭盛り専門店で使う包装資材のことならすべて<span><span class="orange">名誠</span>パッケージ</span>にお任せください。箱・篭・包装紙・リボン・ネットなどからシルク造花まですべてお任せください。名入れにより、オリジナル制作も可能です。小ロットでの詰め合わせも致します。</p>
        </div>

        <section class="Recommendation">
        <a href="<?php echo get_option('home'); ?>/item/originalitem/1698.html">
          <h2 class="Recommendation__title">イチオシ商品</h2>
          <div class="Recommendation__flex">
          <div class="Recommendation__left">
            <img class="Recommendation__image" src="<?php echo esc_url(get_theme_file_uri('/images/mk22-101.jpg')); ?>" alt="main_logo">

          </div>
          <div class="Recommendation__right rText">
            <h3 class="rText__title">再び 1セット  (mk22-101)</h3>
            <p class="rText__text">単価(税込)￥１６５０

弊社オリジナルの仏事用御供台です<br>

リサイクルの出来る段ボールになっております<br>

缶詰めの御供セットでも耐久性が高いです<br>

表面のシートは黒ベタに金色の点がちりばめてあるシートが貼り付けてあるので高級感があります<br>

造花を付ける為、側面３箇所ずつ結束バンドが使える様に穴をあけてあります<br>

本体サイズ　横44㎝奥行き35㎝×高さ83㎝</p>

<p class="rText__price">¥1,650</p>
</div>
          </div>
</a>
        </section>




       <section data-aos="fade-up"
           data-aos-duration="300" class="m_products original-product">
          <div class="inner">
            <div class="title">
             <h2 class="title_header"><a href="<?php echo get_option('home'); ?>/originalitem">オリジナル商品</a></h2>
               <div class="readmore">
               <div data-aos="fade-left"
     data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="1000"   class="m_btn_readmore_wh">
              <a href="<?php echo get_option('home'); ?>/originalitem" >
                <span class="label pc_txt_14_ja sp_txt_14_ja"
                  >オリジナル商品一覧</span
                >
                <span class="img"
                  ><img
                    src="https://d2w53g1q050m78.cloudfront.net/sisitokyo/uploads/pc/images/_renew/common/icon_next.svg"
                /></span>
              </a>
            </div>
          </div>

        </div>
          </div>
          <div class="m_product_items products-horizonal">
          <div class="items-scroll">

          <?php $posts = get_posts('numberposts=6&category=3');
          foreach ($posts as $post) :
            setup_postdata($post);?>

            <div class="m_product_item" id="m_product_item">
               <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>">

              <div class="head">
                <figure>
                  <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>"><?php the_post_thumbnail('medium'); ?></a>
                </figure>

                <div class="title pc_txt_26_en sp_txt_18_en">
                  <strong><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></strong>
                </div>

                   <p class="detail"><?php echo wp_trim_words( get_the_content(), 70, '[続く]' ); ?></p>

              </div>
              <div class="info">
                <div class="desc pc_txt_13_ja sp_txt_10_ja">
                   <h3 class="price">¥<?php usces_the_firstPrice(); ?></h3>

                  <div  class="m_product_btn">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>">
                    <span class="label">商品詳細はこちら</span>
                    <span class="img"
                      ><img
                        src="https://d2w53g1q050m78.cloudfront.net/sisitokyo/uploads/pc/images/_renew/common/icon_cart.svg"
                    /></span>
                     </a>

                </div>
                </div>
              </div>
          </a>
            </div>
                         <?php endforeach; ?>




          </div>
          </div>
          </div>
        </section>

               <section data-aos="fade-up"
     data-aos-duration="300" class="m_products featured-product">
          <div class="inner">
            <div class="title">
                <h2 class="title_header"><a href="<?php echo get_option('home'); ?>/c/recommend">おすすめ商品</a></h2>
               <div class="readmore">

               <div data-aos="fade-left"
     data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="1000"  class="m_btn_readmore_wh">
               <a href="<?php echo get_option('home'); ?>/c/recommend">
                <span  class="label pc_txt_14_ja sp_txt_14_ja"
                  >おすすめ商品一覧</span
                >
                <span class="img"
                  ><img
                    src="https://d2w53g1q050m78.cloudfront.net/sisitokyo/uploads/pc/images/_renew/common/icon_next.svg"
                /></span>
              </a>


            </div>
          </div>
          </div>
          <div  class="m_product_items products-horizonal">
          <div class="items-scroll">
             <?php $posts = get_posts('numberposts=6&category=20');
          foreach ($posts as $post) :
            setup_postdata($post); ?>
            <div class="m_product_item" id="m_product_item">

              <div class="head">

                <figure>
                     <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>"><?php echo get_post_meta($post->ID, 'thumb', TRUE); ?><?php the_post_thumbnail(''); ?></a>
                </figure>

                 <div class="title pc_txt_26_en sp_txt_18_en">
                   <strong><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></strong>
                  </div>

                <p class="detail"><?php echo wp_trim_words( get_the_content(), 50, '[続く]' ); ?></p>




              </div>
              <div class="info">
                <div class="desc pc_txt_13_ja sp_txt_10_ja">
                          <h3 class="price">¥<?php usces_the_firstPrice(); ?></h3>
                 <div class="m_product_btn">
                  <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>">
                    <span class="label">商品詳細はこちら</span>
                    <span class="img"
                      ><img
                        src="https://d2w53g1q050m78.cloudfront.net/sisitokyo/uploads/pc/images/_renew/common/icon_cart.svg"
                    /></span>
                  </a>
                </div>
                </div>
              </div>
            </div>
                     <?php endforeach; ?>
          </div>
          </div>
          </div>
        </section>



 <section data-aos="fade-up"
     data-aos-duration="300" class="m_products handled-product">
          <div class="inner">
            <div class="title">
                <h2 class="title_header"><a href="<?php echo get_option('home'); ?>/c/item">取扱商品</a></h2>
               <div class="readmore">
               <div  data-aos="fade-left"
     data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="1000"   class="m_btn_readmore_wh">
               <a href="<?php echo get_option('home'); ?>/c/item">
                <span class="label pc_txt_14_ja sp_txt_14_ja"
                  >取扱商品一覧</span
                >
                <span class="img"
                  ><img
                    src="https://d2w53g1q050m78.cloudfront.net/sisitokyo/uploads/pc/images/_renew/common/icon_next.svg"
                /></span>
              </a>


            </div>
          </div>
          </div>
          <div class="m_product_items products-horizonal">
          <div class="items-scroll">

          <?php $posts = get_posts('numberposts=6&category=13');
          foreach ($posts as $post) :
            setup_postdata($post); ?>

          <div class="m_product_item" id="m_product_item">
              <div class="head">
                <figure>
                     <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>"><?php echo get_post_meta($post->ID, 'thumb', TRUE); ?><?php the_post_thumbnail(''); ?></a>
               </figure>
                <div class="title pc_txt_26_en sp_txt_18_en">
                   <dd><strong><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></strong>
                   </dd>
                </div>
                    <p class="detail"><?php echo wp_trim_words( get_the_content(), 70, '[続く]' ); ?></p>
              </div>
              <div class="info">
                <div class="desc pc_txt_13_ja sp_txt_10_ja">
                  <h3 class="price">¥<?php usces_the_firstPrice(); ?></h3>
                  <div class="m_product_btn">
                   <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>">
                    <span class="label">商品詳細はこちら</span>
                    <span class="img"
                      ><img
                        src="https://d2w53g1q050m78.cloudfront.net/sisitokyo/uploads/pc/images/_renew/common/icon_cart.svg"
                    /></span>
                     </a>
                </div>
                </div>
              </div>
            </div>
           <?php endforeach; ?>
          </div>
          </div>
          </div>

        </section>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://d2w53g1q050m78.cloudfront.net/sisitokyo/uploads/pc/renew_common.bundle.js"></script>











    </main>

<?php get_footer(); ?>


  </body>
</html>
