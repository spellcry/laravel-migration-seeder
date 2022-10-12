<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'azienda' => 'Trenitalia',
                'stazione_partenza' => 'Bologna Centrale',
                'stazione_arrivo' => 'Roma Termini',
                'orario_partenza' => '12:00',
                'orario_arrivo' => '18:00',
                'codice_treno' => '53142',
                'numero_carrozze' => 10,
                'in_orario' => 0
            ],
            [
                'azienda' => 'Italo treno',
                'stazione_partenza' => 'Napoli Centrale',
                'stazione_arrivo' => 'Milano Centrale',
                'orario_partenza' => '15:00',
                'orario_arrivo' => '19:45',
                'codice_treno' => '5A78T',
                'in_orario' => 0,
                'cancellato' => 1
            ],
            [
                'azienda' => 'Italo treno',
                'stazione_partenza' => 'Milano Centrale',
                'stazione_arrivo' => 'Firenze Santa Maria Novella',
                'orario_partenza' => '9:00',
                'orario_arrivo' => '10:55',
                'codice_treno' => '90P12'
            ],
            [
                'azienda' => 'Frecciarossa',
                'stazione_partenza' => 'Milano Centrale',
                'stazione_arrivo' => 'Roma termini',
                'orario_partenza' => '14:00',
                'orario_arrivo' => '17:15',
                'codice_treno' => '1MT98',
                'in_orario' => 0
            ],
            [
                'azienda' => 'Frecciarossa',
                'stazione_partenza' => 'Bologna Centrale',
                'stazione_arrivo' => 'Firenze Santa Maria Novella',
                'orario_partenza' => '17:15',
                'orario_arrivo' => '17:52',
                'codice_treno' => 'U46TA'
            ],
        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->azienda = $train['azienda'];
            $newTrain->stazione_partenza = $train['stazione_partenza'];
            $newTrain->stazione_arrivo = $train['stazione_arrivo'];
            $newTrain->orario_partenza = $train['orario_partenza'];
            $newTrain->orario_arrivo = $train['orario_arrivo'];
            $newTrain->codice_treno = $train['codice_treno'];
            if ( isset($train['numero_carrozze']) )
                $newTrain->numero_carrozze = $train['numero_carrozze'];
            if ( isset($train['in_orario']) )
                $newTrain->in_orario = $train['in_orario'];
            if ( isset($train['cancellato']) )
                $newTrain->cancellato = $train['cancellato'];
                
            $newTrain->save();
            }

    }
}
