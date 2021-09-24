<?php get_header(); ?>

<section class="main">
    <div class="main__inner l-inner">
        <!-- Slider main container -->
        <div class="top-slider">
            <div class="swiper-custom-parent">
                <div class="swiper js-top-slide">
                    <!-- <div class="swiper-inner"> -->
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide filter">
                            <picture>
                                <source media="(min-width: 1100px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/mv-slide1.jpg">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/mv-slide1-sp.jpg" alt="slide1">
                            </picture>
                        </div>
                        <div class="swiper-slide filter">
                            <picture>
                                <source media="(min-width: 1100px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/mv-slide2.jpg">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/mv-slide2-sp.jpg" alt="slide2">
                            </picture>
                        </div>
                        <div class="swiper-slide filter">
                            <picture>
                                <source media="(min-width: 1100px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/mv-slide3.jpg">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/mv-slide3-sp.jpg" alt="slide3">
                            </picture>
                        </div>
                    </div>
                    <div class="swiper-lead-wrapper">
                        <p class="swiper-lead">街の皆さまの笑顔を守る</p><br>
                        <p class="swiper-lead">アットホームな歯医者さん</p>
                    </div>
                    <!-- /.swiper-lead-wrapper -->
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <div class="main__contents">
            <div class="main__calender">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/medical-time-pc.png" alt="カレンダー">
            </div>
            <!-- /.main__calender -->
            <div class="main__news news-list">
                <div class="news-list__top">
                    <div class="news-list__head">
                        <p class="news-list__title">お知らせ</p>
                        <p class="news-list__subtitle">news</p>
                    </div>
                    <!-- /.news-list__head -->
                    <a href="<?php echo esc_url(home_url('category/news')); ?>" class="news-list__archive-link trans">過去のお知らせはこちら</a>
                </div>
                <!-- /.news-list__head -->
                <div class="news-list__items">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="news-list__item">
                                <time class="news-list__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                                <p class="news-list__heading"><?php the_title(); ?></p>
                            </a>
                            <!-- /.news-list__item -->
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p>記事が見つかりませんでした</p>
                    <?php endif; ?>
                </div>
                <!-- /.news-list__items -->
            </div>
            <!-- /.main__news news-list -->
        </div>
        <!-- /.main__contents -->
    </div>
    <!-- /.main__inner l-inner -->
</section>
<!-- /.main -->

<section class="concept l-top-concept bg-whole">
    <div class="concept__inner l-max">
        <div class="concept__body">
            <div class="concept__title sub-title">
                <p class="sub-title__en">concept</p>
                <h1 class="sub-title__ja">健康的で素敵な笑顔あふれる<br>街づくりを目指して</h1>
            </div>
            <!-- /.concept__title -->
            <p class="concept__text">私たちは最新の医療技術を追求すると共に、患者様とのコミュニケーションを大事することで、気軽に通いやすく些細なことでも相談できる「街の掛かり付け医」を目指しております。<br>お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</p>
            <div class="concept__btn">
                <a href="<?php echo esc_url(home_url('about')); ?>" class="btn btn--arrow">当院について</a>
            </div>
            <!-- /.concept__btn -->
        </div>
        <!-- /.concept__body -->
        <div class="concept__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/concept-img1.jpg" alt="コンセプト画像">
        </div>
        <!-- /.concept__img -->
    </div>
    <!-- /.concept__inner l-max -->
</section>
<!-- /.concept l-top-concept bg-whole -->

<section class="recommend l-top-recommend">
    <div class="l-inner">
        <div class="recommend__title">
            <h2 class="title">当院の3つのおすすめ</h2>
        </div>
        <!-- /.recommend__title -->
        <div class="recommend__items">
            <div class="recommend__item recommend-item">
                <div class="recommend-item__head">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/recommend-1.svg" alt="おすすめ01">
                </div>
                <!-- /.recommend-item__head -->
                <div class="recommend-item__icon">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/recommend-1-img.png" alt="アイコン">
                </div>
                <!-- /.recommend-item__icon -->
                <h3 class="recommend-item__title">痛くない歯科医療の追求</h3>
                <p class="recommend-item__text">歯の治療において、小さな違和感は大きなストレスにつながります。<br>私たちは常に快適な歯科医療技術の研究を行っております。</p>
            </div>
            <!-- /.recommend__item recommend-item -->
            <div class="recommend__item recommend-item">
                <div class="recommend-item__head">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/recommend-2.svg" alt="おすすめ02">
                </div>
                <!-- /.recommend-item__head -->
                <div class="recommend-item__icon">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/recommend-2-img.png" alt="アイコン">
                </div>
                <!-- /.recommend-item__icon -->
                <h3 class="recommend-item__title">駅から徒歩3分</h3>
                <p class="recommend-item__text">「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。</p>
            </div>
            <!-- /.recommend__item recommend-item -->
            <div class="recommend__item recommend-item">
                <div class="recommend-item__head">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/recommend-3.svg" alt="おすすめ03">
                </div>
                <!-- /.recommend-item__head -->
                <div class="recommend-item__icon">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/recommend-3-img.png" alt="アイコン">
                </div>
                <!-- /.recommend-item__icon -->
                <h3 class="recommend-item__title">夜20:30まで営業</h3>
                <p class="recommend-item__text">朝から夜までお仕事をされている方のために、診療時間を見直しました。<br><span class="text--accent">※駆け込みでも対応可能ですが、事前にご連絡いただけるとスムーズです。</span></p>
            </div>
            <!-- /.recommend__item recommend-item -->
        </div>
        <!-- /.recommend__items -->
    </div>
    <!-- /.l-inner -->
</section>
<!-- /.recommend l-top-recommend -->

<section class="medical l-top-medical">
    <div class="bg-top">
        <picture>
            <source media="(min-width: 1100px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/bg-top.svg">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/bg-top-sp.svg" alt="背景画像">
        </picture>
    </div>
    <!-- /.bg-top -->
    <div class="medical__wrapper">
        <div class="l-inner">
            <div class="medical__title">
                <h2 class="title">診療案内</h2>
            </div>
            <div class="medical__items">
                <a href="<?php echo esc_url(home_url('medical')); ?>#general" class="medical__item medical-item filter">
                    <img class="medical-item__img" src="<?php echo get_template_directory_uri() ?>/assets/img/general.jpg" alt="一般診療">
                    <div class="medical-item__body">
                        <h3 class="medical-item__title">一般診療</h3>
                        <p class="medical-item__text">虫歯・入れ歯・小児歯科</p>
                    </div>
                    <!-- /.medical-item__body -->
                </a>
                <!-- /.medical__item medical-item -->
                <a href="<?php echo esc_url(home_url('medical')); ?>#dentures" class="medical__item medical-item filter">
                    <img class="medical-item__img" src="<?php echo get_template_directory_uri() ?>/assets/img/special.jpg" alt="特殊診療">
                    <h3 class="medical-item__title">特殊診療</h3>
                    <p class="medical-item__text">インプラント・ホワイトニング<br>予防歯科・口腔外科・審美歯科</p>
                </a>
                <!-- /.medical__item medical-item -->
            </div>
            <!-- /.medical__items -->
            <div class="medical__box">
                <p class="medical__text">当院では、患者さんの歯の健康状態や治療方針を丁寧にカウンセリングし、十分ご理解していただいた上で治療いたします。<br>痛みに配慮することと、可能な限り削らない・抜かない治療に努めております。<br><span class="text--accent">※特殊性の高い矯正治療などは保険の適応外となります。 これらの治療を行う際は事前に詳細と費用のご説明いたします。</span></p>
            </div>
            <!-- /.medical__box -->
        </div>
        <!-- /.l-inner -->
    </div>
    <!-- /.medical__wrapper -->
    <div class="bg-bottom">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/bg-bottom.svg" alt="背景画像">
    </div>
    <!-- /.bg-bottom -->
</section>
<!-- /.medical l-top-medical -->

<section class="blog l-top-blog">
    <div class="blog__wrapper">
        <div class="l-inner">
            <div class="blog__title">
                <h2 class="title">スタッフブログ</h2>
            </div>
            <!-- /.blog__title -->
            <div class="blog__items">
                <?php
                $args = array(
                    'posts_per_page' => 6, // 表示する投稿数
                    'post_type' => array('blog'), // 取得する投稿タイプのスラッグ
                    'orderby' => 'date', //日付で並び替え
                    'order' => 'DESC' // 降順 or 昇順
                );
                $my_posts = get_posts($args);
                $count = 0;
                ?>
                <?php foreach ($my_posts as $post) : setup_postdata($post); ?>
                    <a href="<?php the_permalink(); ?>" class="blog__item blog-item-top">
                        <?php
                        $count = $count + 1;
                        if ($count < 3) {
                            echo '<p class="blog-item-top__label">new</p>';
                        }
                        ?>

                        <div class="blog-item-top__img">
                            <?php
                            if (has_post_thumbnail()) {
                                // アイキャッチ画像が設定されてれば大サイズで表示
                                the_post_thumbnail('large');
                            } else {
                                // なければnoimage画像をデフォルトで表示
                                echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/blog.jpg" alt="ブログサムネイル">';
                            } ?>
                        </div>
                        <div class="blog-item-top__body">

                            <?php $terms = get_the_terms($post->ID, 'blog_category'); ?>
                            <?php if (!empty($terms)) : ?>
                                <?php foreach ($terms as $term) : ?>
                                    <p class="blog-item-top__category"><?php echo $term->name; ?></p>
                                <?php endforeach; ?>
                            <?php endif; ?>

                            <!--モバイルのときは文字数を調整-->
                            <h3 class="blog-item-top__title">
                                <?php
                                if (wp_is_mobile() && (mb_strlen($post->post_title, 'UTF-8') > 25)) {
                                    $title = mb_substr($post->post_title, 0, 25, 'UTF-8');
                                    echo $title . '…';
                                } else {
                                    echo $post->post_title;
                                }
                                ?>
                            </h3>
                            <time class="blog-item-top__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                        </div>
                        <!-- /.blog-item-top__body -->
                    </a>
                    <!-- /.blog__item blog-item-top -->

                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>

            </div>
            <!-- /.blog__items -->
            <div class="blog__btn">
                <a href="<?php echo esc_url(home_url('blogs')); ?>" class="btn btn--arrow">スタッフブログ一覧はこちら</a>
            </div>
            <!-- /.blog__btn -->
        </div>
        <!-- /.l-inner -->
    </div>
    <!-- /.blog__wrapper -->
</section>
<!-- /.blog l-top-blog -->

<?php get_footer(); ?>