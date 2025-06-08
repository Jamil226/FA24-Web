<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php 
        echo date("M-D-Y");
    ?>
    <p>
        All Rights Reserved &copy; <?php echo date("Y") ?>. Developed by Muhammad Abdullah.
    </p>
    <p>
        Starting Year 2016 <?php $StartYear = 2016;?>
        CUI has changed the world over the last <?php $CurrentYear = date("Y"); $Years = $CurrentYear - $StartYear; echo $Years; ?> years.
    </p>
    
</body>
</html>