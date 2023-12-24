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
    $('#blogListMenu').on('click', function(){
        $('#blogListNav').stop().slideToggle(300);
        $('#blogListMenu').toggleClass('RotateItem');
    });
    // nav操作時処理
    $('#blogListNav').on('click', function(){
        $('#blogListNav').hide(300);
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