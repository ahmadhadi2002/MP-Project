<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../shared_css/style(ter).css">
<center>
    <div id="terminal" style="text-align:justify;">
        <div id="input">
            <form>
            <div id="input_field">
            <span style="color:blue;">from</span> Crypto.PublicKey <span style="color:blue;">import</span> RSA<br>
<span style="color:blue;">from</span> Crypto.Cipher <span style="color:blue;">import</span> PKCS1_OAEP<br>
<br>
<span style="color:blue;">def</span> generate_key_pair():<br>
&nbsp;&nbsp;&nbsp;<span style="color:Green;">"""<br>
&nbsp;&nbsp;&nbsp;Generates a new RSA key pair.<br>
    <br>
&nbsp;&nbsp;&nbsp;Returns:<br>
&nbsp;&nbsp;&nbsp;- tuple: A tuple containing the private key and the public key.<br>
&nbsp;&nbsp;&nbsp;"""</span><br>
&nbsp;&nbsp;&nbsp;key = RSA.generate(2048)<br>
&nbsp;&nbsp;&nbsp;private_key = key.export_key()<br>
&nbsp;&nbsp;&nbsp;public_key = key.publickey().export_key()<br>
&nbsp;&nbsp;&nbsp;<span style="color:blue;">return</span> private_key, public_key<br>
<br>
<span style="color:blue;">def</span> encrypt(plaintext, public_key):<br>
&nbsp;&nbsp;&nbsp;<span style="color:green;">"""<br>
&nbsp;&nbsp;&nbsp;Encrypts a plaintext using RSA encryption.<br>
&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;Args:<br>
&nbsp;&nbsp;&nbsp;- plaintext (bytes): The text to be encrypted.<br>
&nbsp;&nbsp;&nbsp;- public_key (bytes): The public key.<br>
    <br>
&nbsp;&nbsp;&nbsp;Returns:<br>
&nbsp;&nbsp;&nbsp;- bytes: The encrypted text.<br>
&nbsp;&nbsp;&nbsp;"""</span><br>
&nbsp;&nbsp;&nbsp;public_key = RSA.import_key(public_key)<br>
&nbsp;&nbsp;&nbsp;cipher = PKCS1_OAEP.new(public_key)<br>
&nbsp;&nbsp;&nbsp;ciphertext = cipher.encrypt(plaintext)<br>
&nbsp;&nbsp;&nbsp;<span style="color:blue;">return</span> ciphertext<br>
<br>
<span style="color:blue;">def</span> decrypt(ciphertext, private_key):<br>
&nbsp;&nbsp;&nbsp;<span style="color:green;">"""<br>
&nbsp;&nbsp;&nbsp;Decrypts an RSA-encrypted ciphertext.<br>
    <br>
&nbsp;&nbsp;&nbsp;Args:<br>
&nbsp;&nbsp;&nbsp;- ciphertext (bytes): The encrypted text.<br>
&nbsp;&nbsp;&nbsp;- private_key (bytes): The private key.<br>
&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;Returns:<br>
&nbsp;&nbsp;&nbsp;- bytes: The decrypted text.<br>
&nbsp;&nbsp;&nbsp;"""</span><br>
&nbsp;&nbsp;&nbsp;private_key = RSA.import_key(private_key)<br>
&nbsp;&nbsp;&nbsp;cipher = PKCS1_OAEP.new(private_key)<br>
&nbsp;&nbsp;&nbsp;plaintext = cipher.decrypt(ciphertext)<br>
&nbsp;&nbsp;&nbsp;<span style="color:blue;">return</span> plaintext<br>
<br>
<span style="color:green;"># Generate a key pair</span><br>
private_key, public_key = generate_key_pair()<br>
<br>
# Encrypt a plaintext<br>
plaintext = b<span style="color:green;">"HELLO"</span><br>
ciphertext = encrypt(plaintext, public_key)<br>
<span style="color:blue;">print</span>(<span style="color:green;">"Encrypted: "</span>, ciphertext)<br>
<br>
# Decrypt a ciphertext<br>
plaintext = decrypt(ciphertext, private_key)<br>
<span style="color:blue;">print</span>(<span style="color:green;">"Decrypted: "</span>, plaintext)<br>

        </div>
            </form>
        </div>
        <button type="button" id="button_t" onclick="runCommand()">Run</button>
        <div id="output"></div>
    </div>
</center>

<script>
    // var text = 'from Crypto.Cipher import AES<br><br>def encrypt(plaintext, key):<br>&nsbp;&nsbp;&nsbp;"""<br>&nsbp;&nsbp;&nsbp;Encrypts a plaintext using AES encryption.<br><br><br>&nsbp;&nsbp;&nsbp;Args:<br>&nsbp;&nsbp;&nsbp;- plaintext (bytes): The text to be encrypted.<br>&nsbp;&nsbp;&nsbp;- key (bytes): The encryption key. Must be 16, 24, or 32 bytes long.<br><br><br>&nsbp;&nsbp;&nsbp;Returns:<br>&nsbp;&nsbp;&nsbp;- bytes: The encrypted text.<br>&nsbp;&nsbp;&nsbp;"""<br>&nsbp;&nsbp;&nsbp;cipher = AES.new(key, AES.MODE_EAX)<br>&nsbp;&nsbp;&nsbp;ciphertext, tag = cipher.encrypt_and_digest(plaintext)<br>&nsbp;&nsbp;&nsbp;return ciphertext<br><br><br>def decrypt(ciphertext, key):<br>&nsbp;&nsbp;&nsbp; """<br>&nsbp;&nsbp;&nsbp;Decrypts an AES-encrypted ciphertext.<br><br><br>&nsbp;&nsbp;&nsbp;Args:<br>&nsbp;&nsbp;&nsbp;- ciphertext (bytes): The encrypted text.<br>&nsbp;&nsbp;&nsbp;- key (bytes): The encryption key. Must be 16, 24, or 32 bytes long.<br><br>&nsbp;&nsbp;&nsbp;Returns:<br>&nsbp;&nsbp;&nsbp;- bytes: The decrypted text.<br>&nsbp;&nsbp;&nsbp;"""<br>&nsbp;&nsbp;&nsbp;cipher = AES.new(key, AES.MODE_EAX)<br>&nsbp;&nsbp;&nsbp;plaintext = cipher.decrypt(ciphertext)<br>&nsbp;&nsbp;&nsbp;return plaintext<br><br><br># Encrypt a plaintext<br>plaintext = b"HELLO"<br>#Note that the encryption key must be 16, 24, or 32 bytes long<br>key = b"mysecretkey1234"<br>ciphertext = encrypt(plaintext, key)<br>print("Encrypted: ", ciphertext)<br><br><br># Decrypt a ciphertext<br>plaintext = decrypt(ciphertext, key)<br>print("Decrypted: ", plaintext)<br>';
    // document.getElementById("input_field").innerHTML = text; 

    function runCommand() {
        var input = document.getElementById("input_field").value;
        // Your logic to process the input and generate the output
        var output = "Encrypted: laXr4WNeME57Iwtyll1cy0PDCi65BRIUZlTCKJpPrWTNFpr95knv+BaKj9jVf0Nd9uVZfhmtR3QyY64G/kP1nxIwNGiFZFNSW/dxf1N37vixBDL06WzPxX6dp/G3DkWvoRsnmno5S2NKHrFzch5O+Jls/cwW69oGpDMnEVWxtdIDBtdKsj0sufjJIw+3h69hmpcyCwkC8AwPkQdoZP6R8PjMx+wbD6EIYYhZ6qF/+EJ+PJWY7AePKM+9GA8a+R5R6Wnr00zr1cx15RpMln/ESZxKJCAabaILAeG7SWvCBY7omISReMoZfyTqiwsnhbi31eNQYRqxu6PhgQpkC1di2w== <br> Decrypted: HELLO" ;
        document.getElementById("output").innerHTML = output;
    }
</script>

</html>