{{-- \resources\views\users\index.blade.php --}}
@extends('layouts.layout')

@section('title', '| Users')

@section('content')

<div class="col-lg-10 col-lg-offset-1">
    <!-- <h1><i class="fa fa-users"></i> User Administration <a href="{{ url('roles/index') }}" class="btn btn-default pull-right">Roles</a>
    <a href="{{ url('permissions/index') }}" class="btn btn-default pull-right">Permissions</a></h1>
    <hr> -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom article</th>
                    <th>Preu</th>
                    <th>Estat</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
              <?php
               $a=0;
              ?>
                @foreach ($su as $subhasta)
                <?php
                 $a = $a+1;
                 echo $a;
                ?>


                <tr>

                    <td>{{ $subhasta->id }}</td>
                    <td>{{ $subhasta->id_article }}</td>
                    <td>{{ $subhasta->preu_venta.'$' }}</td>

                    <td>{{ $subhasta->actiu}}</td>
                    <td id=<?php echo "a".$a; ?>>{{ $subhasta->data}}</td>

                    <td>
                    <a href="{{ url('subhastes/'.$subhasta->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['subhastes.destroy', $subhasta->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <a href="{{ url('subhastes/create') }}" class="btn btn-success">Crear Subhastes</a>

</div>
<h2 id='CuentaAtras'></h2>

<button onclick="aa()">hola</button>

<form name="form">
Tiempo que falta hasta el fin del año 2010.<br><br>
<input type="text" size="5" class="form_input" name="year" disabled> años<br>
<input type="text" size="5" class="form_input" name="month" disabled> meses<br>
<input type="text" size="5" class="form_input" name="day" disabled> dias<br>
<input type="text" size="5" class="form_input" name="hour" disabled> horas<br>
<input type="text" size="5" class="form_input" name="minute" disabled> minutos<br>
<input type="text" size="5" class="form_input" name="second" disabled> segundos<br>
</form>





<script>
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

function countDown()
{
  var co=<?php echo $a; ?>;

  var i;

  for (i = 1; i <= co; i++) {
    document.getElementById("a"+i).innerHTML=i;
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
