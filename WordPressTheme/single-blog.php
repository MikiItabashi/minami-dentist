<?php get_header(); ?>

<?php get_template_part('templates/page-head'); ?>

<div class="l-inner">
    <div class="sidebar__flex">
        <?php get_template_part('templates/single'); ?>
        <?php get_sidebar(); ?>
    </div>
    <!-- /.sidebar__flex -->
</div>
<!-- /.l-inner -->

<?php get_footer(); ?>