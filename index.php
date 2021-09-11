<?php
    include('include/dbcom.php');
?>
<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=[device-width], initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="GABRIEL CARLOS CAVALCANTE">
        <title>TECBRROLL</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <?php
            $query=mysqli_query($con,"select * from menu");
            $count=mysqli_num_rows($query);
            while ($row=mysqli_fetch_array($query))
            {
        ?>
        <a href="<?php echo $row['URL'];?>"><?php echo $row['TEXT']; ?></a>
        <?php
            }
        ?>
        <script src="js/script.js"></script>
    </body>
</html>
