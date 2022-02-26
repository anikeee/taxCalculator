<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {

        return view('dashboard');
    }

    public function calculateTax()
    {
        $tax = 0;
        $basic_salary = request('Basic_Salary');
        $house_rent = request('House_Rent');
        $Conveyance_Allowance = request('Conveyance_Allowance');
        $Medical_Allowance = request('Medical_Allowance');
        $Festival_Bonus = request('Festival_Bonus');
        $Provident_Fund = request('Provident_Fund');
        $Performance_Bonus = request('Performance_Bonus');
        $Investment_Amount = request('Investment_Amount');
        $tax_on_basic_salary = $basic_salary*12;
        $tax_on_house_rent = ($house_rent - $basic_salary * 0.5);
        if ($tax_on_house_rent< 0) {
            $tax_on_house_rent = 0;
        }
        $tax_on_Conveyance_Allowance = $Conveyance_Allowance-2500;
        if ($tax_on_Conveyance_Allowance< 0) {
            $tax_on_Conveyance_Allowance = 0;
        }
        $tax_on_Medical_Allowance = ($Medical_Allowance - $basic_salary * 0.1);
        if ($tax_on_Medical_Allowance< 0) {
            $tax_on_Medical_Allowance = 0;
        }
        $tax_on_Festival_Bonus = $Festival_Bonus*2;
        $taxableIncome= $tax_on_basic_salary + $tax_on_house_rent + $tax_on_Conveyance_Allowance + $tax_on_Medical_Allowance + $tax_on_Festival_Bonus;
        if($taxableIncome<=250000){
            $tax=0;
        }
        else if($taxableIncome<=400000){
            $tax=($taxableIncome-250000)*0.1;
        }
        else if($taxableIncome<=400000){
            $tax=($taxableIncome-250000)*0.1;
        }

        return view('dashboard');
    }

}
