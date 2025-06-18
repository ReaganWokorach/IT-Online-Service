<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="In the readme file">
    <title>Our IT Website Project</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <header class="hero-header">
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
        <div class="hero-slider">
            <h1>Innovating the Future of Tech</h1>
            <p>We are a passionate IT group transforming ideas into digital solutions through collaboration, creativity, and code.</p>
            <br>
            <br>
            <a href="#" class="btn-discover">Meet the Team</a>
        </div>
    </header>
    
    <main>
    
        <!--The Company Info-->
        <div class="container">
            <div class="vision-section">
                <h2>Vision</h2>
                <p>To be a leading IT solutions provider, empowering businesses and individuals with innovative, reliable, and affordable technology services that enhance digital experiences and drive success.</p>
            </div>
            <div class="content-wrapper">
                <div class="section">
                    <h2>Mission</h2>
                    <p>To deliver high-quality and cost-effective IT solutions, including web design, domain & hosting services, and database management, tailored to our clients' unique needs.</p>
                    <p>To provide seamless computer repair and maintenance services, ensuring optimal performance and longevity of IT assets.</p>
                    <p>To enhance brand identity through professional logo and banner design that captures our clients’ essence and vision.</p>
                    <p>To stay ahead in technology trends and continuously improve our services through research, innovation, and client feedback.</p>
                    <p>To foster a collaborative and customer-centric approach, ensuring satisfaction and long-term partnerships.</p>
                </div>
                <div class="vertical-line"></div>
                <div class="section">
                    <h2>Objectives</h2>
                    <ul class="objectives-list">
                        <li><strong>Quality Services:</strong> Provide top-tier IT solutions that meet industry standards and exceed customer expectations.</li>
                        <li><strong>Customer Satisfaction:</strong> Build strong relationships with clients through personalized support and reliable service delivery.</li>
                        <li><strong>Innovation & Growth:</strong> Continuously upgrade our technical expertise, tools, and methodologies to keep pace with evolving IT trends.</li>
                        <li><strong>Accessibility & Affordability:</strong> Ensure that businesses and individuals, regardless of size or budget, can access quality IT services.</li>
                        <li><strong>Brand Development:</strong> Help clients establish a strong digital presence through effective branding and web solutions.</li>
                    </ul>
                </div>
            </div>
        </div>
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
                <a href="index.html">Home</a>
                <a href="aboutUs.html">About Us</a>
                <a href="ourServices.html">Our Services</a>
                <a href="pricing.html">Pricing</a>
                <a href="contactus.html">Contact Us</a>
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
<script>
  const heroHeader = document.querySelector('.hero-header');
    const images = [
        'images/slider1.jpg',
        'images/slider2.jpg',
        'images/slider3.jpg',
        'images/slider4.jpg' // Add as many as you want
    ];

    let index = 0;

    setInterval(() => {
        index = (index + 1) % images.length;
        heroHeader.style.backgroundImage = `linear-gradient(rgba(46,139,87,0.7), rgba(3,59,92,0.6)), url('${images[index]}')`;
    }, 4000); // Change every 4 seconds
</script>

</body>
</html>
