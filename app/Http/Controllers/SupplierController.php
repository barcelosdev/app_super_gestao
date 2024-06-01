<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $data = [
            'suppliers' => [
                0 => [
                    'name' => 'Fornecedor 1',
                    'status' => true,
                    'cnpj' => '33.947.186/0001-40',
                    'ddd' => '81',
                    'phone_number' => '99913-3931'
                ],
                1 => [
                    'name' => 'Fornecedor 2',
                    'status' => true,
                    'cnpj' => '98.224.482/0001-68',
                    'ddd' => '87',
                    'phone_number' => '98812-1393'
                ],
                2 => [
                    'name' => 'Fornecedor 3',
                    'status' => false,
                    'cnpj' => '01.308.754/0001-76',
                    'ddd' => '32',
                    'phone_number' => '98710-9876'
                ],
            ]
        ];

        return view('app.suppliers', $data);
    }
}
