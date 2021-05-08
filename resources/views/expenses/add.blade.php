@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">{{ __('Add Expense') }}</div>
                    <form action="{{ route('expenses.store') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="date-input">{{ __('Date of Expense') }}</label>
                                <input class="form-control" id="date-input" type="date" name="date_of_expense">
                            </div>
    
                            <div class="form-group">
                                <label for="item">{{ __('Item') }}</label>
                                <input class="form-control" id="item" name="item" type="text" >
                            </div>
    
                            <div class="form-group">
                                <label for="item">{{ __('Cost of Item') }}</label>
                                <input class="form-control" id="cost" name="cost" type="text" >
                            </div>
                        </div>

                        <div class="card-footer">
                            <button class="btn btn-sm btn-primary" type="submit">{{ __('Add') }}</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
