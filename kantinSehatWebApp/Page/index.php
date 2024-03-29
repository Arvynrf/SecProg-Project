<?php
include_once "../Auth/connection.php";
// session_start();

$menuQuery = "SELECT * FROM Menu";
$menuResult = mysqli_query($conn, $menuQuery);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kantin Sehat</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <?php include('../Nav/navbar.php') ?>
    
    <div class="main">
        <div class="d-flex flex-wrap d-flex justify-content-center">
            <?php
            while ($menuCard = mysqli_fetch_assoc($menuResult)) {
                $_SESSION['id'] = $menuCard['id'];
                $_SESSION['stock'] = $menuCard['qtt'];
                $_SESSION['Name'] = $menuCard['Name'];
                $_SESSION['Caption'] = $menuCard['Caption'];
                $_SESSION['Img'] = $menuCard['Image'];
                include ('../Card/card.php');
                ?>

                <?php
            }
            ?>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>