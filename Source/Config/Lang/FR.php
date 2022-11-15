<?php
class FR extends AbstractLang
{
    private static array $_items = [
        //'page-name_'=>'Value'

        //globals
        'home_page'=>'Accueil',
        'upload_page'=>'Téléverser',
        'settings_page'=>'Paramètre',
        'contact_page'=>'Me contacter',
        'error_page'=>'Erreur',
        'watch_page'=>'Regarde',
        'login_page'=>'Se connecter',
        'website_foot'=>'le site de MCBE',
        'lang_fr'=>'FR',
        'lang_en'=>'EN',

        //home page
        'home_title'=>'Bienvenue sur mon site',



        //upload page
        'upload_vido-upload-label'=>'Téléverser votre vidéo',
        'upload_video-title-label'=>'Titre de la vidéo',
        'upload_video-title-placeholder'=>'Ma super Video',
        'upload_video-description-label'=>'Description',
        'upload_video-description-placeholder'=>'Bienvenue sur ma Video',
        'upload_video-upload-button-name'=>'Téléverser',
        'upload_video-upload-error'=>'Erreur de Téléversement',
        'upload_video-missing'=>'Video manquante',
        'upload_video-database-upload'=>'Erreur d\'insertion en base de donnée',
        'upload_video-wrong-format'=>'Mauvais type de fichier, demande type vidéo',



        //settings page
        'settings_language'=>'Langue',
        'settings_themes'=>'Theme',
        'settings_submit'=>'Enregistrer',



        //contact page
        'contact_title'=>'Me Contacter',
        'contact_discord-title'=>'Discord',
        'contact_mail-title'=>'Mail',

        //watch page
        'watch_delete'=>'Supprimer',
        'watch_download'=>'Télécharger',


        //log in page
        'login_username-label'=>'Nom d\'utilisateur',
        'login_username-placeholder'=>'adresse mail/nom de chaine',
        'login_password-label'=>'Mot de passe',
        'login_password-placeholder'=>'Votre mot de passe',
        'login_submit-button'=>'Se connecter',
        'login_missing'=>'nom d\'utilisateur ou mot de passe manquant',
        'login_wrong-credentials'=>'nom d\'utilisateur ou mot de passe erroné',
        'login_error'=>'Erreur de connection',




        //error page
        'error_default'=>'Erreur',
        'error_video-not-found'=>'404 vidéo non trouvée',
        'error_video-not-deleted'=>'406 Non Acceptable',
        'error_database-connection'=>'Erreur de connexion a la base de donnée',
    ];

    public function __construct()
    {
        static::addTranslation(static::$_items);
    }

    public static function getLang(): string
    {
        return get_class();
    }
}
new FR();