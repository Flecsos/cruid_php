<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>

<form action="main.php" method="post" name="form1">
    name:<br>
    <input type="text" name="name" value="micke"><br>
    email:<br>
    <input type="text" name="email" value="Mouse@email.com"><br>
    country:<br>
    <input type="text" name="country_id" value="mouse land"><br><br>
    <input type="submit" value="update" name="update">
    <input type="submit" value="submit" name="cheak_user"><br><br><br>
</form>


<form action="main.php"  method="post" name="form2">

    <?php
    echo"

        <style>
        table, th, td {
            border: 1px solid black;
        }
         </style>
         
        <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>country_id</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        ";

    include_once("config.php");

    if ($result = $mysqli->query("SELECT * FROM `users` MYSQLI_USE_RESULT")) {
        $ar = mysqli_fetch_array($result);
        do {
            echo"
                <form action='main.php' method= 'post' name='form01'>
                <tr >
                <th><input type=\"text\"  name==\"id_user[".$ar['id']."]\" value=\"".$ar['id']."\"></th>
                <th><input type=\"text\" name=\"name\" value=\"".$ar['name']."\"></th>
                <th><input type=\"text\" name=\"email\" value=\"".$ar['email']."\"></th>
                <th><input type=\"text\" name=\"country_id\" value=\"".$ar['country_id']."\"></th>
                <th><input type=\"submit\" value=\"edit\" name=\"edit_user[".$ar['id']."]\" ></th>
                <th><input type=\"submit\" value=\"delete\" name=\"delete_user[".$ar['id']."]\"></th>
                </tr>
                </form>
";

        } while ($ar = mysqli_fetch_array($result));

        $result->close();
    }
    ?>
    </table><br><br><br>
</form>




<form action="main.php"   method="post" name="form4">
        country:<br>
        <input type="text" name="country_s" value="mouse land"><br><br>
         <input type="submit" value="update" name="update">

        <input type="submit" value="submit" name="cheak_land"><br><br>

        <table>
            <tr>
                <th>id</th>

                <th>country</th>
                <th>edit</th>
                <th>delete</th>
            </tr>

<?php

include_once("config.php");

if ($result = $mysqli->query("SELECT * FROM `countries` MYSQLI_USE_RESULT")) {
    $ar = mysqli_fetch_array($result);
    do {
        echo "
          <form action=\"main.php\" method=\"post\" name=\"form02\" >
          <tr >
          <th><input type=\"text\"  name==\"id_country[" . $ar['id'] . "]\" value=\"" . $ar['id'] . "\"></th>
          <th><input type=\"text\" name=\"country\" value=\"" . $ar['country'] . "\"></th>
          <th><input type=\"submit\" value=\"edit\" name=\"edit_country[" . $ar['id'] . "]\" ></th>
          <th><input type=\"submit\" value=\"delete\" name=\"delete_country[" . $ar['id'] . "]\"></th>
      </tr>
      </form>

       ";

    } while ($ar = mysqli_fetch_array($result));

    $result->close();
}


?>

        </center>
<?php

?>
</body>

</html>