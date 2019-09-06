<div class="card shadow" id = "card-no">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary mb-1">@switch($i)
                                                                                @case(1)
                                                                                    Total Plate Waste for Seven Days
                                                                                    @break
                                                                            
                                                                                @case(2)
                                                                                    Total number of Diners for Seven Days
                                                                                    @break
                                                                            	@case(3)
                                                                            		Plate Waste per Meal per Person
                                                                            		@break
                                                                            	@case(4)
                                                                            		Highest Plate Waste per Meal per Person
                                                                            		@break	
                                                                            	@case(5)
                                                                            		Lowest Plate Waste per Meal per Person
                                                                            		@break
                                                                            @endswitch</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">@switch($i)
                                                                                @case(1)
                                                                                    {{$platewaste->pluck('weight_kg')->sum()}} kg
                                                                                    @break
                                                                            
                                                                                @case(2)
                                                                                    {{$platewaste->pluck('people')->sum()}}
                                                                                    @break 
                                                                            	@case(3)
                                                                            	{{round($platewaste->pluck('weight_kg')->sum()/$platewaste->pluck('people')->sum(),2)}}
                                                                            		kg
                                                                            		@break
                                                                            	@case(4)
                                                                            		{{$platewaste->pluck('weight_kg')->max()}} kg
                                                                            		@break
                                                                            	@case(5)
                                                                            		{{$platewaste->pluck('weight_kg')->min()}} kg
                                                                            		@break
                                                                            @endswitch</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
                </div>