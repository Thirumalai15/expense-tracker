@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                <div class="card-header"><i class="fa fa-align-justify"></i> Simple Table</div>
                    <div class="card-body">
                        <table class="table table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Expense Item</th>
                                    <th>Expense Cost</th>
                                    <th>Expense Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expenses as $expense)
                                <tr>
                                    <td>{{ $expense->id }}</td>
                                    <td>{{ $expense->item }}</td>
                                    <td>{{ $sum }}</td>
                                    <td>{{ $expense->date_of_expense }}</td>
                                    {{-- <td><span class="badge badge-success">Active</span></td> --}}
                                </tr>
                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
