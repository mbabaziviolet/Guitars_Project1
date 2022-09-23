<div class="table-responsive">
    <table class="table" id="guitars-table">
        <thead>
        <tr>
            <th>Name</th>
        <th>Type</th>
        <th>Image</th>
        <th>Price</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($guitars as $guitar)
            <tr>
                <td>{{ $guitar->name }}</td>
            <td>{{ $guitar->type }}</td>
            <td>{{ $guitar->image }}</td>
            <td>{{ $guitar->price }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['guitars.destroy', $guitar->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('guitars.show', [$guitar->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('guitars.edit', [$guitar->id]) }}"
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
