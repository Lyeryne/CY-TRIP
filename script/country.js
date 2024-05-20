document.addEventListener("DOMContentLoaded", () => {
    const starone = document.querySelector(".one")
    const startwo = document.querySelector(".two")
    const starthree = document.querySelector(".three")
    const starfour = document.querySelector(".four")
    const starfive = document.querySelector(".five")

    const rectone = document.querySelector("#one")
    const recttwo = document.querySelector("#two")
    const rectthree = document.querySelector("#three")
    const rectfour = document.querySelector("#four")
    const rectfive = document.querySelector("#five")
        
    starfive.addEventListener("mouseover", () => {
        rectfive.style.transform = "translateX(6vw)"
        rectfour.style.transform = "translateX(6vw)"
        rectthree.style.transform = "translateX(6vw)"
        recttwo.style.transform = "translateX(6vw)"
        rectone.style.transform = "translateX(6vw)"
    })

    starfive.addEventListener("mouseout", () => {
        rectfive.style.transform = "translateX(0)"
        rectfour.style.transform = "translateX(0)"
        rectthree.style.transform = "translateX(0)"
        recttwo.style.transform = "translateX(0)"
        rectone.style.transform = "translateX(0)"
    })

    starfour.addEventListener("mouseover", () => {
        rectfour.style.transform = "translateX(6vw)"
        rectthree.style.transform = "translateX(6vw)"
        recttwo.style.transform = "translateX(6vw)"
        rectone.style.transform = "translateX(6vw)"
    })

    starfour.addEventListener("mouseout", () => {
        rectfour.style.transform = "translateX(0)"
        rectthree.style.transform = "translateX(0)"
        recttwo.style.transform = "translateX(0)"
        rectone.style.transform = "translateX(0)"
    })

    starthree.addEventListener("mouseover", () => {
        rectthree.style.transform = "translateX(6vw)"
        recttwo.style.transform = "translateX(6vw)"
        rectone.style.transform = "translateX(6vw)"
    })

    starthree.addEventListener("mouseout", () => {
        rectthree.style.transform = "translateX(0)"
        recttwo.style.transform = "translateX(0)"
        rectone.style.transform = "translateX(0)"
    })

    startwo.addEventListener("mouseover", () => {
        recttwo.style.transform = "translateX(6vw)"
        rectone.style.transform = "translateX(6vw)"
    })

    startwo.addEventListener("mouseout", () => {
        recttwo.style.transform = "translateX(0)"
        rectone.style.transform = "translateX(0)"
    })
    
    starone.addEventListener("mouseover", () => {
        rectone.style.transform = "translateX(6vw)"
    })

    starone.addEventListener("mouseout", () => {
        rectone.style.transform = "translateX(0)"
    })

})