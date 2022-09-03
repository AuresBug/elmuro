@include('share.buttons.default', [
    'url' => $url ?? null,
    'class' => $class ?? 'btn btn-sm btn-outline-secondary',
    'text' => $text ?? 'Ver',
    'icon' => $icon ?? 'fas fa-eye',
])
