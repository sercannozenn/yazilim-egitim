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
    <div class="col-xl-8 col-lg-8 mx-auto">
        <x-bootstrap.card>
            <x-slot name="header">
                <h4 class="card-title">Category Create</h4>
            </x-slot>
            <x-slot:body>
                <div class="basic-form">
                    <form action="index.html">

                        <x-elements.input
                            :labelClass="'mb-1'"
                            :parentElement="'div'"
                            :parentClass="'form-group'"
                            :inputType="'text'"
                            :inputClass="'form-control'"
                            :placeHolder="'Category Name Area'"
                            :name="'name'"
                            :id="'name'"
                        >
                            <x-slot:label>Category Name</x-slot:label>
                        </x-elements.input>

                        <x-elements.input
                            :labelClass="'mb-1'"
                            :parentElement="'div'"
                            :parentClass="'form-group'"
                            :inputType="'text'"
                            :inputClass="'form-control'"
                            :placeHolder="'Slug Name'"
                            :name="'slug'"
                            :id="'slug'"
                        >
                            <x-slot:label>Slug Name</x-slot:label>

                        </x-elements.input>

                        <x-elements.input
                            :labelClass="'mb-1'"
                            :parentElement="'div'"
                            :parentClass="'form-group'"
                            :inputType="'text'"
                            :inputClass="'form-control'"
                            :placeHolder="'Description Area'"
                            :name="'description'"
                            :id="'description'"
                        >

                            <x-slot:label>Description</x-slot:label>

                        </x-elements.input>
                        <x-elements.select
                            :labelClass="'mb-1'"
                            :parentElement="'div'"
                            :parentClass="'form-group'"
                            :selectClass="'form-control'"
                            :name="'parentCategory'"
                            :id="'parentCategory'"
                            :options="['-1'=>'Parent Category Select',
                                         '1'=>'PURE PHP',
                                         '2'=>'JQUERY'
                                        ]"
                            :defaultValue="'2'"

                        >

                        </x-elements.select>


                        <div class="form-group">
                            <label>Parent Category</label>
                            <select name="" id="" class="form-control">

                            </select>
                        </div>

                        <div class="form-group">
                            <x-elements.input

                                :labelClass="'custom-control-label'"
                                :parentElement="'div'"
                                :parentClass="'custom-control custom-checkbox mb-3 checkbox-info'"
                                :inputType="'checkbox'"
                                :inputClass="'custom-control-input'"
                                :checked="false"
                                :name="'status'"
                                :id="'status'"
                                :labelIsAfter="true"
                            >

                                <x-slot:label>Status</x-slot:label>

                            </x-elements.input>
                        </div>


                        <x-elements.input
                            :labelClass="'mb-1'"
                            :parentElement="'div'"
                            :parentClass="'form-group'"
                            :inputType="'text'"
                            :inputClass="'form-control'"
                            :placeHolder="'Feature Status'"
                            :name="'featureStatus'"
                            :id="'featureStatus'"
                        >

                            <x-slot:label>Feature Status</x-slot:label>

                        </x-elements.input>

                        <x-elements.input
                            :labelClass="'mb-1'"
                            :parentElement="'div'"
                            :parentClass="'form-group'"
                            :inputType="'text'"
                            :inputClass="'form-control'"
                            :placeHolder="'Order'"
                            :name="'order'"
                            :id="'order'"
                        >

                            <x-slot:label>Order</x-slot:label>

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
                        </x-elements.textarea>

                        <x-elements.button
                            :parentElement="'div'"
                            :parentClass="'text-center mt-4'"
                            :type="'submit'"
                            :class="'btn btn-primary btn-block'"
                            :id="'button'"
                            :text="'Create Button'"
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


