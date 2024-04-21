

<li>
    <div>
    <?php usces_the_item(); usces_have_skus(); ?>
   <a href="<?php the_permalink(); ?>">
        <?php usces_the_itemImage($number=0, $width=200, $height=200); ?>
</a>
        <h3><?php usces_the_itemName(); ?></h3>
         <p class="detail"><?php echo wp_trim_words(get_the_content(), 30, '[続く]'); ?></p>
        <p>
       &yen;<?php usces_the_firstPrice(); ?><?php usces_guid_tax(); ?></p>
       </div>
       <div>
        <div class="m_product_btn">
                                <a href="<?php the_permalink(); ?>">
                                    <span class="label">商品詳細</span>
                                    <span class="img">
                                        <img src="https://d2w53g1q050m78.cloudfront.net/sisitokyo/uploads/pc/images/_renew/common/icon_cart.svg">
                                    </span>
                                </a>
                            </div>
                            </div>

</li>