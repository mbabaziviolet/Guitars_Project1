<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $guitarImage->image }}</p>
</div>

<!-- Guitar Id Field -->
<div class="col-sm-12">
    {!! Form::label('guitar_id', 'Guitar Id:') !!}
    <p>{{ $guitarImage->guitar_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $guitarImage->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $guitarImage->updated_at }}</p>
</div>

