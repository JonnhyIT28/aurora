<?php

function manejoErrores($nivel, $mensaje, $archivo, $linea) {
    if ($nivel !== E_WARNING) {
        switch ($nivel) {
            case E_PARSE:
            case E_ERROR:
            case E_CORE_ERROR:
            case E_COMPILE_ERROR:
            case E_USER_ERROR:
                $tipo = "Error fatal";
                break;
            case E_NOTICE:
            case E_USER_NOTICE:
                $tipo = "Aviso";
                break;
            default:
                $tipo = "Desconocido";
                break;
        }

        echo "<strong>$tipo</strong><br>";
        echo "Mensaje: $mensaje<br>";
        echo "Archivo: $archivo<br>";
        echo "Línea: $linea<hr>";
    }
}

// Establecer manejo_errores como manejador de errores
set_error_handler('manejoErrores');



