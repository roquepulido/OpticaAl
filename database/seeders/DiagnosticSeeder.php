<?php

namespace Database\Seeders;

use App\Models\Diagnostic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiagnosticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $diags = [
            "Ambliopía",
            "Astigmatismo",
            "Cataratas",
            "Daltonismo",
            "Retinopatía diabética",
            "Síndrome del ojo seco",
            "Miodesopsias",
            "Glaucoma",
            "Conjuntivitis aguda",
            "Desprendimiento de la retina",
        ];
        Diagnostic::create([
            'name' => "Ninguno"
        ]);
        foreach ($diags as $diag) {
            Diagnostic::create(["name" => $diag]);
        }
        // Diagnostic::factory(5)->create();
    }
}
