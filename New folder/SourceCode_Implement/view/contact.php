<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NÔNG SẢN SẠCH</title>
    <link rel="shortcut icon" type="image/png" href="./asset/img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./asset/css/all.min.css">
    <link rel="stylesheet" href="./asset/css/owl.carousel.css">
    <link rel="stylesheet" href="./asset/css/magnific-popup.css">
    <link rel="stylesheet" href="./asset/css/animate.css">
    <link rel="stylesheet" href="./asset/css/meanmenu.min.css">
    <link rel="stylesheet" href="./asset/css/main.css">
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="./asset/css/responsive.css">
    <link rel="stylesheet" href="./asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
</head>

<body>
    <?php
    require_once("./view/header.php");
    ?>
    <!-- search area -->
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Search For:</h3>
                            <input type="text" placeholder="Keywords">
                            <button type="submit">Search <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search arewa -->

    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <video autoplay loop muted plays-inline class="back-video">
            <source src="./asset/video/thumb_contact.mp4">
        </video>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Get 24/7 Support</p>
                        <h1>Contact us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- contact form -->
    <div class="contact-from-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="form-title">
                        <h2>Have you any question?</h2>
                        <p>If you have any question, will sent it for us, we will response as soon as we can to support you</p>
                    </div>
                    <!-- <div id="form_status"></div> -->
                    <div class="contact-form">
                        <form id="submit" action="#" onsubmit="reset();">
                            <p>
                                <input type="text" placeholder="Name" name="name" id="name">
                                <input type="email" placeholder="Email" name="email" id="email">
                            </p>
                            <p>
                                <input type="tel" placeholder="Phone" name="phone" id="phone">
                                <input type="text" placeholder="Subject" name="subject" id="subject">
                            </p>
                            <p>
                                <input type="text" placeholder="Address" name="subject" id="address">
                                <input class="form-control" type="datetime-local" placeholder="Select Datetime" id="datetime">
                            </p>
                            <p><textarea name="message" id="message" cols="30" rows="10" placeholder="How can we help you?"></textarea></p>
                            <!-- <br> -->
                            <p>
                                <input type="hidden" name="token" value="FsWga4&@f6aw" />
                                <script>
                                    // require("flatpickr/dist/themes/material_orange.css");
                                    config = {
                                        enableTime: true,
                                        dateFormat: "Y-m-d H:i",
                                        altInput: true,
                                        altFormat: "F j, Y (h:S K)"
                                    }
                                    flatpickr("input[type=datetime-local]",
                                        config
                                    );
                                </script>
                            </p>
                            <p><input type="submit" value="Submit"></p>
                        </form>
                    </div>
                    <!-- Script to send a data of form to admin's email -->
                </div>
                <div class="col-lg-4">
                    <div class="contact-form-wrap">
                        <div class="contact-form-box">
                            <h4><i class="fas fa-map"></i> Shop Address</h4>
                            <p>34/8, East Hukupara <br> Gifirtok, Sadan. <br> Country Name</p>
                        </div>
                        <div class="contact-form-box">
                            <h4><i class="far fa-clock"></i> Shop Hours</h4>
                            <p>MON - FRIDAY: 8 to 9 PM <br> SAT - SUN: 10 to 8 PM </p>
                        </div>
                        <div class="contact-form-box">
                            <h4><i class="fas fa-address-book"></i> Contact</h4>
                            <p>Phone: +00 111 222 3333 <br> Email: support@fruitkha.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact form -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> 
    <script>
        const submit = document.getElementById('submit');
        submit.addEventListener('submit', (e) => {
            e.preventDefault();
            console.log("Clicked");


            Email.send({
                SecureToken: "dc53ad6b-14ef-4b4f-873b-8208b506a78c", //add your token here
                To: document.getElementById('email').value, // receive
                From: "bangbang2002zingmepoki@gmail.com",  // send
                Subject:"Nông sản sạch",
                Body: "We received your message, we will contact you soon!"
            });


            Email.send({
                SecureToken: "dc53ad6b-14ef-4b4f-873b-8208b506a78c", //add your token here
                To: "bangbang2002zingmepoki@gmail.com", // receive
                From: "bangbang2002zingmepoki@gmail.com",  // send
                Subject:document.getElementById('subject').value +' '+'Email Customer: ' + document.getElementById('email').value,
                Body: 'Address of customer is: '+ document.getElementById('address').value+'\n'+'Time free is:'+ document.getElementById('datetime')+'\n'+
                document.getElementById('message'),
            }).then(
                // message => alert(message)
                alert('We received your message, we will contact you sonn!')
            );

        });
    </script> 

    <!-- find our location -->
    <div class="find-location blue-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p> <i class="fas fa-map-marker-alt"></i> Find Our Location</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end find our location -->

    <!-- google map section -->
    <div class="embed-responsive embed-responsive-21by9">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.523185938671!2d106.65501767498195!3d10.7711831893773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ec3c161a3fb%3A0xef77cd47a1cc691e!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBCw6FjaCBraG9hIC0gxJDhuqFpIGjhu41jIFF14buRYyBnaWEgVFAuSENN!5e0!3m2!1svi!2s!4v1681837211967!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- end google map section -->


    <script src="email.js"></script>
</body>

</html>
<?php
require_once("./view/footer.php");
?>