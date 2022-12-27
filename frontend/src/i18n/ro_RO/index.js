/*
 * index.js
 * Copyright (c) 2022 fazilc.dev@gmail.com
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

export default {
    "config": {
        "html_language": "ro",
        "month_and_day_fns": "MMMM d, y"
    },
    "form": {
        "name": "Nume",
        "amount_min": "Suma minim\u0103",
        "amount_max": "suma maxim\u0103",
        "url": "URL",
        "title": "Titlu",
        "first_date": "Prima dat\u0103",
        "repetitions": "Repet\u0103ri",
        "description": "Descriere",
        "iban": "IBAN",
        "skip": "Sari peste",
        "date": "Dat\u0103"
    },
    "list": {
        "name": "Nume",
        "account_number": "Account number",
        "currentBalance": "Sold curent",
        "lastActivity": "Ultima activitate",
        "active": "Este activ?"
    },
    "breadcrumbs": {
        "placeholder": "[Placeholder]",
        "budgets": "Budgets",
        "subscriptions": "Subscriptions",
        "transactions": "Transactions",
        "title_expenses": "Expenses",
        "title_withdrawal": "Expenses",
        "title_revenue": "Revenue \/ income",
        "title_deposit": "Revenue \/ income",
        "title_transfer": "Transfers",
        "title_transfers": "Transfers",
        "asset_accounts": "Asset accounts",
        "expense_accounts": "Expense accounts",
        "revenue_accounts": "Revenue accounts",
        "liabilities_accounts": "Liabilities"
    },
    "firefly": {
        "actions": "Ac\u021biuni",
        "edit": "Editeaz\u0103",
        "delete": "\u0218terge",
        "reconcile": "Reconcilia",
        "create_new_asset": "Crea\u021bi un nou cont de active",
        "confirm_action": "Confirm action",
        "new_budget": "Buget nou",
        "new_asset_account": "Cont nou de activ",
        "newTransfer": "Transfer nou",
        "submission_options": "(firefly.submission_options)",
        "apply_rules_checkbox": "(firefly.apply_rules_checkbox)",
        "fire_webhooks_checkbox": "(firefly.fire_webhooks_checkbox)",
        "newDeposit": "Depozit nou",
        "newWithdrawal": "Cheltuieli noi",
        "bills_paid": "Facturile pl\u0103tite",
        "left_to_spend": "Ramas de cheltuit",
        "no_budget": "(nici un buget)",
        "budgeted": "Bugetat",
        "spent": "Cheltuit",
        "no_bill": "(f\u0103r\u0103 factur\u0103)",
        "rule_trigger_source_account_starts_choice": "Numele contului surs\u0103 \u00eencepe cu..",
        "rule_trigger_source_account_ends_choice": "Numele contului surs\u0103 se termin\u0103 cu..",
        "rule_trigger_source_account_is_choice": "Numele contului surs\u0103 este..",
        "rule_trigger_source_account_contains_choice": "Numele contului surs\u0103 con\u021bine..",
        "rule_trigger_account_id_choice": "Either account ID is exactly..",
        "rule_trigger_source_account_id_choice": "ID-ul contului surs\u0103 este exact..",
        "rule_trigger_destination_account_id_choice": "ID-ul contului destina\u021biei este exact..",
        "rule_trigger_account_is_cash_choice": "Either account is cash",
        "rule_trigger_source_is_cash_choice": "Contul surs\u0103 este (numerar)",
        "rule_trigger_destination_is_cash_choice": "Contul destina\u021biei este (numerar)",
        "rule_trigger_source_account_nr_starts_choice": "Num\u0103rul contului surs\u0103\/IBAN \u00eencepe cu..",
        "rule_trigger_source_account_nr_ends_choice": "Num\u0103rul contului surs\u0103\/ IBAN se \u00eencheie cu..",
        "rule_trigger_source_account_nr_is_choice": "Num\u0103rul contului surs\u0103\/ IBAN este..",
        "rule_trigger_source_account_nr_contains_choice": "Num\u0103rul contului surs\u0103\/ IBAN con\u021bine..",
        "rule_trigger_destination_account_starts_choice": "Numele contului de destina\u021bie \u00eencepe cu..",
        "rule_trigger_destination_account_ends_choice": "Numele contului de destina\u021bie se \u00eencheie cu..",
        "rule_trigger_destination_account_is_choice": "Numele contului destina\u021bie este..",
        "rule_trigger_destination_account_contains_choice": "Numele contului destina\u021biei con\u021bine..",
        "rule_trigger_destination_account_nr_starts_choice": "Num\u0103rul contului destina\u021biei\/IBAN \u00eencepe cu..",
        "rule_trigger_destination_account_nr_ends_choice": "Num\u0103rul contului de destina\u021bie\/IBAN se \u00eencheie cu..",
        "rule_trigger_destination_account_nr_is_choice": "Num\u0103rul contului destina\u021biei\/IBAN este..",
        "rule_trigger_destination_account_nr_contains_choice": "Num\u0103rul contului de destina\u021bie\/IBAN con\u021bine..",
        "rule_trigger_transaction_type_choice": "Tranzac\u021bia este de tip..",
        "rule_trigger_category_is_choice": "Categoria este..",
        "rule_trigger_amount_less_choice": "Suma este mai mic\u0103 dec\u00e2t..",
        "rule_trigger_amount_is_choice": "Amount is..",
        "rule_trigger_amount_more_choice": "Suma este mai mare dec\u00e2t..",
        "rule_trigger_description_starts_choice": "Descrierea \u00eencepe cu..",
        "rule_trigger_description_ends_choice": "Descrierea se termin\u0103 cu..",
        "rule_trigger_description_contains_choice": "Descrierea con\u021bine..",
        "rule_trigger_description_is_choice": "Descrierea este..",
        "rule_trigger_date_on_choice": "Transaction date is..",
        "rule_trigger_date_before_choice": "Data tranzac\u021biei este dinainte..",
        "rule_trigger_date_after_choice": "Data tranzac\u021biei este dup\u0103..",
        "rule_trigger_created_at_on_choice": "Transaction was made on..",
        "rule_trigger_updated_at_on_choice": "Transaction was last edited on..",
        "rule_trigger_budget_is_choice": "Bugetul este..",
        "rule_trigger_tag_is_choice": "Any tag is..",
        "rule_trigger_currency_is_choice": "Moneda tranzac\u021biei este..",
        "rule_trigger_foreign_currency_is_choice": "Tranzac\u021bia valutar\u0103 este..",
        "rule_trigger_has_attachments_choice": "Are cel pu\u021bin at\u00e2tea ata\u0219amente",
        "rule_trigger_has_no_category_choice": "Nu are nici o categorie",
        "rule_trigger_has_any_category_choice": "Are o (orice) categorie",
        "rule_trigger_has_no_budget_choice": "Nu are niciun buget",
        "rule_trigger_has_any_budget_choice": "Are un (orice) buget",
        "rule_trigger_has_no_bill_choice": "Nu are factur\u0103",
        "rule_trigger_has_any_bill_choice": "Are o (orice) factur\u0103",
        "rule_trigger_has_no_tag_choice": "Nu are etichet\u0103 (e)",
        "rule_trigger_has_any_tag_choice": "Are una sau mai multe etichete",
        "rule_trigger_any_notes_choice": "Are (orice) noti\u021be",
        "rule_trigger_no_notes_choice": "Nu are noti\u021be",
        "rule_trigger_notes_is_choice": "Notes are..",
        "rule_trigger_notes_contains_choice": "Notes contain..",
        "rule_trigger_notes_starts_choice": "Notes start with..",
        "rule_trigger_notes_ends_choice": "Notes end with..",
        "rule_trigger_bill_is_choice": "Factura este..",
        "rule_trigger_external_id_is_choice": "External ID is..",
        "rule_trigger_internal_reference_is_choice": "Internal reference is..",
        "rule_trigger_journal_id_choice": "ID-ul jurnalului de tranzac\u021bie este..",
        "rule_trigger_any_external_url_choice": "Transaction has an external URL",
        "rule_trigger_no_external_url_choice": "Transaction has no external URL",
        "rule_trigger_id_choice": "Transaction ID is..",
        "rule_action_delete_transaction_choice": "DELETE transaction(!)",
        "rule_action_set_category_choice": "Set category to ..",
        "rule_action_clear_category_choice": "\u0218terge\u021bi any category",
        "rule_action_set_budget_choice": "Set budget to ..",
        "rule_action_clear_budget_choice": "\u0218terge\u021bi any budget",
        "rule_action_add_tag_choice": "Add tag ..",
        "rule_action_remove_tag_choice": "Remove tag ..",
        "rule_action_remove_all_tags_choice": "Elimina\u021bi toate etichetele",
        "rule_action_set_description_choice": "Set description to ..",
        "rule_action_update_piggy_choice": "Add \/ remove transaction amount in piggy bank ..",
        "rule_action_append_description_choice": "Append description with ..",
        "rule_action_prepend_description_choice": "Prepend description with ..",
        "rule_action_set_source_account_choice": "Set source account to ..",
        "rule_action_set_destination_account_choice": "Set destination account to ..",
        "rule_action_append_notes_choice": "Append notes with ..",
        "rule_action_prepend_notes_choice": "Prepend notes with ..",
        "rule_action_clear_notes_choice": "Elimina\u021bi orice noti\u021b\u0103",
        "rule_action_set_notes_choice": "Set notes to ..",
        "rule_action_link_to_bill_choice": "Link to a bill ..",
        "rule_action_convert_deposit_choice": "Transforma\u021bi tranzac\u021bia \u00eentr-un depozit",
        "rule_action_convert_withdrawal_choice": "Transforma\u021bi tranzac\u021bia \u00eentr-o retragere",
        "rule_action_convert_transfer_choice": "Transforma\u021bi tranzac\u021bia \u00eentr-un transfer",
        "placeholder": "[Placeholder]",
        "recurrences": "Tranzac\u021bii recurente",
        "title_expenses": "Cheltuieli",
        "title_withdrawal": "Cheltuieli",
        "title_revenue": "Venituri",
        "pref_1D": "O zi",
        "pref_1W": "O saptam\u00e2n\u0103",
        "pref_1M": "O lun\u0103",
        "pref_3M": "Trei luni (trimestru)",
        "pref_6M": "\u0218ase luni",
        "pref_1Y": "Un an",
        "repeat_freq_yearly": "anual",
        "repeat_freq_half-year": "fiecare jum\u0103tate de an",
        "repeat_freq_quarterly": "trimestrial",
        "repeat_freq_monthly": "lunar",
        "repeat_freq_weekly": "s\u0103pt\u0103m\u00e2nal",
        "single_split": "\u00cemparte",
        "asset_accounts": "Conturile de active",
        "expense_accounts": "Conturi de cheltuieli",
        "liabilities_accounts": "Provizioane",
        "undefined_accounts": "Accounts",
        "name": "Nume",
        "revenue_accounts": "Conturi de venituri",
        "description": "Descriere",
        "category": "Categorie",
        "title_deposit": "Venituri",
        "title_transfer": "Transferuri",
        "title_transfers": "Transferuri",
        "piggyBanks": "Pu\u0219culi\u021b\u0103",
        "rules": "Reguli",
        "accounts": "Conturi",
        "categories": "Categorii",
        "tags": "Etichete",
        "object_groups_page_title": "Grupuri",
        "reports": "Rapoarte",
        "webhooks": "Webhook-uri",
        "currencies": "Monede",
        "administration": "Administrare",
        "profile": "Profil",
        "source_account": "Contul surs\u0103",
        "destination_account": "Contul de destina\u021bie",
        "amount": "Sum\u0103",
        "date": "Dat\u0103",
        "time": "Timp",
        "preferences": "Preferin\u021be",
        "transactions": "Tranzac\u021bii",
        "balance": "Balant\u0103",
        "budgets": "Buget",
        "subscriptions": "Subscriptions",
        "welcome_back": "Ce se red\u0103?",
        "bills_to_pay": "Facturile de plat\u0103",
        "net_worth": "Valoarea net\u0103",
        "pref_last365": "Last year",
        "pref_last90": "Last 90 days",
        "pref_last30": "Last 30 days",
        "pref_last7": "Last 7 days",
        "pref_YTD": "Year to date",
        "pref_QTD": "Quarter to date",
        "pref_MTD": "Month to date"
    }
}
