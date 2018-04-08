@extends('layouts.layoutf')

@section('title', '| Add User')

@section('content')

<h1>Preparando la descarga</h1>
<h2 id='CuentaAtras'></h2>

<script language="JavaScript">

    /* Determinamos el tiempo total en segundos */
    var totalTiempo=10;
    /* Determinamos la url del archivo o del boton de descarga,(en ejemplo descarga de freebsd */
    var url="http://ftp.freebsd.org/pub/FreeBSD/releases/ISO-IMAGES/10.0/CHECKSUM.MD5-10.0-RELEASE-amd64";

    function updateReloj()
    {
        document.getElementById('CuentaAtras').innerHTML = "Por favor, espera "+totalTiempo+" segundos";

        // if(totalTiempo==0)
        // {
        //     window.location=url;
        // }else{
        //     /* Restamos un segundo al tiempo restante */
        //     totalTiempo-=1;
        //     /* Ejecutamos nuevamente la función al pasar 1000 milisegundos (1 segundo) */
        //     setTimeout("updateReloj()",1000);
        // }
    }

    window.onload=updateReloj;

    </script>

@endsection
