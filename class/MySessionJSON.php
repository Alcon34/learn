<?php

class MySessionJSON implements SessionHandlerInterface
{
    /**
     * @param $path
     * @param $name
     * @return bool
     */
    public function open($path, $name): bool
    {
        return true;
    }

    /**
     * @param $id
     * @param $data
     * @return bool
     */
    public function write($id, $data): bool
    {
        !(file_put_contents("./Session/sess_$id.json", json_encode($data, JSON_FORCE_OBJECT)) === false);
        return true;
    }

    /**
     * @param $id
     * @return false|mixed|string
     */
    public function read($id)
    {
        if (file_exists("./Session/sess_$id.json")) {
            return json_decode(file_get_contents("./Session/sess_$id.json"), JSON_FORCE_OBJECT);
        } else {
            $fp = fopen("./Session/sess_$id.json", "a+");
            fclose($fp);
            return '';
        }
    }

    /**
     * @return bool
     */
    public function close(): bool
    {
        return true;
    }

    /**
     * @param $id
     * @return bool
     */
    public function destroy($id): bool
    {
        if (file_exists("./Session/sess_$id.json")) {
            unlink("./Session/sess_$id.json");
            return true;
        } else {
            return false;
        }

    }

    /**
     * @param $max_lifetime
     * @return bool
     */
    public function gc($max_lifetime): bool
    {
        foreach (glob("./Session/sess_*") as $file) {
            if (filemtime($file) + $max_lifetime < time() && file_exists($file)) {
                unlink($file);
            }
        }
        return true;
    }
}