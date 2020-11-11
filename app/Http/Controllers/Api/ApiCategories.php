<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\Response;

class ApiCategories extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        try {
            $product = categories::paginate(2);
            // dd($product);
            return response()->json($product);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'code'   => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message'=> $e->getMessage(),
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request,[
                'name' => 'required'
            ],[
                'name.required' => 'vui lòng nhập tên danh mục!'
            ]
        );
        $data = Categories::updateOrCreate([
            'name' => $request->name,
            'image' => $request->image,
        ]);
        return response()->json($data);
        } catch (\Throwable $th) {
            return response()->json($th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Categories::find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       try {
    
        $validatedData = $request->validate([
            'name' => 'required|unique:categories',
        ],[
            'name.required' => 'Vui lòng nhập tên danh mục!',
            'name.unique'   => 'Tên danh mục đã tồn tại!'
        ]);
                $data = Categories::updateOrCreate([
                    'id' => $id
                ],[
                    'name' => $request->name,
                    'image' => $request->image,
                ]);
                return response()->json([
                    'status' => true,
                    'data' => $data,
                    'message' => $validatedData,
                ]);
       } catch (\Throwable $th) {
        return response()->json($th);
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    try {
        $data = Categories::destroy($id);
        return response()->json($data);
    } catch (\Throwable $th) {
        return response()->json($th);

    }        
    }
}
