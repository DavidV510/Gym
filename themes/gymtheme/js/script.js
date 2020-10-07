jQuery(document).ready(function($){
    

    $('#menu-main').slicknav({
        appendTo:'.head'
    })

    $('.test-cont .test-list').bxSlider();
})

window.onscroll = () => {
    const scroll = window.scrollY;
    fixedMenu(scroll);
}


function fixedMenu(scroll) {
    const headerScroll = document.querySelector('.nav');

    if(scroll > 100) {
        headerScroll.classList.add('fixed-top');
    } else {
        headerScroll.classList.remove('fixed-top');
    }
}