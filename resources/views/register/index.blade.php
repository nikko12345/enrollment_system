@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>Register students</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th> 
                    <th>Name</th>
                    <th>Course</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                </tr>
            </thead>
            <tbody> 
                    @foreach($students as $register)
             </tbody>   
        </table>
        </div>
    </div>
</div>
@endsection

