<?php
$db = [
        'icons' => [
            [  'formations'    =>'fas fa-user-graduate',
               'technos'       =>'fab fa-dev',
               'experiences'   =>'fas fa-user-tie',
               'vie-privee'    =>'fas fa-home'
            ]
        ],
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
                [   [   'title'     =>'__BACK__',
                        'icon'      =>'fab fa-php',
                        'name'      =>'PHP',
                        'level'     =>'Bases assmilées + POO + MVC.',
                        'note'      =>'70'
                    ],
                    [   'icon'      =>'fas fa-database',
                        'name'      =>'MySQL',
                        'level'     =>'Bases assimilées + CRUD.',
                        'note'      =>'50'
                    ]
                ],
                'front' =>
                [   [   'title'     =>'__FRONT__',
                        'icon'      =>'fab fa-html5',
                        'name'      =>'HTML',
                        'level'     =>'Assimilé.',
                        'note'      =>'99'
                    ],
                    [   'icon'      =>'fab fa-css3-alt',
                        'name'      =>'CSS',
                        'level'     =>'Assimilé.',
                        'note'      =>'99'
                    ],
                    [  'icon'      =>'fab fa-js',
                        'name'      =>'JS',
                        'level'     =>'Bases assimilées.',
                        'note'      =>'60'
                    ]
                ],    
            'frameworks & Librairies' =>
                [   [   'title'     =>'__FRAMEWORKS & LIBRAIRIES__',
                        'icon'      =>'fab fa-symfony',
                        'name'      =>'SYMFONY',
                        'level'     =>'En cours...',
                        'note'      =>'0'
                    ],
                    [   'icon'      =>'fab fa-react',
                        'name'      =>'REACT + NODEJS',
                        'level'     =>'Bientôt...',
                        'note'      =>'0'
                    ],
                    [   'icon'      =>'fab fa-bootstrap',
                        'name'      =>'BOOTSTRAP',
                        'level'     =>'Bases assimilées.',
                        'note'      =>'70'
                    ],
                    [   'icon'      =>'fab fa-sass',
                        'name'      =>'SASS',
                        'level'     =>'Bases assimilées.',
                        'note'      =>'60'
                    ]
                ],
            'gestionnaire versions' =>
                [   [   'title'     =>'__GESTIONNAIRE DE VERSIONS__',
                        'icon'      =>'fab fa-github',
                        'name'      =>'GITHUB',
                        'level'     =>'Bases assimilées.',
                        'note'      =>'50'
                    ]
                ],
            'CMS' =>
                [   [   'title'     =>'__CMS__',
                        'icon'      =>'fab fa-wordpress',
                        'name'      =>'WORDPRESS',
                        'level'     =>'Bases assimilées.',
                        'note'      =>'60',
                    ]
                ]
            ],

        'experiences' =>  [
            [   'annee'     =>  '2008-2020',
                'poste'     =>  'Manager produits frais',
                'firme'     =>  'Hypermarché Géant CASINO',
                'lieu'      =>  'Albertville Dpt-Savoie.'
            ],
            [   'annee'     =>  '2005-2008',
                'poste'     =>  'Responsable magasin',
                'firme'     =>  'ALDI marché',
                'lieu'      =>  'Hautmont Dpt-Nord.'
            ],
            [   'annee'     =>  '2000-2005',
                'poste'     =>  'Chargé d\'ordonnancement',
                'firme'     =>  'Habitat Du Nord immobilier',
                'lieu'      =>  'Maubeuge Dpt-Nord.'
            ],
            [   'annee'     =>  '1995-2000',
                'poste'     =>  'Manager',
                'firme'     =>  'QUICK restaurant',
                'lieu'      =>  'Hautmont Dpt-Nord.'
            ]
        ],
        'vie-privee' =>  [
            [   'icon'      => 'fas fa-users',
                'libelle'   => 'Marié, père de 4 enfants et bientot grand-père !!!'
            ],
            [   'icon'      => 'fas fa-music',
                'libelle'   => 'Passionné de musiques, tous styles et gratte occasionnellement.',
            ],
            [   'icon'      => 'fas fa-running',
                'libelle'   => 'Pratique hebdomadaire de la course à pied, trail/rando.'
            ],
            [   'icon'      => 'fas fa-cubes',
                'libelle'   => 'Badminton en club, ski l\'hiver et Rubik\'s cube!'
            ]
        ],
        'liens' =>  [
            [   'icon'      => 'fab fa-github',
                'link'      => 'https://github.com/fransoa2103'
            ],
            [   'icon'      => 'fas fa-user-check',
                'link'      => 'https://fransoa2103.github.io/portfolio/',
            ],
            [   'icon'      => 'fab fa-linkedin',
                'link'      => 'https://www.linkedin.com/in/fran%C3%A7ois-couv%C3%A9-bonnaire-144bb3212/'
            ]
        ]
    ];
?>