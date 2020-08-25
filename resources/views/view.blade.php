@extends('welcome')

@section('title', "Vista Titulo")

@section('content')
        @if(false)
            <h1>Hola {{ $name }} {{ $last_name }}</h1>
        @else
            <h1>else</h1>
        @endif

        @foreach($array as $v)
            <p>{{ $v }}</p>
        @endforeach
    <br>
        @while($number <= 10)
            <p>{{ $number += 1 }}</p>
        @endwhile
    <br>
        @switch($number)
        @case(1)
            <p>{{ $number }}</p>
            @break
        @default
            <p>Default</p>
        @endswitch
    <br>
        @php
        function suma($a, $b){
            return $a + $b;
        }
        @endphp
        <p>{{ suma(1, 1) }}</p>

        @section('sidebar')
            @parent
            <h3>View Sidebar</h3>
        @endsection
@endsection