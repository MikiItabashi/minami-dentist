<?php get_header(); ?>

<?php get_template_part('templates/page-head'); ?>

<section class="contact l-contact">
    <div class="contact__inner l-inner">
        <p class="contact__text">お急ぎの方は、お電話(TEL 03-1234-5678)での連絡がスムーズです。<br>以下のフォームからお問い合わせ頂いた場合、ご連絡が2～3日後になる場合がございます。<br>また、メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br><span class="text--accent">※3営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</span></p>
        <div class="contact__content">
            <div class="contact__title">
                <h2 class="title">お問い合わせ<br class="u-mobile">フォーム</h2>
            </div>
            <!-- /.contact__title -->
            <div class="contact__form form">
                <?php the_content(); ?>
            </div>
            <!-- /.contact__form form -->
        </div>
        <!-- /.contact__content -->
    </div>
    <!-- /.contact__inner l-inner -->
</section>
<!-- /.contact l-contact -->

<?php get_footer(); ?>