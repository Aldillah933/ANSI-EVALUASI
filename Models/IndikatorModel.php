// app/Models/IndikatorModel.php
namespace App\Models;

use CodeIgniter\Model;

class IndikatorModel extends Model
{
    protected $table = 'indikator';
    protected $primaryKey = 'indikator_id';
    protected $allowedFields = ['nama_indikator', 'deskripsi', '...']; // sesuaikan dengan kolom tabel
}
