 <!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("tr[data-href]").click(function(){
			window.location.href = this.dataset.href;
		});
	});
</script>
<!-- <script type="text/javascript">
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
    $(".js-example-tokenizer").select2({
    tags: true,
    tokenSeparators: [',', ' ']
})
</script> -->
    <!-- Scripts -->