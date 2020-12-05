<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/img.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="backimg">
    <div class="container">
        <div class="row">
            <div class="col colsm-12 col-md-12 col-lg-12 col-xl-12">
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <ul class="navbar-nav">
                      <li class="nav-item active">
                        <a class="nav-link" href="index.php">ADDITION</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="sub.php">SUBRACTION</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="mul.php">MULTIPLICATION</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="div.php">DIVSION</a>
                      </li>
                    </ul>
                    <form class="form-inline" action="/action_page.php">
                      <input class="form-control mr-sm-2" type="text" placeholder="Search">
                      <button class="btn btn-success" type="submit">Search</button>
                    </form>
                    <a class="navbar-brand" href="#">
                      <img src="image/k6.jpg" alt="" style="width:40px;">
                    </a>
            </div>
        </div>
      <div class="container">
        <div class="row">
            <div class="col colsm-12 col-md-12 col-lg-12 col-xl-12">
                <table class="table">
                   <tr>
                       <td>ENTER FIRST NUMBER</td>
                       <td><input type="text" class="form-control" id="num1"></td>
                   </tr>
                   <tr>
                       <td>ENTER SECOND NUMBER</td>
                       <td><input type="text" class="form-control" id="num2"></td>
                    </tr>
                      <tr>
                       <td> <Button class="btn btn-danger btn-lg" onclick="div()" >DIVIDE</Button></td>
                       <td input type="text" class="form-control" id="res"></td>
                    </tr>
                
                </table>
            </div>
        </div>
    </div>
    <script >
         function  div()
    {
        var getnum1=parseInt(document.getElementById("num1").value)
        var getnum2=parseInt(document.getElementById("num2").value)
        var result = getnum1/getnum2
        document.getElementById("res").innerHTML=result
    }


    </script>
</body>
</html>