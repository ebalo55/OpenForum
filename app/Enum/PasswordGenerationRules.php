<?php

namespace App\Enum;

use App\Trait\SerializableEnum;

/**
 * @method static string FIRST_NAME()
 * @method static string LAST_NAME()
 * @method static string FIRST_LETTER_OF_NAME()
 * @method static string LAST_LETTER_OF_NAME()
 * @method static string FIRST_LETTER_OF_LAST_NAME()
 * @method static string LAST_LETTER_OF_LAST_NAME()
 * @method static string BIRTH_DATE()
 * @method static string BIRTH_MONTH()
 * @method static string BIRTH_YEAR()
 * @method static string FORUM_YEAR()
 * @method static string EQUAL()
 * @method static string DASH()
 * @method static string UNDERSCORE()
 * @method static string AT()
 * @method static string DOT()
 * @method static string AND ()
 * @method static string PIPE()
 * @method static string PLUS()
 * @method static string STAR()
 * @method static string COMMA()
 * @method static string DOLLAR()
 * @method static string DOUBLE_QUOTE()
 * @method static string QUOTE()
 * @method static string EXCLAMATION_MARK()
 * @method static string QUESTION_MARK()
 */
enum PasswordGenerationRules: string {
    use SerializableEnum;

    case FIRST_NAME                = "first_name";
    case LAST_NAME                 = "last_name";
    case FIRST_LETTER_OF_NAME      = "first_letter_of_name";
    case LAST_LETTER_OF_NAME       = "last_letter_of_name";
    case FIRST_LETTER_OF_LAST_NAME = "first_letter_of_last_name";
    case LAST_LETTER_OF_LAST_NAME  = "last_letter_of_last_name";
    case BIRTH_DATE                = "birth_date";
    case BIRTH_MONTH               = "birth_month";
    case BIRTH_YEAR                = "birth_year";
    case FORUM_YEAR                = "forum_year";
    case DASH                      = "dash";
    case UNDERSCORE                = "underscore";
    case AT                        = "at";
    case DOT                       = "dot";
    case AND                       = "and";
    case PIPE                      = "pipe";
    case PLUS                      = "plus";
    case STAR                      = "star";
    case COMMA                     = "comma";
    case DOLLAR                    = "dollar";
    case DOUBLE_QUOTE              = "double_quote";
    case QUOTE                     = "quote";
    case EXCLAMATION_MARK          = "exclamation_mark";
    case QUESTION_MARK             = "question_mark";
    case EQUAL                     = "equal";
}
