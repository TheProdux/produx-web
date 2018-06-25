<!Doctype html>
<html>
    <head>
        <title>LogIn</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
<div class="col-md-12 col-sm-12 contain" >
    <form action="" method="post">
<header>
    <img src="logo.png">
</header><br/>
<div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" id="Password" placeholder="Password" name="pass">
  </div>
  <button  class="btn btn-success btn-lg"  name="submit-btn" type="submit">Submit</button>
  <br/>
</form>
</div>

    </body>
</html>
<style>
    body{
        margin:0 auto;
        width:500px;
    }
    .contain{
        margin-top:45%; 
        background:rgb(185, 185, 185);
        height:320px;
        color:#08c;
        font-size:20px;
        font-weight:bold;
    }
    img{
        background: rgb(185, 185, 185);
    }
    header{
        margin-top:8%;
        margin-left:25%;
    }
    button{
        float:right;
    }
    @media (max-width: 700px) {
    body {
        width: 300px;;
        margin-top: 0;
    }
    .contain{
        margin-top:20%; 
        background:rgb(185, 185, 185);
        color:#08c;
        font-size:20px;
        font-weight:bold;
    }
}
</style>
<script>
    


</script>
<?php

if(isset($_POST['submit-btn'])){ 
    $pass = $_POST['pass'];
    if($pass == 123){
        header("Location:table.php");
        exit();
    }else{ ?>

   
        <script>
   alert("Incorrect Password..!");
   
</script>   
    <?php }
}
 ?>
