@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
{{--       @foreach($extensions as $extension)--}}
{{--           {{$extension}}--}}
{{--        @endforeach--}}
        @foreach($files as $file)
            <div class="col-lg-3">
                <div class="mt-4">
                    <div class="card" style="height: 200px">
                        @if($file->extension === 'jpeg' || $file->extension === 'png' || $file->extension === 'jpg')
                            <img src="{{\Illuminate\Support\Facades\Storage::url($file->StorageFileName)}}" class="card-img-top img-width" alt="...">
                            <div class="card-body d-flex align-items-center">
                                <i class="bi bi-image text-danger fs-5 me-2"></i>
                                <p class="card-text">{{$file->UiDbFileName}}</p>
                            </div>
                            @elseif($file->extension === 'xlsx')
                            <img src="{{asset('storage/xlsx.jpeg')}}" class="card-img-top img-icon" alt="...">

                            <div class="card-body d-flex align-items-center">
                                <p class="bg-success px-2 rounded-1 text-white fs-6 mb-0 me-2">x</p>
                                <p class="card-text">{{$file->UiDbFileName}}</p>
                            </div>

                        @elseif($file->extension === 'docx')
                            <img src="{{asset('storage/docx.png')}}" class="card-img-top img-icon" alt="...">

                            <div class="card-body d-flex align-items-center">
                                <p class="bg-primary px-2 rounded-1 text-white fs-6 mb-0 me-2">w</p>
                                <p class="card-text">{{$file->UiDbFileName}}</p>
                            </div>

                        @elseif($file->extension === 'pdf')
                            <img src="{{asset('storage/pdf.png')}}" class="card-img-top img-icon" alt="...">

                            <div class="card-body d-flex align-items-center">
                                <p class="bg-danger px-2 rounded-1 text-white fs-6 mb-0 me-2">pdf</p>
                                <p class="card-text">{{$file->UiDbFileName}}</p>
                            </div>
                            @endif

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
