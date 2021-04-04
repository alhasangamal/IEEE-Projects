<?php
$homepage="Library System"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/style.css">
    <title><?php echo $homepage ?></title>
    <script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
<div class="topnav">
    <a class="active" href="home.php">Show</a>
    <a href="add.php">Add</a>
    <a href="update.php">Update</a>
    <a href="delete.php">Delete</a>
</div>
<!-- header contain all elements in page -->
<div class="header">
    <!-- overlay is the dark shadow in the background -->
    <div class="overlay">
        <!-- contains h1 and form -->
        <div class="regster">

            <!-- form the rectangle black box -->
            <div class="form">
                <h2>Show Books</h2>

                <form class="frm" method="post" action="home_reg.php">
                    <select name="type" aria-placeholder="type of book" class="half-special" required>
                        <option value="">type...</option>
                        <option value="Scientific">Scientific</option>
                        <option VALUE="Literary">Literary</option>
                        <option value="Religious">Religious</option>
                        <option value="Fantasy">Fantasy</option>
                    </select>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <input type="submit" value="Show" class="submit">
                </form>
                <!-- footer -->
                <p>&copy; 2018 course registration form . all rights deserved | design by <span>Alhasan gamal</span></p>
            </div>
        </div>
    </div>
</div>
</body>