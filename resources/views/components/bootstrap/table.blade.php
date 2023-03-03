<div class="table-responsive">
    <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
        <thead>
        <tr>
           @foreach($headings as $head)
                <th scope="col">{{ $head }}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach($data as $row)
        <tr>
            @foreach($row as $item)
                <td>{{ $item }}</td>
            @endforeach
    @if(isset($action) && $action)
    <td>
        <span>
            @foreach($action as $item)
                {!! $item !!}
            @endforeach
{{--            <a href="javascript:void(0)" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit">--}}
{{--                <i class="fa fa-pencil color-muted"></i>--}}
{{--            </a>--}}
{{--            <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Close">--}}
{{--                <i class="fa fa-close color-danger"></i>--}}
{{--            </a>--}}
        </span>
    </td>
    @endif

        </tr>
        @endforeach
        </tbody>
    </table>
</div>
