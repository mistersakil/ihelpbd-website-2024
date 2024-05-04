<?php

/**
 * _date_format function format date as user needs
 * @param string $date date('Y-m-d')
 * @param string $format "Y-m-d"
 * @return string $date
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */

if (!function_exists('_date_format')) {
    function _date_format($date = "date('Y-m-d')", $format = "Y-m-d")
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
            'blog'                      => 'bi bi-newspaper',
            'bell'                      => 'bi bi-bell',
            'bin'                       => 'bi bi-trash2',
            'business'                  => 'bi bi-building',
            'circle'                    => 'bi bi-circle',
            'clients'                   => 'bi bi-person-hearts',
            'cog'                       => 'bi bi-gear',
            'contact'                   => 'bi bi-envelope-open',
            'conversations'             => 'bi bi-person',
            'dashboard'                 => 'bi bi-speedometer2',
            'dark'                      => 'bi bi-lightbulb',
            'default'                   => 'bi bi-info-circle',
            'delete'                    => 'bi bi-trash3',
            'delete_all'                => 'bi bi-trash2',
            'email'                     => 'bi bi-envelope-at',
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
            'logout'                    => 'bi bi-box-arrow-right',
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
            'tags'                      => 'bi bi-tags',
            'tag'                       => 'bi bi-tag',
            'template'                  => 'bi bi-code-slash',
            'testimonials'              => 'bi bi-vector-pen',
            'trash'                     => 'bi bi-trash3',
            'tools'                     => 'bi bi-tools',
            'upload'                    => 'bi bi-cloud-upload',
            'user'                      => 'bi bi-person',
            'users'                     => 'bi bi-people',
            'view'                      => 'bi bi-eye',
            'website'                   => 'bi bi-globe-asia-australia',
            'welcome'                   => 'bi bi-megaphone',
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
 * Created _str_conversion function convert string as required
 * @param string $string null
 * @param string $type ucfirst
 * @param bool $remove_dash false
 * @param bool $is_file false
 * @return string
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
if (!function_exists('_str_conversion')) {
    function _str_conversion(string $string = null, string $type = 'ucfirst', bool $remove_dash = false, bool $is_file = false)
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
 * _os_relevant_file_upload_path this function will format upload absolute path on any type of operating system
 * @param string $path
 * @return string $path
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
if (!function_exists('_os_relevant_file_upload_path')) {
    function _os_relevant_file_upload_path($path)
    {
        $path = str_replace('\\', '/',  $path);
        $path = str_replace('///', '/', $path);
        $path = str_replace('//', '/', $path);
        $path = str_replace('\/', '/', $path);
        return $path;
    }
}

/**
 * _one_to_multi_array convert one dimensional array to multi dimensional array
 * @param array $array
 * @return array $new_array
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
if (!function_exists('_one_to_multi_array')) {
    function _one_to_multi_array(array $array, string $section = '')
    {
        $new_array = [];
        foreach ($array as $key => $value) {
            $item = ['type' => $key, 'value' => $value];
            if ($section) {
                $item['section'] = $section;
            }
            $new_array[] = $item;
        }
        return $new_array;
    }
}

/**
 * _sub_string function returns specific length of characters
 * @param string $str
 * @param int $length 50
 * @param bool $dots true
 * @param string $convert
 * @return string $str
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
if (!function_exists('_sub_string')) {
    function _sub_string(string $str, int $length = 50, bool $dots = false, string $convert = '')
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
