<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees  = [
            [
                'name'      => 'Carlos Peres',
                'position'  => 'Desenvolvedor Full Stack',
                'avatar'    => '/avatars/carlos-peres.png' 
            ],
            [
                'name'      => 'Alan Turin',
                'position'  => 'Matemático',
                'avatar'    => 'alan-turing.jpg' 
            ],
            [
                'name'      => 'Linus Torvalds',
                'position'  => 'Desenvolvedor C',
                'avatar'    => '/avatars/linus-torvalds.jpg' 
            ],
            [
                'name'      => 'Steve Jobs',
                'position'  => 'Gerente de Produto',
                'avatar'    => '/avatars/steve-jobs.jpg' 
            ],
            [
                'name'      => 'John Doe',
                'position'  => 'Estagiário',
                'avatar'    => '/avatars/john-doe.jpg' 
            ],
        ];

        foreach($employees as $employee){
            Employee::create($employee);
        }
    }
}
