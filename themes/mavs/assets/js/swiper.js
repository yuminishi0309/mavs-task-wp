const swiperBlog = new Swiper('.swiper-blog', {
    loop: true,
    centeredSlides: true,
    slidesPerView: 1.5,
    spaceBetween: 20,
    speed: 700,
    autoplay : {
    delay: 3000,
    disableOnInteraction: false,
    },
    // レスポンシブ設定
    breakpoints:{
        768:{
            slidesPerView: 3,
        },
        1024:{
            slidesPerView: 4,
            spaceBetween: 26,
        }
    }
});