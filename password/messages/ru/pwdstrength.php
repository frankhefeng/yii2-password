<?php

/**
 * Message translations for \kartik\password\StrengthValidator.
 *
 * It contains the localizable messages extracted from source code.
 * You may modify this file by translating the extracted messages.
 *
 * Each array element represents the translation (value) of a message (key).
 * If the value is empty, the message is considered as not translated.
 * Messages that no longer need translation will have their translations
 * enclosed between a pair of '@@' marks.
 *
 * Message string can be used with plural forms format. Check i18n section
 * of the guide for details.
 *
 * NOTE: this file must be saved in UTF-8 encoding.
 */
return [
    '{attribute} should contain at least {n, plural, one{one character} other{# characters}} ({found} found)!' =>
    '{attribute} должен содержать {n, plural, one{хотя бы один символ} other{как минимум # знака}} ({found} найдено)!',
    '{attribute} should contain at most {n, plural, one{one character} other{# characters}} ({found} found)!' =>
    '{attribute} должен содержать {n, plural, one{не более одного символа} other{не более # символов}} ({found} найдено)!',
    '{attribute} should contain exactly {n, plural, one{one character} other{# characters}} ({found} found)!' =>
    '{attribute} должен содержать {n, plural, one{хотя бы один символ} other{ровно # символов}} ({found} найдено)!',
    '{attribute} cannot contain the username' => '{attribute} не может содержать имя пользователя',
    '{attribute} cannot contain an email address' => '{attribute} не может содержать адрес электронной почты',
    '{attribute} must be a string' => '{attribute} должен быть строкой',
    '{attribute} should contain at least {n, plural, one{one lower case character} other{# lower case characters}} ({found} found)!' =>
    '{attribute} должен содержать {n, plural, one{по крайней мере одну строчную характер} other{не менее # строчные символы}} ({found} найдено)!',
    '{attribute} should contain at least {n, plural, one{one upper case character} other{# upper case characters}} ({found} found)!' =>
    '{attribute} должен содержать {n, plural, one{по крайней мере один символ верхнего регистра} other{не менее # символы верхнего регистра}} ({found} найдено)!',
    '{attribute} should contain at least {n, plural, one{one numeric / digit character} other{# numeric / digit characters}} ({found} found)!' =>
    '{attribute} должен содержать {n, plural, one{не менее одного цифрового / цифровой символ} other{не менее # числовое / значные символы}} ({found} найдено)!',
    '{attribute} should contain at least {n, plural, one{one special character} other{# special characters}} ({found} found)!' =>
    '{attribute} должен содержать {n, plural, one{по крайней мере один специальный символ} other{не менее # специальные символы}} ({found} найдено)!'
];
