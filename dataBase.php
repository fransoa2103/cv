<?php
$db = [
        'formations' => [
            [   'annee'     =>'2020-2021',
                'diplome'   =>'Graduate Développeur Full-Stack',
                'lieu'      =>'DIGITAL CAMPUS - STUDI remote 100%'
            ],
            [   'annee'     =>'1990-1992',
                'diplome'   =>'DUT Informatique',
                'lieu'      =>'IUT PICARDIE JULES VERNE AMIENS - Haut de France'
            ],
            [   'annee'     =>'1988-1990',
                'diplome'   =>'Baccalauréat H informatique 1990',
                'lieu'      =>'LYCEE SAINT-PIERRE FOURMIES - Haut de France'
            ],
            [   'annee'     =>'1986-1988',
                'diplome'   =>'CAP et BEP comptabilité',
                'lieu'      =>'LYCEE PIERRE FOREST MAUBEUGE - Haut de France'
            ]               
        ],

        'technos' => [
                'back' =>
                [
                        [   'name'      =>'PHP',
                        'icon'      =>'fab fa-php',
                        'level'     =>'Bases assmilées + POO + MVC.',
                        'note'      =>'75'
                    ],
                    [   'name'      =>'MySQL',
                    'icon'      =>'fas fa-database',
                    'level'     =>'Bases assimilées + CRUD.',
                    'note'      =>'50'
                    ]
                ],
                'front' =>
                [
                    [   'name'      =>'HTML',
                        'icon'      =>'fab fa-html5',
                        'level'     =>'Assimilé.',
                        'note'      =>'100'
                    ],
                    [   'name'      =>'CSS',
                        'icon'      =>'fab fa-css3-alt',
                        'level'     =>'Assimilé.',
                        'note'      =>'100'
                    ],
                    [   'name'      =>'SASS',
                        'icon'      =>'fab fa-sass',
                        'level'     =>'Bases assimilées.',
                        'note'      =>'50'
                    ],
                    [   'name'      =>'JS',
                        'icon'      =>'fab fa-js',
                        'level'     =>'Bases assimilées.',
                        'note'      =>'50'
                    ]
                ],    
            'frameworks' =>
                [
                    [   'name'      =>'SYMFONY',
                        'icon'      =>'fab fa-symfony',
                        'level'     =>'Bientôt...',
                        'note'      =>'0'
                    ],
                    [   'name'      =>'REACT',
                        'icon'      =>'fab fa-react',
                        'level'     =>'Plus tard...',
                        'note'      =>'0'
                    ],
                    [   'name'      =>'BOOTSTRAP',
                        'icon'      =>'fab fa-bootstrap',
                        'level'     =>'Bases assimilées.',
                        'note'      =>'75'
                    ]
                ],
            'gestionnaire versions' =>
                [
                    [   'name'      =>'GITHUB',
                        'icon'      =>'fab fa-github',
                        'level'     =>'Bases assimilées.',
                        'note'      =>'50'
                    ]
                ],
            'CMS' =>
                [
                    [   'name'      =>'WORDPRESS',
                        'icon'      =>'fab fa-wordpress',
                        'level'     =>'Bases assimilées.',
                        'note'      =>'75'
                    ]
                ]
            ],

        'experiences' =>  [
            [   'annee'     =>  '2008-2020',
                'lieu'      =>  'Hypermarché Géant CASINO Albertville Dpt-Savoie.',
                'poste'     =>  'Manager secteur produits frais'
            ],
            [   'annee'     =>  '2005-2008',
                'lieu'      =>  'ALDI marché Hautmont Dpt-Nord.',
                'poste'     =>  'Responsable magasin'
            ],
            [   'annee'     =>  '2000-2005',
                'lieu'      =>  'Habitat Du Nord immobilier Maubeuge Dpt-Nord.',
                'poste'     =>  'Chargé d\'ordonnancement'
            ],
            [   'annee'     =>  '1995-2000',
                'lieu'      =>  'QUICK Hautmont Dpt-Nord.',
                'poste'     =>  'Manager restaurant'
            ]
        ],
        'vie-privee' =>  [
            [   'icon'      => 'fas fa-users',
                'libelle'   => 'Marié, père de 4 enfants et bientot grand-père !!!'
            ],
            [   'icon'      => 'fas fa-music',
                'libelle'   => 'Passionné de musiques, tous styles et pratique la guitare occasionnellement.',
            ],
            [   'icon'      => 'fas fa-running',
                'libelle'   => 'Pratique hebdomadaire de la cap, du trail, du badminton en club et ski l\'hiver!'
            ]
        ]
    ];

?>