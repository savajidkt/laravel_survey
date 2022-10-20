$(function(){
     // ========== Form-select-option ========== //
  $(".step_1").on('click', function(){
    $(".step_1").removeClass("active");
    $(this).addClass("active");
  });
  $(".step_2").on('click', function(){
    $(".step_2").removeClass("active");
    $(this).addClass("active");
  });
  $(".step_3").on('click', function(){
    $(".step_3").removeClass("active");
    $(this).addClass("active");
  });
  $(".step_4").on('click', function(){
    $(".step_4").removeClass("active");
    $(this).addClass("active");
  });
  $(".step_5").on('click', function(){
    $(".step_5").removeClass("active");
    $(this).addClass("active");
  });

    // ================== CountDown function ================
  $('.countdown_timer').each(function(){
    $('[data-countdown]').each(function() {
      var $this = $(this), finalDate = $(this).data('countdown');
      $this.countdown(finalDate, function(event) {
        var $this = $(this).html(event.strftime(''
        + '<h3>%S</h3>'
        + '<span class="text-uppercase">sec</span>'));
      });
    });
  });

});


var currentTab = 0; // Current tab is set to be the first tab (0)
//showTab(currentTab); // Display the current tab

function showTab(n) {
    // This function will display the specified tab of the form ...
    var x = document.getElementsByClassName("multisteps_form_panel");
    x[n].style.display = "block";
    // ... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
        document.getElementById("nextBtn").innerHTML = "Next Question" + ' <span><i class="fas fa-arrow-right"></i></span>';
    }
    // ... and run a function that displays the correct step indicator:
    fixStepIndicator(n)
}

function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("multisteps_form_panel");
    // Exit the function if any field in the current tab is invalid:
    //if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = 0;
    // if you have reached the end of the form... :
    /*if (currentTab >= x.length) {
        //...the form gets submitted:
        document.getElementById("wizard").submit();
        return false;
    }*/
    if(n =='-1'){
      $('#page').val($('#page').val() - 1);
    }else{

    }
   configData={url:configData.url,type:n};
    first_time_load(configData);
    // Otherwise, display the correct tab:
    //showTab(currentTab);
}

function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true, arr = [];
    x = document.getElementsByClassName("multisteps_form_panel");

    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].checked === false) {
            arr.push(0);
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false:
            // valid = false;
        } else {
            arr.push(1);
        }
    }

    if( arr.includes(1) ){
        valid = true;
        $('.error-msg').html('');
    }else{
        valid = false;
        $('.error-msg').html('Please select at least one option!');
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
}

function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class to the current step:
    x[n].className += " active";
}

function first_time_load(configData){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var page = $('#page').val();
        var question_id = $('#question_id').val();
        var survey_id = $('#survey_id').val();
        //var options = $('#sorting-list .options').val();
        var options = [];
                var form = $("#sorting-list .options");
                $.each(form, function(e, textBox) {
                  options.push($.trim(textBox.value));
                });
        
        $.ajax({
           type:'POST',
           url:configData.url,
           dataType:'json',
           data:{page:page,type:configData.type,question_id:question_id,survey_id:survey_id,options:options,questionCnt:configData.questionCnt},
           success:function(data){
              if( data.status === false )
              {
                window.location = data.redirect_uri;
              }
              $('#page').val(data.page);
              $('.question-listing').html(data.data);
              $('.multisteps_form_panel').show();
              new Sortable(document.getElementById('sorting-list'));

           }

        });
}