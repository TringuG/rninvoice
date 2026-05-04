<?php

declare(strict_types=1);

namespace MyInvoice\I18n;

/**
     * Bilingual katalóg backend chybových hlášok.
     *
     * Klíč = literální SK text (presne ako ho píše Json::error). Hodnota = EN ekvivalent.
     *
     * Chybový text s PHP premennými ($var, {$var}) sem nepatrí — zostáva v SK
     * (na zozname výnimiek, ~10 ks; možný na zlepšenie na placeholder formát kedykoľvek).
     *
     * Json::error() prejde každú správu cez lookup() — ak nenájde, vrátí pôvodný text.
     */
    final class ErrorCatalog
    {
        /** @var array<string,string> SK → EN */
        private const MAP = [
            'ARES je dočasne nedostupný.' => 'ARES is temporarily unavailable.',
            'Aktuálne heslo nie je správne.' => 'Current password is incorrect.',
            'Aplikácia ešte nie je inicializovaná. Otvor /setup na vytvorenie admin účtu.' => 'Application is not initialized yet. Open /setup to create the admin account.',
            'Chýba invoice_id.' => 'Missing invoice_id.',
            'Chýba project_id.' => 'Missing project_id.',
            'Chýba title.' => 'Missing title.',
            'DIČ musí mať prefix krajiny a 4-12 číslic (napr. SK9876543210).' => 'VAT ID must have a country prefix and 4–12 digits (e.g. SK9876543210).',
            'Dobropis ani zrušenie nemožno zrušiť.' => 'Credit note and cancellation cannot be cancelled.',
            'Email je už zaregistrovaný.' => 'Email is already registered.',
            'Email sa nepodarilo odoslať: ' => 'Failed to send email: ',
            'Faktúra bola medzitým zmenená.' => 'Invoice has been modified in the meantime.',
            'Faktúra musí obsahovať aspoň jednu položku.' => 'Invoice must contain at least one item.',
            'Heslá sa nezhodujú.' => 'Passwords do not match.',
            'Heslo musí mať aspoň 12 znakov.' => 'Password must be at least 12 characters.',
            'Interné zrušenie sa nepošíla klientovi.' => 'Internal cancellation is not sent to the client.',
            'IČO musí mať 8 číslic.' => 'Reg. No. must have 8 digits.',
            'Meno je povinné.' => 'Name is required.',
            'Možné označiť ako zaplatené len vydanú alebo odoslanu faktúru.' => 'Only an issued or sent invoice can be marked as paid.',
            'Možné poslať len vydanú faktúru.' => 'Only an issued invoice can be sent.',
            'Možné len zo zálohové faktúry (proforma).' => 'Only allowed from a proforma invoice.',
            'Možné vymazať len draft faktúru (vydanú len cez zrušenie/dobropis).' => 'Only a draft invoice can be deleted (issued ones only via cancel/credit note).',
            'Možné vydať len draft faktúru.' => 'Only a draft invoice can be issued.',
            'Možné zrušiť len vydanú/odoslanu/zaplatenú faktúru.' => 'Only an issued/sent/paid invoice can be cancelled.',
            'Meňa nenájdená.' => 'Currency not found.',
            'Meňa s týmto kódom už existuje.' => 'A currency with this code already exists.',
            'Nemožné deaktivovať posledného aktívneho admina.' => 'Cannot deactivate the last active admin.',
            'Nemožné odobrať admin rolu ani deaktivovať posledného aktívneho admina.' => 'Cannot remove the admin role or deactivate the last active admin.',
            'Nemožné parsovať: ' => 'Cannot parse: ',
            'Nemožné vymazať vlastný účet.' => 'Cannot delete your own account.',
            'Nemožné vytvoriť ZIP.' => 'Cannot create ZIP.',
            'Nie je vybraná žiadna faktúra.' => 'No invoice selected.',
            'Neplatná rola.' => 'Invalid role.',
            'Neplatný dátum.' => 'Invalid date.',
            'Neplatné prihlasovacie údaje.' => 'Invalid credentials.',
            'Neplatný email.' => 'Invalid email.',
            'Neplatný kód meny.' => 'Invalid currency code.',
            'Neplatný alebo chýbajúci CSRF token.' => 'Invalid or missing CSRF token.',
            'Neplatný token.' => 'Invalid token.',
            'Nepodarilo sa vygenerovať PDF: ' => 'Failed to generate PDF: ',
            'Neprihlásený používateľ.' => 'Not authenticated.',
            'Nové heslá sa nezhodujú.' => 'New passwords do not match.',
            'Origin sa nezhoduje s app URL.' => 'Origin does not match the app URL.',
            'Parameter month musí byť YYYY-MM.' => 'Parameter "month" must be YYYY-MM.',
            'Platnosť tokenu vypršala.' => 'Token has expired.',
            'Iba admin alebo účtovník.' => 'Admin or accountant only.',
            'Proforma musí byť označená ako zaplatená.' => 'Proforma must be marked as paid.',
            'Príliš veľa pokusov. Skús to neskôr.' => 'Too many attempts. Try again later.',
            'Setup už prebehol.' => 'Setup has already been completed.',
            'Súbor chýba.' => 'File missing.',
            'Súbor je prázdny.' => 'File is empty.',
            'Zrušenie dokladu nemožno upravovať.' => 'A cancellation document cannot be edited.',
            'Zrušenie nedostáva variabilný symbol.' => 'A cancellation document does not get a variable symbol.',
            'Supplier nevyplnený (spusti setup).' => 'Supplier not configured (run setup).',
            'Táto IP adresa nemá prístup k aplikácii.' => 'This IP address is not allowed to access the application.',
            'Token alebo heslo chýba.' => 'Token or password missing.',
            'Token už bol použitý.' => 'Token has already been used.',
            'Používateľ nenájdený.' => 'User not found.',
            'Vydanú faktúru nemožno upravovať.' => 'An issued invoice cannot be edited.',
            'Vyžaduje sa CAPTCHA.' => 'CAPTCHA required.',
            'Výkaz možné vymazať len v draftu (admin: ?force=1).' => 'Work report can only be deleted on a draft (admin: ?force=1).',
            'Výkaz možné upraviť len v draftu (admin: ?force=1).' => 'Work report can only be edited on a draft (admin: ?force=1).',
            'Výpis nenájdený.' => 'Bank statement not found.',
            'Projekt nenájdený.' => 'Project not found.',
            'Krajina s týmto iso2 už existuje.' => 'A country with this iso2 already exists.',
            'Záloha nesmie byť negatívna.' => 'Advance payment must not be negative.',
            'cfg.bank_import.scan_root nie je nastavené alebo adresár neexistuje.' => 'cfg.bank_import.scan_root is not set or the directory does not exist.',
            'cfg.smtp.from_email nie je nastavené.' => 'cfg.smtp.from_email is not set.',
            'code a rate_percent sú povinné.' => '"code" and "rate_percent" are required.',
            'code musí byť 3 znaky.' => '"code" must be 3 characters.',
            'iso2 musí byť 2 znaky.' => '"iso2" must be 2 characters.',
            'mode musí byť "internal" alebo "credit_note".' => '"mode" must be "internal" or "credit_note".',
            'Žiadny platný príjemca (chýba email klienta).' => 'No valid recipient (client email missing).',
            // Časté hlášky používané na jednom callsite, ale rovnaký text sa opakuje (napr. not_found):
            'Zákazník nenájdený.' => 'Client not found.',
            'Faktúra nenájdená.' => 'Invoice not found.',
            'Validácia zlyhala' => 'Validation failed',
        ];

        /**
         * Vrátí EN preklad ak existuje v katalogu, inak pôvodný text.
         * Pre $locale = 'sk' (default) vždy vrátí pôvodný.
         *
         * Spracúva aj prefix-match: ak je v katalogu klúč "Email sa nepodarilo odoslať: "
         * a vstup je "Email sa nepodarilo odoslať: connection timeout", preloží prefix.
         */
        public static function lookup(string $sk, string $locale): string
        {
            if ($locale === 'sk' || $sk === '') return $sk;
            if (isset(self::MAP[$sk])) return self::MAP[$sk];
            // Prefix-match pre hlášky končiace správou výnimky
            foreach (self::MAP as $key => $en) {
                if (str_ends_with($key, ': ') && str_starts_with($sk, $key)) {
                    return $en . substr($sk, strlen($key));
                }
            }
            return $sk;
}
