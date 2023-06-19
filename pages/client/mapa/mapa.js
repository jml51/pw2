// --------------------   display content  --------------------------- //
const hide = document.querySelectorAll(".he")
const noscrooll = document.querySelectorAll("#conta")


const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        entry.target.classList.toggle("show1", entry.isIntersecting)
        if(entry.isIntersecting) observer.unobserve(entry.target)
    })
    },
    {
        //threshold: 1,
        rootMargin: "-145px"
    }
)
hide.forEach(hid => {
    observer.observe(hid);
});
// --------------------                    --------------------------- //

const btn_add = document.getElementById("btn")
let slides = document.getElementsByClassName("block")
let slides2 = document.getElementsByClassName("block2")

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  
 
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  
  slides[slideIndex-1].style.display = "block";  

  if (n > slides2.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides2.length}
  for (i = 0; i < slides2.length; i++) {
    slides2[i].style.display = "none";  
  }
  
  slides2[slideIndex-1].style.display = "block";  
  
}
// --------------------   login form  --------------------------- //
const login_abrir  = document.getElementById("login_abrir")
const login_form   = document.getElementById("form_login")
var q = 0;

login_abrir.addEventListener("click", function(){
    
    q = q + 1;

    if(q % 2 == 1){
        login_form.style.display = "block";
    }else{
        login_form.style.display = "none";
    }
});


// --------------------                    --------------------------- //

