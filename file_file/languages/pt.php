<?php
/***************************************************************************
 *                                   en.php
 *                            -------------------
 *   begin                : Tuesday', Jul 6', 2004
 *   copyright            : ('C) 2004 CCMR
 *   email                : ccmr@sapo.pt
 *    URL              : http://www.ccmr.info
 *
 *   $Id: pt.php, v1.2 2004/07/06 21:50:50 Rui Cardoso $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License', or
 *   ('at your option) any later version.
 *
 ***************************************************************************/

$headerpage="header.htm";    // The optional header file 
$footerpage="footer.htm";    // The optional footer file 
$infopage="info.htm";        // The optional info file 

$charsetencoding="";                 // The encoding for national symbols (i.e. for cyryllic  must be "windows-1251")
$uploadcentercaption="PHP Advanced Transfer Manager";
$uploadcentermessage="phpATM";

$mess=array(
"0" => "",
"1" => "Janeiro",
"2" => "Fevereiro",
"3" => "Mar�o",
"4" => "Abril",
"5" => "Maio",
"6" => "Junho",
"7" => "Julho",
"8" => "Agosto",
"9" => "Setembro",
"10" => "Outubro",
"11" => "Novembro",
"12" => "Dezembro",
"13" => "Hoje",
"14" => "Ontem",
"15" => "Ficheiro",
"16" => "Fun��es",
"17" => "Tamanho",
"18" => "Enviado",
"19" => "Propriet�rio",
"20" => "Enviar",
"21" => "Localiza��o do ficheiro",
"22" => "Descri��o do ficheiro",
"23" => "Download",
"24" => "Ordenar",
"25" => "Principal",
"26" => "Ficheiro",
"27" => "Imprimir",
"28" => "Fechar",
"29" => "Para tr�s",
"30" => "Este ficheiro foi removido",
"31" => "N�o � possivel abrir o ficheiro",
"32" => "Para tr�s",
"33" => "Erro ao enviar o ficheiro !",
"34" => "Tem que seleccionar um ficheiro",
"35" => "Para tr�s",
"36" => "O ficheiro",
"37" => "foi enviado com sucesso",
"38" => "O ficheiro com o nome",
"39" => "j� existe",
"40" => "O ficheiro foi enviado com sucesso",
"41" => "O idioma foi aceite",
"42" => "Seja bemvindo",
"43" => "Espa�o total usado",
"44" => "Mostrar ficheiros de todos os dias",
"45" => "Ficheiro ZIP inv�lido!",
"46" => "Conte�do do ficheiro:",
"47" => "Data/Hora",
"48" => "Directoria",
"49" => "Proibido enviar ficheiros com o nome %s!",
"50" => "excedeu o tamanho m�ximo permitido",
"51" => "Informa��o",
"52" => "Escolher Skin",
"53" => "Skin",
"54" => "Bemvindo",
"55" => "Hora actual",
"56" => "Utilizador",
"57" => "Utilizador",
"58" => "Registar",
"59" => "Registo",
"60" => "Domingo",
"61" => "Segunda",
"62" => "Ter�a",
"63" => "Quarta",
"64" => "Quinta",
"65" => "blah",
"66" => "S�bado",
"67" => "Enviar",
"68" => "Enviar ficheiro por correio",
"69" => "O ficheiro foi enviado para %s.",
"70" => "Ficheiro enviado por: %s",
"71" => "Entrar",
"72" => "Sair",
"73" => "Entrar",
"74" => "An�nimo",
"75" => "Utilizador Normal",
"76" => "Utilizador Especial",
"77" => "Administrador",
"78" => "Zona Privada",
"79" => "Zona P�blica",
"80" => "O nome de utilizador ou a palavra chave n�o � v�lida.",
"81" => "Meu perfil",
"82" => "Ver/editar meu perfil",
"83" => "Palavra chave nova",
"84" => "Seleccionar Idioma",
"85" => "Seleccionar Fuso Hor�rio",
"86" => "Hora local",
"88" => "Por favor introduza um endere�o v�lido.",
"89" => "O c�digo de activa��o ser� enviado para o seu endere�o electr�nico portanto este endere�o tem que estar activo e correcto.",
"90" => "Ficheiro enviado: ",
"91" => "Por favor introduza o endere�o electr�nico que utilizou para o registo.",
"92" => "Tamanho do ficheiro: ",
"93" => "Por favor anote o nome do utlizador e a palavra chave",
"94" => "� necess�rio registar-se antes de prosseguir.",
"95" => "Registo n�o � necess�rio. Pode registar-se se quiser e assim quando enviar ficheiros estes estar�o associados ao seu nome de utilizador.",

"96" => "Skin seleccionada.",
"97" => "Actualizar",
"98" => "Por favor introduza o seu nome de utilizador e a palavra chave",
"99" => "Ainda n�o est� registado? - Registe-se aqui!",
"100" => "Esqueceu-se da palavra chave?",
"101" => "Por favor, volte %s atr�s %s e tente de novo.",
"102" => "Encerrou a sua sess�o.",
"103" => "Esse nome de utilizador � inv�lido. N�o pode ter mais do que 12 caracteres. Pode conter '-', '_', e espa�os.",
"104" => "'%s' j� foi escolhido.",
"105" => "Confirme a palavra chave",
"106" => "Palavras chave n�o coincidem.",
"107" => "O formato de endere�o electr�nico � inv�lido.",
"108" => "Obrigado por ter efectuado o registo. Por favor n�o se esque�a da sua palavra chave.",
"109" => "Pode %s entrar no Upload Center aqui. %s",
"110" => "O seu c�digo de activa��o foi enviado para o seu endere�o electr�nico. Ter� que activar o seu registo no prazo de 2 dias ou ele ser� autom�ticamente cancelado.",
"111" => "N�o tem autoriza��o para fazer o download deste ficheiro",
"112" => "Activar o registo",
"113" => "Por favor active o seu registo",
"114" => "C�digo de activa��o",
"115" => "O seu registo est� activo.",
"116" => "Por favor %s entre aqui %s.",
"117" => "O nome de utilizador ou o c�digo de activa��o � inv�lido.",
"118" => "O registo j� se encontra activado.",
"119" => "Eu desejo receber, por correio electr�nico, o resumo di�rio dos ficheiros enviados pelos utilizadores.",
"120" => "Trocar palavra chave.",
"121" => "Palavra chave actual",
"122" => "O nome de utilizador introduzido n�o � v�lido.",
"123" => "O endere�o electr�nico introduzido n�o � v�lido.",
"124" => "A sua nova palavra chave foi enviada para o seu endere�o electr�nico.",
"125" => "N�o pode ser executado, objecto n�o encontrado",
"126" => "Actualizar os dados de registo",
"127" => "Executar",
"128" => "O seu perfil foi actualizado.",
"129" => "A sua palavra chave mudou.",
"130" => "Introduziu uma palavra chave antiga.",
"131" => "Tem que introduzir a palavra chave nova.",
"132" => "Configura��o",
"133" => "Envio",
"134" => "Idioma & Fuso hor�rio",
"135" => "Estatisticas do utilizador",
"136" => "A sua conta foi criada:",
"137" => "Administra��o",
"138" => "Viewer (s� ver)",
"139" => "Uploader (s� envio)",
"140" => "Conta '%s' foi actualizada",
"141" => "�ltimos",
"142" => "Todos",
"143" => "Novo endere�o electr�nico estar� activo depois da confirma��o. C�digo de confirma��o foi enviado para o seu novo endere�o.",
"144" => "",
"145" => "Por favor confirme o seu novo endere�o electr�nico.",
"146" => "C�digo de confirma��o",
"147" => "Confirmar",
"148" => "Nada a confirmar.",
"149" => "O nome de utilizador ou o c�digo de confirma��o � inv�lido.",
"150" => "O seu novo endere�o '%s' foi confirmado.",
"151" => "Ficheiros enviados",
"152" => "Ficheiros recebidos",
"153" => "Ficheiros recebidos por correio electr�nico",
"154" => "Conta iniciada",
"155" => "�ltima data de acesso",
"156" => "Tipo de utilizador",
"157" => "Status",
"158" => "Resumo di�rio",
"159" => "Correio electr�nico",
"160" => "Total:",
"161" => "registo(s)",
"162" => "Apagar registo",
"163" => "%s registo(s) dum total de %s",
"164" => "Configurar Upload Center",
"165" => "Editar ficheiros",
"166" => "Editar ficheiros",
"167" => "Ficheiro %s foi actualizado",
"168" => "Guarde",
"169" => "Apague",
"170" => "Apagar ficheiros",
"171" => "Mirror",
"172" => "Sim",
"173" => "N�o",
"174" => "Activo",
"175" => "Inactivo",
"176" => "N�o Autorizado",
"177" => "O servidor n�o conseguiu executar o programa de correio electr�nico.",
"178" => "O seu registo falhou. Por favor tente mais tarde.",
"179" => "Por favor tenet mais tarde.",
"180" => "Ficheiro foi rasurado com sucesso",
"181" => "N�o tem autoriza��o para apagar este ficheiro",
"182" => "Pasta foi rasurada com sucesso",
"183" => "N�o tem autoriza��o para apagar esta pasta",
"184" => "Directoria foi criada com sucesso",
"185" => "N�o tem autoriza��o para criar pastas",
"186" => "Criar nova directoria",

"187" => "Nome da directoria",
"188" => "Criar",

"189" => "Directoria j� existe, por favor escolha outro nome",
"190" => "Tem que especificar um nome para a directoria",
"191" => "Modificar",
"192" => "Ficheiro",
"193" => "Modificar detalhes de ficheiro / directoria",
"194" => "Nome do objecto foi mudado com sucesso.",
"195" => "N�o tem autoriza��o para mudar o nome do objecto",
"196" => "O root path n�o est� correcto. Verifique configura��o",
"197" => "Ordenar",
"198" => "trocar de nome falhou, ficheiro com esse nome j� existe no servidor",
"199" => "�ltimos ficheiros enviados",
"200" => "Ficheiros mais solicitados",
"201" => "Trocar de nome falhou, nome n�o � permitido",

//
// New strings introduced in version 1.02
//
"202" => "A url introduzida n�o � v�lida",
"203" => "Endere�o do ficheiro http",
"204" => "Enviar ficheiro por endere�o http",

//
// New strings introduced in version 1.10
//
"205" => "Always stay logged",
"206" => "N�o foi executado: nome n�o � permitido",
"207" => "Endere�o IP bloqueado",
"208" => "O seu endere�o IP foi bloqueado pela Administra��o!",
"209" => "Para obter mais detalhes contacte o Administrador",

//
// New strings introduced in version 1.12
//
"210" => "Quantidade de Mb di�rios foi excedida",
"211" => "Quantidade de Mb mensais foi excedida",
"212" => "Quantidade de Mb di�rios recebidos foi excedida",
"213" => "Quantidade de Mb mensais recebidos foi excedida",
"214" => "Valida��o de ficheiro",
"215" => "Ficheiro validado",
"216" => "Tem a certeza que quer apagar",
"217" => "N�o tem autoriza��o para validar este objecto",
"218" => "Este ficheiro s� estar� disponivel depois da Administra��o o validar",
"219" => "Ver ficheiro"

);
//
// Send file to friend e-mail configuration
//
$sendfile_friend_subject = 'Aqui est� o ficheiro que procuravas!';
$sendfile_friend_body = '
Este ficheiro foi enviado pelo utilizador abaixo referido!

';

//
// Send file e-mail configuration
//
$sendfile_email_subject = 'Ficheiro pedido';
$sendfile_email_body = '
Aqui est� o ficheiro que pediu por correio electr�nico

';
$sendfile_email_end = 'Com os melhores cumprimentos,';

//
// Digest e-mail configuration
//
$digest_email_subject = "Resumo di�rio de ficheiros";

//
// Confirm new e-mail configuration
//
$confirm_email_subject = 'Confirmar novo endere�o electr�nico';
$confirm_email_body = 'Caro/a %s,

Porque a sua seguran�a � importante para n�s, o seu novo endere�o electr�nico precisa de ser confirmado.

O seu c�digo pessoal de confirma��o �: %s

Para activar o seu novo endere�o:
1. Visite %s
2. Introduza o nome de utilizador e o c�digo de confirma��o.
3. Clique no bot�o \'Confirmar\' .

';
$confirm_email_end = 'Com os melhores cumprimentos,';

//
// Send password e-mail configuration
//
$chpass_email_subject = 'Nova palavra chave';
$chpass_email_body = 'Caro utilizador,

A sua palavra chave nova � %s

';
$chpass_email_end = 'Com os melhores cumprimentos,';

//
// Confirm registration e-mail configuration
//
$register_email_subject = 'Confirmar Registo';
$register_email_body = 'Caro/a %s,

Obrigado pelo seu registo.

Porque a sua seguran�a � importante para n�s, o seu registo precisa de ser confirmado.

O seu c�digo pessoal de confirma��o �: %s
(Aten��o: isto n�o � a sua palavra chave)

Para activar o seu registo:
1. Visite %s .
2. Introduza o nome de utilizador e o c�digo de confirma��o.
3. Clique no bot�o \'Activar registo\' .

';
$register_email_end = 'Com os melhores cumprimentos,';
?> 