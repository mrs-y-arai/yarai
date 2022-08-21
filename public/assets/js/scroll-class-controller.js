// スクロール時にCSSクラスを付与させる処理を記載
class scrollClassController {

    constructor(els) {

        this.els = document.querySelectorAll(els);
        this._observer();
    }

    _observer() {

        const observe = function( entries, observer ){

            entries.forEach(entry => {
    
                if( entry.isIntersecting ) {
    
                    entry.target.classList.add('inview');
        
                } else {
        
                    entry.target.classList.remove('inview');
                }
            });
        };            

        this.io = new IntersectionObserver(observe);
        console.log(this.els);
        this.els.forEach(el => this.io.observe(el));
    }
}