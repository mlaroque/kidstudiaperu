<?php

    require dirname(__FILE__, 5) . "/wp-config.php";

    try {
        $conn = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASSWORD);
    }
    catch (PDOException $e) {
        echo '<p>ERROR: No se conecto a la base de datos..!</p>';
        exit;
    }

    $COLEGIOS = $_POST['univ'];
    $NIVELES = $_POST['nivel'];
    $NOMBRE = $_POST['nombre'];
    $EMAIL = $_POST['email'];
    $TELEFONO = $_POST['telefono'];
    $TIPO_CONTACTO = concatenar_valores_arr($_POST['tipo_contacto']);

    $HORA_CONTACTO = concatenar_valores_arr($_POST['hora_contacto']);

    $POST_TITLE = $_POST['post_title'];
    $POST_ID = $_POST['post_id'];
    $POST_TYPE = $_POST['post_type'];
    $RANDOM_KEY = generate_random_key();
    $EMAIL_CONFIRMADO = "0"; 


    $sql = "INSERT INTO LCMN_LEADS (NOMBRE,TELEFONO,EMAIL,COLEGIOS,NIVELES,TIPO_CONTACTO,HORA_CONTACTO,POST_TYPE, POST_TITLE, POST_ID, ACTIVATION_KEY, EMAIL_CONFIRMADO) VALUES ('".$NOMBRE."', '".$TELEFONO."', '".$EMAIL."', '".$COLEGIOS."', '".$NIVELES."', '".$TIPO_CONTACTO."', '".$HORA_CONTACTO."', '".$POST_TYPE."', '".$POST_TITLE."', '".$POST_ID."', '".$RANDOM_KEY."', '".$EMAIL_CONFIRMADO."');";
    $stmt = $conn->prepare($sql);

    if($stmt->execute()){
        echo  "success";
    }else{
        //Devolvemos el sql que falla
        echo $sql;
    }

	$conn = null;


    if($email !== ""){

        $headers = 'From: '.$NOMBRE.' '. $EMAIL ."\r\n";
        $headers .= "Reply-To: Kidstudia.pe<info@kidstudia.pe> \r\n";
        // $headers .= "Return-Path: info@canitas.mx\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=charset=iso-8859-1\r\n";
            
        // $to = $EMAIL;
        $to = "ricardo@lacomuna.mx";
        $subject = 'Solicitud de información: kidstudia.pe';
        $message = "";
    
        // $message .= 'Hola, '.$NOMBRE. ':<br><br>';
        $message .= 'Hola necesito más información de este colegio:<br>';
        $message .= "Colegio: " .$COLEGIOS . "<br>";
        $message .= "Niveles: " .$NIVELES . "<br>";
        $message .= "Nombre del solicitante: " .$NOMBRE . "<br>";
        $message .= "Contáctame por: ".$TIPO_CONTACTO."<br>";
        $message .= 'Teléfono: ' . $TELEFONO . "<br>";
        $message .= 'Gracias, espero su pronta respuesta. <br>';

        mail($to,$subject,$message,$headers);			
    }

    function generate_random_key() {
        $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
    
        $new_key = "";
        for ($i = 0; $i < 32; $i++) {
            $new_key .= $chars[rand(0,35)];
        }
        return $new_key;
    }

function concatenar_valores_arr($elementos){
    $concatenacion = '';
    foreach($elementos as $elem){
        $concatenacion .= $elem . ", ";
    }
    $concatenacion = trim($concatenacion, ', ');
    return $concatenacion;
}
?>