
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
                    $action = ['<a href="javascript:void(0)" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="fa fa-pencil color-muted"></i>
                        </a>',
                        '<a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Close">
                            <i class="fa fa-close color-danger"></i>
                        </a>'];
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
                    :action="$action"
                >
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



