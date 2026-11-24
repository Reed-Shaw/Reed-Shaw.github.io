<!DOCTYPE html>
<html>
    <head>
        <title>Creative Admin Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../CSS/css.css">
    </head>
    <body>
        <div class="mainDiv">
            <h1>Admin Page</h1>
        </div>
        <hr class="colorHr">
        <div class="mainDiv">
            <div style="text-align: center;">
                <button type="button" onclick="loadDoc()" style="width:auto;">Update Users</button>
            </div>
            <p id="numUsers">
            <script>
                function loadDoc() {
                    const xhttp = new XMLHttpRequest();
                    xhttp.onload = function() {
                        document.getElementById("numUsers").innerHTML =
                        this.responseText;
                    }
                    xhttp.open("POST", "../output/users.txt");
                    xhttp.send();
                }
            </script>
        </div>
    </body>
</html>