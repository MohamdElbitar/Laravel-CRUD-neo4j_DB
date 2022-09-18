<?php
namespace App\Imports;
use App\Models\Student;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;

use Maatwebsite\Excel\Concerns\WithHeadingRow;


class StudentsImport implements ToCollection, WithHeadingRow
{


  /**

    * @param array $row

    *

    * @return \Illuminate\Database\Eloquent\Model|null

    */

    public function collection(Collection $rows)

    {
        foreach ($rows as $row) {

            Student::create([

                'name' => $row['name'],
                'address'    => $row['address'],
                'mobile'    => $row['mobile'],

            ]);

        }

    }

}

 // /**
    // * @param collection $row
    // *
    // * @return \Illuminate\Database\Eloquent\Model|null
    // *@return Collection $collection
    // */
    // public function collection(Collection $rows)
    // {
    //     return new Student([
    //         'name'     => $row['name'],
    //         'address'    => $row['address'],
    //         'mobile'    => $row['mobile'],
    //     ]);
    // }
