  
// DISCORD ANIMATION 


console.log("Website Loaded");
var animation = lottie.loadAnimation({
    container: document.getElementById('myAnimation'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'Animations/Animation.json' 
  });




// footballAnimation

var footballAnimation = lottie.loadAnimation({
  container: document.querySelector('.Football-animation'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: 'Animations/Football.json',
  rendererSettings: {
      preserveAspectRatio: 'xMidYMid slice'
  }
});


// CREDIT-CARD-ANIMATION 



var creditCardAnim = lottie.loadAnimation({
  container: document.querySelector('.credit-card-animation'), // div class credit-card-animation
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: 'Animations/Credit-Card.json'  
});


// arrowAnimation


var arrowAnimation = lottie.loadAnimation({
  container: document.querySelector('.arrow-animation'), // div class arrow-animation
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: 'Animations/arrow.json' 
});
