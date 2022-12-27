<?php

/**
 * form.php
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
    // new user:
    'bank_name'                   => '支払い銀行名',
    'bank_balance'                => '残高',
    'savings_balance'             => '貯金残高',
    'credit_card_limit'           => 'クレジットカード上限額',
    'automatch'                   => '自動的に一致',
    'skip'                        => 'スキップ',
    'enabled'                     => '有効',
    'name'                        => '名称',
    'active'                      => '有効',
    'amount_min'                  => '最低額',
    'amount_max'                  => '上限額',
    'match'                       => '一致',
    'strict'                      => '厳密モード',
    'repeat_freq'                 => '繰り返し',
    'object_group'                => 'グループ',
    'location'                    => '場所',
    'update_channel'              => 'チャンネルを更新',
    'currency_id'                 => '通貨',
    'transaction_currency_id'     => '通貨',
    'auto_budget_currency_id'     => '通貨',
    'external_ip'                 => 'サーバーの外部IPアドレス',
    'attachments'                 => '添付ファイル',
    'BIC'                         => 'BIC',
    'verify_password'             => 'パスワードの安全性確認',
    'source_account'              => '支出元口座',
    'destination_account'         => '送金先の口座',
    'asset_destination_account'   => '送金先の口座',
    'include_net_worth'           => '純資産に含める',
    'asset_source_account'        => '支出元口座',
    'journal_description'         => '説明',
    'note'                        => '備考',
    'currency'                    => '通貨',
    'account_id'                  => '資産口座',
    'budget_id'                   => '予算',
    'bill_id'                     => '請求',
    'opening_balance'             => '開始残高',
    'tagMode'                     => 'タグモード',
    'virtual_balance'             => '仮想残高',
    'targetamount'                => '目標金額',
    'account_role'                => '口座の役割',
    'opening_balance_date'        => '残高開始日',
    'cc_type'                     => 'クレジットカードの支払い方法',
    'cc_monthly_payment_date'     => 'クレジットカードの引き落とし日',
    'piggy_bank_id'               => '貯金箱',
    'returnHere'                  => 'ここへ戻る',
    'returnHereExplanation'       => '保存後、ここに戻って別のものを作成する。',
    'returnHereUpdateExplanation' => '保存後、ここへ戻る。',
    'description'                 => '説明',
    'expense_account'             => '支出口座',
    'revenue_account'             => '収入口座',
    'decimal_places'              => '小数点以下の桁',
    'destination_amount'          => '金額 (宛先)',
    'new_email_address'           => '新しいメールアドレス',
    'verification'                => '認証',
    'api_key'                     => 'APIキー',
    'remember_me'                 => 'ログインを維持',
    'liability_type_id'           => '債務種別',
    'liability_type'              => '債務種別',
    'interest'                    => '利息',
    'interest_period'             => '利息期間',
    'extension_date'              => '延長日',
    'type'                        => '種別',
    'convert_Withdrawal'          => '出金を変換',
    'convert_Deposit'             => '出金を変換',
    'convert_Transfer'            => '送金を変換',
    'amount'                      => '金額',
    'foreign_amount'              => '外貨金額',
    'date'                        => '日付',
    'interest_date'               => '利息日',
    'book_date'                   => '記帳日',
    'process_date'                => '処理日',
    'category'                    => 'カテゴリ',
    'tags'                        => 'タグ',
    'deletePermanently'           => '完全に削除',
    'cancel'                      => 'キャンセル',
    'targetdate'                  => '目標日付',
    'startdate'                   => '開始日',
    'tag'                         => 'タグ',
    'under'                       => '下',
    'symbol'                      => '記号',
    'code'                        => 'コード',
    'iban'                        => 'IBAN',
    'account_number'              => '口座番号',
    'creditCardNumber'            => 'クレジットカード番号',
    'has_headers'                 => 'ヘッダー',
    'date_format'                 => '日付形式',
    'specifix'                    => '銀行またはファイル固有の修正',
    'attachments[]'               => '添付ファイル',
    'title'                       => 'タイトル',
    'notes'                       => '備考',
    'filename'                    => 'ファイル名',
    'mime'                        => 'Mimeタイプ',
    'size'                        => 'サイズ',
    'trigger'                     => 'トリガー',
    'stop_processing'             => '処理を停止',
    'start_date'                  => '期間の開始',
    'end_date'                    => '期間の終了',
    'enddate'                     => '終了日',
    'start'                       => '期間の開始',
    'end'                         => '期間の終了',
    'delete_account'              => '口座「:name」を削除',
    'delete_webhook'              => 'Delete webhook ":title"',
    'delete_bill'                 => '請求「:name」を削除',
    'delete_budget'               => '予算「:name」を削除',
    'delete_category'             => 'カテゴリ「:name」を削除',
    'delete_currency'             => '通貨「:name」を削除',
    'delete_journal'              => '説明「:description」がある取引を削除',
    'delete_attachment'           => '添付ファイル「:name」を削除',
    'delete_rule'                 => 'ルール「:title」を削除',
    'delete_rule_group'           => 'ルールグループ「:title」を削除',
    'delete_link_type'            => 'リンクタイプ「:name」を削除しました',
    'delete_user'                 => 'ユーザー「:email」を削除',
    'delete_recurring'            => '定期的な取引「:title」を削除',
    'user_areYouSure'             => 'ユーザー 「:email」 を削除すると、すべてが消去されます。元に戻すことはできません。 あなたが自分自身を削除すると、この Firefly III へのアクセスができなくなります。',
    'attachment_areYouSure'       => '添付ファイル「:name」を削除してもよろしいですか？',
    'account_areYouSure'          => 'アカウント「:name」を削除してもよろしいですか？',
    'account_areYouSure_js'       => 'アカウント「{name}」を削除してもよろしいですか？',
    'bill_areYouSure'             => '請求「:name」を削除してもよろしいですか？',
    'rule_areYouSure'             => 'ルール「:title」を削除してもよろしいですか？',
    'object_group_areYouSure'     => 'グループ「:title」を削除してもよろしいですか？',
    'ruleGroup_areYouSure'        => 'ルールグループ「:title」を削除してもよろしいですか？',
    'budget_areYouSure'           => '予算「:name」を削除してもよろしいですか？',
    'webhook_areYouSure'           => 'Are you sure you want to delete the webhook named ":title"?',
    'category_areYouSure'         => 'カテゴリ「:name」を削除してもよろしいですか？',
    'recurring_areYouSure'        => '定期的な取引「:title」を削除してもよろしいですか？',
    'currency_areYouSure'         => '通貨「:name」を削除してもよろしいですか？',
    'piggyBank_areYouSure'        => '貯金箱「:name」を削除してもよろしいですか？',
    'journal_areYouSure'          => '「:description」と説明されている取引を削除してもよろしいですか？',
    'mass_journal_are_you_sure'   => 'これらの取引を削除してもよろしいですか？',
    'tag_areYouSure'              => 'タグ「:tag」を削除してもよろしいですか？',
    'journal_link_areYouSure'     => '<a href=":source_link">:source</a> と <a href=":destination_link">:destination</a> の間のリンクを削除してもよろしいですか？',
    'linkType_areYouSure'         => 'リンクタイプ「:name (:inward/:outward)」を削除してもよろしいですか？',
    'permDeleteWarning'           => 'Firefly IIIからの削除は永久的で、元に戻すことはできません。',
    'mass_make_selection'         => 'チェックボックスを外せば、その項目が削除されないようにすることができます。',
    'delete_all_permanently'      => '選択した項目を永久に削除する',
    'update_all_journals'         => 'これらの取引を更新する',
    'also_delete_transactions'    => 'このアカウントに関連するただ一つの取引も削除されます。|このアカウントに関連する :count 件の取引も削除されます。',
    'also_delete_transactions_js' => '取引はありません|このアカウントに関連するただ一つの取引も削除されます。|このアカウントに関連する {count} 件の取引も削除されます。',
    'also_delete_connections'     => 'このリンクタイプにリンクするただ一つの取引の関連がなくなります。|このリンクタイプにリンクする :count 件の取引の関連がなくなります。',
    'also_delete_rules'           => 'このルールグループに関連するただ一つのルールも削除されます。|このルールグループに関連する :count 個のルールも削除されます。',
    'also_delete_piggyBanks'      => 'このアカウントに関連するただ一つの貯金箱も削除されます。|このアカウントに関連する :count 個の貯金箱も削除されます。',
    'also_delete_piggyBanks_js'   => '貯金箱はありません|このアカウントに関連するただ一つの貯金箱も削除されます。|このアカウントに関連する {count} 個の貯金箱も削除されます。',
    'not_delete_piggy_banks'      => 'このグループに関連する貯金箱lは削除されません。|このグループに関連する :count 個の貯金箱は削除されません。',
    'bill_keep_transactions'      => 'この請求に関連するただ一つの取引は削除されません。|この請求に関連する :count 件の取引は削除されません。',
    'budget_keep_transactions'    => 'この予算に関連するただ一つの取引は削除されません。|この予算に関連する :count 件の取引は削除されません。',
    'category_keep_transactions'  => 'このカテゴリに関連するただ一つ取引は削除されません。|このカテゴリに関連する :count 件の取引は削除されません。',
    'recurring_keep_transactions' => 'この定期的な取引によって生成された、ただ一つの取引は削除されません。|この定期的な取引によって生成された :count 件の取引は削除されません。',
    'tag_keep_transactions'       => 'このタグに関連するただ一つ取引は削除されません。|このタグに関連する :count 件の取引は削除されません。',
    'check_for_updates'           => 'アップデートの確認',
    'liability_direction'         => '債務の出入',
    'delete_object_group'         => 'グループ「:title」を削除',
    'email'                       => 'メールアドレス',
    'password'                    => 'パスワード',
    'password_confirmation'       => 'パスワード(確認)',
    'blocked'                     => 'ブロック済み',
    'blocked_code'                => 'ブロック理由',
    'login_name'                  => 'ログイン',
    'is_owner'                    => '管理者は？',
    'url'                         => 'URL',
    'bill_end_date'               => '終了日',

    // import
    'apply_rules'                 => 'ルールを適用',
    'artist'                      => 'アーティスト',
    'album'                       => 'アルバム',
    'song'                        => '曲',


    // admin
    'domain'                      => 'ドメイン',
    'single_user_mode'            => 'ユーザー登録を無効にする',
    'is_demo_site'                => 'デモサイトです',

    // import
    'configuration_file'          => '構成ファイル',
    'csv_comma'                   => 'コンマ (,)',
    'csv_semicolon'               => 'セミコロン (;)',
    'csv_tab'                     => 'タブ (非表示)',
    'csv_delimiter'               => 'CSV 区切り文字',
    'client_id'                   => 'クライアントID',
    'app_id'                      => 'アプリID',
    'secret'                      => 'シークレット',
    'public_key'                  => '公開鍵',
    'country_code'                => '国名コード',
    'provider_code'               => '銀行またはデータ提供会社',
    'fints_url'                   => 'FinTS API URL',
    'fints_port'                  => 'ポート',
    'fints_bank_code'             => '銀行コード',
    'fints_username'              => 'ユーザー名',
    'fints_password'              => 'PIN / パスワード',
    'fints_account'               => '資産形成口座',
    'local_account'               => 'Firefly III アカウント',
    'from_date'                   => '開始日',
    'to_date'                     => '終了日',
    'due_date'                    => '期日',
    'payment_date'                => '引き落とし日',
    'invoice_date'                => '領収書発行日',
    'internal_reference'          => '内部参照',
    'inward'                      => '内向きの説明',
    'outward'                     => '外向きの説明',
    'rule_group_id'               => 'ルールグループ',
    'transaction_description'     => '取引の説明',
    'first_date'                  => '最初の日付',
    'transaction_type'            => '取引種別',
    'repeat_until'                => '繰り返し期限',
    'recurring_description'       => '定期的な取引の説明',
    'repetition_type'             => '繰り返しの種類',
    'foreign_currency_id'         => '外貨',
    'repetition_end'              => 'リピート終了',
    'repetitions'                 => 'リピート',
    'calendar'                    => 'カレンダー',
    'weekend'                     => '週末',
    'client_secret'               => 'クライアントシークレット',
    'withdrawal_destination_id'   => '送信先の口座',
    'deposit_source_id'           => '支出元口座',
    'expected_on'                 => '予定日時',
    'paid'                        => '支払い済み',
    'auto_budget_type'            => '自動予算',
    'auto_budget_amount'          => '自動予算額',
    'auto_budget_period'          => '自動予算期間',
    'collected'                   => '受領済み',
    'submitted'                   => '送信済み',
    'key'                         => '鍵',
    'value'                       => '記録の内容',
    'webhook_delivery'            => 'Delivery',
    'webhook_response'            => 'Response',
    'webhook_trigger'             => 'Trigger',
];
