<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Formulário PHP</title>
    </head>
    <body>
        <h1>Manuseio de Formulário com PHP</h1>
        <h2>Referências:</h2>
        <ul>
            
            <li><a href="http://www.w3schools.com/php"> W3Schools</a></li>
            
            <li><a href="http://php.net/"> Manual do PHP</a></li>
            
        </ul>
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        
        Name: <input type="text" name="name"> <br />
        E-mail: <input type="text" name="email"> <br />
        Website: <input type="text" name="website"> <br />
        Comment: <textarea name="comment" rows="5" cols="40"></textarea> <br />

        Gender: <br />
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <br />
        
        <input type="submit" value=".:Enviar:." />
        
        </form>
        
        <?php

        $name = $email = $gender = $comment = $website = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
        }

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
        ?>
        
    </body>
</html>