@isset($parentElement)
    <{{ $parentElement }} class = "{{ isset($parentClass) ?  $parentClass  : '' }}">

@endisset

@if(isset($label) && (!isset($labelIsAfter) || !$labelIsAfter))
    <label class="{{ $labelClass ?? '' }}" for="{{ $id }}"><strong>{{ $label }}</strong></label>
@endif

@isset($id)
    <input
        type="{{ $inputType ?? 'text' }}"
        class="{{ $inputClass ?? '' }}"
        placeholder="{{ $placeHolder ?? '' }}"
        name="{{ $name ?? '' }}"
        id="{{ $id }}"
        {{ isset($checked) && $checked ? 'checked' : ''}}
        value="{{$defaultValue ?? ''}}"
    >
@endisset





@if(isset($label) && isset($labelIsAfter) && $labelIsAfter)
    <label class="{{ $labelClass ?? '' }}" for="{{ $id }}"><strong>{{ $label }}</strong></label>
@endif


@isset($parentElement)
    </{{$parentElement}}>
@endisset
