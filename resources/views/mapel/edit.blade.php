@extends('main.layout')
@section('content')
    <center>
        <h2>TAMBAH DATA MATA PELAJARAN</h2>
        <form action="/mapel/update/{{ $mapel->id }}" method="post">
            @csrf
            <table width="50%">
                <tr>
                    <td width="25%">MATA PELAJARAN</td>
                    <td width="25%"><input type="text" name="nama_mapel" value="{{ $mapel->nama_mapel}}"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center><button type="submit" class="button-primary">UBAH</button></center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
    @endsection