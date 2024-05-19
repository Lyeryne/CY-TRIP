document.addEventListener("DOMContentLoaded", () => {

    const header = document.querySelector("header")
    let lastscrollpos = 0

    window.addEventListener("scroll", () => {
        let scrollpos = window.scrollY

        if (scrollpos > lastscrollpos) {
            header.style.transform = "translateY(-100%)"
            
        }
        else
        {
            header.style.transform = "translateY(0%)"
        }

        lastscrollpos = scrollpos
    })

})