@extends("layouts.admin")
@section("css")

@endsection
@section("content")
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Category</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Category Create</a></li>
        </ol>
    </div>
    <div class="col-xl-10 col-lg-10 mx-auto">
        <x-bootstrap.card>
            <x-slot name="header">
                <h4 class="card-title">Category Create</h4>
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
            </x-slot>

            <x-slot:body>
                <div class="basic-form">
                    <form action="{{ route('admin.category.create') }}" method="POST">
                        @csrf

                        <x-elements.input
                            :labelClass="'mb-1'"
                            :parentElement="'div'"
                            :parentClass="'form-group'"
                            :type="'text'"
                            :class="'form-control'"
                            :placeholder="'Category Name Area'"
                            :name="'name'"
                            :id="'name'"
                        >
                            <x-slot:label>Category Name</x-slot:label>

                            <x-slot:error>
                                @if($errors->has("name"))
                                    {{ $errors->first("name") }}
                                @endif
                            </x-slot:error>

                        </x-elements.input>

                        <x-elements.input
                            :labelClass="'mb-1'"
                            :parentElement="'div'"
                            :parentClass="'form-group'"
                            :type="'text'"
                            :class="'form-control'"
                            :placeholder="'Slug Name'"
                            :name="'slug'"
                            :id="'slug'"
                        >
                            <x-slot:label>Slug Name</x-slot:label>

                            <x-slot:error>
                                @if($errors->has("slug"))
                                    {{ $errors->first("slug") }}
                                @endif
                            </x-slot:error>


                        </x-elements.input>

                        <x-elements.input
                            :labelClass="'mb-1'"
                            :parentElement="'div'"
                            :parentClass="'form-group'"
                            :type="'text'"
                            :class="'form-control'"
                            :placeholder="'Description Area'"
                            :name="'description'"
                            :id="'description'"
                        >

                            <x-slot:label>Description</x-slot:label>

                            <x-slot:error>
                                @if($errors->has("description"))
                                    {{ $errors->first("description") }}
                                @endif
                            </x-slot:error>

                        </x-elements.input>
                        <x-elements.select
                            :labelClass="'mb-1'"
                            :parentElement="'div'"
                            :parentClass="'form-group'"
                            :class="'form-control'"
                            :name="'parentCategory'"
                            :id="'parentCategory'"
                            :options="$parentCategories"
                            :defaultValue="''"
                            :defaultOption="'Select Category'"

                        >

                            <x-slot:label>Parent Category</x-slot:label>

                            <x-slot:error>
                                @if($errors->has("parentCategory"))
                                    {{ $errors->first("parentCategory") }}
                                @endif
                            </x-slot:error>


                        </x-elements.select>


                        <div class="form-group">
                            <x-elements.input

                                :labelClass="'custom-control-label'"
                                :parentElement="'div'"
                                :parentClass="'custom-control custom-checkbox mb-3 checkbox-info'"
                                :type="'checkbox'"
                                :class="'custom-control-input'"
                                :checked="false"
                                :name="'status'"
                                :id="'status'"
                                :labelIsAfter="true"
                                :defaultValue="1"
                            >

                                <x-slot:label>Status</x-slot:label>

                            </x-elements.input>
                        </div>


                        <x-elements.input
                            :labelClass="'custom-control-label'"
                            :parentElement="'div'"
                            :parentClass="'custom-control custom-checkbox mb-3 checkbox-info'"
                            :type="'checkbox'"
                            :class="'custom-control-input'"
                            :checked="false"
                            :name="'feature_status'"
                            :id="'feature_status'"
                            :labelIsAfter="true"
                            :defaultValue="1"
                        >

                            <x-slot:label>Feature Status</x-slot:label>

                        </x-elements.input>

                        <x-elements.input
                            :labelClass="'mb-1'"
                            :parentElement="'div'"
                            :parentClass="'form-group'"
                            :type="'text'"
                            :class="'form-control'"
                            :placeholder="'Order'"
                            :name="'order'"
                            :id="'order'"
                        >

                            <x-slot:label>Order</x-slot:label>

                            <x-slot:error>
                                @if($errors->has("order"))
                                    {{ $errors->first("order") }}
                                @endif
                            </x-slot:error>

                        </x-elements.input>

                        <x-elements.textarea
                            :labelClass="'mb-1'"
                            :parentElement="'div'"
                            :parentClass="'form-group'"
                            :name="'seo_keywords'"
                            :class="'form-control'"
                            :rows="5"
                            :id="'seo_keywords'"
                            :placeholder="'Please insert to Keywords'"
                            :style="'resize:none'"
                        >
                            <x-slot:label>SEO Keywords</x-slot:label>

                            <x-slot:error>
                                @if($errors->has("seo_keywords"))
                                    {{ $errors->first("seo_keywords") }}
                                @endif
                            </x-slot:error>

                        </x-elements.textarea>

                        <x-elements.textarea
                            :labelClass="'mb-1'"
                            :parentElement="'div'"
                            :parentClass="'form-group'"
                            :name="'seo_description'"
                            :class="'form-control'"
                            :rows="5"
                            :id="'seo_description'"
                            :placeholder="'Please insert to about Seo Description'"
                            :style="'resize:none'"
                        >
                            <x-slot:label>SEO Description</x-slot:label>

                            <x-slot:error>
                                @if($errors->has("seo_description"))
                                    {{ $errors->first("seo_description") }}
                                @endif
                            </x-slot:error>

                        </x-elements.textarea>

                        <x-elements.button
                            :parentElement="'div'"
                            :parentClass="'text-center mt-4'"
                            :type="'submit'"
                            :class="'btn btn-primary btn-block'"
                            :id="'button'"
                            :elementText="'Create Button'"
                        >

                        </x-elements.button>

                    </form>
                </div>
            </x-slot:body>
        </x-bootstrap.card>


    </div>

@endsection
@section("js")
    <script src="{{ asset("assets/admin/vendor/jquery-validation/jquery.validate.min.js") }}"></script>

    <!-- Form validate init -->
    <script src="{{asset("assets/admin/js/plugins-init/jquery.validate-init.js")}}"></script>
@endsection


