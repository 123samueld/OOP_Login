<?php

class User extends Dbh {

    protected function get_all_users(){
        $sql = "SELECT * FROM user";
        $result = $this->connect()->query($sql);
        $num_of_rows = $result->num_rows;
        if($num_of_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $data[] = $row;
            }
            return $data;
        }
    }
}

