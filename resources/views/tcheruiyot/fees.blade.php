@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 m-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Add the student's fee payment</h3>
                    </div>
                    <div class="card-body">
                    <form action="{{route('createFee')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="student_name">Student Name</label>
                                <select required name="student_number" class="form-control">
                                    <option selected disabled>Select your student</option>
                                    @foreach ($students as $item)
                                    <option value=" {{ $item->student_number }} "> {{ $item->full_name }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="date_of_payment">Date of Payment</label>
                                <input required type="date" name="date_of_payment" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="amount">Amount Paid</label>
                                <input required type="float" name="amount" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Submit Student Data" class="btn btn-xl btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection