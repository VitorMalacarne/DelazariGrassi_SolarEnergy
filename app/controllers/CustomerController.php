<?php

require_once '../app/models/Customer.php';

class CustomerController
{
    public function index()
    {
        $name = $_GET['name'] ?? null;
        $customers = Customer::all($name);

        require '../app/views/customers/index.php';
    }

    public function show($id)
    {
        $customer = Customer::find($id);

        require '../app/views/customers/show.php';
    }
}
