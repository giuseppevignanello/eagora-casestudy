<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProcedureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $procedures = config('procedures');

        foreach ($procedures as $procedure) {
            $newProcedure = new Procedure();
            $newProcedure->status = $procedure['status'];
            $newProcedure->employee_dni  = $procedure['employee_dni'];
            $newProcedure->save();
        }
    }
}
