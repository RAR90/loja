function gbid(e){
	return document.getElementById(e);
}
function ajax_engine(){
	try{return new ActiveXObject("Microsoft.XMLHTTP");}
	catch(e){
		try{return new ActiveXObject("Msxml2.XMLHTTP");}
		catch(ex){
			try{return new XMLHttpRequest();}
			catch(exc){
				alert("Esse browser não tem recursos para uso do AJAX");
				return false;
			}
		}
	}
}
function select_cep(x, dir){
	if(x.value.length == 9){
		ajax = new ajax_engine;
		if(ajax){
			ajax.open("POST", dir + "includes/ajax_process.php", true);
			ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			ajax.onreadystatechange = function(){
				if(ajax.readyState == 4)
					if(ajax.responseXML)
						proces_cep(ajax.responseXML);
			}
			var params = "acao=select_cep&cep=" + x.value;
			ajax.send(params);
		}
	}
}
function proces_cep(obj){
	var dataArray = obj.getElementsByTagName("endereco");
	if(dataArray.length > 0){
		for(i=0; i<dataArray.length; i++){
			var item = dataArray[i];
			var resultado = item.getElementsByTagName("resultado")[0].firstChild.nodeValue;
			if(resultado != 1){
				gbid("logradouro").value = '';
				gbid("bairro").value = '';
				gbid("cidade_uf").value = '';
				gbid("logradouro").disabled = false;
				gbid("bairro").disabled = false;
				gbid("cidade_uf").disabled = false;
			}
			else{
				//gbid("logradouro").disabled = true;
				//gbid("bairro").disabled = true;
				//gbid("cidade_uf").disabled = true;
				var logradouro = item.getElementsByTagName("logradouro")[0].firstChild.nodeValue;
				var bairro = item.getElementsByTagName("bairro")[0].firstChild.nodeValue;
				var cidade = item.getElementsByTagName("cidade")[0].firstChild.nodeValue;
				gbid("logradouro").value = logradouro;
				gbid("bairro").value = bairro;
				gbid("cidade_uf").value = cidade;
			}
		}
	}
}
function cart_process(id, acao){
	frm = document.getElementById('frm_carrinho');
	frm.idp.value = id;
	frm.acao.value = acao;
	if(acao == 'rct'){
		frm.qtd.value = frm['qtd'+id].value;
		setTimeout('frm.submit()', 1000);
	}
	else{
		frm.submit();
	}
}
function addCart(x, pro_size, gocart){
	ajax = new ajax_engine;
	if(ajax){
		var pro_qtd = 1;
		if(gbid('pro_qtd')){
			pro_qtd = gbid('pro_qtd').value;
			if(pro_qtd < 0 || pro_qtd == '')
				pro_qtd = 1;
			if(pro_qtd > 1000)
				pro_qtd = 1000;
		}
		if(pro_size > 0){
			pro_size = document.frm_grade.pro_grade.value;
		}
		ajax.open("POST", "includes/ajax_process.php", true);
		ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		ajax.onreadystatechange = function(){
			if(ajax.readyState == 4)
				if(ajax.responseXML)
					procesAddCart(ajax.responseXML, x, gocart);
		}
		var params = "acao=addCart&idp=" + x + "&qtd=" + pro_qtd + "&pro_size=" + pro_size;
		ajax.send(params);
	}
}
function procesAddCart(obj, x, gocart){
	var dataArray = obj.getElementsByTagName("cart");
	if(dataArray.length > 0){
		for(i=0; i<dataArray.length; i++){
			var item = dataArray[i];
			var cart_tot   = item.getElementsByTagName("cart_tot")[0].firstChild.nodeValue;
			var cart_alert = item.getElementsByTagName("cart_alert")[0].firstChild.nodeValue;
			if(cart_alert != 'null'){
				if(cart_alert == 1)
					alert('Estoque indisponível para essa opção!');
				//navto('produto.php?id=' + x);
			}
			gbid('cart_number').innerHTML  = cart_tot;
			gbid('cart_number2').innerHTML = cart_tot;
			gbid('cart_label').innerHTML   = (cart_tot?'Visualize os <strong>produtos</strong>':'Nenhum <strong>produto</strong> ainda');
			gbid('cart_label2').innerHTML  = (cart_tot?'Visualize os <strong>produtos</strong>':'Nenhum <strong>produto</strong> ainda');
		}
	}
	if(gocart && cart_alert == 'null')
		navto('carrinho.php');
}
function vinc_frete(x, cod){
	ajax = new ajax_engine;
	if(ajax){
		ajax.open("POST", "includes/ajax_process.php", true);
		ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		ajax.onreadystatechange = function(){
			if(ajax.readyState == 4)
				if(ajax.responseXML){
					proces_vinc_frete(ajax.responseXML);
				}
		}
		var params = 'acao=vinc_frete&v1=' + gbid("fretevalue" + x).value + '&v2=' + gbid("total").value + '&cod=' + cod;
		ajax.send(params);
	}
}
function proces_vinc_frete(obj){
	var dataArray = obj.getElementsByTagName("vinc");
	if(dataArray.length > 0){
		for(i=0; i<dataArray.length; i++){
			var item  = dataArray[i];
			var value = item.getElementsByTagName("value")[0].firstChild.nodeValue;
		}
	}
	gbid("cart_total_price").innerHTML = 'R$ ' + value;
}
