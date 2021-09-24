<?php get_header(); ?>

<?php get_template_part('templates/page-head'); ?>

<div class="l-inner">
    <div class="sidebar__flex">
        <section class="staffblog l-blog-staffblog">
            <div class="staffblog__items">
                <?php
                $args = array(
                    'posts_per_page' => 10, // 表示する投稿数
                    'post_type' => array('blog'), // 取得する投稿タイプのスラッグ
                    'orderby' => 'date', //日付で並び替え
                    'order' => 'DESC', // 降順 or 昇順
                    'paged' => get_query_var( 'paged', 1 ),
                );
                $my_posts = new WP_Query($args);
                $count = 0;
                if ($my_posts->have_posts()) :
                    while ($my_posts->have_posts()) : $my_posts->the_post();
                ?>
                        <a href="<?php the_permalink(); ?>" class="staffblog__item blog-item">
                            <?php
                            $count = $count + 1;
                            if ($count < 3 && $args['paged'] == 0) {
                                echo '<p class="blog-item__label">new</p>';
                            }
                            ?>

                            <div class="blog-item__img">
                                <?php
                                if (has_post_thumbnail()) {
                                    // アイキャッチ画像が設定されてれば大サイズで表示
                                    the_post_thumbnail('large');
                                } else {
                                    // なければnoimage画像をデフォルトで表示
                                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/blog.jpg" alt="ブログサムネイル">';
                                } ?>
                            </div>
                            <div class="blog-item__body">

                                <?php $terms = get_the_terms($post->ID, 'blog_category'); ?>
                                <?php if (!empty($terms)) : ?>
                                    <?php foreach ($terms as $term) : ?>
                                        <p class="blog-item__category"><?php echo $term->name; ?></p>
                                    <?php endforeach; ?>
                                <?php endif; ?>

                                <!--モバイルのときは文字数を調整-->
                                <h3 class="blog-item__title">
                                    <?php
                                    if (wp_is_mobile() && (mb_strlen($post->post_title, 'UTF-8') > 25)) {
                                        $title = mb_substr($post->post_title, 0, 25, 'UTF-8');
                                        echo $title . '…';
                                    } else {
                                        echo $post->post_title;
                                    }
                                    ?>
                                </h3>

                                <time class="blog-item__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                            </div>
                            <!-- /.blog-item__body -->
                        </a>
                        <!-- /.blog__item blog-item -->
                <?php
                    endwhile;
                endif;
                ?>
                <div class="staffblog__pager pager">
                    <?php wp_pagenavi(array('query' => $my_posts)); ?>
                </div>
                <?php
                wp_reset_postdata(); //メインクエリに戻す前にリセットする
                ?>
            </div>
            <!-- /.staffblog__items -->

        </section>
        <!-- /.staffblog l-blog-staffblog -->
        <?php get_sidebar(); ?>
    </div>
    <!-- /.sidebar__flex -->
</div>
<!-- /.l-inner -->

<?php get_footer(); ?>