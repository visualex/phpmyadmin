<?php
/* $Id$ */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Du', 'Lu', 'Ma', 'Mi', 'Jo', 'Vi', 'Sa');
$month = array('Ian', 'Feb', 'Mar', 'Apr', 'Mai', 'Iun', 'Iul', 'Aug', 'Sep', 'Oct', 'Noi', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';

$timespanfmt = '%s zile, %s ore, %s minute si %s secunde';

$strAPrimaryKey = 'A fost adaugat o cheie primara la %s';
$strAbortedClients = 'Intrerupt';
$strAbsolutePathToDocSqlDir = 'Va rugam introduceti calea absoluta al serverului web la directorul docSQL';
$strAccessDenied = 'Acces interzis';
$strAction = 'Actiune';
$strAddDeleteColumn = 'Adauga/Sterge coloane';
$strAddDeleteRow = 'Adauga/Sterge criteriu';
$strAddNewField = 'Adauga camp nou';
$strAddPriv = 'Adauga un nou drept de acces';
$strAddPrivMessage = 'Ati adaugat un nou drept de acces.';
$strAddPrivilegesOnDb = 'Adauga drepturi la baza de date urmatoare';
$strAddPrivilegesOnTbl = 'Adauga drepturi la urmatorul tabel';
$strAddSearchConditions = 'Adauga conditie de cautare (parte a comenzii "where"):';
$strAddToIndex = 'Adauga la coloana(ele) index &nbsp;%s&nbsp;';
$strAddUser = 'Adauga un utilizator nou';
$strAddUserMessage = 'Ati adaugat un nou utilizator.';
$strAddedColumnComment = 'Sa adaugat comentariu la coloana';
$strAddedColumnRelation = 'Sa adaugat o relatie la coloana';
$strAdministration = 'Administrare';
$strAffectedRows = 'Linii afectate:';
$strAfter = 'Dupa %s';
$strAfterInsertBack = 'Revenire';
$strAfterInsertNewInsert = 'Adauga o noua inregistrare';
$strAll = 'Toate';
$strAllTableSameWidth = 'arata toate tabelele cu aceeasi marime?';
$strAlterOrderBy = 'Alterare ordine tabel dupa (Alter table order by)';
$strAnIndex = 'A fost adaugat un index la %s';
$strAnalyzeTable = 'Analizare tabel';
$strAnd = 'Si (And)';
$strAny = 'Oricare';
$strAnyColumn = 'Oricare coloana';
$strAnyDatabase = 'Oricare baza de date';
$strAnyHost = 'Oricare host';
$strAnyTable = 'Oricare tabel';
$strAnyUser = 'Oricare utilizator';
$strAscending = 'Crescatoare';
$strAtBeginningOfTable = 'La inceputul tabelului';
$strAtEndOfTable = 'La sfarsitul tabelului';
$strAttr = 'Proprietati';

$strBack = 'Inapoi';
$strBeginCut = 'DE TAIAT - INCEPUT';
$strBeginRaw = 'INCEPUT RAW';
$strBinary = 'Binar';
$strBinaryDoNotEdit = 'Binar - a nu se edita';
$strBookmarkDeleted = 'Eticheta a fost stearsa.';
$strBookmarkLabel = 'Eticheta - Label';
$strBookmarkQuery = 'Comanda SQL salvata (Bookmarked SQL-query)';
$strBookmarkThis = 'Salveaza aceasta comanda SQL';
$strBookmarkView = 'Numai vizualizare';
$strBrowse = 'Navigare';
$strBzError = 'phpMyAdmin nu a reusit sa compreseze acest dump din cauza unei extensii Bz2 invalide in aceasta versiune php. Va recomandam sa setati directiva <code>$cfg[\'BZipDump\']</code> in in fisierul de configurare phpMyAdmin la <code>FALSE</code>. Daca doriti sa utilizati caracteristicile de compresie Bz2 va trebui sa upgradati la o versiune mai noua de php.  Pentru detalii revedeti raportul de erori php %s.';
$strBzip = '"bzipped"';

$strCannotLogin = 'Nu pot face conexiunea catre serverul MySQL';
$strCantLoad = 'nu se poate incarca %s extensia,<br />va rugam verificati configuratia PHP.';
$strCantLoadMySQL = 'extensia MySQL nu se incarca,<br />va rugam verificati configuratia PHP.';
$strCantLoadRecodeIconv = 'Nu pot incarca extensia iconv sau recode necesar pentru conversia de caractere, configureaza PHP pentru a permite folosirea acestor extensii sau dezactiveaza conversia de caractere din phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Nu poti redenumi index-ul la un nume PRIMARY!';
$strCantUseRecodeIconv = 'Nu pot folosi functiile iconv nici libiconv nici recode_string in timp ce extensia este incarcata. Verifica configuratia PHP.';
$strCardinality = 'Cardinalitate';
$strCarriage = 'Enter: \\r';
$strChange = 'Schimbare';
$strChangeCopyMode = 'Creaza un utilizatoru nou cu acelasi privilegii si...';
$strChangeCopyModeCopy = '... mentine cel vechi.';
$strChangeCopyModeJustDelete = ' ... sterge cel vechi din tabela de utilizatori.';
$strChangeCopyModeRevoke = ' ... revoca toate privilegiile active de la utilizatorul vechi si sterge-l dupa aceea.';
$strChangeCopyModeDeleteAndReload = ' ... sterge cel vechi din tabela de utilizatori si reincarca privilegiile.';
$strChangeCopyUser = 'Schimba informatiile de autentificare / Copiaza utilizator';
$strChangeDisplay = 'Selecteaza un camp';
$strChangePassword = 'Schimbare parola';
$strCharsetOfFile = 'Setul de caractere a fisierului:';
$strCheckAll = 'Marcheaza toate';
$strCheckDbPriv = 'Marcheaza drepturile de acces la baza de date';
$strCheckPrivs = 'Verifica privilegiile';
$strCheckPrivsLong = 'Verifica privilegiile pentru baza de date &quot;%s&quot;.';
$strCheckTable = 'Verificare tabel';
$strChoosePage = 'Selecteaza o pagina pentru a fi editata';
$strColComFeat = 'Arata comentariile coloanei';
$strColumn = 'Coloana';
$strColumnNames = 'Numele coloanelor';
$strColumnPrivileges = 'Drepturi specifice de coloana';
$strCommand = 'Comanda';
$strComments = 'Comentarii';
$strCompleteInserts = 'Rezolva inserarea';
$strCompression = 'Compresie';
$strConfigFileError = 'phpMyAdmin nu poate citi corect fisierul de configuratie!  <br />Acesta se poate intampla in cazul in care PHP nu poate gasi fisierul sau nu o poate parsa corect.  <br />Vezi configuratia fisierului apasand pe linkul de mai jos si citeste cu atentie erorile aparute ...  In cele mai multe cazuri lipsesc apostroful sau ghilimele.<br />Daca primesti o pagina goala, totul pare sa fie bine.';
$strConfigureTableCoord = 'Configureaza coordonatelepentru tabela %s';
$strConfirm = 'Sunteti sigur ca doriti sa continuati?';
$strConnections = 'Conexiuni';
$strCookiesRequired = 'Trebuie sa aveti activat "cookies".';
$strCopyTable = 'Copiaza tabela la (database<b>.</b>table):';
$strCopyTableOK = 'Tabelul %s a fost copiat la %s.';
$strCouldNotKill = 'phpMyAdmin n-a reusit sa opreasca firul de executie %s.  Probabil a fost deja oprit.';
$strCreate = 'Creaza';
$strCreateIndex = 'Creaza un index pe&nbsp;%s&nbsp;coloana';
$strCreateIndexTopic = 'Creaza un nou index';
$strCreateNewDatabase = 'Creaza baza de date noua';
$strCreateNewTable = 'Creaza tabela noua in baza de date %s';
$strCreatePage = 'Creaza o noua pagina';
$strCreatePdfFeat = 'Creare de PDF';
$strCriteria = 'Criteriu';

$strDBGContext = 'Context';
$strDBGContextID = 'Context ID';
$strDBGHits = 'Afisari';
$strDBGLine = 'Linia';
$strDBGMaxTimeMs = 'Timp maxim, ms';
$strDBGMinTimeMs = 'Timp minim, ms';
$strDBGModule = 'Modul';
$strDBGTimePerHitMs = 'Timp/Afisare, ms';
$strDBGTotalTimeMs = 'Timp total, ms';
$strData = 'Date';
$strDataDict = 'Dictionar de date';
$strDataOnly = 'Numai date';
$strDatabase = 'Baza de date ';
$strDatabaseHasBeenDropped = 'Baza de date %s a fost aruncat.';
$strDatabaseWildcard = 'Baza de date (permis caractere inlocuitoare):';
$strDatabases = 'Baze de date';
$strDatabasesDropped = '%s baza(ele) de data(e) au fost aruncate.';
$strDatabasesStats = 'Statisticile bazelor de date';
$strDatabasesStatsDisable = 'Dezactiveaza statisticile';
$strDatabasesStatsEnable = 'Activeaza statisticile';
$strDatabasesStatsHeavyTraffic = 'Nota: Activarea statisticilor pentru baza de date, poate cauza cresterea traficului intre MySQL si serverul de web.';
$strDbPrivileges = 'Drepturi specifice de baza de date';
$strDbSpecific = 'specific bazei de date';
$strDefault = 'Setare de baza';
$strDefaultValueHelp = 'Pentru valorile implicite, va rugam introduceti o singura valoare, fara backslash, escape sau ghilimele, folosind formatul: a';
$strDelete = 'Sterge';
$strDeleteAndFlush = 'Sterge utilizatorii si reincarca drepturile pe urma.';
$strDeleteAndFlushDescr = 'Este cea mai simpla metoda, dar reincarcarea drepturilor s-ar putea sa dureze.';
$strDeleteFailed = 'Stergere nereusita!';
$strDeleteUserMessage = 'Ati sters utilizatorul %s.';
$strDeleted = 'Linia a fost stearsa';
$strDeletedRows = 'Randuri sterse:';
$strDeleting = 'Sterge %s';
$strDescending = 'Descrescator';
$strDisabled = 'Dezactivat';
$strDisplay = 'Afisare';
$strDisplayFeat = 'Arata facilitatile';
$strDisplayOrder = 'Ordine de afisare:';
$strDisplayPDF = 'Arata schema PDF';
$strDoAQuery = 'Executa un "query by example" (wildcard: "%")';
$strDoYouReally = 'Sunteti sigur ca doriti sa ';
$strDocu = 'Documentatie';
$strDrop = 'Arunca';
$strDropDB = 'Arunca baza de date %s';
$strDropSelectedDatabases = 'Arunca baza(ele) de date selectata(e)';
$strDropTable = 'Arunca tabelul';
$strDropUsersDb = 'Arunca baza de date care are acelasi nume ca un utilizator.';
$strDumpXRows = 'Arunca %s randuri incepand de la randul %s.';
$strDumpingData = 'Salvarea datelor din tabel';
$strDynamic = 'dinamic';

$strEdit = 'Editare';
$strEditPDFPages = 'Editeaza paginile PDF';
$strEditPrivileges = 'Editeaza drepturile de acces';
$strEffective = 'Efectiv';
$strEmpty = 'Goleste';
$strEmptyResultSet = 'MySQL a dat un set de rezultate gol (ex. zero linii).';
$strEnabled = 'Activat';
$strEnd = 'Sfarsit';
$strEndCut = 'DE TAIAT - SFARSIT';
$strEndRaw = 'SFARSIT RAW';
$strEnglishPrivileges = ' Important: numele drepturilor de acces MySQL apar in engleza ';
$strError = 'Eroare';
$strExplain = 'Explica SQL';
$strExport = 'Export';
$strExportToXML = 'Export in format XML';
$strExtendedInserts = 'Inserari extinse';
$strExtra = 'Extra';

$strFailedAttempts = 'Incercari nereusite';
$strField = 'Camp';
$strFieldHasBeenDropped = 'Campul %s a fost aruncat';
$strFields = 'Campuri';
$strFieldsEmpty = ' Rezultat gol ';
$strFieldsEnclosedBy = 'Campuri incadrate de';
$strFieldsEscapedBy = 'Campuri realizate de';
$strFieldsTerminatedBy = 'Campuri terminate de';
$strFileCouldNotBeRead = 'Fisierul nu poate fi citit';
$strFixed = 'fixat';
$strFlushPrivilegesNote = 'Nota: phpMyAdmin foloseste privilegiile utilizatorilor direct din tabela de privilegii din MySQL. Continutul acestei tabele poate diferi de cel original. In acest caz, reincarca de aici inainte de a continua %sreincarcarea drepturilor%s.';
$strFlushTable = 'Curatarea tabelului ("FLUSH")';
$strFormEmpty = 'Valoarea lipseste in formular !';
$strFormat = 'Format';
$strFullText = 'Texte intregi';
$strFunction = 'Functie';

$strGenBy = 'Generat de';
$strGenTime = 'Timp de generare';
$strGeneralRelationFeat = 'Facilitati generale';
$strGlobal = 'global';
$strGlobalPrivileges = 'Privilegii globale';
$strGlobalValue = 'Valoare globala';
$strGo = 'Executa';
$strGrantOption = 'Grant';
$strGrants = 'Drepturi';
$strGzip = '"gzipped"';

$strHasBeenAltered = 'a fost alterat.';
$strHasBeenCreated = 'a fost creat.';
$strHaveToShow = 'Trebuie sa alegi cel putin o coloana pentru a putea afisa';
$strHome = 'Pagina de start';
$strHomepageOfficial = 'Pagina oficiala phpMyAdmin';
$strHomepageSourceforge = 'Pagina de descarcare Sourceforge phpMyAdmin';
$strHost = 'Gazda (Host)';
$strHostEmpty = 'Numele de gazda este gol!';

$strId = 'ID';
$strIdxFulltext = 'Tot textul';
$strIfYouWish = 'In cazul in care doriti sa incarcati numai o parte a coloanelor tabelului, specificati o lista separata prin virgula.';
$strIgnore = 'Ignora';
$strIgnoringFile = 'Fisier %s ignorat';
$strImportDocSQL = 'Import de fisiere docSQL';
$strImportFiles = 'Import de fisiere';
$strImportFinished = 'Importarea a fost finalizat';
$strInUse = 'in folosinta';
$strIndex = 'Index';
$strIndexHasBeenDropped = 'Index %s a fost aruncat';
$strIndexName = 'Nume index&nbsp;:';
$strIndexType = 'Tip index&nbsp;:';
$strIndexes = 'Indexuri';
$strInsecureMySQL = 'Configurarea ta contine setarile ce baza (utilizator root fara parola). Serverul MySQL poate fi astfel vulnerabil, neaparat sa repari aceasta greseala.';
$strInsert = 'Inserare';
$strInsertAsNewRow = 'Insereaza ca o noua linie';
$strInsertNewRow = 'Insereaza o noua linie';
$strInsertTextfiles = 'Insereaza fisiere de text in tabel';
$strInsertedRows = 'Randuri inserate:';
$strInstructions = 'Instructiuni';
$strInvalidName = '"%s" este un cuvant rezervat, nu o poti folosi ca o baza de date/tabela/nume de camp.';

$strJumpToDB = 'Sari la baza de date &quot;%s&quot;.';
$strJustDelete = 'Sterge utilizatorii din tabelele de drepturi.';
$strJustDeleteDescr = 'Utilizatorii &quot;stersi&quot; vor avea acces la server la fel ca pana acum pana ce drepturile sunt reincarcate.';

$strKeepPass = 'Nu schimbati parola';
$strKeyname = 'Nume cheie';
$strKill = 'Opreste';

$strLaTeX = 'LaTeX';
$strLandscape = 'Landscape';
$strLength = 'Lungime';
$strLengthSet = 'Lungime/Setare';
$strLimitNumRows = 'Numarul de inregistrari de pe pagina';
$strLineFeed = 'Dezvoltare linie: \\n';
$strLines = 'Linii';
$strLinesTerminatedBy = 'Linii terminate de';
$strLinkNotFound = 'Legatura invalida';
$strLinksTo = 'Trimitere la';
$strLocalhost = 'Local';
$strLocationTextfile = 'Locatia fisierului text';
$strLogPassword = 'Parola:';
$strLogUsername = 'Nume utilizator:';
$strLogin = 'Autentificare';
$strLoginInformation = 'Informatii de autentificare';
$strLogout = 'Deconectare';

$strMissingBracket = 'Paranteza lipsa';
$strModifications = 'Modificarile au fost salvate';
$strModify = 'Modificare';
$strModifyIndexTopic = 'Modifica un index';
$strMoreStatusVars = 'Alte variabile de stare';
$strMoveTable = 'Muta tabela la (database<b>.</b>table):';
$strMoveTableOK = 'Tabela %s a fost mutat la %s.';
$strMySQLCharset = 'Setul de caractere MySQL';
$strMySQLReloaded = 'MySQL reincarcat.';
$strMySQLSaid = 'MySQL zice: ';
$strMySQLServerProcess = 'MySQL %pma_s1% ruland pe %pma_s2% ca %pma_s3%';
$strMySQLShowProcess = 'Afiseaza procesele';
$strMySQLShowStatus = 'Afiseaza informatiile runtime MySQL';
$strMySQLShowVars = 'Afiseaza variabilele de sistem MySQL';

$strName = 'Nume';
$strNext = 'Urmatorul';
$strNo = 'Nu';
$strNoDatabases = 'Nu sunt baze de date';
$strNoDatabasesSelected = 'Nu este selectat nici o baza de date.';
$strNoDescription = 'Nu exista descriere';
$strNoDropDatabases = 'Comenzile "DROP DATABASE" sunt dezactivate.';
$strNoExplain = 'Sari peste explicarea SQL';
$strNoFrames = 'phpMyAdmin are o interfata mai prietenoasa cu navigator care lucreaza cu <b>frame-uri</b>.';
$strNoIndex = 'Index nu este definit!';
$strNoIndexPartsDefined = 'Nu sunt definite parti din index!';
$strNoModification = 'Nici o schimbare';
$strNoPassword = 'Nu exista parola';
$strNoPhp = 'fara cod PHP';
$strNoPrivileges = 'Nu exista drepturi de acces';
$strNoQuery = 'Nu exista cerere SQL!';
$strNoRights = 'Nu detineti drepturi de acces pentru a va afla aici!';
$strNoTablesFound = 'Nu s-a gasit nici un tabel in baza de date.';
$strNoUsersFound = 'Nu s-a gasit nici un utilizator.';
$strNoUsersSelected = 'Nu este selectat nici un utilizator.';
$strNoValidateSQL = 'Sari peste validarea SQL';
$strNone = 'Nici unul(a)';
$strNotNumber = 'Acesta nu este un numar!';
$strNotOK = 'Nu este bine';
$strNotSet = '<b>%s</b> tabela nu a fost gasita sau nu este setat in %s';
$strNotValidNumber = 'Nu este un numar valid de linie!';
$strNull = 'Nul';
$strNumSearchResultsInTable = '%s rezultat(e) in interiorul tabelei <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> rezultat(e)';
$strNumTables = 'Tabele';

$strOK = 'E bine';
$strOftenQuotation = 'Adesea ghilimele. OPTIONAL inseamna ca numai campurile char si varchar sunt incluse intre caracterele "incadrat intre".';
$strOperations = 'Operatii';
$strOptimizeTable = 'Optimizare tabel';
$strOptionalControls = 'Optional. Controleaza modul in care se citeste sau se scrie un caracter special.';
$strOptionally = 'OPTIONAL';
$strOptions = 'Optiuni';
$strOr = 'Sau';
$strOverhead = 'Asupra';

$strPHP40203 = 'Folosesti PHP 4.2.3, server care are un bug major la multi-byte strings (mbstring). Vezi PHP bug report la 19404. Aceasta versiune de PHP nu este recomandat de folosit cu phpMyAdmin.';
$strPHPVersion = 'Versiune PHP';
$strPageNumber = 'Numarul paginii:';
$strPartialText = 'Texte partiale';
$strPassword = 'Parola';
$strPasswordChanged = 'Parola pentru %s a fost schimbata cu succes.';
$strPasswordEmpty = 'Parola este goala!';
$strPasswordNotSame = 'Parolele nu corespund!';
$strPdfDbSchema = 'Schema bazei de date "%s" - Pagina %s';
$strPdfInvalidPageNum = 'Numar de pagina la PDF nedefinit!';
$strPdfInvalidTblName = 'Tabela "%s" nu exista!';
$strPdfNoTables = 'Nu exista tabele';
$strPerHour = 'pe ora';
$strPhp = 'Creaza cod PHP';
$strPmaDocumentation = 'Documentatie phpMyAdmin';
$strPmaUriError = 'Directiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> TREBUIE sa fie setat in fisierul de configurare!';
$strPortrait = 'Portrait';
$strPos1 = 'Incepe';
$strPrevious = 'Anterior';
$strPrimary = 'Primar';
$strPrimaryKey = 'Cheie primara';
$strPrimaryKeyHasBeenDropped = 'Cheia primara a fost aruncat';
$strPrimaryKeyName = 'Numele cheii primare trebuie sa fie ... PRIMARY!';
$strPrimaryKeyWarning = '("Numele PRIMARY" <b>trebuie</b> sa fie <b>numai la</b> cheie primara!)';
$strPrint = 'Listare';
$strPrintView = 'Viziualizare imprimare';
$strPrivDescAllPrivileges = 'Include toate privilegiile, excluzand GRANT.';
$strPrivDescAlter = 'Permite alterarea structurii la tabelele deja existente.';
$strPrivDescCreateDb = 'Permite crearea de noi baze de date si tabele.';
$strPrivDescCreateTbl = 'Permite crearea de noi tabele.';
$strPrivDescCreateTmpTable = 'Permite crearea de tabele temporare.';
$strPrivDescDelete = 'Permite stergere de date.';
$strPrivDescDropDb = 'Permite stergerea unei baze de date sau a unor tabele.';
$strPrivDescDropTbl = 'Permite aruncarea a unei baze de date.';
$strPrivDescExecute = 'Permite rularea procedurilor stocate; Nu are efect in aceasta versiune MySQL.';
$strPrivDescFile = 'Permite importarea datelor in fisiere si exportarea acestora din fisiere.';
$strPrivDescGrant = 'Permite adaugarea utilizatorilor si drepturilor fara reincarcarea tabelelor de drepturi.';
$strPrivDescIndex = 'Permite crearea si stergerea indexelor.';
$strPrivDescInsert = 'Permite inserarea si inlocuirea datelor.';
$strPrivDescLockTables = 'Permite blocarea tabelelor din firul curent de executie.';
$strPrivDescMaxConnections = 'Limiteaza numarul de noi conexiuni care pot fi deschise de utilizator intr-o ora.';
$strPrivDescMaxQuestions = 'Limiteaza numarul de comenzi care pot fi trimise de utilizator catre server intr-o ora.';
$strPrivDescMaxUpdates = 'Limiteaza numarul de comenzi pentru schimbarea vreunui tabel sau vreunei baza de date executabile de utilizator intr-o ora.';
$strPrivDescProcess3 = 'Permite oprirea proceselor altor utilizatori.';
$strPrivDescProcess4 = 'Permite vizualizarea comenzilor procesate in lista.';
$strPrivDescReferences = 'Nu are efect in aceasta versiune MySQL.';
$strPrivDescReload = 'Permite reincarcarea setarilor de server si golirea memoriei cache a serverului.';
$strPrivDescReplClient = 'Permite utilizatorului de a interoga locatia slave/master.';
$strPrivDescReplSlave = 'Necesara pentru slave replication.';
$strPrivDescSelect = 'Permite citirea datelor.';
$strPrivDescShowDb = 'Permite accesul la lista completa a bazelor de date.';
$strPrivDescShutdown = 'Permite oprirea serverului.';
$strPrivDescSuper = 'Permite conoxiuni, chiar daca s-a atins numarul maxim de conexiuni; Necesara pentru majoritatea operatiunilor administrative cum ar fi setarea variabilelor globale sau oprirea fierlor de executie a altor utilizatori.';
$strPrivDescUpdate = 'Permite schimbarea datelor.';
$strPrivDescUsage = 'Fara drepturi.';
$strPrivileges = 'Drepturi de acces';
$strPrivilegesReloaded = 'Drepturile au fost reincarcate cu succes.';
$strProcesslist = 'Lista procese';
$strProperties = 'Atribute';
$strPutColNames = 'Pune numele filed-ului in primul rand';

$strQBE = 'Comanda prin exemplu (Query by Example)';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryOnDb = 'Comanda SQL pe baza de date <b>%s</b>:';
$strQueryStatistics = '<b>Statistica interogari</b>: De la inceput, s-au trimis %s interogari la server.';
$strQueryType = 'Tip interogare';

$strReType = 'Re-type';
$strReceived = 'Receptionat';
$strRecords = 'Inregistrari';
$strReferentialIntegrity = 'Verificarea integritatii referentiei:';
$strRelationNotWorking = 'Optiunile aditionale pentru folosirea tabelelor intercalate (legate intre ele) au fost dezactivate. Pentru a afla de ce ...  %shere%s.';
$strRelationView = 'Vizualizare relationala';
$strRelationalSchema = 'Schema relationala';
$strReloadFailed = 'Reincarcare MySQL nereusita.';
$strReloadMySQL = 'Reincarcare MySQL';
$strReloadingThePrivileges = 'Reincarcarea drepturilor';
$strRememberReload = 'Nu uitati sa reincarcati serverul.';
$strRemoveSelectedUsers = 'Eliminarea utilizatorilor selectati';
$strRenameTable = 'Rename tabel la';
$strRenameTableOK = 'Tabelului %s i s-a dat un numele de %s';
$strRepairTable = 'Reparare tabel';
$strReplace = 'Inlocuire';
$strReplaceTable = 'Inlocuieste datele tabelului cu fisier';
$strReset = 'Resetare';
$strResourceLimits = 'Limitare de resurse';
$strRevoke = 'Revocare';
$strRevokeAndDelete = 'Revocarea tuturor drepturilor active a utilizatorilor si stergerea acestora.';
$strRevokeAndDeleteDescr = 'Utilizatorii vor avea in continuare drepturi de UTILIZARE pana ce drepturile se reincarca.';
$strRevokeGrant = 'Revocare Grant';
$strRevokeGrantMessage = 'Drepturile tale Grant au fost revocate pentru %s';
$strRevokeMessage = 'Drepturile tale au fost revocate pentru %s';
$strRevokePriv = 'Revocare drepturi de acces';
$strRowLength = 'Lungime linie';
$strRowSize = ' Marime linie ';
$strRows = 'Linie';
$strRowsFrom = 'linii incepand cu';
$strRowsModeHorizontal = 'orizontal';
$strRowsModeOptions = 'in mod %s si repetare antet dupa %s celule';
$strRowsModeVertical = 'vertical';
$strRowsStatistic = 'Statisticile randului';
$strRunQuery = 'Trimite comanda';
$strRunSQLQuery = 'Run SQL query/queries pe baza de date %s';
$strRunning = 'ruland pe %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Exista o posibilitate de a fi gasit un BUG in parserul SQL. Verifica atent inca o data comanda si verifica daca semnele specifice sunt corecte. O alta posibilitate ar putea fi punerea unui fisier binar in afara zonei de text. Poti incerca aceasta comanda si printr-o linie de comanda MySQL. Eroarea MySQL de mai jos, daca e vreuna, poate sa te ajute la diagnosticarea problemei. Daca in continuare ai probleme cu executarea comenzii, redu o parte din comanda la aceea parte care cauzeaza problema si raporteaza acesta ca un BUG in sectiunea DE TAIAT';
$strSQLParserUserError = 'Pare sa fie o eroare in comanda SQL. Eroarea MySQL de mai jos, daca e vreuna, poate sa te ajute la diagnosticarea problemei';
$strSQLQuery = 'Comansa SQL';
$strSQLResult = 'Rezultat SQL';
$strSQPBugInvalidIdentifer = 'Identificator invalid';
$strSQPBugUnclosedQuote = 'Citare neinchisa';
$strSQPBugUnknownPunctuation = 'Insiruire de punctuatie necunoscuta';
$strSave = 'Salveaza';
$strScaleFactorSmall = 'Factorul de scalare este prea mica pentru a inchepe in pagina';
$strSearch = 'Cauta';
$strSearchFormTitle = 'Cauta in baza de date';
$strSearchInTables = 'In interiorul tabelei(lor):';
$strSearchNeedle = 'Cuvant(e) sau valoare(ori) de cautat pentru (wildcard: "%"):';
$strSearchOption1 = 'cel putin una dintre cuvinte';
$strSearchOption2 = 'toate cuvintele';
$strSearchOption3 = 'fraza exacta';
$strSearchOption4 = 'ca o expresie';
$strSearchResultsFor = 'Cauta rezultate pentru "<i>%s</i>" %s:';
$strSearchType = 'Gaseste:';
$strSelect = 'Selecteaza';
$strSelectADb = 'Selectati baza de date';
$strSelectAll = 'Selecteaza tot';
$strSelectFields = 'Selecteaza campurile (cel putin unul):';
$strSelectNumRows = 'in comanda (in query)';
$strSelectTables = 'Selecteaza tabele';
$strSend = 'Trimite';
$strSent = 'Trimis';
$strServer = 'Server %s';
$strServerChoice = 'Alegerea serverului';
$strServerStatus = 'Informatii rulare';
$strServerStatusUptime = 'Acest server MySQL ruleaza de %s. S-a lansat la %s.';
$strServerTabProcesslist = 'Procese';
$strServerTabVariables = 'Variabile';
$strServerTrafficNotes = '<b>Server trafic</b>: Aceste tabele arata statistica de trafic in retea al acestui server MySQL de la lansare.';
$strServerVars = 'Variabile si setari de server';
$strServerVersion = 'Versiune server';
$strSessionValue = 'Valoare sesiune';
$strSetEnumVal = 'Daca campul este "enum" sau "set", va rugam adaugati valori folosind formatul: \'a\',\'b\',\'c\'...<br />Daca aveti nevoie sa puneti bara intoarsa (backslash) ("\") sau semnul ("\'") la aceste valori, folositi exemplul ( \'\\\\xyz\' or \'a\\\'b\').';
$strShow = 'Afiseaza';
$strShowAll = 'Arata toate';
$strShowColor = 'Arata culoarea';
$strShowCols = 'Arata coloanele';
$strShowDatadictAs = 'Data Dictionary Format';
$strShowGrid = 'Arata grila';
$strShowPHPInfo = 'Arata informatia PHP';
$strShowTableDimension = 'Arata dimensiunile tabelei';
$strShowTables = 'Arata tabelele';
$strShowThisQuery = ' Afiseaza aceasta comanda din nou aici ';
$strShowingRecords = 'Afiseaza inregistrari';
$strSingly = '(singly)';
$strSize = 'Marime';
$strSort = 'Sortare';
$strSpaceUsage = 'Utilizare spatiu';
$strSplitWordsWithSpace = 'Cuvinte sparte de un spatiu (" ").';
$strStatement = 'Comenzi';
$strStatus = 'Status';
$strStrucCSV = 'Date CSV';
$strStrucData = 'Structura si date';
$strStrucDrop = 'Adauga \'salveaza tabel\'';
$strStrucExcelCSV = 'Date CSV pentru MS Excel';
$strStrucOnly = 'Numai structura';
$strStructPropose = 'Propune structura de tabele';
$strStructure = 'Structura';
$strSubmit = 'Trimite';
$strSuccess = 'Comanda dumneavoastra SQL a fost executata cu succes';
$strSum = 'Sum';

$strTable = 'Tabel';
$strTableComments = 'Comentarii tabel';
$strTableEmpty = 'Numele de tabel este gol!';
$strTableHasBeenDropped = 'Tabelul %s a fost aruncat';
$strTableHasBeenEmptied = 'Tabelul %s a fost golit';
$strTableHasBeenFlushed = 'Tabelul %s a fost curatat';
$strTableMaintenance = 'Administrare tabel';
$strTableOfContents = 'Sumar';
$strTableStructure = 'Structura de tabel pentru tabelul';
$strTableType = 'Tipul tabelului';
$strTables = '%s tabele';
$strTblPrivileges = 'Drepturi specifice de tabele';
$strTextAreaLength = ' Datorita lungimii sale, <br /> acest camp s-ar putea sa nu fie editabil';
$strTheContent = 'Continutul fisierului dumneavoastra a fost inserat.';
$strTheContents = 'Continutul acestui fisier inlocuieste continutul tabelului selectat pentru liniile cu cheie primara identica.';
$strTheTerminator = 'Terminatorul campurilor.';
$strThisHost = 'Acest Host';
$strThisNotDirectory = 'Acesta nu este un director';
$strThreadSuccessfullyKilled = 'Firul de executie %s a fost oprit cu succes.';
$strTime = 'Timp';
$strTotal = 'total';
$strTotalUC = 'Total';
$strTraffic = 'Trafic';
$strType = 'Tip';

$strUncheckAll = 'Deselecteaza toate';
$strUnique = 'Unic';
$strUnselectAll = 'Deselecteaza tot';
$strUpdatePrivMessage = 'Ati actualizat privilegiile pentru %s.';
$strUpdateProfile = 'Actualizarea profilului:';
$strUpdateProfileMessage = 'Profilul a fost actualizat.';
$strUpdateQuery = 'Reinnoire comanda';
$strUsage = 'Utilizare';
$strUseBackquotes = 'Utilizati apostroful pentru numele tabelelor si a campurilor';
$strUseTables = 'Utilizare tabele';
$strUseTextField = 'Utilizare camp text';
$strUser = 'Utilizator';
$strUserAlreadyExists = 'Acest utilizator %s exista deja!';
$strUserEmpty = 'Numele de utilizator este gol!';
$strUserName = 'Nume de utilizator';
$strUserNotFound = 'Utilizatorul selectat nu s-a gasit in tabelul de drepturi.';
$strUserOverview = 'Descriere utilizator';
$strUsers = 'Utilizatori';
$strUsersDeleted = 'Utilizatorii selectati s-au sters cu succes.';
$strUsersHavingAccessToDb = 'Utilizatorul are acces la &quot;%s&quot;';

$strValidateSQL = 'Valideaza SQL';
$strValidatorError = 'Validatorul SQL nu poate fi initializat. Verifica daca e instalat extesnsia necesara PHP asa cum e descris in %sdocumentation%s.';
$strValue = 'Valoare';
$strVar = 'Variabil';
$strViewDump = 'Vizualizarea schemei tabelului';
$strViewDumpDB = 'Vizualizarea schemei bazei de date';

$strWebServerUploadDirectory = 'director de upload al web-server-ului';
$strWebServerUploadDirectoryError = 'Directorul setat pentru upload nu poate fi gasit';
$strWelcome = 'Bine ai venit la %s';
$strWildcard = 'wildcard';
$strWithChecked = 'Verificat cu:';
$strWritingCommentNotPossible = 'Scrierea unui comentariu nu este posibil';
$strWritingRelationNotPossible = 'Scrierea unei relatii nu este posibil';
$strWrongUser = 'Nume de utilizator/Parola incorecta. Accesul interzis.';

$strYes = 'Da';

$strZeroRemovesTheLimit = 'Observatie: Prin setarea acestor optiuni la 0 (zero) se elimina restrictia.';
$strZip = '"arhivat"';
// To translate

$strRowsModeFlippedHorizontal = 'horizontal (rotated headers)';//to translate
$strQueryTime = 'Query took %01.4f sec';//to translate
$strDumpComments = 'Include column comments as inline SQL-comments';//to translate
$strDBComment = 'Database comment: ';//to translate
$strQueryFrame = 'Query window';//to translate
$strQueryFrameDebug = 'Debugging information';//to translate
$strQueryFrameDebugBox = 'Active variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nCurrent variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nOpener location: %s\nFrameset location: %s.';//to translate
$strQuerySQLHistory = 'SQL-history';//to translate
$strMIME_MIMEtype = 'MIME-type';//to translate
$strMIME_transformation = 'Browser transformation';//to translate
$strMIME_transformation_options = 'Transformation options';//to translate
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';//to translate
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';//to translate
$strMIME_available_mime = 'Available MIME-types';//to translate
$strMIME_available_transform = 'Available transformations';//to translate
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';//to translate
$strMIME_description = 'Description';//to translate
$strMIME_nodescription = 'No Description is available for this transformation.<br />Please ask the author, what %s does.';//to translate
$strMIME_file = 'Filename';//to translate
$strTransformation_text_plain__formatted = 'Preserves original formatting of the field. No Escaping is done.';//to translate
$strTransformation_text_plain__unformatted = 'Displays HTML code as HTML entities. No HTML formatting is shown.';//to translate
$strTransformation_image_jpeg__link = 'Displays a link to this image (direct blob download, i.e.).';//to translate
$strInnodbStat = 'InnoDB Status';  //to translate
$updComTab = 'Please see Documentation on how to update your Column_comments Table';  //to translate
$strTransformation_image_jpeg__inline = 'Displays a clickable thumbnail; options: width,height in pixels (keeps the original ratio)';  //to translate
$strTransformation_image_png__inline = 'See image/jpeg: inline';  //to translate
$strSQLOptions = 'SQL options';//to translate
$strXML = 'XML';//to translate
$strCSVOptions = 'CSV options';//to translate
$strNoOptions = 'This format has no options';//to translate
$strStatCreateTime = 'Creation';//to translate
$strStatUpdateTime = 'Last update';//to translate
$strStatCheckTime = 'Last check';//to translate
$strPerMinute = 'per minute';//to translate
$strPerSecond = 'per second';//to translate
$strAutomaticLayout = 'Automatic layout';  //to translate
$strDelOld = 'The current Page has References to Tables that no longer exist. Would you like to delete those References?';  //to translate
$strFileNameTemplate = 'File name template';//to translate 
$strFileNameTemplateRemember = 'remember template';//to translate 
$strFileNameTemplateHelp = 'Use __DB__ for database name, __TABLE__ for table name and %sany strftime%s options for time specification, extension will be automagically added. Any other text will be preserved.';//to translate
$strTransformation_text_plain__dateformat = 'Takes a TIME, TIMESTAMP or DATETIME field and formats it using your local dateformat. First option is the offset (in hours) which will be added to the timestamp (Default: 0). Second option is a different dateformat according to the parameters available for PHPs strftime().';//to translate
$strTransformation_text_plain__substr = 'Only shows part of a string. First option is an offset to define where the output of your text starts (Default 0). Second option is an offset how much text is returned. If empty, returns all the remaining text. The third option defines which chars will be appended to the output when a substring is returned (Default: ...) .';//to translate
$strTransformation_text_plain__external = 'LINUX ONLY: Launches an external application and feeds the fielddata via standard input. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';//to translate
$strAutodetect = 'Autodetect';  //to translate
$strTransformation_text_plain__imagelink = 'Displays an image and a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is the width in pixels, third is the height.';  //to translate
$strTransformation_text_plain__link = 'Displays a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is a title for the link.';  //to translate
$strUseHostTable = 'Use Host Table';  //to translate
$strShowFullQueries = 'Show Full Queries';  //to translate
$strTruncateQueries = 'Truncate Shown Queries';  //to translate
?>
