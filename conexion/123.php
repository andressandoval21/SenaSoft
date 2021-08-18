<h3 class="mt-5">Cambiar Contraseña </h3>
<hr>

<div class="row"> 

<div class="col-12 col col-md-12"> 

        <form role = "form" method = "POST" action="<?php echo $_SERVER['PHP_SELF'] ?>"> 
        <input  name = "id" type="hidden"> 
        <div class="form-row"> 
        <div class="form-group col-md-6">  
        <label for="Password"> Contraseña Actual</label> </label>
        <input name = "Password" type = "password" class="form-control" id="Password" placeholder="contraseña">
        <br>
        <button name="Password"   class="btn btn-primary">Verificar</button>
        </div>
        
    </div>
    <div class="form-group col-md-6">  
        <label for="Password">  Nueva Contraseña </label>
        <input name = "Password" type = "password" class="form-control" id="Password" placeholder="nueva contraseña">
        </div>
    
    <div class="form-group col-md-6">  
        <label for="Password"> Confirmar contraseña</label>
        <input name = "Password" type = "password" class="form-control" id="Password" placeholder="confirmar">
        <br>
        <button name="Password" name="cambio" value = "Password" class="btn btn-primary">Verificar</button>
        </div>
    
    <div class="form-group"> 
        <button name="cambio" type= "submit" class="btn btn-primary btn-block">Guardar</button>
    </div>
    </form>
</div>