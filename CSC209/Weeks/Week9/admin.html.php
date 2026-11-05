<!DOCTYPE html>
<html>
    <head>
        <title>Tuesday Lab Admin Page</title>
        <link rel="stylesheet" href="./CSS/basicCss.css">
    </head>
    <body>
        <div class="headerDiv">
            <a href="./week9.html">Back to Week 9</a>
        </div>
        <hr>
        <div class="mainDiv">
            <h1>Tuesday In-Class Lab 15 Pt 2</h1>
            <?php
                $myJson = file_get_contents("./users.json");
                $usernameArray = json_decode($myJson, true);
            ?>

            <?php
                function userTable($usernameArray){
                    echo "<table id=\"adminTable\">";
                    echo "<tr><th id=\"username\">Username</th><th id=\"password\">Password</th><th id=\"loggedtimes\">Logged Times</th></tr>";
                    $index = 1;
                    foreach($usernameArray as $user){
                        echo "<tr id=\"row" . $index . "\">";
                        echo "<td>  " . $user["username"] . " </td>";
                        echo "<td>  " . $user["password"] . " </td>";
                        echo "<td>  " . $user["loggedtimes"] . " </td>";
                        echo "</tr>";
                        $index++;
                    }
                    echo "</table>";
                }

                userTable($usernameArray);
            ?>

            <script>
                function sortTableUsername() {
                    let table, i, x, y;
                    table = document.getElementById("adminTable");
                    let switching = true;

                    // Run loop until no switching is needed
                    while (switching) {
                        switching = false;
                        let rows = table.rows;

                        // Loop to go through all rows
                        for (i = 1; i < (rows.length - 1); i++) {
                            var Switch = false;

                            // Fetch 2 elements that need to be compared
                            x = rows[i].getElementsByTagName("TD")[0];
                            y = rows[i + 1].getElementsByTagName("TD")[0];

                            // Check if 2 rows need to be switched
                            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                                // If yes, mark Switch as needed and break loop
                                Switch = true;
                                break;
                            }
                        }
                        if (Switch) {
                            // Function to switch rows and mark switch as completed
                            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                            switching = true;
                        }
                    }
                }

                function sortTablePassword() {
                    let table, i, x, y;
                    table = document.getElementById("adminTable");
                    let switching = true;

                    // Run loop until no switching is needed
                    while (switching) {
                        switching = false;
                        let rows = table.rows;

                        // Loop to go through all rows
                        for (i = 1; i < (rows.length - 1); i++) {
                            var Switch = false;

                            // Fetch 2 elements that need to be compared
                            x = rows[i].getElementsByTagName("TD")[1];
                            y = rows[i + 1].getElementsByTagName("TD")[1];

                            // Check if 2 rows need to be switched
                            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                                // If yes, mark Switch as needed and break loop
                                Switch = true;
                                break;
                            }
                        }
                        if (Switch) {
                            // Function to switch rows and mark switch as completed
                            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                            switching = true;
                        }
                    }
                }

                function sortTableLoggedTimes() {
                    let table, i, x, y;
                    table = document.getElementById("adminTable");
                    let switching = true;

                    // Run loop until no switching is needed
                    while (switching) {
                        switching = false;
                        let rows = table.rows;

                        // Loop to go through all rows
                        for (i = 1; i < (rows.length - 1); i++) {
                            var Switch = false;

                            // Fetch 2 elements that need to be compared
                            x = rows[i].getElementsByTagName("TD")[2];
                            y = rows[i + 1].getElementsByTagName("TD")[2];

                            // Check if 2 rows need to be switched
                            if (parseInt(x.innerHTML) > parseInt(y.innerHTML)) {
                                // If yes, mark Switch as needed and break loop
                                Switch = true;
                                break;
                            }
                        }
                        if (Switch) {
                            // Function to switch rows and mark switch as completed
                            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                            switching = true;
                        }
                    }
                }
            </script>
            <script>
                document.getElementById("username").addEventListener("click", function() {
                    sortTableUsername();
                });
                document.getElementById("password").addEventListener("click", function() {
                    sortTablePassword();
                });
                document.getElementById("loggedtimes").addEventListener("click", function() {
                    sortTableLoggedTimes();
                });
            </script>
        </div>
    </body>
</html>