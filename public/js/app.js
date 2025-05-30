const leftText = document.querySelector(".textleft");
const image = document.querySelector(".blackWoman");


gsap.from(leftText,{
    opacity : 0,
    x : 60,
    duration : 3
});

gsap.from(image,{
    opacity : 0,
    x : -40,
    duration:2
})