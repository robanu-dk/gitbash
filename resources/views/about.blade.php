@extends('layout.main')

@section('container')
    <h1>Halaman About Me</h1>
    <table>
        <tr>
            <th>Stakeholder</th>
            <th>:</th>
            <td>{{ $stakeholder }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <th>:</th>
            <td>{{ $description }}</td>
        </tr>
        <tr>
            <th>Creator1</th>
            <th>:</th>
            <td>{{ $creator1 }} {{ $nim1 }}</td>
        </tr>
        <tr>
            <th>Creator2</th>
            <th>:</th>
            <td>{{ $creator2 }} {{ $nim2 }}</td>
        </tr>
    </table>
@endsection
