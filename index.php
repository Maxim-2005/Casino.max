<? $db = "model/casino.sqlite"?>
<? include_once("model/migration.php"); ?>
<? include_once("view/header.php"); ?>

КАЗИНО макСИМА
<form method = "post">
    <input type = "submit" name = "bet" value = "Start">
    <input type = "submit" name = "restart" value = "Restart">
</form>

<? include_once("view/footer.php"); ?>