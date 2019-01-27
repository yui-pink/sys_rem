# 以下のコードのreplace00()とそれの呼び出し元をより良い形に修正しましょう。export NAME=name && php scope.phpのように環境変数を設定して実行しましょう。

```
<?php

$val = 'こんにちは ooさん';

function replaceOO() {
    global $val;
    $tp = $val;
    return str_replace('OO', $_ENV['NAME'], $tp);
}

echo replaceOO();
```
