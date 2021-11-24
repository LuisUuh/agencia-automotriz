@if (session('status'))
    <div class="toast" 
        role="alert" 
        aria-live="assertive" 
        aria-atomic="true" 
        data-autohide="false"  
        data-delay="2500"
        style="position: absolute !important; top: 10%; right: 10px; z-index: 999999;">
        <div class="toast-header">
            <strong class="mr-auto">Lorem, ipsum.</strong>
            <small class="text-muted"> 1s ago</small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            {{ session('status') }}
            
        </div>
    </div>
@endif