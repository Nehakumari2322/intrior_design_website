<form action="<?php echo URLROOT ;?>interior/contactform" method="post" style="margin-bottom:0">
    <section id="contact">
        <div class="container" style="color:#9A8A78">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <h1 style="text-align:left">CONTACT US</h1>
                        <div class="row mb-3">
                            <div class="col-sm-1">
                                <img src="<?php echo URLROOT.'/img/address.png'?>" height="40px" alt="">
                            </div>
                            <div class="col-sm-11 mt-3">
                                <p>Birsa chowk,Ranchi
                                    834002 </p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-1">
                                <img src="<?php echo URLROOT.'/img/email.png'?>" height="40px" alt="">
                            </div>
                            <div class="col-sm-11 mt-3">
                                <p>house.123@gmail.com </p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-1">
                                <img src="<?php echo URLROOT.'/img/contact.png'?>" height="40px" alt="">
                            </div>
                            <div class="col-sm-11 mt-3">
                                <p>123-456-789 </p>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-sm-6">
                <div class="card">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                            <div class="col">
                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="first_name">First name</label>
                                    <input type="text" id="first_name" name="first_name" class="form-control"
                                        style="background:none;border:none;border-bottom:2px solid #9A8A78;color:white" />

                                </div>
                            </div>
                            <div class="col">
                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="last_name">Last name</label>
                                    <input type="text" id="last_name" name="last_name" class="form-control"
                                        style="background:none;border:none;border-bottom:2px solid #9A8A78;color:white" />

                                </div>
                            </div>
                        </div>

                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="email">Email address</label>
                            <input type="email" id="email" name="email" class="form-control"
                                style="background:none;border:none;border-bottom:2px solid #9A8A78;color:white" />

                        </div>

                        <!-- Password input -->
                        <div class="row mb-4">
                            <div class="col">
                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="phone">Phone number</label>
                                    <input type="number" id="phone" name="phone" class="form-control"
                                        style="background:none;border:none;border-bottom:2px solid #9A8A78;color:white" />

                                </div>
                            </div>
                            <div class="col">
                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="address">Address</label>
                                    <input type="text" id="address" name="address" class="form-control"
                                        style="background:none;border:none;border-bottom:2px solid #9A8A78;color:white" />

                                </div>
                            </div>
                        </div>


                        <!-- Submit button -->
                        <button class="btn btn1 mb-4" type="submit" name="contact" id="contact">Submit</button>



                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
<!-- Footer -->
<footer class=" text-lg-start  text-muted mb-3">
    <!-- Section: Social media -->
    <hr style="color:white">
    <div class="container-fluid text-light">
        <div class="row">
            <div class="col-sm-3">
                © 2024 All rights are reserved
            </div>

            <div class="col-sm-6"></div>
            <div class="col-sm-3">
                Developed by: Neha Kumari
            </div>
        </div>
    </div>


</footer>
<!-- Footer -->
<!-- Footer -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>