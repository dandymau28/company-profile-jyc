@extends('admin.layouts.app')

@section('title', 'Data Master CAB')

@section('content')
<iframe src="{{Storage::url($img)}}" width="100%" height="500vh"></iframe>

@endsection

@push('js')

@endpush