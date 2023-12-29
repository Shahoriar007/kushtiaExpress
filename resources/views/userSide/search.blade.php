
@section('search')

@if (is_array($results) && empty($results))
<p>No results found.</p>
@else
<ul>
    @foreach ($results as $product)
        <li>{{ $product->name }}</li>
    @endforeach
</ul>
@endif
@endsection
