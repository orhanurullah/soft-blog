function openNav() {
   document.getElementById('menum').style.width = "50px";
   document.getElementById("mySidenav").style.width = "300px";
   document.getElementsByClassName("full-title")[0].style.zIndex = "auto";
   document.getElementById('menu-image').style.display = "none";
   document.getElementById('menu-close-image').style.display = "block";
   document.getElementById('mobile-close').style.display = "block";
}

async function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("menum").style.width = "0";
  await sleep(500);
    document.getElementsByClassName("full-title")[0].style.zIndex = "1000";
  document.getElementById('menu-close-image').style.display = "none";
  document.getElementById('menu-image').style.display = "block";
  document.getElementById('mobile-close').style.display = "none";

}
function closeMobileNav(){

}
// function openMobileNav(){
//     document.getElementsByClassName("full-title")[0].style.zIndex = "auto";
//     document.getElementById('menum').style.width = "50px";
//     document.getElementById("mySidenav").style.width = "300px";
// }
function sleep(ms){
    return new Promise(resolve => setTimeout(resolve, ms));
}
// if(document.getElementById('mySidenav').style.width > 0 && window.innerWidth > 782){
//     closeNav();
// }

