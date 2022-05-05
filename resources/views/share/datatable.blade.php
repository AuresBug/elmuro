  <script>
    $(document).ready(function() {


      var table = $('#{{ $model }}-table').DataTable({
        serverSide: true,
        language: {
          url: '{{ asset('vendor/datatables/es-mx.json') }}'
        },
        ajax: "{{ route($model . '.getIndexTable') }}",
        columns: [{
            name: 'id'
          },

          @foreach ($fields as $field)
            {
            @foreach ($field as $key => $value)
              {{ $key }}: '{{ $value }}',
            @endforeach
            },
          @endforeach
        ],
      });

    });
  </script>
