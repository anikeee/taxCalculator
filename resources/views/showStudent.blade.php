@extends('layouts.frontend')
@section('page-title', 'Student Details')

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="">Vision Eye Hospital </a></li>
@endsection
@section('page-content')
    <div class="card card-primary col-md-6">


        <div class="card-header">
            <h3 class="card-title">Student Details</h3><br>

        </div>

        <table id="demandlist" class="table table-responsive display nowrap button-table" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="left">No</th>
                <th class="left">Name</th>
                <th class="left">Email</th>
                <th class="left">Created</th>
                <th class="left">Edit</th>
                <th class="left">Delete</th>
                <th></th>
            </tr>
            </thead>

            <tbody>
            @foreach ($students as $k => $student)
                <tr>
                    <td class="left">{{ $k + 1 }}</td>
                    <td class="left">{{ $student->name }}</td>
                    <td class="left">{{ $student->email }}</td>

                    <td class="left">{{ $student->created_at->isoFormat('Do MMM YYYY') }}</td>
                    <td class="left"><a href="{{route('studentEdit',$student->id)}}">Edit</a>
                          </td>
                    <td class="left"> Delete
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>



    </div>

@endsection

@section('page-script')
    <script src="{{ asset('assets/custom/page/js/dashboard.js') }}"></script>

@endsection
