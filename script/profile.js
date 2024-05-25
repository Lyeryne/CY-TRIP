document.addEventListener("DOMContentLoaded", () => {

    const bgvideo = document.querySelector("#bgvideo")
    const playpausebtn = document.querySelector("#playpausebtn")

    bgvideo.addEventListener("click", () => {
        if (bgvideo.paused) {
            bgvideo.play()
            playpausebtn.innerHTML="<span>&#9658;</span>"
            playpausebtn.style.display="flex"
            playpausebtn.style.opacity="1"
            setTimeout(function(){
                playpausebtn.style.display="none"
                playpausebtn.style.opacity="0"
        },700)
        }
        else {
            bgvideo.pause()
            playpausebtn.innerHTML="<span>&#10074;&#10074;</span>"
            playpausebtn.style.display="flex"
            playpausebtn.style.opacity="1"
            setTimeout(function(){
                playpausebtn.style.display="none"
                playpausebtn.style.opacity="0"
        },700)
        }
    })

    const editbtn = document.querySelector("#edit")
    const validbtn = document.querySelector("#valid")
    const pseudozone = document.querySelector(".pseudo")
    const emailzone = document.querySelector(".email")
    const passwordzone = document.querySelector(".password")

    editbtn.addEventListener("click", () => {
        editbtn.style.display = "none"
        validbtn.style.display = "flex"

        pseudozone.removeAttribute('disabled')
        emailzone.removeAttribute('disabled')
        passwordzone.removeAttribute('disabled')
        passwordzone.setAttribute('type', 'text')
        pseudozone.focus()
    })
});

const container = document.getElementById('container');