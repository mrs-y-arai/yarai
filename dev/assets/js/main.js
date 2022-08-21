document.addEventListener('DOMContentLoaded', function(){

    const el = document.querySelector('.main-visual__title');
    // el.classList.add('inview');
    const chars = el.innerHTML.trim().split("");    

    el.innerHTML = chars.reduce((accu, curr) => {

        console.log(`${accu}<span class="char">${curr}</span>`);
        return `${accu}<span class="char">${curr}</span>`;
    }, "");


});

