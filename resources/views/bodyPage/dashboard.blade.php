@extends('bodyPage.header')

@section('content')


@endsection

<div class="row">
@if (isset(Auth::user()->username))
    <h3>{{ Auth::user()->username }}</h3>
@endif

</div>