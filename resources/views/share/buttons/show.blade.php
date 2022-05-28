<a class="{{ $class ?? 'btn btn-sm btn-outline-secondary' }}" href="{{ route($routeName, $params) }}" role="button"
  data-toggle="tooltip" data-placement="top" title="{{ $text ?? 'Ver' }}"><i
    class="{{ $icon ?? 'fas fa-eye' }} fa-fw"></i>
  {{ $text ?? 'Ver' }}</a>
