<?php

use wx\Database\DataBaseManager;
use wx\Util\Curl;

class Run
{
    protected $language = ["en","jp","kor"];

    protected $db;

    protected $apiHost = "http://api.fanyi.baidu.com/api/trans/vip/translate";
    protected $appId = "20190628000311126";
    protected $appSecret = "KSHhaPv7R3W46G57zIRi";

    public function __construct()
    {
        $this->db = new DataBaseManager();
    }

    public function boot()
    {

        $result = $this->db->table("pre_common_block_item");

        $tableInfo = $result->createTableInfo();

        $tables = $this->getTableName($tableInfo, $this->language);

        $data = $result->get();

        $list= [];
        foreach ($data as $value) {
            array_push($list, (array)$value);
        }

        $this->CreateTable($tables, $list);

    }

    protected function getTableName($table, $language = [])
    {
        $tables = [];

        foreach ($language as $value)
        {
            $replacement = "pre_common_block_item_".$value;
            $tmp = [];
            $tmp["name"] = $replacement;
            $tmp["drop"] = "DROP TABLE IF EXISTS {$replacement}";
            $tmp["create"] = preg_replace("/pre_common_block_item/", $replacement, $table);
            $tables[$value] = $tmp;
        }

        return $tables;
    }

    /**
     * 创建表格并且填充数据
     */
    protected function CreateTable($tables, array $data)
    {
        echo "<pre>";
        $strarr = [];

        foreach ($data as $value) {

            array_push($strarr,["title" => $value["title"], "summary" => $value["summary"]]);
        }


        $dst = $this->translator("zh","en",$strarr[0]["title"]);
        var_dump($dst);
        die;

        foreach ($tables as $table) {
            $this->db->exec($table["drop"]);
            $this->db->exec($table["create"]);

            $model = $this->db->table($table["name"]);
            var_dump($model->insertBatch($data));

        }

    }

    protected function translator($from,$to,$string)
    {
        $query = $this->buildParams($from,$to,$string);
        $url = sprintf("%s?%s",$this->apiHost,$query);

        $curl = new Curl($url);
        $result = $curl->execute();

        if(isset($result["trans_result"]))
            return $result["trans_result"][0]["dst"];

        return false;
    }

    protected function buildParams($from,$to,$string)
    {
        $params = [];
        $params["appid"] = $this->appId;
        $params["q"] = $string;
        $params["salt"] = time();

        $sign = $this->signBaiduApi($params);

        $params["from"] = $from;
        $params["to"] = $to;
        $params["sign"] = $sign;
        //$params["q"] = urlencode($string);
        return http_build_query($params);
    }

    protected function signBaiduApi($params)
    {
        array_push($params, $this->appSecret);

        return md5(implode("",$params));
    }

    public static function _autoload($classname)
    {
        require_once dirname(__DIR__)."/".$classname.".php";
    }
}

spl_autoload_register(array("Run","_autoload"));