const swiperBlog = new Swiper('.swiper-blog', {
        direction: 'horizontal',
        loop: true,
        effect: 'slide',
        slidesPerView: 3,
        spaceBetween: 20,
        speed: 4000,
        autoplay : {
            delay: 1,
            disableOnInteraction: false,
        }
});
// swiperレスポンシブ対応--------------------------------------------
function updateSwiper() {
    const screenWidth = window.innerWidth;
    if (screenWidth >= 1024) {
        swiperBlog.params.slidesPerView = 4;
    } else if (screenWidth >= 768) {
        swiperBlog.params.slidesPerView = 3;
    } else {
        swiperBlog.params.slidesPerView = 1;
    }
    swiperBlog.update();
}
// 初回の設定
updateSwiper();
// 画面サイズ変更時の処理
window.addEventListener('resize', function() {
    updateSwiper();
});