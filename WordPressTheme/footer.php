<footer class="footer">
    <img class="u-desktop" src="<?php echo get_template_directory_uri() ?>/assets/img/wave.svg" alt="背景画像">
    <img class="u-mobile" src="<?php echo get_template_directory_uri() ?>/assets/img/wave-sp.svg" alt="背景画像">
    <div class="footer__wrapper">
        <div class="l-footer">
            <div class="footer__box">
                <div class="footer__contents">
                    <div class="footer__logo">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="みなみ歯科クリニック">
                    </div>
                    <p class="footer__address">〒166-0001&emsp;東京都杉並区阿佐谷北7-3-1</p>
                    <div class="footer__phone">
                        <p class="footer__num phone-num">03-1234-5678</p>
                        <p class="footer__time">(年中無休 AM9:00〜PM22:00)</p>
                    </div>
                    <!-- /.footer__phone -->
                    <div class="footer__btns">
                        <a href="<?php echo esc_url(home_url('reservation')); ?>" class="footer__btn btn btn--main">
                            <div class="footer__btn-icon">
                                <?php get_template_part('svg/icon-pc'); ?>
                            </div>
                            <!-- /.footer__btn-icon -->
                            <p class="footer__btn-text">web予約</p>
                        </a>
                        <a href="<?php echo esc_url(home_url('contact')); ?>" class="footer__btn btn">
                            <div class="footer__btn-icon">
                                <?php get_template_part('svg/icon-06'); ?>
                            </div>
                            <!-- /.footer__btn-icon -->
                            <p class="footer__btn-text">お問い合わせ</p>
                        </a>
                    </div>
                    <!-- /.footer__btns -->
                    <div class="footer__calender">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/medical-time-pc.png" alt="カレンダー">
                    </div>
                    <!-- /.footer__calender -->
                </div>
                <!-- /.footer__contents -->
                <div class="footer__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3239.7957523089553!2d139.63450506555142!3d35.706643486184674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z5p2x5Lqs6YO95p2J5Lim5Yy66Zi_5L2Q6LC35YyXNy0zLTE!5e0!3m2!1sja!2sjp!4v1630672640904!5m2!1sja!2sjp" width="385" height="385" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <!-- /.footer__map -->
            </div>
            <!-- /.footer__box -->
            <div class="footer__sitemap sitemap">
                <div class="sitemap__wrapper">
                    <div class="sitemap__content">
                        <p class="sitemap__title"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></p>
                    </div>
                    <!-- /.sitemap__content -->
                    <div class="sitemap__content">
                        <p class="sitemap__title"><a href="<?php echo esc_url(home_url('about')); ?>">当院について</a></p>
                        <ul class="sitemap__items">
                            <li class="sitemap__item">
                                <a href="<?php echo esc_url(home_url('about')); ?>#policy" class="sitemap__link">ポリシーと特徴</a>
                            </li>
                            <li class="sitemap__item">
                                <a href="<?php echo esc_url(home_url('about')); ?>#photos" class="sitemap__link">当院の様子</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sitemap__content -->
                    <div class="sitemap__content">
                        <p class="sitemap__title"><a href="<?php echo esc_url(home_url('staff')); ?>">スタッフ紹介</a></p>
                        <ul class="sitemap__items">
                            <li class="sitemap__item">
                                <a href="<?php echo esc_url(home_url('staff')); ?>#director" class="sitemap__link">院長のあいさつ</a>
                            </li>
                            <li class="sitemap__item">
                                <a href="<?php echo esc_url(home_url('staff')); ?>#members" class="sitemap__link">スタッフ</a>
                            </li>
                            <li class="sitemap__item">
                                <a href="<?php echo esc_url(home_url('blogs')); ?>" class="sitemap__link">スタッフブログ</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sitemap__content -->
                    <div class="sitemap__content">
                        <p class="sitemap__title"><a href="<?php echo esc_url(home_url('medical')); ?>">診療内容</a></p>
                        <div class="sitemap__item-wrapper">
                            <ul class="sitemap__items">
                                <li class="sitemap__item">
                                    <a href="<?php echo esc_url(home_url('medical')); ?>#general" class="sitemap__link">一般歯科</a>
                                </li>
                                <li class="sitemap__item">
                                    <a href="<?php echo esc_url(home_url('medical')); ?>#pediatric" class="sitemap__link">小児歯科</a>
                                </li>
                                <li class="sitemap__item">
                                    <a href="<?php echo esc_url(home_url('medical')); ?>#preventive" class="sitemap__link">予防歯科</a>
                                </li>
                                <li class="sitemap__item">
                                    <a href="<?php echo esc_url(home_url('medical')); ?>#dentures" class="sitemap__link">入れ歯</a>
                                </li>
                            </ul>
                            <ul class="sitemap__items">
                                <li class="sitemap__item">
                                    <a href="<?php echo esc_url(home_url('medical')); ?>#orthodontics" class="sitemap__link">矯正歯科</a>
                                </li>
                                <li class="sitemap__item">
                                    <a href="<?php echo esc_url(home_url('medical')); ?>#whitening" class="sitemap__link">ホワイトニング</a>
                                </li>
                                <li class="sitemap__item">
                                    <a href="<?php echo esc_url(home_url('medical')); ?>#oralsurgery" class="sitemap__link">口腔外科</a>
                                </li>
                                <li class="sitemap__item">
                                    <a href="<?php echo esc_url(home_url('medical')); ?>#lasertreatment" class="sitemap__link">レーザー治療</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.sitemap__item-wrapper -->
                    </div>
                    <!-- /.sitemap__content -->
                    <div class="sitemap__content">
                        <p class="sitemap__title"><a href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a></p>
                        <ul class="sitemap__items">
                            <li class="sitemap__item">
                                <a href="<?php echo esc_url(home_url('contact')); ?>" class="sitemap__link">お問い合わせフォーム</a>
                            </li>
                            <li class="sitemap__item">
                                <a href="<?php echo esc_url(home_url('reservation')); ?>" class="sitemap__link">WEB予約</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sitemap__content -->
                </div>
                <!-- /.sitemap__wrapper -->
            </div>
            <!-- /.footer__sitemap sitemap -->
        </div>
        <!-- /.l-footer -->
    </div>
    <!-- /.footer__wrapper -->
    <div class="footer__copy-wrapper">
        <small class="footer__copy">&copy;2020-2021 みなみ歯科クリニック</small>
    </div>
    <!-- /.footer__copy-wrapper -->
</footer>

<!-- 上に戻る -->
<a href="#" class="page-top js-page-top">
    <div class="page-top__icon">
        <?php get_template_part('svg/page-top'); ?>
    </div>
    <!-- /.page-top__icon -->
</a>
<!-- /.page-top js-page-top -->

<!-- スマホ用固定セクション -->
<?php get_template_part('templates/sp-bottom') ?>

<?php wp_footer(); ?>
</body>

</html>