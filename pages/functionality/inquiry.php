<?php
$errors = [];
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["products"])) {
        $products = $_POST["products"];
    } else {
        $products = [];
    }
    $name = $_POST["customer-name"];
    $contact = $_POST["contact-person"];
    $email = $_POST["contact-email"];
    $phone = $_POST["contact-phone"];
    $notes = $_POST["contact-notes"];
    $terms = isset($_POST["terms"]);

    if (count($products) == 0) $errors[] = "Select at least one product";
    if (empty($name)) $errors[] = "Company name is required";
    if (empty($contact)) $errors[] = "Contact person is required";
    if (empty($email)) $errors[] = "Email is required";
    if (empty($notes)) $errors[] = "Sizes and Quantities are required";
    if (!$terms) $errors[] = "You must agree to the Terms & Conditions";

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
    <title>Inquiry | Sunny Socks</title>
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="../../style/inquiry.css">
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
            <li><a href="../../pages/contact.html">Contact</a></li>
        </ul>
        <div class="nav-buttons">            
            <div class="nav-lang-toggle">
                <button class="nav-lang-en">EN</button>
                <button class="nav-lang-nl">NL</button>
            </div>
            <a href="../../pages/inquiry.html" class="nav-inquiry">Inquiry</a>
        </div>
    </nav>
    <section class="inquiry-hero-section">
        <h3>PERSONAL SUPPORT</h3>
        <h2>PRODUCT INQUIRY</h2>
        <p>Tell us which Sunny Socks products you are interested in. We will get in touch about quantities, possibilities, and next steps.</p>
    </section>
    <section class="inquiry-section">
        <div class="inquiry-section-left">
            <div>
                <?php if (count($errors) > 0) { ?>
                    <div class="contact-error">
                        <h3>Your inquiry could not be submitted</h3>
                        <p>Please fix the following to continue:</p>
                        <ul>
                            <?php foreach ($errors as $error) { ?>
                                <li><?= $error ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } elseif ($success) { ?>
                    <div class="inquiry-success">
                        <div class="inquiry-success-header">
                            <h3>✓ Inquiry Confirmed</h3>
                            <p>Order Nº SS-77<?= $phone ?></p>
                        </div>
                        <div class="inquiry-success-body">
                            <h4>Thank you, <?= $contact ?>!</h4>
                            <p>We've received your inquiry and will get back to you within 2 business days.</p>
                        </div>
                        <div class="inquiry-success-summary">
                            <h4>ORDER SUMMARY</h4>
                            <p><strong>Company:</strong> <?= $name ?></p>
                            <p><strong>Contact:</strong> <?= $contact ?></p>
                            <p><strong>Email:</strong> <?= $email ?></p>
                            <p><strong>Phone:</strong> <?= $phone ?></p>
                            <p><strong>Products:</strong></p>
                            <ul>
                                <?php foreach ($products as $product){ ?>
                                    <li><?= $product ?></li>
                                <?php } ?>
                            </ul>
                            <p><strong>Sizing and Quantity:</strong> <?= ($notes) ?></p>
                        </div>
                    </div>
                <?php } ?>               
            </div>
        </div>
        <div class="inquiry-section-right">
            <div class="inquiry-company">
                <h3>COMPANY INFORMATON</h3>
                <p>Sunny Socks</p>
                <ul>
                    <li>Oudegracht 245</li>
                    <li>3511 NJ Utrecht</li>
                    <li>The Netherlands</li>
                </ul>
            </div>
            <div class="inquiry-question">
                <h3>HAVE A QUESTION?</h3>
                <p>Need help choosing the right socks or have a question about your inquiry?</p>
                <a href="../../pages/contact.html">Get in touch →</a>
            </div>
            <div class="inquiry-payments">
                <h3>PAYMENTS METHODS</h3>
                <div class="inquiry-payments-methods">
                    <span>iDEAL</span>
                    <span>Visa</span>
                    <span>Mastercard</span>
                    <span>PayPal</span>
                    <span>Apple Pay</span>
                    <span>Google Pay</span>
                </div>
                <p>Payment will be arranged after your inquiry is confirmed.</p>
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
                    <a href="index.html">Home</a>
                    <a href="pages/collections.html">Collections</a>
                    <a href="pages/about.html">About Us</a>
                    <a href="pages/sustainability.html">Sustainability</a>
                    <a href="pages/contact.html">Contact</a>
                    <a href="pages/inquiry.html">Inquiry</a>
                    <a href="pages/terms.html" class="footer-tos">Terms & Conditions</a>
                    <a href="pages/privacy.html">Privacy Policy</a>
                </div>

                <div class="footer-column">
                    <h3>COLLECTIONS</h3>
                    <a href="pages/collections.html">Everyday Essentials</a>
                    <a href="pages/collections.html">Sport & Active</a>
                    <a href="pages/collections.html">Special Edition</a>
                    <a href="pages/collections.html">Custom Corporate</a>
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