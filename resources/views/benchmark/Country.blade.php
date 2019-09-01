<div class="form-group" id="rating-ability-wrapper">
	    <button type="button" class="btn btn-outline-info" data-attr="1" id="" onclick="chartChange({{$country_benchmark->get('australia')}})">
	        <i class="fa fa-globe-europe" aria-hidden="true"> Australia</i>
	    </button>
	    <button type="button" class="btn btn-outline-info" data-attr="2" id="" onclick="chartChange({{$country_benchmark->get('america')}})">
	        <i class="fa fa-globe-europe" aria-hidden="true"> America</i>
	    </button>
	    <button type="button" class="btn btn-outline-info" data-attr="3" id="" onclick="chartChange([0,0,0,0])">
	        <i class="fa fa-globe-europe" aria-hidden="true"> Britain</i>
	    </button>
	    <button type="button" class=" btn btn-outline-info" data-attr="4" id="" onclick="chartChange([0,0,0,0])">
	        <i class="fa fa-globe-europe" aria-hidden="true"> Frence</i>
	    </button>
	    <button type="button" class="btn btn-outline-info" data-attr="5" id="" onclick="chartChange([0,0,0,0])">
	        <i class="fa fa-globe-europe" aria-hidden="true"> Germany</i>
	    </button>
	</div>