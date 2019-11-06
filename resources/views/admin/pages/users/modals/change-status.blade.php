<div class="modal fade" id="change-status-{{ $user->id }}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Are you sure?</h4>
      </div>
      <form action="{{ route('users.update', ['id' => $user->id]) }}" method="POST">
        @method('PUT')
        @csrf
      <div class="modal-body">
          <p class="modal-text">You want to {{ $user->status == true ? 'Deactivate' : 'Activate' }} <h4>{{ $user->username }}</h4></p>
      </div>
      <div class="modal-footer">
       
        <button type="submit" name="update-status" class="btn btn-primary btn-flat">Yes</button> 
        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">No</button>
      </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->