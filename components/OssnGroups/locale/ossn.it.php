<?php
/**
 * Open Source Social Network
 *
 * @package Open Source Social Network
 * @author    Open Social Website Core Team <info@softlab24.com>
 * @copyright 2014-2017 SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$en = array(
    'groups' => 'Grouppi',
    'add:group' => 'Aggiungi Gruppo',
    'requests' => 'Richieste',

    'members' => 'Membri',
    'member:add:error' => 'Qualcosa � andata storta! Per favore riprova pi� tardi.',
    'member:added' => 'Richiesta di iscrizione approvata!',

    'member:request:deleted' => 'Richiesta di iscrizione declinata!',
    'member:request:delete:fail' => 'Impossibile declinare la richiesta di iscrizione! Per favore riprova pi� tardi.',
    'membership:cancel:succes' => 'Richiesta di iscrizione cancellata!',
    'membership:cancel:fail' => 'Impossibile cancellare la richiesta di iscrizione! Per favore riprova pi� tardi.',

    'group:added' => 'Gruppo creato con successo!',
    'group:add:fail' => 'Impossibile creare il gruppo! Per favore riprova pi� tardi.',

    'memebership:sent' => 'Richiesta inviata con successo!',
    'memebership:sent:fail' => 'Impossibile inviare la richiesta! Per favore riprova pi� tardi.',

    'group:updated' => 'Il gruppo � stato aggiornato!',
    'group:update:fail' => 'Impossibile aggiornare il gruppo! Per favore riprova pi� tardi.',

    'group:name' => 'Nome Gruppo',
    'group:desc' => 'Descrizione Gruppo',
    'privacy:group:public' => 'Chiunque pu� vedere questo gruppo ed i suoi messaggi. Solo i membri possono pubblicare in questo gruppo.',
    'privacy:group:close' => 'Chiunque pu� vedere questo gruppo. Solo i membri del gruppo possono pubblicare e vedere i posts.',

    'group:memb:remove' => 'Rimuovi',
    'leave:group' => 'Abbandona gruppo',
    'join:group' => 'Entra nel gruppo',
    'total:members' => 'Membri totali',
    'group:members' => "Membri (%s)",
    'view:all' => 'Vedi tutti',
    'member:requests' => 'RICHIESTE (%s)',
    'about:group' => 'A proposito di questo gruppo',
    'cancel:membership' => 'Cancella iscrizione',

    'no:requests' => 'Nessuna richiesta',
    'approve' => 'Approva',
    'decline' => 'Declina',
    'search:groups' => 'Cerca gruppi',

    'close:group:notice' => 'Entra in questo gruppo per vedere posts, foto, e commenti.',
    'closed:group' => 'Gruppo privato',
    'group:admin' => 'Admin',
	
	'title:access:private:group' => 'Post di gruppo',

	// #186 group join request message var1 = user, var2 = name of group
	'ossn:notifications:group:joinrequest' => '%s ha richiesto di far parte di %s',
	'ossn:group:by' => 'By:',
	
	'group:deleted' => 'Gruppo e contenuti del gruppo cancellati',
	'group:delete:fail' => 'Il gruppo non pu� essere cancellato.',	
);
ossn_register_languages('it', $en); 
