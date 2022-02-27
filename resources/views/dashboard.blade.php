@extends('layouts.frontend')
@section('page-title', 'Calculator')

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="">Tax Calculator ( Income tax return 2019-2020 in Bangladesh ) </a></li>
@endsection
@section('page-content')
    <div class="card card-primary col-md-6">
        @if(isset($total_tax_paid))
            <div class="ml-4 mt-4">
                <h3 class="card-title" style="color: yellowgreen">Result : </h3> <br>
                <p style="color: yellowgreen">Tax need to be paid : {{$total_tax_paid}} BDT on Taxable
                    Income : {{$taxableIncome}} BDT</p>
                <p style="color: yellowgreen">Allowable Investment Limit : {{$allowableInvestmentLimit}}</p>
            </div>
        @endif

        <div class="card-header">
            <h3 class="card-title">Salary Breakdown</h3>
        </div>


        <form action="{{route('calculate.tax')}}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Basic Salary (Monthly)</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Basic Salary"
                           name="Basic_Salary">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">House Rent (Monthly)</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="House Rent"
                           name="House_Rent">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Conveyance Allowance (Monthly)</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="Conveyance_Allowance"
                           placeholder="Conveyance Allowance">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Medical Allowance (Monthly)</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="Medical_Allowance"
                           placeholder="Medical Allowance">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Festival Bonus (Per Eid)</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="Festival_Bonus"
                           placeholder="Festival Bonus">
                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Provident Fund (per month)</label>
                                    <input type="number" class="form-control" id="exampleInputPassword1" name="Provident_Fund"
                                           placeholder="Provident Fund">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Performance Bonus/ Leave Allowance/ Other Benefits (In a Year)</label>
                                    <input type="number" class="form-control" id="exampleInputPassword1" name="Performance_Bonus"
                                           placeholder="Performance Bonus/ Leave Allowance/ Other Benefits">
                                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Investment Amount</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="Investment_Amount"
                           placeholder="Investment Amount">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

@endsection

@section('page-script')
    <script src="{{ asset('assets/custom/page/js/dashboard.js') }}"></script>

@endsection
