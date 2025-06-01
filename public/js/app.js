const leftText = document.querySelector(".textleft");
const image = document.querySelector(".blackWoman");


gsap.from(leftText,{
    opacity : 1,
    x : 80,
    duration : 3
});

gsap.from(image,{
    opacity : 1,
    x : -60,
    duration:2
})

const icons = document.querySelector(".icons");
gsap.from(icons,{
    opacity :0,
    y:40,
    duration :3
})

const products = document.querySelector(".products");
const productsAnim = document.querySelector(".productsAnim");
let polishes = document.querySelector(".polishes");
let shinyGem = document.querySelector(".shinyGem");
let diamondGem = document.querySelector(".diamondGem");
let ancientGem = document.querySelector(".ancientGem");


gsap.registerPlugin(ScrollTrigger);

gsap.from(products, {
    opacity: 0,
    y: 100,
    duration: 1.5,
    scrollTrigger: {
        trigger: products,
        start: "top 80%", 
        toggleActions: "play none none none",
    },
});

gsap.from()