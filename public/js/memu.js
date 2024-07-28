// Initialize Owl Carousel
$('.hero-slides').owlCarousel({
    items: 1, // 一次顯示一張圖片
    loop: true, // 重複輪播
    autoplay: true, // 自動播放
    autoplayTimeout: 5000, // 自動播放間隔時間，單位為毫秒
    smartSpeed: 1000, // 輪播速度，單位為毫秒
    nav: true, // 顯示導航
    dots: false, // 隱藏圓點導航
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'], // 自訂導航按鈕圖示
});

// JavaScript Document
// 獲取菜單按鈕和菜單元素
var toggleMenu = document.getElementById('toggleMenu');
var menu = document.getElementById('menu');

// 監聽菜單按鈕的點擊事件
toggleMenu.addEventListener('click', function() {
    // 切換菜單的顯示狀態
    if (menu.style.display === 'none') {
        menu.style.display = 'block';
    } else {
        menu.style.display = 'none';
    }
});



// 獲取菜單按鈕和菜單元素
var toggleMenu2 = document.getElementById('toggleMenu2');
var menu2 = document.getElementById('menu2');

// 監聽菜單按鈕的點擊事件
toggleMenu2.addEventListener('click', function() {
    // 切換菜單的顯示狀態
    if (menu2.style.display === 'none') {
        menu2.style.display = 'block';
    } else {
        menu2.style.display = 'none';
    }
});

