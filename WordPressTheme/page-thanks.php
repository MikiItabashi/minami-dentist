<?php get_header(); ?>

<?php get_template_part('templates/page-head'); ?>

<section class="contact l-thanks">
    <div class="contact__inner l-inner">
        <?php
        $parent_id = $post->post_parent;
        $parent_name = get_post($parent_id)->post_name;
        ?>
        <?php if ($parent_name == 'reservation') : ?>
            <p class="contact__text">WEBよりご予約いただき誠にありがとうございます。<br>送信いただいた内容を確認して1営業日以内に返信いたします。<br><span class="text--accent">※1営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</span></p>
        <?php elseif ($parent_name == 'contact') : ?>
            <p class="contact__text">お問い合わせありがとうございました。<br>3営業日以内に返信いたしますので、しばらくお待ちいただけますと幸いです。<br><span class="text--accent">※3営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</span></p>
        <?php endif; ?>
    </div>
    <!-- /.contact__inner l-inner -->
</section>
<!-- /.contact l-contact -->

<?php get_footer(); ?>