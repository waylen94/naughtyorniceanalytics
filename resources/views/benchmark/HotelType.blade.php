<div class="form-group" id="rating-ability-wrapper">
<!-- 	    <label class="control-label" for="rating"> -->
<!-- 	    <span class="field-label-header">How would you rate your ability to use the computer and access internet?*</span><br> -->
<!-- 	    <span class="field-label-info"></span> -->
<!-- 	    <input type="hidden" id="selected_rating" name="selected_rating" value="" required="required"> -->
<!-- 	    </label> -->
	    <h2 class="bold rating-header" style="">
<!-- 	    <span class="selected-rating">0</span><small> / 5</small> -->
<!-- 	    </h2> -->
	    <button type="button" class="btnrating btn btn-outline-info" data-attr="1" id="hotel-type" onclick="chartChange({{$type_benchmark->get('business')}})">
	        <i class="fa fa-briefcase" aria-hidden="true"> Business </i>
	    </button>
	    <button type="button" class="btnrating btn btn-outline-info" data-attr="2" id="hotel-type" onclick="chartChange({{$type_benchmark->get('leisure')}})">
	        <i class="fa fa-cocktail" aria-hidden="true"> Leisure</i>
	    </button>
	    </button>
	</div>