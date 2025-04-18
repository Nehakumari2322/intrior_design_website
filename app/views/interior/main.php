<?php require APPROOT . '/views/inc/header.php';?>


<section>
<form action="<?php echo URLROOT ;?>interior/usernavform" method="post" style="margin-bottom:0">
    <div class="hero">
        <img src="<?php echo URLROOT.'/img/2..jpeg'?>" class="w-100 back-video" alt="">
        <nav>
            <div>
                <img src="<?php echo URLROOT.'/img/logoo.png'?>" alt="" height="100px">
            </div>
            <ul>
                <li><button class="btn btn2" name="home" id="home">Home</button></li>
                <li><button class="btn btn2" name="services" id="services">Services</button></li>
                <li><button class="btn btn2" name="project" id="project">Project</button></li>
                <li><a class="btn btn2" href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="content">
            <h1>Newel Residential Remodeling</h1>
            <p>Recreating Dream Homes That Last</p>
        </div>

    </div>
</form>
</section>

<form action="<?php echo URLROOT ;?>interior/main" method="post" style="margin-bottom:0">
<section>
    <div class="container p-5">
        <div class="row " style="border:1px solid yellow;">
            <div class="col-sm-6" style="padding-left:0;padding-right:0">
                <div class="card" style="border-right:2px solid yellow">
                    <img src="<?php echo URLROOT.'/img/4.jpg'?>" alt="">
                </div>

            </div>
            <div class="col-sm-6 ">
                <div class="card  text-light mt-5 mb-4">
                    <h1 class="text-center mt-4">Our Services</h1>
                    <ul style="padding-left:150px;font-size:1.7rem">
                        <li>Complete Remodeling </li>
                        <li>Kitchen Remodeling</li>
                        <li>Bathroom Remodeling </li>
                        <li>Home Interior </li>
                        <li>Flooring</li>
                    </ul>
                    <button class="btn btn1 " type="submit" name="more_services" id="more_services">More Info</button>
                </div>
            </div>
        </div>
        <div class="row" style="border:1px solid yellow;">
            <div class="col-sm-3 p-5" style="border-right:2px solid yellow">
                <div class="card mgg">
                    <img src="<?php echo URLROOT.'/img/home.png'?>" alt="">
                    <p>Vast Experience</p>
                </div>
            </div>

            <div class="col-sm-3 p-5" style="border-right:2px solid yellow">
                <div class="card mgg">
                    <img src="<?php echo URLROOT.'/img/puzzle.png'?>" alt="">
                    <p>Professional Team</p>
                </div>
            </div>
            <div class="col-sm-3 p-5" style="border-right:2px solid yellow">
                <div class="card mgg">
                    <img src="<?php echo URLROOT.'/img/box.png'?>" alt="">
                    <p>High Finish</p>
                </div>
            </div>
            <div class="col-sm-3 p-5">
                <div class="card mgg">
                    <img src="<?php echo URLROOT.'/img/setting.png'?>" alt="">
                    <p>Sustainable & Accountable</p>
                </div>
            </div>

        </div>

        <div class="row" style="border:1px solid yellow;">
            <div class="col-sm-6">
                <div class="card text-center mt-5 pt-5">
                    <h1>About Us</h1>
                    <p class=" p-5" style="text-align: justify;text-justify: inter-word;">I'm a paragraph. Click here to
                        add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your
                        own content and make changes to the font. I’m a great place for you to tell a story and let your
                        users know a little more about you.</p>
                </div>
            </div>
            <div class="col-sm-6" style="padding-left:0;padding-right:0">
                <div class="card">
                    <img src="<?php echo URLROOT.'/img/3..png'?>" height="500px" alt="">
                </div>
            </div>
        </div>

    </div>
</section>


<section>
    <div class="container">
        <h1 class="text-center mt-4 mb-4">Recent Project</h1>
        <div class="row mb-5">
            <div class="col-4">
                <div class="card">
                    <img src="<?php echo URLROOT.'/img/1..jpeg'?>" height="330px" alt="">
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="<?php echo URLROOT.'/img/9..jpg'?>" alt="">
                </div>
            </div>
            <div class="col-5">
                <div class="card">
                    <img src="<?php echo URLROOT.'/img/8..jpg'?>" alt="">
                </div>
            </div>
            <div class="col-sm-5">
                <div class="card">
                    <img src="<?php echo URLROOT.'/img/7..jpg'?>" height="230px" alt="">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <img src="<?php echo URLROOT.'/img/6..jpg'?>" alt="">
                </div>
            </div>
        </div>

        <button class="btn btn1 mb-4" type="submit" name="project" id="project" >View All</button>

    </div>
</section>

<section class="pt-4 pb-4">
    <div class="container-fluid mt-3">
        <div class="row mb-4">
            <div class="col-sm-3"
                style="padding-right:0px;border:2px solid #9A8A78;padding-left:0px;margin-left:50px;background:#9A8A78;">
                <div class="card  w-100" style="height: 200px; text-align:center;border-radius:0px">
                    <div class="card-body text-light">
                        <h1 class="card-title pt-5 mt-5 ">Testimonials</h1>

                    </div>
                </div>
            </div>

            <div class="col-sm-8 m-1" style="border:1px solid yellow;padding-left:0px">
                <div class="card bg-transparent" style="border:none;">
                    <div class="card-body">
                        <!--carousal-card section 1-->
                        <!--carousal1-->
                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="6000">
                                    <div class="row">
                                        <div class="col-sm-4" style="border-right:1px solid yellow">

                                            <div class="card text-left  mb-3 w-100 "
                                                onclick="window.location='link.php'" style="height:200px;">
                                                <div class="card-body1 text-light" style="padding: 20px;">
                                                    <p>I'm a testimonial. Click to edit me and add text that says
                                                        something nice about you and your services. Let your customers
                                                        review you and tell their friends how great you are.”</p>
                                                    <h4 style="color: #3C8A5B;">Neha kumari</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4" style="border-right:1px solid yellow">

                                            <div class="card text-left  mb-3 w-100" onclick="window.location='link.php'"
                                                style="height: 200px;">
                                                <div class="card-body1 text-light" style="padding: 20px;">
                                                    <p>I'm a testimonial. Click to edit me and add text that says
                                                        something nice about you and your services. Let your customers
                                                        review you and tell their friends how great you are.”</p>
                                                    <h4 style="color: #3C8A5B;">menka kumari</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4" style="border-right:1px solid yellow">

                                            <div class="card text-left  mb-3 w-100" onclick="window.location='link.php'"
                                                style="height: 200px;">
                                                <div class="card-body1 text-light" style="padding: 20px;">
                                                    <p>I'm a testimonial. Click to edit me and add text that says
                                                        something nice about you and your services. Let your customers
                                                        review you and tell their friends how great you are.”</p>
                                                    <h4 style="color: #3C8A5B;">rohan kumar</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <div class="row">
                                        <div class="col-sm-4" style="border-right:1px solid yellow">

                                            <div class="card text-left  mb-3 w-100" onclick="window.location='link.php'"
                                                style="height: 200px;">
                                                <div class="card-body1 text-light" style="padding: 20px;">
                                                    <p>I'm a testimonial. Click to edit me and add text that says
                                                        something nice about you and your services. Let your customers
                                                        review you and tell their friends how great you are.”</p>
                                                    <h4 style="color: #3C8A5B;"> chhoti</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4" style="border-right:1px solid yellow">

                                            <div class="card text-left  mb-3 w-100" onclick="window.location='link.php'"
                                                style="height: 200px;">
                                                <div class="card-body1 text-light" style="padding: 20px;">
                                                    <p>I'm a testimonial. Click to edit me and add text that says
                                                        something nice about you and your services. Let your customers
                                                        review you and tell their friends how great you are.”</p>
                                                    <h4 style="color: #3C8A5B;"> pinku</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">

                                            <div class="card text-left  mb-3 w-100" onclick="window.location='link.php'"
                                                style="height: 200px;">
                                                <div class="card-body1 text-light" style="padding: 20px;">
                                                    <p>I'm a testimonial. Click to edit me and add text that says
                                                        something nice about you and your services. Let your customers
                                                        review you and tell their friends how great you are.”</p>
                                                    <h4 style="color: #3C8A5B;"> Musharraf</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--caraousal section 1 end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</form>

                        <?php if($data['message']){ ?>
                        <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                            <h6> <?php echo $data['message'];?></h6>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php } ?>
<?php require APPROOT . '/views/inc/footer.php';?>