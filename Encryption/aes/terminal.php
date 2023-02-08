<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../shared_css/style(ter).css">
<center>
    <div id="terminal" style="text-align:justify;">
        <div id="input">
            <form>
            <div id="input_field">
            <span style="color:blue;">from </span>Crypto.Cipher <span style="color:blue;">import</span> AES
            <br><br>
            <span style="color:Green;">Encrypts a plaintext using AES encryption.</span><br>
            <span style="color:blue;">def</span> encrypt(plaintext, key):<br>
            &nbsp;&nbsp;&nbsp;<span style="color:Green;">"""<br>
            &nbsp;&nbsp;&nbsp;Args:<br>
            &nbsp;&nbsp;&nbsp;- plaintext (bytes): The text to be encrypted.<br>
            &nbsp;&nbsp;&nbsp;- key (bytes): The encryption key. Must be 16, 24, or 32 bytes long.<br>
            &nbsp;&nbsp;&nbsp;Returns:<br>
            &nbsp;&nbsp;&nbsp;- bytes: The encrypted text.<br>
            &nbsp;&nbsp;&nbsp;"""<br></span>
            &nbsp;&nbsp;&nbsp;cipher = AES.new(key, AES.MODE_EAX)<br>
            &nbsp;&nbsp;&nbsp;ciphertext, tag = cipher.encrypt_and_digest(plaintext)<br>
            &nbsp;&nbsp;&nbsp;<span style="color:blue;">return</span> ciphertext<br>
            <br>
            <span style="color:Green;"># Encrypt a plaintext</span><br>
            <span style="color:blue;">plaintext</span> = b<span style="color:Green;">"HELLO"</span><br>
            #Note that the encryption key must be 16, 24, or 32 bytes long</span><br>
            key = b<span style="color:Green;">"mysecretkey1234"</span><br>
            ciphertext = encrypt(plaintext, key)<br>
            <span style="color:blue;">print</span>(<span style="color:Green;">"Encrypted: "</span>, ciphertext)<br>
            <br><br>
            <span style="color:Green;">Decrypts an AES-encrypted ciphertext.</span><br>
            <span style="color:blue;">def</span> decrypt(ciphertext, key):<br>
            &nbsp;&nbsp;&nbsp; <span style="color:Green;">"""<br>
            &nbsp;&nbsp;&nbsp;Args:<br>
            &nbsp;&nbsp;&nbsp;- ciphertext (bytes): The encrypted text.<br>
            &nbsp;&nbsp;&nbsp;- key (bytes): The encryption key. Must be 16, 24, or 32 bytes long.<br>
            &nbsp;&nbsp;&nbsp;Returns:<br>
            &nbsp;&nbsp;&nbsp;- bytes: The decrypted text.<br>
            &nbsp;&nbsp;&nbsp;"""</span><br>
            &nbsp;&nbsp;&nbsp;cipher = AES.new(key, AES.MODE_EAX)<br>
            &nbsp;&nbsp;&nbsp;plaintext = cipher.decrypt(ciphertext)<br>
            &nbsp;&nbsp;&nbsp;<span style="color:blue;">return</span> plaintext<br>
            <br><br>
            <span style="color:Green;"># Decrypt a ciphertext</span><br>
            plaintext = decrypt(ciphertext, key)<br>
            <span style="color:blue;">print</span>(<span style="color:Green;">"Decrypted: "</span>, plaintext)<br>
            <br>
            
        </div>
            </form>
        </div>
        <button type="button" id="button_t" onclick="runCommand()">Run</button>
        <div id="output"></div>
    </div>
    <center>

<script>
    // var text = 'from Crypto.Cipher import AES<br><br>def encrypt(plaintext, key):<br>&nsbp;&nsbp;&nsbp;"""<br>&nsbp;&nsbp;&nsbp;Encrypts a plaintext using AES encryption.<br><br><br>&nsbp;&nsbp;&nsbp;Args:<br>&nsbp;&nsbp;&nsbp;- plaintext (bytes): The text to be encrypted.<br>&nsbp;&nsbp;&nsbp;- key (bytes): The encryption key. Must be 16, 24, or 32 bytes long.<br><br><br>&nsbp;&nsbp;&nsbp;Returns:<br>&nsbp;&nsbp;&nsbp;- bytes: The encrypted text.<br>&nsbp;&nsbp;&nsbp;"""<br>&nsbp;&nsbp;&nsbp;cipher = AES.new(key, AES.MODE_EAX)<br>&nsbp;&nsbp;&nsbp;ciphertext, tag = cipher.encrypt_and_digest(plaintext)<br>&nsbp;&nsbp;&nsbp;return ciphertext<br><br><br>def decrypt(ciphertext, key):<br>&nsbp;&nsbp;&nsbp; """<br>&nsbp;&nsbp;&nsbp;Decrypts an AES-encrypted ciphertext.<br><br><br>&nsbp;&nsbp;&nsbp;Args:<br>&nsbp;&nsbp;&nsbp;- ciphertext (bytes): The encrypted text.<br>&nsbp;&nsbp;&nsbp;- key (bytes): The encryption key. Must be 16, 24, or 32 bytes long.<br><br>&nsbp;&nsbp;&nsbp;Returns:<br>&nsbp;&nsbp;&nsbp;- bytes: The decrypted text.<br>&nsbp;&nsbp;&nsbp;"""<br>&nsbp;&nsbp;&nsbp;cipher = AES.new(key, AES.MODE_EAX)<br>&nsbp;&nsbp;&nsbp;plaintext = cipher.decrypt(ciphertext)<br>&nsbp;&nsbp;&nsbp;return plaintext<br><br><br># Encrypt a plaintext<br>plaintext = b"HELLO"<br>#Note that the encryption key must be 16, 24, or 32 bytes long<br>key = b"mysecretkey1234"<br>ciphertext = encrypt(plaintext, key)<br>print("Encrypted: ", ciphertext)<br><br><br># Decrypt a ciphertext<br>plaintext = decrypt(ciphertext, key)<br>print("Decrypted: ", plaintext)<br>';
    // document.getElementById("input_field").innerHTML = text; 

    function runCommand() {
        var input = document.getElementById("input_field").value;
        // Your logic to process the input and generate the output
        var output = "Encrypted: SXN6QVBpMXVCSXpCUkNISDVUelovQT09<br>Decrypted: HELLO";
        document.getElementById("output").innerHTML = output;
    }
</script>

</html>