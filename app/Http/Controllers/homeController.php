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
        $basic_salary = request('Basic_Salary');
        $house_rent = request('House_Rent');
        $Conveyance_Allowance = request('Conveyance_Allowance');
        $Medical_Allowance = request('Medical_Allowance');
        $Festival_Bonus = request('Festival_Bonus');
        $Provident_Fund = request('Provident_Fund');
        $Performance_Bonus = request('Performance_Bonus');
        $Investment_Amount = request('Investment_Amount');
        $tax_on_basic_salary = $basic_salary * 12;
        $tax_on_house_rent = ($house_rent - $basic_salary * 0.5);
        if ($tax_on_house_rent < 0) {
            $tax_on_house_rent = 0;
        }
        $tax_on_Conveyance_Allowance = $Conveyance_Allowance - 2500;
        if ($tax_on_Conveyance_Allowance < 0) {
            $tax_on_Conveyance_Allowance = 0;
        }
        $tax_on_Medical_Allowance = ($Medical_Allowance - $basic_salary * 0.1);
        if ($tax_on_Medical_Allowance < 0) {
            $tax_on_Medical_Allowance = 0;
        }
        $tax_on_Festival_Bonus = $Festival_Bonus * 2;
        $taxableIncome = $tax_on_basic_salary + $tax_on_house_rent + $tax_on_Conveyance_Allowance + $tax_on_Medical_Allowance + $tax_on_Festival_Bonus;
        $taxableIncomeSwap = $taxableIncome;

        //starts of tax calculation
        //the tops of each tax band
        $band1_top = 250000; //0%
        $band2_top = 650000;  //10%
        $band3_top = 1150000;  //15%
        $band4_top = 1750000; //    20%
        $band5_top = 4750000; //    25 %

        //no top of band 4

        //the tax rates of each band
        $band1_rate = 0;
        $band2_rate = 0.10;
        $band3_rate = 0.15;
        $band4_rate = 0.20;
        $band5_rate = 0.25;
        $band6_rate = 0.30;

        $starting_income = $income = $taxableIncome; //set this to your income

        $band1 = $band2 = $band3 = $band4 = $band5 = $band6 = 0;


        if ($income > $band5_top) {
            $band6 = ($income - $band5_top) * $band6_rate;
            $income = $band5_top;
        }

        if ($income > $band4_top) {
            $band5 = ($income - $band4_top) * $band5_rate;
            $income = $band4_top;
        }

        if ($income > $band3_top) {
            $band4 = ($income - $band3_top) * $band4_rate;
            $income = $band3_top;
        }

        if ($income > $band2_top) {
            $band3 = ($income - $band2_top) * $band3_rate;
            $income = $band2_top;
        }

        if ($income > $band1_top) {
            $band2 = ($income - $band1_top) * $band2_rate;
            $income = $band1_top;
        }

        $band1 = $income * $band1_rate;

        $total_tax_paid = $band1 + $band2 + $band3 + $band4 + $band5 + $band6;


        //end of tax calculation

        $allowableInvestmentLimit = $taxableIncome * 0.25;
        if ($taxableIncome <= 1000000) {
            $taxCredit = $allowableInvestmentLimit * 0.15;
            $total_tax_paid = $total_tax_paid - $taxCredit;
        }
        dd($total_tax_paid);

        return view('dashboard');
    }

}
