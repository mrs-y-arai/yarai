/////////////////////////////////////////
// テキストフェードインアニメーション
/////////////////////////////////////////
document.addEventListener('DOMContentLoaded', function(){
    
    const taTexts = document.querySelectorAll('.fade-in-text');
    
    // スクロール監視
    const cb = function(entries, observer) {
        entries.forEach(entry => {
            if(entry.isIntersecting) {

                const ta = new TextAnimation(entry.target);
                ta._animate();
                observer.unobserve(entry.target);

            } else {
            }
        });
    }

    const io = new IntersectionObserver(cb);
    taTexts.forEach( taText => io.observe(taText) );

});

/////////////////////////////////////////
// スクロールトップボタン
/////////////////////////////////////////
// スクロールトップボタンスムーススクロール
const scrollTopBtn = document.querySelector('#scroll-top');
scrollTopBtn.addEventListener('click', function(){

    window.scroll({

        top: 0,
        left: 0,
        behavior: 'smooth'
    });
});

// スクロールトップボタンにアニメーション
const scrollTop = new scrollClassController('#scroll-top');

/////////////////////////////////////////
// 三角形のアニメーション
/////////////////////////////////////////
const triangleAnimation = new scrollClassController('.triangle');

/////////////////////////////////////////
// ハンバーガーメニュー
/////////////////////////////////////////
const hamburgerBtn = document.querySelector('.hamburger-menu');
const yellowModal = document.querySelector('.yellow-modal');

hamburgerBtn.addEventListener('click', function(){

    const hamburger = new hamburgerAnimation();
});

yellowModal.addEventListener('click', function(){

    const hamburger = new hamburgerAnimation();
});

/////////////////////////////////////////
// ローディングアニメーション
/////////////////////////////////////////
window.addEventListener('load', () => {
    const loadingWrap = document.querySelector('.loading-wrap');
    setTimeout(() => {
        loadingWrap.classList.add( '---inactive' );
    }, 700);
},false)