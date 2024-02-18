<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CommercialApplication;
use Yajra\DataTables\Facades\DataTables;

class CommercialApplicationController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $commercialApplication = CommercialApplication::query();
            return DataTables::of($commercialApplication)
                ->addIndexColumn()
                ->addColumn('signature1', function ($row) {
                    return '<img src="' . $row->signature1 . '" alt="">';
                })
                ->addColumn('action', function ($row) {
                    $btn = '';
                    // if (userCan('slider-edit')) {
                    //     $btn .= view('button', ['type' => 'ajax-edit', 'route' => route('admin.sliders.edit', $row->id), 'row' => $row]);
                    // }
                    if (userCan('slider-delete')) {
                        $btn .= view('button', ['type' => 'ajax-delete', 'route' => route('admin.residential-applications.destroy', $row->id), 'row' => $row, 'src' => 'dt']);
                    }
                    return $btn;
                })
                ->rawColumns(['signature1', 'action'])
                ->make(true);
        }
        return view('admin.commercial-application.index');
    }

    public function destroy(CommercialApplication $commercialApplication)
    {
        try {
            $commercialApplication->delete();
            return response()->json(['message' => 'The information has been deleted'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Oops something went wrong, Please try again'], 500);
        }
    }
}
