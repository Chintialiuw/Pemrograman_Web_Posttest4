<!DOCTYPE html>
<html lang = "en" dir = "ltr">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>Cup and Cakes</title>
        <link rel = "stylesheet" href = "style.css">
    </head>
    <body>
        <section>
            <img src = "Gambar/beranda.png" alt = "">
            <div class = "wrapper">
                <div class = "nav">
                    <div class = "logo">
                        <a href = "#">
                            <p id = "nama_toko">
                                HALO PARA SWEETH TOOTH !
                            </p>
                        </a>
                    </div>
                    <ul>
                        <li>
                            <a class="links" href = "index.php">HOME</a>
                        </li>
                        <li>
                            MENU
                        </li>
                        <li>
                            <a class="links" href = "about.php">ABOUT</a>
                        </li>
                        <li>
                            CONTACT US
                        </li>
                        <li>
                            <a class="links" href = "register.php">LOG IN | REGISTER</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="text-container">
                <p id = "quotes">
                    YOU WILL BE DELIGHTED WITH OUR SWEETS !
                </p>
                <p>
                    THERE IS SOMETHING FOR EVERYONE TO TASTE
                </p>
                <button class = "signature">Check This Out</button>
            </div>
        </section>
        
        <input type = "checkbox" onclick = "ubahMode()">
        
        <div class="menu">
            <div class="menu-text ">
                <p>
                    Menu
                </p>
            </div>
            <div class="box-container">

                <div class="box-1">
                    <span></span>
                    <p class="heading">Monster Cupcakes</p>
                    <p class="details">Chocolate Cakes dengan butter cream Blueberry dan Cookies Kopi yang renyah</p>
                    <button>Details</button>
                </div>

                <div class="box-2">
                    <span></span>
                    <p class="heading">Chocolate Cupcakes</p>
                    <p class="details">Chocolate Cakes dengan tambahan butter cream Chocolate dan taburan Ceres di atasnya</p>
                    <button>Details</button>
                </div>

                <div class="box-3">
                    <span></span>
                    <p class="heading">Triple Berry Cupcakes</p>
                    <p class="details">Vanila Cakes dengan butter Cream Strawberry yang dipadukan dengan 3 jenis buah berry</p>
                    <button>Details</button>
                </div>
            </div>
        </div>
 
        <footer>
            <p>
                Interested to order ours cupcakes for your celebration ?
            </p>
            
            <p>
                We are waiting for your orders soon
            </p>
         
            <p class="copyright">
                Copyright &copy; 2022 Designed by Chintia Liu Wintin
            </p>
        </footer>
        <script src = "main.js"></script>
    </body>
</html>