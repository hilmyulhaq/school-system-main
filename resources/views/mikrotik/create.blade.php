@extends('layouts.dash')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header">
                <h2>Tambah Akun WiFi</h2>
                @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                <div class="alert alert-error">{{ session('error') }}</div>
                @endif
            </div>
            <div class="box-body">
                <form action="{{ route('mikrotik.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nama Akun</label>
                        <input type="text" name="name" class="form-control" required>
                        @error('name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label>Profil (Opsional)</label>
                        <input type="text" name="profile" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Buat Akun</button>
                </form>
            </div>
        </div>
        
    </div>
</div>
@endsection
