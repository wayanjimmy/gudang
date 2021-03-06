@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <form action="{{ route('categories.update', $category->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="name" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Enter name" value="{{ $category->name }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>

                    <h2>History</h2>
                    <ul>
                        @foreach($activities as $activity)
                        <li>({{ $activity->subject }}): {{ $activity->description }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


