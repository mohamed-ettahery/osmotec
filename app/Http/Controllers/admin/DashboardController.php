<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Admin;
use App\Models\Newsletter;

class DashboardController extends Controller
{
    public function index()
    {
        $count_projects = Project::count();
        $count_admins = Admin::count();
        $count_newsletters = Newsletter::count();
        $latest_projects = Project::orderByDesc("created_at")->limit(5)->get();
        return view("admin.dashboard", compact('latest_projects', 'count_projects', 'count_admins', 'count_newsletters'));
    }
}
