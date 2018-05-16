# Laravel ULID

## Usage

### Models

To set up a model to use ULID, simply use the HasUlid trait and set the incrementing flag to false.

需要在要使用的ORM檔案中 `use Ariby\Ulid\HasUlid`

並在class中寫入 `use Ariby\Ulid\HasUlid` & `public $incrementing = false;`

``` php
use Illuminate\Database\Eloquent\Model;
use ariby\Ulid\HasUlid;

class Item extends Model
{
  use HasUlid;
  ....
  
  /**
  * Indicates if the IDs are auto-incrementing.
  *
  * @var bool
  */
  public $incrementing = false;

  ....
}
```