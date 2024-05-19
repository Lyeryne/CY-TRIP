document.addEventListener('DOMContentLoaded', () => {
    const france = {
        html : document.querySelector('.france'),
        name : "France"
    }

    const spain = {
        html : document.querySelector('.spain'),
        name : "Spain"
    }

    const japan = {
        html : document.querySelector('.japan'),
        name : "Japan"
    }

    const australia = {
        html : document.querySelector('.australia'),
        name : "Australia"
    }

    const germany = {
        html : document.querySelector('.germany'),
        name : "Germany"
    }

    const morocco = {
        html : document.querySelector('.morocco'),
        name : "Morocco"
    }

    const usa = {
        html : document.querySelector('.usa'),
        name : "USA"
    }

    const russia = {
        html : document.querySelector('.russia'),
        name : "Russia"
    }

    const brasil = {
        html : document.querySelector('.brasil'),
        name : "Brasil"
    }

    const southafrica = {
        html : document.querySelector('.southafrica'),
        name : "South Africa"
    }

    const countries = [france, spain, japan, australia, germany, morocco, usa, russia, brasil, southafrica];

    countries.forEach(country => {
        country.html.addEventListener('mouseover', () => {
            country.html.classList.add("hovered");
        });

        country.html.addEventListener('mouseout', () => {
            country.html.classList.remove("hovered");
        });
    });
});
