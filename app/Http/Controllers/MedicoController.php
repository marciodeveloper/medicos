<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medico;
use Faker\Factory as Faker;


class MedicoController extends Controller
{
    public function index()
    {
        return view('medicos.index');
    }

    public function create()
    {
        return view('medicos.create');
    }

    public function store(Request $request)
    {
        $faker = Faker::create();

        $medico = Medico::create([
                'nome' => $faker->name,
                'especialidade' => $faker->randomElement(['Cardiologista', 'Neurologista', 'Oftalmologista']),
                'crm' => $faker->randomNumber(5),
            ]);

            return redirect()->route('medicos.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }


}
