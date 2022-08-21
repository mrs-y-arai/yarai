document.addEventListener('DOMContentLoaded', function(){
    
    const taTexts = document.querySelectorAll('.fade-in-text');
    
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