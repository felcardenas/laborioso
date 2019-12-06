<div class="row justify-content-center">
              <h1><div class="col-12 mt-5">REVISAR EXÁMENES</div></h1>
</div>

<form action="" method="post" class="form-group">
    
    <!-- SELECCIONE TRABAJADOR-->
    <div class="row justify-content-center">

                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <label for="">RUT</label>
                                    <input type="text" name="rutTrabajador" id="rutTrabajador" class="form-control">
                            </div>

                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                    <label for="">DÍGITO VERIFICADOR</label>
                                    <select class="form-control" id="dvTrabajador" name="dvTrabajador">
                                            <?php for ($i=0; $i < 10 ; $i++) { ?> 
                                                <option><?= $i ?></option>    
                                            <?php ;}?>
                                            <option>K</option>
                                    </select>
                                </div>

                                <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 ml-3">
                                <label for="">CÓDIGO</label>
                                    <input type="text" name="rutTrabajador" id="rutTrabajador" class="form-control">
                            </div>
                            
    </div>

                        <div class="row justify-content-center mt-5">
                            <div class="col-9">
                                    <input type="submit" name="siguiente" id="siguiente" class="form-control btn btn-dark" value="VER EXÁMENES">
                            </div>
                        </div>

</form>