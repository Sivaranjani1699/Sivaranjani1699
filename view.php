<?php
include('dbcon.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>View User</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">View User</h2>
        <table class="table table-bordered">
            <tr>
                <th>First Name</th>
                <td><?php echo $user['first_name']; ?></td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td><?php echo $user['last_name']; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $user['email']; ?></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><?php echo $user['phone']; ?></td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td><?php echo $user['dob']; ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo $user['address']; ?></td>
            </tr>
            <tr>
                <th>City</th>
                <td><?php echo $user['city']; ?></td>
            </tr>
            <tr>
                <th>State</th>
                <td><?php echo $user['state']; ?></td>
            </tr>
            <tr>
                <th>Zip Code</th>
                <td><?php echo $user['zip']; ?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><?php echo $user['gender']; ?></td>
            </tr>
            <tr>
                <th>Company</th>
                <td><?php echo $user['company']; ?></td>
            </tr>
        </
