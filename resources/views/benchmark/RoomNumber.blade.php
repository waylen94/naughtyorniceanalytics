
<div class="form-group" id="rating-ability-wrapper">
<!-- <label class="control-label" for="rating"> -->
<!-- <span class="field-label-header">How would you rate your ability to use the computer and access internet?*</span><br> -->
<!-- <span class="field-label-info"></span> -->
<!-- <input type="hidden" id="selected_rating" name="selected_rating" value="" required="required"> -->
<!-- </label> -->
<!-- <span class="selected-rating">0</span><small> / 5</small> -->
<!-- </h2> -->
<button type="button" class="btnrating btn btn-outline-info" data-attr="1" id="" onclick="chartChange({{$room_benchmark->get('0')}})">
<i class="fa fa-door-closed" aria-hidden="true"> Less 100</i>
</button>
<button type="button" class="btnrating btn btn-outline-info" data-attr="2" id="" onclick="chartChange({{$room_benchmark->get('100')}})">
<i class="fa fa-door-closed" aria-hidden="true"> 100 ~ 200</i>
</button>
<button type="button" class="btnrating btn btn-outline-info" data-attr="3" id="" onclick="chartChange({{$room_benchmark->get('200')}})">
<i class="fa fa-door-closed" aria-hidden="true"> 200 ~ 300</i>
</button>
<button type="button" class="btnrating btn btn-outline-info" data-attr="4" id="" onclick="chartChange({{$room_benchmark->get('300')}})">
<i class="fa fa-door-closed" aria-hidden="true"> 300 ~ 400</i>
</button>
<button type="button" class="btnrating btn btn-outline-info" data-attr="5" id="" onclick="chartChange({{$room_benchmark->get('400')}})">
<i class="fa fa-door-closed" aria-hidden="true"> 400 ~ 500</i>
</button>
<button type="button" class="btnrating btn btn-outline-info" data-attr="6" id="" onclick="chartChange({{$room_benchmark->get('500')}})">
<i class="fa fa-door-closed" aria-hidden="true"> 500 More</i>
</button>
</div>