<?php
declare(strict_types=1);

/**
 * form.php
 * Copyright (c) 2017 thegrumpydictator@gmail.com
 *
 * This file is part of Firefly III.
 *
 * Firefly III is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Firefly III is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Firefly III. If not, see <http://www.gnu.org/licenses/>.
 */

return [
    // new user:
    'bank_name'                      => 'Nome banca',
    'bank_balance'                   => 'Saldo',
    'savings_balance'                => 'Saldo risparmio',
    'credit_card_limit'              => 'Limite Carta di Credito',
    'automatch'                      => 'Partita automaticamente',
    'skip'                           => 'Salta',
    'name'                           => 'Nome',
    'active'                         => 'Attivo',
    'amount_min'                     => 'Importo minimo',
    'amount_max'                     => 'Importo massimo',
    'match'                          => 'Partite su',
    'strict'                         => 'Modalità severa',
    'repeat_freq'                    => 'Ripetizioni',
    'journal_currency_id'            => 'Valuta',
    'currency_id'                    => 'Valuta',
    'transaction_currency_id'        => 'Valuta',
    'external_ip'                    => 'L\'IP esterno del tuo server',
    'attachments'                    => 'Allegati',
    'journal_amount'                 => 'Importo',
    'journal_source_account_name'    => 'Conto entrate (origine)',
    'journal_source_account_id'      => 'Conto attività (origine)',
    'BIC'                            => 'BIC',
    'verify_password'                => 'Verifica password di sicurezza',
    'source_account'                 => 'Conto sorgente',
    'destination_account'            => 'Conto destinazione',
    'journal_destination_account_id' => 'Conto attività (destinatione)',
    'asset_destination_account'      => 'Conto attività (destinatione)',
    'asset_source_account'           => 'Conto attività (sorgente)',
    'journal_description'            => 'Descrizione',
    'note'                           => 'Note',
    'split_journal'                  => 'Dividi questa transazione',
    'split_journal_explanation'      => 'Dividi questa transazione in più parti',
    'currency'                       => 'Valuta',
    'account_id'                     => 'Conto attività',
    'budget_id'                      => 'Budget',
    'openingBalance'                 => 'Saldo di apertura',
    'tagMode'                        => 'Modalità etichetta',
    'tag_position'                   => 'Posizione etichetta',
    'virtualBalance'                 => 'Saldo virtuale',
    'targetamount'                   => 'Importo obiettivo',
    'accountRole'                    => 'Ruolo del conto',
    'openingBalanceDate'             => 'Data di apertura del bilancio',
    'ccType'                         => 'Piano di pagamento con carta di credito',
    'ccMonthlyPaymentDate'           => 'Data di pagamento mensile della carta di credito',
    'piggy_bank_id'                  => 'Salvadanaio',
    'returnHere'                     => 'Ritorna qui',
    'returnHereExplanation'          => 'Dopo averlo archiviato, torna qui per crearne un altro.',
    'returnHereUpdateExplanation'    => 'Dopo l\'aggiornamento, torna qui.',
    'description'                    => 'Descrizione',
    'expense_account'                => 'Conto spese',
    'revenue_account'                => 'Conto entrate',
    'decimal_places'                 => 'Decimali',
    'exchange_rate_instruction'      => 'Valuta straniera',
    'source_amount'                  => 'Importo (origine)',
    'destination_amount'             => 'Importo (destinazione)',
    'native_amount'                  => 'Importo nativo',
    'new_email_address'              => 'Nuovo indirizzo email',
    'verification'                   => 'Verifica',
    'api_key'                        => 'Chiave API',
    'remember_me'                    => 'Ricordami',

    'source_account_asset'        => 'Conto origine (conto risorse)',
    'destination_account_expense' => 'Conto destinazione (conto spese)',
    'destination_account_asset'   => 'Conto destinazione (conto risorse)',
    'source_account_revenue'      => 'Conto sorgente (conto entrate)',
    'type'                        => 'Tipo',
    'convert_Withdrawal'          => 'Converti spesa',
    'convert_Deposit'             => 'Converti entrata',
    'convert_Transfer'            => 'Converti giroconto',

    'amount'                     => 'Importo',
    'foreign_amount'             => 'Importo estero',
    'existing_attachments'       => 'Allegati esistenti',
    'date'                       => 'Data',
    'interest_date'              => 'Data interesse',
    'book_date'                  => 'Agenda',
    'process_date'               => 'Data di lavorazione',
    'category'                   => 'Categoria',
    'tags'                       => 'Etichette',
    'deletePermanently'          => 'Elimina definitivamente',
    'cancel'                     => 'Cancella',
    'targetdate'                 => 'Data fine',
    'startdate'                  => 'Data inizio',
    'tag'                        => 'Etichetta',
    'under'                      => 'Sotto',
    'symbol'                     => 'Simbolo',
    'code'                       => 'Codice',
    'iban'                       => 'IBAN',
    'accountNumber'              => 'Numero conto',
    'creditCardNumber'           => 'Numero Carta di credito',
    'has_headers'                => 'Intestazioni',
    'date_format'                => 'Formato data',
    'specifix'                   => 'Correzioni bancarie o file specifiche',
    'attachments[]'              => 'Allegati',
    'store_new_withdrawal'       => 'Salva nuovo prelievo',
    'store_new_deposit'          => 'Salva nuovo deposito',
    'store_new_transfer'         => 'Salva nuova trasferimento',
    'add_new_withdrawal'         => 'Aggiungi nuovo prelievo',
    'add_new_deposit'            => 'Aggiungi nuovo deposito',
    'add_new_transfer'           => 'Aggiungi nuovo giroconto',
    'title'                      => 'Titolo',
    'notes'                      => 'Note',
    'filename'                   => 'Nome file',
    'mime'                       => 'Tipo Mime',
    'size'                       => 'Dimensione',
    'trigger'                    => 'Trigger',
    'stop_processing'            => 'Interrompere l\'elaborazione',
    'start_date'                 => 'Inizio periodo',
    'end_date'                   => 'Fine periodo',
    'export_start_range'         => 'Inizio intervallo esportazione',
    'export_end_range'           => 'Fine intervallo esportazione',
    'export_format'              => 'Formato file',
    'include_attachments'        => 'Includi allegati caricati',
    'include_old_uploads'        => 'Includi dati importati',
    'accounts'                   => 'Esporta le transazioni da questi conti',
    'delete_account'             => 'Elimina conto ":name"',
    'delete_bill'                => 'Elimina bolletta ":name"',
    'delete_budget'              => 'Elimina budget ":name"',
    'delete_category'            => 'Elimina categoria ":name"',
    'delete_currency'            => 'Elimina valuta ":name"',
    'delete_journal'             => 'Elimina transazione con descrizione ":description"',
    'delete_attachment'          => 'Elimina allegato ":name"',
    'delete_rule'                => 'Elimina regola ":title"',
    'delete_rule_group'          => 'Elimina gruppo regole":title"',
    'delete_link_type'           => 'Elimina tipo collegamento ":name"',
    'delete_user'                => 'Elimina utente ":email"',
    'user_areYouSure'            => 'Se cancelli l\'utente ":email", verrà eliminato tutto. Non sarà più possibile recuperare i dati eliminati. Se cancelli te stesso, perderai l\'accesso a questa istanza di Firefly III.',
    'attachment_areYouSure'      => 'Sei sicuro di voler eliminare l\'allegato ":name"?',
    'account_areYouSure'         => 'Sei sicuro di voler eliminare il conto ":name"?',
    'bill_areYouSure'            => 'Sei sicuro di voler eliminare il conto ":name"?',
    'rule_areYouSure'            => 'Sei sicuro di voler eliminare la regola ":title"?',
    'ruleGroup_areYouSure'       => 'Sei sicuro di voler eliminare il gruppo regole ":title"?',
    'budget_areYouSure'          => 'Sei sicuro di voler eliminare il budget ":name"?',
    'category_areYouSure'        => 'Sei sicuro di voler eliminare categoria ":name"?',
    'currency_areYouSure'        => 'Sei sicuro di voler eliminare la valuta ":name"?',
    'piggyBank_areYouSure'       => 'Sei sicuro di voler eliminare il salvadanaio ":name"?',
    'journal_areYouSure'         => 'Sei sicuro di voler eliminare la transazione ":description"?',
    'mass_journal_are_you_sure'  => 'Sei sicuro di voler eliminare queste transazioni?',
    'tag_areYouSure'             => 'Sei sicuro di voler eliminare l\'etichetta ":tag"?',
    'journal_link_areYouSure'    => 'Sei sicuro di voler eliminare il collegamento tra <a href=":source_link">:source</a> e <a href=":destination_link">:destination</a>?',
    'linkType_areYouSure'        => 'Sei sicuro di voler eliminare il tipo di collegamento ":name" (":inward" / ":outward")?',
    'permDeleteWarning'          => 'L\'eliminazione dei dati da Firefly III è permanente e non può essere annullata.',
    'mass_make_selection'        => 'Puoi comunque impedire l\'eliminazione degli elementi rimuovendo la spunta nella casella di controllo.',
    'delete_all_permanently'     => 'Elimina selezionato in modo permanente',
    'update_all_journals'        => 'Aggiorna queste transazioni',
    'also_delete_transactions'   => 'Bene! verrà cancellata anche l\'unica transazione connessa a questo conto. | Bene! Tutte :count le transazioni di conteggio collegate a questo conto verranno eliminate.',
    'also_delete_connections'    => 'L\'unica transazione collegata a questo tipo di collegamento perderà questa connessione. | Tutto :count le transazioni di conteggio collegate a questo tipo di collegamento perderanno la connessione.',
    'also_delete_rules'          => 'Anche l\'unica regola collegata a questo gruppo di regole verrà eliminata. | Tutto :count verranno eliminate anche le regole di conteggio collegate a questo gruppo di regole.',
    'also_delete_piggyBanks'     => 'Verrà eliminato anche l\'unico salvadanaio collegato a questo conto. | Tutti :count il conteggio del salvadanaio collegato a questo conto verrà eliminato.',
    'bill_keep_transactions'     => 'L\'unica transazione connessa a questa bolletta non verrà eliminata. | Tutte le :count transazioni del conto collegate a questa bolletta non verranno cancellate.',
    'budget_keep_transactions'   => 'L\'unica transazione collegata a questo budget non verrà eliminata. | Tutte le :count transazioni del conto collegate a questo budget non verranno cancellate.',
    'category_keep_transactions' => 'L\'unica transazione collegata a questa categoria non verrà eliminata. | Tutto :count le transazioni del conto collegate a questa categoria non verranno cancellate.',
    'tag_keep_transactions'      => 'L\'unica transazione connessa a questa etichetta non verrà eliminata. | Tutto :count le transazioni del conto collegate a questa etichetta non verranno cancellate.',
    'check_for_updates'          => 'Controlla gli aggiornamenti',

    'email'                 => 'Indirizzo Email',
    'password'              => 'Password',
    'password_confirmation' => 'Password (ancora)',
    'blocked'               => 'È bloccato?',
    'blocked_code'          => 'Motivo del blocco',

    // admin
    'domain'                => 'Dominio',
    'single_user_mode'      => 'Disabilita registrazione utente',
    'is_demo_site'          => 'È un sito demo',

    // import
    'import_file'           => 'Importa file',
    'configuration_file'    => 'Configurazione file',
    'import_file_type'      => 'Importa tipo file',
    'csv_comma'             => 'A virgola (,)',
    'csv_semicolon'         => 'A punto e virgola (;)',
    'csv_tab'               => 'A spazio (invisibile)',
    'csv_delimiter'         => 'Delimitatore campi CSV',
    'csv_import_account'    => 'Conto di importazione predefinito',
    'csv_config'            => 'Configurazione importa CSV',
    'client_id'             => 'ID Client',
    'service_secret'        => 'Servizio segreto',
    'app_secret'            => 'App segreto',
    'public_key'            => 'Chiave Pubblica',
    'country_code'          => 'Codice Nazione',
    'provider_code'         => 'Banca o fornitore di dati',

    'due_date'           => 'Data scadenza',
    'payment_date'       => 'Data pagamento',
    'invoice_date'       => 'Data bolletta',
    'internal_reference' => 'Referenze interne',
    'inward'             => 'Descrizione interna',
    'outward'            => 'Descrizione esterna',
    'rule_group_id'      => 'Gruppo regole',
];
