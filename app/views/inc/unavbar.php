
<form action="<?php echo URLROOT ;?>soaps/usernavform" method="post" style="margin-bottom:0">

<style>
.btn2 {
        text-decoration: none;
       
        font-family: "Inter", sans-serif;
        font-size: 20px;
}
</style>
<nav class="navbar navbar-expand-lg navbar-light " style="padding-top:0;padding-bottom:0">
  <div class="container-fluid">
    <a class="navbar-brand" ><img src="<?php echo URLROOT.'/img/logoo.png'?>" height="80px" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item ">
          <button class="nav-link active text-light btn btn2" aria-current="page"  name="home" id="home">Home</button>
        </li>
        <li class="nav-item ">
          <button class="nav-link btn btn2  text-light" name="services" id="services" >Services</button>
        </li>
        <li class="nav-item ">
          <button class="nav-link btn btn2 text-light" name="project" id="project" >Project</button>
        </li>
     
        <li class="nav-item ">
          <a class="btn2 text-light nav-link" href="#contact" >Contact</a>
        </li>
       
        
      </ul>
      
    </div>
  </div>
</nav>

</form> 
