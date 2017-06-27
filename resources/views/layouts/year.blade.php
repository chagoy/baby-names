@extends('welcome')

@section('content')

	<chart :years={{ json_encode($years) }}></chart>

@endsection