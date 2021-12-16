<?php


    if(!isset($_COOKIE["eingeloggt"]))
    {
        header("Location: account_system/loginPage.php");
        exit();
    }
 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana sayfa</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <div class="wrapper sp_btw">
            <div class="logo">LOGO</div>
            <div class="search sp_btw" >
                <input type="text" placeholder="Search">
                <i class="fal fa-search"></i>
            </div>
            <nav>
                <a href=""><i class="far fa-home"></i>  Home </a>
                <a href=""><i class="far fa-envelope"></i>Messages </a>
                <a href=""><i class="far fa-bell"></i>Notification   </a>
            </nav>  
            <div class="user_image"> 
                <img src="bild/woman.png"> 
                <span>Ogulsenem</span> 
            </div>          
        </div>

    </header>

    <main>
        <div class="wrapper flex">
            <aside>
                <div class="abonnieren">
                    <h4> Abonnieren</h4>
                    <div class="user_image ">
                        <img src="bild/woman.png" >
                        <span>Username</span>
                    </div>
                    <div class="user_image ">
                        <img src="bild/woman.png" >
                        <span>Username</span>
                    </div>
                    <div class="user_image">
                        <img src="bild/woman.png" >
                        <span>Username</span>
                    </div>
                    <div class="show_more">
                        <a href="">Alle ansehen</a>
                    </div>
                </div>


                <div class="vorschlage">
                    <h4> Vorschläge für dich</h4>
                    <div class="user_image ">
                        <img src="bild/woman.png" >
                        <div>
                            <b>Username</b> <br>
                            <small> "bla bla bla" followed this</small>
                        </div>
                        <button><i class="fas fa-plus"></i></button>
                    </div>
                    <div class="user_image ">
                        <img src="bild/woman.png" >
                        <div>
                            <b>Username</b> <br>
                            <small> "bla bla bla" followed this</small>
                        </div>
                        <button><i class="fas fa-plus"></i></button>
                    </div>
                    <div class="user_image ">
                        <img src="bild/woman.png" >
                        <div>
                            <b>Username</b> <br>
                            <small> "bla bla bla" followed this</small>
                        </div>
                        <button><i class="fas fa-plus"></i></button>
                    </div>

                    <div class="show_more">
                        <a href="">Alle ansehen</a>
                    </div>
                </div>
            </aside>
            
            <div class="container">
                <div class="teilen">
                    <div class="user_image">
                        <img src="bild/woman.png" >
                        <textarea placeholder="Was machst du gerade, Ogulsenem ?"></textarea>
                    </div>
                    <button>Teilen</button>
                </div>

                <div class="paylasimlar">
                    <h4>Paylasimlar</h4>
                    <div class="box">
                        <div class="user_image">
                            <img src="bild/woman.png" >
                            <span>Username</span>
                        </div>
                        <div class="content">
                            „Lorem ipsum dolor sit amet, consectetur adipisici elit, 
                            …“ ist ein Blindtext, der nichts bedeuten soll, 
                            sondern als Platzhalter im Layout verwendet wird, um einen 
                            Eindruck vom fertigen Dokument zu erhalten. 
                        </div>
                        <div class="content_unten">
                            <div class="like">
                                <i class="far fa-heart"></i>
                                <span>100</span>
                            </div>
                            <div class="comment">
                                <i class="far fa-comment"></i>
                                <span>150</span>
                            </div>
                        </div>

                    </div>

                    <div class="box">
                        <div class="user_image">
                            <img src="bild/woman.png" >
                            <span>Username</span>
                        </div>
                        <div class="content">
                            „Lorem ipsum dolor sit amet, consectetur adipisici elit, 
                            …“ ist ein Blindtext, der nichts bedeuten soll, 
                            sondern als Platzhalter im Layout verwendet wird, um einen 
                            Eindruck vom fertigen Dokument zu erhalten. 
                        </div>
                        <div class="content_unten">
                            <div class="like">
                                <i class="far fa-heart"></i>
                                <span>100</span>
                            </div>
                            <div class="comment">
                                <i class="far fa-comment"></i>
                                <span>150</span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <aside>
                <div class="trends">
                    <h4>Trends</h4>
                </div>
                <div class="nachrichten">
                   <button><i class="far fa-comments"></i> </button> 
                </div>
            </aside>
        </div>
    </main>
</body>
</html>