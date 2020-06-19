@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Member List
                        </div>
                        <div class="text-info text-uppercase float-right">
                            <a href="/member" target="_self">
                                <button type="button" class="btn btn-success btn-sm"><i class="fa fa-list">New Member
                                    </i></button>
                            </a>
                        </div>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success">
                            <button type="button"
                                    class="close"
                                    data-dismiss="alert"
                                    aria-hidden="true"
                            >&times;
                            </button>
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="form-group card">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead class="bg-primary">
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Date of Birth</th>
                                        <th>DS Division</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    @foreach ($members as $member)
                                        <tr>
                                            <td>{{ $member->first_name }}</td>
                                            <td>{{ $member->last_name }}</td>
                                            <td>{{ $member->dob }}</td>
                                            <td>{{ $member->divisions->division_name }}</td>
                                            <td>
                                                <a href="/member/{{ $member->id }}/edit" type="button" target="_blank"
                                                   class="btn btn-primary">Edit</a>
                                                <a href="/delete/{{ $member->id }}" type="button"
                                                   class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>

                                    @endforeach
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
