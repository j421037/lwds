<?php
namespace wx\Util;

class Curl
{
    protected $curl;
    protected $url;
    protected $method = "GET";

    public function __construct($url)
    {
        $this->curl = curl_init();
        $this->url = $url;

        $this->initialize();
    }

    protected function initialize()
    {
        $this->setOpt(CURLOPT_URL, $this->url);

        if (strtoupper($this->method) == "POST") {
            $this->setOpt(CURLOPT_POST, true);
        }

        if (preg_match("/^[https]/",$this->url)) {
            $this->setOpt(CURLOPT_SSL_VERIFYPEER, false);
            $this->setOpt(CURLOPT_SSL_VERIFYHOST, false);
        }

        $this->setOpt(CURLOPT_RETURNTRANSFER, 1);
    }

    public function setOpt($option, $value)
    {
        curl_setopt($this->curl,$option,$value);
    }

    public function execute()
    {
        $result = curl_exec($this->curl);
        $this->close();

        return json_decode($result, true);
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
        $this->initialize();
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function setMethod($method)
    {
        $this->method = $method;
        $this->initialize();
    }

    protected function close()
    {
        if ($this->curl)
            curl_close($this->curl);
    }
}