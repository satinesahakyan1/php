<?php 
session_start();
$errors = $_SESSION['errors'] ?? [];
$old = $_SESSION['old'] ?? [];
unset($_SESSION['errors'],$_SESSION['old']);
?>
<style>
    body {
    font-family: Arial, sans-serif;
    background: #f0f2f5;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    margin: 0;
    padding-top: 40px;
}


    form {
        background: white;
        width: 380px;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    label {
        display: block;
        margin-top: 12px;
        margin-bottom: 5px;
        font-weight: 600;
        color: #444;
    }

    input, select, textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
    }

    textarea {
        height: 80px;
        resize: none;
    }

    button {
        margin-top: 18px;
        width: 100%;
        padding: 12px;
        background: #4a90e2;
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
        transition: 0.2s;
    }

    button:hover {
        background: #357ac8;
    }
</style>

<form method="post" action="./form-submit.php">
    <h2>Registration Form</h2>

    <label>First Name</label>
    <input type="text" 
    name="first_name"
    value="<?=  $old['first_name'] ?? '' ?>"
    style="border: <?= isset($errors['first_name']) ? "2px solid red" : "" ?>" >
    <?php if(isset($errors['first_name'])): ?>
        <p style="color:red; margin:5px 0;"><?= $errors['first_name'] ?></p>
    <?php endif; ?>

    <label>Last Name</label>
    <input type="text" name="last_name"
    value="<?=  $old['last_name'] ?? '' ?>"
    style="border: <?= isset($errors['last_name']) ? "2px solid red" : "" ?>" > 
    <?php if(isset($errors['last_name'])): ?>
        <p style="color:red; margin:5px 0;"><?= $errors['last_name'] ?></p>
    <?php endif; ?>

    <label>Email</label>
    <input type="text" name="email" 
    value="<?=  $old['email'] ?? '' ?>"
    style="border: <?= isset($errors['email']) ? "2px solid red" : "" ?>" >
    <?php if(isset($errors['email'])){ ?>
        <p style="color:red; margin:5px 0;"><?= $errors['email'] ?></p>
    <?php } ?>

    <label>Password</label>
    <input type="password" name="password"
    value="<?=  $old['password'] ?? '' ?>"
    style="border: <?= isset($errors['password']) ? "2px solid red" : "" ?>" > 
    <?php if(isset($errors['password'])){ ?>
        <p style="color:red; margin:5px 0;"><?= $errors['password'] ?></p>
    <?php } ?>

    <label>Confirm Password</label>
    <input type="password" name="confirm_password" 
    value="<?=  $old['confirm_password'] ?? '' ?>"
    style="border: <?= isset($errors['confirm_password']) ? "2px solid red" : "" ?>" >
    <?php if(isset($errors['confirm_password'])){ ?>
        <p style="color:red; margin:5px 0;"><?= $errors['confirm_password'] ?></p>
    <?php } ?>
    
    <label>Username</label>
    <input type="text" name="username"
    value="<?=  $old['username'] ?? '' ?>"
    style="border: <?= isset($errors['username']) ? "2px solid red" : "" ?>" >
    <?php if(isset($errors['username'])){ ?>
        <p style="color:red; margin:5px 0;"><?= $errors['username'] ?></p>
    <?php } ?>
    
    <label>Phone</label>
    <input type="tel" name="phone"
    value="<?=  $old['phone'] ?? '' ?>"
    style="border: <?= isset($errors['phone']) ? "2px solid red" : "" ?>" >
    <?php if(isset($errors['phone'])){ ?>
        <p style="color:red; margin:5px 0;"><?= $errors['phone'] ?></p>
    <?php } ?>

    <label>Birth Date</label>
    <input type="date" name="birthdate"
    value="<?=  $old['birthdate'] ?? '' ?>"
    style="border: <?= isset($errors['birthdate']) ? "2px solid red" : "" ?>" >
    <?php if(isset($errors['birthdate'])){ ?>
        <p style="color:red; margin:5px 0;"><?= $errors['birthdate'] ?></p>
    <?php } ?>

    <label>Gender</label>
    <select name="gender">
        <option value="male" <?= ($old['gender'] ?? '') == 'male' ? 'selected' : '' ?>>Male</option>
        <option value="female" <?= ($old['gender'] ?? '') == 'female' ? 'selected' : '' ?>>Female</option>
        <option value="other" <?= ($old['gender'] ?? '') == 'other' ? 'selected' : '' ?>>Other</option>
    </select>

    <label>Address</label>
<textarea name="address"
    style="border: <?= isset($errors['address']) ? "2px solid red" : "" ?>">
<?= $old['address'] ?? '' ?>
</textarea>

<?php if(isset($errors['address'])){ ?>
    <p style="color:red; margin:5px 0;"><?= $errors['address'] ?></p>
<?php } ?>
    <button type="submit">Register</button>
</form>



<?php
// session_start();
// $errors = $_SESSION['errors'] ?? [];
// unset($_SESSION['errors']);
//Խնդիր 1
// $price = 12.36654;
// $rounded = round($price,2);
// $ceiled = ceil($price);
// $floored = floor($price);

// echo $rounded ;
// echo "\n",$ceiled;
// echo "\n",$floored,"\n";

// //Խնդիր2
// $randInt = rand(1,100);
// $randFloat = mt_rand() / mt_getrandmax();
// $numbers = [];
// for($i = 0; $i <5;$i++) {
//     $numbers[] = rand(1,100);
// }

// $max = max($numbers);
// $min = min($numbers);

// echo $randInt,"\n",$randFloat,"\n",$max,"\n",$min,"\n";

// //Խնդիր 3
// $num2 = 8.3;
// $num1 = -15.7;

// echo(abs($num1) . "\n");
// echo(abs($num2) . "\n");
// echo(pow($num1,2) . "\n");
// echo(sqrt($num2) . "\n");
// echo(pow($num1,$num2) . "\n");

// //Խնդիր 4
// $text = " Hello World ";
// $trimed = trim($text);
// $upper = strtoupper($text);
// $lower = strtolower($text);
// $length = strlen($text);

// echo "$trimed\n";
// echo "$upper\n";
// echo "$lower\n";
// echo "$length\n";

// #խնդիր 5
// $sentence = "I love JavaScript, JavaScript is great";
// echo str_replace("JavaScript","PHP",$sentence) . "\n";
// echo strpos($sentence,"JavaScript") . "\n";
// echo str_contains($sentence,"love") . "\n";
// echo substr_count($sentence,"JavaScript") . "\n";

// #Խնդիր 6 
// $email = "user@example.com";
// $parts = explode("@",$email);
// echo "$parts[0]" . "\n" . "$parts[1]". "\n";
// $combined = $parts[0] . "at" . $parts[1];
// echo $combined . "\n";
// echo strrev($email) . "\n";
// echo substr($email,-4);

// #Խնդիր 7

// function getInitials($fullName) {
//     $parts = explode(" ", trim($fullName));

//     $initials = "";
//     foreach ($parts as $part) {
//         if ($part !== "") {
//             $initials .= strtoupper($part[0]) . ".";
//         }
//     }

//     return $initials;
// }

// echo getInitials("john smith"); 

?>




