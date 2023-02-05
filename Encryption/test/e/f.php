<?php
$userInput = "
-----BEGIN PRIVATE KEY-----
MIIEvwIBADANBgkqhkiG9w0BAQEFAASCBKkwggSlAgEAAoIBAQDnXOH80VC8jxP+
GT8wpYlchMlgkhANLCbakh+QytUb2hYJS7OLygEIoY7c/E/9cmsDo9cbfzN92Yj8
raphepg7ZILko5uwL6OhcD/99rwSqgzUGiOPtexCdjC5kSDU+Kjxh+/VO3DkyRIS
iOzgjYvTTR7gPy00ZpQvq0uMf881winlKNB/SpGCsYPTPdeZrUS4gEM8g1JECdgL
lh8QXakUo5c9Pastre9R2rjFNwAZY2IdQvOUdpBJ4dDXGbiSjMkADc0wOvCiY199
1atSr4wxxk5pGzT3Fd9Om4icmefF0aIr+ku4XDh5t8G2ee0J9TyYwVxQNkmrHvfR
nLiVRBH5AgMBAAECggEBAKAqG8QCP2sZfZSlc6pAnpPu1N3Gn9gOnaMoDzQURm1u
j1zGDDiUkhyggx8WiGWDJPQzIwHFECdqRbvumYm77dEH5tlTLb9Na3CiHZq5iT8+
e30Fz2J4ZWMpINgF0P2+Wm5CVdR+vsuTKrCsG5fkRUz1EY/aDHg/HwzU/4r3G8Ix
JAgqS8NZ7REJlrF9/HEB76sVVGQ1uVibMXUTSwtvtdXAl/x/+UdBpJRPUx7v4b7Z
fvHuF6D6nrvIt4PtkrgL0Ijc4j5o3tRvIYMY8bAi1ebAkty13F3EeqxsqsdtIewm
EhBXA7IlhEwOScjQcxNm8O5oHb+FAJP0hycGaxZmRtECgYEA9cXFtikWF4DALBsJ
lrTP3KVaufVr92yN7HC1itkQYwYSF2hRCxB7sHgcqyVJg81087d/XSFhhhnGZ8KI
lVyd4TVUFiWLFX4nnuJbrSwOWV6bfgrG6+RMYwjiRdj2589EQAtidyN34efEm0A7
P/3VLmZkAUDP+O6pk1A4KKDffq0CgYEA8P2aWDLiShuLlc4JhyfrbLUPxR1Ysupf
XNhfNzF9yB9QL//ahP/9kpTnKbTg8w19IOwExhKl/qKcNn2ZISXK1aQzb96muwWj
rDx2qjMV6+qZLhuSrlxJ50BWtKYPANYLkWj/rU1r3C8iCSGH5p6uTdObnwK43Fcn
8P92cABkhf0CgYAwqWfsGVZ2cNeb4/6SCFrfpR3BlAY8hxHSrr5DL5c/BASw/caO
GkVjO2TxvgBASH3Pg5WEKwfUNWZDRREmAaCA5r4vZF+VcdUGcGsWbpKov0KqQhgA
vMMjGK80hTDd1Pv+ckKctDkYUXtsAdu5X9jFxyAl319OOnL45/k2kiOuQQKBgQC9
cL4p4yYb13ds9aBrzKe2tsaEz0LwsmjwlW6T9qXH8UWZ1eizcICm/8KP+I50wf/B
J4fBJNu0RaPC+gysEAdY1lFQ+ZfboN0/AfDOboYnBC4SHr65rfaygNMoAvn8UEab
sgx68Ud+uNZqkx8/3TFsIJJO91bWbvUI7+jstoJPCQKBgQDT7TIGwDxLF/u79Sll
5a0f/wXJ/TSYDE08wH+aBP8z3DCi+/TegPnJIVS0VEsTusrkAS41u7DYPIifdkzp
jJFN0J4oN+qM+J8QTry+pA5QGeXwIUeH/SKC4UMDdsHkO5zSOBq/Ai5k5FN5P45f
CwXz6CUh16CVfbTyZ+3XpHt6zg==
-----END PRIVATE KEY-----

";

$userInput = trim($userInput);
$userInput = trim($userInput);
$privateKey = stripslashes($userInput);
$privateKey = htmlspecialchars($userInput);


$privateKeyResource = openssl_pkey_get_private($privateKey);

// check if the key resource is valid
if (!$privateKeyResource) {
    echo "The input is not a valid private key";
} else {
    echo "The input is a valid private key";
    openssl_pkey_free($privateKeyResource);
}
?>