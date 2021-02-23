@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add District <a href="{{ route('home') }}" class="btn btn-sm btn-primary float-right">Back</a><div class="clearfix"></div></div>

                <div class="card-body">
                    @include('flash')
                    <form method="POST"  action="{{ route('admin.add.district') }}">
                    @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                            @if ($errors->has('name'))
                                <span class="help-block text-danger">
                                    <small>{{ $errors->first('name') }}</small>
                                </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
