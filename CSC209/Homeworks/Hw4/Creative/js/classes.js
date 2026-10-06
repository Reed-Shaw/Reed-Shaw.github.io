//Classes
class Point{
    constructor(x,y){
        this.x = x;
        this.y = y;
    };

    getX(){
        return this.x;
    }           
    getY(){
        return this.y;
    }

    drawC(ctx){
        //ctx.beginPath;
        ctx.strokeStyle = POINTSTYLE;
        console.log(ctx.strokeStyle);
        //Using moveTo and lineTo to stop the circles from having lines connecting them. 
        ctx.moveTo(this.x, this.y - POINTRADIUS);
        ctx.lineTo(this.x, this.y - POINTRADIUS);
        ctx.arc(this.x - POINTRADIUS, this.y-POINTRADIUS, POINTRADIUS, 0, 2*Math.PI);
        ctx.stroke();
    };
}

//Class that has several points
class Points extends Array {
    constructor(numPts){
        super(numPts);
    };

    //Draw circles non-randomly
    drawCircles(ctx){
        //get x and y
        let x = 50;
        let y = 50;
        //Put all the points in the array
        for(let i = 0; i < this.length; i++){
            this[i] = new Point(x, y);
            this[i].id = i+1;
            x += 100;
        }
        //Draw all of the points in the array
        for(let i = 0; i < this.length ; i++){
            this[i].drawC(ctx);
            ctx.font = "20px Time New Roman";
            //all the math is getting the label in the center of the circle.
            ctx.fillText(this[i].id, this[i].x - POINTRADIUS - 5, this[i].y - 3);
        }

    }
    //draw circles randomly
    drawCirclesRandom(ctx){
        //Put all the points in the array
        for(let i = 0; i < this.length; i++){
            this[i] = new Point(getRandomX(), getRandomY());
            this[i].id = i+1;
        }
        //Draw all of the points in the array
        for(let i = 0; i < this.length ; i++){
            this[i].drawC(ctx);
            ctx.font = "20px Time New Roman";
            //all the math is getting the label in the center of the circle.
            ctx.fillText(this[i].id, this[i].x - POINTRADIUS - 5, this[i].y - 3);
        }
    }
    
}
//Class that makes an edge
class Edge{
    constructor(point1, point2){
        this.point1 = point1;
        this.point2 = point2;
    }

    drawEdge(ctx){
        console.log("Points in drawEdge");
        console.log(this.point1);
        console.log(this.point2);
        ctx.beginPath;
        ctx.moveTo(this.point1.x, this.point1.y - POINTRADIUS);
        ctx.lineTo(this.point2.x, this.point2.y - POINTRADIUS); //Changed the first this.point2.y to this.point2.x
        ctx.stroke(); 
    }
}

//Class that connects several points with edges
class Edges {
    constructor(arrPoints){
        this.arrPoints = arrPoints;
    }

    drawEdges(ctx){
        const edgesArray = []; 
        let thisEdge = 0;
        let edgeId = 1;
        for(let i = 0; i < this.arrPoints.length - 1; i++){
            if(i == 0){
                edgesArray.push(new Edge(this.arrPoints[i], this.arrPoints[i+1]));
                edgesArray[thisEdge].drawEdge(ctx);
                edgesArray[thisEdge].id = edgeId;
                edgeId++;
                ctx.font = "20px Times New Roman";
                ctx.fillText(edgesArray[thisEdge].id, ((edgesArray[thisEdge].point1.x)/2 + (edgesArray[thisEdge].point2.x)/2), ((edgesArray[thisEdge].point1.y)/2 + (edgesArray[thisEdge].point2.y)/2)); 
                thisEdge++;
            } else if(i%2 == 0){
                edgesArray.push(new Edge(this.arrPoints[i], this.arrPoints[i+1]));
                edgesArray[thisEdge].drawEdge(ctx);
                edgesArray[thisEdge].id = edgeId;
                edgeId++;
                ctx.font = "20px Times New Roman";
                ctx.fillText(edgesArray[thisEdge].id, ((edgesArray[thisEdge].point1.x)/2 + (edgesArray[thisEdge].point2.x)/2), ((edgesArray[thisEdge].point1.y)/2 + (edgesArray[thisEdge].point2.y)/2)); 
                thisEdge++;
            } 
            
        }  
 
    }
}