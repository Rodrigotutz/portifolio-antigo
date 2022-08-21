<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title><?=$title?></title>
        <meta property="og:title" content="Rodrigo tutz"/>
        <meta property="og:description" content="Portifólio de Rodrigo Antunes">
        <meta property="og:url" content="https://github.com/Rodrigotutz"/>
        <meta property="og:image" content="https://avatars.githubusercontent.com/u/77134687?s=400&u=481bc930b592b0d35790cd290d9a3429b5b14b9d&v=4" />
        <meta property="og:type" content="website"/>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Rodrigo Antunes Rufino">
        <meta name="description" content="Portifólio Rodrigo tutz">
        <meta name="keywords" content="sites, web, desenvolvimento">
        <meta http-equiv="cache-control" content="no-cache">
        <meta http-equiv="content-language" content="pt-br">
        <meta name="copyright" content="© 2022 Rodrigo Antunes"/>
        <meta name="robots" content="index">
        
        <link rel="shortcut icon" href="/assets/icon.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="<?=URL?>/views/assets/css/normalize.css">
        <link rel="stylesheet" href="<?=URL?>/views/assets/style.min.css">
        <script src="//code.jivosite.com/widget/jeU1dgSOom" async></script>


        <!-- Script Pixel -->
        <!-- Meta Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '473360844602503');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=473360844602503&ev=PageView&noscript=1"/></noscript>
        <!-- End Meta Pixel Code -->
    </head>
    <body onload="loading()">

        <div class="pre-load">
            <div class="pre">
                <h4 class="text-white">Aguarde, construindo o site...</h4>
                <img src="<?=URL?>/views/assets/img/carregando.gif" alt="">
            </div>
        </div>
        <?php require __DIR__."/components/navbar.php" ?>        
        <?= $this->section('content')?>
        <?php require __DIR__."/components/footer.php" ?>   
        <!-- SCRIPTS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="<?=URL?>/views/assets/js/jquery-3.6.0.min.js"></script>
        <script src="<?=URL?>/views/assets/js/jquery.mask.min.js"></script>
        <script src="<?=URL?>/views/assets/scripts.min.js"></script>
    </body>
</html>