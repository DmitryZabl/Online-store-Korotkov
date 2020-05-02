window.addEventListener('DOMContentLoaded', function () {
    function centrierNavRight() {
        let navCentreir = document.querySelector('#navCentreir'),
            navRight = document.querySelector('#nav-right');
            containerCentrier = document.querySelector('.navbar-top-collapse.container--centrier'),
            navbarLogo = document.querySelector('#navbar-logo');

        window.addEventListener('resize', function () {
            if (containerCentrier.offsetWidth > 583 && containerCentrier.offsetWidth < 800) {
                navRight.style.position = 'relative';
                navRight.style.left = -(containerCentrier.offsetWidth / 2 + navbarLogo.offsetWidth - navCentreir.offsetWidth / 2 + 10) + 'px';
            } else {
                navRight.style.left = '0px';
            }
            
        })
    }
    centrierNavRight()
})