<?php
class Config {
  # IMFORMAÇÕES BÁSICAS DO SITE
  const SITE_URL = "http://localhost";
  const SITE_PASTA = "loja";
  const SITE_NOME = "Loja do Frohmut - PHP 7 & MySQLi";
  const SITE_EMAIL_ADM = "pedrofrohmut@gmail.com";

  # PASTAS
  const PASTA_VIEW = "view";
  const PASTA_CONTROLLER = "controller";
  const PASTA_MODEL = "model";
  const PASTA_TEMA = "tema";

  # INFORMAÇÕES DO BANCO DE DADOS
  const DB_HOST   = "localhost";
  const DB_USER   = "root";
  const DB_PASS   = "";
  const DB_NAME   = "lojafrohmut";

  # INFORMAÇÕES PARA PHP_MAILER
  const EMAIL_HOST = "smtp.gmail.com";
  const EMAIL_USER = "pedrofrohmut@gmail.com";
  const EMAIL_NOME = "Contato Loja do Frohmut";
  const EMAIL_PORTA_TLS = 587;
  const EMAIL_SMTP_AUTH = true;
  const EMAIL_SMTP_SECURE = "TLS";
  const EMAIL_COPIA = "capetafrohmut@gmail.com";
}
