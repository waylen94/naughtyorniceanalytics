@extends('layouts.app')
@section('title', 'homepage')
@section('header','Dashboard')

@section('content')
  @include('analytics.dashboard')
@section('script')
	<script>
    var json_data_user_hotel_10days_trending = <?php echo json_encode($user->hotel->platewaste->toArray()); ?>;
	</script>
@stop
@stop
