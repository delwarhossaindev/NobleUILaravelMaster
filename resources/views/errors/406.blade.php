@extends('errors::illustrated-layout')

@section('code', '406')
@section('title', __('Not Acceptable'))

@section('image')
<div style="background-image: url({{ asset('errors/svg/500.svg') }});" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
</div>
@endsection

@section('message', __('Whoops, This request is not acceptable.'))
