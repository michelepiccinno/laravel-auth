@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            @foreach ($posts as $post)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">{{ $post->name }}</div>
                        <div class="card-body">{{ $post->description }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
