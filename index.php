<?php

if(isset($_POST['submit'])){
    $to = $_POST['email'];
    $to2 = "pi@modjarrad.com";
    // $from = $_POST['email'];
    $from = "info@dallasareapersonalinjurylaw.com";
    $envelope_from = "info@dallasareapersonalinjurylaw.com";
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $incident = $_POST['incident'];
    $injured = $_POST['injured'];
    $desc = $_POST['desc'];
    $subject = "DallasAreaPersonalInjuryLaw.Com - Form Submission From " . $name;
    $subject2 = "DallasAreaPersonalInjuryLaw.Com - Form Submission From " . $name;
    $message = "Here is a copy of your form submission. One of our associates will contact you shortly to discuss your case.\n\nName: " . $name . "\n\nEmail Address: " . $to . "\n\nPhone Number: " . $phone . "\n\nDate of the Incident: " . $date . "\n\nType of Incident: " . $incident . "\n\nWere They Injured?: " . $injured . "\n\nIncident Detail: " . $desc;
    $message2 = "Name: " . $name . "\n\nEmail Address: " . $to . "\n\nPhone Number: " . $phone . "\n\nDate of the Incident: " . $date . "\n\nType of Incident: " . $incident . "\n\nWere They Injured?: " . $injured . "\n\nIncident Detail: " . $desc;
    $additional_parameters = "-f" . $envelope_from;

    $headers = array('Content-Type: text/plain; charset="UTF-8";',
                    'From: MAS LAW Firm <' . $from . '>',
                    'Reply-To: ' . $from,
                    'Return-Path: ' . $from);

    mail($to, $subject, $message, implode("\n", $headers), $additional_parameters);
    mail($to2, $subject2, $message2, implode("\n", $headers), $additional_parameters);
    echo "<div class='email-sent'>Mail Sent. Thank You " . $name . ", we will contact you shortly.</div>";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dallas Area Personal Injury Law Firm</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <nav>
                <div class="header-left">
                    <a href="https://www.dallasarealaw.com/personal-injury/">
                    <img class="logo" src="img/mas-logo-white.png">
                    </a>
                    <p class="nav-paragraph">Contact us for a free review of your case</p>
                </div>
                <div class="header-right">
                    <a class="phone-number" href="tel:972-789-1664">972-789-1664</a>
                </div>
            </nav>
            <div class="hero">
                <!-- <h1>Lawyers by your side<sup>TM</sup></h1>
                <h2>If you've been hurt, we can help</h2> -->
                <img class="hero-image" src="img/mas-logo-1600p.png">
                <img class="hero-image-mobile" src="img/hero-image-mobile.png">
            </div>
            <div class="learn-more-section">
                <!-- <div class="hero-button"><a href="https://www.dallasarealaw.com/personal-injury/" target="_blank">LEARN MORE</a></div> -->
                <!-- <img class="hero-arrow" src="img/arrow.png"> -->
            </div>
        </header>
        <section>
            <div class="main-content">
                <div class="content-div">
                    <p style="margin-top: 0;">Have you been injured as a result of someone else’s fault?  Do you have medical bills?  Have you missed time from work?  Do you have other financial losses because of your injuries?</p>
                    <h5>Don’t Wait, Contact Us for a Free Case Review Today!</h5>
                    <p>If you or a loved one has a personal injury case, contact us for a free case review and consultation.  You can fill out the form on this page or call us at <a href="tel:972-789-1664">(972) 789-1664</a>, and we will evaluate your case for free.</p>
                    <p>We are the <em>Lawyers On Your Side<sup>TM</sup></em>.  We will make sure you are protected and the responsible party fairly compensates you for your injuries.</p>
                    <p>If you have been injured as a result of someone else’s fault, then under the law, you have the right to be compensated.  Of course, it is not easy to get what you lawfully deserve from the insurance companies, and that’s where we can help.  We work on a contingency fee basis, which means, if we take on your case, you won’t have to pay us anything unless we win!</p>
                </div>
                <h3>Free Case Review</h3>
                <div class="horizontal-line"></div>
                <div class="form-div">
                    <form action="" method="POST">
                            <div class="form-field">
                                <label for="name">Name *</label>
                                <input type="text" id="name" name="name">
                            </div>
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email">
                        <label for="phone">Phone Number *</label>
                        <input type="tel" id="phone" name="phone">
                        <label for="date">The claimed injury occurred on this date:</label>
                        <input type="date" id="date" name="date">
                        <label for="incident">Type of Incident</label>
                        <select id="incident" name="incident">
                            <option value="auto-accident">Auto Accident</option>
                            <option value="slip-and-fall">Slip & Fall</option>
                            <option value="work-injury">Work Injury</option>
                            <option value="dog-bite">Dog Bite</option>
                            <option value="medical-malpractice">Medical Malpractice</option>
                        </select>
                        <p>Are you injured?</p>
                        <input type="radio" id="Yes" name="injured" value="Yes">
                        <label for="Yes">Yes</label>
                        <input type="radio" id="No" name="injured" value="No">
                        <label for="No">No</label>
                        <label for="desc">Incident Details</label>
                        <textarea id="desc" name="desc" rows="8" cols="50"></textarea>
                        <input type="submit" name="submit" value="Submit">
                    </form>
                </div>
                <div class="horizontal-line"></div>
            </div>
        </section>
        <footer>
            <div class="footer-details">
                <div class="footer-details-section">
                    <h4>Address</h4>
                    <a href="https://g.page/dallasarealaw?share" target="_blank"><p>212 W Spring Valley Road<br>Richardson, TX 75081</p></a>
                </div>
                <div class="footer-details-section">
                    <h4>Phone</h4>
                    <a href="tel:972-789-1664"><p>972-789-1664</p></a>
                </div>
                <div class="footer-details-section">
                    <h4>Follow Us</h4>
                    <div class="social-media-buttons">
                        <a href="https://www.facebook.com/dallasarealaw/"><img class="social-media-button-item" src="img/icon_facebook.png"></a>
                        <a href="https://www.linkedin.com/company/modjarrad-and-abusaad-law-firm"><img class="social-media-button-item" src="img/icon_linkedin.png"></a>
                        <a href="https://twitter.com/MASLawFirm?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img class="social-media-button-item" src="img/icon_twitter.png"></a>
                        <a href="https://www.instagram.com/explore/locations/337340875/mas-law-firm?hl=en"><img class="social-media-button-item" src="img/icon_instagram.png"></a>
                    </div>
                </div>
            </div>
        </footer>
        <div class="copyright-section">
            <p>© 2020 MAS LAW Firm. All Rights Reserved.</p>
        </div>
    </body>
</html>