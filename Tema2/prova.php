<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <p>Lorem ipsum...</p>
        <?php echo "<p>Lorem ipsum...</p>"?>
        <?php print "<p>Lorem ipsum...</p>"?>
        <?= "<p>Lorem ipsum...</p>"?>
        <p><?= "Lorem ipsum..."?></p>

        <?php
        $text=1000;
        $text2="2000";
        ?>
        <p>3000</p>
        <?php echo "<p>".($text+$text2)."</p>"?>
        <?php print "<p>".($text-$text2)."</p>"?>
        <?= "<p>".($text.$text2)."</p>"?>
        <p><?= $text?></p>


    </body>
</html>