@extends('layouts.dash')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h2>School Clubs List</h2>
                    <a href="{{ route('school-clubs.create') }}" class="btn btn-primary">Add</a>
                </div>
    
                <div class="box-body">
                    
    
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
    
                    <table class="table table-bordered" id="example1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Club Name</th>
                                <th>Desc</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach ($school_clubs as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->club_name }}</td>
                                    <td>{{ $item->desc }}</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
