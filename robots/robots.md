**Configuração Robots.txt**
```txt

User-agent: *
# remova os diretorios
Disallow: /wp-login.php
Disallow: /wp-admin/
Disallow: /wp-includes/
Disallow: /wp-content/*
Disallow: /author/
Disallow: /trackback/
Disallow: /comments/
Disallow: /xml/
Disallow: /page/*
Disallow: /uncategorized/
Disallow: */trackback
Disallow: */feed/
Disallow: */comments
Disallow: */comment-page-*/
Disallow: */comment-page-*/*
Disallow: */function.simplexml-load-file
Disallow: /download/pt_BR.po
Allow: /wp-content/uploads
Allow: /tag/*

Disallow: /*.inc$
Disallow: /*.gz$
Disallow: /*.wmv$
Disallow: /*.cgi$
Disallow: /*.xhtml$

```