let bol=!1;window.addEventListener("scroll",e=>{if(document.getElementById("we").getBoundingClientRect().top<.95*window.innerHeight&&0==bol){bol=!0,console.log(e);document.querySelectorAll(".js-anim-container");const o=document.getElementById("bm");let t=[];t[0]=lottie.loadAnimation({container:o,renderer:"svg",loop:!0,autoplay:!0,path:"./../../JSON/Animacion2.json"}),t[0].setSpeed(.6),setTimeout((function(){t[0].setSpeed(-.6),setTimeout(()=>{t[0].stop()},1380),console.log("dd")}),1550)}});let movi=document.getElementById("services-type"),animacionClick=lottie.loadAnimation({container:movi,renderer:"svg",loop:!1,autoplay:!1,path:"./../../JSON/1370i.json"});const conta=document.querySelectorAll(".services-type>div");conta.forEach((e,o)=>{e.addEventListener("click",e=>{console.log("holas"),animacionClick.playSegments([0,60],!0)})});