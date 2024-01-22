const btn= document.getElementById("btn");
const btnText=document.getElementById("btnText");
const btnIcon= document.getElementById("btnIcon");
const para= document.querySelector("p");

btn.onclick = function(){
    document.body.classList.toggle("dark-theme");

    if(document.body.classList.contains("dark-theme")){
        btnIcon.src="assets/dark theme icon/sun.png";
        btnText.innerHTML="Light";
        para.style.color="white";
    }
    else{
        btnIcon.src="assets/dark theme icon/moon.png";
        btnText.innerHTML="Dark";
        para.style.color="black";
       

    }
}




