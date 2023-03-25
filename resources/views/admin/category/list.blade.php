@extends("layouts.admin")
@section("css")

@endsection
@section("content")
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Category Create</a></li>
        </ol>
    </div>
    <div class="col-xl-12 col-lg-12 mx-auto">
        <x-bootstrap.card>
            <x-slot name="header">
                <h4 class="card-title">Category List</h4>
            </x-slot>
            <x-slot:body>
                @php
                    $actions = ['',
                        ''];
                @endphp
                <x-bootstrap.table
                    :parentClass="'table-responsive'"
                    :parentElement="'div'"
                    :class="'table table-bordered table-striped verticle-middle table-responsive-sm'"
                    :headings="['Baslık1', 'Baslik2', 'Baslik3', 'action']"
                    :data='[
            ["alan1", "alan2", "alan3"],
            ["alan1", "alan2", "alan3"],
            ["alan1", "alan2", "alan3"],
        ]'
                    :actions="$actions"
                >
                    <x-slot name="columns">
                        <th scope="col">Name</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Description</th>
                        <th scope="col">Parent Category</th>
                        <th scope="col">Status</th>
                        <th scope="col">Feature Status</th>
                        <th scope="col">Order</th>
                        <th scope="col">Actions</th>
                    </x-slot>
                    <x-slot name="rows">
                        @foreach($list as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->slug }}</td>
                                <td>{{ substr($item->description,0,20) }}</td>
                                <td>
                                    @if($item->parentCategory)
                                        {{ $item->parentCategory->name }}
                                    @else
                                        -----------
                                    @endif

                                </td>
                                <td>
                                    @if($item->status)
                                        <a href="javascript:void(0)" data-id="{{ $item->id }}" class="btn btn-success changeStatus">
                                            Active
                                        </a>
                                    @else
                                        <a href="javascript:void(0)" data-id="{{ $item->id }}" class="btn btn-danger changeStatus">
                                            Passive
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    @if($item->feature_status)
                                        <a href="javascript:void(0)" data-id="{{ $item->id }}" class="btn btn-success changeFeatureStatus">
                                            Active
                                        </a>
                                    @else
                                        <a href="javascript:void(0)" data-id="{{ $item->id }}" class="btn btn-danger changeFeatureStatus">
                                            Passive
                                        </a>
                                    @endif
                                </td>
                                <td>{{ $item->order }}</td>
                                <td>
                                    <span>
                                        <a href="javascript:void(0)" data-id="{{ $item->id }}" class="mr-4 editCategory" data-toggle="tooltip"
                                           data-placement="top" title="Edit">
                                            <i class="fa fa-pencil color-muted"></i>
                                        </a>
                                        <a href="javascript:void(0)" data-id="{{ $item->id }}" class="deleteCategory" data-toggle="tooltip" data-placement="top" title="Close">
                                            <i class="fa fa-close color-danger"></i>
                                        </a>
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </x-slot>
                </x-bootstrap.table>
            </x-slot:body>
        </x-bootstrap.card>


    </div>

@endsection
@section("js")
    <script src="{{ asset("assets/admin/vendor/jquery-validation/jquery.validate.min.js") }}"></script>

    <!-- Form validate init -->
    <script src="{{asset("assets/admin/js/plugins-init/jquery.validate-init.js")}}"></script>
@endsection



