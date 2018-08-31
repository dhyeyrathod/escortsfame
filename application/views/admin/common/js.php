<script type="text/javascript">
	var base_url = '<?= base_url() ?>';
</script>
<script src="<?= base_url('assets/admin') ?>/js/jquery-3.2.1.min.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/popper.min.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/main.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/common.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/plugins/pace.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/admin') ?>/js/plugins/chart.js"></script>
<script type="text/javascript">
	function alert_success(message) {
		swal("Success",message, "success");
	}
	function alert_error(message) {
		swal("Error",message, "error");
	}
</script>
<script type="text/javascript" src="<?= base_url('assets/admin') ?>/js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/admin') ?>/js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">$('#sampleTable').DataTable();</script>