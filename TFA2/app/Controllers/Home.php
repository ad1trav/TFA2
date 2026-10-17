<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('pages/home');
    }

    public function about(): string
    {
        return view('pages/about');
    }

  public function customers()
{
 // Connect to the Customers Database
    $customersDB = \Config\Database::connect('customersDB');

    // Retrieve all customers
    $customers = $customersDB->table('customers')
                             ->get()
                             ->getResultArray();

    // Pass the records to the View
    return view('customers/index', [
        'customers' => $customers
    ]);
}

    public function users()
{
    $usersDB = \Config\Database::connect('default');

    $users = $usersDB->table('users')
                     ->orderBy('id', 'ASC')
                     ->get()
                     ->getResultArray();

    return view('users/index', [
        'users' => $users
    ]);
}
}
