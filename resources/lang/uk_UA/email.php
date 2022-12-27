<?php

/**
 * email.php
 * Copyright (c) 2019 fazilc.dev@gmail.com
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    // common items
    'greeting'                                => 'Привіт,',
    'closing'                                 => 'Біп боп,',
    'signature'                               => 'Поштовий робот Firefly III',
    'footer_ps'                               => 'PS: Це повідомлення було надіслано, оскільки надійшов запит з IP :ipAddress.',

    // admin test
    'admin_test_subject'                      => 'Тестове повідомлення з вашого додатку Firefly III',
    'admin_test_body'                         => 'Це тестове повідомлення з вашого додатку Firefly III. Воно було надіслано на :email.',

    // invite
    'invitation_created_subject'              => 'Запрошення створено',
    'invitation_created_body'                 => 'Адміністратор ":email" створив запрошення для користувача з адресою електронної пошти ":invitee. Запрошення буде дійсне протягом 48 годин.',
    'invite_user_subject'                     => 'Вас запросили створити обліковий запис Firefly III.',
    'invitation_introduction'                 => 'Вас запросили створити обліковий запис Firefly III на **:host**. Firefly III - персональний, приватний менеджер фінансів, розміщуваний на власному сервері. Всі круті хлопці використовують його.',
    'invitation_invited_by'                   => 'Ви були запрошені ":admin" і це запрошення було відправлено ":invitee". Це ви, так?',
    'invitation_url'                          => 'Запрошення дійсне протягом 48 годин і може бути використане на [Firefly III](:url). Насолоджуйтесь!',

    // new IP
    'login_from_new_ip'                       => 'Новий вхід в Firefly III',
    'slack_login_from_new_ip'                 => 'Новий вхід на Firefly III з IP :ip (:host)',
    'new_ip_body'                             => 'Firefly III зафіксував новий вхід в ваш аккаунт з невідомої IP-адреси. Якщо ви не авторизовувались в системі з IP-адреси, вказаної нижче, або з часу останньої авторизації пройшло більше шести місяців, Firefly III попередить вас.',
    'new_ip_warning'                          => 'Якщо ви впізнаєте цю IP-адресу або цей логін, ви можете проігнорувати це повідомлення. Якщо ви не увійшли, якщо не маєте жодного уявлення про те, що відбувається, перевірте чи в безпеці ваш пароль, змініть його та закрийте всі інші сесії. Для цього перейдіть на сторінку вашого профілю. Звичайно, ви вже увімкнули двофакторну авторизацію, чи не так? Залишайтеся у безпеці!',
    'ip_address'                              => 'IP-адреса',
    'host_name'                               => 'Хост',
    'date_time'                               => 'Дата + час',

    // access token created
    'access_token_created_subject'            => 'Створено новий токен доступу',
    'access_token_created_body'               => 'Хтось (сподіваюся, ви) щойно створив новий токен доступу Firefly III API для вашого облікового запису.',
    'access_token_created_explanation'        => 'З цим токеном вони отримають доступ до **всіх** ваших фінансових операцій через Firefly III API.',
    'access_token_created_revoke'             => 'Якщо це були не ви, будь ласка, відкличте цей токен якомога швидше через :url',

    // registered
    'registered_subject'                      => 'Вітаємо у Firefly III!',
    'registered_subject_admin'                => 'Зареєстровано нового користувача',
    'admin_new_user_registered'               => 'Зареєстровано нового користувача. Користувачу **:email** був наданий ID користувача #:id.',
    'registered_welcome'                      => 'Ласкаво просимо до [Firefly III](:address). Цей лист підтверджує, що ваша реєстрація була успішною. Ура!',
    'registered_pw'                           => 'Якщо ви забули пароль, то відновіть його за допомогою [засобу скидання пароля](:address/password/reset).',
    'registered_help'                         => 'У правому верхньому куті кожної сторінки є іконка довідки. Якщо вам потрібна допомога, натисніть на неї!',
    'registered_doc_html'                     => 'Якщо ви ще цього не зробили, будь ласка, прочитайте [основну теорію](https://docs.firefly-ii/personal-finances).',
    'registered_doc_text'                     => 'Якщо ви ще цього не зробили, будь ласка, прочитайте також перший посібник і повний опис.',
    'registered_closing'                      => 'Насолоджуйтесь!',
    'registered_firefly_iii_link'             => 'Firefly III:',
    'registered_pw_reset_link'                => 'Зміна пароля:',
    'registered_doc_link'                     => 'Документація:',

    // new version
    'new_version_email_subject'               => 'Доступна нова версія Firefly III',

    // email change
    'email_change_subject'                    => 'Вашу електронну адресу змінено',
    'email_change_body_to_new'                => 'Ви або хтось, хто має доступ до вашого облікового запису Firefly III змінив/-ла вашу адресу електронної пошти. Якщо ви не очікували цього повідомлення, проігноруйте та видаліть його.',
    'email_change_body_to_old'                => 'Ви або хтось, хто має доступ до вашого облікового запису Firefly III змінив/-ла вашу адресу електронної пошти. Якщо ви цього не очікували, ви **повинні** перейти на "undo"-link нижче, щоб захистити свій обліковий запис!',
    'email_change_ignore'                     => 'Якщо ви викликали ці зміни, ви можете проігнорувати це повідомлення.',
    'email_change_old'                        => 'Попередня адреса електронної пошти: :email',
    'email_change_old_strong'                 => 'Попередня адреса електронної пошти::email',
    'email_change_new'                        => 'Нова адреса електронної пошти::email',
    'email_change_new_strong'                 => 'Нова адреса електронної пошти:**:email**',
    'email_change_instructions'               => 'Ви не можете користуватися Firefly III, доки не підтвердите зміни. Будь ласка, перейдіть за посиланням нижче, щоб це зробити.',
    'email_change_undo_link'                  => 'Щоб скасувати зміни, перейдіть за цим посиланням:',

    // OAuth token created
    'oauth_created_subject'                   => 'Новий обліковий запис було створено',
    'oauth_created_body'                      => 'Хтось (сподіваюся, ви) щойно створив новий клієнт API Firefly III для вашого облікового запису. Зазначено ":name" та має посилання `:url`.',
    'oauth_created_explanation'               => 'З цим токеном вони мають доступ до **всіх** ваших фінансових операцій через Firefly III API.',
    'oauth_created_undo'                      => 'Якщо це були не ви, будь ласка, відкличте цей токен якомога швидше через:url',

    // reset password
    'reset_pw_subject'                        => 'Запит скидання пароля',
    'reset_pw_instructions'                   => 'Хтось намагався скинути ваш пароль. Якщо це були ви, будь ласка, перейдіть за посиланням нижче для зміни пароля.',
    'reset_pw_warning'                        => '**Будь ласка** переконайться, що посилання дійсно переходить до Firefly III!',

    // error
    'error_subject'                           => 'Помилка у Firefly III',
    'error_intro'                             => 'У Firefly III v:version отримано помилку: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                              => 'Помилка типу ":class".',
    'error_timestamp'                         => 'Сталася помилка о :time.',
    'error_location'                          => 'Ця помилка сталася у файлі <span style="font-family: monospace;">:file</span> в рядку :line з кодом :code.',
    'error_user'                              => 'Сталася помилка користувача #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                           => 'Не знайдено жодного користувача, пов\'язвного з цією помилкою, або ж користувача не виявлено.',
    'error_ip'                                => 'IP-адреса, пов\'язана з цією помилкою: :ip',
    'error_url'                               => 'URL-адреса: :url',
    'error_user_agent'                        => 'Користувач: :userAgent',
    'error_stacktrace'                        => 'Вся інформація про помилку нижче. Якщо ви вважаєте, що це помилка у Firefly III, ви можете переслати це повідомлення до <a href="mailto:fazilc.dev@gmail.com?subject=BUG!">james@firefly-ii. rg</a>. Це може допомогти виправити помилку, з якою ви щойно стикнулися.',
    'error_github_html'                       => 'Якщо бажаєте, ви також можете відкрити нове звернення в <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                       => 'Якщо бажаєте, ви також можете відкрити нове звернення на https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                  => 'Повна інформація про помилку нижче:',
    'error_headers'                           => 'Наступні заголовки також можуть підходити:',

    // report new journals
    'new_journals_subject'                    => 'Firefly III створив нову операцію|Firefly III створив :count нових операцій',
    'new_journals_header'                     => 'Firefly III створив для вас операцію. Ви можете знайти його у вашому додатку Firefly III:|Firefly III створив для вас :count операцій. Ви можете знайти їх у вашому додатку Firefly ІІІ:',

    // bill warning
    'bill_warning_subject_end_date'           => 'Сплатіть ваш рахунок ":name" не пізніше :diff днів',
    'bill_warning_subject_now_end_date'       => 'Сплатіть ваш рахунок ":name" СЬОГОДНІ',
    'bill_warning_subject_extension_date'     => 'Строк сплати вашого рахунку ":name" має бути подовжений або скасований через :diff днів',
    'bill_warning_subject_now_extension_date' => 'Строк сплати вашого рахунку ":name" має бути подовжений або скасований СЬОГОДНІ',
    'bill_warning_end_date'                   => 'Строк сплати вашого рахунку **":name"** :date. Залишилося приблизно **:diff днів**.',
    'bill_warning_extension_date'             => 'Строк сплати вашого рахунку **":name"** має бути продовжений або скасований до :date. Залишилося приблизно **:diff днів**.',
    'bill_warning_end_date_zero'              => 'Строк сплати вашого рахунку **":name"** :date. Це **СЬОГОДНІ!**',
    'bill_warning_extension_date_zero'        => 'Строк сплати вашого рахунку **":name"** має бути подовжено або скасовано до :date. Це **СЬОГОДНІ!**',
    'bill_warning_please_action'              => 'Будь ласка, оберіть відповідну дію.',

];
