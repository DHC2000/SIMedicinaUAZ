

  <h1>Plan de Estudio</h1>


             <div class="form-group">
              <label for="Objetivo">Objetivo</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="objetivo" value="{{ isset($datos->objetivo)?$datos->objetivo:'' }}" required></textarea>
            </div>

            <!--div class="form-group row">
              <label for="inputPlanDeEstudio">Objetivo</label>
              <input type="text" class="form-control" placeholder="Objetivo" name="objetivo" required>
            </div-->

            <div class="form-group">
              <label for="inputPlanDeEstudio">Misión</label>
              <!--input type="text" class="form-control" placeholder="Misión" name="mision" required-->
              <textarea class="form-control" id="" rows="6" name="mision" required></textarea>
            </div>

            <div class="form-group">
              <label for="inputPlanDeEstudio">Visión</label>
              <!--input type="text" class="form-control" placeholder="Visión" name="vision" required-->
              <textarea class="form-control" id="" rows="6" name="vision" required></textarea>
            </div>

            <div class="form-group">
              <label for="inputPlanDeEstudio">Valores</label>
              <!--input type="text" class="form-control" placeholder="Valores" name="valores" required-->
              <textarea class="form-control" id="" rows="6" name="valores" required></textarea>
            </div>

            <div class="form-group">
              <label for="inputPlanDeEstudio">Perfil de ingreso</label>
              <!--input type="text" class="form-control" placeholder="Perfil de ingreso" name="perfil_in" required-->
                <textarea class="form-control" id="" rows="6" name="perfil_in" required></textarea>
            </div>

            <div class="form-group">
              <label for="inputPlanDeEstudio">Perfil de egreso</label>
              <!--input type="text" class="form-control" placeholder="Perfil de egreso" name="perfil_eg" required-->
                <textarea class="form-control" id="" rows="6" name="perfil_eg" required></textarea>
            </div>

            <div class="form-group">
              <label for="inputPlanDeEstudio">Requisitos de ingreso</label>
              <!--input type="text" class="form-control" placeholder="Requisitos de ingreso" name="requisitos_in" required-->
                <textarea class="form-control" id="" rows="6" name="requisitos_in" required></textarea>
            </div>

            <div class="form-group">
              <label for="inputPlanDeEstudio">Requisitos de egreso</label>
              <!--input type="text" class="form-control" placeholder="Requisitos de egreso" name="requisitos_eg"-->
                <textarea class="form-control" id="" rows="6" name="requisitos_eg" required></textarea>
            </div>

            <div class="form-group">
              <label for="inputPlanDeEstudio">Título a recibir</label>
              <input type="text" class="form-control" placeholder="Título a recibir" name="titulo" required>
            </div>

            <div class="form-group">
                <label for="inputPlanDeEstudio">Tipo Sistema</label>
                <input type="text" class="form-control" placeholder="Tipo de Sistema" name="sistema">
            </div>

            <div class="form-group">
                <label for="inputPlanDeEstudio">Modalidad</label>
                <input type="text" class="form-control" placeholder="Modalidad" name="modalidad">
            </div>

            <div class="form-group">
                <label for="inputPlanDeEstudio">Grado Academico</label>
                <input type="text" class="form-control" placeholder="Grado Academico" name="grado">
            </div>

            <div class="form-group">
                <label for="inputPlanDeEstudio">Responsable del Programa</label>
                <input type="text" class="form-control" placeholder="Responsable del Programa" name="responsable">
            </div>

            <div class="form-group">
                <label for="inputPlanDeEstudio">Correo del Responsable del Programa</label>
                <input type="email" class="form-control" placeholder="Correo del Responsable del Programa" name="correo">
            </div>

            <div class="form-group">
                <label for="inputPlanDeEstudio">Telefono del Responsable del Programa</label>
                <input type="text" class="form-control" placeholder="Telefono del Responsable del Programa" name="telefono">
            </div>

          <!--input type="submit" class="btn btn-primary btn-block mt-3" name="submit" value="Guardar"-->
          <button type="submit" class="btn btn-primary mb-2 mt-3" name="">Guardar</button>
