<?php
// **Start user session:**
// - Initiate session management using session_start()
// **Require necessary files:**
// **Process login form submission:**
// **Establish database connection:**
// **Construct SQL query for admin authentication:**
// **Handle authentication result:**

session_start();
//require_once('vote_access.php');
require_once('database.php');
require_once('vote_access.php');

$conn = db_connect();

if (isset($_POST["Submit"])){

    $name = $_POST["email"];
    $password = $_POST["password"];

    $sql_query = "SELECT * FROM Resident WHERE
    Email = '$name' AND Password = '$password'";
    $result = $conn->query($sql_query);

    if ($result->num_rows > 0){
        $row = $result->fetch_assoc();

        $_SESSION['name'] = $row['FirstName'];
        echo "Welcome back,  " . $_SESSION['name'] . "!";
        header("Location: cast_vote.php");
        exit;
    } else {
      echo "Username or password error";
    }
}
