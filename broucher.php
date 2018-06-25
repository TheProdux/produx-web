<?php
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$interest = $_POST['interest'];
$comment = $_POST['comment'];

if (!empty($username) || !empty($email) || !empty($phone) || !empty($company) ||
!empty($interest) || !empty($comment)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "test1";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From register Where email = ? Limit 1";
     $INSERT = "INSERT Into register (username, email, phone, company, interest, comment) values(?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssisss", $username, $email, $phone, $company, $interest, $comment);
      $stmt->execute();
      echo "New record inserted sucessfully";
      echo '<a href="broucher.pdf"><input type="button" value="download" id="down"></a>';
     } else {
      echo "Someone already register using this email";
      echo "<form class='popup1'>
      <h2>Someone already register using this email</h2>
      </form>";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>
<style>
        #down{
            width:190px;
        height:40px;
        margin-left:15px;
        margin-top:20px;
        background: steelblue;
        border:2px solid #08c;
        border-radius:5px;
        color:#fff;
        }
        #popup1{
        width:300px;
        background:#ccc;
        margin:0 auto;
    }
        </style>
