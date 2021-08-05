<?php

class ViewUser extends User {

    public function show_all_users()
    {
        $all_selected_data = $this->get_all_users();
        foreach($all_selected_data as $data)
        {
            echo $data['uid']."<br>";
            echo $data['pwd']."<br>";
        }
    }
}

