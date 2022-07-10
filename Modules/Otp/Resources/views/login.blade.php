@extends('core::layouts.app')

@section('content')
    <h1 class="bg-green-800 ">Salam World</h1>

    <p>
        This view is loaded from module: {!! config('otp.name') !!}
    </p>
@endsection
