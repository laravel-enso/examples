<pre class="is-paddingless"
    v-hljs>
    <code class="php">
namespace App\Http\Controllers\Examples\Tables\Builders;

use App\Example;
use LaravelEnso\Tables\app\Services\Table;

class ExampleTable extends Table
{
    protected $templatePath = __DIR__.'/../Templates/exampleTable.json';

    public function query()
    {
        return Example::selectRaw('
            id as "dtRowId", name, position, seniority, project,
            salary, taxes, is_active, hired_at
        ');
    }
}
    </code>
</pre>