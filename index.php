<!DOCTYPE html>
<html>
<head>
    <title>Starry.Code</title>
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
    <header>
    <div class="container-single">
    <div class="logo"><a href="">Starry.Code</a></div><!--logo-->
            <nav class="desktop">
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="sobre">Sobre</a></li>
                    <li><a href="contato">Contato</a></li>
                </ul>
            </nav>

            
            <nav class="mobile">
            <div class="btn-menu-open"><i class="fa fa-bars"></i></div><!--btn-menu-open-->
            <div class="btn-menu-close"><i class="fa fa-times"></i></div><!--btn-menu-close-->
                <ul id="mobile">
                    <li><a href="home">Home</a></li>
                    <li><a href="sobre">Sobre</a></li>
                    <li><a href="contato">Contato</a></li>
                </ul>
            </nav>
        </div><!--container-->
    </header>

    <?php
    if(isset($_GET['url'])){
        if(file_exists($_GET['url']).'.html'){
            include($_GET['url'].'.html');
        }else{
            include('404.html');
        }
    }else{
        include('home.html');
    }

?>

    

    <footer>
        <h2>Todos os direitos reservados!</h2>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
