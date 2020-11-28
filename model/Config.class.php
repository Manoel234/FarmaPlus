<?php

Class Config{

//IRFORMAÇAO BASICA DO SITE
const SITE_URL = "http://localhost";
const SITE_PASTA = "loja";
const SITE_NOME = "Farma Plus";
const SITE_EMAIL_ADM = "suportefarmaplus@gmail.com";

//INFORMACAO DO BD
const BD_HOST ="localhost",
      BD_USER ="root",
      BD_SENHA ="",
      BD_BANCO ="farmaplus",
      BD_PREFIX ="";


//INFORMACAO PARA PHP MAILLER
const EMAIL_HOST = "smtp.gmail.com";
const EMAIL_USER = "suportefarmaplus@gmail.com";
const EMAIL_NOME = "Suporte FarmaPlus";
const EMAIL_SENHA = "farma123";
const EMAIL_PORTA = "587";
const EMAIL_SMTPAUTH = "true";
const EMAIL_SMTPSECURE = "tls";
const EMAIL_COPIA = "suportefarmaplus@gmail.com";
}
?>