@foreach ($fields as $field)
  {
  @foreach ($field as $key => $value)
    @if (is_string($value))
      {{ $key }}: '{{ $value }}',
    @elseif ($value == false)
      {{ $key }}: false,
    @elseif ($value == true)
      {{ $key }}: true,
    @endif
  @endforeach
  },
@endforeach
