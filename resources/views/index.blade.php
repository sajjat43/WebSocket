@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col-sm-8">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCategory">
                Add Student
            </button>
        </div>
    </div>
    <div class="row">
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Student Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <h1>Student List</h1>
            <tbody>
                @foreach($student as $data)
                <tr>
                    <td scope="row">{{ $data->id}}</td>
                    <td scope="row">{{ $data->student_name}}</td>
                    <td scope="row">{{ $data->student_email}}</td>
                    <td scope="row">{{ $data->student_address}}</td>


                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModalupdate">
                            <i class="fa-solid fa-pen-to-square"></i>update
                        </button>
                        {{-- <a type="button" class="btn btn-success" href=""><i class="fa-solid fa-eye"></i></a> --}}
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#exampleModaldelete">
                            <i class="fa-solid fa-trash-can"></i>Delete
                        </button>
                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>
    </div>
</div>



<!--  create  categoryModal -->
<div class="modal fade" id="exampleModalCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content my-3">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Give Student info</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('student.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="input-group m-2">
                        <label for="" class="input-group-text">Student Name</label>
                        <input type="text" class="form-control" id="student_name" name="student_name"
                            placeholder="Enter your student name">
                    </div>
                    <div class="input-group m-2">
                        <label for="" class="input-group-text">Email</label>
                        <input type="text" class="form-control" id="student_email" name="student_email"
                            placeholder="Enter your section ">
                    </div>
                    <div class="input-group m-2">
                        <label for="" class="input-group-text">Student Address</label>
                        <input type="text" class="form-control" id="student_address" name="student_address"
                            placeholder="Enter your address">
                    </div>
                    




                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection