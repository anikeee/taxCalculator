@extends('layouts.frontend')
@section('page-title', 'Create StudentRequest')

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="">Vision Eye Hospital </a></li>
@endsection
@section('page-content')
    <div class="card card-primary col-md-6">
        {{--        @if(isset($total_tax_paid))--}}
        {{--            <div class="ml-4 mt-4">--}}
        {{--                <h3 class="card-title" style="color: yellowgreen">Result : </h3> <br>--}}
        {{--                <p style="color: yellowgreen">Tax need to be paid : {{$total_tax_paid}} BDT on Taxable--}}
        {{--                    Income : {{$taxableIncome}} BDT</p>--}}
        {{--                <p style="color: yellowgreen">Allowable Investment Limit : {{$allowableInvestmentLimit}}</p>--}}
        {{--            </div>--}}
        {{--        @endif--}}

        <div class="card-header">
            <h3 class="card-title">Create Student</h3><br>
            @if(isset($message))
                <p style="color: white;">{{$message}}</p>
            @endif
        </div>


        <form action="
        @if(isset($student))
                    {{route('update.student', $student->id)}}
        @else
                    {{route('store.student')}}
        @endif
            " method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name : </label>
                    <input type="text" class="form-control" id="name" placeholder="write your name please"
                           name="name"
                           @if(isset($student))
                           value="{{$student->name}}"
                           @endif
                           required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email : </label>
                    <input type="email" class="form-control" id="email" placeholder="write your email please"
                           name="email"
                           @if(isset($student))
                           value="{{$student->email}}"
                           @endif
                           required>
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
