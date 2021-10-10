<html>
    <head><title>Successfully inserted details</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
    <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <?php
$servername = "remotemysql.com";
$username = "WK1eggxcgK";
$password = "Q7gkaeCv2k";
$dbname = "WK1eggxcgK";

// Create connection
$conn = new mysqli($servername,
	$username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$sqlquery = "INSERT INTO `portfolio` (`name`, `email`, `mobile`, `sno`) VALUES ('$name', '$email', '$mobile', NULL)";
if ($conn->query($sqlquery) === TRUE) {
    echo "<h1>Success</h1> 
    <p>I received your details<br/> I'll be in touch shortly!</p>";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
</div>
</body>
</html>