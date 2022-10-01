<h1>{{ $heading }}</h1>

@if (count($listings) == 0)
<p>No listings found</p>
@endif

@foreach ($listings as $listing)
<a href="/listing/{{ $listing['id'] }}">{{ $listing['title'] }} </a>
<p>{{ $listing['description'] }}</p>
@endforeach
