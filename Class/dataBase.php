<?php
$db = [
        'formations' => [
            [   'annee'     =>'2020-2021',
                'diplome'   =>'Graduate Développeur Full-Stack',
                'firme'     =>'STUDI DIGITAL CAMPUS',
                'lieu'      =>'Remote 100%'
            ],
            [   'annee'     =>'1990-1992',
                'diplome'   =>'DUT Informatique',
                'firme'     =>'IUT PICARDIE JULES VERNE',
                'lieu'      =>'Amiens dpt-Somme'
            ],
            [   'annee'     =>'1988-1990',
                'diplome'   =>'BACCALAUREAT -H- informatique',
                'firme'     =>'LYCEE SAINT-PIERRE',
                'lieu'      =>'Fourmies Dpt-Nord'
            ],
            [   'annee'     =>'1986-1988',
                'diplome'   =>'BEP comptabilité',
                'firme'     =>'LYCEE PIERRE FOREST',
                'lieu'      =>'Maubeuge Dpt-Nord'
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
                        'note'      =>'50'
                    ]
                ]
            ],

        'experiences' =>  [
            [   'annee'     =>  '2008-2020',
                'firme'     =>  'Hypermarché Géant CASINO',
                'lieu'      =>  'Albertville Dpt-Savoie.',
                'poste'     =>  'Manager produits frais'
            ],
            [   'annee'     =>  '2005-2008',
                'firme'     =>  'ALDI marché',
                'lieu'      =>  'Hautmont Dpt-Nord.',
                'poste'     =>  'Responsable magasin'
            ],
            [   'annee'     =>  '2000-2005',
                'firme'     =>  'Habitat Du Nord immobilier',
                'lieu'      =>  'Maubeuge Dpt-Nord.',
                'poste'     =>  'Chargé d\'ordonnancement'
            ],
            [   'annee'     =>  '1995-2000',
                'firme'     =>  'QUICK restaurant',
                'lieu'      =>  'Hautmont Dpt-Nord.',
                'poste'     =>  'Manager'
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