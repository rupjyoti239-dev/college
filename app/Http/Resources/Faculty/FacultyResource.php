<?php

namespace App\Http\Resources\Faculty;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FacultyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'designation' => $this->designation,
            'department' => $this->department->department_name,
            'subject' => $this->subject->subject_name,
            'image' => asset("/backend_images/" . $this->image),
            'joining_date' => $this->joining_date,
        ];
        
    }
}