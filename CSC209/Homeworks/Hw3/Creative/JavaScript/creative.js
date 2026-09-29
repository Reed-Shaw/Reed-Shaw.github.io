const classRoster = ["Reed", "Tabz", "Ani", "Catherine", "Jennifer"];
const canvas = document.getElementById("pointsCanvas");
const ctx = canvas.getContext("2d");
ctx.strokeStyle = "blue";

let POINTSTYLE = "blue";
const POINTRADIUS = 40;

const myCanvas = document.getElementById("pointsCanvas")
let myX;
let myY;
//Made a class called point
class Point{
  constructor(x,y){
    this.x = x;
    this.y = y;
  };

  translate(x,y){
    this.x = this.x+x;
    this.y=this.y+y
  };

  drawC(ctx){
    ctx.strokeStyle = POINTSTYLE;
    ctx.beginPath;
    ctx.arc(this.x - POINTRADIUS, this.y-POINTRADIUS, POINTRADIUS, 0, 2 * Math.PI);
    ctx.stroke();
    };
}

//Event Listener that sees when the canvas has been clicked, gets the x and y coordinates, and draws a new point around that spot.
//NEXT: Find out why all the circles are connected :'(
myCanvas.addEventListener("click", function (event) {
  myX = event.clientX;
  myY = event.clientY;
  /*Debugger to make sure myX and myY were working.
  document.getElementById("testingArea").innerHTML = myX;
  document.getElementById("testingArea2").innerHTML = myY;*/
  const pointA = new Point((myX-335), (myY-160));
  pointA.drawC(ctx);
});

//Function that changes POINTSTYLE to red
function drawRed() {
  POINTSTYLE = "red";
}

//Function that changes POINTSTYLE to blue
function drawBlue() {
  POINTSTYLE = "blue";
}
