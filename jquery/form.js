function dealOpenerCancel(){
	window.opener.location.href = window.opener.location.href;window.close();
}

function dealCancel( $nodeUrl ){
	window.location.href = $nodeUrl;
}

function dealSubmit( form ){
	var taskName = $.trim( $('#taskName').val() );

	if( taskName.length == 0 ){
		document.getElementById('nameWrong').innerHTML = "名称不能为空";
		form.name.focus();
		return(false);
	}
}