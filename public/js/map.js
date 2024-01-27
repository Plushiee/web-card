$(document).ready(function () {
    var headerHeight = document.querySelector('header').offsetHeight;
    var footerHeight = document.querySelector('footer').offsetHeight;

    var containerFluidHeight = window.innerHeight - headerHeight - footerHeight;

    document.querySelector('.main').style.height = containerFluidHeight + 'px';

    window.addEventListener('resize', function () {
        containerFluidHeight = window.innerHeight - headerHeight - footerHeight;
        document.querySelector('.main').style.height = containerFluidHeight + 'px';
    });
});