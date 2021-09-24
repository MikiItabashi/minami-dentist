// ローディング判定
jQuery(function($) {
    jQuery(window).on("load", function() {
        jQuery("body").attr("data-loading", "true");
    });

    jQuery(function() {
        // スクロール判定
        jQuery(window).on("scroll", function() {
            if (100 < jQuery(this).scrollTop()) {
                jQuery("body").attr("data-scroll", "true");
            } else {
                jQuery("body").attr("data-scroll", "false");
            }
        });

        /* スムーススクロール */
        var header = jQuery('.js-header').innerHeight();
        var speed = 300;
        jQuery('a[href^="#"]').on('click', function() {
            var id = jQuery(this).attr('href');
            var position = 0;
            if (id != '#') {
                position = jQuery(id).offset().top - header - 20;
            }
            jQuery('html, body').animate({
                    scrollTop: position
                },
                speed)
        })

        /* 別ページのスムーススクロール */
        $(function() {
            var urlHash = location.hash; //URLのハッシュタグを取得
            if (urlHash) { //ハッシュタグが有る場合
                $("body,html").scrollTop(0);
                setTimeout(function() { //無くてもいいが有ると動作が安定する
                    var target = $(urlHash);
                    var position = target.offset().top - header - 20;
                    $("body,html").stop().animate({
                        scrollTop: position
                    }, speed);
                }, 0);
            }
        });

        /* 電話リンク */
        let ua = navigator.userAgent;
        if (ua.indexOf("iPhone") < 0 && ua.indexOf("Android") < 0) {
            jQuery('a[href^="tel:"]')
                .css("cursor", "default")
                .on("click", function(e) {
                    e.preventDefault();
                });
        }

        // トップへ戻る
        var topBtn = $('.js-page-top');
        topBtn.hide();

        // ボタンの表示設定
        $(window).scroll(function() {
            if ($(this).scrollTop() > 70) {
                // 指定px以上のスクロールでボタンを表示
                topBtn.fadeIn();
            } else {
                // 画面が指定pxより上ならボタンを非表示
                topBtn.fadeOut();
            }
        });

        // ボタンをクリックしたらスクロールして上に戻る
        topBtn.click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 300, 'swing');
            return false;
        });

    });

    // drawer
    jQuery('.js-drawer').on('click', function(e) {
        e.preventDefault();
        jQuery('.drawer-icon').toggleClass('is-active');
        jQuery('.drawer-content').toggleClass('is-active');
        jQuery('.drawer-background').toggleClass('is-active');
        jQuery('.header').toggleClass('is-active');
        return false;
    });
    jQuery('.js-drawer-content__item').on('click', function(e) {
        jQuery('.js-drawer').trigger('click');
    });

    // swiper
    const swiper = new Swiper('.js-top-slide', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        effect: "fade",
        autoplay: {
            delay: 3000, //４秒後に次の画像へ
            disableOnInteraction: false //ユーザー操作後に自動再生を再開する
        },
        speed: 1000, //２秒かけながら次の画像へ移動

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    // gallery
    const gallery = new Swiper('.js-gallery-slide', {
        // Optional parameters
        direction: 'horizontal',
        // centeredSlides: true,
        slidesPerView: 2,
        loop: true,
        effect: 'slide', //切り替わるときのアニメーション
        speed: 3000, //画像の切替スピード
        autoplay: { //自動で動かす
            delay: 0,
            disableOnInteraction: false
        },
        breakpoints: {
            // 画面幅が 1100px 以上の場合（window width >= 1100px）
            1100: {
                slidesPerView: 4,
            },
        },
    });
});