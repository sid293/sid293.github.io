console.log("starting")
// gsap.from('.heading',{duration:2, x:'-100%',ease:'bounce'})
// gsap.from('.para',{duration:1,opacity:0,delay:1})
// gsap.fromTo('.footing',{opacity:0,rotation:1000},{opacity:1,rotation:0})
const dad = document.querySelector('.button')
dad.addEventListener('click',() => {
    console.log("you clicked reverse")
    tame.reverse()
}) 
const tame = gsap.timeline({defaults:{opacity:0}})
tame
    .from('.heading',{duration:2, x:'-100%',ease:'bounce'})
    .from('.para',{duration:1,opacity:0,delay:1})
    .fromTo('.footing',{opacity:0,rotation:1000},{opacity:1,rotation:0})

const ichange = document.querySelector('.image')
ichange.addEventListener('click',()=>{
    gsap.fromTo('.image',{duration:2,scaleX:1,scaleY:1})
})