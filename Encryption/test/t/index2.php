<?php
$content1 = "
-----BEGIN PRIVATE KEY-----
MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQC8VlqHXctpO0og
I0Wr/L26X6rXU76202r221J7j/cXuYdjNONXOPipfsBt7kQpxH0H6wlpgO+UeoPZ
RpIfmm5Uy6hPTe6fR8ARYtrqe2R6EtRQ+Su9dkCNQPqlhLEc4frMV0bUvspJ9q+F
pwsRd0dIsRUlQlb7XC9Z+n4bc8SvRVGDiWS5pLx2iExIf+a19Uvm7y8kOAPBOzir
jRsUZJl/gSkU1U7KUpyryAObTD48FMMC7yDfPZGWY4daL9/B1cfNU8TQoJqW0BBM
rwQXICWQ8utj6PHQTr6jYjwePO2qX5ZNesVYAj7yWR8LS72yF65q9VGLUR211CGG
I7/PPOZhAgMBAAECggEAV+QUq0diPeGlXgoX4YM5J1it6X7zaW6QZFNF0tQEg9XZ
ELsFvRahNLgqJSMkPDmt/5v38HxzUd862JLObmErS/cevKOp0DszrulrMDIVWcKf
wooFl40v4ruIPOYHoWr0F5hDPdUrogi1MLIbwDLh2VKKg7DJ1tPWZS842qbUCtaJ
B0xmLR8paaMrpzKtBmFCm1JDg3grAGrq+OO6YtlEJbJAWmufvpFjMqq5Mp4vRkY9
nre8glAwK+TXjikA9Tc/ajltnpl9YRAZH6kCQj311a+k2fow2Cib5f6lHNsQuvqw
A80c1IclrXzXA+uOS63EpTlhEVLbjEkG2jTye4XYAQKBgQDspwEzQ7t2+NZ+7jMZ
W/Z0u1FI+gGAronxRgvhfdKnRchswL6lTe1l89slAYGBeZNfVTpqHbQ73Pp4InrU
U5OaDqmH2Nm29owkgybEpysSe/ofFsqGpUXcBIs6e0RitYGclzZJ4UPQ62p8JDP1
Xoi7YMA6laVoxwvQGgJJ4zcXEQKBgQDLvCS1B8d3o8IYzONMxgV2K2AI8A7h9HFM
/VIwfjtfDJoVN2Uf7OJJO7ng1TGCiBFCsPE4ttmaU8kOQUc7hm4zoA5ISM9LEAxB
os9HlGIoJRBqL8wHxnGmB9EWbs4bv0Sa1oA1RdPW62OmcgUUzf/6+8KHs/JyLX0X
myyJicj6UQKBgQCflzA0BiVR4hWkm7ZSD7ZwmjIC6LZCtXHJB9fTRSreKy0ySflH
OPozmvPaTN2tFvPPgoZWMZnuFOPESFxU+9e6ONETD6YiwLlZlih6zdE6MelHNfN2
QdaOvXG3CpHfj0/M7hxqTkORjHDPLwrrGclTs7duyqQ1uKW6vQ92DIiGQQKBgQCS
OIov01F5sHJR0lsgcs7grOjUAVbtHL9kfjtKyo5Z/XVo3MUbUKxn2xHhJ6HNCVM6
BjxadAFhHdki/f7d3fGh47Hcd0Uvnmjtgqg5u2lnXpKVY5CP1AElJF8QNp5+k5vt
dR23HlKX4YE3qIW1FNQvkhlfw+qxv6wUES6518YCwQKBgBWCONvt+7TqeWH3vD0I
TdRpRTUhyYSsr3ABbfMQRvHtsB5fa/z4YVBxF99MSGROFdiuLf2vw59nx0LQChpP
RS0RuoE4lNeuKF7R+TXVRjQ12X18QuTeGVX0xPadZAHLMM13OoJPkTlczoyvQqUF
jbbt2MswOcStdUQF3Cw0vyQM
-----END PRIVATE KEY-----

";
function isRSAEncryption($file)
{
	$content = trim($file);
	$content = stripslashes($content);
	$content = htmlspecialchars($content);
	echo $content;
	if (preg_match('/-----BEGIN (PRIVATE KEY|RSA PRIVATE KEY)-----/', $content)) {
		if (preg_match('/-----END (PRIVATE KEY|RSA PRIVATE KEY)-----/', $content)) {
			$key_rsa = openssl_pkey_get_private($file);
			//echo "test $key_rsa test";
			if ($key_rsa) {
				return true;
			} else {
				return false;
			}
		}
	} else {
		return false;
	}
    if (preg_match('/-----BEGIN (PUBLIC KEY|RSA PUBLIC KEY)-----/', $content)) {
		if (preg_match('/-----END (PUBLIC KEY|RSA PUBLIC KEY)-----/', $content)) {
			$key_rsa = openssl_pkey_get_public($content);
			if ($key_rsa) {
				return true;
			} else {
				return false;
			}
		}
	} else {
		return false;
	}
}
if (isRSAEncryption($content1)) {
    echo "valid";
} else {
    echo "invalid";
}

// $private_key_resource = openssl_pkey_get_private($content1);
// if ($private_key_resource === false) {
//     echo "Invalid private key";
// } else {
//     echo "Valid private key";
//     openssl_pkey_free($private_key_resource);
// }
