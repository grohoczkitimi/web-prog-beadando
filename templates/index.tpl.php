<html>
    <head>
        <title>SegítőKÉSZ</title>
        <meta charset=UTF-8>
        <link rel="stylesheet" href='./styles/style.css' type='text/css'>
    </head>
    <body>
        <div class="wrapper">
            <nav>
                <ul class="menu">
                    <li><img class="logo" src="./images/logo.png"></li>
                    <?php foreach ($oldalak as $url => $oldal) { ?>
                    <li<?= (($oldal == $keres) ? ' class="active"' : '') ?>>
                    <a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
                    <?= $oldal['szoveg'] ?></a></li> <?php } ?>
                    <li><a href="http://www.segitokesz.hu/">Link az eredetire</a></li>
                    <li>
                        <div id="searchbox">
                        <form method="get" action="http://www.google.com/search"><div class="clear-block">
                            <input type="hidden" name="ie" value="UTF-8" />
                            <input type="hidden" name="oe" value="UTF-8" />
                            <input type="hidden" name="domains" value="weblabor.hu" />
                            <input type="hidden" name="sitesearch" value="weblabor.hu" />
                            <input type="text" class="form-text" name="q" size="20" maxlength="255" value="" />
                            <input type="submit" class="form-submit" name="btnG" value="Keresés" /></div>
                        </form>
                        </div>
                    </li>
                </ul>
            </nav>

            <div class="tartalom">
                <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
            </div>
            <footer>
                <table class="tablestyle">
                    <?php if(isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
                    &nbsp;
                    <?php if(isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
                </table>
            </footer>
        </div>
    </body>
</html>