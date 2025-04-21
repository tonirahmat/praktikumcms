@extends('layouts.app')

@section('title', 'Daftar BPJS')

@section('content')
    <h1>Daftar BPJS</h1>

    @if(count($data) > 0)
        <ul>
            @foreach($data as $BPJS)
                <li>
                    <a href="{{ url('/BPJSs/' . $BPJS['id']) }}">{{ $BPJS['title'] }}</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>Tidak ada data BPJS.</p>
    @endif
@endsection
