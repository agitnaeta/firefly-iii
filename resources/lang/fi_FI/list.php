<?php

/**
 * list.php
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
    'buttons'                 => 'Painikkeet',
    'icon'                    => 'Kuvake',
    'id'                      => 'Tunniste',
    'create_date'             => 'Luotu',
    'update_date'             => 'Päivitetty',
    'updated_at'              => 'Päivitetty',
    'balance_before'          => 'Saldo ennen',
    'balance_after'           => 'Saldo jälkeen',
    'name'                    => 'Nimi',
    'role'                    => 'Rooli',
    'currentBalance'          => 'Tämänhetkinen saldo',
    'linked_to_rules'         => 'Linkitetty sääntöihin',
    'active'                  => 'Aktiivinen?',
    'percentage'              => 'pros.',
    'next_due'                => 'Seuraava eräpäivä',
    'transaction_type'        => 'Tyyppi',
    'lastActivity'            => 'Viimeisin tapahtuma',
    'balanceDiff'             => 'Saldomuutos',
    'matchesOn'               => 'Täsmää',
    'other_meta_data'         => 'Muut metatiedot',
    'account_type'            => 'Tilin tyyppi',
    'created_at'              => 'Luotu',
    'account'                 => 'Tili',
    'matchingAmount'          => 'Summa',
    'split_number'            => 'Jako #',
    'destination'             => 'Kohde',
    'source'                  => 'Lähde',
    'next_expected_match'     => 'Seuraava lasku odotettavissa',
    'automatch'               => 'Automaattinen vertailu?',
    'repeat_freq'             => 'Toistot',
    'description'             => 'Kuvaus',
    'amount'                  => 'Summa',
    'internal_reference'      => 'Sisäinen viite',
    'date'                    => 'Päivämäärä',
    'interest_date'           => 'Koronlaskupäivä',
    'book_date'               => 'Kirjauspäivä',
    'process_date'            => 'Käsittelypäivä',
    'due_date'                => 'Eräpäivä',
    'payment_date'            => 'Maksupäivä',
    'invoice_date'            => 'Laskun päivämäärä',
    'interal_reference'       => 'Sisäinen viite',
    'notes'                   => 'Muistiinpanot',
    'from'                    => 'Lähettäjä',
    'piggy_bank'              => 'Säästöpossu',
    'to'                      => 'Saaja',
    'budget'                  => 'Budjetti',
    'category'                => 'Kategoria',
    'bill'                    => 'Lasku',
    'withdrawal'              => 'Nosto',
    'deposit'                 => 'Talletus',
    'transfer'                => 'Siirto',
    'type'                    => 'Tyyppi',
    'completed'               => 'Suoritettu',
    'iban'                    => 'IBAN',
    'paid_current_period'     => 'Maksettu tällä kaudella',
    'email'                   => 'Sähköposti',
    'registered_at'           => 'Rekisteröity',
    'is_blocked'              => 'On estetty',
    'is_admin'                => 'On ylläpitäjä',
    'has_two_factor'          => 'On 2FA',
    'blocked_code'            => 'Eston koodi',
    'source_account'          => 'Lähdetili',
    'destination_account'     => 'Kohdetili',
    'accounts_count'          => 'Tilien lukumäärä',
    'journals_count'          => 'Tapahtumien lukumäärä',
    'attachments_count'       => 'Liitteiden lukumäärä',
    'bills_count'             => 'Laskujen lukumäärä',
    'categories_count'        => 'Kategorioiden lukumäärä',
    'import_jobs_count'       => 'Tuontien lukumäärä',
    'budget_count'            => 'Budjettien lukumäärä',
    'rule_and_groups_count'   => 'Sääntöjen ja sääntöryhmien lukumäärä',
    'tags_count'              => 'Tägien lukumäärä',
    'tags'                    => 'Tägit',
    'inward'                  => 'Sisäinen kuvaus',
    'outward'                 => 'Ulkoinen kuvaus',
    'number_of_transactions'  => 'Tapahtumien lukumäärä',
    'total_amount'            => 'Yhteensä',
    'sum'                     => 'Summa',
    'sum_excluding_transfers' => 'Yhteensä (poislukien siirrot)',
    'sum_withdrawals'         => 'Nostot yhteensä',
    'sum_deposits'            => 'Talletukset yhteensä',
    'sum_transfers'           => 'Siirrot yhteensä',
    'sum_reconciliations'     => 'Täsmäytykset yhteensä',
    'reconcile'               => 'Täsmäytä',
    'account_on_spectre'      => 'Tili (Spectre)',
    'account_on_ynab'         => 'Tili (YNAB)',
    'do_import'               => 'Tuo tältä tililtä',
    'sepa_ct_id'              => 'SEPA End to End tunniste',
    'sepa_ct_op'              => 'SEPA Vastatilin tunniste',
    'sepa_db'                 => 'SEPA Valtuutuksen tunniste',
    'sepa_country'            => 'SEPA Maa',
    'sepa_cc'                 => 'SEPA Clearing Koodi',
    'sepa_ep'                 => 'SEPA Ulkoinen Tarkoitus',
    'sepa_ci'                 => 'SEPA Velkojan tunniste',
    'sepa_batch_id'           => 'SEPA Erän tunnus',
    'external_id'             => 'Ulkoinen tunniste',
    'account_at_bunq'         => 'Bung käyttäjätili',
    'file_name'               => 'Tiedoston nimi',
    'file_size'               => 'Tiedoston koko',
    'file_type'               => 'Tiedoston tyyppi',
    'attached_to'             => 'Liitteenä',
    'file_exists'             => 'Tiedosto on jo olemassa',
    'spectre_bank'            => 'Pankki',
    'spectre_last_use'        => 'Viimeisin kirjautuminen',
    'spectre_status'          => 'Tila',
    'bunq_payment_id'         => 'bunq maksutunniste',
    'repetitions'             => 'Toistot',
    'title'                   => 'Otsikko',
    'transaction_s'           => 'Tapahtuma(t)',
    'field'                   => 'Kenttä',
    'value'                   => 'Arvo',
    'interest'                => 'Korko',
    'interest_period'         => 'korkojakso',
    'liability_type'          => 'Vastuutyyppi',
];
