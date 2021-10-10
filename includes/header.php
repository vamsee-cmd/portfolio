<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
   

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
    </style>
</head>
<body>
    <div class="bg-dark">
    <nav class="navbar navbar-dark  bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">
    Vamshi's portfolio
    </a>
</nav>
<br/>
<div class="container">
    <font face="Times new roman" size="4" color="white">