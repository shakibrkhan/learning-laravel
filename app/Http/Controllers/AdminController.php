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

    public function deletePage(Request $request, $id)
    {
        $pageID = $id;
        // $userData = DB::table('pages')->where('id', '=', $pageID)->first();
        // $imageFileName = $userData->image_file_name;
        // $filePath = public_path() . '/uploads' . '/' . $imageFileName;
        // File::delete($filePath);

        DB::table('pages')->where('id', '=', $pageID)->delete();
        session()->flash('del-msg', 'User deleted successfully!');
        return redirect()->back();
    }

    public function editPage(Request $request, $id)
    {
        $singlePage = DB::table('pages')->where('id',$id)->get();
        return view('admin.edit-page', compact('singlePage'));
    }

    public function updatePage(Request $request)
    {
        $pageId = $request->input('pageid');
        $pageTitle = $request->input('pageTitle');

        $insertData = [
            'title'   => $pageTitle,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('pages')->where('id', $pageId)->update($insertData);
        session()->flash('msg', 'Page updated successfully!');
        return redirect()->route('page_list');
    }

    public function updateStatus(Request $request)
    {
        $pageId = $request->input('pageid');
        $pageStatus = $request->input('pageStatus');

        if ( $pageStatus == 1 ) {
            $insertData = [
                'publish_status'   => 0,
                'created_at' => now(),
                'updated_at' => now()
            ];
            DB::table('pages')->where('id', $pageId)->update($insertData);
        } elseif ( $pageStatus == 0 ) {
            $insertData = [
                'publish_status'   => 1,
                'created_at' => now(),
                'updated_at' => now()
            ];
            DB::table('pages')->where('id', $pageId)->update($insertData);
        }
        
        session()->flash('msg', 'Page Status updated successfully!');
        return redirect()->route('page_list');
    }

}