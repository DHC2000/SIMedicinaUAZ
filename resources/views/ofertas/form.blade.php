<div class="container mt-3 mb-3">
  <div class="card card-body">
      <div class="form-row">
          <div class="col">
            <label for="inputPlanDeEstudio">Plan de estudio</label>
            <input type="text" class="form-control" placeholder="{{ isset($oferta->oferta)?$oferta->oferta:'' }}" name="oferta" value="{{ isset($oferta->oferta)?$oferta->oferta:'' }}" required>
          </div>
      </div>
          <!--input type="submit" class="btn btn-primary btn-block mt-3" name="submit" value="Guardar"-->
      <button type="submit" class="btn btn-primary mb-2 mt-3" name="">Guaradar</button>
  </div>
</div>
