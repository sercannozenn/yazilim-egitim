<div class="card">
    @isset($header)
        <div class="card-header">
            {!! $header !!}

        </div>
    @endisset
    @isset($body)
        <div class="card-body">
            {!! $body !!}

        </div>
    @endisset
</div>
