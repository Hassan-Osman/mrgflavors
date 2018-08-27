<div class="bs-callout bs-callout-danger">
	<h4>Delete Item</h4>
	<p>Are you sure you want delete this item ?</p>
 	<p><?= $name ?></p>
 	<button onclick="window.location.href='<?= base_url('mrgAdmin') ?>'" type="button" class="btn btn-primary">No</button>
    <button onclick="window.location.href='<?= base_url('mrgAdmin/deleteProduct?id='.$id) ?>'" type="button" class="btn btn-danger">Yes</button>
</div>