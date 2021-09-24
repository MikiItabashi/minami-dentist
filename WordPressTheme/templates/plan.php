<div id="<?php echo $post->post_name ?>" class="general__item plan">
    <?php if (is_object_in_term($post->ID, 'medical_plan', 'general')) : //一般診療
    ?>
        <p class="plan__label">保険対象</p>
    <?php elseif (is_object_in_term($post->ID, 'medical_plan', 'special')) : //特殊診療
    ?>
        <p class="plan__label plan__label--accent">実費</p>
    <?php endif; ?>
    <?php
    // endforeach;
    ?>

    <div class="plan__head">
        <h3 class="plan__title"><?php the_title(); ?></h3>
        <p class="plan__lead"><?php echo SCF::get('plan_problem'); ?></p>
    </div>
    <!-- /.plan__head -->
    <div class="plan__body">
        <div class="plan__content">
            <p class="plan__text"><?php echo SCF::get('plan_content'); ?></p>
        </div>
        <!-- /.plan__content -->
        <div class="plan__img">
            <?php
            if (has_post_thumbnail()) {
                // アイキャッチ画像が設定されてれば大サイズで表示
                the_post_thumbnail('large');
            } else {
                // なければnoimage画像をデフォルトで表示
                echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/medical_1.jpg" alt="診療案内イメージ画像">';
            }
            ?>
        </div>
        <!-- /.plan__img -->
    </div>
    <!-- /.plan__body -->
</div>
<!-- /.general__item plan -->