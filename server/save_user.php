<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }

 if (empty($login) or empty($password)) 
    {
    exit ("Jūs neievadījāt visu informāciju, atgriezieties un aizpildiet visus laukus!");
    }

    $login = stripslashes($login);
    $login = htmlspecialchars($login);
 $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $login = trim($login);
    $password = trim($password);
    include ("bd.php");
 $result = mysqli_query($db, "SELECT id FROM users WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Atvainojiet, jūsu ievadītais lietotājvārds jau ir reģistrēts. Ievadiet citu pieteikšanās vārdu.");
    }
 
    $result2 = mysqli_query ($db, "INSERT INTO users (login,password) VALUES('$login','$password')");
    
    if ($result2=='TRUE')
    {
    echo "Jūs esat veiksmīgi reģistrējies! Tagad jūs varat ievadīt vietni. <a href='index.php'>Galvenā lapa</a>";
    }
 else {
    echo "Kļūda! Jūs neesat reģistrēts.";
    }
    ?>