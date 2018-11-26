# Laravel ULID

Laravel package to generate ULID (Universally Unique Lexicographically Sortable Identifier), which also contains trait for your models that will let you generate ULID ids for your Eloquent models automatically. Based on **robinvdvleuten/php-ulid**.

這個專案根據 **rorecek/laravel-ulid** 進行修改，修改一些路徑參考的錯誤，和 composer update 時會發生的錯誤，然後優化了一些使用

## Usage

### Migrations

使用 char 26 進行宣告

```
$table->char('id', 26)
    ->comment('[PK] 資料識別碼');
```

### Models

在要使用的 ORM 檔案中 `use Ariby\Ulid\HasUlid`

``` php
use Illuminate\Database\Eloquent\Model;
use ariby\Ulid\HasUlid;

class Item extends Model
{
  use HasUlid;
 
  ....
}
```

即可

### 動態產生

若是需要在程式中動態產生 ulid

需要於命名空間 `use Ariby\Ulid\Ulid;`

即可使用動態方法 `(string)Ulid::generate()` 取得