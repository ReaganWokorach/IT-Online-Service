<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="In the readme file">
    <title>Our IT Website Project</title>
<!--     <link rel="stylesheet" href="styles.css"> -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="ourServices.css">
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
    </header>
    <section class="homeSection">
        <br><br><br>
    </section>

<main>

<!-- Added by OHISIO JOHN -->



    <!-- This first row is for the first main div -->
    <div class="main-service">
        <div class="service-item">
            <h2>Web Design & Development</h2>
            <img src="Images/web-design.png" alt="Web Design & Development">
            <p>We create modern, responsive, and user-friendly websites tailored to business needs. Our team ensures your site looks great and performs well, using the latest technologies. Services include design, development, and ongoing support.</p>
        </div>
        <div class="service-item">
            <h2>Domain & Hosting Services</h2>
            <img src="Images/domain-hosting.png" alt="Domain & Hosting Services">
            <p>We offer secure and reliable domain registration and hosting solutions. Choose from a variety of top-level domains and hosting plans to suit your needs. Our 24/7 support ensures your website remains online and accessible.</p>
        </div>
        <div class="service-item">
            <h2>Computer Repair & Maintenance</h2>
            <img src="Images/computer-repair.png" alt="Computer Repair & Maintenance">
            <p>Our computer repair and maintenance services keep your IT systems running smoothly. We diagnose and fix hardware and software issues, offer preventive maintenance, and provide system updates, virus removal, and performance optimization.</p>
        </div>
    </div>

    <!-- This second row is for the second main div -->

    <div class="main-service">
        <div class="service-item">
            <h2>Software Development</h2>
            <img src="Images/software-development.png" alt="Software Development">
            <p>We develop custom software solutions to meet the unique needs of your business. Our experienced developers use the latest technologies and best practices to create scalable, efficient, and secure software applications. We offer end-to-end services, from requirements analysis and design to development, testing, and deployment.</p>
        </div>
        <div class="service-item">
            <h2>Logo & Banner Design</h2>
            <img src="Images/logo-banner-design.png" alt="Logo & Banner Design">
            <p>Our graphic designers create professional logos and banners that enhance your brand identity. We ensure your designs are visually appealing and functional. Services include multiple design concepts, revisions, and branding guidelines.</p>
        </div>
        <div class="service-item">
            <h2>Database Management</h2>
            <img src="Images/database-management.png" alt="Database Management">
            <p>We provide robust database solutions to improve data management. Our services include database design, performance tuning, data migration, and backup. We support various database systems and offer ongoing administration and support.</p>
        </div>
    </div>


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
                Conatct Details
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
