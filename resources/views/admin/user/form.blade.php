<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label class="form-label" for="basic-addon-name">First Name</label>
            <input type="text" id="basic-addon-name" name="first_name" class="form-control" placeholder=" First Name" aria-label="Name" aria-describedby="basic-addon-name" required />
            <div class="valid-feedback">Looks good!</div>
            <div class="invalid-feedback">Please enter your first name.</div>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label class="form-label" for="basic-addon-name">Last Name</label>
            <input type="text" id="basic-addon-name" name="last_name" class="form-control" placeholder="Last Name" aria-label="Name" aria-describedby="basic-addon-name" required />
            <div class="valid-feedback">Looks good!</div>
            <div class="invalid-feedback">Please enter your last name.</div>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label class="form-label" for="basic-default-email1">Email</label>
            <input type="email" id="basic-default-email1" class="form-control" placeholder="john.doe@email.com" aria-label="john.doe@email.com" required />
            <div class="valid-feedback">Looks good!</div>
            <div class="invalid-feedback">Please enter a valid email</div>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label class="form-label" for="basic-default-password1">Password</label>
            <input type="text" id="password" name="password" class="form-control" placeholder="" required />
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
            <input type="text" id="confirm-password" name="confirm-password" class="form-control" placeholder="" required />
            <div class="valid-feedback">Looks good!</div>
            <div class="invalid-feedback">Please enter your password.</div>
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