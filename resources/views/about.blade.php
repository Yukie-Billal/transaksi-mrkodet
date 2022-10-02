@extends('layouts.main')

@section('name')
    <div class="a">
        <h1>Tentang Saya</h1>
        <table>
            <tr>
                <td>Nama</td>
                <td>{!! $name !!}</td>
            </tr>
            <tr>
                <td>Sekolah</td>
                <td>{!! $sekolah !!}</td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>{!! $kelas !!}</td>
            </tr>
        </table>
    </div>
@endsection