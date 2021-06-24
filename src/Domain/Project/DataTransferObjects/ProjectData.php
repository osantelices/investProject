<?php

namespace Domain\Project\DataTransferObject;

use App\Project\Requests\ProjectFormRequest;
use Spatie\DataTransferObject\DataTransferObject;

class ProjectData extends DataTransferObject
{
    public string $name;
    public string $description;

    public static function fromRequest(ProjectFormRequest $request): ProjectData
    {
        return new self([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);
    }
}
