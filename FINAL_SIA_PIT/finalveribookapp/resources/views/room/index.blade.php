<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking Now!</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: #333;
            background: #f4f4f4;
        }

        .header-image {
            position: relative;
            text-align: center;
            color: white;
        }

        .header-image img {
            width: 100%;
            height: 650px;
            object-fit: cover;
            opacity: 0.8;
        }

        .header-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }

        header h1 {
            margin: 0;
            font-size: 3em;
            font-family: 'Playfair Display', serif;
        }

        nav {
            position: absolute;
            top: 20px;
            right: 100px;
            z-index: 10;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        nav ul li {
            margin: 0 10px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1.2em;
            font-family: 'Open Sans', sans-serif;
            padding: 8px 15px;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        nav ul li a:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px 0;
        }

        section {
            margin: 20px 0;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        section h2 {
            margin-bottom: 20px;
            font-size: 2em;
            color: #333;
        }

        .room-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .room {
            background: #f9f9f9;
            border: 1px solid #e1e1e1;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .room img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .room-content {
            margin-top: 10px;
        }

        .room h3 {
            margin-bottom: 10px;
            font-size: 1.5em;
            color: #444;
        }

        .room p {
            margin-bottom: 10px;
            color: #666;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form label {
            margin-bottom: 5px;
            font-weight: bold;
            font-size: 1.1em;
        }

        form input,
        form select,
        form textarea {
            margin-bottom: 15px;
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            max-width: 400px;
        }

        form button {
            padding: 12px 24px;
            font-size: 1.2em;
            color: #fff;
            background: #444;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        form button:hover {
            background: #555;
        }

        footer {
            background: #444;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }

        footer ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        footer ul li {
            display: inline;
            margin: 0 10px;
        }

        footer ul li a {
            color: #fff;
            text-decoration: none;
        }

        #about {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }

        #about h2 {
            font-weight: bold;
            font-size: 2em;
        }

        .about-content {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .about-description {
            text-align: center;
            font-family: 'Arial', sans-serif;
            margin-bottom: 20px;
        }

        .about-description h1 {
            font-size: 2em;
            color: #fff;
        }

        .about-text {
            margin-top: 20px;
        }

        .about-text p {
            font-family: 'Arial', sans-serif;
        }

        .about-images {
            display: flex;
            justify-content: space-between;
        }

        .about-images img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            border: 2px solid #fff;
        }

        .about-text {
            flex: 1;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-image">
            <nav>
                <ul>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#rooms">Rooms</a></li>
                    <li><a href="#offers">Offers</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <!-- Ensure this image path is correct -->
            <img src="/images/Pic1.jpg" alt="Hotel Image">
            <div class="header-text">
                <h1>VERIBOOKAPP</h1>
            </div>
        </div>
    </header>
    
    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <div class="about-description">
                <h1 class="about-text">ABOUT US</h1>
            </div>
            <div class="about-images">
                <img src="/images/Pic6.jpg" alt="Hotel View">
                <img src="/images/Pic7.jpg" alt="Hotel Interior">
                <img src="/images/Pic8.jpg" alt="Hotel Amenities">
                <img src="/images/Pic9.jpg" alt="Hotel Interior">
                <img src="/images/Pic10.jpg" alt="Hotel Amenities">
            </div>
        </div>
    </section>
    
    <section id="rooms">
        <div class="container">
            <h2>Available Hotels</h2>
            <div class="room-grid">
                <div class="room">
                    <img src="/images/Pic2.jpg" alt="Deluxe Room">
                    <div class="room-content">
                        <h3>The Grand Oasis</h3>
                        <p>Spacious room with a king-sized bed, balcony, and a beautiful sea view. Enjoy modern amenities and elegant decor that makes your stay memorable.</p>
                        <p>Additional facilities include a minibar, free Wi-Fi, and a luxurious bathroom with a soaking tub and rain shower.</p>
                        <p><strong>Price: $250 per night</strong></p>
                    </div>
                </div>
                <div class="room">
                    <img src="/images/Pic3.jpg" alt="Suite Room">
                    <div class="room-content">
                        <h3>Urban Nest</h3>
                        <p>Contemporary suite featuring a separate living area, kitchenette, and a private balcony. Perfect for both short and long stays.</p>
                        <p>Guests can enjoy complimentary breakfast, high-speed internet, and access to the fitness center and rooftop pool.</p>
                        <p><strong>Price: $350 per night</strong></p>
                    </div>
                </div>
                <div class="room">
                    <img src="/images/Pic4.jpg" alt="Family Room">
                    <div class="room-content">
                        <h3>Family Comfort Inn</h3>
                        <p>Comfortable family room with two queen-sized beds, a play area for kids, and all necessary amenities for a relaxing stay.</p>
                        <p>The room includes a seating area, kid-friendly amenities, and a spacious bathroom with dual sinks and a bathtub.</p>
                        <p><strong>Price: $200 per night</strong></p>
                    </div>
                </div>
                <div class="room">
                    <img src="/images/Pic5.jpg" alt="Executive Room">
                    <div class="room-content">
                        <h3>Celestial Suites Hotel</h3>
                        <p>Elegant room designed for business travelers, featuring a king-sized bed, ergonomic work area, and advanced technology.</p>
                        <p>Enjoy complimentary access to the business center, high-speed internet, and a complimentary breakfast buffet.</p>
                        <p><strong>Price: $300 per night</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="offers">
        <div class="container">
            <h2>What We Offer</h2>
            <div class="offerings">
                <p>At VERIBOOK, we offer an exceptional range of services to make your stay unforgettable. From luxurious rooms to world-class amenities, our goal is to provide you with the best hospitality experience.</p>
                <ul>
                    <li>24/7 Concierge Service</li>
                    <li>Spa and Wellness Center</li>
                    <li>Gourmet Dining Options</li>
                    <li>State-of-the-Art Fitness Center</li>
                    <li>Complimentary High-Speed Wi-Fi</li>
                    <li>Business and Conference Facilities</li>
                    <li>Children's Play Area and Activities</li>
                    <li>Exclusive Lounge Access</li>
                </ul>
                <a href="/booking" class="button">Book Now</a>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>If you have any questions or need further information, please feel free to contact us. We are here to assist you!</p>
            <p>Email Address: Veribook@gmail.com</p>
            <p>Contact Number: 09165241529</p>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 VERIBOOK. All rights reserved.</p>
            <ul>
                <li><a href="#about">About Us</a></li>
                <li><a href="#rooms">Rooms</a></li>
                <li><a href="#offers">Offers</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </footer>
    
    <script>
        // Function to scroll to a specific section when a navigation link is clicked
        function scrollToSection(sectionId) {
            var section = document.getElementById(sectionId);
            if (section) {
                section.scrollIntoView({ behavior: 'smooth' });
            }
        }

        // Function to attach click event listeners to navigation links
        function attachNavigationListeners() {
            var navLinks = document.querySelectorAll('nav ul li a');
            navLinks.forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent default link behavior
                    var sectionId = this.getAttribute('href').substring(1); // Extract section id from href attribute
                    scrollToSection(sectionId); // Scroll to the section
                });
            });
        }

        // Attach click event listeners to navigation links when the DOM content is loaded
        document.addEventListener('DOMContentLoaded', function() {
            attachNavigationListeners();
        });
    </script>
</body>
</html>
