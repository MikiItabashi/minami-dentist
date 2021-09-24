<?php get_header(); ?>

<?php get_template_part('templates/page-head'); ?>

<section class="medical-menu l-medical-menu">
    <div class="l-inner">
        <div class="medical-menu__general">
            <div class="medical-menu__head">
                <p class="medical-menu__title">一般診療</p>
                <p class="medical-menu__label">保険対象</p>
            </div>
            <!-- /.medical-menu__head -->
            <ul class="medical-menu__items">
                <li class="medical-menu__item">
                    <a href="#general" class="medical-menu__link btn">一般歯科</a>
                </li>
                <li class="medical-menu__item">
                    <a href="#pediatric" class="medical-menu__link btn">小児歯科</a>
                </li>
                <li class="medical-menu__item">
                    <a href="#preventive" class="medical-menu__link btn">予防歯科</a>
                </li>
            </ul>
            <!-- /.medical-menu__items -->
        </div>
        <!-- /.medical-menu__general -->
        <div class="medical-menu__special">
            <div class="medical-menu__head">
                <p class="medical-menu__title">特殊診療</p>
                <p class="medical-menu__label medical-menu__label--accent">実費</p>
            </div>
            <!-- /.medical-menu__head -->
            <ul class="medical-menu__items">
                <li class="medical-menu__item">
                    <a href="#dentures" class="medical-menu__link btn">入れ歯</a>
                </li>
                <li class="medical-menu__item">
                    <a href="#orthodontics" class="medical-menu__link btn">矯正歯科</a>
                </li>
                <li class="medical-menu__item">
                    <a href="#whitening" class="medical-menu__link btn">ホワイトニング</a>
                </li>
                <li class="medical-menu__item">
                    <a href="#oralsurgery" class="medical-menu__link btn">口腔外科</a>
                </li>
                <li class="medical-menu__item">
                    <a href="#lasertreatment" class="medical-menu__link btn">レーザー治療</a>
                </li>
            </ul>
            <!-- /.medical-menu__items -->
        </div>
        <!-- /.medical-menu__special -->
    </div>
    <!-- /.l-inner -->
</section>
<!-- /.medical-menu l-medical-menu -->

<section class="general l-medical-general">
    <div class="bg-top">
        <picture>
            <source media="(min-width: 1100px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/bg-top.svg">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/bg-top-sp.svg" alt="背景画像">
        </picture>
    </div>
    <!-- /.bg-top -->

    <div class="general__wrapper">
        <div class="general__inner l-inner">
            <div class="general__title">
                <h2 class="title">一般診療</h2>
            </div>
            <div class="general__items">
                <?php
                $args = array(
                    'posts_per_page' => -1, // 表示する投稿数
                    'post_type' => array('plan'), // 取得する投稿タイプのスラッグ
                    'order' => 'ASC', // 降順 or 昇順
                    'tax_query' => [
                        [
                            'taxonomy' => 'medical_plan', // 絞り込みたいカスタムタクソノミー
                            'field' => 'slug', // スラッグで検索。idでも検索できます
                            'terms' => 'general', // 検索する文字列（fieldがidならidが入ります）
                            'include_children' => true, // 子タクソノミーを含むかどうか
                            'operator' => 'AND' // termsが複数ある場合AND検索（全て）かIN検索（いずれか）かNOT IN（いずれも除く）
                        ]
                    ]
                );
                $my_posts = get_posts($args);
                ?>
                <?php foreach ($my_posts as $post) : setup_postdata($post); ?>

                    <?php get_template_part('templates/plan'); ?>

                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <!-- /.general__items -->
        </div>
        <!-- /.general__inner l-inner -->
    </div>
    <!-- /.general__wrapper -->

    <div class="bg-bottom">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/bg-bottom.svg" alt="背景画像">
    </div>
    <!-- /.bg-bottom -->

</section>
<!-- /.general l-medical-general -->

<section class="special l-medical-special">
    <div class="bg-top">
        <picture>
            <source media="(min-width: 1100px)" srcset="<?php echo get_template_directory_uri() ?>/assets/img/bg-top.svg">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/bg-top-sp.svg" alt="背景画像">
        </picture>
    </div>
    <!-- /.bg-top -->

    <div class="special__wrapper">
        <div class="special__inner l-inner">
            <div class="special__title">
                <h2 class="title">特殊診療</h2>
            </div>
            <div class="special__items">
                <?php
                $args = array(
                    'posts_per_page' => -1, // 表示する投稿数
                    'post_type' => array('plan'), // 取得する投稿タイプのスラッグ
                    'order' => 'ASC', // 降順 or 昇順
                    'tax_query' => [
                        [
                            'taxonomy' => 'medical_plan', // 絞り込みたいカスタムタクソノミー
                            'field' => 'slug', // スラッグで検索。idでも検索できます
                            'terms' => 'special', // 検索する文字列（fieldがidならidが入ります）
                            'include_children' => true, // 子タクソノミーを含むかどうか
                            'operator' => 'AND' // termsが複数ある場合AND検索（全て）かIN検索（いずれか）かNOT IN（いずれも除く）
                        ]
                    ]
                );
                $my_posts = get_posts($args);
                ?>
                <?php foreach ($my_posts as $post) : setup_postdata($post); ?>
                    <?php get_template_part('templates/plan'); ?>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <!-- /.special__items -->
        </div>
        <!-- /.special__inner l-inner -->
    </div>
    <!-- /.special__wrapper -->

    <div class="bg-bottom">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/bg-bottom.svg" alt="背景画像">
    </div>
    <!-- /.bg-bottom -->

</section>
<!-- /.special l-medical-special -->

<?php get_footer(); ?>