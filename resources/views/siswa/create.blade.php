@extends('main.layout')
@section('content')
    <center>
            <h2>LIST DATA SISWA</h2>
            <form action="/siswa/store" method="POST">
                @csrf
                <table width="50%">
                    <tr>
                        <td width="25%">NIS</td>
                        <td width="25%"><input type="text" name="nis"></td>
                    </tr>
                    <tr>
                        <td width="25%">NAMA SISWA</td>
                        <td width="25%"><input type="text" name="nama_siswa"></td>
                    </tr>
                    <tr>
                        <td width="25%">JENIS KELAMIN</td>
                        <td width="25%">
                            <input type="radio" name="jk" value="L">Laki-laki
                            <input type="radio" name="jk" value="P">Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">ALAMAT</td>
                        <td width="25%"><textarea name="alamat" cols="30" rows="5"></textarea></td>
                    </tr>
                    <tr>
                        <td width="25%">KELAS</td>
                        <td widhth="25%">
                            <select name="kelas_id">
                                <option></option>
                                @foreach ($kelas as $k)
                                <option value="{{$k->id}}">{{$k->nama_kelas}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td widhth="25%">PASSWORD</td>
                        <td widhth="25%"><input type="password" name="password"></td>
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