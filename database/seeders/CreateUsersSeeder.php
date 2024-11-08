<?php

  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                 'nom'=>'Afdel',
                 'Prénom'=>'Karim',
                 'email'=>'Chef.laboratoir@gmail.com',
                 'tél'=>'0528220957',
                 'Grade'=>'PES',
                 'Equipe'=>'no',
                 'Encadrant'=>'NULL',
                 'co-Encadrant'=>'NULL',
                 'Cne'=>'NULL',
                  'Cin'=>'N15005',
                  'image'=>'images\profs\1680655900.jpg',
                   'Etablissement'=>'NULL',
                   'type'=>1,
                   'is_activated'=>1,
                   'activation_code'=>'NULL',
                   'password'=> bcrypt('Chef.laboratoir@gmail.com'),
            ],
            [
               'nom'=>'P.Yassine',
               'email'=>'chefEquipe1Yassine@gmail.com',
               'type'=> 2,
             'Prénom'=>'elmeer',
               'tél'=>'0622560957',
               'Grade'=>'Ph',
                'Equipe'=>'null',
                 'Encadrant'=>'no',
                'co-Encadrant'=>'no',
                 'Cne'=>'no',
                 'Cin'=>'jm5775',
                 'image'=>'images\profs\chegequipe',
                'Etablissement'=>'no',
                'is_activated'=>1,
                   'activation_code'=>'NULL',
               'password'=> bcrypt('chefEquipe1Yassine@gmail.com'),
            ],
            
           

             [
                'nom'=>'Adjoint',
                'email'=>'Adjoint@gmail.com',
                'type'=>4,
                'Prénom'=>'NORAM',
                'tél'=>'052550957',
                 'Grade'=>'PH',
                 'Equipe'=>'no',
                 'Encadrant'=>'NULL',
                 'co-Encadrant'=>'NULL',
                 'Cne'=>'NULL',
                  'Cin'=>'N15005',
                  'image'=>'img\cheflabo.jpg',
                   'Etablissement'=>'NULL',
                   'is_activated'=>1,
                   'activation_code'=>'NULL',
                'password'=> bcrypt('Adjoint@gmail.com'),
             ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
