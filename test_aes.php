<script src="core.js"></script>
<script src="md5.js"></script>
<script src="evpkdf.js"></script>
<script src="enc-base64.js"></script>
<script src="cipher-core.js"></script>
<script src="aes.js"></script>
<script src="hmac.js"></script>
<script src="sha1.js"></script>
<script src="sha256.js"></script>                                                                                                                                                                                              

<script type="text/javascript">

 var aesEncrypt = CryptoJS.AES.encrypt("message", "Windowsundefinedamd64");
console.log("aesEncrypt = %s", aesEncrypt.iv.toString(CryptoJS.enc.Hex));

var aesDecrypt = CryptoJS.AES.decrypt(aesEncrypt, "Windowsundefinedamd64");
console.log("aesDecrypt = %s", aesDecrypt.toString(CryptoJS.enc.Utf8));

 var rawStr = "hello world!";
        var wordArray = CryptoJS.enc.Utf8.parse(rawStr);
        var base64 = CryptoJS.enc.Base64.stringify(wordArray);
         console.log('base64Encrypt = ', base64);
 // base64 decrypt
        var parsedWordArray = CryptoJS.enc.Base64.parse("YjhjNjg3ZDU2YzBlYzBlMDYzNTg1YTgwYjAzNGZkYmE=");
        var parsedStr = parsedWordArray.toString(CryptoJS.enc.Utf8);
        console.log('base64Decrypt = ',parsedStr);
</script>