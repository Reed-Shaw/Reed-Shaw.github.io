<!DOCTYPE html>
<html>
    <head>
        <title>Welcome Page User 1</title>
        <link rel="stylesheet" href="../../CSS/basicCss.css">
        <script src="../../timeLoggedIn.js"></script>
        <?php include '../../extractFolderNumber.php';?> 
    </head>
    <body>
        <div class="headerDiv">
            <a href="../../../technical.html">Back to Technical</a>
        </div>
        <hr>
        <div class="mainDiv">
            <h3>User 1 Welcome Page</h3>
            <p>Welcome, alice!<br></p>
            <p>Your password is: password</p>
            <form action="../../logout.html.php" method="post">
                <button id="logoutBtn">Logout</button>
                <input type="hidden" id="totalTime" name="totalTime" value="">
                <input type="hidden" id="folderNumber" name="folderNumber" value="">
            </form>
            <?php $folderNumber = extractFolderNumber("user.html.php");?>
            <?php echo "<script> document.getElementById('folderNumber').value = " . $folderNumber . "</script>"; ?>
        </div>
        <script>
            let startTime;
            let endTime;
            window.addEventListener("load", function() {
                startTime = new Date().getTime();
            });
            document.getElementById("logoutBtn").addEventListener("click", function() {
                endTime = new Date().getTime();
                document.getElementById("totalTime").value = timeLoggedIn(startTime, endTime);
            });
        </script>

    </body>
</html>