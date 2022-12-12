<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Nuevo Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('Semestre')}}" method="POST">
          @csrf
          <div class="form-row">
              <div class="col">
                <label for="inputPlanDeEstudio">Semestre</label>
                <input type="text" class="form-control" placeholder="Semestre" name="semestre" required>
              </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guaradar</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
