<!DOCTYPE html>
<html lang="nl">
<head>
    <?php require_once 'head.php'; ?>
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/gh/alumuko/vanilla-datetimerange-picker@latest/dist/vanilla-datetimerange-picker.css">
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/gh/alumuko/vanilla-datetimerange-picker@latest/dist/vanilla-datetimerange-picker.js"></script>
</head>
<body class="bg">
    <?php require_once 'header.php'; ?>
    <main>
        <div class="errorMessage">
            <?php // Controlle of er een error fout is bij een indirectie.
            if (isset($_SESSION["error_reservatie"]))
            {
                echo "<div class='msgReservatie'><p>", $_SESSION["error_reservatie"], "</p></div>";
            }?>
            <div class="msgReservatie">Er is iets mis gegaan contacteer ons of probeer opnieuw</div>
        </div>
        <form method="POST" action="backend/reserveringController.php" id="reserveren" class="form-style-7">
            <div class="inBetween">
                <div class="space">
                        <label>Reservatie:</label>
                        <ul>
                            <li>
                                <label for="gasten">Aantal personen</label>
                                <input type="number" max="<?php echo $_POST['personen'] ?>" name="personen" required>
                                <span>Vul het aantal mensen die het huis gaan bezoeken</span>
                            </li>
                            <li>
                                <label for="datepick">Datum</label>
                                <input name="datum" type="text" id="datetimerange-input1" size="24" style="text-align:center" min="<?php echo date("d-m-Y") ?>" max="<?php echo date("01-07-2022") ?>" required>
                                <span>Waneer wilt u het huis huren</span>
                                <script>//range picker in js
                                    window.addEventListener("load", function (event) {
                                    new DateRangePicker('datetimerange-input1');
                                });
                                </script>
                            </li>
                            <li>
                                <label for="question">Vragen</label>
                                <textarea name="vraag" rows="3" cols="50"></textarea>
                                <span>Enter a valid email address</span>
                            </li>
                        </ul>
                </div>
                <div class="space">
                    <label>Contact:</label>
                    <ul>
                        <li>
                            <label for="Adres">Adress</label>
                            <input type="text"  name="Adres" required>
                            <span>Vul hier uw adress in</span>
                        </li>
                        <li>
                            <label for="streetname">Straatnaam</label>
                            <input name="streetname" type="text" required>
                            <span>Vul hier uw straatnaam</span>
                        </li>
                        <li>
                            <label for="number">Telefoon nummer</label>
                            <input type="number" name="number">
                            <span>Uw telefoon nummer hier invullen</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
            <button type="submit" value="reserveren">Verzenden</button>
            </div>
        </form>
    </main>

    <script type="text/javascript">// voor het datum groote
        //auto expand textarea
        function adjust_textarea(h) {
            h.style.height = "20px";
            h.style.height = (h.scrollHeight)+"px";
        }
    </script>
    <?php require_once 'footer.php'; ?>
</body>
</html>