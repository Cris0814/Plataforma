<?php

namespace App\Exports;

use App\User;
use App\Herramienta;
use App\Estrategia;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
        return Herramienta::all();
        return Estrategia::all();
    }
}
