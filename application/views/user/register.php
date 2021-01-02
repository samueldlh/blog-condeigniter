<div class="row justify-content-center">
    <div class="col-lg-5">
        <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-white">
                <div class="text-muted text-center">
                    <small>Formulario de registro</small>
                </div>
            </div>
            <div class="card-body px-lg-5">
                <?php echo form_open('auth/register') ?>
                <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input class="form-control" name="name" placeholder="Nombre y apellido" type="text">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input class="form-control" name="username" placeholder="Username" type="text">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input class="form-control" name="email" placeholder="Correo electronico" type="email">
                    </div>
                </div>
                <div class="form-group focused">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        </div>
                        <input class="form-control" name="pass" placeholder="Contraseña" type="password">
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">REGISTRASE</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>