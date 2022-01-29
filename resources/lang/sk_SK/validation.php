<?php

/**
 * validation.php
 * Copyright (c) 2019 james@firefly-iii.org
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
    'missing_where'                  => 'Array is missing "where"-clause',
    'missing_update'                 => 'Array is missing "update"-clause',
    'invalid_where_key'              => 'JSON contains an invalid key for the "where"-clause',
    'invalid_update_key'             => 'JSON contains an invalid key for the "update"-clause',
    'invalid_query_data'             => 'There is invalid data in the %s:%s field of your query.',
    'invalid_query_account_type'     => 'Your query contains accounts of different types, which is not allowed.',
    'invalid_query_currency'         => 'Your query contains accounts that have different currency settings, which is not allowed.',
    'iban'                           => 'Toto nie je platný IBAN.',
    'zero_or_more'                   => 'Hodnota nemôže byť záporná.',
    'date_or_time'                   => 'Je třeba, aby hodnota byla platné datum nebo čas (ve formátu dle normy ISO 8601).',
    'source_equals_destination'      => 'Zdrojový účet je zároveň cieľový.',
    'unique_account_number_for_user' => 'Zdá sa, že toto číslo účtu sa už používa.',
    'unique_iban_for_user'           => 'Vyzerá to tak, že tento IBAN kód sa už používa.',
    'deleted_user'                   => 'Z bezpečnostných dôvodov pre registráciu nemôžete použiť túto emailovú adresu.',
    'rule_trigger_value'             => 'Táto hodnota je pre označený spúšťač neplatná.',
    'rule_action_value'              => 'Táto hodnota je pre vybranú akciu neplatná.',
    'file_already_attached'          => 'Nahraný soubor ":name" je už k tomuto objektu pripojený.',
    'file_attached'                  => 'Soubor „:name“ úspěšně nahrán.',
    'must_exist'                     => 'Identifikátor v poli :attribute v databáze neexistuje.',
    'all_accounts_equal'             => 'Všetky účty v tomto poli musia byť zhodné.',
    'group_title_mandatory'          => 'Ak je tu viac než jedna transakcia, je potrebné vyplniť názov skupiny.',
    'transaction_types_equal'        => 'Všetky rozdelenia musia mať zhodný typ.',
    'invalid_transaction_type'       => 'Neplatný typ transakcie.',
    'invalid_selection'              => 'Váš výber je neplatný.',
    'belongs_user'                   => 'Táto hodnota nie je pre toto pole platná.',
    'at_least_one_transaction'       => 'Potrebujete aspoň jednu transakciu.',
    'at_least_one_repetition'        => 'Potrebujete aspoň jedno opakovanie.',
    'require_repeat_until'           => 'Vyžaduje buď niekoľko opakovaní alebo dátum ukončenia (repeat_until). Ne obidve.',
    'require_currency_info'          => 'Obsah tohto poľa je bez informácií o mene neplatný.',
    'not_transfer_account'           => 'Tento účet nie je účet, ktorý je možné použiť pre prevody.',
    'require_currency_amount'        => 'Obsah tohto poľa je bez informácie o cudzej mene neplatný.',
    'equal_description'              => 'Popis transakcie nesmie byť rovnaký ako globálny popis.',
    'file_invalid_mime'              => 'Súbor ":name" je typu ":mime", ktorý nie je pre nahrávanie schválený.',
    'file_too_large'                 => 'Súbor ":name" je príliš veľký.',
    'belongs_to_user'                => 'Hodnota :attribute nie je známa.',
    'accepted'                       => 'Atribút :attribute je potrebné potvrdiť.',
    'bic'                            => 'Toto nie je platný BIC.',
    'at_least_one_trigger'           => 'Pravidlo musí mať aspoň jeden spúšťač.',
    'at_least_one_action'            => 'Pravidlo musí obsahovať aspoň jednu akciu.',
    'base64'                         => 'Údaje nie sú v platnom kódovaní Base64.',
    'model_id_invalid'               => 'Zdá sa, že dané ID je pre tento model neplatné.',
    'less'                           => ':attribute musí byť menej než 10.000.000',
    'active_url'                     => ':attribute nie je platná adresa URL.',
    'after'                          => ':attribute musí byť neskôr, než :date.',
    'date_after'                     => 'Počiatočný dátum musí byť starší, než konečný dátum.',
    'alpha'                          => ':attribute môže obsahovať len písmená.',
    'alpha_dash'                     => ':attribute môže obsahovať len písmená, čísla a pomlčky.',
    'alpha_num'                      => ':attribute môže obsahovať len písmená a čísla.',
    'array'                          => ':attribute musí byť pole.',
    'unique_for_user'                => 'Položka s týmto :attribute už existuje.',
    'before'                         => ':attribute musí byť skôr než :date.',
    'unique_object_for_user'         => 'Tento názov sa už používa.',
    'unique_account_for_user'        => 'Tento názov účtu je už použitý.',
    'between.numeric'                => ':attribute musí byť v rozsahu :min a :max.',
    'between.file'                   => ':attribute musí byť v rozsahu :min a :max kilobajtov.',
    'between.string'                 => ':attribute musí mať dĺžku v rozsahu :min a :max znakov.',
    'between.array'                  => ':attribute musí mať medzi :min a :max položkami.',
    'boolean'                        => ':attribute musí mať hodnotu pravda alebo nepravda.',
    'confirmed'                      => 'Potvrdenie :attribute sa nezhoduje.',
    'date'                           => ':attribute nie je platný dátum.',
    'date_format'                    => ':attribute nezodpovedá formátu :format.',
    'different'                      => ':attribute a :other sa musia líšiť.',
    'digits'                         => ':attribute musí obsahovať :digits číslic.',
    'digits_between'                 => ':attribute musí byť v rozsahu :min a :max číslic.',
    'email'                          => ':attribute musí byť platná e-mailová adresa.',
    'filled'                         => 'Pole :attribute nesmie byť prázdne.',
    'exists'                         => 'Vybraný :attribute je neplatný.',
    'image'                          => ':attribute musí byť obrázok.',
    'in'                             => 'Vybraný :attribute je neplatný.',
    'integer'                        => ':attribute musí byť celé číslo.',
    'ip'                             => ':attribute musí byť platná IP adresa.',
    'json'                           => ':attribute musí byť platný JSON reťazec.',
    'max.numeric'                    => ':attribute nesmie byť viac než :max.',
    'max.file'                       => ':attribute nesmie byť viac než :max kilobajtov.',
    'max.string'                     => ':attribute nesmie byť viac než :max znakov.',
    'max.array'                      => ':attribute nesmie obsahovať viac než :max položiek.',
    'mimes'                          => ':attribute musí byť súbor typu: :values.',
    'min.numeric'                    => ':attribute musí byť minimálne :min.',
    'lte.numeric'                    => ':attribute musí byť nižší alebo rovný :value.',
    'min.file'                       => ':attribute musí byť minimálne :min kilobajtov.',
    'min.string'                     => ':attribute musí mať minimálne :min znakov.',
    'min.array'                      => ':attribute musí obsahovať minimálne :min položiek.',
    'not_in'                         => 'Vybraný :attribute je neplatný.',
    'numeric'                        => ':attribute musí byť číslo.',
    'numeric_native'                 => 'Suma v hlavnej mene musí byť číslo.',
    'numeric_destination'            => 'Cieľová suma musí byť číslo.',
    'numeric_source'                 => 'Zdrojová suma musí byť číslo.',
    'regex'                          => 'Formát :attribute je neplatný.',
    'required'                       => 'Pole :attribute je povinné.',
    'required_if'                    => ':attribute je povinné, ak :other je :value.',
    'required_unless'                => ':attribute je povinné, ak :other nie je :values.',
    'required_with'                  => ':attribute je povinné, ak sú zvolené :values.',
    'required_with_all'              => ':attribute je povinné, ak sú zvolené :values.',
    'required_without'               => ':attribute je povinné, ak nie sú zvolené :values.',
    'required_without_all'           => ':attribute je povinné, ak nie sú zvolené :values.',
    'same'                           => ':attribute a :other musia byť zhodné.',
    'size.numeric'                   => ':attribute musí byť :size.',
    'amount_min_over_max'            => 'Minimálna suma nemôže byť vyššia než maximálna suma.',
    'size.file'                      => ':attribute musí mať :size kilobajtov.',
    'size.string'                    => ':attribute musí mať :size znakov.',
    'size.array'                     => ':attribute musí obsahovať :size položiek.',
    'unique'                         => ':attribute už existuje.',
    'string'                         => ':attribute byť reťazec.',
    'url'                            => 'Formát :attribute je neplatný.',
    'timezone'                       => ':attribute musí byť platná zóna.',
    '2fa_code'                       => 'Pole :attribute je neplatné.',
    'dimensions'                     => ':attribute má neplatné rozmery obrázku.',
    'distinct'                       => 'Pole :attribute má duplicitnú hodnotu.',
    'file'                           => ':attribute musí byť súbor.',
    'in_array'                       => 'Pole :attribute v :other neexistuje.',
    'present'                        => 'Pole :attribute musí byť prítomné.',
    'amount_zero'                    => 'Celková suma nesmie byť nula.',
    'current_target_amount'          => 'Aktuálna suma musí být menšia, než cieľová suma.',
    'unique_piggy_bank_for_user'     => 'Názov pokladničky musí byť jedinečný.',
    'unique_object_group'            => 'Názov skupiny musí byť jedinečný',
    'starts_with'                    => 'Hodnota musí začínať :values.',
    'unique_webhook'                 => 'Webhook s týmito hodnotami už existuje.',
    'unique_existing_webhook'        => 'Iný webhook s týmito hodnotami už existuje.',
    'same_account_type'              => 'Oba účty musia mať rovnaký typ',
    'same_account_currency'          => 'Oba účty musia mať rovnakú menu',

    'secure_password'             => 'Toto nie je bezpečné heslo. Skúste iné. Viac se dozviete na http://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'   => 'Neplatný typ opakovania pre opakované transakcie.',
    'valid_recurrence_rep_moment' => 'Neplatný moment opakovania pre tento typ opakovania.',
    'invalid_account_info'        => 'Neplatná informácia o účte.',
    'attributes'                  => [
        'email'                   => 'e-mailová adresa',
        'description'             => 'popis',
        'amount'                  => 'suma',
        'transactions.*.amount'   => 'suma transakcie',
        'name'                    => 'názov',
        'piggy_bank_id'           => 'ID pokladničky',
        'targetamount'            => 'cieľová suma',
        'opening_balance_date'    => 'počiatočný dátum zostatku',
        'opening_balance'         => 'počiatočný zostatok',
        'match'                   => 'zhoda',
        'amount_min'              => 'minimálna suma',
        'amount_max'              => 'maximálna suma',
        'title'                   => 'názov',
        'tag'                     => 'štítok',
        'transaction_description' => 'popis transakcie',
        'rule-action-value.1'     => 'hodnota akcie pravidla č. 1',
        'rule-action-value.2'     => 'hodnota akcie pravidla č. 2',
        'rule-action-value.3'     => 'hodnota akcie pravidla č. 3',
        'rule-action-value.4'     => 'hodnota akcie pravidla č. 4',
        'rule-action-value.5'     => 'hodnota akcie pravidla č. 5',
        'rule-action.1'           => 'akcia pravidla č. 1',
        'rule-action.2'           => 'akcia pravidla č. 2',
        'rule-action.3'           => 'akcia pravidla č. 3',
        'rule-action.4'           => 'akcia pravidla č. 4',
        'rule-action.5'           => 'akcia pravidla č. 5',
        'rule-trigger-value.1'    => 'hodnota spúšťacieho pravidla č. 1',
        'rule-trigger-value.2'    => 'hodnota spúšťacieho pravidla #2',
        'rule-trigger-value.3'    => 'hodnota spúšťacieho pravidla #3',
        'rule-trigger-value.4'    => 'hodnota spúšťacieho pravidla #4',
        'rule-trigger-value.5'    => 'hodnota spúšťacieho pravidla #5',
        'rule-trigger.1'          => 'spúšťač pravidla č. 1',
        'rule-trigger.2'          => 'spúšťač pravidla č. 2',
        'rule-trigger.3'          => 'spúšťač pravidla č. 3',
        'rule-trigger.4'          => 'spúšťač pravidla č. 4',
        'rule-trigger.5'          => 'spúšťač pravidla č. 5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data' => 'Pre pokračovanie je potrebné platné ID zdrojového účtu a/alebo platný názov zdrojového účtu.',
    'withdrawal_source_bad_data'  => 'Pre ID „:id“ alebo mena „:name“ sa nenašiel žiadny platný zdrojový účet.',
    'withdrawal_dest_need_data'   => 'Pro pokračovanie je potrebné platné ID zdrojového účtu a/alebo platný názov zdrojového účtu.',
    'withdrawal_dest_bad_data'    => 'Pre ID „:id“ alebo mena „:name“ sa nenašiel žiadny platný cieľový účet.',

    'generic_source_bad_data' => 'Pre ID ":id" alebo meno ":name" sa nenašiel žiadny platný zdrojový účet.',

    'deposit_source_need_data' => 'Pre pokračovanie je potrebné platné ID zdrojového účtu a/alebo platný názov zdrojového účtu.',
    'deposit_source_bad_data'  => 'Pre ID „:id“ alebo „:name“ sa nenašiel žiadny platný zdrojový účet.',
    'deposit_dest_need_data'   => 'Pro pokračovanie je potrebné platné ID cieľového účtu a/alebo platné meno cieľového účtu.',
    'deposit_dest_bad_data'    => 'Pre ID „:id“ alebo meno „:name“ sa nenašiel žiadny platný cieľový účet.',
    'deposit_dest_wrong_type'  => 'Zadaný cieľový účet nemá správny typ.',

    'transfer_source_need_data' => 'Pre pokračovanie je potrebné platné ID zdrojového účtu a/alebo platný názov zdrojového účtu.',
    'transfer_source_bad_data'  => 'Nenašiel sa platný zdrojový účet pri hľadaní ID „:id“ alebo mena „:name“.',
    'transfer_dest_need_data'   => 'Pre pokračovanie je potrebné platné ID cieľového účtu a/alebo platný názov cieľového účtu.',
    'transfer_dest_bad_data'    => 'Pre ID „:id“ alebo meno „:name“ sa nenašiel žiadny platný cieľový účet.',
    'need_id_in_edit'           => 'Každé rozdelenie musí mať platné transaction_journal_id (platné ID alebo 0).',

    'ob_source_need_data' => 'Pre pokračovanie je potrebné platné ID zdrojového účtu a/alebo platný názov zdrojového účtu.',
    'lc_source_need_data' => 'Need to get a valid source account ID to continue.',
    'ob_dest_need_data'   => 'Pre pokračovanie je potrebné platné ID cieľového účtu a/alebo platný názov cieľového účtu.',
    'ob_dest_bad_data'    => 'Pre ID „:id“ alebo mena „:name“ sa nenašiel žiadny platný cieľový účet.',

    'generic_invalid_source'      => 'Tento účet nie je možné použiť ako zdrojový účet.',
    'generic_invalid_destination' => 'Tento účet nie je možné použiť ako cieľový účet.',

    'generic_no_source'      => 'You must submit source account information.',
    'generic_no_destination' => 'You must submit destination account information.',

    'gte.numeric' => 'Hodnota :attribute musí byť väčšia alebo rovná :value.',
    'gt.numeric'  => 'Hodnota :attribute musí byť väčšia ako :value.',
    'gte.file'    => 'Hodnota :attribute musí byť väčšia alebo rovná :value kilobajtov.',
    'gte.string'  => 'Hodnota :attribute musí byť väčšia alebo rovná :value znakov.',
    'gte.array'   => 'Hodnota :attribute musí obsahovať :value alebo viac položiek.',

    'amount_required_for_auto_budget' => 'Suma je povinná.',
    'auto_budget_amount_positive'     => 'Suma musí byť viac ako 0.',
    'auto_budget_period_mandatory'    => 'Obdobie rozpočtu je povinný údaj.',
];
