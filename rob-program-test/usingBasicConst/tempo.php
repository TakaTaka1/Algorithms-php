<?php
// 以下のTenpoクラスの1~4は店舗コードである。ALLには店舗コードをキーとした店舗名が連想配列で定義されている。
// フォームの中のselectタグで店舗コードを選択できるようなselectタグを生成してください。

class Tenpo{
    const NIPPORI   = 1;
    const KOKUBUNJI = 2;
    const GOTANDA   = 3;
    const ISHIKARI  = 4;
    
    const ALL = [
        self::NIPPORI   => '日暮里店',
        self::KOKUBUNJI => '国分寺店',
        self::GOTANDA   => '五反田店',
        self::ISHIKARI  => '石狩店',
    ];    
}

//print_r(Tenpo::ALL);

?>

<select>
    <?php foreach(Tenpo::ALL as $key =>$value): ?>
    <option value="<?=$key ?>"><?=$value ?></option>
    <?php endforeach; ?>
</select>

