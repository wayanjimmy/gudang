@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <form action="{{ route('categories.index') }}" method="GET">
                        <div class="form-group">
                            <input type="text" class="form-control" id="search" placeholder="Search" name="search" value="{{ $search }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr class="{{ ($loop->odd) ? 'table-secondary' : '' }}">
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="{{ route('categories.edit', $category->id) }}">Edit</a> | Delete
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $categories->appends(compact('search'))->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

