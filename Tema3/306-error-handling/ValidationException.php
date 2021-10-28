<?php
class ValidationException extends Exception{
    function exception_error_handler($severidad, $mensaje, $fichero, $línea) {
        if (!(error_reporting() & $severidad)) {
            // Este código de error no está incluido en error_reporting
            return;
        }
        throw new ErrorException($mensaje, 0, $severidad, $fichero, $línea);
    }
    //set_error_handler("exception_error_handler");

    /* Desencadenar la excepción */
    //strpos();
}