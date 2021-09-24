<section class="single l-single">
    <h1 class="single__title"><?php the_title(); ?></h1>
    <div class="single__info">
        <time class="single__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
        <?php $terms = get_the_terms($post->ID, 'blog_category'); ?>
        <?php if (!empty($terms)) : ?>
            <?php foreach ($terms as $term) : ?>
                <p class="single__category"><?php echo $term->name; ?></p>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <!-- /.single__info -->
    <div class="single__content">
        <?php the_content(); ?>
    </div>
    <!-- /.single__content -->
    <div class="single__pager">
        <?php if (get_previous_post()) : ?>
            <?php previous_post_link('%link', '前の記事へ'); ?>
        <?php endif; ?>
        <a class="btn" href="<?php echo esc_url(home_url('blogs')); ?>">記事一覧</a>
        <?php if (get_next_post()) : ?>
            <?php next_post_link('%link', '次の記事へ'); ?>
        <?php endif; ?>
    </div>
    <!-- /.single__pager -->
</section>
<!-- /.single l-single -->