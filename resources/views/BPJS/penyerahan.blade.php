@extends('app')

@section('content')
<h2>Penyerahan Data BPJS</h2>
<form action="{{ route('submission.store') }}" method="POST">
    @csrf
    <input type="text" name="id_customer" placeholder="ID Customer" required><br>
    <input type="text" name="nama" placeholder="Nama" required><br>
    <button type="submit">Submit</button>
</form>
@endsection
