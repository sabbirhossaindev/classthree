<!-- dashboard.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <?php
    
        if(isset($_GET['message'])){
            echo $_GET['message'];
        }
    ?>
</body>

</html>

<!-- ajke 3 ta new topic siksi:------

1. if(condition){
    code //
    }
    else{

    }
2. header("Location: dashboard.php?message= Login Successfully.");
    header component, routing and message showing....

3. isset();
        if(isset($_GET['message'])){
            echo $_GET['message'];
        } -->