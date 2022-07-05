<!DOCTYPE html>
<html lang="nl">
<head>
    <?php require_once '../head.php' ?>
</head>
<body>
    <?php require_once '../header.php' ?>
    <main>
        <div class="Form_Container">
        <div class="form-style-3">
            <form action="../backend/createController.php" method="POST">
                <fieldset><legend>Create</legend>
                <label for="field1"><span>Omgeving <span class="required">*</span></span><input type="text" class="input-field" name="Omgeving" value="" /></label>
                <label for="field2"><span>Prijs <span class="required">*</span></span><input type="number" class="input-field" name="Prijs" value="" /></label>
                <label for="field3"><span>Formaat <span class="required">*</span></span><input type="number" class="input-field" name="Formaat" value="" /></label>
                <label for="field5"><span>Slaapkamers <span class="required">*</span></span><input type="number" class="input-field" name="Slaapkamers" value="" /></label>
                <label for="field6"><span>Gasten <span class="required">*</span></span><input type="number" class="input-field" name="Gasten" value="" /></label>
                </fieldset>
                <fieldset><legend>Image</legend>
                <label for="field6"><span>Image <span class="required">*</span></span><input type="file" name="Image" ></label>
                <label><span> </span><input type="submit" value="Submit" /></label>
                </fieldset>
            </form>
        </div>
        </div>
    </main>
    <?php require_once '../footer.php' ?>
</body>
</html>