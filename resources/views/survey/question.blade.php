<div class="multisteps_form_panel step sub-card">
    <h5 class="card-header animate__animated animate__fadeInRight animate_25ms">{{$model->question}}</h5>
	<div class="text-primary mt-3"><strong>Change the order from which you are most likely to do and least likely by dragging the answers.</strong></div>
    <div class="card-body">
        <input type="hidden" name="question_id" id="question_id" value="{{$model->id}}">
       
	   <div class="row">
	   
	   <div class="col-lg-2">
	   <div class="customRadio-l-tag cr-t-m1">Most Likely</div>
	   <div class="customRadio-l-tag cr-t-m2">Likely</div>
	   <div class="customRadio-l-tag cr-t-m3">Neutral</div>
	   <div class="customRadio-l-tag cr-t-m4">Unlikely </div>
	   <div class="customRadio-l-tag cr-t-m5">Least likely</div>
	   </div>
	   
	   <div class="col-lg-10">
        @if ($model->options->count())
        <div id="sorting-list">
			
            @foreach ($model->options as $key=>$option)
			<div class="customRadio-sec">
            
			<div class="customRadio">
                <input type="hidden" class="options" name="options[]" value="{{$option->id}}">
                <label for="radio1"> {{$option->option}}</label>
            </div>
			
			</div>
            @endforeach
			
        </div>
        @endif
		
		</div>
		
		</div>
		
		
    </div>
</div>