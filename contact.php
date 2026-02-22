<?php include("include/header.php"); ?>
<?php include("include/navigation.php"); ?>
        <!-- main-area -->
        <main class="fix">
            <!-- breadcrumb-area -->
            <section class="breadcrumb__area breadcrumb__bg">
                <div class="bg-img position-absolute top-0 bottom-0 start-0 w-100 h-100" data-background="assets/img/bg/breadcrumb_bg.jpg"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="breadcrumb__content">
                                <h2 class="title">Contact  Us</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb__shape">
                    <img src="assets/img/images/breadcrumb_shape01.png" alt="Apexa" class="dark-opacity" />
                    <img src="assets/img/images/breadcrumb_shape02.png" alt="Apexa" class="rightToLeft dark-opacity" />
                    <img src="assets/img/images/breadcrumb_shape03.png" alt="Apexa" class="dark-opacity" />
                    <img src="assets/img/images/breadcrumb_shape04.png" alt="Apexa" class="dark-opacity" />
                    <img src="assets/img/images/breadcrumb_shape05.png" alt="Apexa" class="alltuchtopdown dark-opacity" />
                </div>
            </section>
            <!-- breadcrumb-area-end -->
            <!-- contact-area -->
            <section class="contact__area">
                <div class="container">

                    <div class="row align-items-center mb-50">
                        <div class="col-lg-5">
                            <div class="contact__content">
                                <div class="section-title mb-35">
                                    <h2 class="title">How can we help you?</h2>
                                    <p>We deliver end-to-end business solutions that unify technology, processes, and people—helping modern enterprises operate efficiently, adapt quickly, and scale with confidence.</p>
                                </div>
                                <div class="contact__info">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-pin"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">Address</h4>
                                                <p>F-18-A, Prathna Pletina, Radhanpur Road, Panchot, Mehsana Railway Colony.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-phone-call"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">Phone</h4>
                                                <a href="tel:(079) 49192387">(079) 49192387</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-mail"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">E-mail</h4>
                                                <a href="mailto:info@histar.co.in">info@histar.co.in</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="contact__form-wrap">
                                <h2 class="title">Give Us a Message</h2>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <form id="contact-form" action="assets/mail.php" method="POST">
                                    <div class="form-grp">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-grp">
                                                <input type="text" name="name" placeholder="Name" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-grp">
                                                <input type="email" name="email" placeholder="Email" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-grp">
                                                <input type="number" name="phone" placeholder="Phone" />
                                            </div>
                                        </div>
                                    </div>
<!--                                    <div class="form-grp checkbox-grp">-->
<!--                                        <input type="checkbox" name="checkbox" id="checkbox" />-->
<!--                                        <label for="checkbox">Save my name, email, and website in this browser for the next time I comment.</label>-->
<!--                                    </div>-->
                                    <button type="submit" class="btn">Submit</button>
                                </form>
                                <p class="ajax-response mb-0"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.7911883493466!2d72.35955857592454!3d23.61182059408137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c43004f061ce5%3A0xd0cdf965207294e3!2sPrarthna%20Pletina!5e0!3m2!1sen!2sin!4v1771768439639!5m2!1sen!2sin" allowfullscreen loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->
            <!-- call-back-area -->
            <?php include("include/request_a_call.php"); ?>
            <!-- call-back-area-end -->
        </main>
        <!-- main-area-end -->

<?php include("include/footer.php"); ?>