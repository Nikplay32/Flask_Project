<?php
    session_start();
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
$result = mysqli_query($db, "SELECT * FROM users WHERE login='$login'"); 
    $myrow = mysqli_fetch_array($result);
    if (empty($myrow['password']))
    {
    
    exit ("Atvainojiet, ievadītais lietotājvārds vai parole ir nepareiza.");
    }
    else {
    
    if ($myrow['password']==$password) {
    
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];
    echo "Jūs esat veiksmīgi ienācis vietnē! <a href='index.php'>Galvenā lapa</a>";
    }
 else {

    exit ("Atvainojiet, ievadītais lietotājvārds vai parole ir nepareiza.");
    }
    }
    ?>