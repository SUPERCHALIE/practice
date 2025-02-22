<?php
  include('include/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Account Management</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <div class="container colorful">
    <h2>Account Management</h2>
    
    <div class="form-container colorful-box">
      <h3>Register Account</h3>
      <form action="include/formerhandler.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="pwd" placeholder="Password" required>
        <input type="email" name="email" placeholder="Email" required>
        <button class="btn signup colorful-btn">Signup</button>
      </form>
    </div>
    
    <div class="form-container colorful-box">
      <h3>Change Account</h3>
      <form action="include/userupdate.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="pwd" placeholder="Password" required>
        <input type="email" name="email" placeholder="E-Mail" required>
        <button class="btn update colorful-btn">Update</button>
      </form>
    </div>
    
    <div class="form-container colorful-box">
      <h3>Delete Account</h3>
      <form action="include/userdelete.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="pwd" placeholder="Password" required>
        <button class="btn delete colorful-btn">Delete</button>
      </form>
    </div>

    <div class="form-container colorful-box">
      <h3>Search User Account</h3>
      <form action="search.php" method="post">
        <label for="search">Search for user:</label>
        <input id="search" type="text" name="usersearch" placeholder="Search...">
        <button class="btn delete colorful-btn">Search</button>
      </form>
      
    </div>
  </div>

</body>
</html>
