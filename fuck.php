<?php

$priKey = null;
$rsaConfig = [
	"digest_alg" 		=> "sha256",
	"private_key_bits"	=> 521,
	"private_key_type"	=> OPENSSL_KEYTYPE_RSA
];

echo "<pre>";
/**
$rsa = openssl_pkey_new($rsaConfig);
var_dump($rsa);
openssl_pkey_export($rsa, $priKey);
var_dump($priKey);
var_dump(strlen($priKey));

die;
**/

$key="MIIEpQIBAAKCAQEA1vVtBy1kbnipVI3EN2TKpJkhN3TK7Ld0Ljhp8hyQ6NcJOXcxxrymp1i7KUUatXoIShYXlB+VQnd5ssZUJf0pjxIMfUopfWHxp4l7UOlOaDccOE7jxohSN69XlR7/Eghu0uJz3snL5/l3ZfzrkucvSn1Mo1kU/n+RbOnPgzgK3JPZIRWPdhChENpWrRaZTczS+aXgwuCnvBBSjgjIKIr4qAenRNa5Ud4PPacaPjLrHKPv/rNSMiwyOkC/WbQfO5CduPDgr2HWFP1Cy27tudRSqKFmnZD/F/InNsgYzWM1a7LwueME1zUGu3cWcnGqJR6wHo7iXNfx+2HpeFn+dGhn5wIDAQABAoIBAQDUE1s3447cdusI4r0dsbFD51ggMHgsR2q2Vy4fkhNdxRnyuig/3MvG+wHcW7NYLEeVYGpu1yIZa2qD+Kv4tuaTosjzq4F3lHQoSLmDQEr9ArIy05Jhwwjqq3GLTAN3NR6xrH2I5iroePVVh8ybKL89jJVZ63+M/yro+1yiJ15/8wcc3Pf7UT/38rqh0IxbBGZRniJX9jl5kAN/bDzUzWsHSU7USEODOLkhH6gyVqdWEBXlKUboBFWyfNKK87scYbu/ZRzjLR839sj1B0Vqn8pbjj65kIqm1C6vQqe8oLq4ePst/bnpfCQbI7yxIvhZuaQyuNVbwA2r5ekAi28isBfRAoGBAO/RG9RrEQzipCHPJQOJZwl7NecqiECzJhr0SxPqOpADGfla9juRIC29zFaMzowQlFJODT42ZVDE8s7FETBW9AbCistI1eNRcM7OmZpwZ4m6Hr6atolmpH+J1HqohyRD6NnW/5mSvQfmUlmABMKW3fyVz1uW5mXKgN7U5gaJt4ebAoGBAOV24xqYbWeP/NmSSOsfk7/LJqARMlD5d7/z81wCqZKeLjMVA1d8Aeh14cZqvTQJ1pIVmSGC4P9Q4oMbZtzOd8ynalWyx2Q9pzrnPQiHITS85+0N1t8rsJFnHscsSxiaIIey061f/FEP4ltzKslNzasVZuS1h9g9wZ/9OWtuwJOlAoGBAMcW2zq6c9o1oTrsI/dOr3qAjhxOA/VqhJzl6BotXtbFrF+Fc1u6PHOc2LGVjbdb4DZ/06CtOekWx9h+Y6m01jtycBUZb2+a4cLeY0iCPoJpQDLOb/Gbg77Zpsr5c8/YjMukIGfXGRUg0Ya5r7n302xo1k9b9APXXKshJaGR3Qo3AoGACTclF8RXYHlf5j0BwK+b92/pNTR7mNTsAkGB3Ige10yS/moxoCnSycsyLg3LW3OpsmQ7qiTfdGGDN1C6aNPB6+4tTxPG/jebp7nxsY37v2p2xgZwQrY2eSBzE/yrZ2mJNOnxplzcfUTuCk4twbfmMqDBaR4BPqX8SLiavb3M7iECgYEAk1EE82Xiclzyfsw+hVpmykso0RFxnP6c9mCBGhMbIeff9n4ZEpm5eAaxfvfZdBeLtH1NDA9R1CD6FoiwtWmgLqOtRAFy5+LaI3dUyUVEdzGiC7VOU8mIAJoTxLT9LbDk0cdbU5spr2Jh0ImRb3j4k+8HPfBEO7zFLEsbRPKGoIA=";
$res = "-----BEGIN RSA PRIVATE KEY-----\n" .
				wordwrap($key, 64, "\n", true) .
				"\n-----END RSA PRIVATE KEY-----";

openssl_sign("fuck", $sign, $res,OPENSSL_ALGO_SHA256);
var_dump(base64_encode($sign));
