<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label class="form-label" for="basic-addon-name">First Name</label>
            <input type="text" id="basic-addon-name" name="first_name" class="form-control" placeholder=" First Name" value="{{(isset($model->first_name))?$model->first_name:''}}"  aria-describedby="basic-addon-name" required />
            <div class="valid-feedback">Looks good!</div>
                @error('first_name')
                <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                @enderror
            
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label class="form-label" for="basic-addon-name">Last Name</label>
            <input type="text" id="basic-addon-name" name="last_name" class="form-control" placeholder="Last Name" value="{{(isset($model->last_name))?$model->last_name:''}}"  aria-describedby="basic-addon-name" required />
            <div class="valid-feedback">Looks good!</div>
            @error('last_name')
                <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label class="form-label" for="basic-default-email1">Email</label>
            <input type="email" name="email" id="basic-default-email1" value="{{(isset($model->email))?$model->email:''}}" class="form-control" placeholder="john.doe@email.com" aria-label="john.doe@email.com" {{(isset($model->email))? 'readonly' : ''}} required />
            <div class="valid-feedback">Looks good!</div>
            @error('email')
                <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                @enderror
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label class="form-label" for="address">Address</label>
            <textarea name="address" id="address" class="form-control"  required>{{(isset($model->address))?$model->address:''}}</textarea>
            <div class="valid-feedback">Looks good!</div>
            @error('address')
                <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                @enderror
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label class="form-label" for="basic-default-password1">Password</label>
            @if($model->id == '')
            <input type="text" id="password" name="password" class="form-control" placeholder="" required />           
            <div class="valid-feedback">Looks good!</div>
            @error('password')
                <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
            @enderror
            @endif
            @if($model->id != '')
            <input type="text" id="password" name="password" class="form-control" placeholder="" />           
            <div class="valid-feedback">Looks good!</div>
                @error('password')
                    <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                @enderror
            @endif
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label class="form-label" for="basic-default-password"></label>
            <button type="button" class="btn btn-primary waves-effect waves-float waves-light form-control" id="generate_password">Generate Pass</button>
           
        </div>
    </div>
    
    <div class="col-6">
        <div class="form-group">
            <label class="form-label" for="basic-default-password1">Confirm Password</label>
            @if($model->id != '')
            <input type="text" id="confirm-password" name="confirm-password" class="form-control" placeholder="" />
            <div class="valid-feedback">Looks good!</div>
            @error('confirm-password')
                <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
            @enderror
            @endif
            @if($model->id == '')
            <input type="text" id="confirm-password" require name="confirm-password" class="form-control" placeholder="" />
            <div class="valid-feedback">Looks good!</div>
            @error('confirm-password')
                <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
            @enderror
            @endif
        </div>
    </div>
</div>

@section('extra-script')
<script src="{{asset('app-assets/js/scripts/forms/form-validation.js')}}"></script>
<script type="text/javascript">
    jQuery(function(){
        function generatePassword()
        {
            return Math.random()                        // Generate random number, eg: 0.123456
                        .toString(36)           // Convert  to base-36 : "0.4fzyo82mvyr"
                        .slice(-8);// Cut off last 8 characters : "yo82mvyr"
        }
        jQuery('#generate_password').on('click', function()
        {
            var password = generatePassword();
            jQuery('#password').val(password);
            jQuery('#confirm-password').val(password);
        }); 
    })
    
</script>
@endsection