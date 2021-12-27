<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function Resources()
    {
        $resources = Resource::all();
        return view('Admin.resources', compact('resources'));
    }
    public function ResourceStore(Request $request)
    {
        $resource = Resource::create([
            'resource_title' => $request->resource_title,
            'resource_type' => $request->resource_type,
            'resource_category' => $request->serviceuser_category,
            'resource_link' => $request->resource_url,
            'resource_video' => $request->resource_link,
        ]);

        if (request()->hasFile('resource_file')) {
            $fileName = request()->file('resource_file')->getClientOriginalName();
            request()->file('resource_file')->storeAs('public/resource/files/' . $fileName, '');
            $resource->resource_file = $fileName;
            $resource->update();
        }
        return response()->json(200);
    }
    public function ResourceEdit($id)
    {

        $resource = Resource::find($id);
        return response()->json($resource, 200);
    }
    public function ResourceUpdate(Request $request)
    {
        if ($request->editresource_title != null && $request->editresource_type != null && $request->editserviceuser_category != null) {

            $Editresource = Resource::find($request->editresource_id);
            $Editresource->resource_title = $request->editresource_title;
            $Editresource->resource_type = $request->editresource_type;
            $Editresource->resource_category = $request->editserviceuser_category;
            if ($request->editresource_type == 'file') {
                if (request()->hasFile('editresource_file')) {
                    $fileName = request()->file('editresource_file')->getClientOriginalName();
                    request()->file('editresource_file')->storeAs('public/resource/files/' . $fileName, '');
                    $Editresource->resource_file = $fileName;
                    // $Editresource->update();
                }
                $Editresource->resource_link = null;
                $Editresource->resource_video = null;
            } elseif ($request->editresource_type == 'url') {
                $Editresource->resource_file = null;
                $Editresource->resource_link = $request->editresource_url;
                $Editresource->resource_video = null;
            } elseif ($request->editresource_type == 'link') {
                $Editresource->resource_file = null;
                $Editresource->resource_link = null;
                $Editresource->resource_video = $request->editresource_link;
            }

            $Editresource->update();
        }

        return response()->json(200);
    }

    public function ResourceDelete(Request $request)
    {
        Resource::find($request->getresource_id)->delete();
        return redirect()->route('admin.resources');
    }
    public function ResourceDownload($id)
    {
        $resource = Resource::where('id', $id)->firstOrFail();
        $pathToFile = storage_path('app/public/resource/files/' . $resource->resource_file);
        return response()->download($pathToFile);
    }
}
