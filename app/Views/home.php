<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title><?= $title; ?></title>
</head>
<body>
<nav>
    
        <div class="nav-wrapper teal darken-4">
        <a href="#" class="brand-logo center">AppStarter</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="#">Example 1</a></li>
            <li><a href="#">Example 2</a></li>
            <li><a href="#">Example 3</a></li>
        </ul>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="<?= base_url('product/index'); ?>">Home</a></li>
        <li><a href="<?= base_url('LoginController/index')?>">Sign In</a></li>
        <li><a href="<?= base_url('RegisterController/index')?>">Sign Up</a></li>
        </ul>
        </div>
    </nav>
    
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   
</body>
</html>