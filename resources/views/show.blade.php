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
            margin: 0 auto;
            padding: 0px 20px 20px;
            background: papayawhip;
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
    <h2>Product discount calculator</h2>
    <label>Product description:</label>
    <span>{{$productDescription}}</span> <br>
    <label>List price: </label>
    <span>{{$listPrice}}</span> <br>
    <label>Discount percent: </label>
    <span>{{$discountPercent}}</span> <br>
    <label>Discount: </label>
    <span>{{$discount}}</span> <br>
    <label>Discount price: </label>
    <span>{{$discountPrice}}</span> <br>
</div>
</body>

</html>