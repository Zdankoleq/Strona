<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uzytkownicy</title>
</head>
<body>
    <h1>Uzytkownicy</h1>
    <?php
    require_once "../scripts/connect.php";  
    //echo $conn->connect_errno;
    $sql = "SELECT * FROM `users`;";
    $result = $conn->query($sql);
    //$user = $result->fetch_all();
    //print_r($user);
    while($user = $result->fetch_assoc()){
        $year = substr($user["birthday"], offset:0, length:4);
        echo<<<USERS
        Imie i nazwisko: 
        $user[firstName]   $user[lastName]</br>
        Data Urodzenia: $user[birthday] <br>
        Rok Urodzenia: $year;
        <hr>

        USERS;
    }
    ?>
</body>
</html>