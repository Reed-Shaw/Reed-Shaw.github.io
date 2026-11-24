<!DOCTYPE html>
<html>
    <head>
        <title>Welcome Page User 2</title>
        <link rel="stylesheet" href="../../../CSS/basicCss.css">
        <script src="../../timeLoggedIn.js"></script>
        <?php include '../../extractFolderNumber.php';?> 
    </head>
    <body>
        <div class="headerDiv">
            <a href="../../../creative.html">Back to Creative</a>
        </div>
        <hr>
        <div class="mainDiv">
            <div class="bannerDiv">
                <h2>Welcome Page</h2>
            </div>
            <p>Welcome, carol!<br></p>
            <p>Your password is: letmein</p>
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