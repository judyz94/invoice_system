<div class="modal fade" tabindex="-1" role="dialog" id="confirmDeleteModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-exclamation-circle"></i>
                    {{ __('Delete') }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-color">{{ __('Are you sure?') }}</p>
                <p class="text-color">{{ __('This action cannot be undone!') }}</p>
                <form id="deleteForm" action="" method="post">
                    @method('DELETE')
                    @csrf()
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn buttonBack" data-dismiss="modal">{{ __('Close') }}</button>
                <button type="submit" form="deleteForm" class="btn buttonCancel">{{ __('Delete') }}</button>
            </div>
        </div>
    </div>
</div>
