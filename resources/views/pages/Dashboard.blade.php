@extends('layouts.app')
@section('title', 'homepage')
@section('header','Dashboard')

@section('content')
  @include('analytics.dashboard')
  <example-component></example-component>
  
  <testing-benchmark></testing-benchmark>
  
<!--   <div class="col-xl-3 col-md-6"> -->
<!--           <stats-card> -->
<!--             <div slot="header" class="icon-warning"> -->
<!--               <i class="fas fa-camera fa-5x"></i> -->
<!--             </div> -->
<!--             <div slot="content"> -->
<!--               <p class="card-category">Capacity</p> -->
<!--               <h4 class="card-title">105GB</h4> -->
<!--             </div> -->
<!--             <div slot="footer"> -->
<!--               <i class="fa fa-refresh"></i>Updated now -->
<!--             </div> -->
<!--           </stats-card> -->
<!--         </div> -->

	<chart-card></chart-card>
    @section('script')
    @stop
@stop
