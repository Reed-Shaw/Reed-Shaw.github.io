//Utility functions
function getRandomX(){
    let x = Math.floor(Math.random() * (WIDTH+1));
    return x;
}
function getRandomY(){
    let y = Math.floor(Math.random() * (HEIGHT+1));
    return y;
}
//Function to download the canvas as an image
function downloadCanvas() {
    const myCanvas = document.getElementById("canvas");
    const dataURL = myCanvas.toDataURL("image/png");
    const link = document.createElement("a");
    link.href = dataURL;
    link.download = "canvas-export.png";
    link.click();
}
