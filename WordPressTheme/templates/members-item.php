<div class="members__item members-item">
    <div class="members-item__img">
        <?php
        if (has_post_thumbnail()) {
            // アイキャッチ画像が設定されてれば大サイズで表示
            the_post_thumbnail('large');
        } else {
            // なければnoimage画像をデフォルトで表示
            echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/staff2.jpg" alt="スタッフ画像">';
        }
        ?>
    </div>
    <!-- /.members-item__img -->
    <div class="members-item__body">
        <?php
        if ($terms = get_the_terms($post->ID, 'staff_role')) :
            foreach ($terms as $term) :
        ?>
                <p class="members-item__role"><?php echo esc_html($term->name) ?></p>
                <p class="members-item__name"><?php the_title(); ?></p>
        <?php
            endforeach;
        endif; ?>
    </div>
    <!-- /.members-item__body -->
    <table class="members-item__table">
        <tbody>
            <tr>
                <th class="members-item__th">出身地</th>
                <td class="members-item__td"><?php echo SCF::get('staff_from'); ?></td>
            </tr>
            <tr>
                <th class="members-item__th">趣味</th>
                <td class="members-item__td"><?php echo SCF::get('staff_hobby'); ?></td>
            </tr>
            <tr>
                <th class="members-item__th">好きな食べ物</th>
                <td class="members-item__td"><?php echo SCF::get('staff_food'); ?></td>
            </tr>
        </tbody>
    </table>
    <!-- /.members-item__table -->
</div>
<!-- /.members__item members-item -->