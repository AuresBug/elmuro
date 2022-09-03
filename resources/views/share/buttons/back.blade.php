@include('share.buttons.default', [
    'url' => $url ?? url()->previous(),
    'class' => $class ?? 'btn btn-sm btn-outline-secondary',
    'text' => $text ?? 'Regresar',
    'icon' => $icon ?? 'fas fa-chevron-left',
])
