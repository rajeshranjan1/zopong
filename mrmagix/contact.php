<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Mr Magix - Pizza </title>
    <?php include 'head.php';?>
</head>

<body class="home page-template page-template-template-home page-template-template-home-php page page-id-7">
    <div class="animsition global-wrapper">
        <?php include 'header.php';?>

        <div class="container-wrapper">
            <div class="page-bg" style=" background-image: url(upload/bg-pizza.jpg); "></div>
            <div id="container" class="template-contact-container">
                <!-- start container -->
                <div class="page-title-wrapper">
                    <div class="page-title-outher">
                        <div class="page-title-inner">
                            <span class="page-title-icon flaticon-pizza-slice"></span>
                            <h1 class="page-title">Contact</h1>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="page-wrapper">
                    <div class="contact-maps">
                        <div id="map_canvas" class="mapStyleClass"></div>
                    </div>
                    <div class="contact-info-wrapper">
                        <div class="contact-details">
                            <div class="contact-detail contact-detail1">
                                <div class="contact-detail-title">Address</div>
                                <div class="contact-detail-content">
                                    <p>A-176, Sector-83, <br /> Phase - II (533.87 mi)<br /> Noida, India 201305</p>
                                </div>
                            </div>
                            <div class="contact-detail contact-detail2">
                                <div class="contact-detail-title">Call or write</div>
                                <div class="contact-detail-content">
                                    <p><strong>Phone / </strong><a href="tel:8010684684">8010 684 684 , 9911 801 833</a><br />
                                        <strong>Email / </strong><a href="mailto:hello@mrmagix.com">hello@mrmagix.com</a></p>
                                </div>
                            </div>
                            <div class="contact-detail contact-detail3">
                                <div class="contact-detail-title">Opening hours</div>
                                <div class="contact-detail-content">
                                    <p><strong>Monday – Friday / </strong>8am – 11pm<br />
                                       <strong>Saturday - Sunday / </strong>8am – 11pm<br />
                                </div>
                            </div>
                        </div>
                        <div class="contact-form-wrapper">
                            <form id="enquiry-form" action="#" name="" method="post">
                                <div class="albertos-contact-form">
                                    <div class="contact-detail-title">Contact Form</div>
                                    <div class="app-name">
                                        <span class="wpcf7-form-control-wrap name-input">
                                            <input name="name" id="name" type="text" value="" size="40" class="wpcf7-form-control " aria-required="true" aria-invalid="false" placeholder="Name" required="" />
                                        </span>
                                    </div>
                                    <div class="app-phone">
                                        <span class="wpcf7-form-control-wrap email-input">
                                            <input name="mail" id="mail" type="text"  value="" size="40" class="wpcf7-form-control " aria-required="true" aria-invalid="false" placeholder="Email" required="" />
                                        </span>
                                    </div>
                                    <p><span class="wpcf7-form-control-wrap appointment-message">
                                        <textarea name="comment" id="comment"  cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea " aria-required="true" aria-invalid="false" placeholder="Message"></textarea></span> </p>
                                    <div class="clear"></div>

                                    <div class="contact-submit">
                                        <input type="submit" value="Send message" class="wpcf7-form-control wpcf7-submit"  id="submit-contact" />
                                        <div id="msg" class="message"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <!-- end page wrapper -->
            </div>
            <!-- end container -->
            <div class="clear"></div>
        </div>
        <!-- end container-wrapper -->
        <?php include 'footer.php';?>
    </div>
   <?php include 'footer-script.php';?>
</body>
</html>