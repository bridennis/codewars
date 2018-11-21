<?php

class UniqueInOrder
{
    public function uniqueInOrder($iterable){
        $ret = [];
        if (is_string($iterable)) {
            $iterable = str_split($iterable);
        }
        for ($i = 0, $max = count($iterable); $i < $max; $i++) {
            if ($iterable[$i] !== current($ret)) {
                $ret[] = $iterable{$i};
                end($ret);
            }
        }
        return $ret;
    }
}