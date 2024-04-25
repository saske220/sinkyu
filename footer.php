
    <?php wp_footer(); ?>
    <footer>
      <p class="top-back">
        <a href="#top" title="このページの上部へ">▲このページのtopへ</a>
      </p>
      <div class="footer-bgcolor">
        <div class="company-flex">
            <div class="icon-g">
               <a href="<?php echo esc_url(home_url('/')); ?>">
                 <p class="small-title">果物の包装・梱包資材</p>
                   <h1><span>名誠</span>パッケージ</h1>
                </a>
             </div>
            <ul>
              <li>〒463-0011愛知県名古屋市守山区小幡三丁目12番11号</li>
              <li>【TEL】052-737-9139</li>
               <li>【FAX】052-737-9539</li>
                <li>【定休日】 土日祝・年末年始・ゴールデンウィーク・お盆</li>
                 <li>【営業時間】	10:00～17:00</li>
            </ul>
        </div>
        <div class="f-navi">
          <p><a href="<?php echo get_option('home'); ?>/privacypolicy.html">
            個人情報の取り扱いについて
        </a></p>
          <p> <a href="<?php echo get_option('home'); ?>/tokutei.html">
            特定商取引に関する表示
        </a></p>
        </div>

        <div class="copyright">
          <small><a href="#">©Copyright meisei-pack.jp</a></small>
        </div>
      </div>
    </footer>

     <script src="/script/script.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      $(document).ready(function () {
        $("a[href^=#]").click(function () {
          var speed = 100;
          var href = $(this).attr("href");
          var target = $(href == "#" || href == "" ? "html" : href);
          var position = target.offset().top;
          $("html, body").animate({ scrollTop: position }, speed, "swing");
          return false;
        });
      });


      let nav = document.querySelector("#navArea");
let btn = document.querySelector(".toggle-btn");
let mask = document.querySelector("#mask");

btn.onclick = () => {
  nav.classList.toggle("open");
};

mask.onclick = () => {
  nav.classList.toggle("open");
};

(function($) {

  // masthead scroll
  var header = $('#header_sub');
  var adclass = 'scrolled';
  var scrollY = 620;

  $(window).scroll(function() {
    if ($(window).scrollTop() > scrollY) {
      header.addClass(adclass);
    } else {
      header.removeClass(adclass);
    }
  });
})(jQuery);
    </script>
