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
    // $Image = $_POST['Image'];
    // if(empty($Image))
    // {
    //     $errors[] = "Vul een Image in";
    // }
    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["Image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["Image"]["tmp_name"]);
        if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
        } else {
          echo "File is not an image.";
          $uploadOk = 0;
        }
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["Image"]["name"])). " has been uploaded.";
        } else {
        echo "Sorry, there was an error uploading your file.";
        }
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