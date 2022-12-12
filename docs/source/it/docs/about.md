---
title: About Seo
description: About Seo
extends: _layouts.documentation
section: content
---

# module_seo


Il modulo "module_seo" è un pacchetto per Laravel che fornisce funzionalità per la gestione del SEO (Search Engine Optimization) in un'applicazione Laravel. Il modulo consente di gestire facilmente i metadati delle pagine, come il titolo e la descrizione, nonché di generare automaticamente il sitemap e i tag per i social media.

Per utilizzare il modulo, è necessario installarlo tramite Composer con il comando composer require laraxot/module_seo. Una volta installato, il modulo può essere utilizzato nell'applicazione Laravel tramite il seguente codice:

Copy code
use Laraxot\ModuleSeo\Facades\ModuleSeo;
Il modulo include diverse funzionalità per la gestione del SEO, come ad esempio il metodo setTitle() per impostare il titolo della pagina, o il metodo addMeta() per aggiungere un tag meta personalizzato alla pagina.

Per utilizzare il modulo, è necessario prima configurare l'applicazione per supportare il modulo. La configurazione può essere eseguita tramite il comando Artisan php artisan seo:install, che creerà le tabelle del database necessarie per gestire i metadati delle pagine e aggiungerà il middleware per la gestione automatica del titolo e della descrizione delle pagine.

