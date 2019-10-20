<?php
namespace Hashbyte\BMI\Controllers;

use Illuminate\Routing\Controller;

class BMIController extends Controller
{
    public function index()
    {
        $bmi = "This is Index method";        
        return view('bmi::index', compact('bmi'));
    }
}