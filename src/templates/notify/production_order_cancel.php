<div class="px-3 py-3">
	<h4 class="m-0 <?= $data['CONFIG']['TEXT_STYLE']; ?>">Ожидает подтверждения отмены: (<span class=""><?= $data['notifyQuantity']; ?>)</span></h4>
</div>
<?php foreach ($data['notifys'] as $notity): ?>
	<div class="list-group list-group-flush">
		<a href="<?= $data['CONFIG']['HOST'] . '/production.php?action=order_info_card&active_tab=' . $data['active_tab'] . '&id=' . $notity['id']?>" class="list-group-item list-group-item-action">
			<div class="row align-items-center">
				<div class="col">
					<div class="">
						<?= $data['PROG_DATA']['PRIORITY_ORDERS'][$notity['order_priority']]['icon'] ?? '???'; ?>
            <small>
							<?= shortStr($notity['client_name'], $data['CONFIG']['MAX_SYMBOLS_TABLE_CELL']); ?>
            </small>
					</div>
					<p class="text-sm mb-0"><?= shortStr($notity['task_text'], 50); ?></p>
				</div>
			</div>
		</a>
	</div>
<?php endforeach; ?>