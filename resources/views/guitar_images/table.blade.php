<div class="table-responsive">
    <table class="table" id="guitarImages-table">
        <thead>
        <tr>
            <th>Image</th>
        <th>Guitar Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($guitarImages as $guitarImage)
            <tr>
                <td>{{ $guitarImage->image }}</td>
                <td><img src="{{asset('/storage/images/'.$guitarImage->image) }}" style="width: 40px; height: 40px" alt="guitar"/></td> 
                <td width="120">
                    {!! Form::open(['route' => ['guitarImages.destroy', $guitarImage->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('guitarImages.show', [$guitarImage->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('guitarImages.edit', [$guitarImage->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
