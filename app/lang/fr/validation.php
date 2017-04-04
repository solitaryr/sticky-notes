<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| such as the size rules. Feel free to tweak each of these messages.
	|
	*/

	"accepted"         => ":attribute doit être accepté.",
	"active_url"       => ":attribute est pas une URL valide.",
	"after"            => ":attribute doit être une date après :date.",
	"alpha"            => ":attribute ne peut contenir que des lettres.",
	"alpha_dash"       => ":attribute ne peut contenir que des lettres, des chiffres et des tirets.",
	"alpha_num"        => ":attribute ne peut contenir que des lettres et des chiffres.",
	"array"            => ":attribute doit être un tableau.",
	"auth"             => "Vous devez être connecté pour effectuer cette action.",
	"before"           => ":attribute doit être une date avant :date.",
	"between"          => array(
		"numeric"   	   => ":attribute doit être comprise entre :min - :max.",
		"file"      	   => ":attribute doit être comprise entre :min - :max kiloctets.",
		"string"    	   => ":attribute doit être comprise entre :min - :max caractères.",
		"array"     	   => ":attribute doit avoir entre :min - :max items.",
	),
	"captcha"          => "La vérification humaine a échoué.",
	"confirmed"        => ":attribute confirmation ne correspond pas.",
	"date"             => ":attribute est pas une date valide.",
	"date_format"      => ":attribute ne correspond pas au format :format.",
	"different"        => ":attribute et :other doivent être différents.",
	"digits"           => ":attribute doit être :digits chiffres.",
	"digits_between"   => ":attribute doit être comprise entre :min et :max chiffres.",
	"email"            => ":attribute format est invalide.",
	"exists"           => "La sélection :attribute est invalide.",
	"image"            => ":attribute doit être une image.",
	"in"               => "La sélection :attribute est invalide.",
	"integer"          => ":attribute doit être un entier.",
	"ip"               => ":attribute doit être une adresse IP valide.",
	"max"              => array(
		"numeric"      => ":attribute ne peut pas être supérieure à :max.",
		"file"         => ":attribute ne peut pas être supérieure à :max kilooctets.",
		"string"       => ":attribute ne peut pas être supérieure à :max caractères.",
		"array"        => ":attribute ne peut pas avoir plus de :max items.",
	),
	"mbmax"            => ":attribute ne peut pas être supérieure à :max octets.",
	"mimes"            => ":attribute doit être un fichier de type: :values.",
	"min"              => array(
		"numeric"      => ":attribute doit être au moins :min.",
		"file"         => ":attribute doit être au moins :min kilooctets.",
		"string"       => ":attribute doit être au moins :min caractères.",
		"array"        => ":attribute doit avoir au moins :min items.",
	),
	"not_in"           => "La sélection :attribute est invalide.",
	"numeric"          => ":attribute doit être un nombre.",
	"regex"            => ":attribute format est invalide.",
	"required"         => ":attribute champ est requis.",
	"required_if"      => ":attribute champ est requis lorsque :other est :value.",
	"required_with"    => ":attribute champ est requis lorsque :values est present.",
	"required_without" => ":attribute champ est requis lorsque :values n'est present pas.",
	"same"             => ":attribute et :other doit correspondre.",
	"size"             => array(
		"numeric"      => ":attribute doit être :size.",
		"file"         => ":attribute doit être :size kilooctets.",
		"string"       => ":attribute doit être :size caractères.",
		"array"        => ":attribute doit contenir :size items.",
	),
	"unique"           => ":attribute a déjà été pris.",
	"url"              => ":attribute format est invalide.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	"custom" => array(

		"php_key"         => array(
			"required_if" => "Le champ de clé d'accès est nécessaire si le filtre Honeypot est activée.",
		),

		"php_days"        => array(
			"required_if" => "Le champ de seuil d'âge est requise si le filtre de Honeypot est activée.",
			"integer"     => "Le seuil d'âge doit être un entier.",
			"between"     => "Le seuil d'âge doit se situer entre :min - :max.",
		),

		"php_score"       => array(
			"required_if" => "Le champ d'indice de menace est nécessaire si le filtre de honeypot est activée.",
			"integer"     => "Le score de la menace doit être un entier.",
			"between"     => "Le score de la menace doit être comprise entre :min - :max.",
		),

		"php_type"        => array(
			"required_if" => "Le champ de filtre visiteur est nécessaire si le filtre de honeypot est activée.",
			"integer"     => "Le filtre visiteur doit être un entier.",
			"between"     => "Le filtre visiteur doit être comprise entre :min - :max.",
		),

		"flood_threshold" => array(
			"required_if" => "Le champ de seuil de flux est nécessaire si le filtre d'inondation est activée.",
			"integer"     => "Le seuil de flux doit être un entier.",
			"between"     => "Le seuil de flux doit être comprise entre :min - :max.",
		),

		"akismet_key"     => array(
			"required_if" => "Le champ clé Akismet est nécessaire si le filtre Akismet est activé.",
			"akismet_key" => "La clé API Akismet saisie est invalide.",
		),

		"ldap_server"     => array(
			"required_if" => "Le domaine du serveur LDAP est nécessaire si la méthode LDAP est utilisé.",
		),

		"ldap_base_dn"    => array(
			"required_if" => "Le champ DN de base LDAP est nécessaire si la méthode LDAP est utilisé.",
		),

		"ldap_uid"        => array(
			"required_if" => "Le champ uid LDAP est nécessaire si la méthode LDAP est utilisé.",
		),

		"ldap_admin"      => array(
			"required_if" => "Le champ de groupe d'administration LDAP est nécessaire si la méthode LDAP est utilisé.",
		),

	),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	"attributes" => array(),

);
