<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        input[type=text], select
        {
            width: 100%;
            padding: 10px 20px;
            margin: 8px 0px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        div
        {
            margin-top: 30px;
            background-color:lightgray;
        }
       .button
       {
           width: 100%;
           background-color:forestgreen;
           color:white;
           padding: 10px 20px;
           margin:20px 0px;
           border: 1px solid #ccc;
           border:none;
       }
      .button:hover 
      {
          background-color: green;
      }
      label
      {
          font-size: 20px;
      }
    </style>
</head>

<body>
    <div class="container w3-card-4">
        <h1>Cộng hai số</h1>
        <form action="sum.php" method="GET">
            <div class="form-group">
                <label for="number1">Input number 1 </label><br>
                <input class="w3-round-large" type="text" id="number1" name="number1" placeholder="Input number 1">
            </div>
            <div class="form-group">
                <label for="number2">Input number 2 </label><br>
                <input  class="w3-round-large" type="text" id="number2" name="number2" placeholder="Input number 2"><br><br>
                <button class="button w3-round-large" type="submit" name="submit" value="submit">Submit</button>
    </div>

        </form>
    </div>
</body>

</html>