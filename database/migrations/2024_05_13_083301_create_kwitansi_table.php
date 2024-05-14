use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKwitansisTable extends Migration
{
    public function up()
    {
        Schema::create('kwitansis', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_kwitansi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kwitansis');
    }
}