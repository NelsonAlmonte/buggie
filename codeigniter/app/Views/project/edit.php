<div class="container-fluid">
  <h2>Edit <?=esc($project['name'])?></h2>
  <div class="card">
    <div class="card-body bg-complementary p-4">
      <?php if(session()->getFlashdata('message') !== null): ?>
      <div class="alert alert-<?= session()->getFlashdata('color') ?> d-flex align-items-center my-4" role="alert">
        <i class="bi bi-check-circle flex-shrink-0 me-2"></i>
        <div>
          <?= session()->getFlashdata('message') ?>
        </div>
      </div>
      <?php endif; ?>
      <form class="row gx-5" action="<?=site_url('project/' . esc($project['slug']) . '/update/' . esc($project['id']))?>" method="post">
        <?= csrf_field() ?>
        <div class="col-4 mb-4">
          <div class="form-floating">
            <input type="text" class="form-control bg-dominant border-0" id="name" name="name"
              placeholder="The name of the project" value="<?=esc($project['name'])?>" required autocomplete="off">
            <label for="name">Project name</label>
          </div>
        </div>
        <div class="col-4 mb-4">
          <div class="form-floating">
            <input type="text" class="form-control bg-dominant border-0" id="owner" name="owner"
              placeholder="Project owner/client" value="<?=esc($project['owner'])?>" required autocomplete="off">
            <label for="name">Owner</label>
          </div>
        </div>
        <div class="col-4 mb-4">
          <label class="mb-1">Project status</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input bg-dominant border-0" type="radio" name="status" id="active" value="active" <?=esc($project['status']) == 'active' ? 'checked' : '' ; ?>>
            <label class="form-check-label" for="active">
              Active
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input bg-dominant border-0" type="radio" name="status" id="on_hold"
              value="on_hold" <?=esc($project['status']) == 'on_hold' ? 'checked' : '' ; ?>>
            <label class="form-check-label" for="on_hold">
              On hold
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input bg-dominant border-0" type="radio" name="status" id="cancelled"
              value="cancelled" <?=esc($project['status']) == 'cancelled' ? 'checked' : '' ; ?>>
            <label class="form-check-label" for="cancelled">
              Cancelled
            </label>
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-rounded btn-primary" type="submit">Update project</button>
        </div>
      </form>
    </div>
  </div>
</div>