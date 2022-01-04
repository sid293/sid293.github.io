console.log('starting');
anime({
    targets: '.css-prop-demo', 
    translateX:100,
    borderRadius:50,
    rotate:[0,180],
    backgroundColor: '#FFF',
    // borderRadius: ['0%', '50%'],
    easing: 'easeInOutSine',
    direction: 'alternate',
    // loop:true
  });

anime({
    targets:'.charged',
    width:20,
    ease:'linear',
    delay: function(el, i, l) {
        return i * 500;
      },
    endDelay: 500,
    duration:5000,
    loop:true
});

let progress = document.querySelector(".progress");
anime({
  targets: progress,
  innerHTML:[0,100],
  round:1,
  easing:"easeInOutExpo"
});