<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 9/28/2018
 * Time: 1:57 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product discount calculator</title>

    <style type="text/css">
        body {
            font-family: Arial,sans-serif;
        }
        #content {
            width: 450px;
            height: 200px;
            margin: 0 auto;
            padding: 0px 20px 20px;
            background: lightblue;
            border: 1px dimgray solid;
        }
        h1 {
            color: darkblue;
        }
        #submit_button input{
            float: left;
            margin-bottom: .5em;
        }
        #data input {
            float: left;
            width: 15em;
            margin-bottom: .5em;
        }
        label {
            width: 10em;
            padding-right: 1em;
            float: left;
        }
        br {
            clear: left;
        }
    </style>
</head>
<body>
<div id="content">
    <h1>Product discount calculator</h1>
    <form method="post">
        @csrf
        <div id="data">
            <label>Product descripttion:</label>
            <input type="text" name="product_description"><br>
            <label>List price: </label>
            <input type="text" name="list_price" placeholder="$"><br>
            <label>Discount percent</label>
            <input type="text" name="discount_percent" placeholder="%"><br>
        </div>
        <div id="submit_button">
            <label>&nbsp;</label>
            <input type="submit" value="Calculator discount">
        </div>
</div>
</form>
</body>

</html>