<!DOCTYPE html>

<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1" />

<head>
  <title>Vamshi's portfolio</title>

  <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css"
    integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" />
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
    integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bad Script" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="assets/js/typing.js"></script>
  <script src="assets/js/counter.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-167569731-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());
    gtag("config", "UA-167569731-1");
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
  </script>
  <style>
  .success {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        .para {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
          align: center;
        }
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
</head>

<body style="background-image: url('assets/img/background.png')">
   <!-- Header -->
	<main class="page-content" aria-label="Content">
    <div class="wrapper">
			<div class="header">
				<img class="profile" src="assets/img/profile.png" style="  border-radius: 50%;">
      		<h1 class="profile-name">Vamshikrishna Embadi</h1>
          <h2 style="font-family: 'Bad Script', Sans-serif; font-size: 20px; color: dimgray; font-weight: bolder; text-decoration-style: wavy; margin-top: -20px"><span class="txt-rotate" data-period="1000" data-rotate='["Computer science student", "Software Engineer", "Web dev"]'></span></h2>
     	 		<a href="https://www.linkedin.com/in/vamshi-embadi/" target="_blank"><i class="fab fa-linkedin-in faicon"></i></a>
      		&nbsp;
      		<a href="https://github.com/vamsee-cmd" target="_blank"><i class="fab fa-github faicon"></i></a>
      		&nbsp;
      		<a id="email" target="_blank"><i class="fas fa-envelope faicon"></i></a>

      		<script type="text/javascript">
      			const vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
      			let a = document.getElementById('email');
        			if(vw <= 800) {
        				a.href = "mailto:vamshi.embadi1234@gmail.com"
        			}
	        </script>

	        <div class="pure-menu pure-menu-horizontal pure-menu-scrollable">
            <ul class="pure-menu-list">
              <li class="pure-menu-item"><a href="index.php" class="pure-menu-link">Home</a></li>
          		<li class="pure-menu-item"><a href="projects.html" class="pure-menu-link">Projects</a></li>
                <li class="pure-menu-item"><a href="works.html" class="pure-menu-link">Skills</a></li>
          		<li class="pure-menu-item  header-active"><a href="contact.html" class="pure-menu-link">contact</a></li>
        		</ul>
      		</div>
    		</div>
    	</div>
  </main>
  <!-- Page content -->
  <div class="content">
  </div>
  <center>
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
$message=$_POST['message'];
$sqlquery = "INSERT INTO `portfolio` (`name`, `email`, `mobile`, `message`) VALUES ('$name', '$email', '$mobile', '$message')";
if ($conn->query($sqlquery) === TRUE) {
    echo "<h1 class=\"success\">Success</h1> 
    <p class=\"para\" align=\"center\">I received your details<br/> I'll be in touch shortly!</p>";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
</center>
</div>
  </div>
</body>

</html>