@extends('layouts/app', ['title' => 'Create Category'])

@section('content')
    <div class="container my-4">
        <div class="card">
            <div class="card-header">
                <h3>Categories</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('category_store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="my-2">Category Title</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="my-2">Description</label>
                        <input type="text" name="description" id="description" class="form-control" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
