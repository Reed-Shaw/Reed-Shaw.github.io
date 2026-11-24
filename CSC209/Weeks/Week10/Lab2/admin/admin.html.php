<!DOCTYPE html>
<html>
    <head>
        <title>Lab 2 Admin Page</title>
    </head>
    <body>
        <hr>
        <div class="mainDiv">
            <h1>Admin Page</h1>
            <button type="button" onclick="loadDoc()">Update Users</button>
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