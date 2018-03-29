<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>
<div class="row">
    <? foreach ($arResult['ITEMS'] as $arFile) { ?>
        <div class="col-xl-3">
            <div class="text-center p-2 mb-4">
                <img src="<?= $arFile['PATH'] ?>" class="img-fluid" alt="<?= $arFile['NAME'] ?>">
            </div>
        </div>
    <? } ?>
</div>