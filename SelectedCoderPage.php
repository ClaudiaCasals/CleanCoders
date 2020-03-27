<?php
namespace App;
include 'CodersList.php';
include 'SelectorCoder.php';
include 'Killer.php';

$selectorCoder = new SelectorCoder;
$selected = $selectorCoder-> getName ($coders);
echo "<h3>The next coder is...</h3><br><h2>", $selected, "!</h2><br>";

$killer = new Killer;
unset($dead,$coders);

?>
<html>
<input type = button onClick = "self.close();" value = "Back to main page" class="button">
</html>
