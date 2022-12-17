@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
    <div class="row">
        @foreach ($viewData["reporte"] as $reporte)
            <div class="col-md-4 col-lg-3 mb-2">
                <div class="card">
                    <img src="{{ asset('/storage/'.$reporte->getImage()) }}" class="card-img-top img-card">
                    <div class="card-body text-center">
                        <a href="{{ route('reporte.show', ['id'=>  $reporte->getId()]) }}"
                        class="btn bg-primary text-white">>{{ $reporte->getName() }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection