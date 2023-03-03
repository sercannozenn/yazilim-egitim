@isset($parentElement)
    <{{ $parentElement }} class = "{{ isset($parentClass) ?  $parentClass  : '' }}">

@endisset

@if(isset($label) && (!isset($labelIsAfter) || !$labelIsAfter))
    <label class="{{ $labelClass ?? '' }}" for="{{ $id }}"><strong>{{ $label }}</strong></label>
@endif



@isset($id)
    <select
        name="{{ $name ?? '' }}"
        id="{{ $id }}"
        class="{{ $selectClass ?? '' }}"


    >
@foreach($options as $key=>$value)
            <option value="{{$key}}" {{isset($defaultValue) && $defaultValue==$key ? 'selected' : ''}}>{{$value}}</option>

@endforeach
    </select>
@endisset




@if(isset($label) && isset($labelIsAfter) && $labelIsAfter)
    <label class="{{ $labelClass ?? '' }}" for="{{ $id }}"><strong>{{ $label }}</strong></label>
@endif


@isset($parentElement)
    </{{$parentElement}}>
@endisset
