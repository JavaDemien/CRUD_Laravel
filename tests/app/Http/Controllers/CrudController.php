<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CrudRequest;
use App\Models\Cars;

class CrudController extends Controller
{

    public function index()
    {
        return redirect()->route('all');
    }

    public function allData() {
        $cars = Cars::all();
        return view('crud.table', ['cars' => $cars]);
    }

    public function create() {

        return view('crud.create');
    }

    public function store(CrudRequest $req) {

        $table = new Cars;
        $table->fill($req->all());

        $table->save();

        return redirect()->route('all')->with('success', 'Автомобиль был добавлен в Базу Данных');
    }

    public function edit($id) {

        $table = Cars::find($id);

        return view('crud.edit', ['car' => $table]);

    }

    public function update(CrudRequest $req, $id) {

        $car = Cars::find($id);
        $car->fill($req->all());
        $car->save();

        return redirect()->route('all');
    }

    public function delete($id)
    {
        Cars::find($id)->delete();
        return redirect()->route('table')->with('success', 'Запись удалена');
    }
}
