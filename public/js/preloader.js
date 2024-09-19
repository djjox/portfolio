const loader = document.getElementById("loader");
const content = document.getElementById("content");

content.style.display = "none";

setTimeout(() => {
    loader.style.display = "none";
    content.style.display = "block";
}, 3000);