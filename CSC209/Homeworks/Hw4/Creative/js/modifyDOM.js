let canvas;
let ctx;

function makeCanvas(numPts, numEdges){
    canvas = document.getElementById("pointsCanvas");
    ctx = canvas.getContext("2d");
    ctx.beginPath;
    ctx.strokeStyle = "blue";
    document.getElementById("pts").innerText += " " + numPts;
    document.getElementById("edges").innerText += " " + numEdges;
}
