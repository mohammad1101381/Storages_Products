<?php

namespace App\Http\Controllers;
use App\shop_storage_product;
use App\shop_storages;
use \Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class StoragesController extends Controller
{
    public function create() {

        return view('admin.storages.create');
    }
    public function index() {
        $users = DB::table('shop_storages')->select('id','name' , 'province_id' , 'city_id', 'zone_id', 'location' , 'status' , 'description' , 'manager', 'manager_id','meterage','created_at','updated_at')->get();
        return back();
    }

    public function demo(Request $request) {

        $validate_data = Validator::make(request()->all() , [
            'name' => 'required',
            'province_id' => 'required',
            'city_id' => 'required',
            'zone_id' => 'required',
            'location' => 'required',
            'status' => 'required',
            'description' => 'required',
            'manager' => 'required',
            'manager_id' => 'required',
            'meterage' => 'required'
        ]);

        if($validate_data->fails()) {

            return redirect()
                ->back()
                ->withErrors($validate_data)->withInput();
        }
//        return $request->all();

        shop_storages::create($request->all());
        return back();
    }
    public function table() {
        return view('admin.storages.table');
    }

    public function store() {
        // return 'Ya Ali';

        $validate_data = Validator::make(request()->all() , [
            'name' => 'required',
            'province_id' => 'required',
            'city_id' => 'required',
            'zone_id' => 'required',
            'location' => 'required',
            'pstatus' => 'required',
            'description' => 'required',
            'manager' => 'required',
            'manager_id' => 'required',
            'meterage' => 'required'
        ]);
        //    if($validate_data->fails()) {

        //        return redirect()
        //                    ->back()
        //                    ->withErrors($validate_data);
        //    }else{
        //     return $validate_data;
        //    }

        shop_storages::create([
            'name' => $validate_data['name'],
            'province_id' => $validate_data['province_id'],
            'city_id' => $validate_data['city_id'],
            'zone_id' => $validate_data['zone_id'],
            'location' => $validate_data['location'],
            'pstatus' => $validate_data['pstatus'],
            'description' => $validate_data['description'],
            'manager' => $validate_data['manager'],
            'manager_id' => $validate_data['manager_id'],
            'meterage' => $validate_data['meterage']
        ])->validated();

        return back();
    }

    public function add_product_to_storage(){
        $page_title='بروز رسانی اطلاعات انبار';
        $storages=shop_storages::all();
//         return $storages;
        return view('admin\storages\add_product_to_storage',compact('page_title','storages'));
    }
    public function createstorage()
    {
        return view('admin.storages.add');
    }

    public function add_product_to_storage_save(Request $request)
    {
    shop_storage_product::create([
       'storage_id'=>$request->storage_id,
       'product_id'=>$request->product_id,
       'quantity'=>$request->quantity,
       'description'=>$request->description,
       'status'=>$request->status
    ]);

//                return $request->all();
        return back();
    }


    public function recive() {
        $users = DB::table('shop_storage_products')->select('id','storage_id' , 'product_id' , 'quantity', 'description', 'status')->get();
        return back();
    }
    public function listproduct() {
        return view('admin.storages.list_product');

    }








    public function edit($id){
        $storage = shop_storages::findOrFail($id);

        return view('admin.storages.edit' , [
            'storage' => $storage
        ]);
    }
    public function editpost(Request $request){
//        return $request->all();

        $validate_data = Validator::make(request()->all() , [
            'name' => 'required',
            'province_id' => 'required',
            'city_id' => 'required',
            'zone_id' => 'required',
            'location' => 'required',
            'status' => 'required',
            'description' => 'required',
            'manager' => 'required',
            'manager_id' => 'required',
            'meterage' => 'required'
        ]);

        if($validate_data->fails()) {

            return redirect()
                ->back()
                ->withErrors($validate_data)->withInput();
        }
      // return $request->all();
        $storage = shop_storages::where('id',$request->id)->first()->
        update($request->all());
//        update(['name'=>$request->name,'province_id'=>$request->province_id]);
//        return $storage;
//        $storage->update($storage);
//        return $storage->all();
        return redirect()->route('storage.list');
    }






    public function editproduct($id){
        $storage_products = shop_storage_product::where('id',$id)->first();
        $storages=shop_storages::all();
//        return $storage_products    ;
//        $storage_id=$id;
        return view('admin.storages.editproducts' , compact('storages','storage_products'));

    }
    public function editproductpost(Request $request){
//        return $request->all();

        $validate_data = Validator::make(request()->all() , [
            'storage_id' => 'required',
            'product_id' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            'status' => 'required'

        ]);


        if($validate_data->fails()) {

            return redirect()
                ->back()
                ->withErrors($validate_data)->withInput();
        }
//         return $request->all();
        $storage = shop_storage_product::where('id',$request->id)->first()->
        update($request->all());
//        update(['name'=>$request->name,'province_id'=>$request->province_id]);
//        return $storage;
//        $storage->update($storage);
//        return $storage->all();
        return redirect()->route('product.storage.list');
    }
}
