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
        class="{{ $class ?? '' }}"
        style="{{ $style ?? '' }}"


    >
        @if(isset($defaultOption) && $defaultOption)
            <option value="{{ null }}">{{ $defaultOption }}</option>
        @endif
@foreach($options as $option)
            <option value="{{$option->id}}" {{isset($defaultValue) && $defaultValue==$option->id ? 'selected' : ''}}>{{$option->name}}</option>
@endforeach
    </select>
@endisset




@if(isset($label) && isset($labelIsAfter) && $labelIsAfter)
    <label class="{{ $labelClass ?? '' }}" for="{{ $id }}"><strong>{{ $label }}</strong></label>
@endif


@isset($parentElement)
    </{{$parentElement}}>
@endisset
