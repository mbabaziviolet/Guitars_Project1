<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $guitar->name }}</p>
</div>

<!-- Type Field -->
<div class="col-sm-12">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $guitar->type }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $guitar->image }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $guitar->price }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $guitar->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $guitar->updated_at }}</p>
</div>

