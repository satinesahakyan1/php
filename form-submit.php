<?php
    // var_dump($_REQUEST);
    // var_dump($_GET);
    // var_dump($_POST);
   

    // if(isset($_POST['first_name']) && $_POST['first_name'] != "") {
    //     echo "<p>{$_POST['first_name']}</p>";
    // } else {
    //      echo "<p>FIRST NAME IS REQUIRED</p>";
    // }

session_start();
$errors = [];
$old = [];

$required_fields = [
    "first_name","last_name","email","password",
    "confirm_password","username","phone",
    "birthdate","address"
];
if (!preg_match("/^[a-zA-Zա-ֆԱ-Ֆ]+$/u", $_POST['first_name'])) {
    $errors['first_name'] = "Only letters are allowed";
}
if (!preg_match("/^[a-zA-Zա-ֆԱ-Ֆ]+$/u", $_POST['last_name'])) {
    $errors['last_name'] = "Only letters are allowed";
}
if(!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/",$_POST['email'])) {
    $errors['email'] = "Invalid email format";
}
if(!preg_match("/^\+374 \d{2} \d{3} \d{3}$/",$_POST['phone'])) {
    $errors['phone'] = "Phone must be in +374 00 000 000 format";
}
if($_POST['password'] !== $_POST['confirm_password']) {
    $errors['confirm_password'] = "Passwords do not match";
}
$birth = new DateTime($_POST['birthdate']);
$today = new DateTime();
$diff = $today ->diff($birth);
$age = $diff -> y;
if($age <18) {
    $errors['birthdate'] = "You must be 18 or older";
}
foreach($required_fields as $field) {
    if(empty($_POST[$field])) {
        $errors[$field] = "This field is required";
    }
}




if(!empty($errors)) {
    $_SESSION['errors'] = $errors;
        $_SESSION['old'] = $_POST;   
    header("Location: index.php");
    exit;
}

echo "Form submited successfully!";
?>