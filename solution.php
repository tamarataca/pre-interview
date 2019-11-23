<?php
$candidate = ['properties'=>['driver license'=>true,'bike'=>true]];

$companies = [
    [
        'requirement' => ['apartment','house','property insurance'],
        'company' => 'A'
    ],
    [
        'requirement' => ['5 door car','4 door car','driver license','car insurance'],
        'company' => 'B'
    ],
    [
        'requirement' => ['social securit number','work permit'],
        'company' => 'C'
    ],
    [
        'requirement' => ['apartment','flat','house'],
        'company' => 'D'
    ],
    [
        'requirement' => ['driver license','car'],
        'company' => 'E'
    ],
    [
        'requirement' => ['scooter','bike','motorcycle','driver license','motorcycle insurance'],
        'company' => 'F'
    ],
    [
        'requirement' => ['massage qualification','liability insurance'],
        'company' => 'G'
    ],
    [
        'requirement' => ['storage place','garage'],
        'company' => 'H'
    ],
    [
        'requirement' => [''],
        'company' => 'J'
    ],
    [
        'requirement' => ['PayPal account'],
        'company' => 'K'
    ]
];
$match = [];
foreach ($companies as $company) {
    foreach ($company['requirement'] as $criteria) {
        if (!array_key_exists($criteria, $candidate['properties'])) {
            continue 2;
        }
    }
    $match = array_merge($match, $company['companies']);
}

$match = array_unique($match);

var_dump($match);