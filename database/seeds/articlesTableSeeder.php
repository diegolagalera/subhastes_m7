<?php

use Illuminate\Database\Seeder;
use App\articles;
class articlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      articles::create([
        'nom'=> 'PlayStation 4',
        'descripcio'=> 'El producto representa una consola PS4 de 1TB',
        'caracteristiques'=> 'Incluye Consola de 1TB y Gran Turismo Sport
Incluye un mando
Un 50 % más de núcleos gráficos y un mayor rendimiento máximo de sombreado
Accede a películas, música y juegos multijugador a través del mundo online de PlayStation',
        'imatge'=> 'images/1522770992.png',
      ]);
      articles::create([
        'nom'=> 'Congelador horitzontal artica',
        'descripcio'=> 'El producte representa un congelador de la marca artica',
        'caracteristiques'=> 'Capacitat neta congelador: 412 L
Capacitat de congelació: 19 kg/24h
Pes net: 55 Kg
Consum (kwh/24h): 0
Domencions: 1424x720x865
Clase climatica: SN/N/ST/T
Voltatge: 220-240V',
        'imatge'=> 'images/1522775031.png',
      ]);
      articles::create([
        'nom'=> 'Altaveu Bluetooth Estereo',
        'descripcio'=> 'Altaveu inalambric portàtil Subwoofer, 3D So digital amb 15 Horas d\'emisió continua',
        'caracteristiques'=> 'Dimensions del producte: 19,3 x 5,7 x 8,2 cm ; 662 g
        40W
        Bluetooth: 4.2
        Resposta de freqüencia: 115Hz-13KHz
        Bateria: 7.4V / 3300mAh X 2',
        'imatge'=> 'images/1522776160.png',
      ]);
      articles::create([
        'nom'=> 'Xiaomi Mi A1',
        'descripcio'=> 'Xiaomi Mi A1 Dual Sim 4G 64GB (Lliure) - Or',
        'caracteristiques'=> 'Pantalla LTPS FHD de 5.5 ", resolución 1920 x 1080, 403 PPI
        Cámara trasera 12MP + 12MP
        Bluetooth 4.2
        Bateria 3080mAh
        Processador Snapdragon 625
        ',
        'imatge'=> 'images/123.png',
      ]);


    }
}
