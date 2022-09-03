  <a class="{{ $class ?? 'btn btn-sm btn-outline-primary' }}" href="{{ $url ?? route('welcome') }}" role="button"
    data-toggle="tooltip" data-placement="top" title="{{ $text ?? 'Button' }}"><i
      class="{{ $icon ?? 'fas fa-circle' }} fa-fw"></i>
    {{ $text ?? 'Button' }}</a>
