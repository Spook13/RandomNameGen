@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row m-3 border border-secondary rounded">
        <h1 class="col-12 text-left">{{ $nameInfo->Firstname }}</h1>
            <p class="col-12">
                <b>Gender:</b> {{ $nameInfo->Gender }}
            </p>
            <p class="col-12">
                <b>Origin:</b> {{ $nameInfo->Origin }}
            </p>
            <p class="col-12">
            <b>Meaning:</b> {{ $nameInfo->Definition }}
            </p>
    </div>
</div>
@endsection