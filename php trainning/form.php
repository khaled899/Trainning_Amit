<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <!-- form for user -->
    <!-- <form method="GET" action="handle.php">
        <label for="">username</label>
        <input type="text" placeholder="username" name="username">
        <br><br>
        <input type="submit" name="submit" value="send data" >
    </form> -->





    <!-- form for math things
    <form action="handle.php" method="get">
    <label for="">Nubmer1</label>
<input type="number" name="num1" placeholder="num1">
<label for="">Nubmer2</label>
<input type="number" name="num2" placeholder="num2">
<input type="submit" value="submit" name="submit">
    </form> -->






<!-- 
    <form action="handle.php" method="POST">
        <label for="">username</label>
        <input type="text" name="username">
        <input type="submit" name="submit">
    </form> -->


<?php include "config.php"?>

<?php
if($_SERVER["REQUEST_METHOD"]== "POST"){
    echo $_POST['useremail'];
    echo $_POST['password'];
}else{
}


?>

    <div class="container">
    <form method="post" action="form.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="useremail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>








</body>

</html>