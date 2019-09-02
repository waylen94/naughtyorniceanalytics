<div class="form-group" id="rating-ability-wrapper">
	<label class="control-label" for="rating">
	    <span class="field-label-info"></span>
	    <input type="hidden" id="selected_rating" name="selected_rating" value="" required="required">
	    </label>
	    
	    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="1" id="rating-star-1" onclick="chartChange({{$star_benchmark['one']}})">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="2" id="rating-star-2" onclick="chartChange({{$star_benchmark->get('two')}})">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="3" id="rating-star-3"onclick="chartChange({{$star_benchmark['three']}})">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="4" id="rating-star-4"onclick="chartChange({{$star_benchmark->get('four')}})">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="5" id="rating-star-5"onclick="chartChange({{$star_benchmark->get('five')}})">
	        <i class="fa fa-star" aria-hidden="true"></i>
	    </button>
	</div>