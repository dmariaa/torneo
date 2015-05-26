<?php
use Illuminate\Database\Seeder;
use torneo\Pareja;
use torneo\Jugador;
use torneo\Jornada;
use torneo\Partido;

class JugadorSeeder extends Seeder{
  public function run() {
    DB::table('partidos')->delete();
    DB::table('jornadas')->delete();    
    DB::table('jugadores')->delete();
    DB::table('parejas')->delete();        
    
    $pareja1 = Pareja::create([ 'puntos' => 0 ]);
    Jugador::create([ 'name' => 'David María Arribas', 'slug' => 'david', 'pareja_id' => $pareja1->id ]);
    Jugador::create([ 'name' => 'Isabel de la Torre', 'slug' => 'isa', 'pareja_id' => $pareja1->id ]);

    $pareja2 = Pareja::create([ 'puntos' => 0 ]);
    Jugador::create([ 'name' => 'Cesar María Arribas', 'slug' => 'cesar', 'pareja_id' => $pareja2->id ]);
    Jugador::create([ 'name' => 'Sergio Hermida María', 'slug' => 'sergio', 'pareja_id' => $pareja2->id ]);
    
    $pareja3 = Pareja::create([ 'puntos' => 0 ]);
    Jugador::create([ 'name' => 'Andrés', 'slug' => 'andres', 'pareja_id' => $pareja3->id ]);
    Jugador::create([ 'name' => 'Carrondo', 'slug' => 'carrondo', 'pareja_id' => $pareja3->id ]);
    
    $pareja4 = Pareja::create([ 'puntos' => 0 ]);
    Jugador::create([ 'name' => 'Chus', 'slug' => 'chus', 'pareja_id' => $pareja4->id ]);
    Jugador::create([ 'name' => 'Jorge', 'slug' => 'jorge', 'pareja_id' => $pareja4->id ]);
    
    $pareja5 = Pareja::create([ 'puntos' => 0 ]);
    Jugador::create([ 'name' => 'Mónica Batán Zamora', 'slug' => 'monica', 'pareja_id' => $pareja5->id ]);
    Jugador::create([ 'name' => 'Hugo', 'slug' => 'hugo', 'pareja_id' => $pareja5->id ]);
    
    $pareja6 = Pareja::create([ 'puntos' => 0 ]);
    Jugador::create([ 'name' => 'Borja', 'slug' => 'borja', 'pareja_id' => $pareja6->id ]);
    Jugador::create([ 'name' => 'Cesitar', 'slug' => 'cesitar', 'pareja_id' => $pareja6->id ]);
    
    $pareja7 = Pareja::create([ 'puntos' => 0 ]);
    Jugador::create([ 'name' => 'Raul', 'slug' => 'raul', 'pareja_id' => $pareja7->id ]);
    Jugador::create([ 'name' => 'Nano', 'slug' => 'nano', 'pareja_id' => $pareja7->id ]);
    
    $pareja8 = Pareja::create([ 'puntos' => 0 ]);
    Jugador::create([ 'name' => 'Angelito', 'slug' => 'angelito', 'pareja_id' => $pareja8->id ]);
    Jugador::create([ 'name' => 'Luis Alberto Mechoso Delgado', 'slug' => 'luiggy', 'pareja_id' => $pareja8->id ]);

    $semana = new DateTime();
    
    $jornada = Jornada::create([ 'semana' => $semana ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja1->id, 'pareja_visitante_id' => $pareja2->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja3->id, 'pareja_visitante_id' => $pareja4->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja5->id, 'pareja_visitante_id' => $pareja8->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja6->id, 'pareja_visitante_id' => $pareja7->id ]);
    
    $semana->add(date_interval_create_from_date_string("+7 day"));
    $jornada = Jornada::create([ 'semana' => $semana ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja1->id, 'pareja_visitante_id' => $pareja3->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja2->id, 'pareja_visitante_id' => $pareja4->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja5->id, 'pareja_visitante_id' => $pareja7->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja6->id, 'pareja_visitante_id' => $pareja8->id ]);
    
    $semana->add(date_interval_create_from_date_string("+7 day"));
    $jornada = Jornada::create([ 'semana' => $semana ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja1->id, 'pareja_visitante_id' => $pareja4->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja2->id, 'pareja_visitante_id' => $pareja5->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja3->id, 'pareja_visitante_id' => $pareja6->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja7->id, 'pareja_visitante_id' => $pareja8->id ]);
    
    $semana->add(date_interval_create_from_date_string("+7 day"));
    $jornada = Jornada::create([ 'semana' => $semana ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja1->id, 'pareja_visitante_id' => $pareja5->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja2->id, 'pareja_visitante_id' => $pareja6->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja3->id, 'pareja_visitante_id' => $pareja7->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja4->id, 'pareja_visitante_id' => $pareja8->id ]);
    
    $semana->add(date_interval_create_from_date_string("+7 day"));
    $jornada = Jornada::create([ 'semana' => $semana ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja1->id, 'pareja_visitante_id' => $pareja6->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja2->id, 'pareja_visitante_id' => $pareja7->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja3->id, 'pareja_visitante_id' => $pareja8->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja4->id, 'pareja_visitante_id' => $pareja5->id ]);
    
    $semana->add(date_interval_create_from_date_string("+7 day"));
    $jornada = Jornada::create([ 'semana' => $semana ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja1->id, 'pareja_visitante_id' => $pareja7->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja2->id, 'pareja_visitante_id' => $pareja8->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja3->id, 'pareja_visitante_id' => $pareja5->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja4->id, 'pareja_visitante_id' => $pareja6->id ]);
    
    $semana->add(date_interval_create_from_date_string("+7 day"));
    $jornada = Jornada::create([ 'semana' => $semana ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja1->id, 'pareja_visitante_id' => $pareja8->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja2->id, 'pareja_visitante_id' => $pareja3->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja4->id, 'pareja_visitante_id' => $pareja7->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja5->id, 'pareja_visitante_id' => $pareja6->id ]);
    
    $semana->add(date_interval_create_from_date_string("+7 day"));
    $jornada = Jornada::create([ 'semana' => $semana ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja2->id, 'pareja_visitante_id' => $pareja1->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja4->id, 'pareja_visitante_id' => $pareja3->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja8->id, 'pareja_visitante_id' => $pareja5->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja7->id, 'pareja_visitante_id' => $pareja6->id ]);
    
    $semana->add(date_interval_create_from_date_string("+7 day"));
    $jornada = Jornada::create([ 'semana' => $semana ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja3->id, 'pareja_visitante_id' => $pareja1->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja4->id, 'pareja_visitante_id' => $pareja2->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja7->id, 'pareja_visitante_id' => $pareja5->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja8->id, 'pareja_visitante_id' => $pareja6->id ]);
    
    $semana->add(date_interval_create_from_date_string("+7 day"));
    $jornada = Jornada::create([ 'semana' => $semana ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja4->id, 'pareja_visitante_id' => $pareja1->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja5->id, 'pareja_visitante_id' => $pareja2->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja6->id, 'pareja_visitante_id' => $pareja3->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja8->id, 'pareja_visitante_id' => $pareja7->id ]);
    
    $semana->add(date_interval_create_from_date_string("+7 day"));
    $jornada = Jornada::create([ 'semana' => $semana ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja5->id, 'pareja_visitante_id' => $pareja1->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja6->id, 'pareja_visitante_id' => $pareja2->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja7->id, 'pareja_visitante_id' => $pareja3->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja8->id, 'pareja_visitante_id' => $pareja4->id ]);
    
    $semana->add(date_interval_create_from_date_string("+7 day"));
    $jornada = Jornada::create([ 'semana' => $semana ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja6->id, 'pareja_visitante_id' => $pareja1->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja7->id, 'pareja_visitante_id' => $pareja2->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja8->id, 'pareja_visitante_id' => $pareja3->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja5->id, 'pareja_visitante_id' => $pareja4->id ]);
    
    $semana->add(date_interval_create_from_date_string("+7 day"));
    $jornada = Jornada::create([ 'semana' => $semana ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja7->id, 'pareja_visitante_id' => $pareja1->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja8->id, 'pareja_visitante_id' => $pareja2->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja5->id, 'pareja_visitante_id' => $pareja3->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja6->id, 'pareja_visitante_id' => $pareja4->id ]);
    
    $semana->add(date_interval_create_from_date_string("+7 day"));
    $jornada = Jornada::create([ 'semana' => $semana ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja8->id, 'pareja_visitante_id' => $pareja1->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja3->id, 'pareja_visitante_id' => $pareja2->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja7->id, 'pareja_visitante_id' => $pareja4->id ]);
    Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $pareja6->id, 'pareja_visitante_id' => $pareja5->id ]);
  }    
}