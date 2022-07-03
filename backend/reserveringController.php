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

    if(empty($email) and empty($datum) and empty($personen) and empty($adress) and empty($straatnaam) and empty($nummer) and empty($vraag) )
    {   // error message
        $_SESSION["error_reservatie"] = "Er is iets mis gegaan contacteer ons of probeer opnieuw";
        header("location: http://localhost/$base_url/reserveren.php");
    }
    //1. Verbinding
    require_once 'conn.php';
    //2. Query
    $query = "INSERT INTO reserveren(email,datum,personen,adress,straatnaam,nummer,vraag,order_number) VALUES(:email,:datum,:personen,:adress,:straatnaam,:nummer,:vraag,:order_number)";
    //3. Prepare
    $statement=$conn->prepare($query);
    //4. Execute
    $statement->execute
    ([
        ":email" => $email,
        ":datum" => $datum,
        ":datum" => $datum,
        ":personen" => $personen,
        ":adress" => $adress,
        ":straatnaam" => $straatnaam,
        ":nummer" => $nummer,
        ":order_number" => $order_number
    ]);

    header("location: http://localhost/$base_url/index.php");
    exit;
}

?>