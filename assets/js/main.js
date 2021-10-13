const main_cont = document.querySelector(".main_cont");

const tl = new TimelineMax();
tl.fromTo(main_cont,1,{height: "0%"}, {height: "100%"});

alert("hey");