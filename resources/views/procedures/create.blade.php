@extends('layouts.app')

@section('title', 'Add new item')

@section('content')

    <div class="container pt-3">

        <form action="{{ route('procedures.store') }}" method="post">
            @csrf
            Test
            <button type="submit" class="btn bg_accent text-white">Add</button>
    </div>

    </div>


    </form>


    </div>



@endsection
