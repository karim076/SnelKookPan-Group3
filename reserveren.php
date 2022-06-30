<!DOCTYPE html>
<html lang="nl">
<head>
    <?php require_once 'head.php'; ?>
</head>
<body class="bg">
    <?php require_once 'header.php'; ?>
    
    <main>
        <form class="form-style-7">
            <ul>
            <li>
                <label for="name">Aantal personen</label>
                <input type="number" max="5" name="name">
                <span>Vul het aantal mensen die het huis gaan bezoeken</span>
            </li>
            <li>
                <label for="start">Start datum:</label>
                <input type="date" id="start" name="trip-start" value="<?php echo $show = date("Y-m-d") ?>" min="<?php echo date("Y-m-d") ?>" max="<?php $Date = date("Y-m-d"); echo date('Y-m-d', strtotime($Date. ' + 1 month'));?>">
                <span>Waneer wilt u het huis huren</span>
            </li>
            <li>
                <label for="start">Eind datum:</label>
                <input type="date" id="end" name="trip-end" value="<?php echo $show?>" min="<?php echo date("Y-m-d") ?>" <?php $Date = date("Y-m-d"); echo date('Y-m-d', strtotime($Date. ' + 1 month'));?>">
                <span>Einde huur dag</span>
            </li>
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