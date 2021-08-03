<div class="">

                <div class="btn-group ">
                    <button type="button" class="btn secondary-color-bg w-140px dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Manage
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" data-dismiss="modal" data-toggle="modal" data-target='#model_modal' data-id = "" data-route="{{route('humanresource.employees.index')}}" href="#" title=''>Menu Item 1</a>

                        <a class="dropdown-item" data-dismiss="modal" data-toggle="modal" data-target='#model_modal' data-id = "" data-route="{{route('humanresource.employees.index')}}" href="#" title=''>Menu Item 2</a>

                        <a class="dropdown-item" data-dismiss="modal" data-toggle="modal" data-target='#model_modal' data-id = "" data-route="{{route('humanresource.employees.index')}}" href="#" title=''>Menu Item 3</a>

                        <div class="dropdown-divider"></div>
                       
                    </div>
                </div>
            </div>


<div class="result"></div>

<!-- @push('script') 

    $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });

        $('a').on('click', function(e) {
        e.preventDefault();

        let id = $(this).data('id');
        let route = $(this).data('route');
        let is_modal = true;
        
        $.ajax({
            url: 'process.php',
            type: 'POST',
            data: {id,route,is_modal},
            success: function(data){
                $('.result').html(data);                        
            }       
        });
    });

}); 

@endpush -->

<div class="modal fade" id="my_modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Testing</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <center>
                <strong>
                    <span style="text-decoration: underline;">NOTICE</span>
                </strong>
            </center>
        </div>              
                        
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn secondary-color-bg" data-dismiss="modal" data-toggle="modal" data-target="#modal-add-internal-respondent">Proceed </button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>