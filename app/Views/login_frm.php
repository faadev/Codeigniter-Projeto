<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>
<!-- login form with bootstrap -->

<div class="d-flex align-items-center" style="height: 100vh;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4 col-sm-6 col-10">
        <div class="card bg-light text-dark rounded-3 p-5">
          <?= form_open('login_submit', ['novalidate' => true]) ?>

          <h3 class="text-center">login</h3>
          <hr>
          <div class="mb-3">
            <input type="text" class="form-control" name="text_usuario" placeholder="usuario" require>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="text_senha" placeholder="senha" require>
          </div>
          <div class="mb-3">
            <button class="btn btn-primary w-100">Entrar</button>
          </div>
          <?= form_close() ?>

        </div>
      </div>
    </div>
  </div>

</div>
<?= $this->EndSection() ?>