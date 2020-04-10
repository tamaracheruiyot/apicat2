@extends('layouts.app')
@section('content')
<div class="container text-center">
    <div class="row justify-content-center">
      <div class="col-md-7">
        <h1 class="font-weight-dark mt-4 text-dark">Welcome to Tamara's API CAT 2 Project!</h1>
        <p class="lead text-dark-50">Simply log in or sign up to view student's fee payment</p>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <a href="/students" class="btn btn-xl btn-primary">add a new student</a>
                </div>
                <div class="col-md-6">
                    <a href="/fees" class="btn btn-xl btn-primary">add fee payment</a>
                </div>
            </div>
        </div>
      </div>
    </div>
@endsection
