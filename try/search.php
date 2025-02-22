<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usersearch = $_POST["usersearch"];

    try {
      require_once "include/db.php";
      $query = "SELECT * FROM comments WHERE username = :usersearch;";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":usersearch", $usersearch);

    $stmt->execute();

    $result = $stmt->fetchALL(PDO::FETCH_ASSOC);

    $pdo = null;
    $stmt = null;
    } catch (PDOException $e) {
      die("Query failed:" . $e->getMessage());
    }
  }
  else {
    header("Location:index.php");
  }

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

  <section>

  <h3>Search result:</h3>

  <?php
    if (empty($result)){
      echo "<div>";
      echo "<p>There were no result!</p>";
      echo "</div>";
    }
    else{
      foreach ($result as $row){
        echo "<div>";
        echo "<h4>" . htmlspecialchars($row["username"]) . "</h4>";
        echo "<p>" . htmlspecialchars($row["comments_text"]) . "</p>";
        echo "<p>" . htmlspecialchars($row["created_at"]) . "</p>";
        echo "</div>";
      }
    }
  ?>

  </section>
</body>
</html>
