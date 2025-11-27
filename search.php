<?php
include 'connect.php';
$token = $_GET['token'];
$query = "SELECT * FROM feed WHERE username LIKE '%$token%'";
$run = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Search Results</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'nav.php'; ?>

<h2 style="text-align:center; margin-top: 20px;">Search Results for "<em><?= htmlspecialchars($token) ?></em>"</h2>

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
       <div class="table">
          <table>
            <tr>
              <th>ID</th>
              <th>Username</th>
              <th>Post</th>
              <th>Actions</th>
            </tr>
            <?php if(mysqli_num_rows($run) > 0): ?>
              <?php while($row = mysqli_fetch_assoc($run)): ?>
                <tr>
                  <td><?= $row['id'] ?></td>
                  <td><?= htmlspecialchars($row['username']) ?></td>
                  <td><?= nl2br(htmlspecialchars($row['posts'])) ?></td>
                  <td>
                    <a href="update.php?id=<?= $row['id'] ?>">Update</a> 
                    <a href="delete.php?id=<?= $row['id'] ?>" class="del" onclick="return confirm('Are you sure?')">Delete</a>
                  </td>
                </tr>
              <?php endwhile; ?>
            <?php else: ?>
              <tr><td colspan="4">No results found.</td></tr>
            <?php endif; ?>
          </table>
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
