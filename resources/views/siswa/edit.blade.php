@extends('main.layout')
@section('content')
    <center>
            <h2>LIST DATA SISWA</h2>
            <form action="/siswa/update/{{$siswa->id}}" method="POST">
                @csrf
                <table width="50%">
                    <tr>
                        <td width="25%">NIS</td>
                        <td width="25%"><input type="text" name="nis" value="{{$siswa->nis}}"></td>
                    </tr>
                    <tr>
                        <td width="25%">NAMA SISWA</td>
                        <td width="25%"><input type="text" name="nama_siswa" value="{{$siswa->nama_siswa}}"></td>
                    </tr>
                    <tr>
                        <td width="25%">JENIS KELAMIN</td>
                        <td width="25%">
                            <input type="radio" name="jk" value="L" {{ $siswa->jk == 'L' ? 'checked' : ''}}>Laki-laki
                            <input type="radio" name="jk" value="P" {{ $siswa->jk == 'P' ? 'checked' : ''}}>Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">ALAMAT</td>
                        <td width="25%"><textarea name="alamat" cols="30" rows="5">{{$siswa->alamat}}</textarea></td>
                    </tr>
                    <tr>
                        <td width="25%">KELAS</td>
                        <td widhth="25%">
                            <select name="kelas_id">
                                <option></option>
                            @foreach ($kelas as $k)
                                @if($siswa->kelas_id == $k->id)
                                    <option value="{{$k->id}}" selected>{{$k->nama_kelas}}</option>
                                @else
                                    <option value="{{$k->id}}">{{$k->nama_kelas}}</option>
                                @endif
                            @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td widhth="25%">PASSWORD</td>
                        <td widhth="25%"><input type="password" name="password" value="{{$siswa->password}}"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <center>
                                <button type="submit" class="button-primary">UBAH</button>
                            </center>
                        </td>
                    </tr>
                </table>
            </form>
    </center>
    @endsection