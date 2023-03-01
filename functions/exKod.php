<?php
/**
 * Created by exKod.
 * User: exKod.ru
 * Date: 20.09.2022
 * Time: 11:18
 */

class exKod {
    static private $Common = false;
    static private $Form   = false;
    static private $Text   = false;
    static private $Bitrix = false;
    static private $Parser = false;
    static private $DB     = false;
    static private $Router = false;
    static private $Session= false;
    static private $User   = false;
    static private $InfoBlock = false;
    static private $Mail    = false;
    static private $SmartFilter = false;
    static private $Microdata = false;
    static private $Image = false;
    static private $WP = false;
    static private $Gutenberg = false;
    static private $Breadcrumbs = false;
    static private $Schema = false;
    static private $Seo = false;


    /**
     * Запускаем функции
     */

    static public function Common() {
        if(self::$Common == false) self::$Common = new my_exKod_Common;
        return self::$Common;
    }
    static public function Form() {
        if(self::$Form == false) self::$Form = new Form;
        return self::$Form;
    }
    static public function Text() {
        if(self::$Text == false) self::$Text = new my_exKod_Text;
        return self::$Text;
    }
    static public function SmartFilter() {
        if(self::$SmartFilter == false) self::$SmartFilter = new SmartFilter;
        return self::$SmartFilter;
    }
    static public function Microdata() {
        if(self::$Microdata == false) self::$Microdata = new Microdata;
        return self::$Microdata;
    }
    static public function Router() {
        if(self::$Router == false) self::$Router = new my_exKod_Router;
        return self::$Router;
    }
    static public function Image() {
        if(self::$Image == false) self::$Image = new Image;
        return self::$Image;
    }
    static public function User() {
        if(self::$User == false) self::$User = new User;
        return self::$User;
    }
    static public function Mail() {
        if(self::$Mail == false) self::$Mail = new my_exKod_Mail;
        return self::$Mail;
    }
    static public function WP() {
        if(self::$WP == false) self::$WP = new my_exKod_WordPress;
        return self::$WP;
    }

    static public function Gutenberg() {
        if(self::$Gutenberg == false) self::$Gutenberg = new my_exKod_Gutenberg;
        return self::$Gutenberg;
    }

    static public function Breadcrumbs() {
        if(self::$Breadcrumbs == false) self::$Breadcrumbs = new my_exKod_Breadcrumbs;
        return self::$Breadcrumbs;
    }
    static public function Schema() {
        if(self::$Schema == false) self::$Schema = new my_exKod_Schema;
        return self::$Schema;
    }

    static public function Seo() {
        if(self::$Seo == false) self::$Seo = new _exKod_Seo;
        return self::$Seo;
    }
}

class my_exKod_Common  {
    static private $segment = false;
    static private $text = false;
    static private $php_time_before = false;

    /**
     * Вывести массив с данныеми
     */
    public function drop($array = false)
    {

        echo '<pre>';
        if(!empty($array)) print_r($array); else echo 'Массив пустой';
        echo '</pre>';

        return true;
    }


    // * - Работа с папкаки
    // * Создать директории
    public function dir($path = false){
        $arFolder = explode('/', $path);
        $folder = '/';

        foreach ($arFolder as $key => $item) {
            if (!empty($item)) {
                // * Если нет такой папки, то нужно создать
                $folder .= $item . '/';
                if (!is_dir($folder)) mkdir($folder, 0777, true);
            }
        }
        return true;
    }

    /**
     * Удалить папки и файлы
     */
    function dirDel ($dir)
    {
        $d=opendir($dir);
        while(($entry=readdir($d))!==false)
        {
            if ($entry != "." && $entry != "..")
            {
                if (is_dir($dir."/".$entry))
                {
                    dirDel($dir."/".$entry);
                }
                else
                {
                    unlink ($dir."/".$entry);
                }
            }
        }
        closedir($d);
        rmdir ($dir);
    }


    public function clearNumber($value){
        $value =  preg_replace('/[^0-9]/', '', $value);
        
        return (int) $value;
    }
    /**
     * Получить ссылку на тел. номер
     * $number = "89911112213"
     * Результат: < a href 8 991 111 22 13
     */
    public function getPhoneLink($value = false) {

        $value =  preg_replace('/[^0-9]/', '', $value);

        // Если номер начинается с 7, то добавить +7
        if(mb_substr($value,0,1,"UTF-8") === '7'){
            $value = '+'.$value;
        }

        $value = 'tel:'. $value;
        return $value;
    }

    public  function getWhatsAppLink($value = false) {

        $value =  preg_replace('/[^0-9]/', '', $value);

        if(mb_substr($value,0,1,"UTF-8") === '7'){
            $value = $value;
        }

        $value = 'https://api.whatsapp.com/send/?phone='.$value.'&app_absent=0';
        return $value;
    }

    /**
     * Удаления domain из url ссылки
     * $url = "http://domain.ru/link"
     * Результат: link
     */
    public function remDomain($url = false) {
        $withoutProtocolDelimiter = str_replace('//', '', $url);

        return substr($withoutProtocolDelimiter, strpos($withoutProtocolDelimiter, '/') + 1);
    }

    /**
     * Получить дату и всемя
     * $template = ( day / day-month-year / day-month-year )
     * Результат: 11 января 2021
     */
    public function getDate($date = NUll, $template = false)
    {
        // * TEMPLATE
        // - false  10/10/10 21:30
        // - day    Сегодня в 12:43

        // * Если даты нет, то текущее время
        if(empty($date)) $date = date("d-m-Y H:i:s");
        // echo date("Y-m-d H:i:s");

        $month = ['0' => '', '1' => 'января', '2' => 'февраля', '3' => 'марта', '4' => 'апреля', '5' => 'мая', '6' => 'июня', '7' => 'июля', '8' => 'августа', '9' => 'сентября', '10' => 'октября', '11' => 'ноября', '12' => 'декабря',];

        $date_number = mb_substr($date, 0, 2);
        $date_month  = (int)mb_substr($date, 3, 2);
        $date_year   = mb_substr($date, 6, 4);
        $date_time   = "в " . mb_substr($date, 11, -3);

//        if ($date_number == date('d') AND $date_month == date('m') AND $date_year == date('Y')) {
//            $date_number = "Сегодня";
//            $date_month = 0;
//            $date_year = '';
//        }
//
//        if (
//            $date_number == date('d') - 1 AND $date_month == date('m') AND $date_year == date('Y')) {
//            $date_number = "Вчера";
//            $date_month = 0;
//            $date_year = '';
//        }

        // * * * * * * * * *
        if ($template == 'numeric') {
            $date = mb_substr($date, 0, 10);
            return $date;
        }

        if ($template == 'day') {
            $date = "" . $date_number . " " . $month[$date_month] . " " . $date_year . " " . $date_time;
            return $date;
        }
        if ($template == 'day-month') {
            $date = "" . ltrim($date_number, '0') . " " . $month[$date_month];
            return $date;
        }
        if ($template == 'day-month-year') {
            $date = "" . ltrim($date_number, '0') . " " . $month[$date_month] . " " . $date_year;
            return $date;
        }
        if ($template == false) {
            $date = "" . ltrim($date_number, '0') . " " . $month[$date_month] . " " . $date_year;
            return $date;
        }
        // * * * * * * * * *


        return $date;
    }

    /**
     * Проверяем выходной сегодня или нет
     */
    public function isDateWeekend($date = false) {

        // * Если даты нет, то текущее время
        if(empty($date)) $date = date("d-m-Y");

        return (date('N', strtotime($date)) >= 6);
    }



    /**
     * Вывод лога в консоль
     */
    static public function consoleLog($message)
    {
        echo "[".date('H:i:s')."]: ".mb_convert_encoding($message, 'UTF-8', 'auto')."\n";

        return true;
    }


    public function getSegment($value = false){
        $arResult = array();
        $value = explode('/', $value);

        // * Разбиваем сигмент

        foreach ($value as $key => $item) {
            if (!empty($item)) {
                $arResult[] = $item;
            }
        }

        return $this::$segment = $arResult;
    }
    public function getSegmentCount($segment = false){
        if($segment == false) {
            if(is_array($this::$segment)) return count($this::$segment);
            return false;
        }
        if(is_array($segment)){
            return count($segment);
        }
        return false;
    }
    public function getSegmentFolder($value){
        if(substr($value, -1) !== '/'){
            $arResult = $this->getSegment($value);
            $count = $this->getSegmentCount($arResult);
            unset($arResult[$count]);
            return $arResult;
        }

        return $this->getSegment($value);
    }

    public function getOglav($value = false) {
        preg_match_all('/<h[2-6].*?>(.*)<\/h[2-6]>/i', $value, $matches);

        return $matches;
    }

    public function getHeadings($post_content){
        $blocks = parse_blocks( $post_content );

        // в этот массив будем записывать заголовки
        $headings = array();

        // запускаем массив блоков в цикле
        foreach( $blocks as $key => $block ) {

            // если это блок-заголовок, то добавляем его в общий массив
            if( 'core/heading' === $block[ 'blockName' ] && empty( $block[ 'attrs' ][ 'level' ] ) ) {

                preg_match_all('/<(h[2-6]) id="(.*)?">(.*)<\/h[2-6]>/i', $block[ 'innerHTML' ], $matches);

                $headings[$key]['tag'] = $matches[1][0];
                $headings[$key]['link'] = $matches[2][0];
                $headings[$key]['name'] = $matches[3][0];
            }
        }

        return $headings;
    }

    public function getText($html, $IMG_ALT = false) {
        // Если уже выбирали
        if(!empty(self::$text)) return self::$text;

        // Устанавливае якоря для заголовков
        $arTitle = $this->getOglav($html);

        foreach ($arTitle[0] as $i => $row) {
            $html = str_replace($row, '<a id="i-' . $i . '"></a>' . $row, $html);
        }


        // Преаболзуем картики в нормальный вид
        $arImg = false;
        preg_match_all('/<img([^>]+)>/i', $html, $arImg);

//        foreach ($arImg[0] as $i => $row) {
//            $html = str_replace($row, '<img id="i-' . $i . '">' . $row, $html);
//        }

        // Групируем картики в блоки
        $arHtmlTag = false;

        preg_match_all('/<([a-z0-2]+)([^>]+)>/i', $html, $arHtmlTag);

        $i = 0;
        $count = 0;
        $searchLast = false;
        $arImgBlocks = array();

        foreach ($arHtmlTag[1] as $key => $item){
            if($item == 'img' AND $item == $searchLast) {
                $count++;
                $arImgBlocks[$i][$count-1] = $key-1;
                $arImgBlocks[$i][$count] = $key;

            } else {
                $i++;
                $count = 0;
            }
            $searchLast = $item;
        }



        foreach ($arImgBlocks as $index => $item) {
            $imgBlock = false;
            $imgBlock .= '<div class="row new-img">';
            foreach ($item as $key => $id){

                if($key == 2) $col = 12; else $col = 6;

                $imgBlock .= '<div class="col-'.$col.'">';
                $imgBlock .= $arHtmlTag[0][$id];
                $imgBlock .= '</div>';

                if($key == count($item) - 1 ){
                    $html = str_replace($arHtmlTag[0][$id],'$IMG', $html);
                } else {
                    $html = str_replace($arHtmlTag[0][$id],'', $html);
                }
            }
            $imgBlock .= '</div>';

            $html = str_replace('$IMG' ,$imgBlock, $html);

            //echo $imgBlock;
        }


        // Найти все картинки и заменить у них ALT
//        $var = false;
//        preg_match_all('/src=\"(.*?)\"/', $html ,$var);

        $html = preg_replace("/<(img|image)[\s]+[^>]*src=['\"]?([^'\"\s>]+)['\"]?[^>]*>/is", "<img src=\"$2\" alt=\"$IMG_ALT\" title=\"$IMG_ALT\">", $html);
        //$html = preg_replace("/<(img|image)[\s]+[^>]*src=['\"]?([^'\"\s>]+)['\"]?[^>]*>/is", APP::Microdata()->getImg('$2', $IMG_ALT, $IMG_ALT), $html);


        //APP::Common()->drop($html);
        return self::$text = $html;
    }


    public function getCookieArray($value) {
        if(!isset($_COOKIE[$value])) return [];

        $arResult = explode(',', $_COOKIE[$value]);

        return array_filter($arResult, function($element) {
            return !empty($element);
        });
    }

    public function arraySearch($val, $array) {
        if(empty($array))  return false;

        foreach ($array as $key => $item) {
            if($val == $item) return  true;
        }
    }

    public function phpTimeStart(){
        $this->php_time_before = microtime(true);
    }

    public function phpTimeEnd(){
        $after = microtime(true);
        $result = $after - $this->php_time_before;
        $result = floor($result * 100) / 100;

        echo $result . 'c';
    }

}
class my_exKod_Router {
    private $urlHost = false;

    // * - URL -
    // * Получить текущий адресс страницы
    public function getUrl()
    {
        return $this->getUrlHost().$this->getUrlPath();
    }
    public function getUrlHost() {
        if($this->urlHost) return $this->urlHost;

        $url = 'http';
        if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on')) {
            $url .= "s";
        }
        $url .= "://" . $_SERVER['HTTP_HOST'];

        return $this->urlHost = $url;
    }
    public function getUrlPath()
    {
        return explode('?', $_SERVER['REQUEST_URI'], 2)[0];
    }
    public function getUrlDomain()
    {
        return $_SERVER['HTTP_HOST'];
    }

    public function getCanonical() {
        global $APPLICATION;
        $url = $this->getUrlHost();

        if(!empty($APPLICATION->GetCurDir())) {
            $url .= $APPLICATION->GetCurDir();
        }

        return $url;
    }
}
class my_exKod_Form {
    public $form = array();

    /**
     * Создаем новую форму
     */
    public function newForm() {
        $this->form = array(
            ['fields' => array()],
            ['error'  => false]
        ) ;
        return $this;
    }
    /**
     * Проверка полей
     */
    public function checkField ($value = false , $name = 'default' , $necessarily = false)
    {
        $error = false; // Ошибки
        $this->addField($name, $value);

        switch ($name) {
            case 'name':
                if(empty($value))
                    $error = 'Вы не заполние поле';
                break;
            case 'email':
                if (!preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $value))
                    $error = 'Email указан не правильно';
                if(empty($value))
                    $error = 'Вы не заполние поле';
                break;
        }

        if($necessarily == true AND empty($value))
            $error = 'Поле обязательно для заполнения';

        if($error !== false) {
            $this->form['error'][$name] = $error;
        }

        return $this;
    }
    public function isValidation() {
        if(!empty($this->form['error'])){
            return false;
        }
        return true;
    }
    public function getError(){
        return $this->form['error'];
    }
    public function getField($name = false) {
        if(!empty($name)){
            return $this->form['fields'][$name];
        }else{
            return $this->form['fields'];
        }
    }
    public function addField($name , $value ){
        $this->form['fields'][$name] = APP::Text()->clear($value);
        return $this;
    }
}
class my_exKod_Text {
    /**
     * Очистка текста
     */
    public function clear ($value = false)
    {
        $value = trim($value);          // Удаляет пробелы из начала и конца строки
        $value = stripslashes($value);  // Удаляет экранирование символов, произведенное функцией
        $value = strip_tags($value);    // Удалем HTML и PHP тэги
        return $value;
    }

    /**
     * Преобразовать текст в код
     *
     */
    public function getCode($name) {
        $name = mb_strtolower($name);
        $name = preg_replace(['/-{2,}/', '/\s{2,}/'], ['-', ' '], $name);
        $tr = [
            'а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d',
            'е'=>'e', 'ё'=>'e', 'ж'=>'j', 'з'=>'z', 'и'=>'i',
            'й'=>'y', 'к'=>'k', 'л'=>'l', 'м'=>'m', 'н'=>'n',
            'о'=>'o', 'п'=>'p', 'р'=>'r', 'с'=>'s', 'т'=>'t',
            'у'=>'u', 'ф'=>'f', 'х'=>'h', 'ц'=>'ts', 'ч'=>'ch',
            'ш'=>'sh', 'щ'=>'sch', 'ъ'=>'y', 'ы'=>'yi', 'ь'=>'',
            'э'=>'e', 'ю'=>'yu', 'я'=>'ya', ' '=> '-', '.'=>'',
            ','=>'', '/'=>'-', '!'=>'', '('=>'', ')'=>''
        ];
        $name = strtr($name, $tr);

//        if ($name{strlen($name)-1} == '-') {
//            $name = substr($name,0,-1);
//        }

        return $name;
    }

    /**
     * Обрезать тект
     */

    public function getTrimText($text) {
       return mb_substr($text,0,80,'UTF-8').' ...';
    }
}
class my_exKod_WordPress {
    private $arResult = false;

    public function getProductPriceVariation($product, $currency = "RUB"){
        if($product->is_type( 'simple' )) {
            return (object) ["regular_price" => $product->regular_price, "sale_price" => $product->sale_price];
        }

        $prices = $product->get_variation_prices( false );
//        $variation =  $product->get_variation_default_attributes();
        $variation =  $product->get_available_variations();


        exKod::Common()->drop($variation);

        if (!empty( $prices['price'])) {
            $min_price     = current( $prices['price'] );
            $max_price     = end( $prices['price'] );
            $min_reg_price = current( $prices['regular_price'] );
            $max_reg_price = end( $prices['regular_price'] );

            if ( $min_price !== $max_price ) {
                return (object) ["regular_price" => $max_price, "sale_price" => $min_price];
            } elseif ( $product->is_on_sale() && $min_reg_price === $max_reg_price ) {
                return (object) ["regular_price" => $max_reg_price, "sale_price" => $min_price];
            } else {
                return (object) ["regular_price" => $max_price, "sale_price" => $min_price];
            }
        }

        return (object) ["regular_price" => null, "sale_price" => null];
    }

    public function get_variation_prices( $for_display = false ) {
        $prices = $this->data_store->read_price_data( $this, $for_display );

        foreach ( $prices as $price_key => $variation_prices ) {
            $prices[ $price_key ] = $this->sort_variation_prices( $variation_prices );
        }

        return $prices;
    }

    public function getCategories ($name = 'category', $type = 'post'){
        $this->arResult = get_categories( [
            'taxonomy'     => 'category',
            'type'         => 'post',
            'child_of'     => 0, // Получить дочерние категории
            'parent'       => false, // Получает категории, родительская категория
            'orderby'      => 'name',
            'order'        => 'ASC',
            'hide_empty'   => 0, // Получать или нет пустые категории
            'hierarchical' => 1, // Если параметр установлен в true, то в результат будут включены пустые дочерние категории, дочерние категории которых имеют записи (непустые).
            'exclude'      => '', // Исключить какие-либо категории из списка
            'include'      => '', // Вывести списком только указанные категории (Массив)
            'number'       => 0, // Лимит
            'pad_counts'   => false, // Если передать true, то число которое показывает количество записей в родительских категориях будет суммой своих записей и записей из дочерних категорий.
        ] );

        if( $this->arResult ){
            foreach( $this->arResult as $cat ){
                // Данные в объекте $cat

                // $cat->term_id
                // $cat->name (Рубрика 1)
                // $cat->slug (rubrika-1)
                // $cat->term_group (0)
                // $cat->term_taxonomy_id (4)
                // $cat->taxonomy (category)
                // $cat->description (Текст описания)
                // $cat->parent (0)
                // $cat->count (14)
                // $cat->object_id (2743)
                // $cat->cat_ID (4)
                // $cat->category_count (14)
                // $cat->category_description (Текст описания)
                // $cat->cat_name (Рубрика 1)
                // $cat->category_nicename (rubrika-1)
                // $cat->category_parent (0)

            }
        }

        return $this->arResult;
    }
    public function getTermLvlByOb($category, $level = 0) {
        if ($category->parent == 0) {
            return $level;
        } else {
            $level++;
            $category = get_term($category->parent);
            return $this->getTermLvlByOb($category, $level);
        }
    }
    public function getTerms ($taxonomy = 'category', $parent = false, $include = '', $exclude = 1, $number = 0, $orderby = 'name', $order = 'ASC') {
        $this->arResult = get_terms( [
            'taxonomy'     => $taxonomy,
            'parent'       => $parent, // Получает категории, родительская категория
            'orderby'      => $orderby,
            'order'        => $order,
            'hide_empty'   => 0, // Получать или нет пустые категории
            'hierarchical' => 1, // Если параметр установлен в true, то в результат будут включены пустые дочерние категории, дочерние категории которых имеют записи (непустые).
            'exclude'      => $exclude, // Исключить какие-либо категории из списка
            'include'      => $include, // Вывести списком только указанные категории (Массив)
            'number'       => $number, // Лимит
            'pad_counts'   => false, // Если передать true, то число которое показывает количество записей в родительских категориях будет суммой своих записей и записей из дочерних категорий.
        ] );

        return $this->arResult;
    }
    public function getTermsTree ($taxonomy = 'category', $parent = '', $include = '', $exclude = 1, $number = 0, $orderby = 'name', $order = 'ASC') {
        $this->arResult = $this->getTerms($taxonomy , $parent, $include , $exclude , $number , $orderby , $order );

        foreach ($this->arResult as $key => $arItem) {
            if($arItem->parent == 0) {
                foreach ($this->arResult as $keyChildren => $arChildren) {
                    if($arItem->term_id  == $arChildren->parent) {
                        if(!is_array($this->arResult[$key]->{'children'})) $this->arResult[$key]->{'children'} = array();

                        $this->arResult[$key]->{'children'}[] = $arChildren;

                        unset($this->arResult[$keyChildren]);
                    }
                }
            }
        }

        return $this->arResult;
    }

    public function getPosts($post_type = 'post', $count = -1){
        // * Настройка выборки
        $arProperty = [
            'post_type'   => $post_type,
            'posts_per_page' => $count,
            'post_status' => 'publish',
        ];


        // * Выборка
        $this->arResult = new WP_Query($arProperty);

        return $this->arResult;
    }

    public function getPages(){
        $this->arResult = get_pages( [
            'sort_order'   => 'ASC',
            'sort_column'  => 'post_title',
            'hierarchical' => 1,
            'exclude'      => '',
            'include'      => '',
            'meta_key'     => '',
            'meta_value'   => '',
            'authors'      => '',
            'child_of'     => 0,
            'parent'       => -1,
            'exclude_tree' => '',
            'number'       => '',
            'offset'       => 0,
            'post_type'    => 'page',
            'post_status'  => 'publish',
        ] );

        return $this->arResult;
    }




    public function getCategoryParent ($id = false) {
        $categories = get_the_category( $id );

        if(!empty($categories[0]->category_parent)) {
            $categoriesParent   = get_category($categories[0]->category_parent);
        } else {
            $categoriesParent = false;
        }

        return $categoriesParent;
    }
    public function getCategoryParentTree( $id = false) {
        $arResult = $this->getCategory($id);

       // echo $arResult->name;

//      //  echo end($arResult)->category_parent;
//        if(!empty(end($arResult)->category_parent)) {
//            $arResult[] = $this->getCategoryParent(end($arResult)->category_parent);
//        }

        return $arResult;
    }

    public function getCategory ($id = false) {
        $arResult = get_the_category($id);

        return $arResult[0];
    }

    public function getTerm($id = false) {
        $arResult = get_term($id);

        return $arResult;
    }

    public function getTermParentsTree($id = false) {
        $arResult[] = $this->getTerm($id);

        if(!empty(end($arResult)->parent)) {
            $arResult = array_merge($arResult, $this->getTermParentsTree(end($arResult)->parent));
        }

        return $arResult;
    }



    public function getArhivePage ($post_type = false){

        if($post_type == false) $post_type = get_post_type();

        if(get_post_type_archive_link($post_type) == false) {

            $obj = get_post_type_object( get_post_type() );


            $arResult['name'] = $obj->labels->singular_name;
            $arResult['link'] = site_url() . '/'. $obj->rewrite["slug"]. '/';
            return $arResult;
        }

        return false;
    }


    // * Хлебные крошки
    public function breadcrumbs(){

        // получаем номер текущей страницы
        $page_num = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

        $separator = ' — '; //  разделяем обычным слэшем, но можете чем угодно другим

        // если главная страница сайта
        if( is_front_page() ){

            if( $page_num > 1 ) {
                echo '<a href="' . site_url() . '">Главная</a>' . $separator . $page_num . '-я страница';
            } else {
                echo 'Вы находитесь на главной странице';
            }

        } else { // не главная

            echo '<a href="' . site_url() . '">Главная</a>' . $separator;


            if( is_single() ){ // записи

                // Заменяем архивную страницу на свою
                if(get_post_type_archive_link(get_post_type()) == false) {

                    $obj = get_post_type_object( get_post_type() );

                    echo '<a href="' . site_url() . '/'. $obj->rewrite["slug"]. '/'.'">'.$obj->labels->singular_name.'</a>' . $separator;
                }

                // Категории
                $post_categories = get_the_category();

                if( ! empty( $post_categories[0]->cat_ID ) ) {
                    echo get_category_parents( $post_categories[0]->cat_ID, true, $separator ) ;
                }

                the_title();

            } elseif ( is_page() ){ // страницы WordPress

                the_title();

            } elseif ( is_category() ) {

                // Подразделы
                $parents = get_ancestors( get_query_var('cat'), 'category' );
                foreach ( array_reverse( $parents ) as $cat ) {
                    echo '<a href="' . get_category_link( $cat ) . '">'.get_cat_name( $cat ).'</a>' . $separator;
                }

                single_cat_title();

            } elseif (is_tax()){

            }
            elseif( is_tag() ) {

                single_tag_title();

            } elseif ( is_day() ) { // архивы (по дням)

                echo '<a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a>' . $separator;
                echo '<a href="' . get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) . '">' . get_the_time( 'F' ) . '</a>' . $separator;
                echo get_the_time('d');

            } elseif ( is_month() ) { // архивы (по месяцам)

                echo '<a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a>' . $separator;
                echo get_the_time('F');

            } elseif ( is_year() ) { // архивы (по годам)

                echo get_the_time( 'Y' );

            } elseif ( is_author() ) { // архивы по авторам

                global $author;
                $userdata = get_userdata( $author );
                echo 'Опубликовал(а) ' . $userdata->display_name;

            } elseif ( is_404() ) { // если страницы не существует

                echo 'Ошибка 404';

            }

            if ( $page_num > 1 ) { // номер текущей страницы
                echo ' (' . $page_num . '-я страница)';
            }
        }
    }

    /* [tax_query] */
    public function setFilterToTaxonomy($array) {
        $arFilter = false;

        if(is_array($array)) {
            foreach ($array as $key => $value) {
                if(!$value) continue;

                $arFilter[] = array(
                    'taxonomy' => $key,
                    'field' => 'slug',
                    'terms' => $value
                );
            }
        }

        return $arFilter;
    }

}
class my_exKod_Gutenberg {
    public function getInnerBlock($name, $count , $args) {

        if(isset($args['items'])) {
            foreach ($args['items'] as $arItem) {
                get_template_part('templates/block/' . $name . '/template-item', false, $arItem);
            }
        } else {
            $arElement = array();

            for($i = 1; $i <= $count; $i++) {
                array_push($arElement, ["acf/$name-item"]);
            }

            echo '<InnerBlocks  allowedBlocks="';
            echo esc_attr( wp_json_encode(["acf/".$name."-item"]));
            echo '" template="';
            echo esc_attr( wp_json_encode($arElement));
            echo '" />';
        }
    }
}

class my_exKod_Breadcrumbs {
    private $arResult = [];
    private $htmlBefore = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
    private $htmlAfter  = '</div>';
    private $htmlSep    = '<div class="breadcrumbs__separator"> / </div>'; // разделитель между "крошками"
    private $i = 1;
    private $title      = false;
    private $init       = false;
    private $post       = false;
    private $pageParent = false;

    public function add($link = false, $name = false) {
        $this->arResult[$this->i]['link'] = $link;
        $this->arResult[$this->i]['name'] = $name;

        $this->i++;

        return $this;
    }

    public function setTitle($name = false){
        $this->title = $name;
        return $this;
    }

    public function get(){
        if(!isset($this->arResult[1])) return false;

        echo $this->htmlBefore;

        foreach ($this->arResult as $id => $arItem) {
            echo '<div itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
            echo '<a class="breadcrumbs__link" href="' . $arItem['link'] . '" itemscope itemtype="http://schema.org/Thing" itemprop="item" ><span itemprop="name">' . $arItem['name'] . '</span></a>';
            echo '<meta itemprop="position" content="' . $id . '" />';
            echo '</div>';
            echo $this->htmlSep;
        }

        echo '<span class="breadcrumbs__current">'. $this->title .'</span>';
        echo $this->htmlAfter;

        return true;
    }

    public function init() {
        if($this->init == true) return true;

        global $post;
        $this->pageParent = ( $post ) ? $post->post_parent : '';;

        // Получаем номер текущей страницы
        $page_num = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

        // если главная страница сайта
        if( is_front_page() ){

            if( $page_num > 1 ) {
                $this->add(site_url(), 'Главная');
                $this->setTitle($page_num . '-я страница');
            } else {
               // echo 'Вы находитесь на главной странице';
            }

        } else { // не главная

            $this->add(site_url(), 'Главная');

            if( is_single() ){ // записи

                // Заменяем архивную страницу на свою
                if(get_post_type_archive_link(get_post_type()) == false) {

                    $obj = get_post_type_object( get_post_type() );

                    $this->add( site_url() . '/'. $obj->rewrite["slug"]. '/', $obj->labels->singular_name);
                }

                // Категории

                $post_categories = get_the_category();

                if(!empty($post_categories[0]->term_id)){
                    $arCategories =  array_reverse(exKod::WP()->getTermParentsTree($post_categories[0]->term_id ));
                    foreach ($arCategories as $arItem) {
                        $this->add( get_category_link($arItem->term_id), $arItem->name);
                    }
                }


                $this->setTitle(get_the_title());

            } elseif ( is_page() && ! $this->pageParent){ // страницы WordPress
                $this->setTitle(get_the_title());

            } elseif ( is_page() && $this->pageParent ) { // страницы WordPress c подкатегориями

                $arParents = get_post_ancestors( get_the_ID() );

                foreach ( array_reverse( $arParents ) as $pageID ) {
                    $this->add( get_page_link( $pageID ) , get_the_title( $pageID ));
                }

                $this->setTitle(get_the_title());

            } elseif ( is_category() ) {

                // Подразделы
                $parents = get_ancestors( get_query_var('cat'), 'category' );

                foreach ( array_reverse( $parents ) as $cat ) {
                    $this->add( get_category_link( $cat ) , get_cat_name( $cat ));
                }

                $this->setTitle(single_cat_title('', false ));

            } elseif( is_tag() ) {

                single_tag_title();

            } elseif  (is_tax() ) { // Таксономия

                // Узнать post_type для группы
                if(get_post_type_archive_link(get_post_type()) == false) {

                    $obj = get_post_type_object( get_post_type() );

                    $this->add( site_url() . '/'. $obj->rewrite["slug"]. '/', $obj->labels->singular_name);
                }


                // Подразделы
                $parents = get_ancestors( get_query_var('cat'), 'category' );

                foreach ( array_reverse( $parents ) as $cat ) {
                    $this->add( get_category_link( $cat ) , get_cat_name( $cat ));
                }

                $this->setTitle(single_cat_title('', false ));

            } elseif ( is_day() ) { // архивы (по дням)

                echo '<a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a>' . $separator;
                echo '<a href="' . get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) . '">' . get_the_time( 'F' ) . '</a>' . $separator;
                echo get_the_time('d');

            } elseif ( is_month() ) { // архивы (по месяцам)

                echo '<a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a>' . $separator;
                echo get_the_time('F');

            } elseif ( is_year() ) { // архивы (по годам)

                echo get_the_time( 'Y' );

            } elseif ( is_author() ) { // архивы по авторам

                global $author;
                $userdata = get_userdata( $author );
                echo 'Опубликовал(а) ' . $userdata->display_name;

            } elseif ( is_404() ) { // если страницы не существует



            }

            if ( $page_num > 1 ) { // номер текущей страницы
                echo ' (' . $page_num . '-я страница)';
            }
        }

        $this->init = true;
        return true;
    }
}
class my_exKod_Schema {
    private $data = false;

    public function setArticle($post = false) {
        if(empty($post)) return false;

        $this->data = [
            '@context' => 'http://schema.org',
            '@type' => 'Article',
            'headline' => $post->post_title,
            'image' => get_the_post_thumbnail_url( $post->ID ),
            'description' => get_post_meta($post->ID, "_yoast_wpseo_metadesc", true),
            'articleBody' => $post->post_content,
            'author' => 'На-Кавказе',
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'На-Кавказе',
                'url' => exKod::Router()->getUrlHost(),
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => get_theme_file_uri().'/assets/img/logo.svg',
                ],
                'telephone' => false,
                'address' => 'Россия',
            ],
            'datePublished' => $post->post_date,
            'dateModified' => $post->post_modified,
            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id' => get_permalink( $post->ID ),
            ],
        ];

        return $this->data;
    }

    public function get() {
        $data = json_encode($this->data);

        echo '<script type="application/ld+json">' . $data . '</script>';
    }
}

class my_exKod_User {

    public function isAdmin() {
        global $USER;
        if ($USER->IsAdmin()){
            return true;
        } else {
            return false;
        }
    }
}
class my_exKod_Mail {
    static private $email = '';

    public function send($subject, $to, $message = '', $duplicate = false) {
        $headers = array(
            'From: '. 'Сайт' .' <'.$to.'>',
            'content-type: text/html'
        );

        return mail( $to, $subject, $message , $headers);
    }
    public function sendSmtp($subject, $body, $mailTo = '', $duplicate = 'N') {
        $mail = new PHPMailer;
        $mail->CharSet = 'UTF-8';

        // Настройки SMTP
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPDebug = 0;

        $mail->SMTPSecure = "ssl";
        $mail->Host = $this::$email;
        $mail->Port = 465;
        //     $mail->Username = 'info@cigars-shops.ru';
        //   $mail->Password = '=KF_q{rSv~qJ';

        // От кого
        $mail->setFrom('info@cigars-shops.ru', 'Магазин сигар в Новогиреево');

        // Кому
        if (!empty($mailTo)){
            $mail->addAddress($mailTo);
            if ($duplicate == 'Y'){
                $mail->addBCC('info@cigars-shops.ru');
            }
        } else {
            $mail->addAddress('info@cigars-shops.ru');
        }

        // Тема письма
        $mail->Subject = $subject;

        // Тело письма
        $body = $body;
        $mail->msgHTML($body);

        //  $mail->send();
    }

    public function getBody($html) {
        return '
            <style type="text/css">
              .mail {
                word-spacing:normal;
                background-color:#fff;
                font-size: 500px
              }
              .mail-content {
                font-size: 15px;
              }
              .mail-footer {
                font-size: 13px;
                color: rgb(153, 153, 153);
              } 
              .mail-content-title {
                font-size: 17px;
                font-weight: bold;
              }
              
            </style>
            <div class="mail">
                <div class="mail-content">
                    '.$html.'
                </div>
                <br><br>
                <div class="mail-footer">
                    <img src="'.get_theme_file_uri().'/assets/img/logo-black.svg" style="max-width: 100px;"><br>
                    <small>Интернет-решения для любых целей</small><br><br>
                    
                    Наши контакты: <br>
                    Телефон: <a href="tel:'.exKod::Common()->getPhoneLink(get_field('phone', 'option')).'">'.get_field('phone', 'option').'</a><br>
                    Email: <a href="mailto:'.get_field('email', 'option').'">'.get_field('email', 'option').'</a>
                </div>
            </div>
            ';
    }
}

class _exKod_Seo
{
    private $title = false;
    private $description = false;
    private $canonical = false;

    public function setTitle($value = false)
    {
        $this->title = $value;

        add_filter('wpseo_title', function () {
            return $this->title;
        });
    }

    public function setDescription($value = false)
    {
        $this->description = $value;

        add_filter('wpseo_metadesc', function () {
            return $this->description;
        });
    }

    public function getDescription($value = false)
    {
        return $this->description;
    }

    public function theDescription($value = false)
    {
        if ($this->description) {
            echo '<meta name="description" content="' . $this->description . '" />';
            return true;
        }
        return false;
    }

    public function setCanonical($value = false)
    {
        return $this->canonical = $value;
    }

    public function theCanonical()
    {
        if ($this->canonical) {
            echo '<link rel="canonical" href="' . exKod::Router()->getUrlHost() . exKod::Router()->getUrlPath() . '">';
            return true;
        }
        return false;
    }

    public function isNotGooglePageSpeed() {
        if (stripos(@$_SERVER['HTTP_USER_AGENT'], 'Lighthouse') === false) return true;
        return  false;
    }
}