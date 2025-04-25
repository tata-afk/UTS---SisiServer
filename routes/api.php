<?php

use App\Http\Resources\CategoryResource;
use App\Http\Resources\ItemResource;
use App\Http\Resources\ItemSummaryResource;
use App\Http\Resources\SupplierResource;
use App\Models\Category;
use App\Models\Item;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

// Category
Route::post('/category', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'description' => 'string',
        'created_by' => 'integer',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Validasi gagal',
            'errors' => $validator->errors(),
        ], 422); // HTTP 422 Unprocessable Entity
    }

    $category = Category::create($validator->validated());

    return response()->json([
        'success' => true,
        'message' => 'Kategori berhasil dibuat',
        'data' => new CategoryResource($category),
    ], 201); // HTTP 201 Created
});

Route::get('/categories', function () {
    return new CategoryResource(Category::all());
});

Route::get('/category/{id}', function ($id){
    return new CategoryResource(Category::findOrFail($id));
});

// Suppliers
Route::post('/supplier', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'contact_info' => 'string',
        'created_by' => 'integer',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Validasi gagal',
            'errors' => $validator->errors(),
        ], 422); // HTTP 422 Unprocessable Entity
    }

    $supplier = Supplier::create($validator->validated());

    return response()->json([
        'success' => true,
        'message' => 'Supplier berhasil dibuat',
        'data' => new SupplierResource($supplier),
    ], 201); // HTTP 201 Created
});


Route::get('/suppliers', function () {
    return new SupplierResource(Supplier::all());
});

Route::get('/supplier/{id}', function ($id){
    return new SupplierResource(Supplier::findOrFail($id));
});


// Item
Route::post('/item', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'description' => 'string',
        'price' => 'numeric',
        'quantity' => 'integer',
        'category_id' => 'integer',
        'supplier_id' => 'integer',
        'created_by' => 'integer',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Validasi gagal',
            'errors' => $validator->errors(),
        ], 422); // HTTP 422 Unprocessable Entity
    }

    $item = Item::create($validator->validated());

    return response()->json([
        'success' => true,
        'message' => 'item berhasil dibuat',
        'data' => new ItemResource($item),
    ], 201); // HTTP 201 Created
});

Route::get('/items', function () {
    return new ItemResource(Item::all());
});

Route::get('/item/{id}', function ($id){
    return new ItemResource(Item::findOrFail($id));
});

Route::get('/item_summary', function (){
    return new ItemSummaryResource(null);
});

Route::get('/item_warning', function (){
    return new ItemResource(Item::where('quantity', '<', 5)->get());
}); 
