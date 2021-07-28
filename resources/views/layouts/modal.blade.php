<div class="modal fade" data-employee-id="" id="model_modal" tabindex="-1" role="dialog" aria-labelledby="modelModal" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <iframe id="model_frame" src="" frameborder="0" height="500"></iframe>
        </div>
    </div>
</div>

{{-- <script type="text/javascript">
    window.onload = loadModal;

    function loadModal() {
        $(".model_modal_button").each(function(index) {
            $(this).click(function() {
                $('#model_frame').attr('src', $(this).attr("data-route"));
                $('#model_modal').modal('show');
            })
        });


        $('#model_modal').on('hidden.bs.modal', function() {
            // location.reload();
        })
    }
</script> --}}
