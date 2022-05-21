<?php get_header(); ?>

<div id="firstview">
  <h2 class="first-title">
    suimenka

    <span class="circle-01"></span>
    <span class="circle-02"></span>
    <span class="circle-03"> </span>
  </h2>

  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
</div>

<?php get_template_part('header-menu'); ?>

<div class="wrap">
  <main id="main">

    <section id="about">
      <div class="section-title-center">
        <h2 class="section-title-en">About</h2>
        <p class="section-title-ja">コンセプトと、私について</p>
      </div>
      <div class="about-1 fadein">
        <div class="concept">
          <p class="catch">『 suimenka = 水面下 』</p>
          <p class="fish">
            <i class="fas fa-fish black-fish fa-rotate-180"></i>
          </p>

          <div class="concept-txt-pc">
            <p>
              Webサイトの素敵なところはこだわりや<br />オリジナリティを発信できる点です。
            </p>
            <p>
              水面下にあるイメージ･アイディア･らしさを<br />
              浮上させて、ぜひ形にしてみませんか？
            </p>
          </div>
          <div class="concept-txt-sp">
            <p>
              Webサイトの素敵なところはこだわりやオリジナリティを発信できる点です。
            </p>
            <br>
            <p>
              水面下にあるイメージ･アイディア･らしさを浮上させて、ぜひ形にしてみませんか？
            </p>
          </div>

        </div>

        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
      </div>

      <div class="about-2 fadein">
        <div class="profile">
          <div class="profile-img">
            <img src="<?php echo get_theme_file_uri('/images/profile.png'); ?>" alt="" プロフィール画像 />
          </div>
          <div class="profile-txt-pc">
            <p class="myname">NAME : Saori Suzuki</p>
            <p>一般企業で約12年間経理職に従事。<br>
              趣味でサイト運営をしていた経験から<br>
              Web制作の世界に惹かれ、デザインと<br>
              コーディングの道へ。</p>

            <p>クライアント様の思い描いているものを<br>
              表現することを第一に考えています。</p>
            </p>
          </div>
          <div class="profile-txt-sp">
            <p class="myname">NAME : Saori Suzuki</p>
            <p>一般企業で約12年間経理職に従事。
              趣味でサイト運営をしていた経験から
              Web制作の世界に惹かれ、デザインとコーディングの道へ。</p>

            <p>クライアント様の思い描いているものを表現することを第一に考えています。</p>
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="service">
      <div class="section-title-center">
        <h2 class="section-title-en">Service</h2>
        <p class="section-title-ja">サービス内容</p>
      </div>

      <ul class="service-content">
        <li class="service-menu fadein">
          <img src="<?php echo get_theme_file_uri('/images/icon1.png'); ?>" alt="Hearing" />
          <div class="service-title">Hearing</div>
          <p>
            どんなHPを作りたいか
            (構造･イメージ)をご相談しながらお見積りさせて頂きます。<br />
            不明点はお気軽にお尋ね下さい。
          </p>
          <div class="wave"></div>
        </li>

        <div class="arrow fadein"></div>

        <li class="service-menu fadein">
          <img src="<?php echo get_theme_file_uri('/images/icon2.png'); ?>" alt="Design" />
          <div class="service-title">Design</div>
          <p>
            ご相談頂きました内容に基づきデザインします。デザインデータがある場合はそちらを使用させて頂くことも可能です。
          </p>
          <div class="wave"></div>
        </li>

        <div class="arrow fadein"></div>

        <li class="service-menu fadein">
          <img src="<?php echo get_theme_file_uri('/images/icon3.png'); ?>" alt="Coding" />
          <div class="service-title">Coding</div>
          <p>
            デザインが確定しましたら制作作業に入ります。<br />
            スマホ版の制作も合わせて行い、動作を確認後に納品となります。
          </p>
          <div class="wave"></div>
        </li>
      </ul>

      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
    </section>

    <section id="works">
      <div class="section-title-center">
        <h2 class="section-title-en">Works</h2>
        <p class="section-title-ja">制作したもの</p>
      </div>
      <div class="grid">
        <?php
        $args = array(
          'post_type' => 'works', //カスタム投稿タイプ名
          'posts_per_page' => 4 //取得する投稿の件数
        );
        ?>
        <?php $posts = get_posts($args); ?>
        <?php foreach ($posts as $post) : ?>
          <?php setup_postdata($post); ?>

          <div class="g-item fadein">

            <a href="<?php the_permalink(); ?>">
              <img class="fadein" src="<?php the_post_thumbnail_url('full'); ?>" alt="">
              <p class="works-title"><?php the_title(); ?></p>
            </a>
          </div>

        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>

      </div>
    </section>

    <section id="contact">
      <div class="section-title-center">
        <h2 class="section-title-en">Contact</h2>
        <p class="section-title-ja">お問い合わせ</p>
      </div>

      <?php the_content(); ?>

      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
    </section>
  </main>

  <?php get_footer(); ?>