@extends('main')
@section('title', 'Bandit - Activities')  

@section('content')

<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card border-radius">
            <div class="card-header">
                @if (session('booked'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('booked') }}
                        <button type="button" class="btn-close" aria-label="Close"></button>
                    </div>
                @endif
                <h3 class="step-content-lbl text-center">Actividades</h3>
                <div id="emailHelp" class="form-text text-center mt-2">Introduce la fecha que quieres reservar, así como el número de personas que quieres registrar.</div>
            </div>
            @include('activities.search')
            
        </div>
        
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-8 offset-md-2">
        <div class="card border-radius">
            @if ($data)
                @include('activities.results')
            @endif
            
        </div>
        
    </div>
</div>
@stop
