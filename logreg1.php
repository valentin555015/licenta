<?php 
/* pagina principala pt login si register*/
require 'bd.php';
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>::DIDI:: | Login Page</title> 
        <link rel="stylesheet" type="text/css" href="css/loginstyle.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
    </head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
    
    else if (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?>

    <body>

        <!--Inceput de main-->
        <div class="main">

            <!--Mic antet-->
            <div id="header">
                <div id="subheader">
                    <div class="container">
                        <p>Preturi mici pentru produse de TOP!</p>
                    </div>
                </div>

                <!--Antet propriu-zis-->
                <div id="main-header">
                    <div class="container">
                        <!--logo-->
                        <div id="logo">
                            <a href="index.php"><img src="imagini/logo.png" height="80px" width="250px"></a>
                        </div>

                        <!--Zona de cautare-->
                        <div id="search">
                            <form action="">
                                <input class="search-area" type="text" name="text" placeholder="Denumire produs...">
                                <input class="search-btn" type="submit" name="submit" value="CAUTARE">

                            </form>
                        </div>

                        <!--Meniu utilizator-->
                        <div id="user-menu">
                            <li><a href="#">Cos</a></li>
                            <li><a href="logreg1.php">Login</a></li>
                        </div>
                      </div>
                 </div>
            </div>

            <!--Bara de navigare-->
            <div id="navigation">
                <div class="container">
                    <a href="#" class="menu-toggle"><i class="fa fa-bars"></i></a>
                    <nav id="mainav">
                        <a href="femei.php">Femei</a>
                        <a href="barbati.php">Barbati</a>
                        <a href="copii.php">Copii</a>
                        <a href="incaltaminte.php">Incaltaminte</a>
                        <a href="accesorii.php">Accesorii</a>
                    </nav>
                </div>
            </div>

            <!--inceputul formularului de log/reg-->
            <div class="container">
                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                <section>				
                    <div id="container_demo" >
                        <a class="hiddenanchor" id="toregister"></a>
                        <a class="hiddenanchor" id="tologin"></a>
                        <div id="wrapper">
                            <div id="login" class="animate form">
                                <form  action="login.php" method="post" autocomplete="off"> 
                                    <h1>Logare</h1> 
                                    <p> 
                                        <label> Adresa de email sau numele de utilizator: </label>
                                        <input name="username" required type="text" placeholder="numeutilizator sau adresa@email.com"/>
                                    </p>
                                    <p> 
                                        <label> Parola: </label>
                                        <input name="password" required type="password" placeholder="ex: parola12345" /> 
                                    </p>
                                    <p class="login button"> 
                                        <input type="submit" value="Logare" /> 
    								</p>
                                    <p class="change_link">
    									Nu esti membru?
    									<a href="#toregister" class="to_register">Inregistreaza-te</a>
    								</p>
                                </form>
                            </div>

                            <div id="register" class="animate form">
                                <form  action="register.php" method="post" autocomplete="off"> 
                                    <h1> Inregistrare </h1> 
                                    <p> 
                                        <label>Numele de utilizator:</label>
                                        <input type="text" autocomplete="off" required name="username" placeholder="numeutilizator112" />
                                    </p>
                                    <p> 
                                        <label> Adresa de email:</label>
                                        <input type="email" autocomplete="off" required name="email" placeholder="adresa@email.com"/> 
                                    </p>
                                    <p> 
                                        <label>Parola: </label>
                                        <input type="password" autocomplete="off" required name="password" placeholder="ex: parola12345"/>
                                    </p>
                                    <p class="signin button"> 
    									<input type="submit" value="Inregistrare"/>
    								</p>
                                    <p class="change_link">  
    									Sunteti deja membru?
    									<a href="#tologin" class="to_register"> Logati-va </a>
    								</p>
                                </form>
                            </div>	
                        </div>
                    </div>  
                </section>
            </div>
            <!--sfarsitul form de log/reg-->
            <br /><br />

            <!--inceput de subsol-->
            <div id="footer">
                <div class="container">

                    <!--Descrierea-->
                    <div class="footer_sub">
                        <h2>Descriere</h2>
                        <p>this is my first e-commerce website design in html and css and also using bx-slider. this is my first e-commerce website design in html and css and also using bx-slider. this is my first e-commerce website design in html and css and also using bx-slider. this is my first e-commerce website design in html and css and also using.
                    </div>

                    <!--link-uri utile-->
                    <div class="footer_sub_2">
                        <center>
                            <h2>Link-uri utile</h2>
                            <ul>
                                <li><a href="femei.php">Femei</a></li>
                                <li><a href="barbati.php">Barbati</a></li>
                                <li><a href="copii.php">Copii</a></li>
                                <li><a href="incaltaminte.php">Incaltaminte</a></li>
                                <li><a href="accesorii.php">Accesorii</a></li>
                            </ul>
                        </center>
                    </div>

                    <!--retele de socializare-->
                    <div class="footer_sub_2">
                        <center>
                            <h2>Retele Sociale</h2>
                            <ul>
                                <li><a href="https://www.facebook.com" target="_blank">Facebook</a></li>
                                <li><a href="http://plus.google.com" target="_blank">Google+</a></li>
                                <li><a href="http://www.instagram.com" target="_blank">Instagram</a></li>
                            </ul>
                        </center>
                    </div>

                    <!--abonare la newsletter-->
                    <div class="footer_sub_3">
                        <center>
                            <h2>Aboneaza-te</h2>
                            <input type="text" name="subs" placeholder="Introdu adresa de e-mail" class="subs">
                            <input type="submit" name="submit_btn" value="Abonare" class="sub_btn">
                            <p class="sub_p">Introdu adresa de email pentru a primi notificari.</p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <!--sfarsit de main-->
    </body>
</html>