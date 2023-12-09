@extends('layouts.app')

@section('content')
    <div class="wrapper">

        <div class="w-50 m-auto">
            <h2 class="pt-5">Add a new procedure</h2>
            <div class="come_back">
                <a href="{{ route('procedures.index') }}"> <button class="btn"> <i class="fa-solid fa-arrow-left"></i>
                    </button> </a>
            </div>
            <form class="update_form" action="{{ route('procedures.update', $procedure) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3 d-flex flex-column w-50">
                    <label class="fw-bold" for="status"s>Status:</label>
                    <select type="text" id="status" name="status" value="{{ $procedure->status }}" required>
                        <option value="pending">Pending</option>
                        <option value="in_progress">In Progress</option>
                        <option value="done">Done</option>
                    </select>
                </div>

                <div class="mb-3 d-flex flex-column w-50">
                    <label class="fw-bold" for="employee_dni">Employee DNI:</label>
                    <input type="text" id="employee_dni" name="employee_dni" value="{{ $procedure->employee_dni }}"
                        required>
                </div>


                <div class="mb-3 d-flex flex-column w-50">
                    <label class="fw-bold" for="type_id">Type ID:</label>
                    <select type="text" id="type_id" name="type_id" value="{{ $procedure->type_id }}" required>
                        @forelse ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @empty
                        @endforelse
                    </select>
                </div>

                <button class="btn bg_success" type="submit">Submit</button>
            </form>
        </div>

    </div>
@endsection
