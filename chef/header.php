<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <style>
    
    /* Style the top navigation bar */
    .topnav {
    overflow: hidden;
    background-color: #cc0000;
    position: relative;
    height: auto;
    grid-template-columns: 75% 25%;
    }
    
    /* Style the topnav links */
    .topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 24px 16px;
    text-decoration: none;
    grid-column: 1/2;
    }
    
    /* Change color on hover */
    .topnav a:hover {
    background-color: #f2f2f2;
    color: black;
    }
    
    /* Style the content */
    .content {
    padding: 10px;
    position: relative;
    min-height: 100%;
    }
    
    .topnav h4 {
        float: right;
        margin-top: 23px;
        margin-right: 20px;
        margin-bottom: 10px;
        font-family: "arial", sans-serif;
        color: white;
        grid-column: 2/3;
    }
    
    </style>
</head>
<?php
    session_start();
    if(!$_SESSION['username']) {
        header("location:login.php");
    }
?>
<body>

<div class="topnav">
    <a href="../chef"> HOME </a>
    <a href="logout.php">LOG OUT</a>
    <h4> CHEF <?php echo $_SESSION['username']; ?> </h4>
</div>
<script>
</script>
</body>
</html>