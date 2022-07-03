<?php
if($_POST['reserveren'] == "reserveren")
{
    session_start();
    $email = $_SESSION['email'];
    $datum = $_POST[''];
    $personen = $_POST[''];
    $_POST[''];
    $_POST[''];
    $_POST[''];
    $_POST[''];

    if(empty($dates))
    {
        $errors[] = "Vul een datum in!";
    }

    if(empty($duration))
    {
        $errors[] = "Vul een duur in!";
    }

    if(empty($department))
    {
        $errors[] = "Vul een afdeling in!";
    }

    //Evt. errors dumpen
    if(isset($errors))
    {
        var_dump($errors);
        die();
    }
    //1. Verbinding
    require_once 'conn.php';
    //2. Query
    $query = "INSERT INTO logs(user,dates,duration,department) VALUES(:user,:dates,:duration,:department)";
    //3. Prepare
    $statement=$conn->prepare($query);
    //4. Execute
    $statement->execute
    ([
        ":user" => $user,
        ":dates" => $dates,
        ":duration" => $duration,
        ":department" => $department
    ]);

    header("location: http://localhost/Tweede%20Periode/H13_Timesheed/index.php");
    exit;
}

?>