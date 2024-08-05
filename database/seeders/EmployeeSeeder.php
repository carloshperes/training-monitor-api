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
                'avatar'    => '' 
            ],
            [
                'name'      => 'Alan Turin',
                'position'  => 'Matemático',
                'avatar'    => '' 
            ],
            [
                'name'      => 'Linus Torvalds',
                'position'  => 'Desenvolvedor C',
                'avatar'    => '' 
            ],
            [
                'name'      => 'Steve Jobs',
                'position'  => 'Gerente de Produto',
                'avatar'    => '' 
            ],
            [
                'name'      => 'John Doe',
                'position'  => 'Estagiário',
                'avatar'    => '' 
            ],
        ];

        foreach($employees as $employee){
            Employee::create($employee);
        }
    }
}
