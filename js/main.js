var menuButton = document.querySelector(".menu-trigger"); 

menuButton.addEventListener("click", function(){
    document.body.classList.toggle("menu-open");
    console.log("click")
});

var prodBtn = document.querySelector(".dropdown > a");
var dropdnContent = document.querySelector(".dropdown-content");
var mainHeader = document.querySelector(".main-header");
var prodSliderTopMargin = window.getComputedStyle(dropdnContent).height;

prodBtn.addEventListener("click", function(e) {
    e.preventDefault();

    document.body.classList.toggle("blah");

    mainHeader.style.marginBottom = (mainHeader.style.marginBottom != prodSliderTopMargin) ? prodSliderTopMargin : 0;
});
