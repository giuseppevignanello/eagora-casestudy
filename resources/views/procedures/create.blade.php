@extends('layouts.app')

@section('content')
    <div class="container pt-3">

        <form action="{{ route('procedures.store') }}" method="post">
            @csrf
            <label for="status">Status:</label>
            <input type="text" id="status" name="status" required>
            <br>

            <label for="employee_dni">Employee DNI:</label>
            <input type="text" id="employee_dni" name="employee_dni" required>
            <br>

            <label for="type_id">Type ID:</label>
            <input type="text" id="type_id" name="type_id" required>
            <br>

            <button type="submit">Submit</button>
        </form>


    </div>
@endsection
