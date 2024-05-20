document.addEventListener("DOMContentLoaded", () => {

    const menuderoulant = document.querySelector(".menu-deroulant")
    const btncountries = document.querySelector("#btncountries")
    let openicon = document.querySelector("#openicon")

    const header = document.querySelector("header")
    let lastscrollpos = 0
    let isopened = 0

    window.addEventListener("scroll", () => {
        let scrollpos = window.scrollY

        if (scrollpos > lastscrollpos) {
            header.style.transform = "translateY(-100%)"
            if (isopened === 1) {
                menuderoulant.style.transform = "translateY(21vw)"
            }
        }
        else
        {
            header.style.transform = "translateY(0%)"
            if (isopened === 1) {
            menuderoulant.style.transform = "translateY(26.7vw)"
            }
        }

        lastscrollpos = scrollpos
    })

    btncountries.addEventListener("click", () => {
        if (isopened === 0) {
            menuderoulant.style.display = "flex"
            menuderoulant.style.transform = "translateY(26.7vw)"
            openicon.style.transform = "rotate(180deg)"
            isopened = 1
        }
        else {
            menuderoulant.style.transform = "translateY(0)"
            openicon.style.transform = "rotate(0)"
            menuderoulant.style.display = "none"
            isopened = 0
        }
    })
})