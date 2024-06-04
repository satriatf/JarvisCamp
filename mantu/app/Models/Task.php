<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected $table = 'task';

    protected $fillable = [
        'name',
        'deadline',
        'status',
        'description',
    ];

    public function status()
    {
        return $this->BelongsTo(Status::class);
    }
    // protected static $tasks = [
    //     [
    //         'id' => 1,
    //         'name' => 'Bahasa Inggris',
    //         'deadline' => '2024-05-29',
    //         'status' => 'Belum Selesai',
    //         'description' => 'Mengerjakan Tugas Public Speaking yang melibatkan presentasi tentang topik pilihan masing-masing siswa. Siswa harus mempersiapkan dan mempresentasikan materi dengan baik.',
    //     ],
    //     [
    //         'id' => 2,
    //         'name' => 'Matematika',
    //         'deadline' => '2024-05-30',
    //         'status' => 'Belum Selesai',
    //         'description' => 'Mengerjakan Tugas Algoritma yang mencakup penyelesaian berbagai soal algoritma kompleks dan penjelasan langkah-langkahnya dengan detail.',
    //     ],
    //     [
    //         'id' => 3,
    //         'name' => 'Fisika',
    //         'deadline' => '2024-05-31',
    //         'status' => 'Belum Selesai',
    //         'description' => 'Mengerjakan soal-soal Fisika yang mencakup berbagai konsep mulai dari mekanika, listrik, hingga magnetisme, dengan fokus pada pemahaman mendalam.',
    //     ],
    //     [
    //         'id' => 4,
    //         'name' => 'Kimia',
    //         'deadline' => '2024-06-01',
    //         'status' => 'Belum Selesai',
    //         'description' => 'Mengerjakan Laporan Praktikum Kimia yang mencakup percobaan tentang reaksi kimia dan analisis data eksperimen secara mendetail.',
    //     ],
    //     [
    //         'id' => 5,
    //         'name' => 'Biologi',
    //         'deadline' => '2024-06-02',
    //         'status' => 'Belum Selesai',
    //         'description' => 'Membuat Herbarium dengan mengumpulkan dan mengklasifikasikan berbagai jenis tumbuhan, disertai dengan penjelasan rinci tentang masing-masing spesies.',
    //     ],
    //     [
    //         'id' => 6,
    //         'name' => 'Sejarah',
    //         'deadline' => '2024-06-03',
    //         'status' => 'Belum Selesai',
    //         'description' => 'Mengerjakan Makalah Perang Dunia II yang membahas penyebab, jalannya perang, dan dampaknya terhadap dunia, serta analisis mendalam tentang peristiwa penting.',
    //     ],
    //     [
    //         'id' => 7,
    //         'name' => 'Geografi',
    //         'deadline' => '2024-06-04',
    //         'status' => 'Belum Selesai',
    //         'description' => 'Membuat Peta Tematik yang mencakup berbagai aspek geografis seperti iklim, penggunaan lahan, dan distribusi penduduk, dengan penjelasan detail.',
    //     ],
    //     [
    //         'id' => 8,
    //         'name' => 'Ekonomi',
    //         'deadline' => '2024-06-05',
    //         'status' => 'Belum Selesai',
    //         'description' => 'Mengerjakan Analisis Pasar yang mencakup studi tentang tren pasar, analisis permintaan dan penawaran, serta strategi bisnis yang tepat berdasarkan data.',
    //     ],
    //     [
    //         'id' => 9,
    //         'name' => 'Sosiologi',
    //         'deadline' => '2024-06-06',
    //         'status' => 'Belum Selesai',
    //         'description' => 'Menganalisis Perubahan Sosial yang mencakup studi tentang dinamika perubahan dalam masyarakat, faktor-faktor penyebab, dan dampaknya terhadap struktur sosial.',
    //     ],
    //     [
    //         'id' => 10,
    //         'name' => 'Seni',
    //         'deadline' => '2024-06-07',
    //         'status' => 'Belum Selesai',
    //         'description' => 'Membuat Karya Seni Patung yang melibatkan proses kreatif dalam menciptakan patung dari berbagai bahan, dengan fokus pada teknik dan estetika.',
    //     ],
    // ];

    // public static function getAll()
    // {
    //     return self::$tasks;
    // }

//     public static function find($id)
//     {
//         foreach (self::$tasks as $task) {
//             if ($task['id'] == $id) {
//                 return $task;
//             }
//         }
//         return null;
//     }
}
