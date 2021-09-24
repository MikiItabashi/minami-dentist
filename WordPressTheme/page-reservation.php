<?php get_header(); ?>

<?php get_template_part('templates/page-head'); ?>

<section class="reservation l-reservation">
    <div class="reservation__inner l-inner">
        <p class="reservation__subtitle">お電話でのご予約/ご相談</p>
        <div class="reservation__phone">
            <p class="reservation__num phone-num">03-1234-5678</p>
            <p class="reservation__time">(年中無休 AM9:00〜PM22:00)</p>
        </div>
        <p class="reservation__text">お急ぎの方は電話での連絡がスムーズです。<br>混雑状況によっては当日受診をご利用いただけない場合がございます。<br>あらかじめご了承ください。</p>
        <div class="reservation__email">
            <p class="reservation__subtitle">メールでのご予約/ご相談</p>
            <p class="reservation__text">【ご予約に関しての注意点】<br>メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br>※24時間以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</p>
        </div>
        <!-- /.reservation__email -->
        <div class="reservation__content">
            <div class="reservation__title">
                <h2 class="title">予約フォーム</h2>
            </div>
            <!-- /.reservation__title -->
            <div class="reservation__form form">
                <?php the_content(); ?>
            </div>
            <!-- /.reservation__form form -->
        </div>
        <!-- /.reservation__content -->
    </div>
    <!-- /.reservation__inner l-inner -->
</section>
<!-- /.reservation l-reservation -->

<?php get_footer(); ?>