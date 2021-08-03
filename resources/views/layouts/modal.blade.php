<div class="modal fade" data-employee-id="" id="model_modal" tabindex="-1" role="dialog" aria-labelledby="modelModal"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <iframe name="model_frame" id="model_frame" src="" frameborder="0" height="500"></iframe>
            <div class=""> 
                <a class="btn text-danger btn-block text-white modal-buttons" onclick="closeModal()">Close</a>
                <a class="mb-2 btn secondary-color-bg btn-block modal-buttons" onclick="closeModalAndRefresh()"> Refresh</a>
        
            </div>
        </div>
        </div>
</div>


<script>
    function closeModal() {
        $('#model_modal').modal('toggle');
    }

    function closeModalAndRefresh() {
        closeModal();
        location.reload();
    }
</script>
