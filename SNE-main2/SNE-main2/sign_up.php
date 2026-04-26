<?php
    $fullname=$_POST["fullname"];
    $email=$_POST["email"];
    $password=$_POST["pw"];
    $confirm_pw=$_POST["confirm-pw"];
    $dob=$_POST["dob"];
    $gender=$_POST["gender"];
    $street=$_POST["street"];
    $city=$_POST["city"];
    $state=$_POST["state"];
    $postal=$_POST["postal"];
?>

<?php
    
        if (!isset($password, $confirm_pw) || $password === '' || $confirm_pw === '') {
            echo 'Password and confirmation are required.';
            exit;
        }
        else if ($password !== $confirm_pw) {
            echo 'Error: Password and confirmation do not match.';
            exit;
        }
        else{
            //make object then go to the home page
        }
?>