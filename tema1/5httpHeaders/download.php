<?php
    //Ejercicio 4 Cabeceras respuesta Productos PachecoSaul

    // Its's a zip file
    header("Content-Type: application/zip");
    // 1 million bytes (about 1megabyte)
    //header("Content-Length: 1000000");
    // Load a download dialogue, and save it as download.zip
    header("Content-Disposition: attachment; filename='download.zip'");

    //1000 times 1000 bytes of data
    for ($i=0; $i < 1000; $i++) { 
        echo str_repeat(".", 1000);

        //sleep to slow down the download
        usleep(50000);
    }

?>