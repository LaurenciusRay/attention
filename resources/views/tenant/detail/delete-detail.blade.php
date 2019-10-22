<!-- Modal -->
<div class="modal fade" id="hapus_modal" tabindex="-1" role="dialog" aria-labelledby="hapus_modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="hapus_modalLabel">KONFIRMASI PENGHAPUSAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3 class="text-center">Apa anda yakin ingin menghapus data ini?</h3>
        <br>
        <p>
            <i class="text-muted">*Data yang dihapus tidak dapat dikembalikan!</i>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Close</button>
        <form action="{{ route('products.destroy', $datas->id) }}" method="post">
        {{csrf_field()}}
        {{method_field('DELETE')}}
          <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>