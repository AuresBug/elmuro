  <script>
    $(document).ready(function() {


      var table = $('#{{ $model }}-table').DataTable({
        serverSide: true,
        language: {
          url: '{{ asset('vendor/datatables/es-mx.json') }}'
        },
        ajax: "{{ route($model . '.getIndexTable', $params ?? '') }}",
        order: [
          {!! $order ?? "[0, 'desc']" !!}
        ],
        columns: [{
            name: 'id'
          },
          @include('share.fields_datatables')
        ],
      });
    });
  </script>
