@extends('layouts.admin')

@section('content')
    @livewire('RequestView', ['data'=>$data])
@endsection


