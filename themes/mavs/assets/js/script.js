const num = 27
console.log(num)

$(function () {
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
});