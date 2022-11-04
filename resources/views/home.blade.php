@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        @foreach($files as $file)
            <div class="col-lg-3">
                <div class="mt-4">
                    <div class="card">
                        <img src="{{\Illuminate\Support\Facades\Storage::url($file->StorageFileName)}}" class="card-img-top img-width" alt="...">
                        <div class="card-body d-flex align-items-center">
                            <i class="bi bi-image text-danger fs-5 me-2"></i>
                            <p class="card-text">{{$file->UiDbFileName}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
