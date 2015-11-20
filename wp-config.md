**Atualização automática do WordPress - desabilitar**
```php
define ( 'AUTOMATIC_UPDATER_DISABLED' , true);
```

**Chaves de segurança**
```php
https://api.wordpress.org/secret-key/1.1/salt/
```

**Contact form - remove BRs**
```php
define ('WPCF7_AUTOP', false );
```

**Debugging mode (padrão) - desativa**
```php
define('WP_DEBUG', false);
```

**Editor de temas e plugins - desativa**
```php
define('DISALLOW_FILE_EDIT', true);
```

**FTP para instalar plugins - desabilita**
```php
define('FS_METHOD','direct');
```

**Revisões de posts - deleta todas**
```sql
SQL DELETE FROM wp_posts
	WHERE post_type = “revision”;
```

**Revisões de posts - desativa**
```php
define('WP_POST_REVISIONS', false );
```

**Revisões de posts - limita o número**
```php
define('WP_POST_REVISIONS', 3);
```

**Tempo de auto dave - altera**
```php
define ('AUTOSAVE_INTERVAL', 160); // segundos
```

**Tempo que o conteúdo fica na lixeira**
```php
define ('EMPTY_TRASH_DAYS', 7); // padrão 30 dias, 0 para desabilitar
```
