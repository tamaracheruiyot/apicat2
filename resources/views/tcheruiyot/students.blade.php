@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 m-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Register your Student</h3>
                    </div>
                    <div class="card-body">
                    <form action="{{route('createStudent')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="student_name">Student Name</label>
                                <input required type="text" name="student_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="date_of_birth">Date of Birth</label>
                                <input required type="date" name="date_of_birth" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea required name="address" class="form-control"></textarea>
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