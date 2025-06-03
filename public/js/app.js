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

let partnerBodyText = document.querySelector(".partnerBodyText");
let partnerImage = document.querySelector(".partnerImage");

gsap.from(partnerBodyText, {
    opacity: 0,
    x: -80,
    duration: 1.8,
    scrollTrigger: {
        trigger: partnerBodyText,
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

gsap.from(partnerImage, {
    opacity: 0,
    x: 80,
    duration: 1.8,
    scrollTrigger: {
        trigger: partnerImage,
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

let costumerReview = document.querySelectorAll(".costumerreview");

gsap.from(costumerReview, {
    opacity: 0,
    x: -100,
    duration: 2,
    scrollTrigger: {
        trigger: costumerReview,
        start: "top 120%",
        toggleActions: "play none none none"
    },
});

//Three.js 3D Cube Example
const geometryDiv = document.querySelector(".geometry");


if (geometryDiv) {
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(
        75,
        geometryDiv.offsetWidth / 300,
        0.1,
        1000
    );

    const renderer = new THREE.WebGLRenderer();
    renderer.setSize(geometryDiv.offsetWidth || 300, 300);
    geometryDiv.appendChild(renderer.domElement);

    // Load the texture
    const textureLoader = new THREE.TextureLoader();
    const diamondTexture = textureLoader.load("/images/diamondblue.jpg");

    // Create a diamond shape (octahedron) with texture
    const diamondGeometry = new THREE.OctahedronGeometry(0.9);
    const diamondMaterial = new THREE.MeshPhongMaterial({
        map: diamondTexture, // use the texture
        color: 'white', // optional: tint
        shininess: 1900,
        transparent: false,
        opacity: 100,
    });
    const diamond = new THREE.Mesh(diamondGeometry, diamondMaterial);
    scene.add(diamond);

    // Add lights
    const light = new THREE.PointLight(0xffffff, 100, 120);
    light.position.set(-2, -1, 5);
    scene.add(light);

    const ambientLight = new THREE.AmbientLight(0xffffff, 0.7);
    scene.add(ambientLight);

    camera.position.z = 2;
    renderer.setClearColor(0xffffff, 1);

    // Animate loop
    function animate() {
        requestAnimationFrame(animate);
        diamond.rotation.y += 0.01;
        diamond.rotation.x += 0.01;
        renderer.render(scene, camera);
    }
    animate();
}