@extends('layouts.app')
@section('title', 'homepage')
@section('header','Dashboard')

@section('content')
  @include('analytics.dashboard')
@section('script')
<!-- 	<script>  json encode not suit for massive transformation-->
    
<!-- 	</script> -->
@stop
@stop
