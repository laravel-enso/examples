<pre class="is-paddingless"
    v-hljs>
    <code class="php">

namespace LaravelEnso\Examples\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Tables\app\Traits\Datatable;
use Illuminate\Foundation\Bus\DispatchesJobs;
use LaravelEnso\Tables\app\Traits\ExcelExport;
use LaravelEnso\Examples\Tables\Builders\ExampleTable;

class TableController extends Controller
{
    use DispatchesJobs, Datatable, ExcelExport;

    protected $tableClass = ExampleTable::class;
}

    </code>
</pre>