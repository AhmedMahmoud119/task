<?php

namespace App\Imports;

use App\Info;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class InfoImport implements ToModel ,WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        set_time_limit(0);
        if($row[0] && $row[1] && $row[2] && $row[3]) {
            return new Info([
                'f_name' => $row[0],
                's_name' => $row[1],
                'family_name' => $row[2],
                'uid' => $row[3],
            ]);
        }
    }

    public function chunkSize(): int
    {
        return 80000;
    }
}
