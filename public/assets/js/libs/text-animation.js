// テキストアニメーション
class TextAnimation {

    constructor(el) {
        this.el = el;
        this.char = this.el.innerHTML.trim().split("");
        console.log(this.char);
        this.el.innerHTML = this._splitText();
    }

    _splitText() {

        return this.char.reduce((accu, curr) => {

            curr = curr.replace(/\s+/, '&nbsp;');
            return `${accu}<span class="char">${curr}</span>`;
        }, "");
    }

    _animate() {
        
        this.el.classList.toggle('inview');
    }
}
