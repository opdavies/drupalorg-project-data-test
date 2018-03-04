<?php

use Illuminate\Support\Collection;
use Opdavies\Drupalorg\Entity\Node;
use Opdavies\Drupalorg\Entity\Project;
use Opdavies\Drupalorg\Query\NodeQuery;

require_once __DIR__.'/vendor/autoload.php';

$projectIds = [
    107871, // Override Node Options
    2945793, // Commerce Events
    1306976, // Copyright Block
];

/** @var Collection $modules */
$modules = (new NodeQuery())
    ->setOptions(['query' => ['type' => Node::TYPE_MODULE, 'nid' => $projectIds]])
    ->execute()
    ->getContents();

$data = $modules->map(function (stdClass $item) {
    return Project::create($item);
})->map(function (Project $project) {
    return [
        'title' => $project->getTitle(),
        'downloads' => $project->getDownloads(),
        'stars' => $project->getStars(),
    ];
});

dump($data->all());
dump('Total downloads: ' . $data->sum('downloads'));
dump('Total stars: ' . $data->sum('stars'));
