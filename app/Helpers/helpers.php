<?php

/**
 * dateFormat function format date as user needs
 * @param string $date date('Y-m-d')
 * @param string $format "Y-m-d"
 * @return string $date
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */

if (!function_exists('dateFormat')) {
    function dateFormat($date = "date('Y-m-d')", $format = "Y-m-d")
    {
        $date = date_create($date);
        $date = date_format($date, $format);
        return $date;
    }
}


/**
 * _icons function returns necessary icons 
 * @param string $icon_name
 * @param bool $all
 * @return array <mixed>
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */

if (!function_exists('_icons')) {
    function _icons(string $icon_name = 'user', bool $all = false)
    {
        $icon_list = [
            'about'                     => 'bi bi-person-badge',
            'activity_log'              => 'bi bi-clock-history',
            'add'                       => 'bi bi-plus-lg',
            'attachments'               => 'bi bi-folder-symlink',
            'arrow_right'               => 'bi bi-arrow-right-short',
            'arrow_left'                => 'bi bi-arrow-left-short',
            'arrow_down'                => 'bi bi-chevron-double-down',
            'arrow_up'                  => 'bi bi-chevron-double-up',
            'blog'                      => 'bi bi-newspaper',
            'bell'                      => 'bi bi-bell',
            'bin'                       => 'bi bi-trash2',
            'business'                  => 'bi bi-building',
            'body'                      => 'bi bi-body-text',
            'back'                      => 'bi bi-chevron-left',
            'circle'                    => 'bi bi-circle',
            'clients'                   => 'bi bi-person-hearts',
            'cog'                       => 'bi bi-gear',
            'contact'                   => 'bi bi-envelope-open',
            'conversations'             => 'bi bi-person',
            'close'                     => 'bi bi-person',
            'dashboard'                 => 'bi bi-speedometer2',
            'dark'                      => 'bi bi-lightbulb-fill',
            'default'                   => 'bi bi-info-circle',
            'delete'                    => 'bi bi-trash3',
            'delete_all'                => 'bi bi-trash2',
            'email'                     => 'bi bi-envelope',
            'edit'                      => 'bi bi-pen',
            'example'                   => 'bi bi-example',
            'facebook'                  => 'bi bi-facebook',
            'flag'                      => 'bi bi-flag',
            'globe'                     => 'bi bi-globe2',
            'heart'                     => 'bi bi-heart',
            'home'                      => 'bi bi-house-door',
            'history'                   => 'bi bi-clock-history',
            'hide'                      => 'bi bi-eye-slash',
            'image'                     => 'bi bi-card-image',
            'images'                    => 'bi bi-images',
            'lead'                      => 'bi bi-person-gear',
            'light'                     => 'bi bi-lightbulb',
            'linkedin'                  => 'bi bi-linkedin',
            'link'                      => 'bi bi-link',
            'link45'                    => 'bi bi-link-45deg',
            'link_text'                 => 'bi bi-text-wrap',
            'logout'                    => 'bi bi-box-arrow-right',
            'list'                      => 'bi bi-list-nested',
            'messages'                  => 'bi bi-chat-dots',
            'portfolio'                 => 'bi bi-briefcase',
            'products'                  => 'bi bi-boxes',
            'reboot'                    => 'bi bi-bootstrap-reboot',
            'resume'                    => 'bi bi-file-diff',
            'reset'                     => 'bi bi-arrow-repeat',
            'remove'                    => 'bi bi-x-lg',
            'reports'                   => 'bi bi-graph-up-arrow',
            'save'                      => 'bi bi-save2',
            'save2'                     => 'bi bi-check2-circle',
            'save3'                     => 'bi bi-check-lg',
            'save4'                     => 'bi bi-check2',
            'sections'                  => 'bi bi-puzzle',
            'services'                  => 'bi bi-tools',
            'service'                   => 'bi bi-hammer',
            'setting'                   => 'bi bi-wrench-adjustable',
            'settings'                  => 'bi bi-wrench-adjustable-circle',
            'skill'                     => 'bi bi-mortarboard',
            'sliders'                   => 'bi bi-sliders',
            'twitter'                   => 'bi bi-twitter',
            'stop'                      => 'bi bi-person-raised-hand',
            'tags'                      => 'bi bi-tags',
            'tag'                       => 'bi bi-tag',
            'template'                  => 'bi bi-code-slash',
            'testimonials'              => 'bi bi-vector-pen',
            'trash'                     => 'bi bi-trash3',
            'tools'                     => 'bi bi-tools',
            'title'                     => 'bi bi-signpost',
            'upload'                    => 'bi bi-cloud-upload',
            'user'                      => 'bi bi-person',
            'users'                     => 'bi bi-people',
            'view'                      => 'bi bi-eye',
            'website'                   => 'bi bi-globe-asia-australia',
            'welcome'                   => 'bi bi-megaphone',
            'warning'                   => 'bi bi-exclamation-triangle',
            'youtube'                   => 'bi bi-youtube',

        ];
        if ($all) {
            return $icon_list;
        } elseif (array_key_exists($icon_name, $icon_list)) {
            return $icon_list["$icon_name"];
        } else {
            return $icon_list["default"];
        }
    }
}


/**
 * Created strConversion function convert string as required
 * @param string $string null
 * @param string $type ucfirst
 * @param bool $remove_dash false
 * @param bool $is_file false
 * @return string
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
if (!function_exists('strConversion')) {
    function strConversion(string $string = null, string $type = 'ucfirst', bool $remove_dash = false, bool $is_file = false)
    {
        $string = strtolower(trim($string));
        if ($remove_dash) {
            $string = str_replace('_', ' ', $string);
            $string = str_replace('-', ' ', $string);
        }
        if ($is_file) {
            $string = str_ireplace(" ", "_", $string);
        }

        $string = $type($string);
        return $string;
    }
}

/**
 * osRelevantFileUploadPath this function will format upload absolute path on any type of operating system
 * @param string $path
 * @return string $path
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
if (!function_exists('osRelevantFileUploadPath')) {
    function osRelevantFileUploadPath($path)
    {
        $path = str_replace('\\', '/',  $path);
        $path = str_replace('///', '/', $path);
        $path = str_replace('//', '/', $path);
        $path = str_replace('\/', '/', $path);
        return $path;
    }
}


/**
 * subString function returns specific length of characters
 * @param string $str
 * @param int $length 50
 * @param bool $dots true
 * @param string $convert
 * @return string $str
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
if (!function_exists('subString')) {
    function subString(string $str, int $length = 50, bool $dots = false, string $convert = '')
    {
        if (strlen($str) > $length) {
            $str = substr($str, 0, $length);
            ## Remove breaking words
            if (str_word_count($str) > 1) {
                $last_whitespace_position = strrpos($str, ' ');
                $str = substr($str, 0, $last_whitespace_position);
            }
            ## Add dots
            if ($dots) {
                $str .= "...";
            }
        }

        ## Convert string 
        if (!empty($convert)) {
            $str = $convert($str);
        }

        return $str;
    }
}

/**
 * localList function returns all available locals or a specific local
 * @param string $localKey [Key of available local
 * @return mixed
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
if (!function_exists('localList')) {
    function localList(string $localKey = ''): mixed
    {
        $locals = [
            'en' => 'English',
            'bd' => 'বাংলা',
            'my' => 'Malay'
        ];
        if (array_key_exists($localKey, $locals)) {
            return $locals[$localKey];
        }
        return $locals;
    }
}

/**
 * generateHexColor function generate a random hexadecimal color code
 * @param string $localKey [Key of available local
 * @return mixed
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
if (!function_exists('generateHexColor')) {
    function generateHexColor(): string
    {
        ## Generate a random RGB color
        $red = mt_rand(0, 255);
        $green = mt_rand(0, 255);
        $blue = mt_rand(0, 255);

        ## Convert RGB to hexadecimal
        $hexColor = sprintf("%02x%02x%02x", $red, $green, $blue);

        return $hexColor;
    }
}
