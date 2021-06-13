<?php
/***************************************************************************
 *                                   br.php
 *                            -------------------
 *   begin                : Tuesday', Aug 15', 2002
 *   copyright            : ('C) 2002 Bugada Andrea
 *   email                : phpATM@free.fr
 *
 *   $Id: br.php, v1.12 2002/10/28 23:53:50 bugada Exp $
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
"9" => "Setembror",
"10" => "Outubro",
"11" => "Novembro",
"12" => "Dezembro",
"13" => "Hoje",
"14" => "Ontem",
"15" => "Nome do Arquivo",
"16" => "A��es",
"17" => "Tamanho",
"18" => "Uploaded",
"19" => "Respons�vel",
"20" => "Upload Arquivo",
"21" => "Arquivo Local",
"22" => "Descri��o do Arquivo",
"23" => "Download",
"24" => "Solicitar",
"25" => "Home",
"26" => "Arquivo",
"27" => "Imprimir",
"28" => "Fechar",
"29" => "Voltar",
"30" => "Este arquivo foi removido",
"31" => "Incapaz de abrir este arquivo",
"32" => "Voltar",
"33" => "Erro ao fazer o upload deste arquivo !",
"34" => "Voc� deve selecionar um arquivo",
"35" => "Voltar",
"36" => "O arquivo",
"37" => "foi carregado com sucesso",
"38" => "Arquivo com o nome",
"39" => "j� existe",
"40" => "O Arquivo foi carregado com sucesso",
"41" => "L�ngua selecionada com sucesso",
"42" => "Bem-vindo(a) ao Gerenciador de Arquivos",
"43" => "Espa�o total utilizado",
"44" => "Mostrar arquivos por todos os dias",
"45" => "Arquivo ZIP inv�lido!",
"46" => "Conte�do do Arquivo:",
"47" => "Data/Hora",
"48" => "Diret�rio",
"49" => "� proibido fazer o upload de arquivo com o nome %s!",
"50" => "excedendo o tamanho m�ximo permitido",
"51" => "Information",
"52" => "Selecionar Apar�ncia",
"53" => "Apar�ncia",
"54" => "Bem-vindo(a)",
"55" => "Hora corrente",
"56" => "Usu�rio",
"57" => "ID",
"58" => "Registrar",
"59" => "Registro",
"60" => "Domingo",
"61" => "Segunda-feira",
"62" => "Ter�a-feira",
"63" => "Quarte-feira",
"64" => "Quinta-feira",
"65" => "Sexta-feira",
"66" => "S�bado",
"67" => "Enviar",
"68" => "Arquivo de correio",
"69" => "Arquivo foi enviado para %s endere�o.",
"70" => "Upload realizado pelo usu�rior: %s",
"71" => "Login",
"72" => "Logout",
"73" => "Entrar",
"74" => "An�nimo",
"75" => "Usu�rio Normal",
"76" => "Usu�rio Power",
"77" => "Administrador",
"78" => "�rea Restrita",
"79" => "�rea P�blica",
"80" => "Voc� entrou com nome de conta ou senha inv�lidos.",
"81" => "Meu perfil",
"82" => "ver/editar meu perfil",
"83" => "Senha",
"84" => "Selecionar l�ngua",
"85" => "Selecionar fuso hor�rio",
"86" => "Sua hora corrente",
"88" => "Por favor, entre com um endere�o de e-mail v�lido.",
"89" => "Esteja certo que seu endere�o de e-mail seja ativo, porque seu c�digo de ativa��o ser� enviado para seu e-mail.",
"90" => "Arquivo carregado: ",
"91" => "Por favor, entre com o seu endere�o de e-mail que voc� digitou no momento do registro.",
"92" => "Tamanho do arquivo: ",
"93" => "Por favor, escreva seu nome e senha",
"94" => "O registro � necess�rio. Por favor, fa�a o registro.",
"95" => "O registro n�o � necess�rio. Voc� pode registrar se voc� desenha adicionar seu nome a todos os arquivos submetidos ao upload. Ningu�m pode usar o seu nome para fazer o upload dos seus arquivos.",

"96" => "Apar�ncia selecionada.",
"97" => "Atualizar",
"98" => "Por favor, entre com o seu nome de login e senha",
"99" => "Ainda n�o registrado? - Registre-se aqui!",
"100" => "Esqueceu sua senha?",
"101" => "Por favor, ent�o %s retorne %s e tente novamente.",
"102" => "Voc� fez o logout com sucesso.",
"103" => "Nome de usu�rio est� inv�lido. O nome n�o deve ultrapassar 12 s�mbolos e pode consistir apenas de s�mbolos provenientes do latin e d�gitos. Nome pode tamb�m conter '-', '_', e espa�os entre s�mbolos.",
"104" => "O '%s' que voc� selecionou j� foi escolhido.",
"105" => "Confirme a senha",
"106" => "Senhas n�o se correspondem.",
"107" => "O formato do endere�o de e-mail � inv�lido.",
"108" => "Obrigado por registrar. Por favor n�o se esque�a da sua senha que foi encriptada em nossa base de dados e n�o podemos recuper�-la para voc�. Entretanto, caso voc� esquec�-la providenciaremos uma nova senha aleat�ria que ser� enviado para voc� por e-mail.",
"109" => "Voc� pode %s acessar a �rea de Upload aqui. %s",
"110" => "Seu c�digo de ativa��o foi enviado para seu e-mail. Voc� deve ativar sua conta em 2 dias ou sua conta ser� automaticamente removida.",
"111" => "voc� n�o tem permiss�o para fazer o download deste arquivo",
"112" => "Ativar conta",
"113" => "Por favor, ative sua conta",
"114" => "C�digo de ativa��o",
"115" => "Sua conta agora est� ativa.",
"116" => "Por favor %s entre aqui %s.",
"117" => "A nome da conta ou c�digo de ativa��o inseridos s�o inv�lidos.",
"118" => "Conta j� ativa.",
"119" => "Desejo receber no meu e-mail relat�rio di�rio dos arquivos carregados.",
"120" => "Altere sua senha.",
"121" => "Sua senha antiga",
"122" => "O nome da conta solicitado n�o existe.",
"123" => "O endere�o de e-mail inserido n�o � v�lido.",
"124" => "Sua nova senha foi enviada para o seu e-mail.",
"125" => "n�o pode ser executado, objeto n�o encontrado",
"126" => "Modifique os dados em sua conta",
"127" => "Aplicar",
"128" => "Seu perfil salvo.",
"129" => "Sua senha alterada.",
"130" => "Voc� digitou uma senha inv�lida.",
"131" => "Voc� deve especificar sua nova senha.",
"132" => "Configura��o",
"133" => "Upload",
"134" => "L�ngua & fuso hor�rio",
"135" => "Estat�sticas da conta",
"136" => "sua conta foi criada:",
"137" => "Ger�ncia do Usu�rio",
"138" => "Observador (ver somente)",
"139" => "Uploader (upload somente)",
"140" => "Conta '%s' alterada com sucesso",
"141" => "�ltimos",
"142" => "Todos",
"143" => "Novo endere�o de e-mail efetua-se ap�s confirma��o. C�digo de Confirma��o foi enviado por e-mail para sua nova conta de e-mail. Veja instru��es dento da letra.",
"144" => "",
"145" => "Por favor, confirme seu novo endere�o de e-mail.",
"146" => "C�digo de confirma��o",
"147" => "Confirme",
"148" => "Nada para confirmar.",
"149" => "O nome da conta ou c�digo de confirma��o inseridos s�o inv�lidos.",
"150" => "Seu novo endere�o de e-mail '%s' confirmado.",
"151" => "Arquivos carregados",
"152" => "Arquivos baixados",
"153" => "Arquivos enviados por e-mail",
"154" => "Conta criada",
"155" => "�ltima hora de acesso",
"156" => "Status",
"157" => "Status ativo",
"158" => "Receber relat�rio",
"159" => "e-mail",
"160" => "Total:",
"161" => "conta(s)",
"162" => "Deletar conta",
"163" => "Mostrada(s) %s conta(s) of %s",
"164" => "Configurar �rea de Upload",
"165" => "Editar arquivos",
"166" => "Editar arquivo",
"167" => "Arquivo %s foram alterados com sucesso",
"168" => "Salvar",
"169" => "Deletar",
"170" => "Deletar arquivos",
"171" => "Espelho",
"172" => "Sim",
"173" => "N�o",
"174" => "Ativo",
"175" => "Inativo",
"176" => "N�o autorizado",
"177" => "Desulpe-me, mas o servidor n�o pode executar o programa de correspond�ncia.",
"178" => "Seu registro falhou. Por favor, tente novamente mais tarde.",
"179" => "Por favor, tente novamente mais tarde.",
"180" => "arquivo deletado com sucesso",
"181" => "voc� n�o tem permiss�o para deletar este arquivo",
"182" => "diret�rio deletado com sucesso",
"183" => "voc� n�o tem permiss�o para deletar este diret�rio",
"184" => "diret�rio criado com sucesso",
"185" => "voc� n�o tem permiss�o para criar um diret�rio",
"186" => "Criar novo diret�rio",
"187" => "Nome do diret�rio",
"188" => "Fazer dir",
"189" => "diret�rio j� existe, por favor escolha outro nome",
"190" => "voc~e deve especificar um nome de diret�rio",
"191" => "Modificar",
"192" => "Nome do arquivo",
"193" => "Modificar arquivo / detalhes do diret�rio",
"194" => "objeto renomeado com sucesso.",
"195" => "voc� n�o tem permiss�o de renomear tal objeto",
"196" => "O trajeto da raiz n�o est� correto. Cheque as configura��es",
"197" => "Solicitado por",
"198" => "renomear n�o foi poss�vel, arquivo j� existe",
"199" => "�ltimos uploads",
"200" => "Top downloads",
"201" => "renomear n�o foi poss�vel, nome n�o permitido",

//
// New strings introduced in version 1.02
//
"202" => "A url solicitada n�o � v�lida",
"203" => "Arquivo do endere�o http",
"204" => "Upload do arquivo do endere�o http",

//
// New strings introduced in version 1.10
//
"205" => "Sempre estar logado",
"206" => "N�o pode executar: nome n�o permitido",
"207" => "Endere�o IP bloqueado",
"208" => "seu endere�o IP foi bloqueado pela Administra��o!",
"209" => "Para obter mais infos fa�a contato com o Administrador",

//
// New strings introduced in version 1.12
//
"210" => "Mb di�rio(s) permitido(s) excedido(s)",
"211" => "Mb mensal permitido excedido",
"212" => "Mb di�rio para download permitido excedido",
"213" => "Mb mensal para download permitido excedido",
"214" => "Validar Arquivo",
"215" => "Arquivo Validado",
"216" => "Voc� est� certo que deseja deletar",
"217" => "voc� n�o tem permiss�o para validar tal objeto",
"218" => "Este arquivo s� ser� listado ap�s a valida��o da administra��o",
"219" => "Observador de arquivo"

);

//
// Send file e-mail configuration
//
$sendfile_email_subject = 'Requested file';
$sendfile_email_body = 'Aqui est� o arquivo que voc� solicitou por e-mail

';
$sendfile_email_end = 'Regards,';

//
// Digest e-mail configuration
//
$digest_email_subject = "Relat�rio di�rio";

//
// Confirm new e-mail configuration
//
$confirm_email_subject = 'Confirme o novo e-mail';
$confirm_email_body = 'Meu caro %s,Para sua seguran�a � importante para n�s, que seu novo endere�o de e-mail seja confirmado.Seu c�digo de confirma��o �: %s
Ativar o endere�o de e-mail � simples:
1. visite-nos em %s e n�s guiaremos voc� no processo
2. Entre com o seu nome da conta e c�digo de confirma��o.
3. Clique no bot�o \'Confirm\' .

';
$confirm_email_end = 'Regards,';

//
// Send password e-mail configuration
//
$chpass_email_subject = 'Nova senha';
$chpass_email_body = 'Caro usu�rio,Sua nova senha � %s

';
$chpass_email_end = 'Nossos cumprimentos,';

//
// Confirm registration e-mail configuration
//
$register_email_subject = 'Confirme registro';
$register_email_body = 'Caro %s,
Obrigado por registrar.Para sua seguran�a � importante para n�s, que sua conta necessita ser ativada.

Seu c�digo de ativa��o �: %s
(nota: esta n�o � sua senha)
Ativando sua conta � simples:
1. Visite-nos em %s e n�s guiaremos voc� no processo
2. Entre com o nome de sua conta e c�digo de ativa��o.
3. Clique no bot�o \'Activate account\' .

';
$register_email_end = 'Nossos cumprimentos,';
?>
