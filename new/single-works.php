<?php get_header(); ?>

<?php get_template_part('header-menu'); ?>

<main id="main" class="works-view">
  <section id="works">
    <div class="section-title-center">
      <h2 class="section-title-en">Works</h2>
      <p class="section-title-ja">制作したもの</p>
    </div>

    <!-- モーダルエリアここから -->
    <section id="modalArea" class="modalArea">
      <div id="modalBg" class="modalBg"></div>
      <div class="modalWrapper">
        <div class="modalContents">
          <div class="modalTop">
            <div id="closeModal" class="closeModal">×</div>
          </div>
          <img src="<?php the_field('sp-image'); ?>" alt="スマホ版イメージ">
        </div>
      </div>
    </section>
    <!-- モーダルエリアここまで -->

    <div class="works-img-view">
      <p class="pc-image">PC版イメージ</p>
      <img src="<?php the_field('pc-image'); ?>" alt="PC版イメージ">

      <div id="openModal" class="circle-btn">
        <p>スマホ版を見る</p>
      </div>


      <dl class="works-txt">
        <dt>概要</dt>
        <dd><?php
            if (!empty(get_field('summary'))) {
              echo get_field('summary');
            }
            ?></dd>

        <dt>URL</dt>
        <dd>
          <?php
          $link = get_field('url');
          if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
          <?php endif; ?>
        </dd>

        <dt>主な特徴</dt>
        <dd>
          <?php
          if (!empty(get_field('feature'))) {
            echo get_field('feature');
          }
          ?>
        </dd>

        <dt>制作範囲</dt>
        <dd>
          <?php
          $select = get_field('contents');

          if ($select) {
            echo '<ul>';
            foreach ($select as $child) {
              echo '<li>';
              if (is_array($child)) {
                //bothの場合、ラベルを出力
                echo $child['label'];
              } else {
                //単独の返り値の場合の出力
                echo $child;
              }
              echo '</li>';
            }
            echo '</ul>';
          }
          ?>
        </dd>

        <dt>使用言語/ツール
        </dt>
        <dd>
          <?php
          $select = get_field('language');

          if ($select) {
            echo '<ul>';
            foreach ($select as $child) {
              echo '<li>';
              if (is_array($child)) {
                //bothの場合、ラベルを出力
                echo $child['label'];
              } else {
                //単独の返り値の場合の出力
                echo $child;
              }
              echo '</li>';
            }
            echo '</ul>';
          }
          ?>
        </dd>
      </dl>
    </div>

    <div class="readmore back">
      <a href="works-list.html"><span>戻る</span></a>
    </div>
  </section>
</main>

<?php get_footer(); ?>