@isset($parentElement)
    <{{ $parentElement }} class = "{{ isset($parentClass) ?  $parentClass  : '' }}">

@endisset


@isset($id)
    <button
        type="{{$type ?? 'button'}}"
        class="{{ $class ?? '' }}"
        id="{{ $id }}"
        style="{{$style ?? ''}}"

    >
        {!! $text !!}
    </button>
@endisset



@isset($parentElement)
    </{{$parentElement}}>
@endisset
