
// toggle button on "">>"" icon
//  onclick change  arrows 
// toggleAttribute
const arrows = document.getElementById("more_imgs");
const gall = document.getElementById("img_gallery");

arrows.addEventListener("click", function(e){
    gall.toggleAttribute("hidden");
    let icon = document.getElementById("more_imgs");
    console.log(icon);
    let ar = icon.getElementsByTagName("i"[0]);
    console.log(ar[0].className);
    let arclass = ar[0].className;
    console.log(arclass);
    //check font awsome <> class and change to arrows down or if arrows down change back to arrows right
    if(ar[0].className === "fa fa-angle-double-right"){
        // console.log("arrows down");
        ar[0].classList.remove("fa-angle-double-right");
        ar[0].classList.add("fa-angle-double-down");   
    }else{
    //  console.log("arrows right");
     ar[0].classList.remove("fa-angle-double-down");
     ar[0].classList.add("fa-angle-double-right");   
    }
});





