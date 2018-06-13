
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="CSS/style.css">
    <title></title>
</head>
<body>
<div class="container">
<h2>Zaprojektuj swoja koszulkę!</h2>
    <div class="row">
    <div class="col col-sm-4 koszulkaKolor koszulkaKolorBlack" koszulkaAtr="czarna">
        czarna (backgraound tejze koszulki)
        </div>
        <div class="col col-sm-4 koszulkaKolor koszulkaKolorWhite" koszulkaAtr="biala">
         białe (backgraound tejze koszulki)
        </div>
        <div class="col col-sm-4 koszulkaKolor koszulkaKolorFiolet" koszulkaAtr="fiolet">
        fiolet (backgraound tejze koszulki)
        </div>
     
     </div>

        <input type="text" placeholder="wpisz swoje imię" id="wpiszImie">
    </div>
    <div class='wybierzColor'>
        <span class="fontColor" colorAttr="black">czarny </span>
        <span class="fontColor" colorAttr="white">bialy </span>
        <span class="fontColor"colorAttr="green">zielony</span>
        <span class="fontColor"colorAttr="red">czerwony</span>
    </div>
    <div class="row">
    <h4>wybierz logo</h4>
        <div class="col col-sm-3 apple clicklogo" logoAtr="miniApple">
        apple
        </div>
        <div class="col col-sm-3 appleWhite clicklogo" logoAtr="miniAppleWhite">
        apple białe
        </div>
        <div class="col col-sm-3 NBC clicklogo" logoAtr="miniNBC">
        NBC
        </div>
        <div class="col col-sm-3 logoPic clicklogo" logoAtr="miniLogo">
        logo
        </div>
    </div>
    <div class="wynik">
        <?php include('PHP/settings.php');     ?>
        
        
    </div>

<button id="zatwierdzenie">Zapisz projekt!</button>

</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.waterwheelCarousel.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
