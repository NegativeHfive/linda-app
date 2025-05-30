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
    y:10,
    duration :2 
})