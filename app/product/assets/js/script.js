$(function () {
    /* ================================================================
    top page
    ================================================================ */
    // ハンバーガーメニューボタン
    $('#btn').on('click', function(){
        $('#btn__top').toggleClass('rotate-top');
        $('#btn__middle').toggleClass('hide-middle');
        $('#btn__bottom').toggleClass('rotate-bottom');
        $('#gnavFadeIn').toggleClass('gnav-active');
    });
    // ナビゲーション操作
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
        if (link.href === location.href) {
            link.closest(".blogListNav__link").classList.add("current");
        }
    });
    /* ================================================================
    contact page
    ================================================================ */
});