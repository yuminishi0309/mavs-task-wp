const swiperBlog = new Swiper('.swiper-blog', {
    loop: true,
    centeredSlides: true,
    slidesPerView: 1.5,
    spaceBetween: 20,
    // autoplay: true,
    autoplay : {
    delay: 2000,
    disableOnInteraction: false,
    },
    // レスポンシブ設定
    breakpoints:{
        // Tab (when window width is >= 768px)
        768:{
            slidesPerView: 3,
        },
        // PC (when window width is >= 1024px)
        1024:{
            slidesPerView: 4,
            spaceBetween: 26,
        }
    }
});
// swiperレスポンシブ対応--------------------------------------------
// function updateSwiper() {
//     const screenWidth = window.innerWidth;
//     if (screenWidth >= 1024) {
//         swiperBlog.params.slidesPerView = 4;
//     } else if (screenWidth >= 768) {
//         swiperBlog.params.slidesPerView = 3;
//     } else {
//         swiperBlog.params.slidesPerView = 1.5;
//     }
//     swiperBlog.update();
// }
// // 初回の設定
// updateSwiper();
// // 画面サイズ変更時の処理
// window.addEventListener('resize', function() {
//     updateSwiper();
// });