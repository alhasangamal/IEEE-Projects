<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Recruitment Form</title>
    <link rel="icon" href="imgs/fav.png">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body onload="myFunction()" style="margin:0;">
<!-- Display Loader -->
<div id="loader">
    <img src="imgs/loader.gif" alt="IEEE">
</div>
<!-- Display body -->
<div style="display:none;" id="myDiv">
    <!-- Display the countdown timer in an element -->
    <p id="demo"></p>
    <!-- Header -->
    <div class="header">
        <img src="imgs/logo-black.png">
    </div>
    <div class="container">
        <div class="main">
            <h2> Social Media Question </h2>
            <span id="error">
 <!---- Initializing Session for errors --->
 <?php
 if (!empty($_SESSION['error'])) {
     echo $_SESSION['error'];
     unset($_SESSION['error']);
 }
 ?>
 </span>
            <form action="" method="post">
                <label>Why do you choose to join (Social Media Marketing)
                    committee specifically?<span>*</span></label>
                <input name="q1" type="text" required>
                <label>What do know about Online Marketing and its
                    weapons?<span>*</span></label>
                <input name="q2" type="text" required>
                <label>What’s your English level?<span>*</span></label>
                <input name="q3" type="text" required>
                <input type="reset" value="Reset" />
                <input type="submit" value="Submit" />
            </form>
            <!-- footer -->
            <p>&copy; 2019 Recruitment form . all rights deserved | design by <span>Alhasan gamal</span></p>
        </div>
    </div>
</div>
</body>
</html>
