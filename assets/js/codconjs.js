

function onEnviar(){

	var pass = document.getElementById("pass").value;
	var pwd = str2rstr_utf16le(pass);
	
	
	var hash = CryptoJS.HmacSHA1(pwd, pwd);
	
	

	var encodedPassword = CryptoJS.enc.Base64.stringify(hash);

	console.log( encodedPassword );
}

function str2rstr_utf16le(input) {
  var output = [],
      i = 0,
      l = input.length;

  for (; l > i; ++i) {
    output[i] = String.fromCharCode(
      input.charCodeAt(i)        & 0xFF,
      (input.charCodeAt(i) >>> 8) & 0xFF
    );
  }

  return output.join('');
}

