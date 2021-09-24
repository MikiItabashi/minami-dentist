<section class="page-head l-page-head">
    <div class="page-head__wrapper l-inner">
        <?php
        $id = get_post_thumbnail_id();
        $img = wp_get_attachment_image_src($id, 'large');
        $parent_id = $post->post_parent;
        $parent_title = get_post($parent_id)->post_title;
        $parent_excerpt = get_post($parent_id)->post_excerpt;
        ?>
        <?php if (is_page()) : ?>
            <div class="page-head__content filter" style="background-image: url('<?php echo $img[0]; ?>')">
                <h1 class="page-head__title"><?php echo $parent_title; ?></h1>
                <p class="page-head__lead"><?php echo $parent_excerpt; ?></p>
            </div>
            <!-- /.page-head__content filter -->
        <?php elseif (is_404()) : ?>
            <div class="page-head__content filter" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/archive_top.jpg)">
                <h1 class="page-head__title">404</h1>
                <p class="page-head__lead">not found</p>
            </div>
            <!-- /.page-head__content filter -->
        <?php elseif (get_post_type() == 'blog') : ?>
            <div class="page-head__content filter" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/archive_top.jpg)">
                <p class="page-head__title">スタッフブログ</p>
                <p class="page-head__lead">staff blog</p>
            </div>
            <!-- /.page-head__content filter -->
        <?php else : ?>
            <div class="page-head__content filter" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/archive_top.jpg)">
                <p class="page-head__title">お知らせ</p>
                <p class="page-head__lead">news</p>
            </div>
        <?php endif; ?>
    </div>
    <!-- /.page-head__wrapper l-inner -->
    <div class="page-head__breadcrumb-inner l-inner">
        <div class="page-head__breadcrumb">
            <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 
            ?>
        </div><!-- /page-head__breadcrumb-inner page-head__breadcrumb -->
    </div>
    <!-- /.l-inner -->
</section>
<!-- /.page-head l-about-page-head -->