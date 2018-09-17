var menuButton = document.querySelector(".menu-trigger"); 

menuButton.addEventListener("click", function(){
    document.body.classList.toggle("menu-open");
    console.log("click")
});
