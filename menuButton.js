const menuButton = document.querySelector(".menuIcon")
const menu = document.querySelector(".mainnav")
let isOpen = false;


menuButton.addEventListener("click", ()=>{
    if(isOpen){
        menu.classList.remove("open")
        menu.classList.add("close")
    }else{
        menu.classList.remove("close")
        menu.classList.add("open")
    }
    isOpen = !isOpen
})