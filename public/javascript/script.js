humburger = document.querySelector(".humburger");
humburger.onclick = function(){
    navbar = document.querySelector(".nav-bar");
    navbar.classList.toggle("active");
}

// Navbar
first = document.querySelector(".font-logo");
first.onclick = function(){
    navbar = document.querySelector(".first-nav-nav");
    navbar.classList.toggle("active");
};
sec = document.querySelector(".sec-font-logo");
sec.onclick = function(){
    navbar = document.querySelector(".sec-nav-nav");
    navbar.classList.toggle("active");
};



// Single Product Images
// let MainImg = document.getElementById("MainImg");
// let smallimg = document.getElementsByClassName("small-img");

// smallimg[0].onclick = function (){
//     MainImg.src = smallimg[0].src;
// };
// smallimg[1].onclick = function (){
//     MainImg.src = smallimg[1].src;
// };
// smallimg[1].onclick = function (){
//     MainImg.src = smallimg[1].src;
// };
// smallimg[2].onclick = function (){
//     MainImg.src = smallimg[2].src;
// };
// smallimg[3].onclick = function (){
//     MainImg.src = smallimg[3].src;
// };











// Navbar @media queries
// $(document).ready(function(){
//     $('.font-logo').on('click',function(){
//         $('.nav .first-nav-nav').toggleClass('show');
//     })
// })
// $(document).ready(function(){
//     $('.sec-font-logo').on('click',function(){
//         $('.nav .sec-nav-nav').toggleClass('show');
//     })
// })
