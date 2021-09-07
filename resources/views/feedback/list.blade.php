@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List of feedbacks') }}</div>
                <div class="card-body">
                    @foreach($feedbacks as $feedback)
                    @if($loop->index > 0)
                        <hr>
                    @endif
                    <h3>{{ $feedback->name }}</h3>
                    Feedback parameters:
                    <ul>
                        <li><b>User name:</b> {{ $feedback->username }}</li>
                        <li><b>Phone:</b> {{ $feedback->phone }}</li>
                        <li><b>Company:</b> {{ $feedback->company }}</li>
                    </ul>
                    Message:
                    <p>"{{ $feedback->message }}"</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection