<div id="clone-repeater">
    <div data-repeater-item>
        <div class="row d-flex align-items-end">
            <div class="col-md-8 col-12">
                <div class="form-group">
                    <label for="option_name">Option Name</label>
                    <input type="text" class="form-control" name="options[]" id="option_name" aria-describedby="itemname" placeholder="Vuexy Admin Template" />
                </div>
            </div>

            <div class="col-md-2 col-12">
                <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-success">
                        <p class="mb-50">Correct Answer</p>
                        <input type="checkbox" name="correct_answer[]" value="1" class="custom-control-input" id="correct_answer" />
                        <label class="custom-control-label" for="correct_answer">
                            <span class="switch-icon-left"><i data-feather="check"></i></span>
                            <span class="switch-icon-right"><i data-feather="x"></i></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-12 mb-50">
                <div class="form-group">
                    <button class="btn btn-outline-danger text-nowrap px-1 remove" data-repeater-delete type="button">
                        <i data-feather="x" class="mr-25"></i>
                        <span>Delete</span>
                    </button>
                </div>
            </div>
        </div>
        <hr />
    </div>
</div>