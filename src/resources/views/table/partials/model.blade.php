<pre class="is-paddingless"
    v-hljs>
    <code class="php">
namespace LaravelEnso\Examples\app\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Tables\app\Traits\TableCache;

class Example extends Model
{
    use TableCache;

    protected $casts = ['is_active' => 'boolean'];
}
    </code>
</pre>