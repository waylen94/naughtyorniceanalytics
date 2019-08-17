<div class="card shadow" id = "card-no">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary mb-1">@switch($i)
                                                                                @case(1)
                                                                                    Total Waste Weight
                                                                                    @break
                                                                            
                                                                                @case(2)
                                                                                    Dining Number
                                                                                    @break
                                                                            	@case(3)
                                                                            		Per Meal Per person
                                                                            		@break
                                                                            	@case(4)
                                                                            		Comparing Last Day
                                                                            @endswitch</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">@switch($i)
                                                                                @case(1)
                                                                                    {{$platewaste->pluck('weight_kg')->sum()}}
                                                                                    @break
                                                                            
                                                                                @case(2)
                                                                                    {{$platewaste->pluck('people')->sum()}}
                                                                                    @break
                                                                            	@case(3)
                                                                            	{{$platewaste->pluck('weight_kg')->sum()/$platewaste->pluck('people')->sum()}}
                                                                            		@break
                                                                            	@case(4)
                                                                            		
                                                                            		@break
                                                                            @endswitch</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
                </div>