@extends('layouts.dash')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header">
                <h2>Add School Club</h2>
                @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                <div class="alert alert-error">{{ session('error') }}</div>
                @endif
            </div>
            <div class="box-body">
                <form action="{{ route('school-clubs.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Club Name</label>
                        <input type="text" name="name" class="form-control" required>
                        @error('name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                         @enderror
                    </div>
                    
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="desc" class="form-control" required id=""></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="{{ route('school-clubs.index')}}" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
        
    </div>
</div>
@endsection
