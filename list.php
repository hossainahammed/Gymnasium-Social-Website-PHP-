<?php
include 'connect.php';
$query = "SELECT * FROM feed ORDER BY id DESC";
$run = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Posts</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php include 'nav.php' ?>
<h2 style="text-align:center; margin-top: 15px;">User Posts</h2>

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
        <div class="cards">
            <?php while($row = mysqli_fetch_assoc($run)){ ?>
            <div class="card">
                <div class="content">
                    <h4>Username:<?= htmlspecialchars($row['username']) ?></h4>
                    <p><b>Posts:</b><?= nl2br(htmlspecialchars($row['posts'])) ?></p>
                </div>
                <div class="action">
                    <a href="update.php?id=<?= $row['id'] ?>">Update</a> |
                    
                    <a href="delete.php?id=<?= $row['id'] ?>"class="del" onclick="return confirm('Are you sure to delete?')">Delete</a>
                </div>
            </div>
            <?php } ?>
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
