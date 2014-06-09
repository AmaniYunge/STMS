
{{ Form::open(array("url"=>url('driver/add'),"class"=>"form-horizontal", 'id'=>'FileUploader')) }}
<h2 class="text-center text-muted">Add new User</h2>

<!--response messages-->
@if(isset($emsg))
<div class="alert alert-danger alert-dismissable" >
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{ $emsg }}!</strong>
</div>
@endif

@if(isset($msg))
<div class="alert alert-success alert-dismissable" >
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{ $msg }}!</strong>
</div>
@endif
<div class='12' style="font-size: 12px">

    <div class='form-group'>
        <div class="col-md-6">
            First Name<br>
            {{ Form::text('first_name','',array('class'=>'form-control','placeholder'=>'First Name','required'=>'required')) }}
        </div>

        <div class="col-md-6">
            Last Name<br>
            {{ Form::text('last_name','',array('class'=>'form-control','placeholder'=>'Last Name','required'=>'required')) }}
        </div>
    </div>

    <div class='form-group'>
        <div class="col-md-6">
            Middle Name<br>
            {{ Form::text('middle_name','',array('class'=>'form-control','placeholder'=>'Middle Name')) }}
        </div>

        <div class="col-md-6">
            Phone Number<br>
            {{ Form::text('phone','',array('class'=>'form-control','placeholder'=>'Phone Number','required'=>'required')) }}
        </div>
    </div>

    <div class='form-group'>
        <div class="col-md-6">
            Gender<br>
            {{ Form::text('gender','',array('class'=>'form-control','placeholder'=>'Gender','required'=>'required')) }}
        </div>

        <div class="col-md-6">
            Residential Area<br>
            {{ Form::text('resident_area','',array('class'=>'form-control','placeholder'=>'Residential Area','required'=>'required')) }}
        </div>
    </div>


</div>
<div id="output"></div>
<div class='col-sm-12 form-group text-center'>
    {{ Form::submit('Add Driver',array('class'=>'btn btn-primary','id'=>'submitqn')) }}
    {{ Form::reset('Reset',array('class'=>'btn btn-warning','id'=>'submitqn')) }}
</div>
{{ Form::close() }}

<script>
    $(document).ready(function (){

        $('#FileUploader').on('submit', function(e) {
            e.preventDefault();
            $("#output").html("<h3><i class='fa fa-spin fa-spinner '></i><span>Making changes please wait...</span><h3>");
            $(this).ajaxSubmit({
                target: '#output',
                success:  afterSuccess
            });

        });

        function afterSuccess(){
            $('#FileUploader').resetForm();
            setTimeout(function() {
                $("#output").html("");
            }, 3000);
            $("#list").load("<?php echo url("driver/list") ?>")
        }
    });
</script>
