
//    toggle button on "">>"" icon
//  onclick change  arrows 
// toggleAttribute
const arrows = document.getElementById("more_imgs");
const gall = document.getElementById("img_gallery");

arrows.addEventListener("click", function(){
    gall.toggleAttribute("hidden");
});

// document.getElementById('more_imgs').onclick = function(){
//         alert("button clicked");
//     }

