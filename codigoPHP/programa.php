<?php
if (isset($_REQUEST['salir'])) {
    header('Location: login.php');
    exit;
}
if (isset($_REQUEST['detalle'])) {
    header('Location: detalle.php');
    exit;
}
?>


<html>

    <head>
        <meta charset="UTF-8">
        <title>LOGIN / LOGOFF</title>
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Rajdhani:wght@300&display=swap" rel="stylesheet">

        <style>

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                background: #a67bb3   ;
                background-size: 100%;
                height: 100%;
                text-align: center;
            }

            h1{
                font-family: 'Alfa Slab One', cursive;
            }
            fieldset{
                width: 15%;
                margin-left: 42%;
            }


            fieldset input{
                background:  #d6d6d6 ;
            }
            fieldeset label,input{
                margin: 12px;
            }
            label{
                font-family: 'Rajdhani', sans-serif;
                color: white;
            }
            input{
                width: 10rem;
                border-radius: 8px;
                background: white;
            }
            .icono_atras {
                position: absolute;
                top: 25px;
                left: 100px;
            }

            .icono_link {
                position: absolute;
                top: 25px;
                right: 200px;
            }

            .icono_cv {
                position: absolute;
                top: 25px;
                left: 100px;
            }
            footer {
                background-color:  #3a1d42;
                bottom: 0;
                position: fixed;
                width: 100%;
                font-size: 1em;
                font-family: 'Chela One', cursive;
                text-align: center;
                padding-top: 20px;
                padding-bottom: 30px;
                left: 0px;

            }
        </style>
    </head>

    <body>

        <div class="container">


            <form>
                <input type="submit" name="salir" value="Salir" >
                
                <input type="submit" name="detalle" value="Detalle" >
            </form>




        </div>

    </body>
    <footer>
        <a href="/../index.php" style="text-decoration:none">
            <img src="../doc/home.png" alt="inicio" onmouseover="this.width = 50;this.height = 50;"
                 onmouseout="this.width = 39;this.height = 39;" width="39" title="inicio" />
        </a>
        <a href="/doc/CV.pdf" target="_blank" style="text-decoration: none">
            <img src="/doc/cv-logo.png" alt="curriculum" onmouseover="this.width = 50;" onmouseout="this.width = 39;"
                 width="39" title="curriculum vitae" class="icono_cv" />
        </a>

        © Alejandro Otálvaro Marulanda

        <a href="https://github.com/alexotalvaro/206DWESProyectoLoginLogoff" target="_blank" style="text-decoration: none">
            <img src="../doc/git.png" alt="git" onmouseover="this.width = 50;" onmouseout="this.width = 39;"
                 width="39" title="GIT"/>
        </a>

        <a href="http://www.linkedin.com/in/alejandro-otálvaro-marulanda/" target="_blank"
           style="text-decoration: none">
            <img src="/doc/link2.png" alt="linkedin" onmouseover="this.width = 50;" onmouseout="this.width = 39;"
                 width="39" title="linkedin" class="icono_link" />
        </a>

    </footer>

</html>