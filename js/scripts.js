jQuery(document).ready(function() {
	const successClass = 'alert-success';
	const errorClass = 'alert-danger';
	const valideteFields = [
		'name', 'email', 'position', 'expertise', 'message'
	];
	// regular expression from http://emailregex.com/
	const emailRegExp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	const successMsg = 'Form was sent successfully!';
	const emptyMsg = 'Please, fill next fields: ';
	const emailMsg = 'Email, you have typed, is incorrect';

	jQuery('.contact-form').on('submit', function(e) {
		e.stopPropagation();
		e.preventDefault();

		hideAlert();

		let form = jQuery(this),
			emptyValues = [],
			isEmail = true;

		form.find('[type="text"], [type="email"], textarea').each(function() {
			let item = jQuery(this),
				name = item.attr('name'),
				value = item.val();
			if(valideteFields.indexOf(name) != -1) {
				if(!value) {
					emptyValues.push(item.data('name'));
				} else if(name == 'email' && !emailRegExp.test(value)) {
					isEmail = false;
				}
			}
		});
		if(emptyValues.length) {
			showAlert(getMessage('empty', emptyValues), errorClass);
		} else if(!isEmail) {
			showAlert(getMessage('email'), errorClass);
		} else {
			jQuery.post({
				type: 'POST',
				url: 'https://httpbin.org/post',
				dataType: 'json',
				data: {
					form_data: form.serialize()
				},
				success: function(res) {
					showAlert(successMsg, successClass);
				},
				error: function(res) {
					let message = getMessage('message', 'Error '+ res.status+ ': '+ res.statusText);
					showAlert(message, errorClass);
				}
			});
		}
	});
	/*
	*	Show request alert
	*	message: (string) message text
	*	messageClass: (string) class for message tag to set its appearance
	*/
	function showAlert(message, messageClass) {
		let alert = jQuery('.contact-form .alert');
		if(alert.length) {
			alert.removeClass([successClass, errorClass]);
			alert.html(message);
			alert.addClass(messageClass);
			alert.show(300);
		}
	}
	/*
	*	Hide request alert
	*/
	function hideAlert() {
		let alert = jQuery('.contact-form .alert');
		if(alert.length) {
			alert.hide(300);
		}
	}
	/*
	 *	Prepare message text depending on message type
	 *	type: (string) type of message
	 *	valuesArr: (mixed) array of field names or single field name
	 *	getTitle: (bool) is correct field name should be get or not, optional param
	 *	return (string)	message string
	 */
	function getMessage(type, valuesArr, getTitle) {
		let message = '';
		switch(type) {
			case 'empty':
				message += emptyMsg+ valuesArr.join(', ');
				break;
			case 'email':
				message += emailMsg;
				break;
			case 'message':
				message += valuesArr;
				break;
			default:
				break;
		}
		return message;
	}
});