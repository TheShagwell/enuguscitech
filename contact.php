<?php require_once './inc/header.php'; ?>
<main>
    <!-- breadcrumb area start -->
    <div class="tp-page-title-area pt-180 pb-185 position-relative fix" data-background="assets/img/slider/GovenorUgwanyi.png" style="background-image: url('assets/img/slider/GovenorUgwanyi.png) width: max-content;">
        <div class="tp-custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-page-title z-index">
                        <h2 class="breadcrumb-title text-light">Free <span>Contact</span></h2>
                        <div class="breadcrumb-menu">
                            <nav class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><a href="index.html" style="color: #f7f7f7;">Home</a>
                                    </li>
                                    <li class="trail-item trail-end"><span style="color: #f7f7f7;">Contact us</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- map area start here -->
    <div class="tp-map-area pt-120 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1014801.997324731!2d6.821661833701839!3d6.512786011637447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105b662586cf0979%3A0x27595621a4034717!2sEnugu!5e0!3m2!1sen!2sng!4v1649253404538!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- map area end here -->

    <!-- contact area start here -->
    <section class="tp-contact-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="section-title-wrapper-two mb-50 wow fadeInUp" data-wow-delay=".2s">
                        <h5 class="tp-section-subtitle common-yellow-shape mb-20 heading-color-black">Contact Office</h5>
                        <h2 class="tp-section-title heading-color-black">If you Have Any Query, Don’t Hesitate <br>Contact with us </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="row custom-mar-20">
                        <div class="col-lg-12 col-md-4 col-sm-6 custom-pad-20">
                            <div class="tp-contact-info mb-40 wow fadeInUp" data-wow-delay=".4s">
                                <div class="tp-contact-info-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="tp-contact-info-text">
                                    <h4 class="tp-contact-info-title mb-15">Address</h4>
                                    <p>Ogui Road <br>Enugu, Nigeria.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4 col-sm-6 custom-pad-20">
                            <div class="tp-contact-info mb-40 wow fadeInUp" data-wow-delay=".6s">
                                <div class="tp-contact-info-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="tp-contact-info-text">
                                    <h4 class="tp-contact-info-title mb-15">Phone</h4>
                                    <a href="tel:333888200-55">333888200-55</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4 col-sm-6 custom-pad-20">
                            <div class="tp-contact-info mb-40 wow fadeInUp" data-wow-delay=".8s">
                                <div class="tp-contact-info-icon">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                                <div class="tp-contact-info-text">
                                    <h4 class="tp-contact-info-title mb-15">Email</h4>
                                    <a href="mailto:info@themepure.com">info@enugu.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form action="" id="contact" method="post">
                    <div class="tp-contact-form">
                        <div class="row custom-mar-20">
                            <div class="col-md-6 custom-pad-20">
                                <div class="tp-contact-form-field mb-20">
                                    <input required type="text" id="fullname" name="fullname" placeholder="Full name">
                                </div>
                            </div>
                            <div class="col-md-6 custom-pad-20">
                                <div class="tp-contact-form-field mb-20">
                                    <input required type="email" id="email" name="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-md-6 custom-pad-20">
                                <div class="tp-contact-form-field mb-20">
                                    <input required type="text" id="phone" name="phone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6 custom-pad-20">
                            <div class="tp-contact-form-field mb-20">
                                    <input required type="text" name="subject" id="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12 custom-pad-20">
                                <div class="tp-contact-form-field mb-20">
                                    <textarea required name="message" id="message" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 custom-pad-20">
                                <div class="tp-contact-form-field">
                                    <button type="submit" class="theme-btn"><i class="flaticon-enter"></i> Send Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- contact area end here -->

    <script>
        document.getElementById('contact').addEventListener('submit', (e) => {
            e.preventDefault()
            
            const form = new FormData(e.currentTarget)
            form.append('submit', '')
            
            fetch('superadmin/api/add.php?type=contact', {
                method: 'POST',
                body: form
            }).then(e => e.text()).then(e => {
                if (e == true) {
                    alert('Your message have been delivered successfully!')
                    document.getElementById('contact').reset()
                } else {
                    alert('Failed to deliver message!')
                }
            })
        })
    </script>


</main>


<?php require_once './inc/footer.php'; ?>