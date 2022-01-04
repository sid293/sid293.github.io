console.log("new start")
function myfunction(){
    console.log("this")
    document.querySelector(".heading").style.backgroundColor="red";
}

// gsap.registerPlugin(ScrollTrigger);
gsap.to(".num",{
//   ScrollTrigger:{
//     trigger:".num",
//     toogleActions:"restart none none none"},
  rotate:540 , x:300, duration:2
});