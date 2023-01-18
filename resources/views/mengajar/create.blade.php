@extends('main.layout')
@section('content')
    <center>
        <h2>TAMBAH DATA MENGAJAR</h2>
        <form action="/mengajar/store" method="POST">
            @csrf
            <table widhth="50%">
                <tr>
                    <td widhth="25%">GURU</td>
                    <td widhth="25%">
                        <select name="guru_id">
                            <option></option>
                            @foreach ($guru as $g)
                            <option value="{{$g->id}}">{{$g->nama_guru}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <<tr>
                    <td widhth="25%">MATA PELAJARAN</td>
                    <td widhth="25%">
                        <select name="mapel_id">
                            <option></option>
                            @foreach ($mapel as $m)
                            <option value="{{$m->id}}">{{$m->nama_mapel}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td widhth="25%">KELAS</td>
                    <td widhth="25%">
                        <select name="kelas_id">
                            <option></option>
                            @foreach ($kelas as $k)
                            <option value="{{$k->id}}">{{$k->nama_kelas}} {{$k->jurusan->nama_jurusan}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <button type="submit" class="button-primary">SIMPAN</button>
                        </center>
                    </td>
                </tr>
            </table>
        </form>
</center>
@endsection