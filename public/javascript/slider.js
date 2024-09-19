
// image Slider
let slideImg = document.getElementById("slideImg");

let image = new Array("images/Background/Background.jpg",
                    "images/Background/Backgroud2.jpg",
                    "images/Background/Backgroud3.jpg",
                    "images/Background/Backgroud4.jpg",
                    );
let len = image.length;
let i = 0;
function slider(){
    if(i > len -1){
        i = 0;
    }
    slideImg.src = image[i];
    i++
    setTimeout('slider()',3000);
};
