<div class="multisteps_form_panel step sub-card">
    <h5 class="card-header animate__animated animate__fadeInRight animate_25ms">{{$model->question}}</h5>
	<div class="text-primary mt-3">Change the order from which you are most likely to do and least likely by dragging the answers.</div>
    <div class="card-body">
        <input type="hidden" name="question_id" id="question_id" value="{{$model->id}}">
       
        @if ($model->options->count())
        <div id="sorting-list">
			
            @foreach ($model->options as $key=>$option)
			<div class="customRadio-sec">
            <div class="customRadio-l-tag">Most Likely</div>
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