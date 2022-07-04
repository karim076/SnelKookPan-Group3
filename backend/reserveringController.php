<?php
if($_POST['reserveren'] == "reserveren")
{
    session_start();
    $email = $_SESSION['email'];
    $datum = $_POST['datum'];
    $personen = $_POST['personen'];
    $adress = $_POST['adress'];
    $straatnaam = $_POST['straatnaam'];
    $nummer = $_POST['nummer'];
    $vraag = $_POST['vraag'];
    $order_number = rand(100,1000) + rand(10,10000);

    if(!isset($email) and !isset($datum) and !isset($personen) and !isset($adress) and !isset($straatnaam) and !isset($nummer) and !isset($vraag) )
    {   // error message
        $_SESSION["error_reservatie"] = "Er is iets mis gegaan contacteer ons of probeer opnieuw";
        header("location: ../reserveren.php");
        exit;
    }
    //1. Verbinding
    require_once 'conn.php';
    //2. Query
    $query = "INSERT INTO reservering(email,datum,personen,adress,straatnaam,nummer,vraag,order_number) VALUES(:email,:datum,:personen,:adress,:straatnaam,:nummer,:vraag,:order_number)";
    //3. Prepare
    $statement=$conn->prepare($query);
    //4. Execute
    $statement->execute
    ([
        ":email" => $email,
        ":datum" => $datum,
        ":personen" => $personen,
        ":adress" => $adress,
        ":straatnaam" => $straatnaam,
        ":nummer" => $nummer,
        ":vraag" => $vraag,
        ":order_number" => $order_number
    ]);

    header("location: ../index.php");
    exit;
}

?>