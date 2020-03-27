!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Wheel of Doom - sprint 2</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./jquery-3.4.1.min.js"></script>
    <style>

    </style>

<body>
    <header>
    </header>

    <main>
        <div class="contenedor">
            <div id="logoWoDTop">
                <h1>
                    <img src="https://i.ibb.co/hym27V6/Wo-D-Title-text.png" class="contain" class="middle" alt="Wheel of Doom title logo" />
                </h1>
            </div>
            <div id="leftColumn">
                <img src="https://i.ibb.co/FqxhnWd/WoD-Tree.png" class="contain" alt="Background picture of a tree listing alive coders" />
            </div>
            <div id="AliveListHeader" class="whiteFont" class="contain">
                <h2 font size="5em">Alive coders</h2>
            </div>
            <div id="AliveCoders" class="contain">
                <?php include 'CodersList.php';
                $codersTotal = count($coders);

                $counter = 0;
                while ($counter < $codersTotal) :
                    echo $coders[$counter], "<br>";
                    $counter++;
                endwhile;
                ?>
            </div>
            <div id="centerWheel" class="contain">
                <img src="https://i.ibb.co/z2Bkpgc/Wheel1.png" alt="Picture of Doom character holding a wheel of fortune" />
            </div>
            <div id="deadHeader" class="whiteFont" class="contain">
                <h2 font size="5em">Dead Coders</h2>
            </div>
            <div id="rightColumn">
                <img src="https://i.ibb.co/2gz7QPv/WoD-RIP.png" class="contain" alt="Background picture of a gravestone listing dead coders" />
            </div>
            <div id="bottomSelectButton">
                <input type=button onClick=window.open("SelectedCoderPage.php","demo","width=450,height=300,left=600,top=400,toolbar=0,status=0,"); value="SELECT CODER" class="button" class="middle">

            </div>

            <div id="deadCoders">

            </div>

            <div id="bottomResetButton">
                <button onclick="window.location.reload();" class="button">RESET LIST</button>
            </div>
        </div>

    </main>

</body>

</html>