@extends('layouts.app')

@section('content')
    <div class="wrapper">

        <h2 class="pt-5 text-center">Procedure n° {{ $procedure->id }} Detalles</h2>
        <div class="come_back text-center">
            <a href="{{ route('procedures.index') }}"> <button class="btn"> <i class="fa-solid fa-arrow-left"></i>
                </button> </a>
        </div>
        <div class="card w-50 m-auto">
            <div class="card-body">
                <h4 class="card-title">Titulo</h4>
                <h6>Employee ID: {{ $procedure->employee_dni }}</h6>
                <div class="d-flex gap-2 align-items-center">
                    <p> Status:</p>
                    <p
                        class="fw-bold status p-1 w-25 @if ($procedure->status == 'pending') deleted
                    @elseif($procedure->status == 'done') active
                    @elseif($procedure->status == 'in_progress') scheduled @endif">
                        {{ $procedure->status }} </p>
                </div>
                <div>
                    {{ $procedure->type->name }}
                </div>
            </div>
        </div>

    </div>
@endsection
