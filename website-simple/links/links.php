<?php
    $website = "<!DOCTYPE html>
<html>
    
    <head>
        <link href="../main.css" rel="stylesheet" />
    </head>
    
    <body>
        <div class="kopf">
            <img src="../grafiken/titel2.gif">
        </div>
        <div class="navi">
            <ul>
                <li><a href="../index.html">Start</a></li>
                <li><a href="../projekte/projekte.html">Projekte</a></li>
                <li><a href="../bildung/bildung.html">Bildung</a></li>
                <li><a href="../links/links.php" class="aktiv">Links</a></li>
                <li style="float:right"><a href="../formales/kontakt.html">Kontakt</a></li>
            </ul>
        </div>
        <div class="inhalt">
            <div class="text">
                <h1>Inhalt</h1>
                <hr>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="fuss">
            <ul>
                <li><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons Lizenzvertrag" src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png" /></a></li>
                <li><a href="../index.html">Erstellt von Jan-Henrik Bergmann</li>
                <li style="padding-left:8%"><a>Letzte Aktualisierung: 10.12.2020 15:05 MEZ</a></li>
                <li style="float:right"><a href="../formales/datenschutz.html">Datenschutzerklärung</a></li>
                <li style="float:right"><a href="../formales/impressum.html">Impressum</a></li>
            </ul>
        </div>
    </body>
        
</html>";
?>

<?="{$website}"?>