{!! Form::open(['method' => 'DELETE', 'route' => [$routeName, $params], 'class' => 'form-horizontal']) !!}
<button type="button" class="btn-confirm {{ $class ?? 'btn btn-sm btn-outline-danger' }}" data-toggle="tooltip"
  data-placement="top" title="{{ $text ?? 'Eliminar' }}"><i class="{{ $icon ?? 'fas fa-trash-alt' }}   fa-fw"></i>
  {{ $text ?? 'Eliminar' }}</button>
{!! Form::close() !!}
