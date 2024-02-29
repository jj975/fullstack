<?php
// Підключення до бази даних
$servername = "mysql";
$username = "user";
$password = "resu";
$dbname = "site_db";
$table = "data_form";

$conn = new mysqli($servername, $username, $password, $dbname);

// Перевірка підключення
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Отримання даних з форми
$name = $_POST['Name'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$message = $_POST['Message'];

// Збереження даних у базі даних (приклад, може бути модифіковано)
$sql = "INSERT INTO $table (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

/*//debug
if ($conn->query($sql) === TRUE) {
    echo "Record added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Закриття з'єднання з базою даних*/
$conn->close();
header("Location: index.php");
?>



