<?php

namespace App\Models;

class BPJS 
{
    // Data dummy seperti dari database
    protected static function getDummyData()
    {
        return [
            ['id' => 1, 'title' => 'pendaftaran BPJS'],
            ['id' => 2, 'title' => 'ambil antrian'],
        ];
    }

    public static function all()
    {
        return self::getDummyData();
    }

    public static function find($id)
    {
        $data = self::getDummyData();
        foreach ($data as $item) {
            if ($item['id'] == $id) {
                return $item;
            }
        }
        return null;
    }
}
