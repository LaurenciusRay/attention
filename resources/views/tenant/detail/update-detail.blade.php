<div class="modal fade" id="update_modal{{$datas->id}}" tabindex="-1" role="dialog" aria-labelledby="update_modalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
<form action="/products/{{$datas->id}}" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="update_modalTitle">Update Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    {{ csrf_field() }}
    {{method_field('PUT')}}

    <table>
    <div class="form-group row">
        <label class="col-sm-12 col-form-label">Tenant_id</label>
        <div class="col-sm-12">
          <input type="number" id="tenant_users_id" name="tenant_users_id" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-12 col-form-label">Title</label>
        <div class="col-sm-12">
          <input type="text" class="form-control" name="title" placeholder="">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-12 col-form-label">Price</label>
        <div class="col-sm-12">
          <input type="number" class="form-control" placeholder="" name="price">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-12 col-form-label">Image</label>
        <div class="col-sm-12">
          <input type="file" class="form-control" placeholder="" name="image">
        </div>
      </div>
    </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-outline-dark" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-sm btn-primary">Save changes</button>
      </div>
    </div>
</form>
  </div>
</div>
