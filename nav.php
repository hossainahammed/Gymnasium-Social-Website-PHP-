
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feed Form</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }
    header {
    background-color: #1a1a1a;
    padding: 10px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.logo{
    margin-right:10px;
}

.logo img {
    max-width: 150px;
    height: 70px;
}

.marquee-container {
    background-color: #e91e63;
    color: white;
    padding: 10px;
    overflow: hidden;
    flex-grow: 1;
    min-width: 0;
    white-space: nowrap;
    text-align: center;
    border-radius: 5px;
}

.marquee-container h1 {
    animation: marquee 20s linear infinite;
    display: inline-block;
    padding-left: 100%;
}

@keyframes marquee {
    from { transform: translateX(100%); }
    to { transform: translateX(-100%); }
}

.login-dropdown {
    position: relative;
}

.login-button {
    background-color: #e91e63;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    margin-left: 10px;
}

.login-dropdown-content {
    display: none;
    position: absolute;
    top: 40px;
    right: 0;
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    width: 250px;
}

.login-dropdown:hover .login-dropdown-content {
    display: block;
}

.login-dropdown-content input,
.login-dropdown-content button {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
}
    .nav {
    background: #222;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 30px;
}
.nav .search {
    position: relative;
    display: flex;
    align-items: center;
}
.nav .search input {
    padding: 5px 15px;
    border-radius: 15px;
    border:1px solid #ccc;
    outline: none;
}

.nav .link a {
    color: white;
    margin-left: 20px;
    text-decoration: none;
    font-weight: bold;
}

    .nav .search button {
    position: absolute;
    right: 5px; 
    border: none;
    background: none; 
    color: #e91e63; 
    font-size: 16px;
    cursor: pointer;
    padding: 5px; 
}


.nav .search button:hover {
    color: #d81b60; 
}
    
  </style>
</head>
<body>
    <header>
       
        <div class="logo">
          <img src="assets/images/Logo.jpeg" alt="Gym Logo">
        </div>
        <div class="marquee-container">
            <h1>Welcome to Sea View Gym — Book Your Slot Now at Affordable Rates!</h1>
        </div>
        <div class="login-dropdown">
            <div class="login-button">LOG-IN</div>
            <div class="login-dropdown-content">
                <input type="text" placeholder="ID Number">
                <input type="password" placeholder="Password">
                <button>Submit</button>
                <button><a href="Sign-in.html" style="color:white; text-decoration:none">Sign-Up</a></button>
            </div>
        </div>
  
    </header>

  <div class="nav">
    <div class="title"><h1>Sea View</h1></div>
    <div class="search">
        <form action="search.php" method="get">
            <input type="text" name="token" placeholder="Search...">
            <button type="submit">🔍</button>
        </form>
</div>

    <div class="link">
        <a href="index.php">Create</a>
        <a href="list.php">Feed</a>
        <a href="login.php">Home</a>
        <a href="#">About</a>
        <a href="#">Trainers</a>
        <a href="#">Contact</a>
    </div>
</div>

   
  </div>
</body>
</html>
