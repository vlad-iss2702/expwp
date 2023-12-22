<?php if( WPGlobus::Config()->language == WPGlobus::Config()->default_language ): ?>
<div class="services-link__crumb">
    <a data-remodal-target="form">Получить консультацию</a>
</div>
<?php elseif(( WPGlobus::Config()->language == "kz" )) :?>
    <div class="services-link__crumb">
    <a data-remodal-target="form">Кеңес алу</a>
</div>
<?php endif; ?>