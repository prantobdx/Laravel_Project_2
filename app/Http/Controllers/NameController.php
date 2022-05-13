<?php

namespace App\Http\Controllers;

class NameController extends Controller
{
    protected $firstName = 'Pranto';
    protected $lastName = 'Das';
    protected $fullname;

    public function index()
    {
        return $this->firstName;
    }

    public function myname()
    {
        // return $this->fullname = $this->firstName . ' ' . $this->lastName;

        // return view( 'full-name', [
        //     'firstName' => $this->firstName,
        //     'lastName'  => $this->lastName,
        // ] );

        $firstName = $this->firstName;
        $lastName = $this->lastName;

        return view( 'full-name', compact( ['firstName', 'lastName'] ) );
    }

}