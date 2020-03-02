<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Break Text</title>
</head>
<body>
<div class="se1">
    <div class="title">
        <h1>TEXT BREAK</h1>
        <h3>ENGLISH & ARABIC</h3>
    </div>
    <div class="container">
        <form method="POST" action="backend.php">
            <textarea name="txt_cont" id="txtcont" cols="30" rows="10" placeholder="Enter text to break"></textarea>
            <div class="cont">
                    <label for="type">Language Output</label>
                    <select name="lang" id="">
                        <option value="eng" selected>English</option>
                        <option value="arb">Arabic</option>
                    </select>
            </div>
            <input type="submit" value="Download"> 
        </form>
        <div class="clear">CLEAR</div>
        <div id="read">Read me</div>
    </div>
</div>
<?php
require'ads.php';
?>


<script src="js/script.js"></script>
</body>
</html>