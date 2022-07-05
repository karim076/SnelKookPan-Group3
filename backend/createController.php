<?php 
    $Omgeving = $_POST['Omgeving'];
    if(empty($Omgeving))
    {
        $errors[] = "Vul een Omgeving in";
    }
    //
    $Prijs = $_POST['Prijs'];
    if(empty($Prijs))
    {
        $errors[] = "Vul een Formaat in";
    }
    $Formaat = $_POST['Formaat'];
    if(empty($Formaat))
    {
        $errors[] = "Vul een Formaat in";
    }
    //
    $Slaapkamers = $_POST['Slaapkamers'];
    if(empty($Slaapkamers))
    {
        $errors[] = "Vul een aantal Slaapkamers in";
    }
    //Gasten
    $Gasten = $_POST['Gasten'];
    if(empty($Gasten))
    {   
        $errors[] = "Vul een aantal Gasten in";
    }
    $Image = $_POST['Image'];
    if(empty($Image))
    {
        $errors[] = "Vul een Image in";
    }
    //
    
    require_once 'conn.php';
    $query = "INSERT INTO huisinfo (Omgeving, Formaat, Slaapkamers, Gasten, Prijs) VALUES(:Omgeving, :Formaat, :Slaapkamers, :Gasten, :Prijs)";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":Omgeving" => $Omgeving,
        ":Prijs" => $Prijs,
        ":Formaat" => $Formaat,
        ":Slaapkamers" => $Slaapkamers,
        ":Gasten" => $Gasten
        ]);
    // header("Location:../Task/index.php?msg=Taak opgeslagen");

?>