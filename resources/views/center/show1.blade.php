@foreach ($centers as $item)
    {{ $item->name }}
@endforeach

@if ($centers === null)
    {{"Richard"}}
@else
    @foreach ($centers as $item)
    <pre>
        <div class="col-md-12">
            <p class="h2">This is Richard Petro</p>
        </div>
        <code>{JSON.stringify(this.state, null, 4)}</code>
    </pre>
    @endforeach
@endif