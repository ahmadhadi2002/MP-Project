<!-- <link rel="stylesheet" type="text/css" href="btm.css" /> -->
<!DOCTYPE html>
<html>
<head>
    <style>
        .html {min-height: 100vh;}
        body { min-height: 100vh; }
    
        .title{
            text-align: center;
            font-size: 27px;
            padding: 22px;
        }

    </style>
</head>

<body>

<div>
    <?php 
        require "../ui/navbar.html";
    ?>
        <div class="title">
            <h1>Password Cracking</h1>
        </div>
    <?php
        require "../ui/pc_main.html";
    ?>

</div>

<div>
    <?php
        require "../ui/scenario.html";
    ?>
    <br><br>
</div>

<div>
    <?php
        include "../ui/bottombar.html";
    ?>
</div>

</body>
</html>
