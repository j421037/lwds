<?php


/**
 * author wangxin
 *
 */
define("DOCUMENT_ROOT",getcwd());
require_once DOCUMENT_ROOT."/source/function/function_cache.php";
require_once DOCUMENT_ROOT."/wx/Database/DataBaseManager.php";
class FuckDiscuz
{
    private static $db;

    // �Զ�����ģ�建��
    public static function  AutoClearTemplateCache($templatedir = null)
    {
        if ($templatedir == null) {
            $templatedir = DOCUMENT_ROOT."/template/";
        }


        $fileList = self::LoadDir($templatedir);
        $hash = [];



        array_walk($fileList, function($item) use (&$hash) {
            //echo sprintf("�ļ�����%s,����޸�ʱ��:%s, ��ʶ:%s<br>",$item, filemtime($item), md5($item));
            array_push($hash,md5($item).filemtime($item));
        });

        $key = md5(implode("",$hash));
        $tmp = DOCUMENT_ROOT."/wx/fuck.txt";

        if (file_exists($tmp)) {
            $lastKey = file_get_contents($tmp);

            if ($lastKey != $key) {
                file_put_contents($tmp, $key);
                //ˢ�»���


                $cache_dir = getcwd()."/data/template/";
                $fp = opendir($cache_dir);

                while($file = readdir($fp)) {
                    if ($file != "." || $file != "..") {
                        unlink($cache_dir.$file);
                    }
                }
                closedir($cache_dir);

                updatecache();
                header("Location: http://".$_SERVER["HTTP_HOST"]);
            }
        }
        else {
            file_put_contents($tmp, $key);
        }


    }

    private static function LoadDir($dir, $deep = 0)
    {
        $handle = opendir($dir);
        $files = [];

        while(($filename = readdir($handle)) !== false )
        {
            if ($filename != "." && $filename != "..") {

                $path = $dir."/".$filename;

                if (is_dir($path)) {
                    $temp = self::LoadDir($path, $deep + 1);

                    foreach ($temp as $v) {
                        array_push($files, $v);
                    }
                }

                else {

                   if (preg_match("/(\.php)|(\.html)|(\.tpl)$/",$path))
                        $files[] = $path;
                }
            }
        }

        closedir($handle);

        return $files;
    }

    public static function getDBInstance()
    {
        if (!self::$db instanceof \wx\Database\DataBaseManager) {
            self::$db = new \wx\Database\DataBaseManager();
        }
        return self::$db;
    }
}