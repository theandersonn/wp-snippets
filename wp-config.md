**Desativa o sistema de revisões**
```php
define('WP_POST_REVISIONS', false );
```

**Deleta todas as revisões armazenadas no banco de dados**
```sql
SQL DELETE FROM wp_posts
	WHERE post_type = “revision”;
```

**Limita o número de revisões de um post**
```php
define('WP_POST_REVISIONS', 3);
```

**Remove BRs do contact form**
```php
define ('WPCF7_AUTOP', false );
```

**Desabilita solicitação de ftp para instalar plugins**
```php
define('FS_METHOD','direct');
```

**Habilitar debugging mode**
```php
define('WP_DEBUG', true);
```

**Desabilitar debugging mode (padrão)**
```php
define('WP_DEBUG', false);
```
