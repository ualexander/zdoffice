<div class="card">
  <div class="card-header bg-transparent">
    <h2 class="mb-0">Новая заявка на производство</h2>
  </div>
  <div class="card-body">
    <form action="<?= $data['CONFIG']['HOST'] . '/production.php'; ?>" method="POST">
      <input type="hidden" name="action" value="new_order_data">
      <input type="hidden" name="form_id" value="<?= $data['formId']; ?>">
      <input type="hidden" name="redirect_success"
             value="<?= $data['CONFIG']['HOST'] . '/production.php?action=new_order_card'; ?>">
      <input type="hidden" name="redirect_error"
             value="<?= $data['CONFIG']['HOST'] . '/production.php?action=new_order_card'; ?>">
      <div class="row">

        <div class="col-12 col-md-6">
          <div class="mb-4">
            <h4>Данные контрагента</h4>
            <div class="form-row">
              <div class="form-group col-12 mb-4">
                <small class="text-gray">Счет бонсенс (<?= 'en ' . $data['CONFIG']['MIN_LEN_A'] . '-' . $data['CONFIG']['MAX_LEN_A']; ?>)</small>
                <input type="text" name="order_name_out" class="form-control" required
                       minlength="<?= $data['CONFIG']['MIN_LEN_A']; ?>" maxlength="<?= $data['CONFIG']['MAX_LEN_A']; ?>"
                       pattern="^[a-zA-Z0-9 ]+$">
              </div>
              <div class="form-group col-12 mb-4">
                <small class="text-gray">контагент (<?= 'ru en ' . $data['CONFIG']['MIN_LEN_A'] . '-' . $data['CONFIG']['MAX_LEN_A']; ?>)</small>
                <input type="text" name="client_name" class="form-control" required
                       minlength="<?= $data['CONFIG']['MIN_LEN_A']; ?>" maxlength="<?= $data['CONFIG']['MAX_LEN_A']; ?>"
                       pattern="^[a-zA-Zа-яА-ЯёЁ0-9 ]+$">
              </div>
              <div class="form-group col-12 mb-4">
                <small class="text-gray">телефон</small>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><?= $data['CONFIG']['PHONE_PREFIX']; ?></span>
                  </div>
                  <input type="tel" name="mobile_phone" class="form-control" required
                         pattern="\d{2}\s\d{3}\s\d{2}\s\d{2}"
                         placeholder="XX XXX XX XX"">
                </div>
              </div>
              <div class="form-group col-12 mb-4">
                <small class="text-gray">почта</small>
                <input type="email" name="email" class="form-control">
              </div>
            </div>
            <hr>
          </div>

          <div class="mb-4">
            <h4>Данные Заказа</h4>
            <div class="form-row">
              <div class="form-group col-12 mb-4">
                <small class="text-gray">описание (<?= $data['CONFIG']['MIN_LEN_B'] . '-' . $data['CONFIG']['MAX_LEN_B']; ?>)</small>
                <textarea name="task_text" class="form-control" rows="5" required
                          minlength="<?= $data['CONFIG']['MIN_LEN_B']; ?>"
                          maxlength="<?= $data['CONFIG']['MAX_LEN_B']; ?>"></textarea>
              </div>
              <div class="form-group col-12 mb-4">
                <small class="text-gray">количество</small>
                <input type="number" name="task_quantity" class="form-control" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-12 mb-4">
                <small class="text-gray">дизайнер</small>
                <select name="designer_id" class="form-control" required>
                  <option></option>
									<?php foreach ($data['designers'] as $designerd): ?>
                    <option value="<?= $designerd['id']; ?>"><?= $designerd['last_name'] . ' ' . $designerd['first_name']; ?></option>
									<?php endforeach; ?>
                </select>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-12 mb-4">
                <small class="text-gray">дата сдачи проекта</small>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                  </div>
                  <input class="form-control datepicker" type="text" name="general_deadline" required>
                </div>
              </div>
            </div>

            <div class="block-ainstall d-none mb-4">
              <small class="text-gray">Описание монтажа (<?= $data['CONFIG']['MIN_LEN_B'] . '-' . $data['CONFIG']['MAX_LEN_B']; ?>)</small>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="install_task"
                        minlength="<?= $data['CONFIG']['MIN_LEN_B']; ?>"
                        maxlength="<?= $data['CONFIG']['MAX_LEN_B']; ?>"></textarea>
            </div>
            <div class="block-ainstall d-none mb-4">
              <small class="text-gray">Адрес монтажа (<?= $data['CONFIG']['MIN_LEN_C'] . '-' . $data['CONFIG']['MAX_LEN_C']; ?>)</small>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="install_address"
                        minlength="<?= $data['CONFIG']['MIN_LEN_C']; ?>"
                        maxlength="<?= $data['CONFIG']['MAX_LEN_C']; ?>"></textarea>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6">
					<?php foreach ($data['PROG_DATA']['DEPARTMENTS_LIST'] as $depKey => $depVal): ?>
            <div class="mb-4">
              <h4><?= mb_ucfirst($depVal); ?></h4>
              <div class="form-row">
                <div class="form-group col-4 mb-4">
                  <small class="text-gray">Участвует в проекте</small>
                  <div class="">
                    <label class="custom-toggle my-2">
                      <input class="if-enabled-required" data-required=".input-a<?= $depKey; ?>"
                             data-dnone=".block-a<?= $depKey; ?>" type="checkbox" name="<?= $depKey; ?>">
                      <span class="custom-toggle-slider rounded-circle"></span>
                    </label>
                  </div>
                </div>
                <div class="block-a<?= $depKey; ?> d-none form-group col-8 mb-4">
                  <small class="text-gray">дата сдачи</small>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                    </div>
                    <input class="input-a<?= $depKey; ?> form-control datepicker" type="text" name="<?= $depKey; ?>_deadline" value="">
                  </div>
                </div>
              </div>
              <hr>
            </div>
					<?php endforeach; ?>
        </div>
      </div>
      <div class="mb-4">
        <input class="btn btn-primary" type="submit" value="Сохранить">
      </div>
    </form>
  </div>
</div>
