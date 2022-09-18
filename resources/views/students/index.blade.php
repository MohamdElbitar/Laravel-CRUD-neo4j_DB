@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row">

                <div class="card">
                    <div class="card-header">
                        <h2>Students CRUD</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/students/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Student
                        </a>

                        <form action="{{ route('students.import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="file" class="form-control">
                            <br>
                            <button class="btn btn-primary">Import Student Data</button>
                        </form>

                        <table class="table table-bordered mt-3">
                            <tr>
                                <th colspan="3">
                                    List Of Students
                                    <a class="btn btn-danger float-end" href="{{ route('students.export') }}">Export User Data</a>
                                </th>
                            </tr>
                            <tr>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->mobile }}</td>

                                        <td>
                                            <form action="{{ route('students.destroy',$item->id) }}" method="POST">
                                                <a class="btn btn-info" href="{{ route('students.show', $item->id) }}">Show</a>
                                                <a class="btn btn-primary" href="{{ route('students.edit', $item->id) }}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>

                                        </td>
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
