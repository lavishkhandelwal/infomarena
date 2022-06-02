function valid(){
	if(document.frm.editor2.value==""){
		alert("Please Enter the Answer");
		document.frm.editor2.focus();
		return false;
	}
}