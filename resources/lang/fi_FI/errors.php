<?php

/**
 * firefly.php
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
    '404_header'              => 'Firefly III ei löydä tätä sivua.',
    '404_page_does_not_exist' => 'Pyytämääsi sivua ei ole. Tarkista, että et ole antanut väärää URL-osoitetta. Teitkö ehkä kirjoitusvirheen?',
    '404_send_error'          => 'Jos sinut ohjattiin tälle sivulle automaattisesti, pyydän anteeksi. Tästä virheestä on maininta lokitiedostossa ja olisin kiitollinen, jos lähettäisit virheen minulle.',
    '404_github_link'         => 'Jos olet varma, että sivu pitäisi olla olemassa, avaa tiketti <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHubissa</a></strong>.',
    'whoops'                  => 'Hupsis',
    'fatal_error'             => 'Tapahtui vakava virhe. Ole hyvä ja tarkista lokitiedostot "storage/logs" tai käytä komentoa "docker logs -f [container]" nähdäksesi mikä menee pieleen.',
    'maintenance_mode'        => 'Firefly III on huoltotilassa.',
    'be_right_back'           => 'Palaan pian!',
    'check_back'              => 'Firefly III tekee joitain tarpeellisia huoltotoimenpiteitä. Ole hyvä ja yritä uudelleen hetken kuluttua.',
    'error_occurred'          => 'Hupsista! Tapahtui virhe.',
    'db_error_occurred'       => 'Hupsista! Tapahtui tietokantavirhe.',
    'error_not_recoverable'   => 'Valitettavasti tästä virheestä ei pystytä palautumaan :(. Firefly III meni rikki. Virhe on:',
    'error'                   => 'Virhe',
    'error_location'          => 'Tämä virhe tapahtui tiedostossa <span style="font-family: monospace;">:file</span> rivillä :line koodilla :code.',
    'stacktrace'              => 'Pinojäljitys',
    'more_info'               => 'Lisää tietoja',
    'collect_info'            => 'Kerää lisätietoja <code>storage/logs</code> hakemistosta, josta löydät lokitiedostoja. Jos käytät Dockeria, käytä komentoa <code>docker logs -f [container]</code>.',
    'collect_info_more'       => 'Voit lukea lisää virhetietojen keräämisestä <a href="https://docs.firefly-iii.org/faq/other#how-do-i-enable-debug-mode">FAQ</a>:sta.',
    'github_help'             => 'Hanki apua GitHubista',
    'github_instructions'     => 'Olet enemmän kuin tervetullut avaamaan uuden tiketin <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHubissa</a></strong>.',
    'use_search'              => 'Käytä hakua!',
    'include_info'            => 'Sisällytä tiedot <a href=":link">tältä vianjäljityssivulta</a>.',
    'tell_more'               => 'Kerro meille enemmän kuin "se sanoo Whoops!"',
    'include_logs'            => 'Sisällytä virhelokit (katso yllä).',
    'what_did_you_do'         => 'Kerro meille mitä olit tekemässä.',
    'offline_header'          => 'Olet luultavasti offline-tilassa',
    'offline_unreachable'     => 'Firefly III ei ole tavoitettavissa. Laitteesi ei ole tällä hetkellä verkossa tai palvelin ei toimi.',
    'offline_github'          => 'Jos olet varma, että sekä laitteesi että palvelin ovat verkossa, avaa tiketti <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>:issa.',

];
