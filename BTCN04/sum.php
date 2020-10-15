<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        h1 {
            font-size: 40px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="w3-panel w3-leftbar w3-rightbar w3-light-gray ">
            <h1>Kết quả là:
                <?php
                function Sum($number1, $number2)
                {

                    return $number1 + $number2;
                }

                $number1 = $_GET["number1"];
                $number2 = $_GET["number2"];
                echo Sum($number1, $number2);

                ?>
            </h1>
        </div>

    </div>
</body>

</html>