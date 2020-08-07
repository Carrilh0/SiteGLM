
jQuery(document).ready(function($){
	"use strict";
toastr.options = {
	 "closeButton": true, 
	 "debug": false, 
	 "newestOnTop": false, 
	 "progressBar": false, 
	 "positionClass": "toast-top-right", 
	 "preventDuplicates": true, 
	 "onclick": null, 
	 "showDuration": "300", 
	 "hideDuration": "1000", 
	 "timeOut": "5000", 
	 "extendedTimeOut": "1000", 
	 "showEasing": "swing", 
	 "hideEasing": "linear", 
	 "showMethod": "fadeIn", 
	 "hideMethod": "fadeOut" 
};

	function setButtonAsWaitState(element) {
		 var button = $(element); 
		 var val = button.html(); 
		 button.attr('data-value', val); 
		 button.html('Aguarde...').attr('disabled', 'disabled'); 
		}

	function setButtonAsReadyState(element) { 
		var button = $(element); 
		var val = button.attr('data-value'); 
		button.html(val).removeAttr('disabled'); 
	}
	
	//contato-form
	$('#contato-form').on('submit', function (e) {
		e.preventDefault();
		if ($('#contato-form #nome').val() == ''){ $('#contato-form #nome').focus(); return; }
		if ($('#contato-form #email').val() == ''){ $('#contato-form #email').focus(); return; }
		if ($('#contato-form #mensagem').val() == ''){ $('#contato-form #mensagem').focus(); return; }
		var template_url = window.location.origin;

		setButtonAsWaitState($('#contato-form #formsend'));
		$.ajax({
			type: 'post',
			url: '/phpMailer/incs/enviar-contato.php',
			data: $('#contato-form').serialize(),
			success: function (data) {
				console.log(data);
				if (data == 1) {
					$('#contato-form')[0].reset();
					toastr.success('Seus dados foram enviados com sucesso, em breve entraremos em contato!');
					setButtonAsReadyState($('#contato-form #formsend'));
				} else {
					toastr.error('Problema ao enviar seus dados, tente novamente mais tarde!');
					setButtonAsReadyState($('#contato-form #formsend'));
				}
			},
			error: function () {
				toastr.error('Problema ao enviar seus dados, tente novamente mais tarde!');
				setButtonAsReadyState($('#contato-form #formsend'));
			}
		});
	});
});