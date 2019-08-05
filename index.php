<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Page Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="dist/yks.css">
    <link rel="stylesheet" href="dist/style.css">
</head>
<body>
<div class="page">
    <header>
        <div class="container-fluid">
            <div class="row">
                <h1>Flexbox BEM Grid</h1>
            </div>
            <div class="row">
                <p>Сетка CSS основанная на флексах следующая BEM стандартам.</p>
                <a href="/example.php">Сгенерировать</a>
            </div>
        </div>
    </header>

    <section class="columns">
        <div class="container">
            <? $q = 13 ?>
            <div class="row">
                <? for ($i = 0; $i < 12; $i++): $q-- ?>
                    <div class="col__<?= $q ?>--xl col__6--lg col__4--md col__6--sm col__12--xs">
                        <div class="block">
                            col__<?= $q ?>
                        </div>
                    </div>
                    <? if ($i !== 0): ?>
                        <div class=" col__<?= $i ?>--xl col__6--lg col__4--md col__6--sm col__12--xs">
                            <div class="block">
                                col__<?= $i ?>
                            </div>
                        </div>
                    <? endif; ?>
                <? endfor; ?>
        </div>
    </section>
    <section class="table">
        <div class="container">
                <h1>Таблица</h1>
            <div class="table-responsive">
                <table class="table">
                    <? for ($z = 0; $z < 10; $z++): ?>
                        <tr>
                            <td><?= rand(0,10) ?></td>
                            <td><?= rand(0,10) ?></td>
                            <td><?= rand(0,10) ?></td>
                            <td><?= rand(0,10) ?></td>
                        </tr>
                    <? endfor; ?>
                </table>
            </div>

        </div>
    </section>

    <section class="typography">
        <div class="container">
            <h1>Типография</h1>
                <div class="row">
                    <div class="col__6--lg col__6--xl">
                        <strong>Bolded</strong>
                        <em>Italicized</em>
                        <a>Colored</a>
                        <u>Underlined</u>
                    </div>
                    <div class="col__6--lg col__6--xl">
                        <h1>Загаловок</h1>
                        <h2>Загаловок</h2>
                        <h3>Загаловок</h3>
                        <h4>Загаловок</h4>
                        <h5>Загаловок</h5>
                    </div>
                </div>
        </div>
    </section>


    <section class="buttons">
       <div class="container">
           <a class="btn">Кнопка</a>

           <a class="btn btn--lg">Кнопка</a>
       </div>
    </section>

    <section class="codes">

        <div class="container">
            <h1>Код</h1>
            <pre>
                <code>(function (g, h, A) {
    function u(a, b, c) {
        return function () {
            try {
                return a.apply(this, arguments)
            } catch (d) {
                c || Oa(d, b)
            }
        }
    }

    function Oa(a, b) {
        var c;
        if (.01 > Math.random()) try {
            var d = a && a.message || "";
            (c = -1 < d.indexOf("network error occurred") || -1 < d.indexOf("send beacon") && -1
                    < d.indexOf("Content Security Policy")) ||
                    (new Pa).log("jserrs", oa, a.message, b, J.href, "", "string" === typeof
                    a.stack && a.stack.replace(/\n/g, "\\n"))
        } catch (f) {
        }
    }

    function vb(a, b, c, d, f) {
        function q(a, b) {
            b = Math.max(0, Math.min(b, 65535));
            e.mergeArrays(a, [b >>
            8, b & 255])
        }

        function p(a, b) {
            e.mergeArrays(a, [b & 255])
        }

                </code>
            </pre>
        </div>
    </section>
</div>
</body>
</html>
<?php
file_put_contents($_SERVER['DOCUMENT_ROOT'] .'/index.html', ob_get_contents());
header('Location: /index.html')
?>
