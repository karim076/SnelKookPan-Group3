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
        <form class="form-style-7">
            <ul>
            <li>
                <label for="name">Aantal personen</label>
                <input type="number" max="5" name="name" required>
                <span>Vul het aantal mensen die het huis gaan bezoeken</span>
            </li>
            <li>
                <input type="text" id="datetimerange-input1" size="24" style="text-align:center" min="<?php echo date("d-m-Y") ?>" max="<?php echo date("01-07-2022") ?>" required>
                <span>Waneer wilt u het huis huren</span>
                <script>
                    window.addEventListener("load", function (event) {
                    new DateRangePicker('datetimerange-input1');
                });
        </script>
            </li>
            <!-- <li>
                <script type="text/javascript">
                var start = document.querySelector('start');
                start.onclick = function() {
                $("#end").val(start)
                }
                </script>
                <label for="start">Eind datum:</label>
                <input type="date" id="end" name="trip-end" value="<?php //echo $show?>" min="<?php //echo date("Y-m-d") ?>" <?php //$Date = date("Y-m-d"); echo date('Y-m-d', strtotime($Date. ' + 1 month'));?>">
                <span>Einde huur dag</span>
            </li> -->
            <li>
                <label for="email">Email</label>
                <input type="email" name="email" maxlength="100">
                <span>Enter a valid email address</span>
            </li>
            <li>
                <label for="url">Website</label>
                <input type="url" name="url" maxlength="100">
                <span>Your website address (eg: http://www.google.com)</span>
            </li>
            <li>
                <label for="bio">About You</label>
                <textarea name="bio" onkeyup="adjust_textarea(this)"></textarea>
                <span>Say something about yourself</span>
            </li>
            <li>
                <input type="submit" value="Send This" >
            </li>
            </ul>
        </form>
        
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