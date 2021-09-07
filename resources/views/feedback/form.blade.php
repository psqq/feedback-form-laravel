@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Feedback from') }}</div>
                <div class="card-body">
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                    @endif
                    <form method="post" action="{{ route('feedbacks.store') }}">
                        @csrf

                        <div class="form-group">
                            <label>Your name</label>
                            <input value="{{ old('username') }}" type="text" class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" name="username" id="username">
                            @if ($errors->has('username'))
                            <div class="invalid-feedback">
                                {{ $errors->first('username') }}
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input value="{{ old('phone') }}" type="text" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" name="phone" id="phone">
                            @if ($errors->has('phone'))
                            <div class="invalid-feedback">
                                {{ $errors->first('phone') }}
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Company</label>
                            <input value="{{ old('company') }}" type="text" class="form-control {{ $errors->has('company') ? 'is-invalid' : '' }}" name="company" id="company">
                            @if ($errors->has('company'))
                            <div class="invalid-feedback">
                                {{ $errors->first('company') }}
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Feedback name</label>
                            <input value="{{ old('name') }}" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name">
                            @if ($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control  {{ $errors->has('message') ? 'is-invalid' : '' }}" name="message" id="message" rows="4">{{ old('message') }}</textarea>
                            @if ($errors->has('message'))
                            <div class="invalid-feedback">
                                {{ $errors->first('message') }}
                            </div>
                            @endif
                        </div>

                        <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection