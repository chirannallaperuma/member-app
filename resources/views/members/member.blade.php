@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <form method="POST" action="{{ route('member.save') }}">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                Add New Member
                            </div>
                            <div class="text-info text-uppercase float-right">
                                <a href="/members" target="_self">
                                    <button type="button" class="btn btn-success btn-sm"><i class="fa fa-list">Member
                                            List</i></button>
                                </a>
                            </div>
                        </div>

                        @if (session('alert'))
                            <div class="alert alert-success">
                                <button type="button"
                                        class="close"
                                        data-dismiss="alert"
                                        aria-hidden="true"
                                >&times;
                                </button>
                                {{ session('alert') }}
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="form-group card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="">First Name</label>
                                            <input id="first_name" type="text"
                                                   class="form-control @error('first_name') is-invalid @enderror"
                                                   name="first_name" value="{{ old('first_name') }}">
                                            @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="">DS Division</label>
                                            <select name="division" id="division"
                                                    class="form-control @error('division') is-invalid @enderror"
                                                    value="{{ old('division') }}">

                                                <option value="" selected disabled>Select Division</option>
                                                @foreach ($divisions as $division)
                                                    <option value="{{ $division->id }}">{{ $division->division_name }}</option>
                                                @endforeach
                                            </select>
                                            @error('division')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="">Last Name</label>
                                            <input id="last_name" type="text"
                                                   class="form-control @error('last_name') is-invalid @enderror"
                                                   name="last_name" value="{{ old('last_name') }}">
                                            @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="date-picker">Date of Birth</label>
                                            <input type="date" class="form-control @error('dob') is-invalid @enderror"
                                                   name="dob" id="dob" value="{{ old('dob') }}"
                                            >
                                            @error('dob')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="">Summary</label>
                                            <textarea name="summary" id="summary" cols="30" rows="10"
                                                      class="form-control @error('summary') is-invalid @enderror"
                                                      name="summary" value="{{ old('summary') }}">
                                                    </textarea>
                                            @error('summary')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="form-group row">
                                        <button type="button" class="btn btn-danger" onclick="resetForm()">
                                            Reset
                                        </button>

                                        <button type="submit" class="btn btn-success ml-1">
                                            Save
                                        </button>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script type="application/javascript">
            function resetForm() {
                $('#first_name').val('');
                $('#last_name').val('');
                $('#division').val('');
                $('#dob').val('');
                $('#summary').val('');
            }
        </script>
@endsection
