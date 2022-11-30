<?php
if (isset($_REQUEST['salir'])) {
    header('Location: login.php');
    exit;
}
if (isset($_REQUEST['volver'])) {
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
            header{
                background:  #3a1d42;
                margin-top: 1%;
                margin-bottom: 30px;
                color:whitesmoke;
                text-decoration: underline;
            }

            h1{
                font-family: 'Alfa Slab One', cursive;
                color: #f0eef4 ;

            }
            fieldset{
                width: 15%;
                margin-left: 42%;
            }


            input{
                margin: 3rem;
                width: 10rem;
            }

            table{
                margin-left: 25%;
                border: 1px solid black;
                text-align: center;
            }
            table td{
                border: 1px solid black;
                background: black;
                color:white;
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
                position: relative;
                width: 100%;
                font-size: 1em;
                font-family: 'Chela One', cursive;
                text-align: center;
                padding-top: 20px;
                padding-bottom: 30px;
                left: 0px;

            }
            table{
                margin-left: 25%;
                border: 1px solid black;
                text-align: center;
            }
            table td{
                border: 1px solid black;
            }
        </style>
    </head>

    <body>
        <header><h1>DETALLE</h1> </header>

        <div class="container">
            <section>
                <?php
                /*
                 * @author: ALEJANDRO OTÁLVARO MARULANDA
                 * @since: 23 11 2022
                 */



                echo '<h1> $_SESSION </h1>';
                echo '<table>';
                if (!empty($_SESSION)) {
                    foreach ($_SESSION as $key => $value) {
                        echo '<tr>';
                        echo '<td>' . $key . '<td>' . $value;
                    }
                    echo '</tr>';

                    echo '</table>';
                } else {
                    echo '<p>Variable $_SESSION empty</p>';
                }


                echo '<h1> $_SERVER </h1>';
                echo '<table>';
                if (!empty($_SERVER)) {
                    foreach ($_SERVER as $key => $value) {
                        echo '<tr>';
                        echo '<td>' . $key . '<td>' . $value;
                    }
                    echo '</tr>';

                    echo '</table>';
                } else {
                    echo '<p>Variable $_SERVER empty</p>';
                }

                echo '<h1> $_COOKIE </h1>';

                echo '<table>';

                if (!empty($_COOKIE)) {
                    foreach ($_COOKIE as $key => $value) {
                        echo '<tr>';
                        echo '<td>' . $key . '<td>' . $value;
                    }
                    echo '</tr>';

                    echo '</table>';
                } else {
                    echo '<p>Variable $_COOKIE empty</p>';
                }

                echo '<h1> $_REQUEST </h1>';
                echo '<table>';
                if (!empty($_REQUEST)) {
                    foreach ($_REQUEST as $key => $value) {
                        echo '<tr>';
                        echo '<td>' . $key . '<td>' . $value;
                    }
                    echo '</tr>';

                    echo '</table>';
                } else {
                    echo '<p>Variable $_REQUEST empty</p>';
                }

                echo '<h1> $_GET </h1>';
                echo '<table>';
                if (!empty($_GET)) {
                    foreach ($_GET as $key => $value) {
                        echo '<tr>';
                        echo '<td>' . $key . '<td>' . $value;
                    }
                    echo '</tr>';

                    echo '</table>';
                } else {
                    echo '<p>Variable $_GET empty</p>';
                }

                echo '<h1> $_POST </h1>';
                echo '<table>';
                if (!empty($_POST)) {
                    foreach ($_POST as $key => $value) {
                        echo '<tr>';
                        echo '<td>' . $key . '<td>' . $value;
                    }
                    echo '</tr>';

                    echo '</table>';
                } else {
                    echo '<p>Variable $_POST empty</p>';
                }
                echo '<h1> $_FILES </h1>';
                echo '<table>';
                if (!empty($_FILES)) {
                    foreach ($_FILES as $key => $value) {
                        echo '<tr>';
                        echo '<td>' . $key . '<td>' . $value;
                    }
                    echo '</tr>';

                    echo '</table>';
                } else {
                    echo '<p>Variable $_FILES empty</p>';
                }

                echo '<h1> $_ENV </h1>';
                echo '<table>';
                if (!empty($_ENV)) {
                    foreach ($_ENV as $key => $value) {
                        echo '<tr>';
                        echo '<td>' . $key . '<td>' . $value;
                    }
                    echo '</tr>';

                    echo '</table>';
                } else {
                    echo '<p>Variable $_ENV empty</p>';
                }
                ?>
            </section>
            <form>
                <input type="submit" name="salir" value="Salir" >
                <input type="submit" name="volver" value="Volver" >
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