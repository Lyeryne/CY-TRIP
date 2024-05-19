document.addEventListener("DOMContentLoaded", () => {
    const video = document.querySelector("#bgvideo")
    const button = document.getElementById("controlButton");

    function playpause(){
        if(video.paused){
            video.play();
            button.innerHTML = "&#10074;&#10074;"; // Icône Pause
        } 
        else {
            video.pause();
            button.innerHTML = "&#9658;"; // Icône Play
        }

        button.style.display = "flex";
        button.style.opacity = "1";

        setTimeout(function(){
            button.style.opacity = "0";
        }, 700);   
    }

    video.addEventListener("click", ()=>{
        playpause();
    })



        
        
    
})