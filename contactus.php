<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="In the readme file">
    <title>Our IT Website Project</title>
    <link rel="stylesheet" href="contact-us.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="topContact">
            <div class="ourMobile">
                <h2>Whatsapp</h2>
                <p class="gapUp">(+256) 776-815-217</p>
                <p>(+256) 726-322-661</p>
            </div>
            <div class="ourTime">
                <h2>Time of Services</h2>
                <p class="gapUp">Monday - Saturday</p>
                <p>8:00AM - 7:00PM</p>
            </div>
            <div class="ourEmail">
                <h2>Our emails</h2>
                <p class="gapUp"><a href="mailto: nightlearners42@gmail.com">nightlearners42@gmail.com</a></p>
                <p><a href="mailto: wr213897@students.cavendish.ac.ug">Our Agent</a></p>
            </div>
        </div>
        <div class="navBar">
            <img src="Images/Logo8-removebg-preview.png" onerror="alert('Image not found! Check the path.')"  alt="Night Learnes' IT logo" class="ourLogo" />
            <!-- Hamburger Menu Checkbox and Icon -->
            <input type="checkbox" id="hamburger-toggle" class="hamburger-toggle">
            <label for="hamburger-toggle" class="hamburger-icon">
                <i class="bx bx-menu"></i> <!-- Boxicon for hamburger menu -->
                <i class="bx bx-x"></i> <!-- Close icon -->
            </label>
            <nav class="allNavs">
                <a href="index.php">Home</a>
                <a href="aboutUs.php">About Us</a>
                <a href="ourServices.php">Our Services</a>
                <a href="pricing.php">Pricing</a>
                <a href="contactus.php">Contact Us</a>
            </nav>
        </div>
        <div class="admin-login-wrapper">
            <a href="login.php" class="admin-login-button">Login as an Admin</a>
        </div>
    </header>
    <!-- Contact form Section -->
    <div class="contact-container">
        <div class="contact-us">
            <h1>Contact Us</h1>
            <P class="contact-info">Should you have any questions, please get in touch</P>
            
            <form action="submit_form.php" method="post" id="contactForm"> <!--Added an id for Form validation with js and also added span with error messages within the form-->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" placeholder="Enter your name" name="name"required>
                    <span class="error" id="nameError">This field is required</span>
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" id="email" placeholder="Enter your email" name="email" required>
                    <span class="error" id="emailError">Please enter a valid email address</span>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" rows="5" placeholder="Enter your message" name="message"required></textarea>
                    <span class="error" id="messageError">This Field is required</span>
                </div>
                <button type="submit" id="submitButton">Send Message</button> <!--Added an id to submitButton-->
            </form>
    </div>
        <div class="map-container">
            <iframe class="map" 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.794964205131!2d31.57836337473266!3d4.845058840335621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x171800265e733ad7%3A0x7461e9a85669c87b!2sGurei%2C%20Juba%2C%20South%20Sudan!5e0!3m2!1sen!2sus!4v1711587551234!5m2!1sen!2sus" 
        allowfullscreen="" loading="lazy">
    </iframe>
        </div>
    </div>
    
<section class="Footer">
        <div class="our-services">
            <h3>
                Our Services
            </h3><br>
            <ul class="services">
                <li>Web Design</li>
                <li>Domain &amp; Hosting Services</li>
                <li>Computer Repair &amp; Maintenance</li>
                <li>DataBase Development &amp; Management</li>
                <li>Logo Design</li>
                <li>Banner Design</li>
            </ul>
    </div>
    <div class="Navigation">
            <h3>
                Navigation
            </h3><br>
            <ul class="home">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Prices</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
            </ul>
    </div>
    <div class="contact-details">
            <h3>
                Contact Details
            </h3><br>
            <ul class="contact">
                <li>Gurei Residential Area, Lemom Gaba Rd <br>
                    Juba South Sudan
                </li>
                <li>(+211)922847198</li>
                <li>(+211)917795114</li>
                <br>
                <li><a href="mailto:info@nightlearnersitgroup.com">info@nightlearnersitgroup.com</a></li>
                <li><a href="mailto:sales@nightlearnersitgroup.com">sales@nightlearnersitgroup.com</a></li>
            </ul>
            <button id="scrollUp" onclick="scrollToTop()">&#8679;</button>
    </div>
</section>
    
<script src="index.js?v=2"></script> <!--Added the source for the js codes-->
</body>
</html>
