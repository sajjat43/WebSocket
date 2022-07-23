@extends('layouts.app')

@section('content')
<form action="{{route('student.update',$student->id)}}" method="POST" enctype="multipart/form-data">
    {{-- <input type="text"> --}}
    @csrf
    <div class="continer col md-8">
        <div class="modal-body">
            <div class="input-group m-2">
                <label for="" class="input-group-text">Student Name</label>
                <input type="text" class="form-control" id="student_name" name="student_name"
                    value="{{ $student->student_name }}">
            </div>
            <div class="input-group m-2">
                <label for="" class="input-group-text">Email</label>
                <input type="text" class="form-control" id="student_email" name="student_email"
                    value="{{ $student->student_email }}">
            </div>
            <div class="input-group m-2">
                <label for="" class="input-group-text">Student Address</label>
                <input type="text" class="form-control" id="student_address" name="student_address"
                   value="{{ $student->student_address }}">
            </div>

        </div>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection