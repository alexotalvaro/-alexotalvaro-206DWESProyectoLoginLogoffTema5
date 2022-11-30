<?php
if (isset($_REQUEST['inicioSesion'])) {
    header('Location: programa.php');
    exit;
}
?>


<html>

    <head>
        <meta charset="UTF-8">
        <title>LOGIN / LOGOFF</title>
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Rajdhani:wght@300&display=swap" rel="stylesheet">
        <link href="../weboroot/css/estilos.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <div class="container">
            <div class="h1">
                <h1>INICIO DE SESION</h1>
            </div>
            <section>
                <fieldset>

                    <form>
                        <label> Usuario:</label>
                        <input type="text" name="usuario">
                        <br>
                        <label> Contraseña: </label>
                        <input type="text" name="contra">
                        <br>
                        <input type="submit" name="inicioSesion" value="Iniciar Sesion" >
                    </form>
                </fieldset>
            </section>


        </div>

    </body>
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

</html>