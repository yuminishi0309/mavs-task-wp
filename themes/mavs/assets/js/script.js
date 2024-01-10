$(function () {
    /* ================================================================
    top page
    ================================================================ */
    // スクロール時の設定
    const windowHeight = $(window).innerHeight();
    $(window).on('scroll', function(){
            const ST = $(window).scrollTop();
        // ページ全体の共通fadeUp設定
        $('.fadeUp').each(function(){
            const target = $(this).offset().top;
            if(ST > target - windowHeight / 1.4){
                $(this).addClass('showElement');
            }
        });
        // セクションタイトル共通 fadeUp設定
        $('.txtAnimationFadeUp').each(function(){
            const target = $(this).offset().top;
            if(ST > target - windowHeight / 1.3){
                $(this).addClass('showAnimation');
            }
        });
        // セクションbg スライドfadeIn設定
        const aboutTop = $('#about').offset().top;
        if(ST > aboutTop - windowHeight / 2){
            $('#mainBg-color').addClass('mainBgColor-slideIn');
            $('#mainBg-grey').addClass('mainBgGrey-slideIn');
        }
    });

    // header ハンバーガーメニューボタン
    $('#btn').on('click', function(){
        $('#btn__top').toggleClass('rotate-top');
        $('#btn__middle').toggleClass('hide-middle');
        $('#btn__bottom').toggleClass('rotate-bottom');
        $('#gnavFadeIn').toggleClass('gnav-active');
    });
    // header ナビゲーション操作
    $('.gnavFadeIn__link').on('click', function () {
        $('#btn__top').removeClass('rotate-top');
        $('#btn__middle').removeClass('hide-middle');
        $('#btn__bottom').removeClass('rotate-bottom');
        $('#gnavFadeIn').removeClass('gnav-active');
    })

    /* ================================================================
    blog page
    ================================================================ */
    // トグルメニュー  =======================================
    function updateBlogNav() {
        const screenWidth = window.innerWidth;
        if (screenWidth < 1024) {
            $('#blogListMenu').on('click', function(){
                $('#blogListNav').toggleClass('blogListNav-isActive');
                $('#blogListMenu').toggleClass('RotateItem');
            });
        } else {
            // toggleClassで追加のクラスをPC幅リサイズ時に除去
            const menuHasClass = $('#blogListMenu').hasClass('RotateItem');
            if (menuHasClass) {
                $('#blogListMenu').removeClass('RotateItem');
            }
            const navHasClass = $('#blogListNav').hasClass('blogListNav-isActive');
            if (navHasClass) {
                $('#blogListNav').removeClass('blogListNav-isActive');
            }
        }
    }
    // 初回の設定
    updateBlogNav();
    // 画面サイズ変更時の処理
    window.addEventListener('resize', function() {
        updateBlogNav();
    });

    // ナビゲーションカレント表示  =======================================
    const links = document.querySelectorAll(".blogListNav__link");
    links.forEach(function (link) {
        const categoryHref = link.getAttribute("href").split("/page/")[0];
        const currentHref = location.href.split("/page/")[0];
        if (categoryHref === currentHref) {
            link.classList.add("currentCategory");
        }
    });
    /* ================================================================
    contact page
    ================================================================ */
});