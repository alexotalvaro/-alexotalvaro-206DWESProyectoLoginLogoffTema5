<?php
/*
 * @author: ALEJANDRO OTÁLVARO MARULANDA
 * @since: 30 11 2022
 * Última Actualización: 07 12 2022
 */
//define("dsn", 'mysql:dbname=DB206DWESProyectoTema5;host=192.168.1.214');
//define("usuario", 'user206DWESTema5');
//define("contra", 'paso');

define("dsn", 'mysql:dbname=DB206DWESProyectoTema5;host=192.168.20.19');
define("usuario", 'user206DWESTema5');
define("contra", 'paso');

require_once '../core/221024libreriaValidacionFormularios.php';
$aErrores = ['usuario' => null, 'contra' => null];
$aRespuesta = ['usuario' => null, 'contra' => null];
$entradaOk = true;

if (isset($_REQUEST['inicioSesion'])) {
    $aErrores['usuario'] = validacionFormularios::comprobarAlfabetico($_REQUEST['usuario'], 300, 1, 1);
    $aErrores['contra'] = validacionFormularios::comprobarAlfabetico($_REQUEST['contra'], 300, 1, 1);

    foreach ($aErrores as $key => $value) {

        if ($value != null) {
            $_REQUEST[$key] = '';
            $entradaOk = false;
        }
    }
    $aRespuesta['usuario'] = $_REQUEST['usuario'];
    $aRespuesta['contra'] = $_REQUEST['contra'];
} else {
    $entradaOk = false;
}

if ($entradaOk) {
    try {
        $miDB = new PDO(dsn, usuario, contra); //Conexion a la BD
        $consultaUsuario = "SELECT * FROM T01_Usuario WHERE T01_CodUsuario='$aRespuesta[usuario]'";
        $consultaUsuarioExe = $miDB->prepare($consultaUsuario);
        $consultaUsuarioExe->execute();
        $oUsuario = $consultaUsuarioExe->fetchObject();

        if ($oUsuario && $oUsuario->T01_Password == hash('sha256', ($aRespuesta['usuario'] . $aRespuesta['contra']))) {
            session_start();
            header('Location: programa.php');
            die;
        } else {
          header('Location: login.php');
            die;
        }
    } catch (PDOException $excepcion) {
        echo $excepcion->getMessage();
    } finally {
        unset($miDB);
    }
}
?>


<html>

    <head>
        <meta charset="UTF-8">
        <title>LOGIN / LOGOFF</title>
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Rajdhani:wght@300&display=swap" rel="stylesheet">
        <link href="../weboroot/css/estilos-login.css" rel="stylesheet" type="text/css">

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
                        <input type="text" name="usuario" value="<?php echo ''; ?>">
                        <?php
                        if ($aErrores['usuario'] != null) {
                            print '<p style="color: red";>' . 'Error en el campo' . '</p>';
                        }
                        ?>
                        <br>
                        <label> Contraseña: </label>
                        <input type="password" name="contra" value="<?php echo ''; ?>">
                        <?php
                        if ($aErrores['contra'] != null) {
                            print '<p style="color: red";>' . 'Error en el campo' . '</p>';
                        }
                        ?>

                        <br>
                        <input type="submit" name="inicioSesion" value="Iniciar Sesion" >
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