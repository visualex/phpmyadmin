<?php
/* $Id$ */

/**
 * Portuguese language file by
 *   Lopo Pizarro <lopopizarro@users.sourceforge.net>
 *   António Raposo <cfmsoft@users.sourceforge.net>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab');
$month = array('Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d-%B-%Y às %H:%M';

$strAPrimaryKey = 'Uma chave primária foi adicionada a %s';
$strAccessDenied = 'Acesso Negado';
$strAction = 'Acções';
$strAddDeleteColumn = 'Adicionar/Remover Campos';
$strAddDeleteRow = 'Adicionar/Remover Critérios';
$strAddNewField = 'Adiciona novo campo';
$strAddPriv = 'Acrescenta um novo Privilégio';
$strAddPrivMessage = 'Acrescentou um novo privilégio.';
$strAddSearchConditions = 'Condição de Pesquisa (Complemento da clausula "where"):';
$strAddToIndex = 'Adicionar ao índice &nbsp;%s&nbsp;coluna(s)';
$strAddUser = 'Acrescenta um utilizador';
$strAddUserMessage = 'Acrescentou um novo utilizador.';
$strAffectedRows = 'Linhas afectadas:';
$strAfter = 'Depois %s';
$strAfterInsertBack = 'Voltar atrás';
$strAfterInsertNewInsert = 'Inserir novo registo';
$strAll = 'Todas';
$strAllTableSameWidth = 'mostrar todas as tabelas com a mesma altura?';
$strAlterOrderBy = 'Alterar a ordem da tabela por';
$strAnIndex = 'Um índice foi adicionado a %s';
$strAnalyzeTable = 'Analizar tabela';
$strAnd = 'E';
$strAny = 'Todos';
$strAnyColumn = 'Qualquer coluna';
$strAnyDatabase = 'Qualquer base de dados';
$strAnyHost = 'Qualquer máquina';
$strAnyTable = 'Qualquer tabela';
$strAnyUser = 'Qualquer utilizador';
$strAscending = 'Ascendente';
$strAtBeginningOfTable = 'No Início da Tabela';
$strAtEndOfTable = 'No Fim da Tabela';
$strAttr = 'Atributos';

$strBack = 'Voltar';
$strBinary = ' Binário ';
$strBinaryDoNotEdit = ' Binário - não editar ';
$strBookmarkDeleted = 'Marcador apagado com sucesso.';
$strBookmarkLabel = 'Etiqueta';
$strBookmarkQuery = 'Comandos SQL marcados';
$strBookmarkThis = 'Marcar este comando SQL';
$strBookmarkView = 'Ver apenas';
$strBrowse = 'Visualiza';
$strBzip = '"Compressão bzip"';

$strCantLoadMySQL = 'não foi possível carregar a extensão MySQL,<br />por favor verifique a configuração do PHP.';
$strCantLoadRecodeIconv = 'Não é possível carregar <i>iconv</i> ou recodificar a extensão necessária para a conversão do Mapa de Caracteres, configure o php de modo a permitir utilizar estas extensões ou desligue a conversão do mapa de caracteres no phpmyadmin.';
$strCantRenameIdxToPrimary = 'Impossível renomear índice para PRIMARY!';
$strCantUseRecodeIconv = 'Não é possível usar <i>iconv</i> nem <i>libiconv</i> nem a função <i>recode_string</i> enquanto a extensão reportar que está ligada. Confira a configuração do seu php.';
$strCardinality = 'Quantidade';
$strCarriage = 'Fim de linha: \\r';
$strChange = 'Muda';
$strChangeDisplay = 'Escolha campo para mostrar';
$strChangePassword = 'Alterar a senha';
$strCheckAll = 'Todos';
$strCheckDbPriv = 'Visualiza os Privilégios da Base de Dados';
$strCheckTable = 'Verificar tabela';
$strChoosePage = 'Escolha uma Página para editar';
$strColComFeat = 'Mostrando comentários das Colunas';
$strColumn = 'Campo';
$strColumnNames = 'Nome dos Campos';
$strComments = 'Comentários';
$strCompleteInserts = 'Instrucções de inserção completas';
$strCompression = 'Compressão';
$strConfigFileError = 'O phpMyAdmin não foi capaz de ler o ficheiro de configuração!<br />Isto pode acontecer se o php encontrar um erro no <i>parsing</i>  ou se não conseguir encontrar o ficheiro.<br />Chame o ficheiro de configuração directamente usando o <i>link</i> a baixo e leia a(s) mensagem(ns) de erro do php. Na maior parte dos casos, trata-se de uma falta de aspas ou de um ponto e vírgula algures.<br />Se receber uma página em branco, está tudo correcto.';
$strConfigureTableCoord = 'Configure as cordenadas para a tabela %s';
$strConfirm = 'Confirma a sua opção?';
$strCookiesRequired = 'O mecanismo de "Cookies" tem de estar ligado a partir deste ponto.';
$strCopyTable = 'Copia tabela para (base-de-dados<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s copiada para %s.';
$strCreate = 'Criar';
$strCreateIndex = 'Criar um índice com&nbsp;%s&nbsp;coluna(s)';
$strCreateIndexTopic = 'Criar um novo índice';
$strCreateNewDatabase = 'Criar nova base de dados';
$strCreateNewTable = 'Criar nova tabela na base de dados %s';
$strCreatePage = 'Criar uma Página nova';
$strCreatePdfFeat = 'Criação de PDFs';
$strCriteria = 'Critérios';

$strData = 'Dados';
$strDataOnly = 'Apenas dados';
$strDatabase = 'Base de Dados ';
$strDatabaseHasBeenDropped = 'A base de dados %s foi eliminada.';
$strDatabaseWildcard = 'Base de Dados (aceita caracteres universais):';
$strDatabases = 'Base de Dados';
$strDatabasesStats = 'Estatísticas das bases de dados';
$strDefault = 'Defeito';
$strDelete = 'Apagar';
$strDeleteFailed = 'Erro ao apagar!';
$strDeleteUserMessage = 'Apagou o utilizador %s.';
$strDeleted = 'Registo eliminado';
$strDeletedRows = 'Linhas apagadas:';
$strDescending = 'Descendente';
$strDisabled = 'Desactidado';
$strDisplay = 'Mostra';
$strDisplayFeat = 'Mostrar Características';
$strDisplayOrder = 'Ordem de visualização:';
$strDisplayPDF = 'Mostrar o esquema de PDF';
$strDoAQuery = 'Faça uma "pesquisa por formulário" (caractere universal: "%")';
$strDoYouReally = 'Confirma : ';
$strDocu = 'Documentação';
$strDrop = 'Elimina';
$strDropDB = 'Elimina a base de dados %s';
$strDropTable = 'Elimina tabela';
$strDumpXRows = 'Exporta %s registos começando em %s.';
$strDumpingData = 'Extraindo dados da tabela';
$strDynamic = 'dinâmico';

$strEdit = 'Edita';
$strEditPDFPages = 'Editar páginas PDF';
$strEditPrivileges = 'Alterar Privilegios';
$strEffective = 'Em uso';
$strEmpty = 'Limpa';
$strEmptyResultSet = 'MySQL não retornou nenhum registo.';
$strEnabled = 'Activado';
$strEnd = 'Fim';
$strEnglishPrivileges = ' Nota: os nomes dos privilégios do MySQL são em Inglês ';
$strError = 'Erro';
$strExport = 'Exportar';
$strExportToXML = 'Exportar para o formato XML';
$strExtendedInserts = 'Instrucções de inserção múltiplas';
$strExtra = 'Extra'; // written the same in portuguese

$strField = 'Campo';
$strFieldHasBeenDropped = 'O campo %s foi eliminado';
$strFields = 'Qtd Campos';
$strFieldsEmpty = ' Número de campos inválido! ';
$strFieldsEnclosedBy = 'Campos delimitados por';
$strFieldsEscapedBy = 'Campos precedidos por';
$strFieldsTerminatedBy = 'Campos terminados por';
$strFixed = 'fixo';
$strFlushTable = 'Fecha a tabela ("FLUSH")';
$strFormEmpty = 'Nº de dados insuficiente!\nPreencha todas as opções!';
$strFormat = 'Formato';
$strFullText = 'Texto inteiro';
$strFunction = 'Funções';

$strGenBy = 'Gerado por';
$strGenTime = 'Data de Criação';
$strGeneralRelationFeat = 'Características gerais de Relação';
$strGo = 'Executa';
$strGrants = 'Autorizações';
$strGzip = '"Compressão gzip"';

$strHasBeenAltered = 'foi alterado(a).';
$strHasBeenCreated = 'foi criado(a).';
$strHaveToShow = 'Tem que escolher pelo menos uma coluna para mostrar';
$strHome = 'Início';
$strHomepageOfficial = 'Página Oficial do phpMyAdmin';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin - Página de Download';
$strHost = 'Máquina';
$strHostEmpty = 'O nome da máquina está vazio!';

$strIdxFulltext = 'Texto Completo';
$strIfYouWish = 'Para carregar apenas algumas colunas da tabela, faça uma lista separada por virgula.';
$strIgnore = 'Ignora';
$strInUse = 'em uso';
$strIndex = 'Índice';
$strIndexHasBeenDropped = 'O Índice %s foi eliminado';
$strIndexName = 'Nome do Índice&nbsp;:';
$strIndexType = 'Tipo de Índice&nbsp;:';
$strIndexes = 'Índices';
$strInsert = 'Insere';
$strInsertAsNewRow = 'Insere como novo registo';
$strInsertNewRow = 'Insere novo registo';
$strInsertTextfiles = 'Insere arquivo texto na tabela';
$strInsertedRows = 'Registos inseridos :';
$strInstructions = 'Instruções';
$strInvalidName = '"%s" é uma palavra reservada, não pode usar como nome de base de dados/tabela/campo.';

$strKeepPass = 'Sem alterar senha';
$strKeyname = 'Nome do Índice';
$strKill = 'Termina';

$strLength = 'Comprimento';
$strLengthSet = 'Tamanho/Valores*';
$strLimitNumRows = 'Número de registos por página';
$strLineFeed = 'Mudança de linha: \\n';
$strLines = 'Linhas';
$strLinesTerminatedBy = 'Linhas terminadas por';
$strLinkNotFound = 'Link não encontrado';
$strLinksTo = 'Links para';
$strLocationTextfile = 'Localização do arquivo de texto';
$strLogPassword = 'Senha&nbsp;:';
$strLogUsername = 'Utilizador&nbsp;:';
$strLogin = 'Entrada';
$strLogout = 'Sair';

$strMissingBracket = 'Falta de parêntesis recto';
$strModifications = 'Modificações foram guardadas';
$strModify = 'Modifica';
$strModifyIndexTopic = 'Modificar um índice';
$strMoveTable = 'Move tabela para (base de dados<b>.</b>tabela):';
$strMoveTableOK = 'A tabela %s foi movida para %s.';
$strMySQLCharset = 'Mapa de Caracteres do mySQL';
$strMySQLReloaded = 'MySQL reiniciado.';
$strMySQLSaid = 'Mensagens do MySQL : ';
$strMySQLServerProcess = 'MySQL %pma_s1% a correr em %pma_s2% como %pma_s3%';
$strMySQLShowProcess = 'Mostra os Processos';
$strMySQLShowStatus = 'Mostra informação do estado do MySQL';
$strMySQLShowVars = 'Mostra as variáveis de sistema do MySQL';

$strName = 'Nome';
$strNext = 'Próximo';
$strNo = 'Não';
$strNoDatabases = 'Sem bases de dados';
$strNoDescription = 'sem Descrição';
$strNoDropDatabases = 'Os comandos "DROP DATABASE" estão inibidos.';
$strNoFrames = 'O phpMyAdmin torna-se mais agradável se usado num browser que suporte <b>frames</b>.';
$strNoIndex = 'Nenhum indíce definido!';
$strNoIndexPartsDefined = 'Nenhuma parte do índice definida!';
$strNoModification = 'Sem alterações';
$strNoPassword = 'Sem Senha';
$strNoPhp = 'sem código PHP';
$strNoPrivileges = 'Sem Privilégios';
$strNoQuery = 'Nenhum comando SQL encontrado!';
$strNoRights = 'Não tem permissões suficientes para aceder aqui, neste momento!';
$strNoTablesFound = 'Nenhuma tabela encontrada na base de dados';
$strNoUsersFound = 'Nenhum utilizador encontrado.';
$strNone = 'Nenhum';
$strNotNumber = 'Isto não é um número!';
$strNotOK = 'não está OK';
$strNotSet = 'A Tabela <b>%s</b> não foi encontrada ou não foi definida em %s';
$strNotValidNumber = ' não é um número de registo válido!';
$strNull = 'Nulo';
$strNumSearchResultsInTable = '%s resultado(s) na tabela <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> resultado(s)';

$strOK = 'OK';  //Same in portuguese
$strOftenQuotation = 'Normalmente aspas. OPTIONALLY significa que apenas os campos "char" e "varchar" são delimitados pelo caractere delimitador.';
$strOperations = 'Operações';
$strOptimizeTable = 'Optimizar tabela';
$strOptionalControls = 'Opcional. Comanda o modo de escrita e leitura dos caracteres especiais.';
$strOptionally = 'OPCIONAL';
$strOptions = 'Opções';
$strOr = 'Ou';
$strOverhead = 'Suspenso';

$strPHPVersion = 'versão do PHP';
$strPageNumber = 'Página número:';
$strPartialText = 'Texto parcial';
$strPassword = 'Senha';
$strPasswordEmpty = 'Indique a Senha!';
$strPasswordNotSame = 'As senhas são diferentes!\nLembre-se de confirmar a senha!';
$strPdfDbSchema = 'Esquema da base de dados "%s" - Página %s';
$strPdfInvalidPageNum = 'Numero da página do PDF indefinido!';
$strPdfInvalidTblName = 'A tabela "%s" não existe!';
$strPdfNoTables = 'Sem tablelas';
$strPhp = 'Criar código PHP';
$strPmaDocumentation = 'Documentação do phpMyAdmin';
$strPmaUriError = 'A directiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> TEM que ser definida no ficheiro de configuração!';
$strPos1 = 'Inicio';
$strPrevious = 'Anterior';
$strPrimary = 'Primária';
$strPrimaryKey = 'Chave Primária';
$strPrimaryKeyHasBeenDropped = 'A chave primária foi eliminada';
$strPrimaryKeyName = 'O nome da chave primária tem de ser... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>tem</b> de ser o nome de e <b>apenas de</b> uma chave primária!)';
$strPrintView = 'Vista de impressão';
$strPrivileges = 'Privilégios';
$strProperties = 'Propriedades';

$strQBE = 'Pesquisa por formulário';
$strQBEDel = 'Elim.';
$strQBEIns = 'Ins.';
$strQueryOnDb = 'Comando SQL na base de dados <b>%s</b>:';

$strReType = 'Confirma';
$strRecords = 'Registos';
$strReferentialIntegrity = 'Verificar Integridade referencial:';
$strRelationNotWorking = 'As Características adicionais para trabalhar com ligações entre Tabelas foram desactivadas. Para saber porquê carregue %saqui%s.';
$strRelationView = 'Vista de Relação';
$strReloadFailed = 'Reiniciação do MySQL falhou.';
$strReloadMySQL = 'Reiniciar o MySQL';
$strRememberReload = 'Lembre-se de reiniciar o servidor.';
$strRenameTable = 'Renomeia a tabela para ';
$strRenameTableOK = 'Tabela %s renomeada para %s';
$strRepairTable = 'Reparar tabela';
$strReplace = 'Substituir';
$strReplaceTable = 'Substituir os dados da tabela pelos do arquivo';
$strReset = 'Limpa';
$strRevoke = 'Anula';
$strRevokeGrant = 'Anula Autorização';
$strRevokeGrantMessage = 'Anulou a autorização para %s';
$strRevokeMessage = 'Anulou os privilégios para %s';
$strRevokePriv = 'Anula Privilégios';
$strRowLength = 'Comprim. dos reg.';
$strRowSize = ' Tamanho dos reg.';
$strRows = 'Registos';
$strRowsFrom = 'registos começando em';
$strRowsModeHorizontal = 'horizontal';  // written the same in portuguese!
$strRowsModeOptions = 'em modo %s com cabeçalhos repetidos a cada %s células';
$strRowsModeVertical = 'vertical';  // written the same in portuguese!
$strRowsStatistic = 'Estatísticas dos registos';
$strRunQuery = 'Executa Comando SQL';
$strRunSQLQuery = 'Executa comando(s) SQL na base de dados %s';
$strRunning = 'a correr em %s';

$strSQL = 'SQL';
$strSQLQuery = 'Comando SQL';
$strSQLResult = 'Resultado SQL';
$strSave = 'Guarda';
$strScaleFactorSmall = 'O factor escala é muito pequeno para encaixar o esquema numa página';
$strSearch = 'Pesquisar';
$strSearchFormTitle = 'Pesquisar na Base de Dados';
$strSearchInTables = 'Dentro de Tabela(s):';
$strSearchNeedle = 'Palavra(s) ou valor(es) para pesquisar para (wildcard: "%"):';
$strSearchOption1 = 'pelo menos uma das palavras';
$strSearchOption2 = 'todas as palavras';
$strSearchOption3 = 'a frase exacta';
$strSearchOption4 = 'as regular expression';
$strSearchResultsFor = 'Procurar resultados para "<i>%s</i>" %s:';
$strSearchType = 'Procurar:';
$strSelect = 'Selecciona';
$strSelectADb = 'Por favor seleccione uma base de dados';
$strSelectAll = 'Selecciona Todas';
$strSelectFields = 'Seleccione os campos (no mínimo 1)';
$strSelectNumRows = 'na pesquisa';
$strSelectTables = 'Seleccionar Tabelas';
$strSend = 'envia';
$strServerChoice = 'Escolha do Servidor';
$strServerVersion = 'Versão do servidor';
$strSetEnumVal = 'Se o tipo de campo é "enum" ou "set", por favor introduza os valores no seguinte formato: \'a\',\'b\',\'c\'...<br />Se precisar de colocar uma barra invertida ("\") ou um apóstrofe ("\'") entre esses valores, coloque uma barra invertida antes (por exemplo \'\\\\xyz\' ou \'a\\\'b\').';
$strShow = 'Mostra';
$strShowAll = 'Mostrar tudo';
$strShowColor = 'Mostrar côr';
$strShowCols = 'Mostra Colunas';
$strShowGrid = 'Mostrar grelha';
$strShowPHPInfo = 'Mostra informação do PHP';
$strShowTableDimension = 'Mostrar dimensão das tabelas';
$strShowTables = 'Mostra tabelas';
$strShowThisQuery = ' Mostrar de novo aqui este comando ';
$strShowingRecords = 'Mostrando registos ';
$strSingly = '(A refazer após inserir/eliminar)';
$strSize = 'Tamanho';
$strSort = 'Ordenação';
$strSpaceUsage = 'Espaço ocupado';
$strSplitWordsWithSpace = 'As palavras são separadas pelo caracter espaço (" ").';
$strStatement = 'Itens';
$strStrucCSV = 'Dados CSV';
$strStrucData = 'Estrutura e dados';
$strStrucDrop = 'Adiciona \'drop table\'';
$strStrucExcelCSV = 'dados CSV para Ms Excel';
$strStrucOnly = 'Somente estrutura';
$strStructPropose = 'Propor uma estrutura de tabela';
$strStructure = 'Estrutura';
$strSubmit = 'Submete';
$strSuccess = 'O seu comando SQL foi executado com sucesso';
$strSum = 'Soma';

$strTable = 'Tabela';
$strTableComments = 'Comentários da tabela';
$strTableEmpty = 'O nome da tabela está vazio!';
$strTableHasBeenDropped = 'A tabela %s foi eliminada';
$strTableHasBeenEmptied = 'A tabela %s foi limpa';
$strTableHasBeenFlushed = 'A tabela %s foi fechada';
$strTableMaintenance = 'Manutenção da tabela';
$strTableStructure = 'Estrutura da tabela';
$strTableType = 'Tipo de tabela';
$strTables = '%s tabela(s)';
$strTextAreaLength = ' Devido ao seu tamanho,<br /> este campo pode não ser editável ';
$strTheContent = 'O conteúdo do seu arquivo foi inserido';
$strTheContents = 'O conteúdo do arquivo substituiu o conteúdo da tabela que tinha a mesma chave primária ou única';
$strTheTerminator = 'Terminador de campos.';
$strTotal = 'total';
$strType = 'Tipo';

$strUncheckAll = 'Nenhum';
$strUnique = 'Único';
$strUnselectAll = 'Limpa Todas as Selecções';
$strUpdatePrivMessage = 'Actualizou os privilégios de %s.';
$strUpdateProfile = 'Actualiza o prefil:';
$strUpdateProfileMessage = 'O prefil foi actualizado.';
$strUpdateQuery = 'Actualiza Comando SQL';
$strUsage = 'Utilização';
$strUseBackquotes = 'Usar apóstrofes com os nomes das tabelas e campos';
$strUseTables = 'Usar Tabelas';
$strUser = 'Utilizador';
$strUserEmpty = 'O nome do utilizador está vazio!';
$strUserName = 'Nome do Utilizador';
$strUsers = 'Utilizadores';

$strValue = 'Valor';
$strViewDump = 'Ver o esquema da tabela';
$strViewDumpDB = 'Ver o esquema da base de dados';

$strWelcome = 'Bemvindo ao %s';
$strWithChecked = 'Com os seleccionados:';
$strWrongUser = 'Utilizador ou Senha errada. Acesso Negado.';

$strYes = 'Sim';

$strZip = '"Compressão zip"';

$strBeginCut = 'BEGIN CUT';  //to translate
$strBeginRaw = 'BEGIN RAW';  //to translate

$strCharsetOfFile = 'Character set of the file:'; //to translate

$strDataDict = 'Data Dictionary';  //to translate

$strEndCut = 'END CUT';  //to translate
$strEndRaw = 'END RAW';  //to translate
$strExplain = 'Explain SQL';  //to translate

$strImportDocSQL = 'Import docSQL Files';  //to translate
$strInsecureMySQL = 'Your configuration file contains settings (root with no password) that correspond to the default MySQL privileged account. Your MySQL server is running with this default, is open to intrusion, and you really should fix this security hole.';  //to translate

$strNoExplain = 'Skip Explain SQL';  //to translate
$strNoValidateSQL = 'Skip Validate SQL';  //to translate

$strPHP40203 = 'You are using PHP 4.2.3, which has a serious bug with multi-byte strings (mbstring). See PHP bug report 19404. This version of PHP is not recommended for use with phpMyAdmin.';  //to translate
$strPrint = 'Print';  //to translate
$strPutColNames = 'Put fields names at first row';  //to translate

$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';  //to translate
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';  //to translate
$strSQPBugInvalidIdentifer = 'Invalid Identifer';  //to translate
$strSQPBugUnclosedQuote = 'Unclosed quote';  //to translate
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String';  //to translate
$strServer = 'Server %s';  //to translate

$strValidateSQL = 'Validate SQL';  //to translate
$strValidatorError = 'The SQL validator could not be initialized. Please check if you have installed the necessary php extensions as described in the %sdocumentation%s.'; //to translate

$strWebServerUploadDirectory = 'web-server upload directory';  //to translate
$strWebServerUploadDirectoryError = 'The directory you set for upload work cannot be reached';  //to translate

$strNumTables = 'Tables'; //to translate
$strTotalUC = 'Total'; //to translate
$strRelationalSchema = 'Relational schema';  //to translate
$strTableOfContents = 'Table of contents';  //to translate
$strCannotLogin = 'Cannot login to MySQL server';  //to translate
$strShowDatadictAs = 'Data Dictionary Format';  //to translate
$strLandscape = 'Landscape';  //to translate
$strPortrait = 'Portrait';  //to translate

$timespanfmt = '%s days, %s hours, %s minutes and %s seconds'; //to translate

$strAbortedClients = 'Aborted'; //to translate
$strConnections = 'Connections'; //to translate
$strFailedAttempts = 'Failed attempts'; //to translate
$strGlobalValue = 'Global value'; //to translate
$strMoreStatusVars = 'More status variables'; //to translate
$strPerHour = 'per hour'; //to translate
$strQueryStatistics = '<b>Query statistics</b>: Since its startup, %s queries have been sent to the server.';
$strQueryType = 'Query type'; //to translate
$strReceived = 'Received'; //to translate
$strSent = 'Sent'; //to translate
$strServerStatus = 'Runtime Information'; //to translate
$strServerStatusUptime = 'This MySQL server has been running for %s. It started up on %s.'; //to translate
$strServerTabVariables = 'Variables'; //to translate
$strServerTabProcesslist = 'Processes'; //to translate
$strServerTrafficNotes = '<b>Server traffic</b>: These tables show the network traffic statistics of this MySQL server since its startup.';
$strServerVars = 'Server variables and settings'; //to translate
$strSessionValue = 'Session value'; //to translate
$strTraffic = 'Traffic'; //to translate
$strVar = 'Variable'; //to translate

$strCommand = 'Command'; //to translate
$strCouldNotKill = 'phpMyAdmin was unable to kill thread %s. It probably has already been closed.'; //to translate
$strId = 'ID'; //to translate
$strProcesslist = 'Process list'; //to translate
$strStatus = 'Status'; //to translate
$strTime = 'Time'; //to translate
$strThreadSuccessfullyKilled = 'Thread %s was successfully killed.'; //to translate

$strBzError = 'phpMyAdmin was unable to compress the dump because of a broken Bz2 extension in this php version. It is strongly recommended to set the <code>$cfg[\'BZipDump\']</code> directive in your phpMyAdmin configuration file to <code>FALSE</code>. If you want to use the Bz2 compression features, you should upgrade to a later php version. See php bug report %s for details.'; //to translate
$strLaTeX = 'LaTeX';  //to translate

$strAdministration = 'Administration'; //to translate
$strFlushPrivilegesNote = 'Note: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of this tables may differ from the privileges the server uses if manual changes have made to it. In this case, you should %sreload the privileges%s before you continue.'; //to translate
$strGlobalPrivileges = 'Global privileges'; //to translate
$strGrantOption = 'Grant'; //to translate
$strPrivDescAllPrivileges = 'Includes all privileges except GRANT.'; //to translate
$strPrivDescAlter = 'Allows altering the structure of existing tables.'; //to translate
$strPrivDescCreateDb = 'Allows creating new databases and tables.'; //to translate
$strPrivDescCreateTbl = 'Allows creating new tables.'; //to translate
$strPrivDescCreateTmpTable = 'Allows creating temporary tables.'; //to translate
$strPrivDescDelete = 'Allows deleting data.'; //to translate
$strPrivDescDropDb = 'Allows dropping databases and tables.'; //to translate
$strPrivDescDropTbl = 'Allows dropping tables.'; //to translate
$strPrivDescExecute = 'Allows running stored procedures; Has no effect in this MySQL version.'; //to translate
$strPrivDescFile = 'Allows importing data from and exporting data into files.'; //to translate
$strPrivDescGrant = 'Allows adding users and privileges without reloading the privilege tables.'; //to translate
$strPrivDescIndex = 'Allows creating and dropping indexes.'; //to translate
$strPrivDescInsert = 'Allows inserting and replacing data.'; //to translate
$strPrivDescLockTables = 'Allows locking tables for the current thread.'; //to translate
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivDescProcess3 = 'Allows killing processes of other users.'; //to translate
$strPrivDescProcess4 = 'Allows viewing the complete queries in the process list.'; //to translate
$strPrivDescReferences = 'Has no effect in this MySQL version.'; //to translate
$strPrivDescReplClient = 'Gives the right to the user to ask where the slaves / masters are.'; //to translate
$strPrivDescReplSlave = 'Needed for the replication slaves.'; //to translate
$strPrivDescReload = 'Allows reloading server settings and flushing the server\'s caches.'; //to translate
$strPrivDescSelect = 'Allows reading data.'; //to translate
$strPrivDescShowDb = 'Gives access to the complete list of databases.'; //to translate
$strPrivDescShutdown = 'Allows shutting down the server.'; //to translate
$strPrivDescSuper = 'Allows connectiong, even if maximum number of connections is reached; Required for most administrative operations like setting global variables or killing threads of other users.'; //to translate
$strPrivDescUpdate = 'Allows changing data.'; //to translate
$strPrivDescUsage = 'No privileges.'; //to translate
$strPrivilegesReloaded = 'The privileges were reloaded successfully.'; //to translate
$strResourceLimits = 'Resource limits'; //to translate
$strUserOverview = 'User overview'; //to translate
$strZeroRemovesTheLimit = 'Note: Setting these options to 0 (zero) removes the limit.'; //to translate

$strPasswordChanged = 'The Password for %s was changed successfully.'; // to translate

$strDeleteAndFlush = 'Delete the users and reload the privileges afterwards.'; //to translate
$strDeleteAndFlushDescr = 'This is the cleanest way, but reloading the privileges may take a while.'; //to translate
$strDeleting = 'Deleting %s'; //to translate
$strJustDelete = 'Just delete the users from the privilege tables.'; //to translate
$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.'; //to translate
$strReloadingThePrivileges = 'Reloading the privileges'; //to translate
$strRemoveSelectedUsers = 'Remove selected users'; //to translate
$strRevokeAndDelete = 'Revoke all active privileges from the users and delete them afterwards.'; //to translate
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.'; //to translate
$strUsersDeleted = 'The selected users have been deleted successfully.'; //to translate

$strAddPrivilegesOnDb = 'Add privileges on the following database'; //to translate
$strAddPrivilegesOnTbl = 'Add privileges on the following table'; //to translate
$strColumnPrivileges = 'Column-specific privileges'; //to translate
$strDbPrivileges = 'Database-specific privileges'; //to translate
$strLocalhost = 'Local';
$strLoginInformation = 'Login Information'; //to translate
$strTblPrivileges = 'Table-specific privileges'; //to translate
$strThisHost = 'This Host'; //to translate
$strUserNotFound = 'The selected user was not found in the privilege table.'; //to translate
$strUserAlreadyExists = 'The user %s already exists!'; //to translate
$strUseTextField = 'Use text field'; //to translate

$strNoUsersSelected = 'No users selected.'; //to translate
$strDropUsersDb = 'Drop the databases that have the same names as the users.'; //to translate
$strAddedColumnComment = 'Added comment for column';  //to translate
$strWritingCommentNotPossible = 'Writing of comment not possible';  //to translate
$strAddedColumnRelation = 'Added relation for column';  //to translate
$strWritingRelationNotPossible = 'Writing of relation not possible';  //to translate
$strImportFinished = 'Import finished';  //to translate
$strFileCouldNotBeRead = 'File could not be read';  //to translate
$strIgnoringFile = 'Ignoring file %s';  //to translate
$strThisNotDirectory = 'This was not a directory';  //to translate
$strAbsolutePathToDocSqlDir = 'Please enter the absolute path on webserver to docSQL directory';  //to translate
$strImportFiles = 'Import files';  //to translate
$strDBGModule = 'Module';  //to translate
$strDBGLine = 'Line';  //to translate
$strDBGHits = 'Hits';  //to translate
$strDBGTimePerHitMs = 'Time/Hit, ms';  //to translate
$strDBGTotalTimeMs = 'Total time, ms';  //to translate
$strDBGMinTimeMs = 'Min time, ms';  //to translate
$strDBGMaxTimeMs = 'Max time, ms';  //to translate
$strDBGContextID = 'Context ID';  //to translate
$strDBGContext = 'Context';  //to translate
$strCantLoad = 'cannot load %s extension,<br />please check PHP Configuration';  //to translate
$strDefaultValueHelp = 'For default values, please enter just a single value, without backslash escaping or quotes, using this format: a';  //to translate
$strCheckPrivs = 'Check Privileges';  //to translate
$strCheckPrivsLong = 'Check privileges for database &quot;%s&quot;.';  //to translate
$strDatabasesStatsHeavyTraffic = 'Note: Enabling the Database statistics here might cause heavy traffic between the webserver and the MySQL one.';  //to translate
$strDatabasesStatsDisable = 'Disable Statistics';  //to translate
$strDatabasesStatsEnable = 'Enable Statistics';  //to translate
$strJumpToDB = 'Jump to database &quot;%s&quot;.';  //to translate
$strDropSelectedDatabases = 'Drop Selected Databases';  //to translate
$strNoDatabasesSelected = 'No databases selected.';  //to translate
$strDatabasesDropped = '%s databases have been dropped successfully.';  //to translate
$strGlobal = 'global';  //to translate
$strDbSpecific = 'database-specific';  //to translate
$strUsersHavingAccessToDb = 'Users having access to &quot;%s&quot;';  //to translate
$strChangeCopyUser = 'Change Login Information / Copy User';  //to translate
$strChangeCopyMode = 'Create a new user with the same privileges and ...';  //to translate
$strChangeCopyModeCopy = '... keep the old one.';  //to translate
$strChangeCopyModeJustDelete = ' ... delete the old one from the user tables.';  //to translate
$strChangeCopyModeRevoke = ' ... revoke all active privileges from the old one and delete it afterwards.';  //to translate
$strChangeCopyModeDeleteAndReload = ' ... delete the old one from the user tables and reload the privileges afterwards.';  //to translate
$strWildcard = 'wildcard';  //to translate
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
