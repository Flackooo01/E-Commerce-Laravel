const showPopupBtn = document.querySelector(".logout");
const formPopup = document.querySelector(".form-pop");
const hidePopupBtn = document.querySelector(".close-btn");

const loginSignupLink = document.querySelectorAll(".form-box .bottom-link a");

showPopupBtn.addEventListener("click", () => {
    document.body.classList.toggle("show-popup");
});
// hide form popup
hidePopupBtn.addEventListener("click", ()=> showPopupBtn.click());


loginSignupLink.forEach(link =>{
    link.addEventListener("click", (e) =>{
        e.preventDefault();
        console.log(link.id);
        formPopup.classList[link.id === "signup-link" ? 'add' : 'remove']("show-signup");
        
    })
})
// sec = document.querySelector(".logout");
// sec.onclick = function(){
//     navbar = document.addEventListener("click");
//     navbar.classList.toggle("show-Popup");
// };
