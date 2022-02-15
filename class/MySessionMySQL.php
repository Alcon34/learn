<?php

class MySessionMySQL implements SessionHandlerInterface
{
    private $link;

    /**
     * @param $savePath
     * @param $sessionName
     * @return bool
     */
    public function open($savePath, $sessionName): bool
    {

        $link = mysqli_connect("localhost", "epoxid_web", "hS96xDA_wi2Gx8ST_", "learn");
        if ($link) {
            $this->link = $link;
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return bool
     */
    public function close(): bool
    {
        mysqli_close($this->link);
        return true;
    }

    /**
     * @param $id
     * @return false|mixed|string
     */
    public function read($id)
    {
        $result = mysqli_query($this->link, "SELECT Session_Data FROM Session WHERE Session_Id = '" . $id . "' AND Session_Expires > '" . date('Y-m-d H:i:s') . "'");
        if ($row = mysqli_fetch_assoc($result)) {
            return $row['Session_Data'];
        } else {
            return "";
        }
    }

    /**
     * @param $id
     * @param $data
     * @return bool
     */
    public function write($id, $data): bool
    {
        $DateTime = date('Y-m-d H:i:s');
        $NewDateTime = date('Y-m-d H:i:s', strtotime($DateTime . ' + 1 hour'));
        $result = mysqli_query($this->link, "REPLACE INTO Session SET Session_Id = '" . $id . "', Session_Expires = '" . $NewDateTime . "', Session_Data = '" . $data . "'");
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $id
     * @return bool
     */
    public function destroy($id): bool
    {
        $result = mysqli_query($this->link, "DELETE FROM Session WHERE Session_Id ='" . $id . "'");
        if ($result) {
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
        $result = mysqli_query($this->link, "DELETE FROM Session WHERE ((UNIX_TIMESTAMP(Session_Expires) + " . $max_lifetime . ") < " . $max_lifetime . ")");
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}