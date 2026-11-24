<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/css.css">
        <script src="JavaScript/javascript.js"></script>
        <?php include './php/whereami2.php';?>
    </head>
    <body>
        <a href="./admin/admin.html.php">Admin Page</a>
        <div class= "mainDiv">
            <h2>Log In</h2>
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

            <div id="id01" class="modal">
            
                <form class="modal-content animate" action="./saveUsers.html.php" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <img src="./Images/img_avatar2.png" alt="Avatar" class="avatar">
                    </div>

                    <div class="container">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="username" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" required>
                            
                        <button type="submit">Login</button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        <span class="psw">Forgot <a href="#">password?</a></span>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>