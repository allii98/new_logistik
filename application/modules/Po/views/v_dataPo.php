<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-12">
			<div class="card">

				<div class="card-body">
					<div class="row justify-content-between">
						<h4 class="header-title ml-2" style="margin-top: -10px;">Data PO</h4>
						<?php if ($this->session->userdata('status_lokasi') == 'HO') { ?>
							<div class="row form-group mr-0">
								<div class="col-2">
									<label for="" style="margin-top: 3px;">Filter</label>
								</div>
								<div class="col-10">
									<select class="form-control form-control-sm" id="filter" name="filter">
										<option value="SEMUA">TAMPILKAN SEMUA</option>
										<option value="HO" selected>HO</option>
										<option value="PKS">PKS</option>
										<option value="SITE">SITE</option>
										<option value="RO">RO</option>
									</select>
								</div>
							</div>
						<?php } ?>
					</div>

					<!-- <div class="sub-header mb-1" style="margin-top: -15px;">
						</div> -->
					<div class="table-responsive" style="margin-top: -10px;">

						<table id="tableListPO" class="table w-100 dataTable no-footer table-bordered table-striped">
							<thead>
								<tr>
									<th width="11%" style="font-size: 12px; padding:10px">#</th>
									<th width="3%" style="font-size: 12px; padding:10px">No</th>
									<th width="15%" style="font-size: 12px; padding:10px">No. Ref PO</th>
									<th width="7%" style="font-size: 12px; padding:10px">Tgl. PO</th>
									<th width="15%" style="font-size: 12px; padding:10px">No. Ref SPP</th>
									<th width="7%" style="font-size: 12px; padding:10px">Tgl. SPP</th>
									<th width="11%" style="font-size: 12px; padding:10px">Supplier</th>
									<th width="15%" style="font-size: 12px; padding:10px">Keterangan</th>
									<th width="8%" style="font-size: 12px; padding:10px">Terbayar</th>
									<th width="8%" style="font-size: 12px; padding:10px">Status LPB</th>
								</tr>
							</thead>

							<tbody>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="scrollableModalTitle" aria-hidden="true" id="detailpo">
	<div class="modal-dialog modal-full-width">
		<div class="modal-content">
			<div class="modal-header ml-2">
				<h4 style="font-size: 15px;" class="modal-title" id="detailpo">Detail PO</h4>
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="sub-header mb-2" style="margin-top: -20px; margin-left:28px;">
				<span id="detail_noref_po" style="font-size: 12px;"></span>
			</div>
			<div class="modal-body">
				<div class="col-12">
					<div class="table-responsive" style="margin-top: -15px;">
						<input type="hidden" id="hidden_no_row" name="hidden_no_row">
						<table id="datapo" class="table table-striped table-bordered" style="width: 100%; border-collapse: separate; padding: 0 50px 0 50px;">
							<thead>
								<tr>
									<th width="3%" style="font-size: 12px; padding:10px">No</th>
									<th width="15%" style="font-size: 12px; padding:10px">Ref.&nbsp;SPP</th>
									<th width="15%" style="font-size: 12px; padding:10px">Nama&nbsp;Barang</th>
									<th width="20%" style="font-size: 12px; padding:10px">Kode&nbsp;Barang</th>
									<th width="5%" style="font-size: 12px; padding:10px">QTY</th>
									<th width="10%" style="font-size: 12px; padding:10px">Tanggal PO</th>
								</tr>
							</thead>
							<tbody>
							</tbody>

						</table>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<style>
	table#tableListPO td {
		padding: 3px;
		padding-left: 10px;
		font-size: 12px;
	}

	table#datapo td {
		padding: 3px;
		padding-left: 10px;
		font-size: 12px;
	}
</style>

<script>
	// $(document).ready(function() {
	// 	$('#tableListPO').DataTable();
	// });

	$(document).ready(function() {

		$(document).on('click', '#detail', function() {
			var id = $(this).data('id');
			detailPO(id);
		});
		$(document).on('click', '#edit', function() {
			var id = $(this).data('id');
			var data = id.replaceAll('/', '.');
			// console.log(data);

			window.location.href = "Po/edit/" + data;
		});

		$('#filter').change(function() {
			var data = this.value;
			console.log(data);
			dataPO(data);

		});

		//datatables
		var data = "HO";
		dataPO(data);
	});

	function filter() {
		$('#filter').change(function() {
			var data = this.value;
			console.log(data);
			dataPO(data);

		});
	}

	function dataPO(data) {
		$('#tableListPO').DataTable().destroy();
		$('#tableListPO').DataTable({
			"processing": true,
			"serverSide": true,
			"order": [],

			"ajax": {
				"url": "<?php echo site_url('Po/dataPO') ?>",
				"type": "POST",
				"data": {
					data: data,
					// kodedev: kodedev,
				}
			},

			"columnDefs": [{
				"targets": [0],
				"orderable": false,
			}, ],
			"language": {
				"infoFiltered": ""
			}

		});
		// $('<div class="row justify-content-center">' +
		// 	'<label for="filter" class="col-1 col-xs-1 col-form-label" style="margin-top: -5px; font-size: 12px;">Filter</label>' +
		// 	'<div class="col-3 col-xs-3">' +
		// 	'<select class="form-control form-control-sm" id="filter" onclick="filter()" name="filter">' +
		// 	'<option value="SEMUA">TAMPILKAN SEMUA</option>' +
		// 	'<option value="HO" selected>HO</option>' +
		// 	'<option value="PKS">PKS</option>' +
		// 	'<option value="SITE">SITE</option>' +
		// 	'<option value="RO">RO</option>' +
		// 	'</select>' +
		// 	'</div>' +
		// 	'</div>'
		// ).appendTo("#tableListPO_wrapper .dataTables_filter");


		// $(".dataTables_filter label").addClass("row justify-content-center");
	}


	function detailPO(id) {
		$('#detailpo').modal('show');
		$('#detail_noref_po').html('<b>No. Ref. PO : </b>' + id);
		$('#datapo').DataTable({
			"destroy": true,
			"processing": true,
			"serverSide": true,
			"order": [],

			"ajax": {
				"url": "<?php echo site_url('Po/detail') ?>",
				"type": "POST",
				"data": {
					id: id
				}
			},

			"columnDefs": [{
				"targets": [0],
				"orderable": false,
			}, ],
			"language": {
				"infoFiltered": ""
			},


		});

	}
</script>