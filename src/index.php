<?php
addProvider('BtyBugHook\NewStudio\Providers\ModuleServiceProvider');

function get_studio(int $id){
    $studio = \BtyBugHook\NewStudio\Models\NewStudios::find($id);

    return ($studio) ?? null;
}