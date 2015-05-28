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
    
    // Feed parejas y jugadores...
    $pareja1 = Pareja::create([ 'id' => 1, 'puntos' => 0 ]);
    Jugador::create([ 'name' => 'David María Arribas', 'slug' => 'david', 'pareja_id' => $pareja1->id ]);
    Jugador::create([ 'name' => 'Isabel de la Torre', 'slug' => 'isa', 'pareja_id' => $pareja1->id ]);

    $pareja2 = Pareja::create([ 'id' => 2, 'puntos' => 0 ]);
    Jugador::create([ 'name' => 'Cesar María Arribas', 'slug' => 'cesar', 'pareja_id' => $pareja2->id ]);
    Jugador::create([ 'name' => 'Sergio Hermida María', 'slug' => 'sergio', 'pareja_id' => $pareja2->id ]);
    
    $pareja3 = Pareja::create([ 'id' => 3, 'puntos' => 0 ]);
    Jugador::create([ 'name' => 'Andrés', 'slug' => 'andres', 'pareja_id' => $pareja3->id ]);
    Jugador::create([ 'name' => 'Carrondo', 'slug' => 'carrondo', 'pareja_id' => $pareja3->id ]);
    
    $pareja4 = Pareja::create([ 'id' => 4, 'puntos' => 0 ]);
    Jugador::create([ 'name' => 'Chus', 'slug' => 'chus', 'pareja_id' => $pareja4->id ]);
    Jugador::create([ 'name' => 'Jorge', 'slug' => 'jorge', 'pareja_id' => $pareja4->id ]);
    
    $pareja5 = Pareja::create([ 'id' => 5, 'puntos' => 0 ]);
    Jugador::create([ 'name' => 'Mónica Batán Zamora', 'slug' => 'monica', 'pareja_id' => $pareja5->id ]);
    Jugador::create([ 'name' => 'Hugo', 'slug' => 'hugo', 'pareja_id' => $pareja5->id ]);
    
    $pareja6 = Pareja::create([ 'id' => 6, 'puntos' => 0 ]);
    Jugador::create([ 'name' => 'Borja', 'slug' => 'borja', 'pareja_id' => $pareja6->id ]);
    Jugador::create([ 'name' => 'Cesitar', 'slug' => 'cesitar', 'pareja_id' => $pareja6->id ]);
    
    $pareja7 = Pareja::create([ 'id' => 7, 'puntos' => 0 ]);
    Jugador::create([ 'name' => 'Raul', 'slug' => 'raul', 'pareja_id' => $pareja7->id ]);
    Jugador::create([ 'name' => 'Nano', 'slug' => 'nano', 'pareja_id' => $pareja7->id ]);
    
    $pareja8 = Pareja::create([ 'id' => 8, 'puntos' => 0 ]);
    Jugador::create([ 'name' => 'Angelito', 'slug' => 'angelito', 'pareja_id' => $pareja8->id ]);
    Jugador::create([ 'name' => 'Luis Alberto Mechoso Delgado', 'slug' => 'luiggy', 'pareja_id' => $pareja8->id ]);
    
    $torneo = $this->getTorneo();

    // Feed torneo...
    $semana = new DateTime();
    
    forEach($torneo as $jornadaId => $partidos) {      
      $descanso = sizeof($partidos)==0 ? true : false;
      $jornada = Jornada::create([ 'id' => $jornadaId, 'semana' => $semana, 'vuelta' => $jornadaId <= 9 ? 1 : 2, 'descanso' => $descanso  ]);
      
      if(!$descanso) {
        forEach($partidos as $partido) {
          $parejaLocal = Pareja::find($partido[0]);
          $parejaVisitante = Pareja::find($partido[1]);
          Partido::create([ 'jornada_id' => $jornada->id, 'pareja_local_id' => $parejaLocal->id, 'pareja_visitante_id' => $parejaVisitante->id ]);
        }
      }
                  
      $semana->add(date_interval_create_from_date_string("+7 day"));
    }
  }    
  
  protected function getTorneo() {
    return [
        1 => [ [ 1, 2 ], [ 3, 4 ], [ 5, 8 ], [ 6, 7 ] ],
        2 => [ [ 1, 3 ], [ 2, 4 ], [ 5, 7 ], [ 6, 8 ] ],
        3 => [ [ 1, 4 ], [ 2, 5 ], [ 3, 6 ], [ 7, 8 ] ],
        4 => [ [ 1, 5 ], [ 2, 6 ], [ 3, 7 ], [ 4, 8 ] ],
        5 => [],
        6 => [ [ 1, 6 ], [ 2, 7 ], [ 3, 8 ], [ 4, 5 ] ],
        7 => [ [ 1, 7 ], [ 2, 8 ], [ 3, 5 ], [ 4, 6 ] ],
        8 => [ [ 1, 8 ], [ 2, 3 ], [ 4, 7 ], [ 5, 6 ] ],
        9 => [],
        
        10 => [ [ 2, 1 ], [ 4, 3 ], [ 8, 5 ], [ 7, 6 ] ],        
        11 => [ [ 3, 1 ], [ 4, 2 ], [ 7, 5 ], [ 8, 6 ] ],
        12 => [ [ 4, 1 ], [ 5, 2 ], [ 6, 3 ], [ 8, 7 ] ],
        13 => [ [ 5, 1 ], [ 6, 2 ], [ 7, 3 ], [ 8, 4 ] ],
        14 => [],
        15 => [ [ 6, 1 ], [ 7, 2 ], [ 8, 3 ], [ 5, 4 ] ],
        16 => [ [ 7, 1 ], [ 8, 2 ], [ 5, 3 ], [ 6, 4 ] ],
        17 => [ [ 8, 1 ], [ 3, 2 ], [ 7, 4 ], [ 6, 5 ] ],
        18 => [],
    ];
  }
}