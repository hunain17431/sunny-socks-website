<?php 

$errors = [];
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["contact-name"];
    $mail = $_POST["contact-mail"];
    $company = $_POST["contact-company"];
    $subject = $_POST["contact-select"];
    $message = $_POST["contact-message"];

    if (empty($name)) $errors[] = "Name is required";
    if (empty($mail)) $errors[] = "Email is required";
    if (empty($subject)) $errors[] = "Subject is required";
    if (empty($company)) $errors[] = "Company is required";
    if (empty($message)) $errors[] = "Message is required";

    if (count($errors) == 0) {
        $success = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="../../style/contact.css">
    <link rel="shortcut icon" href="../../images/home/sun-icon.svg" type="image/x-icon">
</head>
<body>
   <nav class="navbar">
        <div class="nav-logo">
            <img src="../../images/home/sun-icon.svg" alt="sun icon">
            <span><a href="../../index.html">SUNNY SOCKS</a></span>
        </div>
        <ul class="nav-links">
            <li><a href="../../index.html">Home</a></li>
            <li><a href="../../pages/collections.html">Collections</a></li>
            <li><a href="../../pages/about.html">About us</a></li>
            <li><a href="../../pages/sustainability.html">Sustainability</a></li>
            <li><a href="../../pages/contact.html" class="nav-active">Contact</a></li>
        </ul>
        <div class="nav-buttons">            
            <div class="nav-lang-toggle">
                <button class="nav-lang-en">EN</button>
                <button class="nav-lang-nl">NL</button>
            </div>
            <a href="../../pages/inquiry.html" class="nav-inquiry">Inquiry</a>
        </div>
    </nav>
    <section class="contact-hero-section">
        <div class="contact-hero-left">
            <p>TALK TO US</p>
            <h3>GET IN TOUCH</h3>
            <p>Whether you're curious about our products, want a custom order, or just want to say hello we'd love to hear from you.</p>
        </div>
        <div class="contact-hero-right">
            <div class="contact-hero-box">
                <span class="contact-hero-icon">📍</span>
                <p>ADRESS</p>
                <ul>
                    <li>Sunny Socks</li>
                    <li>Oudegracht 245</li>
                    <li>3511 NJ Utrecht</li>
                    <li>The Netherlands</li>
                </ul>
            </div>
            <div class="contact-hero-box">
                <span class="contact-hero-icon">📞</span>
                <p>PHONE</p>
                <ul>
                    <li>+31 20 555 0199</li>
                </ul>
            </div>
            <div class="contact-hero-box">
                <span class="contact-hero-icon">📧</span>
                <p>EMAIL</p>
                <ul>
                    <li>hello@sunnysocks.nl</li>
                </ul>
            </div>
            <div class="contact-hero-box"> 
                <span class="contact-hero-icon">🕐</span>
                <p>HOURS</p>
                <ul>
                    <li>Mon-Fri, 9:00-17:00 CET</li>
                </ul>                
            </div>
        </div>
    </section>
    <section class="contact-form-section">
        <div class="contact-form-left">
            <h3>MESSAGE SENT</h3>
            <?php if(count($errors) > 0) { ?>
                <div class="contact-error">
                    <h3>Something went wrong!</h3>
                    <ul>
                        <?php foreach ($errors as $error){ ?>
                            <li><?= $error ?></li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } else if ($success){ ?>
                <div class="contact-success">
                    <h3>Thank you</h3>
                    <p>Your message has been sent. We'll get back to you soon.</p>
                    <p>Name : <?= $name ?></p>
                    <p>Email : <?= $mail ?></p>
                    <p>Company : <?= $company ?></p>
                    <p>Subject : <?= $subject ?></p>
                    <p>Message : <?= $message ?></p>
                </div>
            <?php } ?>
        </div>
        <div class="contact-form-right">
            <h3>BUISNESS INQUIRY</h3>
            <div class="contact-form-inquiry">
                <p>Looking for Custom Socks?</p>
                <p class="contact-form-description">We specialise in custom-branded socks for businesses, events, and retail. Minimum orders from 50 pairs. Full design support included.</p>
                <ul>
                    <li>Your logo & colours</li>
                    <li>Custom packaging</li>
                    <li>Bulk pricing</li>
                    <li>Fast turnaround</li>
                </ul>
                <a href="../../pages/inquiry.html">Start an inquiry</a>
            </div>
            <div class="contact-form-answer">
                <p>Quick Answers</p>

                <p class="contact-form-questions">What is the minimum order quantity?</p>
                <p class="contact-form-answers">For custom orders, MOQ is 50 pairs per design.</p>

                <p class="contact-form-questions">How long does production take?</p>
                <p class="contact-form-answers">Typically 3-4 weeks from approved design to delivery.</p>

                <p class="contact-form-questions">Do you ship internationally?</p>
                <p class="contact-form-answers">Yes, we do ship across Europe and beyond.</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <div class="nav-logo">
                        <img src="../../images/home/sun-icon.svg" alt="sun icon">
                        <span>SUNNY SOCKS</span>
                    </div>
                    <p>Founded in 2017, Sunny Socks creates joyful, sustainable socks with vibrant colours and personality. The bright side of socks.</p>
                    <div class="footer-adress">
                        <p>Sunny Socks</p>
                        <p>Oudegracht 245, 3511 NJ Utrecht, The Netherlands</p>
                    </div>
                    <div class="footer-socials">
                        <a href="#">IG</a>
                        <a href="#">FB</a>
                        <a href="#">LI</a>
                        <a href="#">TW</a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>NAVIGATION</h3>
                    <a href="../../index.html">Home</a>
                    <a href="../../pages/collections.html">Collections</a>
                    <a href="../../pages/about.html">About Us</a>
                    <a href="../../pages/sustainability.html">Sustainability</a>
                    <a href="../../pages/contact.html">Contact</a>
                    <a href="../../pages/inquiry.html">Inquiry</a>
                    <a href="../../pages/terms.html" class="footer-tos">Terms & Conditions</a>
                    <a href="../../pages/privacy.html">Privacy Policy</a>
                </div>
                <div class="footer-column">
                    <h3>COLLECTIONS</h3>
                    <a href="../../pages/collections.html">Everyday Essentials</a>
                    <a href="../../pages/collections.html">Sport & Active</a>
                    <a href="../../pages/collections.html">Special Edition</a>
                    <a href="../../pages/collections.html">Custom Corporate</a>
                </div>
            </div>
            <div class="footer-payments">
                <h3>ACCEPTED PAYMENTS</h3>
                <span>iDEAL</span>
                <span>Visa</span>
                <span>Mastercard</span>
                <span>PayPal</span>
                <span>Apple Pay</span>
                <span>Google Pay</span>
            </div>
            <div class="footer-copyright">
                <p>&copy; 2026 Sunny Socks. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>