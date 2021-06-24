<?php

namespace Domain\Project\Actions;

use Domain\Project\DataTransferObject\ProjectData;
use Domain\Project\Models\Project;

class CreateProjectAction
{
    public function __invoke(ProjectData $projectData): Project
    {
        $project = Project::create([
            'name' => $projectData->name,
            'description' => $projectData->description
        ]);

        return $project;
    }
}
