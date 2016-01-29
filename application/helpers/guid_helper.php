<?php
    function guid(){
        if (function_exists('com_create_guid'))
        {
            return trim(com_create_guid(),'{}');
        }
        else
        {
            mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
            $charid = strtoupper(md5(uniqid(rand(), true)));
            $hyphen = chr(45);// "-"
            $uuid = chr(123)// "{"
            .substr($charid, 0, 8).$hyphen
            .substr($charid, 8, 4).$hyphen
            .substr($charid,12, 4).$hyphen
            .substr($charid,16, 4).$hyphen
            .substr($charid,20,12)
                    .chr(125);// "}"
                    return trim($uuid,'{}');
        }
    }


    function aObjeto($array)
    {
        $object = new stdClass();
        foreach ($array as $key => $value) {
            if (is_array($value))
            {
                $value = aObjeto($value);
            }
            $object->$key = $value;
        }
        return $object;
    }

    
    function img64aNombre($nombre,$trama)
    {
        if($trama!="undefined")
        {
            $a=explode(';',$trama);
            $b=explode('/',$a[0]);
            $extension=$b[1];
            return trim($nombre.'.'.$extension);

        }
        else{
            return 'default.png';
        }   
    }

    function img64adata($trama)
    {
        $a=explode(';',$trama);
        $b=explode('/',$a[0]);
        $c=explode(',',$a[1]);
        $data_imagen=$c[1];
        $data=str_replace(' ', '+', $data_imagen);
        return $data;

    }

    function cambiarNombreFoto($nombre_foto,$codigo)
    {
        $a=explode('.',$nombre_foto);//SEPARAR EXTENSION
        return trim($codigo.'.'.$a[1]);
    }

    function almacenarImagenFile($nombre,$data)
    {
        $ruta_foto_perfil_empleado='assets/img/empleados/';
        if($archivo=write_file($ruta_foto_perfil_empleado.$nombre,base64_decode($data)))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }

    }