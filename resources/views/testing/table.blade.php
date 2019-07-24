@extends('layouts.app')
@section('title', 'Testing fake statistics')

@section('content')
  
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          Platewaste
        </h1>
      </div>

      <div class="card-body">
        @if($platewastes->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th>Date</th> <th>Hotel ID</th> <th>Weight(KG)</th> <th>People</th> <th>Type</th>

              </tr>
            </thead>
            <tbody>
              @foreach($platewastes as $platewaste)
              <tr>

                <td>{{$platewaste->date}}</td> <td>{{$platewaste->hotel_id}}</td> <td>{{$platewaste->weight_kg}}</td> <td>{{$platewaste->people}}</td> <td>{{$platewaste->type}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $platewastes->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection
