document.addEventListener('DOMContentLoaded', function () {
    const france = document.querySelector('.france');
    const spain = document.querySelector('.spain');
    const japan = document.querySelector('.japan');
    const australia = document.querySelector('.australia');
    const germany = document.querySelector('.germany');
    const morocco = document.querySelector('.morocco');
    const usa = document.querySelector('.usa');
    const russia = document.querySelector('.russia');
    const brasil = document.querySelector('.brasil');
    const southafrica = document.querySelector('.southafrica');

    const countries = [france, spain, japan, australia, germany, morocco, usa, russia, brasil, southafrica];

    countries.forEach(country => {
        country.addEventListener('mouseover', function () {
            country.classList.add("hovered");
        });

        country.addEventListener('mouseout', function () {
            country.classList.remove("hovered");
        });
    });
});

const nav = document.querySelector("nav");
window.addEventListener('scroll', function () {
    if (window.scrollY > 120) {
        nav.style.top = 0;
    }
    else {
        nav.style.top = "-50px";
    }
});
