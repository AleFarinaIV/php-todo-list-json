# Descrizione
Dobbiamo creare una web-app che permetta di leggere e scrivere una lista di Todo.
L'esercizio base è considerato completato quando mostrerete in un console log i dati inviati dal server. Non ci interessa che li mostriate a video nella pagina. In allegato avete il file json da utilizzare per l'esercizio.

# Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP

# Consigli
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).

# Scomposizione del problema

Creare la struttura con realtivi file

Inizializzazione dell'istanza di Vue

Inserimento di un array esterno all'interno di un file js

Creare all'interno del server una variabile che contenga i dati dell'array esterno

All'interno del server;
    utilizzare la funzione file_get_contents per leggere il contenuto del file todolist.json
    con l'utilizzo di json_decode si converte il contenuto JSON in un oggetto PHP
    tramite condizione if gestire l'aggiunta del nuovo oggetto
        quando viene inviata una richiesta POST con un nuovo elemento da aggiungere, lo script controlla se esiste una variabile todoItem
        se è stato inviato un nuovo elemento esso verrà aggiunto alla lista utilizzando il metodo POST
        utilizzando la funzione array_push() si va ad aggiungere alla lista il nuovo elemento con i valori id, done e name
        utilizzando la funzione file_put_contents() il file todolist.json viene sovrascritto con l'array aggiornato
    per indicare al client che la risposta sarà in formato JSON impostare un'intestazione HTTP
    utilizzando json_encode inviare nuovamente i dati, convertiti in JSON, come risposta al client

All'interno dell'App;
    dopo la creazione dell'applicazione Vue impostare i dati iniziali, in questo caso un array vuoto e l'url del nostro server
    definire i metodi nel blocco methods
        il metodo getTodolist effettuerà una chiamata axios(GET) al nostro server e in risposta otterrà i dati da inserire all'interno della todolist
        il metodo addTodoItem effettuerà una chiamata axios(POST) al nostro server per aggiungere un nuovo elemento alla lista, preso dalla variabile todo_item, e il server restituirà l'array aggiornato
    tramite mounted il metodo gettodolist verrà eseguito automaticamente appena l'app Vue sarà montata ottenendo così i dati della todolist dal server