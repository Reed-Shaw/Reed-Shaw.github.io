let myPoints;
let myEdges;
//let numOfPoints = getElementById("howManyPoints");
//Function that draws points
function drawCircle(ctx, numPts){
    clearGraph();
    myPoints = new Points(numPts);
    myPoints.drawCircles(ctx);
    drawEdges(ctx, myPoints);
    findCoordinates(myPoints);
}
//funciton that adds edges between each circle
function drawEdges(ctx, myPoints){
    myEdges = new Edges(myPoints);
    myEdges.drawEdges(ctx);
}

//function that clears all circles and edges
function clearGraph(){
    ctx.beginPath();
    ctx.clearRect(0, 0, WIDTH, HEIGHT);
}

//function that randomizes the points
function randomizePoints(ctx, numPts){
    clearGraph();
    myPoints = new Points(numPts);
    myPoints.drawCirclesRandom(ctx);
    drawEdges(ctx, myPoints);
    findCoordinates(myPoints);
}

function findCoordinates(myPoints){
    let myCooreds = myPoints;
    let printStatement = "";
    for(i = 0; i < myPoints.length; i++){
        printStatement += "Point " + (i+1) + ": (" + myPoints[i].getX() + ", " + myPoints[i].getY() + ")\n";
    }
    document.getElementById("displayCoordinates").innerHTML = printStatement;
}

function displayCoordinates(){
    var x = document.getElementById("displayCoordinates");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
