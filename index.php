<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Formulário PHP</title>
        <style> 
            .err{
                outline: 1px dashed red;
                background-color: rgba (255,0,0,0.2);
            }
        </style>
    </head>
    <body>
        <h1>Manuseio de Formulário com PHP</h1>
        <h2>Referências:</h2>
        <ul>
            
            <li><a href="http://www.w3schools.com/php"> W3Schools</a></li>
            
            <li><a href="http://php.net/"> Manual do PHP</a></li>
            
        </ul>
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        
        Nome: <input type="text" name="name" class="<?php isset($nameErr)?"err":"";?>"> <br />
        E-mail: <input type="text" name="email"> <br />
        Website: <input type="text" name="website"> <br />
        Mensagem: <textarea name="comment" rows="5" cols="40"></textarea> <br />

        Gênero: <br />
        <input type="radio" name="gender" value="female">Feminino
        <input type="radio" name="gender" value="male">Masculino
        <br />
        
        <input type="submit" value=".:Enviar:." />
        
        </form>
        
       <?php
        $name = $email = $gender = $comment = $website = "";

      
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
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