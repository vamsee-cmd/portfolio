<?php
 require_once './includes/header.php';
?>
<img src="./images/vams.png" class="rounded float-end" alt="My photo" height="500">
<h1 class="display-1">Vamshikrishna<br/>Embadi</h1>
<p>A computer science student.</p>
<button type="button" class="btn btn-outline-primary">Know my work</button>
<br/><br/><br/><br/>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   
<div class="wrapper" data-aos="fade-up">
  <ul>
    <li class="facebook"><a href="https://www.linkedin.com/in/vamshi-embadi/" target="_blank"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a></li>
    <li class="twitter"><a href="https://github.com/vamsee-cmd" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
    <li class="instagram"><a href="https://github.com/vamsee-cmd" target="_blank"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a></li>
    <li class="whatsapp"><a href="https://wa.me/9989962024" target="_blank"><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></a></li>
  </ul>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/>
</div>
</font>
</div>
<div class="container" id="contact">
    <br/><br/>
    <h1 align="center">Contact</h1>
    <br/>
    <div class="row card-deck" >
            <div class="col-lg-6 mb-4">
                <div class="card" data-aos="fade-right">
                    <img class="card-img-top" src="./images/resume.svg" height="100" alt="resume icon">
  
                    <div class="card-body">
                        <h5 class="card-title">Resume</h5>
                        <p class="card-text">
                           Download my resume.
                        </p>
  
                        <a href="./Resume.pdf" class="btn btn-outline-primary btn-sm">
                            Download
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card" data-aos="fade-left">
                    <img class="card-img-top" height="100" src="./images/forms.svg" alt="form icon">
  
                    <div class="card-body">
                        <h5 class="card-title">Fill form</h5>
                        <p class="card-text">
                            Fill in your details. I will typically getback to you within a day.
                        </p>
                        <a class="btn btn-outline-primary btn-sm" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    fill form
  </a>
                    </div>
                </div>
            </div>
        </div>
</div>
<br/><br/>
<div class="container collapse" id="collapseExample">
<div class="card card-body">
<form method="post" action="./db/conn.php">
  <div class="mb-3" id="form">
    <label for="Name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
  <div class="mb-3">
    <label for="Mobilenumber" class="form-label">Mobile number</label>
    <input type="text" name="mobile" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>

<div style="background-color:#7023d6; color:white;" id="Myskills">
<h1 align="center"><br/>My skills</h1>
<div class="box">
<div><img src="./images/java.png" />
</div>

<div>
<img src="./images/c.jpg" />
</div>
      
<div>
<img src="./images/cpp.svg" />
</div>
<div><img src="./images/html5.svg" />
</div>
</div>

<div class="box">
<div>
<img src="./images/.net.png" />
</div>
      
<div>
<img src="./images/python.png" />
</div>
<div>
<img src="./images/bootstrap.png" />
</div><div>
<img src="./images/php.svg" />
</div>
</div>
</div>
<?php
 require_once './includes/footer.php';
?>