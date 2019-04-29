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

**Debugging mode - ativa**
```php
// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );
```

**Desabilita a edição de temas e plugins**
```php
define('DISALLOW_FILE_EDIT', true);
```
**Desabilita edição e atualização de temas e plugins**
```php
define( 'DISALLOW_FILE_MODS', true );
```
**Solicitação FTP para instalar plugins - desabilita**
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

**Limita o tempo de auto save**
```php
define ('AUTOSAVE_INTERVAL', 160); // segundos
```

**Limita o tempo que o conteúdo fica na lixeira**
```php
define ('EMPTY_TRASH_DAYS', 7); // padrão 30 dias, 0 para desabilitar
```
**Inserir idioma**
```php
define ('WPLANG', 'pt_BR');
```
**Atualiza a URL base do WordPress para conter o HTTPS**
```php
define('WP_HOME','https://site.com/');
define('WP_SITEURL','https://site.com/');
```