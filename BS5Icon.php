<?php
namespace GDO\Bootstrap5;

use GDO\UI\GDT_IconUTF8;

/**
 * Bootstrap5 icon provider.
 * @TODO actually write the renderer and do the mapping.
 * the current state is the font-awesome mapping and rendering.
 *
 * @author gizmore
 * @version 6.10.6
 * @since 6.10.6
 */
final class BS5Icon
{
    public static $MAP = array(
        'account' => 'address-card',
        'add' => 'plus',
        'alert' => 'bell',
        'all' => 'list',
        'arrow_down' => 'sort-down',
        'arrow_left' => 'arrow-left',
        'arrow_right' => 'arrow-right',
        'arrow_up' => 'sort-up',
        'audio' => 'itunes-note',
        'back' => 'arrow-left',
        'bank' => 'piggy-bank',
        'bars' => 'bars',
        'birthday' => 'birthday-cake',
        'block' => 'ban',
        'book' => 'book',
        'bulb' => 'lightbulb',
        'calendar' => 'calendar-alt',
        'captcha' => 'lock',
        'caret' => 'caret-right',
        'check' => 'check',
        'country' => 'flag',
        'create' => 'plus-circle',
        'credits' => 'credit-card',
        'cut' => 'cut',
        'delete' => 'minus-circle',
        'done' => 'check',
        'done_all' => 'check-double',
        'download' => 'download',
        'edit' => 'edit',
        'email' => 'envelope',
        'error' => 'exclamation-triangle',
        'face' => 'user',
        'female' => 'female',
        'file' => 'paperclip',
        'flag' => 'flag',
        'folder' => 'folder',
        'font' => 'font',
        'gender' => 'venus-mars',
        'group' => 'users',
        'guitar' => 'guitar',
        'help' => 'question-circle',
        'image' => 'image',
        'language' => 'language',
        'level' => 'trophy',
        'like' => 'thumbs-up',
        'link' => 'chain',
        'list' => 'th-list',
        'lock' => 'lock',
        'male' => 'male',
        'menu' => 'bars',
        'message' => 'comment-dots',
        'minus' => 'minus',
        'money' => 'money-bill',
        'password' => 'key',
        'pause' => 'pause-circle',
        'phone' => 'phone-office',
        'plus' => 'plus',
        'quote' => 'quote-left',
        'remove' => 'minus',
        'reply' => 'reply',
        'schedule' => 'clipboard-list',
        'search' => 'search',
        'settings' => 'cog',
        'star' => 'star',
        'table' => 'table',
        'tag' => 'tags',
        'table' => 'table',
        'thumbs_up' => 'thumbs-up',
        'thumbs_down' => 'thumbs-down',
        'thumbs_none' => 'hand-point-right',
        'time' => 'stopwatch',
        'title' => 'hashtag',
        'trophy' => 'trophy',
        'unicorn' => 'unicorn',
        'upload' => 'upload',
        'url' => 'link',
        'user' => 'user',
        'users' => 'users',
        'view' => 'eye',
        'wait' => 'alarm-clock',
    );
    
    public static function iconS($icon, $iconText, $style)
    {
//         if (!isset(self::$MAP[$icon]))
        {
            return GDT_IconUTF8::iconS($icon, $iconText, $style);
        }
//         return sprintf('<span class="gdo-icon gdo-fa-icon"%s><i class="%s fa-%s" title="%s"></i></span>',
//             $style, $fas, self::$MAP[$icon], $iconText);
    }
    
}
