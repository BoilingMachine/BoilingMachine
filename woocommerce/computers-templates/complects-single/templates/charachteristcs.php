<section class='section-mg'>
    <div class="bm-adaptive bm-margin bm">
        <div class="max-1080">
            <div class="settings-product">
                <div class="videocard-title-container">
                    <h2 class="videocrad-title">Характеристики видеокарты <? the_title(); ?></h2>
                </div>
                <div class="settings-container">
                    <div class="settings-container-block">
                        <div class="settings-container-title">
                            <p class="settings-title__text">Общие характеристики</p>
                        </div>
                        <div class="settings-container-body">
                            <div class='settings-container-body-element'>
                                <p class="element-title">Графический процессор</p>
                                <p class="element-value"><?php echo $product->get_attribute('graficheskij-proczessor'); ?></p>
                            </div>
                            <div class='settings-container-body-element'>
                                <p class="element-title">Микроархитектура</p>
                                <p class="element-value"><?php echo $product->get_attribute('mikroarhitektura'); ?></p>
                            </div>
                            <div class='settings-container-body-element'>
                                <p class="element-title">Техпроцесс</p>
                                <p class="element-value"><?php echo $product->get_attribute('tehproczess'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="settings-container-block">
                        <div class="settings-container-title">
                            <p class="settings-title__text">Память</p>
                        </div>
                        <div class="settings-container-body">
                            <div class='settings-container-body-element'>
                                <p class="element-title">Объем видеопамяти</p>
                                <p class="element-value"><?php echo $product->get_attribute('obem-videopamyati'); ?></p>
                            </div>
                            <div class='settings-container-body-element'>
                                <p class="element-title">Тип памяти</p>
                                <p class="element-value"><?php echo $product->get_attribute('tip-pamyati'); ?></p>
                            </div>
                            <div class='settings-container-body-element'>
                                <p class="element-title">Разрядность шины памяти</p>
                                <p class="element-value"><?php echo $product->get_attribute('razryadnost-shiny-pamyati'); ?></p>
                            </div>
                            <div class='settings-container-body-element'>
                                <p class="element-title">Эффективная частота памяти</p>
                                <p class="element-value"><?php echo $product->get_attribute('effektivnaya-chastota-pamyati'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="settings-container-block">
                        <div class="settings-container-title">
                            <p class="settings-title__text">Дисковые контроллеры</p>
                        </div>
                        <div class="settings-container-body">
                            <div class='settings-container-body-element'>
                                <p class="element-title">Турбочастота</p>
                                <p class="element-value"><?php echo $product->get_attribute('turbochastota'); ?></p>
                            </div>
                            <div class='settings-container-body-element'>
                                <p class="element-title">Число текстурных блоков</p>
                                <p class="element-value"><?php echo $product->get_attribute('chislo-teksturnyh-blokov'); ?></p>
                            </div>
                            <div class='settings-container-body-element'>
                                <p class="element-title">Число блоков растеризации</p>
                                <p class="element-value"><?php echo $product->get_attribute('chislo-blokov-rasterizaczii'); ?></p>
                            </div>
                            <div class='settings-container-body-element'>
                                <p class="element-title">Поддержка трассировки лучей</p>
                                <p class="element-value"><?php echo $product->get_attribute('podderzhka-trassirovki-luchej'); ?></p>
                            </div>
                            <div class='settings-container-body-element'>
                                <p class="element-title">RT-ядра</p>
                                <p class="element-value"><?php echo $product->get_attribute('rt-yadra'); ?></p>
                            </div>
                            <div class='settings-container-body-element'>
                                <p class="element-title">Тензорные ядра</p>
                                <p class="element-value"><?php echo $product->get_attribute('tenzornye-yadra'); ?></p>
                            </div>
                            <div class='settings-container-body-element'>
                                <p class="element-title">Версия шейдеров</p>
                                <p class="element-value"><?php echo $product->get_attribute('versiya-shejderov'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="settings-container-block">
                        <div class="settings-container-title">
                            <p class="settings-title__text">Слоты расширения</p>
                        </div>
                        <div class="settings-container-body">
                            <div class='settings-container-body-element'>
                                <p class="element-title">Видеоразъемы</p>
                                <p class="element-value"><?php echo $product->get_attribute('videorazemy'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="settings-container-block">
                        <div class="settings-container-title">
                            <p class="settings-title__text">Аудио / Видео</p>
                        </div>
                        <div class="settings-container-body">
                            <div class='settings-container-body-element'>
                                <p class="element-title">Максимальное разрешение</p>
                                <p class="element-value"><?php echo $product->get_attribute('maksimalnoe-razreshenie'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="settings-container-block">
                        <div class="settings-container-title">
                            <p class="settings-title__text">Подключение</p>
                        </div>
                        <div class="settings-container-body">
                            <div class='settings-container-body-element'>
                                <p class="element-title">Интерфейс подключения</p>
                                <p class="element-value"><?php echo $product->get_attribute('interfejs-podklyucheniya'); ?></p>
                            </div>
                        </div>  
                    </div>
                    <div class="settings-container-block">
                        <div class="settings-container-title">
                            <p class="settings-title__text">Дополнительно</p>
                        </div>
                        <div class="settings-container-body">
                            <div class='settings-container-body-element'>
                                <p class="element-title">Рекомендуемый блок питания</p>
                                <p class="element-value"><?php echo $product->get_attribute('rekomenduemyj-blok-pitaniya'); ?></p>
                            </div>
                            <div class='settings-container-body-element'>
                                <p class="element-title">Габариты(ДхШхВ)</p>
                                <p class="element-value"><?php echo $product->get_attribute('gabarity-dxshxt'); ?></p>
                            </div>
                            <div class='settings-container-body-element'>
                                <p class="element-title">Гарантия</p>
                                <p class="element-value"><?php echo $product->get_attribute('garantiya-ot-proizvoditelya'); ?></p>
                            </div>
                            <div class='settings-container-body-element'>
                                <p class="element-title">LCD Дисплей</p>
                                <p class="element-value"><?php echo $product->get_attribute('lcd-displej'); ?></p>
                            </div>
                            <div class='settings-container-body-element'>
                                <p class="element-title">Тип охлаждения</p>
                                <p class="element-value"><?php echo $product->get_attribute('tip-ohlazhdeniya'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>