<?php require APPROOT . '/views/inc/header.php';?>
<?php require APPROOT . '/views/inc/unavbar.php';?>

<style>
h1 {
    text-align: left;
    color: #3C8A5B;
    font-family: 'Inter', sans-serif;
}



.cd {
    border: 2px solid #9A8A78;
    border-radius: 0px;
    padding: 50px;
}

.cc {
    border: 2px solid #9A8A78;
    border-radius: 0px;

}
</style>
<div class="container mb-4">
    <div class="row">
        <h1 class="text-center mb-3 mt-3">Our Services</h1>
        <div class="col-sm-4 mb-3">
            <div class="card cd h-100">
                <h1>Complete Remodeling</h1>
                <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or
                    double click me to add your own content and make changes to the font. </p>
            </div>
        </div>
        <div class="col-sm-4  mb-3">
            <div class="card cc h-100">
                <img src="<?php echo URLROOT.'/img/14..jpg'?>" height="100%" alt="">
            </div>
        </div>
        <div class="col-sm-4  mb-3">
            <div class="card cd h-100">
                <h1>Kitchen Remodeling</h1>
                <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or
                    double click me to add your own content and make changes to the font. </p>
            </div>
        </div>

        <div class="col-sm-4  mb-3 mt-3">
            <div class="card cd h-100">
                <h1>Complete Remodeling</h1>
                <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or
                    double click me to add your own content and make changes to the font. </p>
            </div>
        </div>

        <div class="col-sm-4  mb-3 mt-3">
            <div class="card cd h-100">
                <h1>Kitchen Remodeling</h1>
                <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or
                    double click me to add your own content and make changes to the font. </p>
            </div>
        </div>

        <div class="col-sm-4  mb-3 mt-3">
            <div class="card cc h-100">
                <img src="<?php echo URLROOT.'/img/21..jpg'?>" height="100%" alt="">
            </div>
        </div>
        <h1 style="margin-top:5%" class="text-center">Our Expertise</h1>
        <div class="col-sm-3  mb-3 mt-4">
            <div class="card cd h-100">
                <h2>Pre-Construction</h2>
                <ul>
                    <li>Design-Build</li>
                    <li>Scheduling</li>
                    <li>Estimating & Budgeting</li>
                </ul>
            </div>
        </div>
        <div class="col"></div>
        <div class="col-sm-3  mb-3 mt-4">
            <div class="card cd h-100">
                <h2>Construction</h2>
                <ul>
                    <li>Quality Control</li>
                    <li>Safety Management</li>
                    <li>Subcontractor Management</li>
                </ul>
            </div>
        </div>
        <div class="col"></div>
        <div class="col-sm-3  mb-3 mt-4">
            <div class="card cd h-100">
                <h2>Post-Construction</h2>
                <ul>
                    <li>Certificate of Occupancy</li>
                    <li>As-built documentation</li>
                    <li>Warranty</li>
                </ul>
            </div>
        </div>
    </div>

</div>
<?php require APPROOT . '/views/inc/footer.php';?>