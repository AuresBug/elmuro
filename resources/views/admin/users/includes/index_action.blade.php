<div class="d-flex justify-content-end">
  <div class="btn-group">
    <button class="btn btn-link text-muted" type="button" id="actions-menu" data-toggle="dropdown" aria-haspopup="true"
      aria-expanded="false">
      <i class="fas fa-ellipsis-v fa-lg fa-fw"></i>
    </button>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="actions-menu">

      {{-- Show --}}
      @can('view', $user)
        <div class="col-auto">
          @include('share.buttons.show', [
              'url' => route('users.show', $user),
              'class' => 'dropdown-item',
          ])
        </div>
      @endcan

      {{-- Update --}}
      @can('update', $user)
        <div class="col-auto">
          @include('share.buttons.edit', [
              'url' => route('users.edit', $user),
              'class' => 'dropdown-item',
          ])
        </div>
      @endcan

      <div class="dropdown-divider"></div>


      {{-- Delete --}}
      @can('delete', $user)
        <div class="col-auto">
          @include('share.buttons.destroy', [
              'url' => route('users.destroy', $user),
              'class' => 'dropdown-item text-danger',
          ])
        </div>
      @endcan


    </div>
  </div>


</div>
