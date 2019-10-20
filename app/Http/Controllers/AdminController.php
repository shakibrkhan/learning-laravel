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

    // Update operation with image update if image needs to update
    /*public function updateProduct(Request $request, $id)
    {
        $productName = $request->input('productName');
        $description = $request->input('description');
        $categoryId = $request->input('categoryId');
        $costingPrice = $request->input('costingPrice');
        $salePrice = $request->input('salePrice');
        $productImageFile = $request->file('productImage');

        if ( is_null($productImageFile) ) {
            $v = Validator::make($request->all(), [
                'productName' => 'required',
                'costingPrice' => 'required',
                'salePrice' => 'required',
            ]);

            if ( $v->fails() )
            {
                return redirect()->back()->withErrors($v->errors());
            }

            $insertData = [
                'category_id'   => $categoryId,
                'name'          => $productName,
                'description'   => $description,
                'costing_price' => $costingPrice,
                'sale_price'    => $salePrice,
                'created_at' => now(),
                'updated_at' => now()
            ];
            DB::table('products')->where('id', $id)->update($insertData);
        }
        else {
            $v = Validator::make($request->all(), [
                'productName' => 'required',
                'costingPrice' => 'required',
                'salePrice' => 'required',
                'productImage' => 'mimes:jpeg,bmp,png|max:5120',
            ]);

            if ( $v->fails() )
            {
                return redirect()->back()->withErrors($v->errors());
            }

            //Get image file name of this product
            $productData = DB::table('products')->where('id', '=', $id)->first();
            $imagefileName = $productData->image_file_name;

            //Move Uploaded File
            $destinationPath = 'uploads';
            $productImageFile->move($destinationPath, $imagefileName);        

            $insertData = [
                'category_id'   => $categoryId,
                'name'          => $productName,
                'description'   => $description,
                'costing_price' => $costingPrice,
                'sale_price'    => $salePrice,
                'image_file_name' => $imagefileName,
                'created_at' => now(),
                'updated_at' => now()
            ];
            DB::table('products')->where('id', $id)->update($insertData);
        }

        session()->flash('msg', 'Product updated successfully!');
        return redirect()->route('product_list');
    }*/



}