
<?php
include_once 'connect.php';
// Fetch the data after clicking on sign up button
if (isset($_POST['signup'])) {
    /** fetch data from reg form and prevent theme from sql injection */
    $email = mysqli_escape_string($conn, $_POST['email']);
    // md5 is encryted password
    $password = mysqli_escape_string($conn, md5($_POST['password']));
    $dob = mysqli_escape_string($conn, $_POST['date']);
    /** Insert Query */
    $sql = "INSERT INTO user (email,password,dob) VALUES ('$email','$password','$dob')";
    /** Execute insert sql */
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header('location:insert.php');
        echo "<script> alert('You are successfully registered')</script>";
    } else {
        echo "<script> alert('Something Went Wrong')</script>" . mysqli_error($conn);
    }
}
?>
<?php
include 'signup.php';
?>