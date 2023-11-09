<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>the Undermine Undertakers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- php -->
    <?php include 'scripts/article-parse.php'; ?>
    <!-- My CSS -->
    <link rel="stylesheet" href="css/paper.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/backgrounds.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- adobe fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/tkq4iko.css">
</head>

<body>
    <div class="container letter">
        <!-- Headers -->
        <hr>
        <!-- Main Header-->
        <div class="header">
            <div id="flex-header-left">
                <img src="/images/stamp-00.png" class="stamp-header" alt="stamp">
            </div>

            <div id="flex-header-center">
                The Undermine Undertaker's Update
            </div>
            <div id="flex-header-right">
                Monthly
            </div>
        </div>
        <hr>
        <!-- END Main Header-->

        <!-- Sub Header Header-->
        <div class="sub-header">
            <div id="sub-dt">
                11th November,
            </div>
            <div id="sub-vol">
                Volume 1 &amp; Issue 1
            </div>
            <div id="sub-est">
                EST.2023 1c
            </div>
        </div>
        <hr>
        <!-- END Sub Header Header-->

        <!-- Headline-->
        <div>
            <div class="headlines">
                Grave Matters and Gold Clatters *!*
            </div>
        </div>
        <!-- END Headline-->

        <!-- END Headers -->

        <!-- Top News Column -->
        <div class="row news-columns-top">

            <!-- Row 4 COL 1-->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card mt-8 unique-background-6">
                    <p class="card-text typewritter">
                        <?php echo $first_part; ?></p>
                </div>
            </div>

            <!-- Row 4 COL 2-->
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card mt-8">
                    <img src="/images/gob-kungfu.png" class="photos-article" alt="Angry Goblins">
                    <div class="gob-photo">Picture by F-stop Fizzlefreak</div>
                </div>
                <hr>
                <div class="soccer-table">
                    <?php include('tables/soccer_division1_table.php'); ?>
                    <img src="/images/banner-04.png" alt="mountain passage" class="img-fluid photos-ads-no-border">
                </div>
            </div>

            <!-- Row 4 COL 3-->
            <div class="col-lg-2 col-md-6 col-sm-12">
                <div class="card mt-8">
                    <p><img src="/images/play-online-01.png" class="img-fluid photos-ads-no-border" alt="Field Office"></p>
                    <p><img src="/images/terminal-00.png" class="img-fluid photos-ads-no-border" alt="Play Online"></p>
                    <p><img src="/images/mail-box-00.png" class="img-fluid photos-ads-no-border" alt="Mail Box"></p>
                    <p><img src="/images/ad002.png" class="img-fluid photos-ads-no-border" alt="Advert 02"></p>
                </div>
            </div>
        </div>
        <!-- END Top News Column -->

        <!-- Middle News Column -->
        <div class="row news-columns-mid">
            <!-- Row 5 COL 1-->
            <div class="col-lg-8 col-md-6 col-sm-12 multi-column-text">
                <div class="card mt-8 unique-background-7">
                    <p class="card-text typewritter">
                        <?php echo $second_part; ?></p>
                    </p>
                </div>
            </div>

            <!-- Row 5 COL 3-->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card mt-8">
                    <div class="flex-image-text">
                        <div class="flex-image-left"><img src="images/list_FILL0_wght400_GRAD0_opsz24.png" alt="List Icon"></div>
                        <div class="flex-text-right"><span class="author typewritter">Index</span></div>
                    </div>
                    <ul class="typewritter">
                        <li><a href="#">Business:</a> Snazzle Gearfuse</li>
                        <li><a href="#">Politics:</a> Wizzik Sprocketslip</li>
                        <li><a href="#">Page 3:</a> Pixie Steamspark</li>
                        <li><a href="#">Entertainment:</a> Ziggy Gearpop</li>
                        <li><a href="#">Obituaries:</a> Sappy Goldwrench</li>
                        <li><a href="#">Classifieds:</a> Rikt Copperpinch</li>
                        <li><a href="#">Sports:</a> Blix Blastrocket</li>
                    </ul>
                    <p><img src="/images/wow_classic_maps/Redridge.jpg" class="img-fluid photos-article" alt="Soccer Match"></p>
                    <div class="gob-photo">Redridge Offices Opening Soon!</div>
                </div>
            </div>
        </div>
        <!-- END Middle News Column -->

        <!-- Bottom News Column -->
        <div class="row news-columns-bottom">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <!-- Row 6 COL 1 TOP-->
                <div class="card mt-8">
                    <div class="flex-image-text">
                        <div class="flex-image-left"><img src="images/savings_FILL0_wght400_GRAD0_opsz24.png" alt="Fav Icon"></div>
                        <div class="flex-text-right"><span class="author typewritter">Stocks</span></div>
                    </div>
                    <ul class="typewritter">
                        <li><strong>BBE</strong> - as volatile as a barrel of Blast-O-Powder.</li>
                        <li><strong>BB&PP</strong> - the shadowy side of goblin politics.</li>
                        <li><strong>GG&SS</strong> - Want a piece of the Page 3 action?</li>
                        <li><strong>EME</strong> - Goblinwood blockbusters</li>
                        <li><strong>FF&00</strong> - Bet on the endgame. Morbid but reliable stocks.</li>
                        <li><strong>S&SC</strong> - the best informants.</li>
                        <li><strong>SS&GG</strong> - Whether it's Ogre wrestling or Mechanostrider racing.</li>
                    </ul>
                    <hr>
                    <!-- END Row 6 COL 1 TOP-->

                    <!-- Row 6 COL 1 Bottom -->
                    <p class="card-text typewritter">
                        <?php echo $first_part2; ?>
                    </p>
                </div>
                <!-- END Row 6 COL 1 Bottom -->
            </div>

            <!-- Row 6 COL 2-->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card mt-8">
                    <!-- Row 6 COL 2 TOP -->
                    <div class="flex-image-text">
                        <div class="flex-image-left"><img src="images/sunny_FILL0_wght400_GRAD0_opsz24.png" alt="Sun Icon"></div>
                        <div class="flex-text-right"><span class="author typewritter">Weather</span></div>
                    </div>
                    <ul class="typewritter">
                        <li><strong>Alterac:</strong> Winds a howlin'</li>
                        <li><strong>Azhara:</strong> Magical mists.</li>
                        <li><strong>Barrens:</strong> Hot</li>
                        <li><strong>Dun Morogh:</strong> Bundle up!</li>
                        <li><strong>Durotar:</strong> Scorchin' sands</li>
                        <li><strong>Westfall:</strong> Fields are baskin'</li>
                        <li><strong>Winterspring:</strong> Snowing</li>
                    </ul>
                    <!-- Row 6 COL 2 MID -->
                    <img src="/images/298984844751733_ref_00001_.png" class="photos-article" alt="Murloc Bikini">
                    <div class="gob-photo">Picture by Pixel Pixik</div>
                    <hr>
                    <!-- Row 6 COL 2 Bottom -->
                    <p class="card-text typewritter">
                        <?php echo $second_part2; ?>
                    </p>
                </div>
            </div>

            <!-- Row 6 COL 3-->
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card mt-8 unique-background-8">
                    <?php include('articles/article-03.php'); ?>
                </div>
            </div>
        </div>
        <!-- END Bottom News Column -->
    </div>
    <!-- /container -->

    <footer class="footer typewritter">
        <div id="flex-footer">
            <div id="flex-footer-left">About</div>
            <div id="flex-footer-centre">&copy; the Undermine Undertaker's Update 2017</div>
            <div id="flex-footer-right">Privacy</div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>