let bol=false;
window.addEventListener("scroll", (e) => {
  let animation = document.getElementById("we");
  let position = animation.getBoundingClientRect().top;
  //let positionBlog =animationBlog.getBoundingClientRect().top
  let tamañoPantalla = window.innerHeight * 0.95;
  
  if (position < tamañoPantalla && bol==false) {
    bol=true;
    console.log(e);
    const anims = document.querySelectorAll(".js-anim-container");
    const bm = document.getElementById('bm');

    let animw = [];

    animw[0] = lottie.loadAnimation({
      container: bm, // the dom element that will contain the animation
      renderer: "svg",
      loop: true,
      autoplay: true,
      path: `./../../JSON/Animacion${2}.json`,
    });
    animw[0].setSpeed(0.6);
    setTimeout(function () {
      animw[0].setSpeed(-0.6);
      setTimeout(() => {
        animw[0].stop();
        const ContaineAnima=document.getElementById('animacion-lottie');
        ContaineAnima.style.zIndex=-10;

      }, 1340);
      // animw[0].pause();
      console.log("dd");
    }, 1550);
  }
});
let movi= document.getElementById("animacionClick");
let animacionClick = lottie.loadAnimation({
  container: movi, // the dom element that will contain the animation
  renderer: "svg",
  loop: false,
  autoplay: false,
  path: `./../../JSON/1370i.json`,
});
movi.style.display='none';
movi.style.zIndex=-10;
const conta=document.querySelectorAll(".services-type>div");
conta.forEach((enveto,key)=>{
  enveto.addEventListener('click',(e)=>{
    movi.style.display='block';
    movi.style.zIndex=5;
     console.log('holas')
    animacionClick.playSegments([0,100], true);
   })
});


