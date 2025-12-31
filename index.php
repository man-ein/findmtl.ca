<?php
// index.php (your home page)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>FindMTL.ca</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Helvetica', 'Arial', sans-serif;
            color: #ffffff;
            background: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55)), url('https://media.istockphoto.com/id/478489838/photo/panoramic-picture-of-montreal-cityscape-at-sunset.jpg?s=612x612&w=0&k=20&c=78iWttuKv4r2Qz7U4QhLKnYg3Uy4zUumzNkHTq14DWo=') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            min-height: 100vh;
        }
        /* Container & Spacing */
        .container {
            max-width: 90%;
            width: 100%;
            padding: 160px 20px 60px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            box-sizing: border-box;
        }

        h1 { font-size: 3.5rem; margin-bottom: 20px; letter-spacing: 1px; font-weight: 300; }
        .subtitle { font-size: 1.6rem; margin-bottom: 30px; font-style: italic; opacity: 0.9; }
        p { font-size: 1.2rem; line-height: 1.6; margin-bottom: 40px; opacity: 0.9; max-width: 800px; margin-left: auto; margin-right: auto; }

        /* Social Logos Fixed */
        .social-links {
            margin: 20px 0 40px;
            display: flex;
            justify-content: center;
            gap: 25px;
        }
        .social-links a {
            color: white;
            font-size: 2rem;
            text-decoration: none;
            opacity: 0.8;
            transition: all 0.3s ease;
        }
        .social-links a:hover {
            opacity: 1;
            transform: translateY(-3px);
            color: #3498db;
        }

        .subscribe-form { margin-bottom: 50px; width: 100%; display: flex; justify-content: center; }
        .form-group {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            border-radius: 12px;
            overflow: hidden;
            max-width: 800px;
            width: 100%;
        }
        .subscribe-form input {
            padding: 18px 20px;
            font-size: 1.1rem;
            border: none;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            color: #ffffff;
            flex: 1;
            min-width: 200px;
        }
        .subscribe-form button {
            padding: 18px 40px;
            background-color: #2980b9;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 1.1rem;
            font-weight: bold;
            transition: background 0.4s;
        }

        /* MOBILE FIXES */
        @media (max-width: 768px) {
            .container { 
                padding-top: 180px;
                justify-content: flex-start;
            }
            h1 { font-size: 2.2rem; margin-bottom: 15px; }
            .subtitle { font-size: 1.2rem; margin-bottom: 20px; }
            .form-group { flex-direction: column; background: none; box-shadow: none; overflow: visible; }
            .subscribe-form input, .subscribe-form button { 
                width: 100%; 
                border-radius: 12px !important; 
                margin-bottom: 12px; 
                box-sizing: border-box;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <h1>Welcome to FindMTL.ca</h1>
        <div class="subtitle">Your hub for Montréal's Jewish community</div>
        <p>We're thrilled to be building a warm and welcoming resource just for you!<br>
        Soon you'll be able to easily find synagogues, kosher restaurants, schools, events, organizations, and ways to connect with our vibrant community across Montréal.</p>
        
        <div class="subscribe-form">
            <form action="https://mendye.us5.list-manage.com/subscribe/post?u=f20d6385f7bb834896f8fa2d6&amp;id=edf834306d&amp;f_id=00728ae9f0" method="post" target="_blank" novalidate>
                <div class="form-group">
                    <input type="text" name="FNAME" placeholder="Full Name" required>
                    <input type="email" name="EMAIL" placeholder="Email Address" required>
                    <button type="submit">Keep Me Updated</button>
                </div>
            </form>
        </div>
        
        <div class="social-links">
            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>

    <script>
        function toggleMenu() {
            document.querySelector('.hamburger').classList.toggle('active');
            document.getElementById('navMenu').classList.toggle('active');
        }
        window.onclick = function(event) {
            if (!event.target.closest('.nav-wrapper')) {
                const hamburger = document.querySelector('.hamburger');
                const menu = document.getElementById('navMenu');
                if (hamburger && hamburger.classList.contains('active')) {
                    hamburger.classList.remove('active');
                    menu.classList.remove('active');
                }
            }
        }
    </script>
</body>
</html>
