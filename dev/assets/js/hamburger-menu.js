class hamburgerAnimation {

    constructor(){

        this.hamburgerBtn = document.querySelector('.hamburger-menu');
        this.hamburgerLines = document.querySelectorAll('.hamburger-line');
        this.mobileMenu = document.querySelector('.mobile__nav');
        this.yellowModal = document.querySelector('.yellow-modal'); 
        this._hamburgerToggle();       
    }

    _hamburgerToggle() {

        this.hamburgerLines.forEach( function(hamburgerLine) {

            hamburgerLine.classList.toggle('line-active');
        });
    
        this.mobileMenu.classList.toggle('nav---active');
    
        this.yellowModal.classList.toggle('nav---active');
    }
}