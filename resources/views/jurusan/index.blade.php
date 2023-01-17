@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>LIST DATA JURUSAN</h2>
            <a href="/jurusan/create" class="button-primary">TAMBAH DATA</a>
            @if (session('succes'))
            <p class="text-succes">{{session('succes')}}</p>
            @endif
            @if (session('error'))
            <p class="text-danger">{{session('error')}}</p>
            @endif

            <table cellpadding="10">
                <tr>
                    <th>NO</th>
                    <th>JURUSAN</th>
                    <th>ACTION</th>
                </tr>
                @foreach ($jurusan as $j)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$j->nama_jurusam}}</td>
                    <td>
                        <a href="/jurusan/edit/{{$j->id}}" class="button-warning">EDIT</a>
                        <a href="/jurusan/destroy/{{$j->id}}" onlick="return confirm('yakin hapus?')" class="button-warning">HAPUS</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </b>
    </center>
    @endsection