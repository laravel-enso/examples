<pre class="is-paddingless"
    v-hljs>
    <code class="php">

namespace LaravelEnso\Examples\app\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use LaravelEnso\VueDatatable\app\Traits\Excel;
use LaravelEnso\VueDatatable\app\Traits\Datatable;
use LaravelEnso\Examples\Tables\Builders\ExampleTable;

class TableController extends Controller
{
    use DispatchesJobs, Datatable, Excel;

    protected $tableClass = ExampleTable::class;
}

    </code>
</pre>