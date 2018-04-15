@extends('layouts.layoutf')

@section('title', '| Add User')

@section('content')
<h1 style="text-align:center"><b>Subhastes</b></h1>

<div class="row">
  @foreach($ar as $a)

  @foreach($a as $e)

    <div class="col-md-4">
        <div class="panel panel-default">
          <p><h3 style="text-align:center">{{$e->nom}}</h3></p>
        </br>
        <div class="panel-body" style="text-align:center">
          <div style="height:250px;text-align:center;marging-left:50px">
            <img src="http://127.0.0.1:8000/{{$e->imatge}}" style="width:100%;height:100%">
          </div>
        </br>

        <div class="panel-footer" style="text-align: justify">
          <?php
           $a=0;
          ?>
          @foreach($su as $s)
          <?php
           $a = $a+1;
           echo $a;
          ?>
          @if($s->id_article==$e->id)

            <h3 style="text-align:center">{{$s->data}}</h3>
            <h2 id=<?php echo "a".$a; ?>></h2>

          @endif
          @endforeach

        </div>

        </div>
      </br>

        <!-- <div class="panel-footer" style="text-align: justify">{{$e->caracteristiques}} </div> -->
      </div>

    </div>
  @endforeach
  @endforeach

  <form name="form">
  Tiempo que falta hasta el fin del año 2010.<br><br>
  <input type="text" size="5" class="form_input" name="year" disabled> años<br>
  <input type="text" size="5" class="form_input" name="month" disabled> meses<br>
  <input type="text" size="5" class="form_input" name="day" disabled> dias<br>
  <input type="text" size="5" class="form_input" name="hour" disabled> horas<br>
  <input type="text" size="5" class="form_input" name="minute" disabled> minutos<br>
  <input type="text" size="5" class="form_input" name="second" disabled> segundos<br>
  </form>

  </div>

<h1>Preparando la descarga</h1>
<h2 id='CuentaAtras'></h2>

<script>
$(document).ready(function(){
  countDown(<?php echo $a; ?>);

});
//Codigo que muestra la cuenta atras hasta el final del año 2010
//La Web del Programador
//http://www.lawebdelprogramador.com

//variables que determinan la fecha y hora final de la cuenta atras
toYear=2018;
toMonth=12;
toDay=31;
toHour=23;
toMinute=59;
toSecond=59;

function countDown(co)
{
  var i;

  for (i = 1; i <= co; i++) {
    document.getElementById("a"+i).innerHTML="hola";
  }

    new_year=0;
    new_month=0;
    new_day=0;
    new_hour=0;
    new_minute=0;
    new_second=0;
    actual_date=new Date();

    if(actual_date.getFullYear()>toYear)
    {

        //si ya nos hemos pasado del año, mostramos los valores a 0
        form.second.value=0;
        form.minute.value=0;
        form.hour.value=0;
        form.day.value=0;
        form.month.value=0;
        form.year.value=0;
    }else{
        new_second=new_second+toSecond-actual_date.getSeconds();
        if(new_second<0)
        {
            new_second=60+new_second;
            new_minute=-1;
        }
        form.second.value=new_second;

        new_minute=new_minute+toMinute-actual_date.getMinutes();
        if(new_minute<0)
        {
            new_minute=60+new_minute;
            new_hour=-1;
        }
        form.minute.value=new_minute;

        new_hour=new_hour+toHour-actual_date.getHours();
        if(new_hour<0)
        {
            new_hour=24+new_hour;
            new_day=-1;
        }
        form.hour.value=new_hour;

        new_day=new_day+toDay-actual_date.getDate();
        if(new_day<0)
        {
            x=actual_date.getMonth();
            if(x==0||x==2||x==4||x==6||x==7||x==9||x==11){new_day=31+new_day;}
            if(x==3||x==5||x==8||x==10){new_day=30+new_day;}
            if(x==1)
            {
                //comprobamos si es un año bisiesto...
                if(actual_date.getYear()/4-Math.floor(actual_date.getYear()/4)==0)
                {
                    actual_date=29+actual_date;
                }else{
                    actual_date=28+actual_date;
                }
            }
        }
        form.day.value=new_day;

        new_month=-1;
        new_month=new_month+toMonth-actual_date.getMonth();
        if(new_month<0)
        {
            new_month=11+new_month;
            new_year=-1;
        }
        form.month.value=new_month;

        new_year=new_year+toYear-actual_date.getFullYear();
        if(new_year<0)
        {
            form.year.value=0;
        }else{
            form.year.value=new_year;
            //vuelve a ejecutar la funcion dentro de 1000 milisegundos = 1 segundo
            setTimeout("countDown()",1000);
        }
    }
}
</script>


@endsection
