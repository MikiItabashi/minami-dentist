<?php get_header(); ?>

<?php get_template_part('templates/page-head'); ?>

<section class="director l-staff-director" id="director">
    <div class="director__inner l-inner">
        <div class="director__title">
            <h2 class="title">院長のあいさつ</h2>
        </div>
        <!-- /.director__title -->
        <div class="director__body">
            <div class="director__content">
                <p class="director__lead">気軽に相談できる<br>街の歯医者さんでありたい。</p>
                <p class="director__message">当院は治療はもちろん、予防歯科にも力を入れておりますので、お口に関する相談だけでもお越しいただきたいと考えております。<br><br>「患部を直すこと」より「未然に防ぐこと」が最も良い歯科医療と言えますので、些細なことでも気軽に話せる街の歯医者さんとして、明るい街づくりに貢献していきたいと考えております。</p>
                <div class="director__info">
                    <p class="director__name">みなみ歯科クリニック<br>院長　南 俊雄</p>
                </div>
                <!-- /.director__info -->

                <div class="director__img u-mobile">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/staff1.jpg" alt="院長の写真">
                </div>
                <!-- /.director__img u-mobile -->
                <div class="director__history">
                    <p class="director__history-title">経歴</p>
                    <dl class="director__history-dl">
                        <div class="director__history-list">
                            <dt class="director__history-year">2004年</dt>
                            <dd class="director__history-text">東京医科歯科大学歯学部 卒業</dd>
                        </div>
                    </dl>
                    <dl class="director__history-dl">
                        <div class="director__history-list">
                            <dt class="director__history-year">2008年</dt>
                            <dd class="director__history-text">東京歯科大学歯学研究科大学院修了<br>博士(歯学)取得</dd>
                        </div>
                    </dl>
                    <dl class="director__history-dl">
                        <div class="director__history-list">
                            <dt class="director__history-year">2012年</dt>
                            <dd class="director__history-text">みなみ歯科クリニック 開院</dd>
                        </div>
                    </dl>
                </div>
                <!-- /.director__history -->
                <div class="director__certification">
                    <p class="director__certification-title">資格</p>
                    <ul class="director__certification-items">
                        <li class="director__certification-item">歯科医師臨床研修指導歯科医</li>
                        <li class="director__certification-item">博士(歯学)</li>
                        <li class="director__certification-item">衛生検査技師</li>
                    </ul>
                </div>
                <!-- /.director__certification -->
            </div>
            <!-- /.director__content -->
            <div class="director__img u-desktop">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/staff1.jpg" alt="院長の写真">
            </div>
            <!-- /.director__img u-desktop -->
        </div>
        <!-- /.director__body -->
    </div>
    <!-- /.director__inner l-inner -->
</section>
<!-- /.director l-staff-director -->

<section class="gallery l-staff-gallery">
    <!-- Slider main container -->
    <div class="gallery__slider">
        <div class="swiper js-gallery-slide">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/staff-slider1.jpg" alt="スライダー画像1">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/staff-slider2.jpg" alt="スライダー画像2">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/staff-slider3.jpg" alt="スライダー画像3">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/staff-slider4.jpg" alt="スライダー画像4">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/staff-slider5.jpg" alt="スライダー画像5">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.gallery l-staff-gallery -->

<section class="members l-staff-members" id="members">
    <div class="members__inner l-inner">
        <div class="members__title">
            <h2 class="title">スタッフ紹介</h2>
        </div>
        <!-- /.members__title -->
        <div class="menbers__hygienist">
            <h3 class="members__role">歯科衛生士</h3>
            <div class="members__items">
                <?php
                $args = array(
                    'posts_per_page' => -1, // 表示する投稿数
                    'post_type' => array('staff'), // 取得する投稿タイプのスラッグ
                    'order' => 'ASC', // 降順 or 昇順
                    'tax_query' => [
                        [
                            'taxonomy' => 'staff_role', // 絞り込みたいカスタムタクソノミー
                            'field' => 'slug', // スラッグで検索。idでも検索できます
                            'terms' => 'dental-hygienist', // 検索する文字列（fieldがidならidが入ります）
                            'include_children' => true, // 子タクソノミーを含むかどうか
                            'operator' => 'AND' // termsが複数ある場合AND検索（全て）かIN検索（いずれか）かNOT IN（いずれも除く）
                        ]
                    ]
                );
                $my_posts = get_posts($args);
                ?>
                <?php foreach ($my_posts as $post) : setup_postdata($post); ?>
                    <?php get_template_part('templates/members-item'); ?>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <!-- /.members__items -->
        </div>
        <!-- /.menbers__hygienist -->
        <div class="menbers__assistant">
            <h3 class="members__role">歯科助手</h3>
            <div class="members__items">
                <?php
                $args = array(
                    'posts_per_page' => -1, // 表示する投稿数
                    'post_type' => array('staff'), // 取得する投稿タイプのスラッグ
                    'order' => 'ASC', // 降順 or 昇順
                    'tax_query' => [
                        [
                            'taxonomy' => 'staff_role', // 絞り込みたいカスタムタクソノミー
                            'field' => 'slug', // スラッグで検索。idでも検索できます
                            'terms' => 'dental-assistant', // 検索する文字列（fieldがidならidが入ります）
                            'include_children' => true, // 子タクソノミーを含むかどうか
                            'operator' => 'AND' // termsが複数ある場合AND検索（全て）かIN検索（いずれか）かNOT IN（いずれも除く）
                        ]
                    ]
                );
                $my_posts = get_posts($args);
                ?>
                <?php foreach ($my_posts as $post) : setup_postdata($post); ?>
                    <?php get_template_part('templates/members-item'); ?>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <!-- /.members__items -->
        </div>
        <!-- /.menbers__assistant -->
    </div>
    <!-- /.members__inner l-inner -->
</section>
<!-- /.members l-staff-members -->
<?php get_footer(); ?>