<section class="sidebar l-sidebar">
    <div class="sidebar__clinic">
        <div class="sidebar__subhead">
            <img class="sidebar__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/sidebar-icon_1.svg" alt="アイコン">
            <p class="sidebar__title">クリニックの紹介</p>
        </div>
        <!-- /.sidebar__subhead -->
        <div class="sidebar__clinic-img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/sidebar-img_1.jpg" alt="クリニックの写真">
        </div>
        <!-- /.sidebar__clinic-img -->
        <p class="sidebar__clinic-name">みなみ歯科クリニック</p>
        <p class="sidebar__clinic-text">お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</p>
        <a href="<?php echo esc_url(home_url('about')); ?>" class="sidebar__clinic-link trans">当院について</a>
    </div>
    <!-- /.sidebar__clinic -->
    <div class="sidebar__post">
        <div class="sidebar__subhead">
            <img class="sidebar__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/sidebar-icon_2.svg" alt="アイコン">
            <p class="sidebar__title">新着記事</p>
        </div>
        <!-- /.sidebar__subhead -->
        <div class="sidebar__post-items">
            <?php
            $args = array(
                'posts_per_page' => 5, // 表示する投稿数
                'post_type' => array('blog'), // 取得する投稿タイプのスラッグ
                'orderby' => 'date', //日付で並び替え
                'order' => 'DESC', // 降順 or 昇順
            );
            $my_posts = new WP_Query($args);
            if ($my_posts->have_posts()) :
                while ($my_posts->have_posts()) : $my_posts->the_post();
            ?>
                    <a href="<?php the_permalink(); ?>" class="sidebar__post-item blog-item">

                        <div class="blog-item__img blog-item__img--small">
                            <?php
                            if (has_post_thumbnail()) {
                                // アイキャッチ画像が設定されてれば大サイズで表示
                                the_post_thumbnail('large');
                            } else {
                                // なければnoimage画像をデフォルトで表示
                                echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/blog.jpg" alt="ブログサムネイル">';
                            } ?>
                        </div>
                        <div class="blog-item__body blog-item__body--small">
                            <?php $terms = get_the_terms($post->ID, 'blog_category'); ?>
                            <?php if (!empty($terms)) : ?>
                                <?php foreach ($terms as $term) : ?>
                                    <p class="blog-item__category"><?php echo $term->name; ?></p>
                                <?php endforeach; ?>
                            <?php endif; ?>

                            <p class="blog-item__title">
                                <?php
                                if (mb_strlen($post->post_title, 'UTF-8') > 22) {
                                    $title = mb_substr($post->post_title, 0, 22, 'UTF-8');
                                    echo $title . '…';
                                } else {
                                    echo $post->post_title;
                                }
                                ?>
                            </p>

                            <time class="blog-item__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                        </div>
                        <!-- /.blog-item__body blog-item__body--small -->
                    </a>
                    <!-- /.sidebar__post-item blog-item -->
            <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
        <!-- /.sidebar__post-items -->
    </div>
    <!-- /.sidebar__post -->
    <div class="sidebar__category">
        <div class="sidebar__subhead">
            <img class="sidebar__icon" src="<?php echo get_template_directory_uri() ?>/assets/img/sidebar-icon_3.svg" alt="アイコン">
            <p class="sidebar__title">カテゴリー</p>
        </div>
        <!-- /.sidebar__subhead -->
    </div>
    <!-- /.sidebar__category -->
    <ul class="sidebar__category-items">
        <?php
        $terms = get_terms('blog_category');
        foreach ($terms as $term) {
            echo '<li class="sidebar__category-item">';
            echo '<a class="sidebar__category-link trans" href="' . get_term_link($term) . '">' . $term->name . '</a>';
            echo '</li>';
        } ?>
    </ul>
    <!-- /.sidebar__category-items -->
</section>
<!-- /.sidebar -->