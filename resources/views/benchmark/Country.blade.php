<div class="form-group" id="rating-ability-wrapper">
	    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="1" id="rating-star-1" onclick="chartChange({{$country_benchmark->get('australia')}})">
	        <i class="fa fa-globe-europe" aria-hidden="true"> Australia</i>
	    </button>
	    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="2" id="rating-star-2" onclick="chartChange({{$country_benchmark->get('america')}})">
	        <i class="fa fa-globe-europe" aria-hidden="true"> America</i>
	    </button>
	    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="3" id="rating-star-3" onclick="chartChange([0,0,0,0])">
	        <i class="fa fa-globe-europe" aria-hidden="true"> Britain</i>
	    </button>
	    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="4" id="rating-star-4" onclick="chartChange([0,0,0,0])">
	        <i class="fa fa-globe-europe" aria-hidden="true"> Frence</i>
	    </button>
	    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="5" id="rating-star-5" onclick="chartChange([0,0,0,0])">
	        <i class="fa fa-globe-europe" aria-hidden="true"> Germany</i>
	    </button>
	</div>