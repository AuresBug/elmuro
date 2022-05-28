  <a class="{{ $class ?? 'btn btn-sm btn-outline-primary' }}" href="{{ route($routeName, $params ?? '') }}"
    role="button" data-toggle="tooltip" data-placement="top" title="{{ $text ?? 'Nuevo' }}"><i
      class="{{ $icon ?? 'fas fa-plus' }} fa-fw"></i>
    {{ $text ?? 'Nuevo' }}</a>
