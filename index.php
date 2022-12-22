<?php
if (isset($_REQUEST['login'])) {
    header('Location: codigoPHP/login.php');
    exit;
}
/*
 * @author: ALEJANDRO OTÁLVARO MARULANDA
 * @since: 22 12 2022
 */

//librerias:
require_once 'conf/confDBPDO.php';
?>


<html>

    <head>
        <meta charset="UTF-8">
        <title>LOGIN / LOGOFF</title>
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Rajdhani:wght@300&display=swap" rel="stylesheet">
        <link href="weboroot/css/estilos-index.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <div>
            <div>
                <h1 class="h1">ALEJANDRO OTÁLVARO MARULANDA</h1>
            </div>
            <section>
                <fieldset>

                    <form>

                        <input type="submit" name="login" value="Login" >

                        <label>Idioma: </label>
                        <select name="idioma" id="IDIOMA">
                            <option>ES</option>
                            <option>EN</option>
                            <option>PT</option>
                        </select>
                    </form>
                </fieldset>
            </section>


        </div>


        <footer>
            <a href="/../index.php" style="text-decoration:none">
                <img src="../doc/home.png" alt="inicio" onmouseover="this.width = 50;this.height = 50;"
                     onmouseout="this.width = 39;this.height = 39;" width="39" title="inicio" />
            </a>
            <a href="../doc/CV.pdf" target="_blank" style="text-decoration: none">
                <img src="../doc/cv-logo.png" alt="curriculum" onmouseover="this.width = 50;" onmouseout="this.width = 39;"
                     width="39" title="curriculum vitae" class="icono_cv" />
            </a>

            © Alejandro Otálvaro Marulanda

            <a href="https://github.com/alexotalvaro/206DWESProyectoLoginLogoffTema5" target="_blank" style="text-decoration: none">
                <img src="../doc/git.png" alt="git" onmouseover="this.width = 50;" onmouseout="this.width = 39;"
                     width="39" title="GIT"/>
            </a>

            <a href="http://www.linkedin.com/in/alejandro-otálvaro-marulanda/" target="_blank"
               style="text-decoration: none">
                <img src="../doc/link2.png" alt="linkedin" onmouseover="this.width = 50;" onmouseout="this.width = 39;"
                     width="39" title="linkedin" class="icono_link" />
            </a>

        </footer>
    </body>

</html>
