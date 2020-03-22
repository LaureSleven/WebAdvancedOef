<?php
if (!(ctype_digit($_GET['getal']))) {
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
} else {
?>
<form action="statistiek.php" method="get">
    <?php
    for ($i = 0; $i < $_GET['getal']; $i++) {
        ?><input type="text" name="getallen[]">
        <?php
    }
    ?>
    <input type="submit" value="bevestig"/>
</form>
<?php
}
