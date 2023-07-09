<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\BaseFrontendController;
use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\ProjectCategory;

class ProjectColtroller extends BaseFrontendController
{
    public function view($slug) {
        $SEO = new \stdClass(); 
        $SEO->canonical = \URL::current();
        // Project check
        $project = Project::where('slug', $slug)->firstOrFail();
        $related_projects = Project::whereHas('categories', function ($q) use ($project) {
            return $q->whereIn('name', $project->categories->pluck('name')); 
        })
            ->where('id', '!=', $project->id)
            ->paginate(6); 
        // get previous project slug
        $previous = Project::where('id', '<', $project->id)->max('slug');

        // get next project slug
        $next = Project::where('id', '>', $project->id)->min('slug');

        $SEO->title = $project->title;
        $SEO->description = $project->description;
        $SEO->image = $project->image;

        return view('frontend.projects.show')
            ->with('item', $project)
            ->with('related_item', $related_projects)
            ->with('next', $next)
            ->with('previous', $previous)
            ->with('SEO', $SEO);
    }
}
