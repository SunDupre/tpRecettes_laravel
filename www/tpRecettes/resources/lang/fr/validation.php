<?php

return [
    /*
    | ----------------------------------------------------- -------------------------
    | Validation Language Lines
    | ----------------------------------------------------- -------------------------
    |
    | Les lignes de langue suivantes contiennent les messages d’erreur par défaut utilisés par
    | la classe validateur. Certaines de ces règles ont plusieurs versions telles que
    | comme les règles de taille. N'hésitez pas à modifier chacun de ces messages ici.
    |
    */

    'accepted' => ':attribute doit être accepté.',
    'active_url' => ':attribute n’est pas une URL valide.',
    'after' => ':attribute doit être une date postérieure à :date.',
    'after_or_equal' => ':attribute doit être une date après ou égale à :date.',
    'alpha' => ':attribute ne peut contenir que des lettres.',
    'alpha_dash' => ':attribute ne peut contenir que des lettres, des chiffres, des tirets et des traits de soulignement.',
    'alpha_num' => ':attribute ne peut contenir que des lettres et des chiffres.',
    'array' => ':attribute doit être un tableau.',
    'before' => ':attribute doit être une date antérieure à :date.',
    'before_or_equal' => ':attribute doit être une date antérieure ou égale à :date.',
    'between' => [
        'numeric' => ':attribute doit être compris entre :min et :max.',
        'file' => ':attribute doit être compris entre :min et :max kilo-octets.',
        'string' => ':attribute doit être compris entre :min et :max caractères.',
        'array' => ':attribute doit être compris entre :min et :max articles.',
    ],
    'boolean' => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed' => 'La confirmation :attribute ne correspond pas.',
    'date' => ':attribute est pas une date valide.',
    'date_equals' => ':attribute doit être une date égale à :date.',
    'date_format' => ':attribute ne correspond pas au format :format.',
    'different' => 'Les :attribute et autres doivent être différents',
    'digits' => ':attribute doit être :digits chiffres.',
    'digits_between' => ':attribute doit être compris entre :min and :max chiffres.',
    'dimensions' => ':attribute a des dimensions image non valides.',
    'distinct' => 'La :attribute a une valeur en double.',
    'email' => ':attribute doit être une adresse email valide.',
    'exists' => 'Le :attribute sélectionné est invalide.',
    'file' => ':attribute doit être un fichier.',
    'filled' => 'Le champ :attribute doit avoir une valeur..',
    'gt' => [
        'numeric' => ':attribute doit être supérieur à :value.',
        'file' => ':attribute doit être supérieur à :value kilo-octets.',
        'string' => ':attribute doit être supérieur à :value caractères.',
        'array' => ':attribute doit avoir plus de :value valeur.',
    ],
    'gte' => [
        'numeric' => ':attribute doit être supérieur ou égal àl :value.',
        'file' => ':attribute doit être supérieur ou égal à :value kilobytes.',
        'string' => ':attribute doit être supérieur ou égal à :value caractères.',
        'array' => ':attribute doit avoir :value de valeur ou plus.',
    ],
    'image' => ':attribute doit être une image.',
    'in' => ':attribute sélectionné est invalide.',
    'in_array' => 'Le champ :attribute n’existe pas dans :other.',
    'integer' => ':attribute doit être un entier.',
    'ip' => ':attribute doit être une adresse IP valide.',
    'ipv4' => ':attribute doit être une adresse IPv4 valide.',
    'ipv6' => ':attribute doit être une adresse IPv6 valide.',
    'json' => ':attribute doit être une chaine JSON valide.',
    'lt' => [
        'numeric' => ':attribute doit être inférieur à :value.',
        'file' => ':attribute doit être inférieur à :value kilo-octets.',
        'string' => ':attribute doit être inférieur à :value caractères.',
        'array' => ':attribute doit avoir moins de :value éléments.',
    ],
    'lte' => [
        'numeric' => ':attribute doit être inférieur ou égal à :value.',
        'file' => ':attribute doit être inférieur ou égal à :value kilo-octets.',
        'string' => ':attribute doit être inférieur ou égal à :value caractères.',
        'array' => ':attribute ne doive pas avoir plus de :value éléments.',
    ],
    'max' => [
        'numeric' => ':attribute ne peut pas être supérieur à :max.',
        'file' => ':attribute ne peut pas être supérieur à :max kilo-octets.',
        'string' => ':attribute ne peut pas être supérieur à :max caractères.',
        'array' => ':attribute ne peut pas avoir plus de :max éléments.',
    ],
    'mimes' => ':attribute doit être un fichier de type: :values.',
    'mimetypes' => ':attribute doit être un fichier de type: :values.',
    'min' => [
        'numeric' => ':attribute doit être au moins :min.',
        'file' => ':attribute doit être au moins :min kilo-octets.',
        'string' => ':attribute doit être au moins :min caractères.',
        'array' => ':attribute doit avoir au moins :min éléments.',
    ],
    'not_in' => 'La sélection :attribute est invalide.',
    'not_regex' => 'Le format :attribute est invalide.',
    'numeric' => ':attribute doit être un nombre.',
    'present' => ':attribute doit être présent.',
    'regex' => 'Le format de :attribute est non valide.',
    'required' => 'Le champ :attribute est obligatoire.',
    'required_if' => 'Le champ :attribute est obligatoire :other est :value.',
    'required_unless' => 'Le champ :attribute est obligatoire sauf si :other est dans :values.',
    'required_with' => 'Le champ :attribute est obligatoire quant :values est present.',
    'required_with_all' => 'Le champ :attribute est obligatoire quant :values sont présentes.',
    'required_without' => 'Le champ :attribute est obligatoire quant :values ne sont pas présentes.',
    'required_without_all' => 'Le champ :attribute est obligatoire lorsque aucune des :values est vide.',
    'same' => ':attribute et :other doivent correspondre.',
    'size' => [
        'numeric' => ':attribute doit être :size.',
        'file' => ':attribute doit être :size kilo-octets.',
        'string' => ':attribute doit être :size caractères.',
        'array' => ':attribute doit contenir :size éléments.',
    ],
    'starts_with' => ':attribute  doit commencer par un des éléments suivants: :values',
    'string' => ':attribute doit être une string.',
    'timezone' => ':attribute doit être une zone valide.',
    'unique' => ':attribute a déjà été pris.',
    'uploaded' => ':attribute il ne peut être téléchargé.',
    'url' => ':attribute est un format invalide.',
    'uuid' => ':attribute doit être un UUID valide.',

    /*
    |--------------------------------------------------------------------------
    | Lignes de langage de validation personnalisées
    |------------------------------------------------------------------------------
    |
    | Ici, vous pouvez spécifier des messages de validation personnalisés pour les attributs à l'aide de la commande
    | convention "attribut.rule" pour nommer les lignes. Cela rend rapide à
    | spécifier une ligne de langue personnalisée spécifique pour une règle d'attribut donnée.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Attributs de validation personnalisés
    |------------------------------------------------------------------------------
    |
    | Les lignes de langue suivantes sont utilisées pour échanger notre espace réservé d'attribut
    | avec quelque chose de plus convivial comme "Adresse électronique" à la place
    | de "email". Cela nous aide simplement à rendre notre message plus expressif.
    |
    */

    'attributes' => [],

];
