<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">    
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="../css/style.css">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vamshi's portfolio</title>
    <style>
   
   body{
  padding: 0;
  margin: 0;
}
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
.box {
  width: 100%;
  min-height: 40vh;
  background: #7023d6;
  display: flex;
  justify-content: center;
  align-items: center;
  pointer-events: none;
  flex-direction: auto;
  user-select:none;
}
.box div {
  width: 15vw;
  background: #fff;
  height: 15vw;
  margin: 0 20px;
  cursor: pointer;
  pointer-events: all;
  box-shadow: 5px 5px 0px 0 #3a1372;
  overflow: hidden;
  border-radius: 10px;
  object-fit:cover;
}
.box div img {
  width: 200px;
  height: auto;
  transition: transform 1s;
}

.box div:hover {
  filter: grayscale(0);
}
.box div:hover img {
  transform: scale(1.2);
}
.box:hover div:not(:hover) {
  filter: grayscale(1) blur(1px);
}
@media screen and (max-width: 1080px) {
  .box {
    flex-direction: column;
  }
  .box div {
    margin: 20px 0;
    height: 70vw;
    width: 70vw;
  }
}
/* Style the Un-order list by setting its list-style to none */
.wrapper ul {
  list-style: none;
}

/* Style the list items inside the UL list, by setting its width, height and line-height 
  and float them to left and set its border and border-radius.
 */
.wrapper ul li {
  width: 75px;
  height: 75px;
  line-height: 75px;
  margin: 0 10px;
  text-align: center;
  cursor: pointer;
  border-radius: 50%;
  border: 5px solid #D8E2DC;
  float: left;
  transition: all 0.5s ease;
}

/* Style the icons by setting its color and margin-top value to 20px 
to align it properly */
.wrapper ul li .fa {
  color: #D8E2DC;
  margin-top: 20px;
  transition: all 0.5s ease;
}

/* Now target the specific li classes for styling and use box-shadow effect to border and text-shadow effect
  to icons for glowing effect and use transition property for smooth transition effect. */
/*facebook*/
.wrapper ul li:hover.facebook {
  border: 5px solid #3b5998;
  box-shadow: 0 0 15px #3b5998;
  transition: all 0.5s ease;
}

.wrapper ul li:hover .fa-facebook {
  color: #3b5998;
  text-shadow: 0 0 15px #3b5998;
  transition: all 0.5s ease;
}

/*twitter*/
.wrapper ul li:hover.twitter {
  border: 5px solid #00aced;
  box-shadow: 0 0 15px #00aced;
  transition: all 0.5s ease;
}

.wrapper ul li:hover .fa-twitter {
  color: #00aced;
  text-shadow: 0 0 15px #00aced;
  transition: all 0.5s ease;
}

/* instagram */
.wrapper ul li:hover.instagram {
  border: 5px solid #bc2a8d;
  box-shadow: 0 0 15px #bc2a8d;
  transition: all 0.5s ease;
}

.wrapper ul li:hover .fa-instagram {
  color: #bc2a8d;
  text-shadow: 0 0 15px #bc2a8d;
  transition: all 0.5s ease;
}

/* google */
.wrapper ul li:hover.google {
  border: 5px solid #dd4b39;
  box-shadow: 0 0 15px #dd4b39;
  transition: all 0.5s ease;
}

.wrapper ul li:hover .fa-google {
  color: #dd4b39;
  text-shadow: 0 0 15px #dd4b39;
  transition: all 0.5s ease;
}

/* whatsapp */
.wrapper ul li:hover.whatsapp {
  border: 5px solid #4dc247;
  box-shadow: 0 0 15px #4dc247;
  transition: all 0.5s ease;
}

.wrapper ul li:hover .fa-whatsapp {
  color: #4dc247;
  text-shadow: 0 0 15px #4dc247;
  transition: all 0.5s ease;
}


/* media queries */

@media screen and (max-width: 640px){
  .wrapper {
      width: 350px;
  }
  .wrapper ul li{
      margin-top: 10px;
  }
  .wrapper ul li.google{
      margin-left: 60px;
  }
}


@media screen and (max-width: 340px){
  .wrapper {
      width: 150px;
  }
  .wrapper ul li{
      margin:15px;
  }
  .wrapper ul li.google{
      margin-left: 15px;
  }
}

.bgdrk{
  
  background-image: url("./images/bgrnd.jpg");
}
    </style>
</head>
<body>
    <div class="bgdrk bg-dark">
    <nav class="navbar navbar-dark  bg-dark" style="position:fixed; width:100%; z-index: 100; color:white;">
  <div class="container navbar-dark">
    <a class="navbar-brand" href="index.php">
    Vamshi's portfolio
    </a>
    <a class="nav-link" href="#contact">
    Contact
    </a><a class="nav-link" href="#Myskills">
    My skills
    </a>
    <a class="nav-link" href="#connect">
    Connect
    </a><a class="nav-link" href="#connect">
    Home
    </a>
</nav>
<br/>
<br/>
<br/>
<br/>
<div class="container">
    <font face="Times new roman" size="4" color="white">