<?php require APPROOT . '/views/inc/header.php';?>
<?php require APPROOT . '/views/inc/unavbar.php';?>
<style>
.cd {
    border: 2px solid #9A8A78;
    border-radius: 0px;
    padding: 50px;
    padding-top: 7%;
    padding-bottom: 7%;
}

a {
    color: white;
    text-decoration: none;
}

a:hover {
    color: #928C59;
}

h1 {
    color: #3C8A5B;
    text-align: center;
    margin-top: 30px;
    margin-bottom: 20px;
    font-weight: 400;
}

.st {

    margin-top: 5%;
    color: #928C59;

}

hr{
    color: #928C59;
 
}
</style>

<section>
    <div class="container">
        <h1>Our Project</h1>
        <div class="row">
            <div class="col-sm-3 cd">
                <a href="#neha">
                    <h2>Neha Kumari Project</h2>
                </a>
            </div>
            <div class="col"></div>
            <div class="col-sm-3 cd">
                <a href="#pragya">
                    <h2>Pragya Singh Project</h2>
                </a>
            </div>
            <div class="col"></div>
            <div class="col-sm-3 cd">
                <a href="#menka">
                    <h2>Menka Murmu Project</h2>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="neha">
    <div class="container pb-3">
        <div class="row">
            <h2 class="st">Neha Kumari Project</h2>
            <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or <br>
                double click me to add your own content and make changes to the font. </p>

            <div class="col-sm-5 p-2">
                <img src="<?php echo URLROOT.'/img/25..jpg'?>" alt="">
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-5 p-2">
                <div class="row mb-3">
                    <img src="<?php echo URLROOT.'/img/17..jpg'?>" alt="">
                </div>
                <div class="row">
                    <div class="col-sm-10">
                        <div class="card">
                            <img src="<?php echo URLROOT.'/img/10..jpg'?>" height="200px" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-sm-8">
                <div class="card">
                    <img src="<?php echo URLROOT.'/img/23..jpg'?>" height="400px" alt="">
                </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-3">
                <div class="card mt-4">
                    <img src="<?php echo URLROOT.'/img/22..jpg'?>" alt="">
                </div>

            </div>
        </div>
    </div>
</section>

<hr style="height:3px">
<section id="pragya">
    <div class="container">
        <div class="row">
            <h2 class="st">Pragya Singh Project</h2>
            <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or <br>
                double click me to add your own content and make changes to the font. </p>

            <div class="col-sm-6 p-2 ">
                <div class="card">
                <img src="<?php echo URLROOT.'/img/20..png'?>" alt="">
                </div>
               <div class="row mt-3">
                <div class="col-sm-6">
                    <div class="card">
                    <img src="<?php echo URLROOT.'/img/15..jpg'?>" alt="">
                    </div>
                </div>

                <div class="col-sm-6 mt-4">
                    <div class="card">
                    <img src="<?php echo URLROOT.'/img/24..jpg'?>" alt="">  
                    </div>
                </div>
               </div>
            </div>
            <div class="col-sm-6 p-2 ">
                <div class="card">
                <img src="<?php echo URLROOT.'/img/16..jpg'?>" alt="">
                </div>
            </div>
            
          
        </div>
        
    </div>
</section>
<hr style="height:3px">

<section id="menka">
    <div class="container mb-5">
        <div class="row">
            <h2 class="st">Menka Murmu Project</h2>
            <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or <br>
                double click me to add your own content and make changes to the font. </p>

            <div class="col-sm-6 p-2">
                <div class="card">
                <img src="<?php echo URLROOT.'/img/12..jpg'?>" alt="">
                </div>
                <div class="row mt-4">
                    <div class="col-sm-12">
                        <div class="card">
                        <img src="<?php echo URLROOT.'/img/13..jpg'?>" alt="">
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-sm-6 p-2">
                <div class="card">
                <img src="<?php echo URLROOT.'/img/18..jpg'?>" alt="">

                </div>
                <div class="row mt-4">
                    <div class="col-sm-12">
                        <div class="card">
                        <img src="<?php echo URLROOT.'/img/19..jpg'?>" alt="">
                        </div>
                    </div>
                </div>
           
            </div>
            
        </div>
        
    </div>
</section>

<?php require APPROOT . '/views/inc/footer.php';?>