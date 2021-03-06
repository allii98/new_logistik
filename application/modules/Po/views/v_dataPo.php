<!-- start row-->
<div class="row justify-content-center">
	<div class="col-md">
		<div class="widget-rounded-circle card-box">
			<h4 class="header-title mb-3" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Data PO</h4>
			<div class="">
				<!-- <div class="ribbon ribbon-danger float-right" id="pesan_"><i class="mdi mdi-access-point mr-1"></i>Habis!</div> -->
				<div class="col-md-12 col-sm-12 col-xs-12">
					<table id="tableListPO" class="table dt-responsive nowrap w-100 dataTable table-sm table-bordered table-striped" width="100%">
						<thead>
							<tr>
								<th style="width: 75px;">
									#
								</th>
								<th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.6em;">
									No.
								</th>
								<th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.6em;">
									No. Ref
								</th>

								<th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.6em;">
									Tgl. PO
								</th>
								<th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.6em;">
									Supplier
								</th>
								<th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.6em;">
									Ket
								</th>
								<th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:small; padding: 0.6em;">
									Terbayar
								</th>

							</tr>
						</thead>

						<tbody>

						</tbody>
					</table>
					<br />
					<br />
				</div>
			</div>

		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="scrollableModalTitle" aria-hidden="true" id="detailpo">
		<div class="modal-dialog modal-lg modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Detail PO</h4>
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">


					<div class="col-12">
						<div class="table-responsive">
							<input type="hidden" id="hidden_no_row" name="hidden_no_row">
							<table id="datapo" class="table table-striped table-bordered" width="100%">
								<thead>
									<tr>
										<th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:11px; padding: 0.6em;">
											No
										</th>
										<th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:11px; padding: 0.6em;">
											Ref. PO
										</th>
										<th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:11px; padding: 0.6em;">
											Nama & Kode Barang
										</th>
										<th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:11px; padding: 0.6em;">
											QTY
										</th>
										<th style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size:11px; padding: 0.6em;">
											Tanggal
										</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
								<!-- <tfoot>
                                <tr>
                                    <th style="text-align: center;" colspan="9"><button class="btn btn-sm btn-info" data-toggle="tooltip" id="btn_setuju_all" onclick="pilihItem()" data-placement="left">Pilih Item</button></th>
                                </tr>
                            </tfoot> -->
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


</div>

<script>
	// $(document).ready(function() {
	// 	$('#tableListPO').DataTable();
	// });
	var table;
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

		//datatables
		dataPO();
	});

	function dataPO() {
		table = $('#tableListPO').DataTable({

			"processing": true,
			"serverSide": true,
			"order": [],

			"ajax": {
				"url": "<?php echo site_url('Po/dataPO') ?>",
				"type": "POST"
			},

			"columnDefs": [{
				"targets": [0],
				"orderable": false,
			}, ],
			"language": {
				"infoFiltered": ""
			}

		});
	}


	function detailPO(id) {
		$('#detailpo').modal('show');
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
			}

		});

	}
</script>