<?php

class MyJson
{
    public function toJson($data): string
    {
        $count = substr_count($data, ';');
        $json = '{';
        for ($i = 0; $i < $count; $i++) {
            $datastr = mb_substr($data, 0, strpos($data, ';'));
            $data = mb_substr($data, strpos($data, ';') + 1, strlen($data));
            $varName = mb_substr($datastr, 0, strpos($datastr, '|'));
            $varSize = mb_substr($datastr, (strpos($datastr, '|') + 3), (strpos($datastr, ':') - 5));
            $varData = mb_substr($datastr, (strpos($datastr, ':') + 3));
            if ($i == $count - 1) {
                $json = $json . '"' . $varName . '":{"data":' . $varData . ',"size":' . $varSize . '}';
            } else {
                $json = $json . '"' . $varName . '":{"data":' . $varData . ',"size":' . $varSize . '},';
            }
        }
        return $json . '}';
    }
}