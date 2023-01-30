<?php
    session_start();
    ?>
    <html>
    <head>
    <title>Galvenā lapa</title>
    </head>
    <body>
    <h2>Galvenā lapa</h2>
    <form action="testreg.php" method="post">
 <p>
    <label>Jūsu logins:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>

    <p>

    <label>Jūsu parole:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>

    <p>
    <input type="submit" name="submit" value="Ielagoties">
    <a href="http://localhost/static/server/admin.login.php"> admina lapa</a>

<br>
<a href="reg.php">Reģistrēties</a> 
    </p></form>
    <br>
    <?php
    
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    
    echo "Jūs pievienojāties kā viesis<br><a href='#'>Šī saite ir pieejama tikai reģistrētiem lietotājiem</a>";
    }
    else
    {

    
    echo "Jūs esat ielagojaties kā ".$_SESSION['login']."<br><a  href='http://localhost/home_page.html'> Šī saite ir pieejama tikai reģistrētiem lietotājiem</a>";
    }
    ?>
    </body>
    </html>