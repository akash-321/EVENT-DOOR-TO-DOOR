// Scroll to top

const scrolltp = document.querySelector("#scrolltp");
scrolltp.addEventListener('click', function() {
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth",
    });
});
window.addEventListener('scroll',function(){
    if(this.window.scrollY>=0){
        scrolltp.getElementsByClassName.opacity = 0;
    }else{
        scrolltp.getElementsByClassName.opacity = 0;
    }
});
window.addEventListener('scroll', function(){
    if(this.window.scrollY >= 700) {
        scrolltp.getElementsByClassName.opacity = 1;
        scrolltp.style("content-position", "absolute")
    }else {
        scrolltp.getElementsByClassName.opacity = 0;
    }
});

// Theme
const themeToggle = document.querySelector(".checkbox");
const body = document.querySelector("body");
const darkmode = localStorage.getItem("dark");
if(darkmode){
    body.classList.add("dark");
    themeToggle.checked = true;
}

themeToggle.addEventListener("change", function () {
    body.classList.toggle("dark");
    if(body.classList.contains('dark')){
        localStorage.setItem("dark", "active");
    } else {
        localStorage.removeItem("dark");
    }
});