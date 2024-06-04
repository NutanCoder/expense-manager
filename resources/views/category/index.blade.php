@extends('layouts/app', ['title' => 'Category List'])

@section('content')
    <div class="container my-4">
        <div class="row mb-2">
            <div class="col">
                <h3>List of all Categories</h3>
            </div>
            <div class="col-auto">
                <a href="{{ route('category_create') }}" class="btn btn-warning">Add Category</a>
            </div>
        </div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Category ID</th>
                    <th>Category Title</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ date('d-M-y h:i:A', strtotime($category->created_at)) }}</td>
                        <td>
                            <a href="{{ route('category_edit', ['id' => $category->id]) }}" class="btn btn-warning">
                                Edit
                            </a>
                            <a href="{{ route('category_delete', ['id' => $category->id]) }}" class="btn btn-danger">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>


        </table>
    </div>
@endsection
