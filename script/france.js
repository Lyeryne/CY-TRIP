document.addEventListener("DOMContentLoaded", () => {
    let video = document.getElementById("bgvideo");
    let button = document.getElementById("controlButton");

    function playpause(){
        if(video.paused){
            video.play();
            button.innerHTML = "&#10074;&#10074;"; // Icône Pause
        } 
        else {
            video.pause();
            button.innerHTML = "&#9658;"; // Icône Play
        }

        button.style.display = "block";
        button.style.opacity = "1";

        setTimeout(function(){
            button.style.opacity = "0";
        }, 700);   
    }

    video.addEventListener("click", ()=>{
        playpause();
    })
})