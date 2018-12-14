window.scrollTo(0,document.body.scrollHeight);



var lengthNum = document.querySelectorAll(".tw-c-text-overlay.tw-ellipsis").length;
var randomNumber = Math.floor(Math.random()*lengthNum);


console.log("Total Followers : " + lengthNum);
console.log("Random Number : " + randomNumber);

var  luckyViewer = document.querySelectorAll(".tw-c-text-overlay.tw-ellipsis")[randomNumber].innerText;

console.log("Lucky Winner is : " + luckyViewer);

window.alert(luckyViewer);















