
$(document).ready(function() {
	oTable = $('#tab_discog').dataTable({
		"bPaginate": true,
		"bJQueryUI": true,
		"sPaginationType": "full_numbers"
	});
});

$(function() {
    $("a[rel]").overlay({mask: '#000', effect: 'apple'});
  });

