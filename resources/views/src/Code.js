var ibars=document.getElementById("icon-bars");
var closeicons = document.getElementById("close-icons");
var sidebar= document.getElementById("side-bar");
var logo=document.getElementById("Tera")
var cright=document.getElementById("card-right")
var divinfo=document.getElementById("info-card")
var statinfo=document.getElementById("stat-card")
var aftnav=document.getElementById("after-nav")
var t=document.querySelector(".card-edit-tech")
var l=document.querySelector(".card-edit-lang")
var p=document.getElementById("point")
var radios = document.querySelectorAll("input[type='radio']")
var w = screen.width
function is_null(params) {
    if (params == null) {
        return true
    }
    return false
}

function SideToogle() {

 (!is_null(sidebar)) ? sidebar.classList.toggle("hidden") : '';
 (!is_null(logo)) ? logo.classList.toggle("lg:hidden") : '';
 (!is_null(cright)) ? cright.classList.toggle("lg:w-[90%]") : '';
 (!is_null(cright)) ? cright.classList.toggle("lg:w-full") : '';
 (!is_null(divinfo)) ? divinfo.classList.toggle("lg:w-3/4") : '';
 (!is_null(divinfo)) ? divinfo.classList.toggle("lg:w-full") : '';
 (!is_null(statinfo)) ? statinfo.classList.toggle("lg:w-3/4") : '';
 (!is_null(statinfo)) ? statinfo.classList.toggle("lg:w-full") : '';
}

function ShowAfterNav(){
aftnav.classList.toggle("hidden");
}
function Permute(){
if (radios[0].checked) {
    t.classList.toggle('hidden')
    l.classList.toggle('hidden')
}
else if (radios[1].checked) {
    t.classList.toggle('hidden')
    l.classList.toggle('hidden')
}

}
document.onclick = check;


function check(e) {
     
  var target = (e && e.target) || (event && event.srcElement);
  console.log(screen.width)
  //Nav Menu

   // click NOT on the menu show menu
    if(!checkParent(target, sidebar ) ) {
      if( checkParent(target, ibars )){
        console.log(w)
        // Click on iconbars for mobile screen, show menu
        if (w < 1024) {
          (!is_null(sidebar)) ? sidebar.classList.toggle("hidden") : '';
          // (!is_null(logo)) ? logo.classList.toggle("lg:hidden") : '';
          // (!is_null(cright)) ? cright.classList.add("lg:w-[80%]") : '';
          // (!is_null(divinfo)) ? divinfo.classList.toggle("lg:w-3/4") : '';
          // (!is_null(divinfo)) ? divinfo.classList.toggle("lg:w-full") : '';
          // (!is_null(statinfo)) ? statinfo.classList.toggle("lg:w-3/4") : '';
          // (!is_null(statinfo)) ? statinfo.classList.toggle("lg:w-full") : '';
            }
            // Click on iconbars for Desktop screen, toggle menu
          else {
            (!is_null(sidebar)) ? sidebar.classList.toggle("hidden") : '';
      (!is_null(logo)) ? logo.classList.toggle("lg:hidden") : '';
      (!is_null(cright)) ? cright.classList.toggle("lg:w-[90%]") : '';
      (!is_null(divinfo)) ? divinfo.classList.toggle("lg:w-3/4") : '';
      (!is_null(divinfo)) ? divinfo.classList.toggle("lg:w-full") : '';
      (!is_null(statinfo)) ? statinfo.classList.toggle("lg:w-3/4") : '';
      (!is_null(statinfo)) ? statinfo.classList.toggle("lg:w-full") : '';
          }
         // Succesive Click on iconbars for Desktop screen, hide menu
        
      }
 // click both outside link and outside menu for mobile screen, hide menu
      else  {
        if (w < 1024 ) {
      (!is_null(sidebar)) ? sidebar.classList.add("hidden") : '';
      // (!is_null(logo)) ? logo.classList.remove("lg:hidden") : '';
      // (!is_null(cright)) ? cright.classList.remove("lg:w-[80%]") : '';
      // (!is_null(divinfo)) ? divinfo.classList.add("lg:w-3/4") : '';
      // (!is_null(divinfo)) ? divinfo.classList.remove("lg:w-full") : '';
      // (!is_null(statinfo)) ? statinfo.classList.add("lg:w-3/4") : '';
      // (!is_null(statinfo)) ? statinfo.classList.remove("lg:w-full") : '';
        }
       
      } 
    } 
      if (checkParent(target, closeicons)) {
    (!is_null(sidebar)) ? sidebar.classList.toggle("hidden") : '';
   }
     
     } 
    
  




function checkParent(t, elm) {
  while (t.parentNode) {
    if (t == elm) {
      return true;
    }
    t = t.parentNode;
  }
  return false;
}