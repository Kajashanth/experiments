# Documentazione

Il database mysql gestisce grandi quantità di dati collegati tra di loro. 
La sua funzione è di contenere i dati in maniera ordinata per poter recuperarli e mostrarli all'utente quando li richiede.
I dati vengono organizzati in tabelle.

Partendo dal nostro esempio abbiamo 3 tabelle: 
-SOGGETTI: vengono inseriti tutti i dati necessari per identificare un soggetto che effettua un esperimento.
-ESPERIMENTI: vengono inseriti le tipologie e le descrizioni necessarie di un esperimento.
-SOGGETTO_ESPERIMENTI: oltre i dati necessari per l'identificazione abbiamo le chiavi primarie delle tabelle precedenti in modo da avere un collegamento tra le 2 entità.
		       Con questa tabella memorizziamo anche la data e il luogo di ciascun esperimento.