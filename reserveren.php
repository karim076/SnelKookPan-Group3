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
        <div class="inBetween">
            <div>
                <form class="form-style-7">
                    <label>Reservatie</label>
                    <ul>
                        <li>
                            <label for="gasten">Aantal personen</label>
                            <input type="number" max="<?php echo $_POST['personen'] ?>" name="gasten" required>
                            <span>Vul het aantal mensen die het huis gaan bezoeken</span>
                        </li>
                        <li>
                            <label for="datepick">Datum</label>
                            <input name="datepick" type="text" id="datetimerange-input1" size="24" style="text-align:center" min="<?php echo date("d-m-Y") ?>" max="<?php echo date("01-07-2022") ?>" required>
                            <span>Waneer wilt u het huis huren</span>
                            <script>
                                window.addEventListener("load", function (event) {
                                new DateRangePicker('datetimerange-input1');
                            });
                            </script>
                        </li>
                        <li>
                            <label for="question">Vragen</label>
                            <!-- <input type="question" name="question" maxlength="100"> -->
                            <textarea name="question" rows="5" cols="50"></textarea>
                            <span>Enter a valid email address</span>
                        </li>
                    </ul>
                </form>
            </div>
            <div>
                <form class="form-style-7">
                    <label>Contact</label>
                    <ul>
                        <li>
                            <label for="Adres">Adress</label>
                            <input type="number"  name="Adres" required>
                            <span>Vul hier uw adress in</span>
                        </li>
                        <li>
                            <label for="streetname">Straatnaam</label>
                            <input name="streetname" type="text" required>
                            <span>Vul hier uw straatnaam</span>
                        </li>
                        <li>
                            <label for="number">Telefoon nummer</label>
                            <input type="number" name="question">
                            <span>Uw telefoon nummer hier invullen</span>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
        <form method="POST" action="backend/reserveringController.php">
    </main>
    <script type="text/javascript">
        //auto expand textarea
        function adjust_textarea(h) {
            h.style.height = "20px";
            h.style.height = (h.scrollHeight)+"px";
        }
    </script>
    <?php require_once 'footer.php'; ?>
</body>
</html>