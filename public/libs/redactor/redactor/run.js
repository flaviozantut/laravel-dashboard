$(document).ready(
		function()
		{
			$('.redactor').redactor({
				lang: 'pt_br',
				imageUpload: asset('libs/redactor/demo/scripts/image_upload.php?url=') + asset(''),
				fileUpload: asset('libs/redactor/demo/scripts/file_upload.php?url=') + asset(''),
				imageGetJson: asset('libs/redactor/demo/scripts/json.php?url=') + asset('')
			});
		}
	);