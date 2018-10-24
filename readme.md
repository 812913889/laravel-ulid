# Laravel ULID

Laravel package to generate ULID (Universally Unique Lexicographically Sortable Identifier), which also contains trait for your models that will let you generate ULID ids for your Eloquent models automatically. Based on robinvdvleuten/php-ulid.

這個專案根據 rorecek/laravel-ulid 進行修改，修改一些路徑參考的錯誤

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