<?php
//      -----------ENVIO DE EMAIL-------

//Conexion a Base de datos
require_once "conexion.php";


class Email {
    public $nombre;
    public $email;

    public function __construct($nombre, $email) {
        $this->nombre = $nombre;
        $this->email = $email;
    }

    //Envio de Email
    public function enviarCorreo() {
        $cuerpo_email = "Nombre: " . $this->nombre . "\nEmail: " . $this->email;
        mail("jonnhydev@gmail.com", "Aurora Newsletter", $cuerpo_email);
    }
}

// Datos del Formulario de Newsletter
$nombre_news = $_POST['nombre'];
$email_news = $_POST['email'];

// Crear objeto Email y llamar al método enviarCorreo()
$email = new Email($nombre_news, $email_news);
$email->enviarCorreo();



//      --------QUERY-------
class ModeloNewsletter {
    static public function mdlNewsletter ($tabla, $datos) {
        $query = "INSERT INTO $tabla(nombre, email) VALUES (:nombre, :email)";
        
        $stmt = Conexion::conectar()->prepare($query);

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);

        if ($stmt-> execute()){
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }
        
        $stmt->closeCursor();
        $stmt = null;
    }
}





//mysqli
/*
mysqli_query($conexion, $query);

mysqli_close($conexion);

header("Location: index.php?ok");
*/
