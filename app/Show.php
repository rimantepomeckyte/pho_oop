<?php


namespace Users;


class Show
{
    static public function ShowData($data){
        foreach ($data as $item){
            echo $item;
    }
}}