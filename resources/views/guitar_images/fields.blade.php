
<?php
    $guitars = App\Models\Guitar::pluck('name','id');
   
?>
<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('image', ['class' => 'custom-file-input']) !!}
            {!! Form::label('image', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>

<div class="form-group col-sm-6">
<div class="input-group">
     <div class="custom-file">
    {!! Form::label('Guitar') !!}
    {!! Form::select('guitar_id',$guitars, null, ['class' => 'form-control','placeholder'=>'Select  Guitar']) !!}
</div>
</div>
</div>

<div class="clearfix"></div>
