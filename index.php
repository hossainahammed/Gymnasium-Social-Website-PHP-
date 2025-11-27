<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'nav.php' ?>
    
    <div class="Main-Box">
   
        <div class="Side-Bar1">
            <h3>Member Tools</h3>
            <hr>
            <ul>
                <li><a href="#">🏋️ My Workout Plans</a></li>
                <li><a href="#">📅 Class Schedule</a></li>
                <li><a href="#">📊 Progress Tracker</a></li>
                <li><a href="#">💳 Membership Details</a></li>
                <li><a href="#">📥 Download Diet Plan</a></li>
            </ul>
        </div>

    
        <div class="Data_Box">
               
                <div class="form">
                    <form action="code.php" method="post">
                        <input type="text" name="uname" placeholder="Enter your username">
                        <br><br>
                        <textarea name="posts" cols="30" rows="10" placeholder="What's on your mind?"></textarea>
                        <br><br>
                        <input type="submit" value="Share" class="share-btn">
                    </form>
                </div>
        </div>
    
        <div class="Side-Bar2">
            <h3>Quick Access</h3>
            <hr>
            <ul>
                <li><a href="#">🔥 Current Offers</a></li>
                <li><a href="#">👨‍🏫 Meet Our Trainers</a></li>
                <li><a href="#">📞 Contact Support</a></li>
                <li><a href="#">❓ FAQs</a></li>
                <li><a href="#">⚙️ Account Settings</a></li>
            </ul>
        </div>
    </div>

   <div class="contact">
        <h2>Contact Us</h2>
        <form>
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <textarea rows="5" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>

    <div class="footer">
        <p>&copy; 2025 Sea View Gym. All Rights Reserved.</p>
    </div>

</body>
</html>