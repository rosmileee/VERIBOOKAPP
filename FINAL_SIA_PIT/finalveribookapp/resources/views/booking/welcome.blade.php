<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Reservation System - Dashboard</title>
    <style>
        /* Basic CSS styles for layout */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2rem;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }
        nav ul li {
            margin: 0 10px;
        }
        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }
        nav ul li a:hover {
            text-decoration: underline;
        }
        section {
            padding: 20px 0;
            text-align: center;
        }
        section h2 {
            margin-bottom: 20px;
        }
        .room-grid {
            display: grid;
            gap: 20px;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        }
        .room {
            border: 1px solid #ddd;
            padding: 20px;
            text-align: left;
            background: #f9f9f9;
            border-radius: 5px;
        }
        .room img {
            width: 100%;
            border-radius: 5px;
        }
        .room-content {
            margin-top: 10px;
        }
        .room-content h3 {
            margin-top: 0;
            font-size: 1.2rem;
        }
        .room-content p {
            margin-bottom: 10px;
        }
        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .footer ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: center;
            margin: 0;
        }
        .footer ul li {
            margin: 0 10px;
        }
        .footer ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }
        .footer ul li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Hotel Reservation System</h1>
        <nav>
            <ul>
                <li><a href="#about">About Us</a></li>
                <li><a href="#rooms">Rooms</a></li>
                <li><a href="#reservation">Reservation</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>Welcome to our hotel reservation system. Learn more about our services and offerings.</p>
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
                        <h3>Royal Palm Resort</h3>
                        <p>Luxury suite with a separate living area, king-sized bed, and premium amenities. Perfect for guests looking for extra space and comfort.</p>
                        <p>The suite also offers a private balcony with stunning views, a work desk, and access to exclusive lounge services.</p>
                        <p><strong>Price: $350 per night</strong></p>
                    </div>
                </div>
                <div class="room">
                    <img src="/images/Pic4.jpg" alt="Family Room">
                    <div class="room-content">
                        <h3>Harmony Bay Hotel</h3>
                        <p>Comfortable room with two queen-sized beds, perfect for families. Enjoy ample space and modern conveniences for a relaxing stay.</p>
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

    <section id="reservation">
        <div class="container">
            <h2>Make a Reservation</h2>
            <form action="#">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="checkin">Check-in Date:</label>
                <input type="date" id="checkin" name="checkin" required>

                <label for="checkout">Check-out Date:</label>
                <input type="date" id="checkout" name="checkout" required>

                <label for="room">Room Type:</label>
                <select id="room" name="room" required>
                    <option value="deluxe">Deluxe Room</option>
                    <option value="suite">Suite Room</option>
                    <option value="family">Family Room</option>
                    <option value="executive">Executive Room</option>
                </select>

                <label for="guests">Number of Guests:</label>
                <input type="number" id="guests" name="guests" min="1" required>

                <label for="requests">Special Requests:</label>
                <textarea id="requests" name="requests"></textarea>

                <button type="submit">Book Now</button>
            </form>
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

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 VERIBOOK. All rights reserved.</p>
            <ul>
                <li><a href="#about">About Us</a></li>
                <li><a href="#rooms">Rooms</a></li>
                <li><a href="#reservation">Reservation</a></li>
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
