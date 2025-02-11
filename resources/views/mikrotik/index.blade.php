@extends('layouts.dash')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h2>Daftar Akun WiFi</h2>
                    <a href="{{ route('mikrotik.create') }}" class="btn btn-primary">Tambah Akun</a>
                </div>
    
                <div class="box-body">
                    
    
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
    
                    <table class="table table-bordered" id="example1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Profil</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->profile }}</td>
                                    <td>
                                        <form action="{{ route('mikrotik.destroy', $user->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Hapus akun ini?')"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
