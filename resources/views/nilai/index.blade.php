@extends('main.layout')
@section('content')
    <center>
        <b>
            <h2>LIST NILAI</h2>
            <a href="/nilai/create" class="button-primary">Tambah Data</a>
        
            @if (session('succes'))
                <p class="text-succes">{{ session('succes') }}</p>
            @endif
            <table cellpadding="10">
                <tr>
                    <td>NO</td>
                    <td>GURU MAPEL</td>
                    <td>NAMA SISWA</td>
                    <td>UH</td>
                    <td>UTS</td>
                    <td>UAS</td>
                    <td>NA</td>
                   
                        <td>ACTION</td>
                  
                </tr>
                @foreach ($nilai as $each)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$each->mengajar->guru->nama_guru}} {{$each->mengajar->mapel->nama_mapel}}</td>
                        <td>{{$each->siswa->nama_siswa}}</td>
                        <td>{{$each->uh}}</td>
                        <td>{{$each->uts}}</td>
                        <td>{{$each->uas}}</td>
                        <td>{{$each->na}}</td>
                   
                        <td>
                            <a href="/nilai/edit/{{$each->id}}" class="button-warning">EDIT</a>
                            <a href="/nilai/destroy/{{$each->id}}" onclick="return confirm ('yakin hapus?')" class="button-danger">HAPUS</a>
                        </td>
                
                    </tr>
                    @endforeach
            </table>
        </b>
    </center>
@endsection