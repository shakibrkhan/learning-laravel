<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin-panel');
    }

    public function showPages()
    {
        return view('admin.admin-pages');
    }

    public function selectPages()
    {
        $pages = DB::table('pages')->where('archive',0)->get();
        $count = DB::table('pages')->where('archive',0)->count();
        $countPublished = DB::table('pages')->where('publish_status',1)->where('archive',0)->count();
        $countUnpublished = DB::table('pages')->where('publish_status',0)->where('archive',0)->count();
        $countArchive = DB::table('pages')->where('archive',1)->count();
        return view('admin.admin-page-list', compact('pages', 'count', 'countPublished', 'countUnpublished', 'countArchive'));
    }
}