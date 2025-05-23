<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="In the readme file">
    <title>Our IT Website Project</title>
    <link rel="stylesheet" href="aboutUs.css">
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
            <img src="Images/Logo8-removebg-preview.png" onerror="alert('Image not found! Check the path.')" class="ourLogo"/>
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
    </header>


<main> 
    
        <section class="about-us">
            <h1>About Us</h1>
            <p>Night Learners IT Group is a dynamic and innovative IT solutions provider dedicated to delivering high-quality digital services. We specialize in Web Design, Domain & Hosting Services, Computer Repair & Maintenance, Database Development & Management, Logo Design, and Banner Design. Our team is committed to providing tailored solutions that help businesses and individuals establish a strong digital presence while ensuring smooth and efficient IT operations.</p>
            
            <h2>Our Services</h2>
            <ul>
                <li><strong>Web Design & Development:</strong> Creating modern, responsive, and user-friendly websites tailored to businesses' needs.</li>
                <li><strong>Domain & Hosting Services:</strong> Providing secure and reliable domain registration and web hosting solutions.</li>
                <li><strong>Computer Repair & Maintenance:</strong> Ensuring optimal performance and longevity of IT systems through expert repair and maintenance.</li>
                <li><strong>Database Development & Management:</strong> Offering robust database solutions to streamline operations and improve data management.</li>
                <li><strong>Logo & Banner Design:</strong> Designing visually appealing and professional logos and banners that enhance brand identity.</li>
            </ul>

            <div class="who-we-are">
                <h2>Who We Are</h2>
                <p>At Night Learners IT Group, we believe in the power of technology to transform businesses. Our name reflects our dedication to continuous learning and adapting to the ever-evolving digital landscape. We work closely with our clients to understand their unique needs and craft solutions that drive efficiency, growth, and success.</p>
            </div>

            <div class="why-choose-us">
                <h2>Why Choose Us?</h2>
                <ul>
                    <li><strong>Expert Team:</strong> Skilled professionals with expertise in various IT domains.</li>
                    <li><strong>Customer-Centric Approach:</strong> Tailored solutions designed to meet individual business needs.</li>
                    <li><strong>Affordable & Reliable:</strong> Cost-effective services without compromising on quality.</li>
                    <li><strong>Continuous Innovation:</strong> Staying ahead of technology trends to provide cutting-edge solutions.</li>
                    <li><strong>24/7 Support:</strong> Dedicated support to ensure uninterrupted IT services.</li>
                </ul>
            </div>

            <div class="mission">
                <h2>Our Mission</h2>
                <p>At Night Learners IT Group, our mission is to empower businesses and individuals with high-quality, efficient, and affordable IT services. Whether you need a professional website, secure hosting, IT maintenance, or branding solutions, we are your trusted partner in the digital world.</p>
            </div>
        </section>

     <br><br> <!-- And this too please -->
     

</main>
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
                <li><a href="#">Contact Us</a></li>
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
<script src="index.js"></script>
</body>
</html>
